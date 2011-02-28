{include file="overall_header.tpl"}
{include file="overall_topnav.tpl"}
{include file="left_menu.tpl"}
<div id="content" class="content">
    <form action="" method="post">
    <table width="50%" align="center">
    <tbody>
    <tr>
        <td class="c" colspan="5">{$Production_of_resources_in_the_planet}</td>
    </tr><tr>
        <th height="22">&nbsp;</th>
        <th width="60">{$Metal}</th>
        <th width="60">{$Crystal}</th>
        <th width="60">{$Deuterium}</th>
        <th width="60">{$Energy}</th>
    </tr><tr style="height: 22px">
        <th>{$rs_basic_income}</th>
        <th>{$metal_basic_income}</th>
        <th>{$crystal_basic_income}</th>
        <th>{$deuterium_basic_income}</th>
        <th>{$energy_basic_income}</th>
    </tr>
    {foreach item=CurrPlanetInfo from=$CurrPlanetList}
	<tr>
		<th height="22">{$CurrPlanetInfo.type} ({$CurrPlanetInfo.level} {$CurrPlanetInfo.level_type})</th>
		<th><font color="#ffffff">{$CurrPlanetInfo.metal_type}</font></th>
		<th><font color="#ffffff">{$CurrPlanetInfo.crystal_type}</font></th>
		<th><font color="#ffffff">{$CurrPlanetInfo.deuterium_type}</font></th>
		<th><font color="#ffffff">{$CurrPlanetInfo.energy_type}</font></th>
		<th>
			{html_options name=$CurrPlanetInfo.name options=$option selected=$CurrPlanetInfo.optionsel}
		</th>
	</tr>
    {/foreach}
    <tr>
        <th height="22">{$rs_ress_bonus}</th>
        <th>{$bonus_metal}</th>
        <th>{$bonus_crystal}</th>
        <th>{$bonus_deuterium}</th>
        <th>{$bonus_energy}</th>
        <th><input name="action" value="{$rs_calculate}" type="submit" style="height:auto;"></th>
    </tr>
    <tr>
        <th height="22">{$rs_storage_capacity}</th>
        <th>{$metalmax}</th>
        <th>{$crystalmax}</th>
        <th>{$deuteriummax}</th>
        <th>-</th>
    </tr><tr>
        <th height="22">{$rs_sum}:</th>
        <th>{$metal_total}</th>
        <th>{$crystal_total}</th>
        <th>{$deuterium_total}</th>
        <th>{$energy_total}</th>
    </tr>
    <tr>
        <th height="22">{$rs_daily}</th>
        <th>{$daily_metal}</th>
        <th>{$daily_crystal}</th>
        <th>{$daily_deuterium}</th>
        <th>{$energy_total}</th>
    </tr>
    <tr>
        <th height="22">{$rs_weekly}</th>
        <th>{$weekly_metal}</th>
        <th>{$weekly_crystal}</th>
        <th>{$weekly_deuterium}</th>
        <th>{$energy_total}</th>
    </tr>
    </tbody>
    </table>
    </form>
</div>
{include file="planet_menu.tpl"}
{include file="overall_footer.tpl"}