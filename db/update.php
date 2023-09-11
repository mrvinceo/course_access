<?php
function xmldb_local_course_access_upgrade($oldversion) {
    global $DB;

    $result = true;

    if ($oldversion < 2023091100) {
        // Code to run when upgrading from an older version.
    }

    return $result;
}
