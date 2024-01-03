<?php
class block_usercount extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_usercount');
    }

    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->text = $this->get_user_count();
        $this->content->footer = '';

        return $this->content;
    }

    private function get_user_count() {
        global $DB;

        // Gebruik Moodle-functies om het aantal actieve gebruikers op te halen
        $active_users_count = $DB->count_records('user', ['suspended' => 0, 'deleted' => 0]);

        return get_string('totalusers', 'block_usercount', $active_users_count);
    }
}
