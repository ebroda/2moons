<?php

##############################################################################
# *                                                                          #
# * 2MOONS                                                                   #
# *                                                                          #
# * @copyright Copyright (C) 2010 By ShadoX from titanspace.de               #
# * @copyright Copyright (C) 2008 - 2009 By lucky from Xtreme-gameZ.com.ar	 #
# *                                                                          #
# *	                                                                         #
# *  This program is free software: you can redistribute it and/or modify    #
# *  it under the terms of the GNU General Public License as published by    #
# *  the Free Software Foundation, either version 3 of the License, or       #
# *  (at your option) any later version.                                     #
# *	                                                                         #
# *  This program is distributed in the hope that it will be useful,         #
# *  but WITHOUT ANY WARRANTY; without even the implied warranty of          #
# *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           #
# *  GNU General Public License for more details.                            #
# *                                                                          #
##############################################################################

if ( defined('INSIDE'))
{

	$resource = array(
	  1 => "metal_mine",
	  2 => "crystal_mine",
	  3 => "deuterium_sintetizer",
	  4 => "solar_plant",
	  6 => "university",
	 12 => "fusion_plant",
	 14 => "robot_factory",
	 15 => "nano_factory",
	 21 => "hangar",
	 22 => "metal_store",
	 23 => "crystal_store",
	 24 => "deuterium_store",
	 31 => "laboratory",
	 33 => "terraformer",
	 34 => "ally_deposit",
	 41 => "mondbasis",
	 42 => "phalanx",
	 43 => "sprungtor",
	 44 => "silo",

	106 => "spy_tech",
	108 => "computer_tech",
	109 => "military_tech",
	110 => "defence_tech",
	111 => "shield_tech",
	113 => "energy_tech",
	114 => "hyperspace_tech",
	115 => "combustion_tech",
	117 => "impulse_motor_tech",
	118 => "hyperspace_motor_tech",
	120 => "laser_tech",
	121 => "ionic_tech",
	122 => "buster_tech",
	123 => "intergalactic_tech",
	124 => "expedition_tech",
	131 => "metal_proc_tech",
	132 => "crystal_proc_tech",
	133 => "deuterium_proc_tech",
	199 => "graviton_tech",

	202 => "small_ship_cargo",
	203 => "big_ship_cargo",
	204 => "light_hunter",
	205 => "heavy_hunter",
	206 => "crusher",
	207 => "battle_ship",
	208 => "colonizer",
	209 => "recycler",
	210 => "spy_sonde",
	211 => "bomber_ship",
	212 => "solar_satelit",
	213 => "destructor",
	214 => "dearth_star",
	215 => "battleship",
    216 => "lune_noir",
	217 => "ev_transporter",
	218 => "star_crasher",
	219 => "giga_recykler",
	220 => "dm_ship",
	221 => "thriller",	
	222 => "bahamut",	
	223 => "starcatcher",
	224 => "ifrit",
	225 => "shiva",
	226 => "catoblepas",
	227 => "oxion",
	228 => "odin",
	
	401 => "misil_launcher",
	402 => "small_laser",
	403 => "big_laser",
	404 => "gauss_canyon",
	405 => "ionic_canyon",
	406 => "buster_canyon",
	407 => "small_protection_shield",
	408 => "big_protection_shield",
	409 => "planet_protector",
	410 => "graviton_canyon",
	411 => "orbital_station",	
	
	502 => "interceptor_misil",
	503 => "interplanetary_misil",

	601 => "rpg_geologue",
	602 => "rpg_amiral",
	603 => "rpg_ingenieur",
	604 => "rpg_technocrate",
	605 => "rpg_constructeur",
	606 => "rpg_scientifique",
	607 => "rpg_stockeur",
	608 => "rpg_defenseur",
	609 => "rpg_bunker",
	610 => "rpg_espion",
	611 => "rpg_commandant",
	612 => "rpg_destructeur",
	613 => "rpg_general",
	614 => "rpg_raideur",
	615 => "rpg_empereur",
	
	700 => "dm_attack",
	701 => "dm_defensive",
	702 => "dm_buildtime",
	703 => "dm_resource",
	704 => "dm_energie",
	705 => "dm_researchtime",
	706 => "dm_fleettime",
	);

	$requeriments = array(
		 6  => array(  14 =>  20, 31  =>  22, 15 => 4, 108 => 12, 123 => 3),
		 12 => array(   3 =>   5, 113 =>   3),
		 15 => array(  14 =>  10, 108 =>  10),
		 21 => array(  14 =>   2),
		 33 => array(  15 =>   1, 113 =>  12),

		 42 => array(  41 =>   1),
		 43 => array(  41 =>   1, 114 =>   7),
		 44 => array(  21 =>   1),

		106 => array(  31 =>   3),
		108 => array(  31 =>   1),
		109 => array(  31 =>   4),
		110 => array( 113 =>   3,  31 =>   6),
		111 => array(  31 =>   2),
		113 => array(  31 =>   1),
		114 => array( 113 =>   5, 110 =>   5,  31 =>   7),
		115 => array( 113 =>   1,  31 =>   1),
		117 => array( 113 =>   1,  31 =>   2),
		118 => array( 114 =>   3,  31 =>   7),
		120 => array(  31 =>   1, 113 =>   2),
		121 => array(  31 =>   4, 120 =>   5, 113 =>   4),
		122 => array(  31 =>   5, 113 =>   8, 120 =>  10, 121 =>   5),
		123 => array(  31 =>  10, 108 =>   8, 114 =>   8),
		124 => array( 106 =>   3, 117 =>   3, 31 =>   3),
		131 => array(  31 =>   8, 113 =>   5),
		132 => array(  31 =>   8, 113 =>   5),
		133 => array(  31 =>   8, 113 =>   5),
		199 => array(  31 =>  12),

		202 => array(  21 =>   2, 115 =>   2),
		203 => array(  21 =>   4, 115 =>   6),
		204 => array(  21 =>   1, 115 =>   1),
		205 => array(  21 =>   3, 111 =>   2, 117 =>   2),
		206 => array(  21 =>   5, 117 =>   4, 121 =>   2),
		207 => array(  21 =>   7, 118 =>   4),
		208 => array(  21 =>   4, 117 =>   3),
		209 => array(  21 =>   4, 115 =>   6, 110 =>   2),
		210 => array(  21 =>   3, 115 =>   3, 106 =>   2),
		211 => array( 117 =>   6,  21 =>   8, 122 =>   5),
		212 => array(  21 =>   1),
		213 => array(  21 =>   9, 118 =>   6, 114 =>   5),
		214 => array(  21 =>  12, 118 =>   7, 114 =>   6, 199 =>   1),
		215 => array( 114 =>   5, 120 =>  12, 118 =>   5,  21 =>   8),
        216 => array( 106 =>  12,  21 =>  15, 109 =>  14, 110 => 14, 111 => 15, 114 => 10, 120 => 20, 199 => 3),
		217 => array( 111 =>  10,  21 =>  14, 114 =>  10, 110 => 14, 117 => 15),
        218 => array(  21 =>  18, 109 =>  20, 110 =>  20, 111 => 20, 114 => 15, 118 => 20, 120 => 25, 199 => 8),
		219 => array(  21 =>  15, 109 =>  15, 110 =>  15, 111 => 15, 118 => 8),
		220 => array(  21 =>   9, 114 =>   5, 118 =>   6),
		221 => array(  21 =>  18, 109 =>  15, 110 =>  23, 111 => 23, 118 => 17, 120 => 15, 199 => 5, 615 => 1),
		222 => array(  21 =>  15, 109 =>  15, 110 =>  13, 111 => 13, 114 => 15, 118 => 15, 120 => 20, 199 => 6),
		223 => array(  21 =>  10, 109 =>  10, 110 =>  10, 111 => 11, 114 =>  6, 118 =>  6, 120 => 10),
		224 => array(  21 =>  13, 109 =>  13, 110 =>  13, 111 => 13, 114 =>  8, 118 =>  7, 120 => 12),
		225 => array(  21 =>  13, 109 =>  15, 110 =>  15, 111 => 15, 114 =>  9, 118 =>  8, 120 => 15),
		226 => array(  21 =>  11, 109 =>  15, 110 =>  15, 111 => 15, 115 =>  8, 121 =>  5, 124 =>  5),
		227 => array(  21 =>  11, 109 =>  11, 110 =>  11, 111 => 11, 114 =>  3, 118 =>  2, 120 => 11, 121 =>  7, 124 =>  5),
		228 => array(  21 =>  10, 106 =>  10, 109 =>  12, 110 => 13, 111 => 11, 114 =>  4, 118 =>  3, 120 => 11, 121 =>  7),

		401 => array(  21 =>   1),
		402 => array( 113 =>   1,  21 =>   2, 120 =>   3),
		403 => array( 113 =>   3,  21 =>   4, 120 =>   6),
		404 => array(  21 =>   6, 113 =>   6, 109 =>   3, 110 =>   1),
		405 => array(  21 =>   4, 121 =>   4),
		406 => array(  21 =>   8, 122 =>   7),
		407 => array( 110 =>   2,  21 =>   1),
		408 => array( 110 =>   6,  21 =>   6),
		409 => array( 609 =>   1),
		410 => array( 199 =>   7,  21 =>  18, 109 => 20),
		411 => array( 199 =>  10, 110 =>  22, 122 =>  20, 108 => 15, 111 => 25, 113 => 20, 608 => 2, 21 => 20),
				
		
		502 => array(  44 =>   2,  21 =>   1),
		503 => array(  44 =>   4,  21 =>   1, 117 =>   1),
		
		603 => array( 601 =>   5),
		604 => array( 602 =>   5),
		605 => array( 601 =>  10, 603 =>   2),
		606 => array( 601 =>  10, 603 =>   2),
		607 => array( 605 =>   1),
		608 => array( 606 =>   1),
		609 => array( 601 =>  20, 603 =>  10, 605 =>   3, 606 =>   3, 607 =>   2, 608 =>   2),
		610 => array( 602 =>  10, 604 =>   5),
		611 => array( 602 =>  10, 604 =>   5),
		612 => array( 610 =>   1),
		613 => array( 611 =>   1),
		614 => array( 602 =>  20, 604 =>  10, 610 =>   2, 611 =>   2, 612 =>   1, 613 =>   3),
		615 => array( 614 =>   1, 609 =>   1),
	);

	$pricelist = array(
		  1 => array ( 'metal' =>      60, 'crystal' =>      15, 'deuterium' =>       0, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' => 3/2),
		  2 => array ( 'metal' =>      48, 'crystal' =>      24, 'deuterium' =>       0, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' => 1.6),
		  3 => array ( 'metal' =>     225, 'crystal' =>      75, 'deuterium' =>       0, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' => 3/2),
		  4 => array ( 'metal' =>      75, 'crystal' =>      30, 'deuterium' =>       0, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' => 3/2),
		  6 => array ( 'metal' =>100000000,'crystal' =>50000000, 'deuterium' =>25000000, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' => 2.2),
		 12 => array ( 'metal' =>     900, 'crystal' =>     360, 'deuterium' =>     180, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' => 1.8),
		 14 => array ( 'metal' =>     400, 'crystal' =>     120, 'deuterium' =>     200, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2),
		 15 => array ( 'metal' => 1000000, 'crystal' =>  500000, 'deuterium' =>  100000, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2),
		 21 => array ( 'metal' =>     400, 'crystal' =>     200, 'deuterium' =>     100, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2),
		 22 => array ( 'metal' =>    2000, 'crystal' =>       0, 'deuterium' =>       0, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2),
		 23 => array ( 'metal' =>    2000, 'crystal' =>    1000, 'deuterium' =>       0, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2),
		 24 => array ( 'metal' =>    2000, 'crystal' =>    2000, 'deuterium' =>       0, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2),
		 31 => array ( 'metal' =>     200, 'crystal' =>     400, 'deuterium' =>     200, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2),
		 33 => array ( 'metal' =>       0, 'crystal' =>   50000, 'deuterium' =>  100000, 'energy_max' =>   1000, 'darkmatter' =>  0, 'factor' =>   2),
		 34 => array ( 'metal' =>   20000, 'crystal' =>   40000, 'deuterium' =>       0, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2),
		 41 => array ( 'metal' =>   20000, 'crystal' =>   40000, 'deuterium' =>   20000, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2),
		 42 => array ( 'metal' =>   20000, 'crystal' =>   40000, 'deuterium' =>   20000, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2),
		 43 => array ( 'metal' => 2000000, 'crystal' => 4000000, 'deuterium' => 2000000, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2),
		 44 => array ( 'metal' =>   20000, 'crystal' =>   20000, 'deuterium' =>    1000, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2),

		106 => array ( 'metal' =>     200, 'crystal' =>    1000, 'deuterium' =>     200, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2, 'max' => 255),
		108 => array ( 'metal' =>       0, 'crystal' =>     400, 'deuterium' =>     600, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2, 'max' => 255),
		109 => array ( 'metal' =>     800, 'crystal' =>     200, 'deuterium' =>       0, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2, 'max' => 255),
		110 => array ( 'metal' =>     200, 'crystal' =>     600, 'deuterium' =>       0, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2, 'max' => 255),
		111 => array ( 'metal' =>    1000, 'crystal' =>       0, 'deuterium' =>       0, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2, 'max' => 255),
		113 => array ( 'metal' =>       0, 'crystal' =>     800, 'deuterium' =>     400, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2, 'max' => 255),
		114 => array ( 'metal' =>       0, 'crystal' =>    4000, 'deuterium' =>    2000, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2, 'max' => 255),
		115 => array ( 'metal' =>     400, 'crystal' =>       0, 'deuterium' =>     600, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2, 'max' => 255),
		117 => array ( 'metal' =>    2000, 'crystal' =>    4000, 'deuterium' =>    600,  'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2, 'max' => 255),
		118 => array ( 'metal' =>   10000, 'crystal' =>   20000, 'deuterium' =>    6000, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2, 'max' => 255),
		120 => array ( 'metal' =>     200, 'crystal' =>     100, 'deuterium' =>       0, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2, 'max' => 255),
		121 => array ( 'metal' =>    1000, 'crystal' =>     300, 'deuterium' =>     100, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2, 'max' => 255),
		122 => array ( 'metal' =>    2000, 'crystal' =>    4000, 'deuterium' =>    1000, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2, 'max' => 255),
		123 => array ( 'metal' =>  240000, 'crystal' =>  400000, 'deuterium' =>  160000, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2, 'max' => 255),
		131 => array ( 'metal' =>     750, 'crystal' =>     500, 'deuterium' =>     250, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2, 'max' => 255),
		132 => array ( 'metal' =>    1000, 'crystal' =>     750, 'deuterium' =>     500, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2, 'max' => 255),
		133 => array ( 'metal' =>    1250, 'crystal' =>    1000, 'deuterium' =>     750, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2, 'max' => 255),
		124 => array ( 'metal' =>    4000, 'crystal' =>    8000, 'deuterium' =>    4000, 'energy_max' =>      0, 'darkmatter' =>  0, 'factor' =>   2, 'max' => 255),
		199 => array ( 'metal' =>       0, 'crystal' =>       0, 'deuterium' =>       0, 'energy_max' => 300000, 'darkmatter' =>  0, 'factor' =>   3, 'max' => 255),

		202 => array ( 'metal' =>      2000, 'crystal' =>      2000, 'deuterium' =>        0, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>     10, 'consumption2' => 20  , 'speed' =>      5000, 'speed2' =>     10000, 'capacity' =>      5000),
		203 => array ( 'metal' =>      6000, 'crystal' =>      6000, 'deuterium' =>        0, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>     50, 'consumption2' => 50  , 'speed' =>      7500, 'speed2' =>      7500, 'capacity' =>     25000),
		204 => array ( 'metal' =>      3000, 'crystal' =>      1000, 'deuterium' =>        0, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>     20, 'consumption2' => 20  , 'speed' =>     12500, 'speed2' =>     12500, 'capacity' =>        50),
		205 => array ( 'metal' =>      6000, 'crystal' =>      4000, 'deuterium' =>        0, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>     75, 'consumption2' => 75  , 'speed' =>     10000, 'speed2' =>     15000, 'capacity' =>       100),
		206 => array ( 'metal' =>     20000, 'crystal' =>      7000, 'deuterium' =>     2000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>    300, 'consumption2' => 300 , 'speed' =>     15000, 'speed2' =>     15000, 'capacity' =>       800),
		207 => array ( 'metal' =>     45000, 'crystal' =>     15000, 'deuterium' =>        0, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>    250, 'consumption2' => 250 , 'speed' =>     10000, 'speed2' =>     10000, 'capacity' =>      1500),
		208 => array ( 'metal' =>     10000, 'crystal' =>     20000, 'deuterium' =>    10000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>   1000, 'consumption2' => 1000, 'speed' =>      2500, 'speed2' =>      2500, 'capacity' =>      7500),
		209 => array ( 'metal' =>     10000, 'crystal' =>      6000, 'deuterium' =>     2000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>    300, 'consumption2' => 300 , 'speed' =>      2000, 'speed2' =>      2000, 'capacity' =>     20000),
		210 => array ( 'metal' =>         0, 'crystal' =>      1000, 'deuterium' =>        0, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>      1, 'consumption2' => 1   , 'speed' => 100000000, 'speed2' => 100000000, 'capacity' =>         5),
		211 => array ( 'metal' =>     50000, 'crystal' =>     25000, 'deuterium' =>    15000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>   1000, 'consumption2' => 1000, 'speed' =>      4000, 'speed2' =>      5000, 'capacity' =>       500),
		212 => array ( 'metal' =>         0, 'crystal' =>      2000, 'deuterium' =>      500, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>      0, 'consumption2' => 0   , 'speed' =>         0, 'speed2' =>         0, 'capacity' =>         0),
		213 => array ( 'metal' =>     60000, 'crystal' =>     50000, 'deuterium' =>    15000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>   1000, 'consumption2' => 1000, 'speed' =>      5000, 'speed2' =>      5000, 'capacity' =>      2000),
		214 => array ( 'metal' =>   5000000, 'crystal' =>   4000000, 'deuterium' =>  1000000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>      1, 'consumption2' => 1   , 'speed' =>       200, 'speed2' =>       200, 'capacity' =>   1000000),
		215 => array ( 'metal' =>     30000, 'crystal' =>     40000, 'deuterium' =>    15000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>    250, 'consumption2' => 250 , 'speed' =>     10000, 'speed2' =>     10000, 'capacity' =>       750),
        216 => array ( 'metal' =>   8000000, 'crystal' =>   2000000, 'deuterium' =>  1500000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>    250, 'consumption2' => 250 , 'speed' =>       900, 'speed2' =>       900, 'capacity' =>  15000000),
		217 => array ( 'metal' =>     35000, 'crystal' =>     20000, 'deuterium' =>     1500, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>     90, 'consumption2' =>     90, 'speed' =>    6000, 'speed2' =>      6000, 'capacity' => 400000000),
        218 => array ( 'metal' => 275000000, 'crystal' => 130000000, 'deuterium' => 60000000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>  10000, 'consumption2' =>  10000, 'speed' =>      10, 'speed2' =>        10, 'capacity' =>  50000000),
        219 => array ( 'metal' =>   1000000, 'crystal' =>    600000, 'deuterium' =>   200000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>    300, 'consumption2' =>    300, 'speed' =>    7500, 'speed2' =>      7500, 'capacity' => 200000000),
        220 => array ( 'metal' =>   6000000, 'crystal' =>   7000000, 'deuterium' =>  3000000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' => 100000, 'consumption2' => 100000, 'speed' =>     100, 'speed2' =>       100, 'capacity' =>   6000000),
        221 => array ( 'metal' =>  50000000, 'crystal' =>  37500000, 'deuterium' => 40000000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' => 100000, 'consumption2' => 100000, 'speed' =>      50, 'speed2' =>        50, 'capacity' => 200000000),
        222 => array ( 'metal' => 250000000, 'crystal' => 120000000, 'deuterium' => 30000000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>  25000, 'consumption2' =>  25000, 'speed' =>     150, 'speed2' =>       150, 'capacity' =>  45000000),
        223 => array ( 'metal' =>     70000, 'crystal' =>     90000, 'deuterium' =>    15000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>    700, 'consumption2' =>    700, 'speed' =>    6000, 'speed2' =>      6000, 'capacity' =>    100000),
        224 => array ( 'metal' =>    100000, 'crystal' =>    100000, 'deuterium' =>    15000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>    750, 'consumption2' =>    750, 'speed' =>    7000, 'speed2' =>      7000, 'capacity' =>    100000),
        225 => array ( 'metal' =>     95000, 'crystal' =>     95000, 'deuterium' =>    25000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>    750, 'consumption2' =>    750, 'speed' =>    7000, 'speed2' =>      7000, 'capacity' =>    100000),
        226 => array ( 'metal' =>    130000, 'crystal' =>     70000, 'deuterium' =>    15000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>    900, 'consumption2' =>    900, 'speed' =>    1400, 'speed2' =>      1400, 'capacity' =>    250000),
        227 => array ( 'metal' =>    105000, 'crystal' =>    105000, 'deuterium' =>     5000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>   1400, 'consumption2' =>   1400, 'speed' =>   25000, 'speed2' =>     25000, 'capacity' =>     70000),
        228 => array ( 'metal' =>     60000, 'crystal' =>    170000, 'deuterium' =>   120000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1, 'consumption' =>   1500, 'consumption2' =>   1500, 'speed' =>   40000, 'speed2' =>     40000, 'capacity' =>     70000),
	
		401 => array ( 'metal' =>       2000, 'crystal' =>          0, 'deuterium' =>         0, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1 ),
		402 => array ( 'metal' =>       1500, 'crystal' =>        500, 'deuterium' =>         0, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1 ),
		403 => array ( 'metal' =>       6000, 'crystal' =>       2000, 'deuterium' =>         0, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1 ),
		404 => array ( 'metal' =>      20000, 'crystal' =>      15000, 'deuterium' =>      2000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1 ),
		405 => array ( 'metal' =>       2000, 'crystal' =>       6000, 'deuterium' =>         0, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1 ),
		406 => array ( 'metal' =>      50000, 'crystal' =>      50000, 'deuterium' =>     30000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1 ),
		407 => array ( 'metal' =>      10000, 'crystal' =>      10000, 'deuterium' =>         0, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1 ),
		408 => array ( 'metal' =>      50000, 'crystal' =>      50000, 'deuterium' =>         0, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1 ),
        409 => array ( 'metal' =>   10000000, 'crystal' =>    5000000, 'deuterium' =>   2500000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1 ),
		410 => array ( 'metal' =>   15000000, 'crystal' =>   15000000, 'deuterium' =>         0, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1 ),
		411 => array ( 'metal' => 5000000000, 'crystal' => 2000000000, 'deuterium' => 500000000, 'energy' => 1000000, 'darkmatter' =>  10000, 'factor' => 1 ),         
		
		502 => array ( 'metal' =>   8000, 'crystal' =>       0, 'deuterium' =>    2000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1 ),
		503 => array ( 'metal' =>  12500, 'crystal' =>    2500, 'deuterium' =>   10000, 'energy' => 0, 'darkmatter' =>  0, 'factor' => 1 ),

		601 => array ( 'max' =>  20),
		602 => array ( 'max' =>  20),
		603 => array ( 'max' =>  10),
		604 => array ( 'max' =>  10),
		605 => array ( 'max' =>   3),
		606 => array ( 'max' =>   3),
		607 => array ( 'max' =>   2),
		608 => array ( 'max' =>   2),
		609 => array ( 'max' =>   1),
		610 => array ( 'max' =>   2),
		611 => array ( 'max' =>   3),
		612 => array ( 'max' =>   1),
		613 => array ( 'max' =>   3),
		614 => array ( 'max' =>   1),
		615 => array ( 'max' =>   1),
	);

	$CombatCaps = array(
		202 => array ( 'shield' =>      10, 'attack' =>        5, 'sd' => array (210 =>    5, 212 =>    5)),
		203 => array ( 'shield' =>      25, 'attack' =>        5, 'sd' => array (210 =>    5, 212 =>    5)),
		204 => array ( 'shield' =>      10, 'attack' =>       50, 'sd' => array (210 =>    5, 212 =>    5)),
		205 => array ( 'shield' =>      25, 'attack' =>      150, 'sd' => array (202 =>    3, 210 =>    5, 212 =>   5)),
		206 => array ( 'shield' =>      50, 'attack' =>      400, 'sd' => array (204 =>    6, 401 =>   10, 210 =>   5, 212 =>   5)),
		207 => array ( 'shield' =>     200, 'attack' =>     1000, 'sd' => array (210 =>    5, 212 =>    5)),
		208 => array ( 'shield' =>     100, 'attack' =>       50, 'sd' => array (210 =>    5, 212 =>    5)),
		209 => array ( 'shield' =>      10, 'attack' =>        1, 'sd' => array (210 =>    5, 212 =>    5)),
		210 => array ( 'shield' =>    .001, 'attack' =>     .001, 'sd' => array ()),
		211 => array ( 'shield' =>     500, 'attack' =>     1000, 'sd' => array (210 =>    5, 212 =>    5, 401 =>  20, 402 =>  20, 403 =>  10, 405 =>  10)),
		212 => array ( 'shield' =>    .001, 'attack' =>     .001, 'sd' => array ()),
		213 => array ( 'shield' =>     500, 'attack' =>     2000, 'sd' => array (210 =>    5, 212 =>    5, 215 =>   2, 223 => 20, 402 =>  10)),
		214 => array ( 'shield' =>   50000, 'attack' =>   200000, 'sd' => array (210 => 1250, 212 => 1250, 202 => 250, 203 => 250, 208 => 250, 209 => 250, 204 => 200, 205 => 100, 206 => 33, 207 => 30, 211 => 25, 215 => 15, 213 => 5, 223 => 20, 224 => 20, 225 => 25, 226 => 5, 227 => 30, 228 => 25, 401 => 200, 402 => 200, 403 => 100, 404 =>  50, 405 => 100)),
		215 => array ( 'shield' =>     400, 'attack' =>      700, 'sd' => array (202 =>    3, 203 =>   3, 205 =>   4, 206 =>   4, 207 =>   10, 210 =>   5, 212 =>   5, 223 => 15)),
        216 => array ( 'shield' =>   70000, 'attack' =>   150000, 'sd' => array (210 => 1250, 212 => 1250, 202 => 250, 203 => 250, 204 => 200, 205 => 100, 206 =>  33, 207 =>  30, 208 => 250, 209 => 250, 211 =>  25, 213 =>   5, 214 =>   1, 215 =>  15, 223 => 30, 224 => 30, 225 => 35, 226 => 10, 227 => 40, 228 => 35, 401 => 400, 402 => 200, 403 => 100, 404 =>  50, 405 => 100)),
		217 => array ( 'shield' =>     120, 'attack' =>       50, 'sd' => array (210 =>    5, 212 =>    5)),
        218 => array ( 'shield' => 2000000, 'attack' => 35000000, 'sd' => array (210 => 1250, 212 => 1250, 202 => 250, 203 => 250, 204 => 200, 205 => 100, 206 =>  33, 207 =>  30, 208 => 250, 209 => 250, 211 =>  25, 213 =>   5, 223 => 50, 224 => 50, 225 => 55, 226 => 30, 227 => 60, 228 => 55, 215 =>  15, 401 => 400, 402 => 200, 403 => 100, 404 =>  50, 405 => 100)),
        219 => array ( 'shield' =>    1000, 'attack' =>        1, 'sd' => array (210 =>    5, 212 =>    5)),
        220 => array ( 'shield' =>   50000, 'attack' => 	   5, 'sd' => array (210 =>    5, 212 =>    5)),
        221 => array ( 'shield' => 5000000, 'attack' =>  8000000, 'sd' => array (202 =>  250, 203 => 250, 204 => 200, 205 => 100, 206 =>  60, 207 =>  50, 208 => 250, 209 => 250, 210 => 1250, 211 =>  50, 212 => 1250, 213 =>   15, 214 =>   3, 215 =>  30, 216 => 2, 217 => 30, 223 => 35, 224 => 35, 225 => 45, 226 => 20, 227 => 45, 228 => 35, 401 => 300, 402 => 300, 403 => 150, 404 =>  50, 405 => 150)),
        222 => array ( 'shield' => 1750000, 'attack' => 30000000, 'sd' => array (202 =>  235, 203 => 235, 204 => 190, 205 =>  95, 206 =>  55, 207 =>  40, 208 => 240, 209 => 245, 210 => 1230, 211 =>   1, 212 => 1230, 213 =>   10, 214 =>   1, 215 =>  20, 216 => 2, 217 => 20, 223 => 45, 224 => 45, 225 => 50, 226 => 25, 227 => 55, 228 => 50, 401 => 285, 402 => 285, 403 => 140, 404 =>  45, 405 => 140)),
        223 => array ( 'shield' =>   15000, 'attack' => 	9000, 'sd' => array (202 =>   30, 203 => 30, 204 => 25, 205 => 25, 206 => 20, 207 => 18, 208 => 25, 209 => 25, 210 => 70, 211 => 10, 212 => 70, 217 => 10, 219 => 10, 220 => 5)),
        224 => array ( 'shield' =>   15000, 'attack' =>    18000, 'sd' => array (202 =>   75, 203 => 65, 204 => 65, 205 => 55, 206 => 50, 207 => 45, 208 => 25, 209 => 25, 210 => 100, 211 => 20, 212 => 100)),
        225 => array ( 'shield' =>   15000, 'attack' =>    18000, 'sd' => array (202 =>   70, 203 => 60, 204 => 60, 205 => 50, 206 => 45, 207 => 40, 208 => 20, 209 => 20, 210 => 95, 211 => 15, 212 => 95)),
        226 => array ( 'shield' =>   25000, 'attack' =>     1300, 'sd' => array (202 =>   25, 203 => 20, 204 => 10)),
        227 => array ( 'shield' =>    9000, 'attack' =>    11000, 'sd' => array (202 =>   60, 203 => 50, 204 => 50, 205 => 40, 206 => 40, 207 => 40, 208 => 20, 209 => 20, 210 => 90, 211 => 10, 212 => 90)),
        228 => array ( 'shield' =>   12000, 'attack' =>    15000, 'sd' => array (202 =>   55, 203 => 50, 204 => 50, 205 => 45, 206 => 40, 207 => 40, 208 => 20, 209 => 25, 210 => 100, 211 => 15, 212 => 100)),
		
		401 => array ( 'shield' =>      20, 'attack' =>       80, 'sd' => array ()),
		402 => array ( 'shield' =>      25, 'attack' =>      100, 'sd' => array ()),
		403 => array ( 'shield' =>     100, 'attack' =>      250, 'sd' => array ()),
		404 => array ( 'shield' =>     200, 'attack' =>     1100, 'sd' => array ()),
		405 => array ( 'shield' =>     500, 'attack' =>      150, 'sd' => array ()),
		406 => array ( 'shield' =>     300, 'attack' =>     3000, 'sd' => array ()),
		407 => array ( 'shield' =>    2000, 'attack' =>        1, 'sd' => array ()),
		408 => array ( 'shield' =>   10000, 'attack' =>        1, 'sd' => array ()),
		409 => array ( 'shield' => 1000000, 'attack' =>        1, 'sd' => array ()),
		410 => array ( 'shield' =>   80000, 'attack' =>   500000, 'sd' => array ()),
		411 => array ( 'shield' =>2000000000, 'attack' => 400000000, 'sd' => array ()),
		
		502 => array ( 'shield' =>     1, 'attack' =>      1, 'sd' => array ()),
		503 => array ( 'shield' =>     1, 'attack' =>  12000,  'sd' => array ()),
	);

	$ProdGrid = array(

		1   => array( 'metal' =>   40, 'crystal' =>   10, 'deuterium' =>    0, 'energy' => 0, 'factor' => 3/2,
			'formule' => array(
				'metal'     => 'return   (30 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor);',
				'crystal'   => 'return   "0";',
				'deuterium' => 'return   "0";',
				'energy'    => 'return - (10 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor);')
		),

		2   => array( 'metal' =>   30, 'crystal' =>   15, 'deuterium' =>    0, 'energy' => 0, 'factor' => 1.6,
			'formule' => array(
				'metal'     => 'return   "0";',
				'crystal'   => 'return   (20 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor);',
				'deuterium' => 'return   "0";',
				'energy'    => 'return - (10 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor);')
		),

		3   => array( 'metal' =>  150, 'crystal' =>   50, 'deuterium' =>    0, 'energy' => 0, 'factor' => 3/2,
			'formule' => array(
				'metal'     => 'return   "0";',
				'crystal'   => 'return   "0";',
				'deuterium' => 'return   (10 * $BuildLevel * pow((1.1), $BuildLevel) * (-0.002 * $BuildTemp + 1.28) * (0.1 * $BuildLevelFactor));',
				'energy'    => 'return - (30 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor);')
                ),

		4   => array( 'metal' =>   50, 'crystal' =>   20, 'deuterium' =>    0, 'energy' => 0, 'factor' => 3/2,
			'formule' => array(
				'metal'     => 'return   "0";',
				'crystal'   => 'return   "0";',
				'deuterium' => 'return   "0";',
				'energy'    => 'return   (20 * $BuildLevel * pow((1.1), $BuildLevel)) * (0.1 * $BuildLevelFactor);')
		),

		12  => array( 'metal' =>  500, 'crystal' =>  200, 'deuterium' =>  100, 'energy' => 0, 'factor' => 1.8,
			'formule' => array(
				'metal'     => 'return   "0";',
				'crystal'   => 'return   "0";',
				'deuterium' => 'return - (10 * $BuildLevel * pow(1.1,$BuildLevel)  * (0.1 * $BuildLevelFactor));',
				'energy'    => 'return   (30 * $BuildLevel * pow((1.05 + $BuildEnergy * 0.01), $BuildLevel)) * (0.1 * $BuildLevelFactor);')
		),

		212 => array( 'metal' =>    0, 'crystal' => 2000, 'deuterium' =>  500, 'energy' => 0, 'factor' => 0.5,
			'formule' => array(
				'metal'     => 'return   "0";',
				'crystal'   => 'return   "0";',
				'deuterium' => 'return   "0";',
				'energy'    => 'return  ((($BuildTemp + 160) / 6) * (0.1 * $BuildLevelFactor) * $BuildLevel);')
		)
	);

	$ExtraDM	= array(
		700 => array('time' => 24, 'darkmatter' => 1500, 'add' => 0.1),
		701 => array('time' => 24, 'darkmatter' => 1500, 'add' => 0.1),
		702 => array('time' => 24, 'darkmatter' =>  750, 'add' => 0.1),
		703 => array('time' => 24, 'darkmatter' => 2500, 'add' => 0.1),
		704 => array('time' => 24, 'darkmatter' => 2000, 'add' => 0.1),
		705 => array('time' => 24, 'darkmatter' => 1250, 'add' => 0.1),
		706 => array('time' => 24, 'darkmatter' => 3000, 'add' => 0.1),
	);
	
	$reslist['allow']    = array ( 1 => array(1,  2,  3,  4,  6, 12, 14, 15, 21, 22, 23, 24, 31, 33, 34, 44), 3 => array(12, 14, 21, 22, 23, 24, 34, 41, 42, 43));
	$reslist['build']    = array (   1,   2,   3,   4,   6,  12,  14,  15,  21,  22,  23,  24,  31,  33,  34,  44,  41,  42,  43);
	$reslist['tech']     = array ( 106, 108, 109, 110, 111, 113, 114, 115, 117, 118, 120, 121, 122, 123, 124, 131, 132, 133, 199);
	$reslist['fleet']    = array ( 202, 203, 204, 205, 206, 207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 221, 222, 223, 224, 225, 226, 226, 227, 228);
	$reslist['defense']  = array ( 401, 402, 403, 404, 405, 406, 407, 408, 409, 410, 411, 502, 503 );
	$reslist['officier'] = array ( 601, 602, 603, 604, 605, 606, 607, 608, 609, 610, 611, 612, 613, 614, 615);
	$reslist['dmfunc'] 	 = array ( 700, 701, 702, 703, 704, 705, 706);
	$reslist['prod']     = array (   1,   2,   3,   4,  12, 212 );
	$reslist['procent']  = array ( 100,  90,  80,  70,  60,  50,  40,  30,  20,  10,   0);
	$reslist['one']  	 = array ( 407, 408, 409, 411);
}
?>