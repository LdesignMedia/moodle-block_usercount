<?php

defined('MOODLE_INTERNAL') || die();

class block_usercount extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_usercount');
    }

    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();

        // Get the total number of active users
        $usercount = $this->get_active_user_count();

        // Display the user count in the block
        $this->content->text = get_string('totalusers', 'block_usercount', $usercount);
        $this->content->footer = '';

        return $this->content;
    }

    private function get_active_user_count() {
        // Use Moodle core function to get active user count
        $usercount = count_records_sql("SELECT COUNT(*) FROM {user} WHERE suspended = 0 AND deleted = 0");

        return $usercount;
    }
}
