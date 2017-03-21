<?php
/**
 * @package 	Event Countdown
 * @version 	$Id: helper.php - March 2017 
 * @author 		Riccardo Francescato (riccardo.francescato@gmail.com)
 * @copyright 	Copyright (C) 2017 Riccardo Francescato. All rights reserved.
 * @license 	https://github.com/RiccardoFrancescato/JoomlaCuntdown/LICENSE
**/
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
 
$doc = Jfactory::getDocument();
$doc->addStyleSheet(JURI::root(true).'/modules/mod_countdown/css/style.css');

$title = filter_var($params->get("title"), FILTER_SANITIZE_STRING);
$paragraph = filter_var($params->get("paragraph"), FILTER_SANITIZE_STRING);
$event_date = filter_var($params->get("event_date"), FILTER_SANITIZE_STRING);
$event_time = filter_var($params->get("event_time"), FILTER_SANITIZE_STRING);
$day_txt = filter_var($params->get("day_txt"), FILTER_SANITIZE_STRING);
$hour_txt = filter_var($params->get("hour_txt"), FILTER_SANITIZE_STRING);
$minute_txt = filter_var($params->get("minute_txt"), FILTER_SANITIZE_STRING);
$second_txt = filter_var($params->get("second_txt"), FILTER_SANITIZE_STRING);
$bg_img = filter_var($params->get("bg_img"), FILTER_SANITIZE_STRING);
$countdown = modCountdownHelper::getCountdown($params);
require JModuleHelper::getLayoutPath('mod_countdown');