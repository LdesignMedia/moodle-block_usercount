<?php
// Dit bestand is onderdeel van Moodle - http://moodle.org/
//
// Moodle is gratis software: je kunt het herverdelen en/of wijzigen
// onder de voorwaarden van de GNU General Public License zoals gepubliceerd door
// de Free Software Foundation, onder versie 3 van de Licentie of
// (naar jouw keuze) elke latere versie.
//
// Moodle wordt gedistribueerd in de hoop dat het nuttig zal zijn,
// maar ZONDER ENIGE GARANTIE; zonder zelfs de impliciete garantie van
// VERKOOPBAARHEID of GESCHIKTHEID VOOR EEN BEPAALD DOEL.  Zie de
// GNU General Public License voor meer details.
//
// Je zou een kopie van de GNU General Public License moeten hebben ontvangen
// samen met Moodle.  Als dat niet het geval is, zie <http://www.gnu.org/licenses/>.

defined('MOODLE_INTERNAL') || die();

class block_usercount extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_usercount');
    }

    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content         =  new stdClass;
        $this->content->text   = $this->count_users();
        $this->content->footer = '';

        return $this->content;
    }

    private function count_users() {
        global $DB;
        $count = $DB->count_records('user', array('deleted'=>0, 'suspended'=>0));
        return get_string('usercount', 'block_usercount', $count);
    }
}
