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

	$this->content->text = $this->content->text . "<table align='center' cellpadding='2' cellspacing='0' border='0' style='border: #000000 1px solid; background-color: #ffc90e;COLOR: #000000; FONT: 13px arial, sans-serif; font-weight: bold;'><tr><td><iframe id='NewsWindow' src='https://".$_SERVER['HTTP_HOST']."/catspoints/points.php' width='150' height='120' marginwidth='0' marginheight='0' frameborder='0' scrolling='no' style='border: #000000 1px solid;'></iframe></td></tr></table>";

	if (($USER->id==2970) or ($USER->id==2920) or ($USER->id==2194) or ($USER->id==3216) or ($USER->id==2483) or ($USER->id==2572) or ($USER->id==9) or ($USER->id==728)or ($USER->id==2314)  or ($USER->id==1328) or ($USER->id==180) or ($USER->id==35) or ($USER->id==56) or ($USER->id==2214) or ($USER->id==581) or ($USER->id==2207) or ($USER->id==1190) or ($USER->id==158) or ($USER->id==142) or ($USER->id==1318) or ($USER->id==2194) or ($USER->id==2192)  or ($USER->id==2239)  or ($USER->id==2231) or ($USER->id==2196) or ($USER->id==2310))   {
	$this->content->text = $this->content->text .'<center><a href=/catspoints/catspoints.php?staffid='.$USER->id.'>Enter Points</a></center>';
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
