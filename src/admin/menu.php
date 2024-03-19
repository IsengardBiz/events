<?php
/**
 * Configuring the admin side menu for the module
 *
 * @copyright	Copyright Madfish (Simon Wilkinson) 2013.
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		Madfish (Simon Wilkinson) <simon@isengard.biz>
 * @package		events
 * @version		$Id$
 */

global $icmsConfig;

$adminmenu[] = array(
	"title" => _MI_EVENTS_EVENTS,
	"link" => "admin/event.php");

$module = icms::handler("icms_module")->getByDirname(basename(dirname(__FILE__, 2)));

$headermenu[] = array(
	"title" => _PREFERENCES,
	"link" => "../../system/admin.php?fct=preferences&amp;op=showmod&amp;mod=" . $module->getVar("mid"));
$headermenu[] = array(
	"title" => _CO_ICMS_GOTOMODULE,
	"link" => ICMS_URL . "/modules/events/");
$headermenu[] = array(
	"title" => _MI_EVENTS_TEMPLATES,
	"link" => "../../system/admin.php?fct=tplsets&op=listtpl&tplset="
		. $icmsConfig['template_set'] . "&moddir=" . basename(dirname(__FILE__, 2)));
$headermenu[] = array(
	"title" => _CO_ICMS_UPDATE_MODULE,
	"link" => ICMS_URL . "/modules/system/admin.php?fct=modulesadmin&amp;op=update&amp;module=" . basename(dirname(__FILE__, 2)));
$headermenu[] = array(
	"title" => _MODABOUT_ABOUT,
	"link" => ICMS_URL . "/modules/events/admin/about.php");

unset($module_handler);
