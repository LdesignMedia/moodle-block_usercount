<?php

defined('MOODLE_INTERNAL') || die();

/**
 * Block to display the total number of active users in the Moodle environment.
 *
 * @package block_usercount
 * @author [Uw naam]
 * @version 1.0
 */

class block_usercount extends block_base {

    /**
     * Constructor.
     */
    public function __construct() {
        $this->title = 'Actieve gebruikers';
        $this->version = '1.0';
        $this->requires = array('block_bootstrap');
    }

    /**
     * The block's content.
     *
     * @return string
     */
    public function get_content() {
        global $DB;

        $users = $DB->get_records('user', array('status' => 1));
        $count = count($users);

        $output = '<p>Er zijn momenteel <strong>' . $count . '</strong> actieve gebruikers in de Moodle omgeving.</p>';

        return $output;
    }
}
