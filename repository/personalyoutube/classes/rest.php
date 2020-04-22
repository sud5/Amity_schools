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
 * Personal Youtube Rest API.
 *
 * @package    repository_personalyoutube
 * @copyright  2017 Roberto Pinna
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace repository_personalyoutube;

defined('MOODLE_INTERNAL') || die();

/**
 * Personal YouTube Rest API.
 *
 * @copyright  2017 Roberto Pinna
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class rest extends \core\oauth2\rest {

    /**
     * Define the functions of the rest API.
     *
     * @return array Example:
     *  [ 'listChannels' => [ 'method' => 'get', 'endpoint' => 'http://...', 'args' => [ 'folder' => PARAM_STRING ] ] ]
     */
    public function get_api_functions() {
        return [
            'channels' => [
                'endpoint' => 'https://www.googleapis.com/youtube/v3/channels',
                'method' => 'get',
                'args' => [
                    'part' => PARAM_RAW,
                    'mine' => PARAM_RAW
                ],
                'response' => 'text'
            ],
            'playlistItems' => [
                'endpoint' => 'https://www.googleapis.com/youtube/v3/playlistItems',
                'method' => 'get',
                'args' => [
                    'part' => PARAM_RAW,
                    'playlistId' => PARAM_RAW,
                    'maxResults' => PARAM_INT,
                    'pageToken' => PARAM_RAW
                ],
                'response' => 'text'
            ],
            'search' => [
                'endpoint' => 'https://www.googleapis.com/youtube/v3/search',
                'method' => 'get',
                'args' => [
                    'part' => PARAM_RAW,
                    'forMine' => PARAM_RAW,
                    'maxResults' => PARAM_INT,
                    'pageToken' => PARAM_RAW,
                    'q' => PARAM_RAW,
                    'type' => PARAM_RAW
                ],
                'response' => 'text'
            ],
        ];
    }
}
