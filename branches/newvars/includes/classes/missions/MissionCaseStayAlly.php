<?php

/**
 *  2Moons
 *  Copyright (C) 2012 Jan
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package 2Moons
 * @author Jan <info@2moons.cc>
 * @copyright 2006 Perberos <ugamela@perberos.com.ar> (UGamela)
 * @copyright 2008 Chlorel (XNova)
 * @copyright 2009 Lucky (XGProyecto)
 * @copyright 2012 Jan <info@2moons.cc> (2Moons)
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.7.0 (2012-05-31)
 * @info $Id$
 * @link http://code.google.com/p/2moons/
 */

class MissionCaseStayAlly extends MissionFunctions
{
	function __construct($Fleet)
	{
		$this->_fleet	= $Fleet;
	}
	
	function TargetEvent()
	{	
		global $LANG;
		$StartPlanet      = $GLOBALS['DATABASE']->getFirstRow("SELECT name FROM ".PLANETS." WHERE `id` = '". $this->_fleet['fleet_start_id'] ."';");
		$StartName        = $StartPlanet['name'];
		$StartOwner       = $this->_fleet['fleet_owner'];

		$TargetPlanet     = $GLOBALS['DATABASE']->getFirstRow("SELECT name FROM ".PLANETS." WHERE `id` = '". $this->_fleet['fleet_end_id'] ."';");
		$TargetName       = $TargetPlanet['name'];
		$TargetOwner      = $this->_fleet['fleet_target_owner'];
			
		$LNG			  = $LANG->GetUserLang($this->_fleet['fleet_owner']);	
		
		$Message = sprintf($LNG['sys_tran_mess_owner'], $TargetName, GetTargetAdressLink($this->_fleet, ''), $this->_fleet['fleet_resource_metal'], $LNG['tech'][901], $this->_fleet['fleet_resource_crystal'], $LNG['tech'][902], $this->_fleet['fleet_resource_deuterium'], $LNG['tech'][903] );
		SendSimpleMessage ($StartOwner, 0, $this->_fleet['fleet_start_time'], 5, $LNG['sys_mess_tower'], $LNG['sys_mess_transport'], $Message);

		$Message = sprintf($LNG['sys_tran_mess_user'], $StartName, GetStartAdressLink($this->_fleet, ''), $TargetName, GetTargetAdressLink($this->_fleet, ''), $this->_fleet['fleet_resource_metal'], $LNG['tech'][901], $this->_fleet['fleet_resource_crystal'], $LNG['tech'][902], $this->_fleet['fleet_resource_deuterium'], $LNG['tech'][903]);
		SendSimpleMessage ($TargetOwner, 0, $this->_fleet['fleet_start_time'], 5, $LNG['sys_mess_tower'], $LNG['sys_mess_transport'], $Message);

		$this->setState(FLEET_HOLD);
		$this->SaveFleet();
	}
	
	function EndStayEvent()
	{
		$this->setState(FLEET_RETURN);
		$this->SaveFleet();
	}
	
	function ReturnEvent()
	{
		global $LANG;
		
		$LNG		= $LANG->GetUserLang($this->_fleet['fleet_owner']);
		
		$StartName	= $GLOBALS['DATABASE']->countquery("SELECT name FROM ".PLANETS." WHERE id = ".$this->_fleet['fleet_end_id'].";");
	
		$Message	= sprintf ($LNG['sys_tran_mess_back'], $StartName, GetStartAdressLink($this->_fleet, ''));
		SendSimpleMessage($this->_fleet['fleet_owner'], 0, $this->_fleet['fleet_end_time'], 5, $LNG['sys_mess_tower'], $LNG['sys_mess_fleetback'], $Message);

		$this->RestoreFleet();
	}
}