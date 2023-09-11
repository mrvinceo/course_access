<?php

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir . "/externallib.php");

class local_course_access_external extends external_api {

    public static function get_last_access_parameters() {
        return new external_function_parameters(
            array('courseid' => new external_value(PARAM_INT, 'Course ID'),
                  'userid' => new external_value(PARAM_INT, 'User ID'))
        );
    }

    public static function get_last_access($courseid, $userid) {
        global $DB;
        // Verify that the course and user exist
        $course = $DB->get_record('course', array('id' => $courseid), '*', MUST_EXIST);
        $user = $DB->get_record('user', array('id' => $userid), '*', MUST_EXIST);



    
        $lastaccess = $DB->get_field('user_lastaccess', 'timeaccess', array('courseid' => $courseid, 'userid' => $userid));
        return $lastaccess;
    }

    public static function get_last_access_returns() {
        return new external_value(PARAM_INT, 'Last Access Time');
    }
}
