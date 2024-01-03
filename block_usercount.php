<?php

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/lib/block_usercount.php');

class block_usercount extends block_usercount_base {

    public function init() {
        $this->title = get_string('block_usercount', 'block_usercount');
        $this->version = '1.0';
        $this->requires = array('block_display' => 2018052300);
    }

    public function get_content() {
        global $DB;

        $users = $DB->get_records_sql('
            SELECT COUNT(*) AS total
            FROM {user}
            WHERE status = 1
            AND deleted = 0
        ');

        $output = '<p>' . $users[0]->total . ' actieve gebruikers</p>';

        return $output;
    }
}

function block_usercount_install() {
    return true;
}

function block_usercount_uninstall() {
    return true;
}

function block_usercount_activate() {
    return true;
}

function block_usercount_deactivate() {
    return true;
}
