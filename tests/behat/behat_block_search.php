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
 * Behat test cases for the block_search plugin.
 *
 * @package   block_search
 * @copyright 2023, Anuraj Anand
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 class behat_block_search extends behat_base {

    /**
     * Opens Dashboard.
     */
    public function open_dashboard() {
        $this->getSession()->visit($this->locate_path('/my'));
    }
}