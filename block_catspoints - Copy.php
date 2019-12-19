<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Blog Menu Block page.
 *
 * @package    block
 * @subpackage tell_us
 * @copyright  2009 Nicolas Connault
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * The blog menu block class
 */
class block_catspoints extends block_base {

    function init() {
        $this->title = get_string('pluginname', 'block_catspoints');
    }

    function instance_allow_multiple() {
        return true;
    }

    function has_config() {
        return false;
    }

    function applicable_formats() {
        return array('all' => true, 'my' => false, 'tag' => false);
    }

    function instance_allow_config() {
        return true;
    }

    function get_content() {
        global $CFG, $USER, $DB, $OUTPUT, $PAGE, $COURSE;

    if ($this->content !== null) {
      return $this->content;
    }
 
    $this->content         =  new stdClass;
    if (!isloggedin() or isguestuser()) {
            $this->content->text   = '';
    }
    else
    {

	$db = mysqli_connect("localhost", "moodleUser09","chicken.trousers.desk.flight","moodle");    

	$result = mysqli_query($db,"select * from catspoints where house='New Dover Road'");
	$typoints=0; $wdpoints=0;$hlpoints=0;$stpoints=0;$vppoints=0;$ppoints=0;
	while ($myrow = mysqli_fetch_row($result)) {
		$typoints = $typoints + $myrow[4];	         
		$wdpoints = $wdpoints + $myrow[3];	         
		$hlpoints = $hlpoints + $myrow[5];
		$stpoints = $stpoints + $myrow[6] * 30;	         
		$vppoints = $vppoints + $myrow[7] * 40;	         
		$ppoints = $ppoints + $myrow[8] * 50;	         
	}
	$totalndrpoints=$typoints+$wdpoints+$hlpoints+$stpoints+$vppoints+$ppoints;

	$result = mysqli_query($db,"select * from catspoints where house='Ethelbert'");
	$typoints=0; $wdpoints=0;$hlpoints=0;$stpoints=0;$vppoints=0;$ppoints=0;
	while ($myrow = mysqli_fetch_row($result)) {
		$typoints = $typoints + $myrow[4];	         
		$wdpoints = $wdpoints + $myrow[3];	         
		$hlpoints = $hlpoints + $myrow[5];
		$stpoints = $stpoints + $myrow[6] * 30;	         
		$vppoints = $vppoints + $myrow[7] * 40;	         
		$ppoints = $ppoints + $myrow[8] * 50;	         
	}
	$totalethpoints=$typoints+$wdpoints+$hlpoints+$stpoints+$vppoints+$ppoints;

	$result = mysqli_query($db,"select * from catspoints where house='St Lawrence'");
	$typoints=0; $wdpoints=0;$hlpoints=0;$stpoints=0;$vppoints=0;$ppoints=0;
	while ($myrow = mysqli_fetch_row($result)) {
		$typoints = $typoints + $myrow[4];	         
		$wdpoints = $wdpoints + $myrow[3];	         
		$hlpoints = $hlpoints + $myrow[5];
		$stpoints = $stpoints + $myrow[6] * 30;	         
		$vppoints = $vppoints + $myrow[7] * 40;	         
		$ppoints = $ppoints + $myrow[8] * 50;	         
	}
	$totalslpoints=$typoints+$wdpoints+$hlpoints+$stpoints+$vppoints+$ppoints;

	$result = mysqli_query($db,"select * from catspoints where house='Knights'");
	$typoints=0; $wdpoints=0;$hlpoints=0;$stpoints=0;$vppoints=0;$ppoints=0;
	while ($myrow = mysqli_fetch_row($result)) {
		$typoints = $typoints + $myrow[4];	         
		$wdpoints = $wdpoints + $myrow[3];	         
		$hlpoints = $hlpoints + $myrow[5];
		$stpoints = $stpoints + $myrow[6] * 30;	         
		$vppoints = $vppoints + $myrow[7] * 40;	         
		$ppoints = $ppoints + $myrow[8] * 50;	         
	}
	$totalknpoints=$typoints+$wdpoints+$hlpoints+$stpoints+$vppoints+$ppoints;

	$result = mysqli_query($db,"select * from catspoints where house='Raemore'");
	$typoints=0; $wdpoints=0;$hlpoints=0;$stpoints=0;$vppoints=0;$ppoints=0;
	while ($myrow = mysqli_fetch_row($result)) {
		$typoints = $typoints + $myrow[4];	         
		$wdpoints = $wdpoints + $myrow[3];	         
		$hlpoints = $hlpoints + $myrow[5];
		$stpoints = $stpoints + $myrow[6] * 30;	         
		$vppoints = $vppoints + $myrow[7] * 40;	         
		$ppoints = $ppoints + $myrow[8] * 50;	         
	}
	$totalrmpoints=$typoints+$wdpoints+$hlpoints+$stpoints+$vppoints+$ppoints;

$result = mysqli_query($db,"select * from catspoints where house='Stour'");
	$typoints=0; $wdpoints=0;$hlpoints=0;$stpoints=0;$vppoints=0;$ppoints=0;
	while ($myrow = mysqli_fetch_row($result)) {
		$typoints = $typoints + $myrow[4];	         
		$wdpoints = $wdpoints + $myrow[3];	         
		$hlpoints = $hlpoints + $myrow[5];
		$stpoints = $stpoints + $myrow[6] * 30;	         
		$vppoints = $vppoints + $myrow[7] * 40;	         
		$ppoints = $ppoints + $myrow[8] * 50;	         
	}
	$totalsppoints=$typoints+$wdpoints+$hlpoints+$stpoints+$vppoints+$ppoints;

$result = mysqli_query($db,"select * from catspoints where house='Tallis'");
	$typoints=0; $wdpoints=0;$hlpoints=0;$stpoints=0;$vppoints=0;$ppoints=0;
	while ($myrow = mysqli_fetch_row($result)) {
		$typoints = $typoints + $myrow[4];	         
		$wdpoints = $wdpoints + $myrow[3];	         
		$hlpoints = $hlpoints + $myrow[5];
		$stpoints = $stpoints + $myrow[6] * 30;	         
		$vppoints = $vppoints + $myrow[7] * 40;	         
		$ppoints = $ppoints + $myrow[8] * 50;	         
	}
	$totaltapoints=$typoints+$wdpoints+$hlpoints+$stpoints+$vppoints+$ppoints;

$result = mysqli_query($db,"select * from catspoints where house='Cowdrey'");
	$typoints=0; $wdpoints=0;$hlpoints=0;$stpoints=0;$vppoints=0;$ppoints=0;
	while ($myrow = mysqli_fetch_row($result)) {
		$typoints = $typoints + $myrow[4];	         
		$wdpoints = $wdpoints + $myrow[3];	         
		$hlpoints = $hlpoints + $myrow[5];
		$stpoints = $stpoints + $myrow[6] * 30;	         
		$vppoints = $vppoints + $myrow[7] * 40;	         
		$ppoints = $ppoints + $myrow[8] * 50;	         
	}
	$totalcppoints=$typoints+$wdpoints+$hlpoints+$stpoints+$vppoints+$ppoints;

	mysqli_close($db);

	$this->content->text = $this->content->text . "<style type='text/css'> div#scroller  { width:190px; height:54px; margin:1em 0; padding:6px; background-color:#fff; border:1px solid #ddd; color:#032071; } div#wn { position:relative; width:190px; height:54px; overflow:hidden; } div#wn div.block { height:54px; text-align: center; } div#wn div.block a img { border: none; } div#wn div.block a:link, div#wn div.block a:visited, div#wn div.block a:hover { color:#0F2F8D; text-decoration: none; } </style><script src='http://intranet.catscanterbury.com/moodle/blocks/catspoints/js/dw_paus_scroller.js' type='text/javascript'></script>";

	$this->content->text = $this->content->text . "<script type='text/javascript'> if ( DYN_WEB.Scroll_Div.isSupported() ) { DYN_WEB.Event.add( window, 'load', function() { var wndo = new DYN_WEB.Scroll_Div('wn', 'lyr'); 	var options = { axis:'v', bRepeat:true, repeatId:'rpt', dur:800, bPauseResume:true, distance: 54, pauseDelay: 5000, resumeDelay: 300 }; wndo.makePauseAuto( options ); }); } </script>";

//	$this->content->text = $this->content->text . "<div id='scroller'> <div id='wn'> <div id='lyr'> <div class='block'><a href='http://www.dyn-web.com/'><img src='http://intranet.catscanterbury.com/moodle/blocks/catspoints/images/dwc-btn.gif' alt='' /><br>at dyn-web.com</a> </div> <div class='block'><a href='http://www.dyn-web.com/'>Lots of free scripts!<br>JavaScript and PHP</a></div> <div class='block'><a href='/'>Check back often.<br>More to come!</a></div> <div id='rpt' class='block'><a href='http://www.dyn-web.com/'><img src='http://www.dyn-web.com/'><img src='http://intranet.catscanterbury.com/moodle/blocks/catspoints/images/dwc-btn.gif' alt='' /><br>at dyn-web.com</a></div> </div> </div> </div>";

	$this->content->text = $this->content->text . '<center>Cowdrey: '.$totalcppoints.'<br>Ethelbert: '.$totalethpoints.'<br>Knights: '.$totalknpoints.'<br>New Dover Road: '.$totalndrpoints.'<br>Raemore: '.$totalrmpoints.'<br>St Lawrence: '.$totalslpoints.'<br>Stour: '.$totalsppoints.'<br>Tallis: '.$totaltapoints.'</center>';


	if (($USER->id==2572) or ($USER->id==9) or ($USER->id==728)or ($USER->id==2314)  or ($USER->id==1328) or ($USER->id==180) or ($USER->id==35) or ($USER->id==56) or ($USER->id==2214) or ($USER->id==581) or ($USER->id==2207) or ($USER->id==1190) or ($USER->id==158) or ($USER->id==142) or ($USER->id==1318) or ($USER->id==2194) or ($USER->id==2192)  or ($USER->id==2239)  or ($USER->id==2231) or ($USER->id==2196))   {
	$this->content->text = $this->content->text .'<br><center><a href=http://intranet.catscanterbury.com/catspoints/catspoints.php?staffid='.$USER->id.'>Enter Points</a></center>';
	}

}//************************************************************

//always shown


//	}


//************************************************************

return $this->content;
    }

    /**
     * Returns the role that best describes the blog menu block.
     *
     * @return string
     */
    public function get_aria_role() {
        return 'navigation';
    }
}
