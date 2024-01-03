<?php

defined('MOODLE_INTERNAL') || die();

class block_usercount extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_usercount');
    }

    public function get_content() {
        global $DB;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = '';
        $this->content->footer = '';

        // Gebruik de Moodle API om het aantal actieve gebruikers te krijgen
        $usercount = $DB->count_records('user', array('deleted' => 0, 'suspended' => 0));

        $this->content->text .= get_string('usercount', 'block_usercount', $usercount);

        return $this->content;
    }
}
