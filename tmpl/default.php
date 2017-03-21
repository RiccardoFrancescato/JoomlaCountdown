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
defined ('_JEXEC') or die('Restricted access');
$doc->addStyleSheet(JURI::root(true).'/modules/mod_countdown/css/style.css');
$event_date2=DateTime::createFromFormat('m/d/Y', $event_date);
$end_date= date_format($event_date2, 'Y-m-d');
$end_time=strtotime($end_date ." ".$event_time);
?>  

    <div style="background-image: url('<?php echo $bg_img; ?>')" class="maincountdown"> 
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="cursive"><?php echo $title; ?></h1>
            <h2 class="sub"><?php echo $paragraph; ?></h2>
          </div>
        </div>
        <!-- countdown-->
        <div id="countdown" class="countdown">
          <div class="row">
            <div class="countdown-item col-sm-3 col-xs-6">
              <div id="countdown-days" class="countdown-number">&nbsp;</div>
              <div class="countdown-label"><?php echo $day_txt; ?></div>
            </div>
            <div class="countdown-item col-sm-3 col-xs-6">
              <div id="countdown-hours" class="countdown-number">&nbsp;</div>
              <div class="countdown-label"><?php echo $hour_txt; ?></div>
            </div>
            <div class="countdown-item col-sm-3 col-xs-6">
              <div id="countdown-minutes" class="countdown-number">&nbsp;</div>
              <div class="countdown-label"><?php echo $minute_txt; ?></div>
            </div>
            <div class="countdown-item col-sm-3 col-xs-6">
              <div id="countdown-seconds" class="countdown-number">&nbsp;</div>
              <div class="countdown-label"><?php echo $second_txt; ?></div>
            </div>
          </div>
        </div>
        <div id="expired" class="countdown" style="display: none;">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="sub"><?php echo $paragraph; ?></h2>
            </div>
          </div>
        </div>
    </div>
     </div>
    <!-- JAVASCRIPT FILES -->

<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $event_date." ".$event_time; ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("countdown-days").innerHTML = days;
  document.getElementById("countdown-hours").innerHTML =hours;
  document.getElementById("countdown-minutes").innerHTML =minutes;
  document.getElementById("countdown-seconds").innerHTML =seconds;

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").style.display = 'none';
    document.getElementById("expired").style.display = 'block';
  }
}, 1000);
</script>