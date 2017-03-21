<?php
/**
*    Joomla Event Countdown Module
*    Copyright (C) 2017 Riccardo Francescato. All rights reserved.
*    riccardo.francescato[at]gmail.com
*
*   This program is free software: you can redistribute it and/or modify
*    it under the terms of the GNU General Public License as published by
*    the Free Software Foundation, either version 3 of the License, or
*    (at your option) any later version.
*
*    This program is distributed in the hope that it will be useful,
*    but WITHOUT ANY WARRANTY; without even the implied warranty of
*    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*    GNU General Public License for more details.
*
*    You should have received a copy of the GNU General Public License
*    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
* @package  Event Countdown
* @version   $Id: helper.php - March 2017 
* @author    Riccardo Francescato (riccardo.francescato@gmail.com)
* @copyright   Copyright (C) 2017 Riccardo Francescato. All rights reserved.
* @license   https://github.com/RiccardoFrancescato/JoomlaCuntdown/LICENSE
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