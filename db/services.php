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
 * Wordpress Pages block version details
 *
 * @package    local_course_access
 * @copyright  2023 Paul Vincent
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$functions = array(
    'local_course_access_get_last_access' => array(
        'classname' => 'local_course_access_external',
        'methodname' => 'get_last_access',
        'classpath' => 'local/course_access/classes/webservice.php',
        'description' => 'Get the last access time for a user in a course.',
        'type' => 'read',
    )
);

$services = array(
    'User Count Webservice' => array(
        'functions' => array('local_course_access_get_last_access'),
        'restrictedusers' => 0,
        'enabled' => 1,
    )
);