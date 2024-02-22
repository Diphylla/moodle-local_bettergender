<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * General plugin settings.
 *
 * @package     local_bettergender
 * @category    string
 * @copyright   2024 Annika Lambert <Annika.Lambert@ruhr-uni-bochum.de>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) { // needs this condition or there is error on login page

    $settings = new admin_settingpage('local_bettergender', get_string('pluginname', 'local_bettergender'));
    $ADMIN->add('localplugins', $settings);

    $settings->add(new admin_setting_heading('local_bettergender/plugindesc',
            '', get_string('plugindesc', 'local_bettergender'))
    );

    $categories = ['*', '_', '/'];
    $settings->add(new admin_setting_configmultiselect('local_bettergender/genderchar',
            get_string('setting_genderchar', 'local_bettergender'),
            get_string('setting_genderchar_desc', 'local_bettergender'),
            [], $categories)
    );
}
