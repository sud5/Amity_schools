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
 * Local plugin "Boost navigation fumbling" - Language pack
 *
 * @package    local_boostnavigation
 * @copyright  2017 Alexander Bias, Ulm University <alexander.bias@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Boost navigation fumbling';
$string['privacy:metadata:preference:collapse'] = 'The collapse status of a navigation node in the nav drawer.';
$string['privacy:request:preference:collapse'] = 'The collapse status of the navigation node "{$a->nodename}" in the nav drawer is {$a->collapse}';
$string['setting_collapseactivitiescoursenode_desc'] = 'Enabling this setting will let users collapse the "Activities" node.<br /><em>This setting is only processed when the "Inserting node \'Activities\'" setting is also activated.</em>';
$string['setting_collapseactivitiescoursenode'] = 'Collapse node "Activities"';
$string['setting_collapseactivitiescoursenodedefault_desc'] = 'Enabling this setting will collapse the "Activities" node by default. Otherwise, it will be expanded by default. This setting just controls the default for each user when the node is rendered for him for the first time.<br /><em>This setting is only processed when collapsing the node is activated at all.</em>';
$string['setting_collapseactivitiescoursenodedefault'] = 'Collapse node "Activities" by default';
$string['setting_collapseactivitiescoursenodesession_desc'] = 'Enabling this setting will remember the collapse status of the "Activities" node only for a user\'s current session. After the next logout and login of a particular user, the collapse status will be reset to the value which is defined as default above. If this setting is disabled, the collapse status for these nodes will be remembered beyond the end of a user\'s session.<br /><em>This setting is only processed when collapsing the node is activated at all.</em>';
$string['setting_collapseactivitiescoursenodesession'] = 'Remember collapse status of the "Activities" node for current session only';
$string['setting_collapsebottomnodesheading'] = 'Collapse bottom nodes in Boost\'s nav drawer';
$string['setting_collapsecoursenodesheading'] = 'Collapse course nodes in Boost\'s nav drawer';
$string['setting_collapsecoursesectionscoursenode_desc'] = 'Enabling this setting will let users collapse the "Sections" node.<br /><em>This setting is only processed when the "Inserting node \'Sections\'" setting is also activated.</em>';
$string['setting_collapsecoursesectionscoursenode'] = 'Collapse node "Sections"';
$string['setting_collapsecoursesectionscoursenodedefault_desc'] = 'Enabling this setting will collapse the "Sections" node by default. Otherwise, it will be expanded by default. This setting just controls the default for each user when the node is rendered for him for the first time.<br /><em>This setting is only processed when collapsing the node is activated at all.</em>';
$string['setting_collapsecoursesectionscoursenodedefault'] = 'Collapse node "Sections" by default';
$string['setting_collapsecoursesectionscoursenodesession_desc'] = 'Enabling this setting will remember the collapse status of the "Sections" node only for a user\'s current session. After the next logout and login of a particular user, the collapse status will be reset to the value which is defined as default above. If this setting is disabled, the collapse status for these nodes will be remembered beyond the end of a user\'s session.<br /><em>This setting is only processed when collapsing the node is activated at all.</em>';
$string['setting_collapsecoursesectionscoursenodesession'] = 'Remember collapse status of the "Sections" node for current session only';
$string['setting_collapsecustombottomnodesadmins_desc'] = 'Enabling this setting will let users collapse the custom bottom nodes for admins.<br /><em>This setting is only processed when the "Insert custom bottom nodes for admins" setting has at least one custom node with at least one child node added.</em>';
$string['setting_collapsecustombottomnodesadmins'] = 'Collapse custom bottom nodes for admins';
$string['setting_collapsecustombottomnodesadminsaccordion_desc'] = 'Enabling this setting will collapse the custom bottom nodes for admins as accordion, this means that only one parent node can be expanded at a time. If a second parent node is expanded, the currently expanded parent node is collapsed automatically. If this setting is disabled, multiple parent nodes can be expanded at a time.<br /><em>This setting is only processed when collapsing the custom bottom nodes for admins is activated at all.</em>';
$string['setting_collapsecustombottomnodesadminsaccordion'] = 'Collapse custom bottom nodes for admins as accordion';
$string['setting_collapsecustombottomnodesadminsdefault_desc'] = 'Enabling this setting will collapse the custom bottom nodes for admins by default. Otherwise, they will be expanded by default. This setting just controls the default for each user when the nodes are rendered for him for the first time.<br /><em>This setting is only processed when collapsing the custom bottom nodes for admins is activated at all.</em>';
$string['setting_collapsecustombottomnodesadminsdefault'] = 'Collapse custom bottom nodes for admins by default';
$string['setting_collapsecustombottomnodesadminssession_desc'] = 'Enabling this setting will remember the collapse status of the custom bottom nodes for admins only for a user\'s current session. After the next logout and login of a particular user, the collapse status will be reset to the value which is defined as default above. If this setting is disabled, the collapse status for these nodes will be remembered beyond the end of a user\'s session.<br /><em>This setting is only processed when collapsing the custom bottom nodes for admins is activated at all.</em>';
$string['setting_collapsecustombottomnodesadminssession'] = 'Remember collapse status of custom bottom nodes for admins for current session only';
$string['setting_collapsecustombottomnodesusers_desc'] = 'Enabling this setting will let users collapse the custom bottom nodes for users.<br /><em>This setting is only processed when the "Insert custom bottom nodes for users" setting has at least one custom node with at least one child node added.</em>';
$string['setting_collapsecustombottomnodesusers'] = 'Collapse custom bottom nodes for users';
$string['setting_collapsecustombottomnodesusersaccordion_desc'] = 'Enabling this setting will collapse the custom bottom nodes for users as accordion, this means that only one parent node can be expanded at a time. If a second parent node is expanded, the currently expanded parent node is collapsed automatically. If this setting is disabled, multiple parent nodes can be expanded at a time.<br /><em>This setting is only processed when collapsing the custom bottom nodes for users is activated at all.</em>';
$string['setting_collapsecustombottomnodesusersaccordion'] = 'Collapse custom bottom nodes for users as accordion';
$string['setting_collapsecustombottomnodesusersdefault_desc'] = 'Enabling this setting will collapse the custom bottom nodes for users by default. Otherwise, they will be expanded by default. This setting just controls the default for each user when the nodes are rendered for him for the first time.<br /><em>This setting is only processed when collapsing the custom bottom nodes for users is activated at all.</em>';
$string['setting_collapsecustombottomnodesusersdefault'] = 'Collapse custom bottom nodes for users by default';
$string['setting_collapsecustombottomnodesuserssession_desc'] = 'Enabling this setting will remember the collapse status of the custom bottom nodes for users only for a user\'s current session. After the next logout and login of a particular user, the collapse status will be reset to the value which is defined as default above. If this setting is disabled, the collapse status for these nodes will be remembered beyond the end of a user\'s session.<br /><em>This setting is only processed when collapsing the custom bottom nodes for users is activated at all.</em>';
$string['setting_collapsecustombottomnodesuserssession'] = 'Remember collapse status of custom bottom nodes for users for current session only';
$string['setting_collapsecustomcoursenodesadmins_desc'] = 'Enabling this setting will let users collapse the custom course nodes for admins.<br /><em>This setting is only processed when the "Insert custom course nodes for admins" setting has at least one custom node with at least one child node added.</em>';
$string['setting_collapsecustomcoursenodesadmins'] = 'Collapse custom course nodes for admins';
$string['setting_collapsecustomcoursenodesadminsaccordion_desc'] = 'Enabling this setting will collapse the custom course nodes for admins as accordion, this means that only one parent node can be expanded at a time. If a second parent node is expanded, the currently expanded parent node is collapsed automatically. If this setting is disabled, multiple parent nodes can be expanded at a time.<br /><em>This setting is only processed when collapsing the custom course nodes for admins is activated at all.</em>';
$string['setting_collapsecustomcoursenodesadminsaccordion'] = 'Collapse custom course nodes for admins as accordion';
$string['setting_collapsecustomcoursenodesadminsdefault_desc'] = 'Enabling this setting will collapse the custom course nodes for admins by default. Otherwise, they will be expanded by default. This setting just controls the default for each user when the nodes are rendered for him for the first time.<br /><em>This setting is only processed when collapsing the custom course nodes for admins is activated at all.</em>';
$string['setting_collapsecustomcoursenodesadminsdefault'] = 'Collapse custom course nodes for admins by default';
$string['setting_collapsecustomcoursenodesadminssession_desc'] = 'Enabling this setting will remember the collapse status of the custom course nodes for admins only for a user\'s current session. After the next logout and login of a particular user, the collapse status will be reset to the value which is defined as default above. If this setting is disabled, the collapse status for these nodes will be remembered beyond the end of a user\'s session.<br /><em>This setting is only processed when collapsing the custom course nodes for admins is activated at all.</em>';
$string['setting_collapsecustomcoursenodesadminssession'] = 'Remember collapse status of custom course nodes for admins for current session only';
$string['setting_collapsecustomcoursenodesusers_desc'] = 'Enabling this setting will let users collapse the custom course nodes for users.<br /><em>This setting is only processed when the "Insert custom course nodes for users" setting has at least one custom node with at least one child node added.</em>';
$string['setting_collapsecustomcoursenodesusers'] = 'Collapse custom course nodes for users';
$string['setting_collapsecustomcoursenodesusersaccordion_desc'] = 'Enabling this setting will collapse the custom course nodes for users as accordion, this means that only one parent node can be expanded at a time. If a second parent node is expanded, the currently expanded parent node is collapsed automatically. If this setting is disabled, multiple parent nodes can be expanded at a time.<br /><em>This setting is only processed when collapsing the custom course nodes for users is activated at all.</em>';
$string['setting_collapsecustomcoursenodesusersaccordion'] = 'Collapse custom course nodes for users as accordion';
$string['setting_collapsecustomcoursenodesusersdefault_desc'] = 'Enabling this setting will collapse the custom course nodes for users by default. Otherwise, they will be expanded by default. This setting just controls the default for each user when the nodes are rendered for him for the first time.<br /><em>This setting is only processed when collapsing the custom course nodes for users is activated at all.</em>';
$string['setting_collapsecustomcoursenodesusersdefault'] = 'Collapse custom course nodes for users by default';
$string['setting_collapsecustomcoursenodesuserssession_desc'] = 'Enabling this setting will remember the collapse status of the custom course nodes for users only for a user\'s current session. After the next logout and login of a particular user, the collapse status will be reset to the value which is defined as default above. If this setting is disabled, the collapse status for these nodes will be remembered beyond the end of a user\'s session.<br /><em>This setting is only processed when collapsing the custom course nodes for users is activated at all.</em>';
$string['setting_collapsecustomcoursenodesuserssession'] = 'Remember collapse status of custom course nodes for users for current session only';
$string['setting_collapsecustomnodesadmins_desc'] = 'Enabling this setting will let users collapse the custom root nodes for admins.<br /><em>This setting is only processed when the "Insert custom root nodes for admins" setting has at least one custom node with at least one child node added.</em>';
$string['setting_collapsecustomnodesadmins'] = 'Collapse custom root nodes for admins';
$string['setting_collapsecustomnodesadminsaccordion_desc'] = 'Enabling this setting will collapse the custom root nodes for admins as accordion, this means that only one parent node can be expanded at a time. If a second parent node is expanded, the currently expanded parent node is collapsed automatically. If this setting is disabled, multiple parent nodes can be expanded at a time.<br /><em>This setting is only processed when collapsing the custom root nodes for admins is activated at all.</em>';
$string['setting_collapsecustomnodesadminsaccordion'] = 'Collapse custom root nodes for admins as accordion';
$string['setting_collapsecustomnodesadminsdefault_desc'] = 'Enabling this setting will collapse the custom root nodes for admins by default. Otherwise, they will be expanded by default. This setting just controls the default for each user when the nodes are rendered for him for the first time.<br /><em>This setting is only processed when collapsing the custom root nodes for admins is activated at all.</em>';
$string['setting_collapsecustomnodesadminsdefault'] = 'Collapse custom root nodes for admins by default';
$string['setting_collapsecustomnodesadminssession_desc'] = 'Enabling this setting will remember the collapse status of the custom root nodes for admins only for a user\'s current session. After the next logout and login of a particular user, the collapse status will be reset to the value which is defined as default above. If this setting is disabled, the collapse status for these nodes will be remembered beyond the end of a user\'s session.<br /><em>This setting is only processed when collapsing the custom root nodes for admins is activated at all.</em>';
$string['setting_collapsecustomnodesadminssession'] = 'Remember collapse status of custom root nodes for admins for current session only';
$string['setting_collapsecustomnodesusers_desc'] = 'Enabling this setting will let users collapse the custom root nodes for users.<br /><em>This setting is only processed when the "Insert custom root nodes for users" setting has at least one custom node with at least one child node added.</em>';
$string['setting_collapsecustomnodesusers'] = 'Collapse custom root nodes for users';
$string['setting_collapsecustomnodesusersaccordion_desc'] = 'Enabling this setting will collapse the custom root nodes for users as accordion, this means that only one parent node can be expanded at a time. If a second parent node is expanded, the currently expanded parent node is collapsed automatically. If this setting is disabled, multiple parent nodes can be expanded at a time.<br /><em>This setting is only processed when collapsing the custom root nodes for users is activated at all.</em>';
$string['setting_collapsecustomnodesusersaccordion'] = 'Collapse custom root nodes for users as accordion';
$string['setting_collapsecustomnodesusersdefault_desc'] = 'Enabling this setting will collapse the custom root nodes for users by default. Otherwise, they will be expanded by default. This setting just controls the default for each user when the nodes are rendered for him for the first time.<br /><em>This setting is only processed when collapsing the custom root nodes for users is activated at all.</em>';
$string['setting_collapsecustomnodesusersdefault'] = 'Collapse custom root nodes for users by default';
$string['setting_collapsecustomnodesuserssession_desc'] = 'Enabling this setting will remember the collapse status of the custom root nodes for users only for a user\'s current session. After the next logout and login of a particular user, the collapse status will be reset to the value which is defined as default above. If this setting is disabled, the collapse status for these nodes will be remembered beyond the end of a user\'s session.<br /><em>This setting is only processed when collapsing the custom root nodes for users is activated at all.</em>';
$string['setting_collapsecustomnodesuserssession'] = 'Remember collapse status of custom root nodes for users for current session only';
$string['setting_collapsemycoursesnode_desc'] = 'Enabling this setting will let users collapse the "My courses" node.';
$string['setting_collapsemycoursesnode'] = 'Collapse node "My Courses"';
$string['setting_collapsemycoursesnodedefault_desc'] = 'Enabling this setting will collapse the "My courses" node by default. Otherwise, it will be expanded by default. This setting just controls the default for each user when the node is rendered for him for the first time.<br /><em>This setting is only processed when collapsing the node is activated at all.</em>';
$string['setting_collapsemycoursesnodedefault'] = 'Collapse node "My Courses" by default';
$string['setting_collapsemycoursesnodesession_desc'] = 'Enabling this setting will remember the collapse status of the "My courses" node only for a user\'s current session. After the next logout and login of a particular user, the collapse status will be reset to the value which is defined as default above. If this setting is disabled, the collapse status for these nodes will be remembered beyond the end of a user\'s session.<br /><em>This setting is only processed when collapsing the node is activated at all.</em>';
$string['setting_collapsemycoursesnodesession'] = 'Remember collapse status of the "My courses" node for current session only';
$string['setting_collapsemycoursesnodeperformancehint'] = 'Please note: This feature will only work if the setting <a href="{$a->url}">navshowmycoursecategories</a> is not active. If you enabled navshowmycoursecategories, this setting will be ignored and won\'t do anything.';
$string['setting_collapsenodesheading'] = 'Collapse root nodes in Boost\'s nav drawer';
$string['setting_collapsenodestechnicalhint'] = 'Technical background: This is done by adding some JavaScript and CSS code to the page which will show or hide the second-level nodes as soon as the user clicks on the node. The collapse status of the node will be processed in each user\'s session and stored in each user\'s user preferences. Thus, the nodes will only be hidden from the nav drawer at runtime, but they will remain in the navigation tree and can still be accessed by other parts of Moodle.';
$string['setting_customnodesusagechildnodes'] = 'Custom nodes can be nested with one hierarchy level, i.e. a custom node can have children nodes. The create a child node instead of a parent node, just prefix the custom node title with a hyphen.<br />
For example:<br />
Administration|/admin/index.php<br />
-List of Moodle users|/admin/user.php<br />
-Manage courses|/course/management.php<br /><br />
Please note:
<ul>
<li>For technical reasons, a parent node always needs a valid URL, even if the node will be made collapsible afterwards.</li>
<li>Additionally, if a parent node is not shown because a (language, cohort or role) restriction applies, its children nodes also won\'t be shown.</li>
</ul>';
$string['setting_customnodesusageadmins'] = 'Each line consists of a link title, a link URL and supported language(s) (optional) - separated by pipe characters. Each custom node needs to be written in a new line.<br />
For example:<br />
Moodle.org website|http://www.moodle.org|en,de<br />
List of Moodle users|/admin/user.php<br /><br />
Further information to the parameters:
<ul>
<li><b>Title:</b> This text will be shown as the clickable text / label of the custom node.</li>
<li><b>Link:</b> The link target can be defined by a full web URL(e.g. https://moodle.org) or a relative path within your Moodle instance (e.g. /login/logout.php).</li>
<li><b>Supported language(s) (optional):</b> This setting can be used for displaying the custom node to users of the specified language only. Separate more than one supported language with commas. If the custom node should be displayed in all languages, then leave this field empty.</li >
</ul>
Please note:
<ul>
<li>Custom nodes for admins are processed by the same function as custom nodes for users are. Thus, in addition to the parameters which are given above, the same list of parameters that custom nodes for users support are also supported here. Feel free to use them here if you really need them for any special scenario even if they are not documented here once more for the sake of simplicity.</li>
<li>The title parameter can contain placeholders, for example {coursefullname} to create a node labeled with the current course\'s full name. Placeholders are encapsulated in curly brackets and will be replaced automatically when the custom node is created.<br />Available placeholders are:
<ul>
<li>{coursefullname}: The course\'s full name</li>
<li>{courseshortname}: The course\'s shortname</li>
<li>{editingtoggle}: The value \'Turn editing on\' or \'Turn editing off\' from the currently used language pack</li>
<li>{userfullname}: The logged in user\'s full name</li>
<li>{userusername}: The logged in user\'s username</li>
</ul>
</li>
<li>The link parameter can contain placeholders, for example /course/edit.php?id={courseid} to create a node linking to the current course\'s settings page. Placeholders are encapsulated in curly brackets and will be replaced automatically when the custom node is created.<br />Available placeholders are:
<ul>
<li>{courseid}: The course\'s (internal) ID</li>
<li>{courseshortname}: The course\'s shortname</li>
<li>{editingtoggle}: The value \'on\' or \'off\' which is needed to toggle edit mode</li>
<li>{userid}: The logged in user\'s (internal) ID</li>
<li>{userusername}: The logged in user\'s username</li>
<li>{pagecontextid}: The current page\'s context ID</li>
<li>{pagepath}: The current page\'s URL path</li>
<li>{sesskey}: The sesskey to use in secured URLs</li>
</ul>
</li>
<li>If the custom node does not show up in Boost\'s nav drawer, please check if all mandatory params are set correctly and if the optional language setting fits to your current Moodle user language.</li>
<li>Due to the way how Boost\'s nav drawer is built in Moodle core, all custom nodes are displayed equally. Adding custom CSS classes, custom HTML element ids or a target attribute to open the link in a new window is impossible.</li>
</ul>';
$string['setting_customnodesusageusers'] = 'Each line consists of a link title, a link URL, supported language(s) (optional), supported cohort(s) (optional), supported role(s) (optional), supported global roles(s) (optional), the logical combination operator (optional), an icon (optional), the ID attribute (optional) and a \'before node key\' (optional) - separated by pipe characters. Each custom node needs to be written in a new line.<br />
For example:<br />
Moodle.org website|http://www.moodle.org|en,de<br />
Our university|http://www.our-university.edu<br />
Faculty of mathematics|http://www.our-university.edu/math||math<br />
Teachers\' handbook|http://www.our-university.edu/teacher-handbook|||editingteacher,teacher<br />
Student information course|/course/view.php?id=1234||||||fa-graduation-cap<br />
{editingtoggle}|/course/view.php?id={courseid}&sesskey={sesskey}&edit={editingtoggle}|||editingteacher|admin,manager|OR|fa-pencil|editing|participants<br /><br />
Further information to the parameters:
<ul>
<li><b>Title:</b> This text will be shown as the clickable text / label of the custom node.</li>
<li><b>Link:</b> The link target can be defined by a full web URL(e.g. https://moodle.org) or a relative path within your Moodle instance (e.g. /login/logout.php).</li>
<li><b>Supported language(s) (optional):</b> This setting can be used for displaying the custom node to users of the specified language only. Separate more than one supported language with commas. If the custom node should be displayed in all languages, then leave this field empty.</li >
<li><b>Supported cohort(s) (optional):</b> This setting can be used for displaying the custom node to members of the specified cohort only. Use the cohort\'s ID, not the cohort\'s name, for this setting. Separate more than one supported cohort with commas. If the custom node should be displayed for users regardless of any cohort membership, then leave this field empty.</li>
<li><b>Supported role(s) (optional):</b> This setting can be used for displaying the custom node only to members with the specified role in each context. Use the role\'s shortname for this setting. Separate more than one supported role with commas. If the custom node should be displayed for users regardless of any role, then leave this field empty.</li>
<li><b>Supported system role(s) (optional):</b> This setting can be used for displaying the custom node only to users with the specified role in system context. Use the role\'s shortname for this setting. The shortname \'admin\' is supported to check if the user is a site admin. Separate more than one supported role with commas. If the custom node should be displayed for users regardless of any system role, then leave this field empty.</li>
<li><b>Logical combination operator (optional):</b> This setting can be used to change the logical combination of the optional parameters for cohort, role and system role. If you set this setting to AND or leave this setting empty, the optional parameters for cohort, role and system role will be logically combined with AND and the custom node will only be shown if ALL parameters apply. If you set this setting to OR, the optional parameters for cohort, role and system role will be logically combined with OR and the custom node will be shown if ANY of the parameters apply. This gives you the flexibility to create, for example, a node which is shown to users with a given course role as well as to users with a given system role as shown in our example above.</li>
<li><b>Icon (optional):</b> This icon will be used as icon for the custom node, for example fa-flag. Use a Font Awesome icon identifier (<a href="https://fontawesome.com/v4.7.0/icons/">See the icon list on fontawesome.com</a>) to identify which icon should be used. Font Awesome is included in Boost, classic Moodle pix icons are not supported here. If you just want to use a standard bullet icon for the custom node, then leave this field empty. Custom nodes which don\'t get a standard bullet icon automatically also can\'t get a custom icon currently.</li>
<li><b>ID attribute (optional):</b> This setting can be used for setting the ID attribute of the custom node to the given fixed value. The given ID value is cleaned for alphanumeric characters only and prefixed by the particular custom node area, for example setting the ID of a node in the bottom nodes for admins area to \'my_node\' will result in an ID attribute filled with \'localboostnavigationcustombottomadminsmynode\'. This setting gives you the ability to reference a custom node in CSS selectors or even in custom JavaScript code. Setting the same ID to multiple nodes is not forbidden here, but please note that duplicate ID attributes are discouraged in HTML pages. If this field is empty, the custom node will get an automatically generated ID which is not really suitable for referencing.</li>
<li><b>Before node key (optional):</b> This setting can be used to specify the node key above which the custom node should be placed. You find the node key in the \'data-key\' HTML attribute of the node you want to reference here. In case of a set of nodes made of a parent and one or more children, this setting must be given to each node of the set.<br/>Please note that you can only use before node keys from the node context you are adding the node to. For example, you can use \'privatefiles\' or \'calendar\' in the root node context or you can use \'participants\' or \'grades\' in the course node context. If the before node key is unknown or cannot be processed for some unknown reason, the node will be added to the end of the node context.<br />Please also note that this setting is considered partly experimental as is might still not be possible to use some nodes as before nodes with this setting.</li>
</ul>
Please note:
<ul>
<li>Pipe dividing for optional parameters is always needed if they are located between other options. This means that you have to separate params with the pipe character although they are empty. Also see the example for the Faculty of mathematics custom node above.</li>
<li>The title parameter can contain placeholders, for example {coursefullname} to create a node labeled with the current course\'s full name. Placeholders are encapsulated in curly brackets and will be replaced automatically when the custom node is created.<br />Available placeholders are:
<ul>
<li>{coursefullname}: The course\'s full name</li>
<li>{courseshortname}: The course\'s shortname</li>
<li>{editingtoggle}: The value \'Turn editing on\' or \'Turn editing off\' from the currently used language pack</li>
<li>{userfullname}: The logged in user\'s full name</li>
<li>{userusername}: The logged in user\'s username</li>
</ul>
<li>The link parameter can contain placeholders, for example /course/edit.php?id={courseid} to create a node linking to the current course\'s settings page. Placeholders are encapsulated in curly brackets and will be replaced automatically when the custom node is created.<br />Available placeholders are:
<ul>
<li>{courseid}: The course\'s (internal) ID</li>
<li>{courseshortname}: The course\'s shortname</li>
<li>{editingtoggle}: The value \'on\' or \'off\' which is needed to toggle edit mode</li>
<li>{userid}: The logged in user\'s (internal) ID</li>
<li>{userusername}: The logged in user\'s username</li>
<li>{pagecontextid}: The current page\'s context ID</li>
<li>{pagepath}: The current page\'s URL path</li>
<li>{sesskey}: The sesskey to use in secured URLs</li>
</ul>
</li>
<li>If the custom node does not show up in Boost\'s nav drawer, please check if all mandatory params are set correctly, if the optional language setting fits to your current Moodle user language and if you are a member of the optional cohort setting.</li>
<li>Due to the way how Boost\'s nav drawer is built in Moodle core, all custom nodes are displayed equally. Adding custom CSS classes, custom HTML element ids or a target attribute to open the link in a new window is impossible.</li>
</ul>';
$string['setting_insertactivitiescoursenode_desc'] = 'Enabling this setting will insert an "Activities" node to Boost\'s nav drawer which will hold nodes linking to the activity overview pages. It basically brings the existing functionality of the "Activities" block to Boost\'s nav drawer.';
$string['setting_insertactivitiescoursenode'] = 'Insert node "Activities"';
$string['setting_insertbottomnodesheading'] = 'Insert bottom nodes to Boost\'s nav drawer';
$string['setting_insertcoursenodesheading'] = 'Insert course nodes to Boost\'s nav drawer';
$string['setting_insertcoursesectionscoursenode_desc'] = 'Enabling this setting will insert a "Sections" node to Boost\'s nav drawer which will be placed above the first section of the current course.';
$string['setting_insertcoursesectionscoursenode'] = 'Insert node "Sections"';
$string['setting_insertcoursesectionscoursenodecorehint'] = 'Please note: This feature will only work if the setting <a href="{$a->url}">linkcoursesections</a> is active. If you disabled linkcoursesections, this setting will be ignored and won\'t do anything.';
$string['setting_insertcustombottomnodesadmins_desc'] = 'With this setting, you can insert custom nodes to Boost\'s nav drawer which will be added below the main section in the nav drawer, similar to the "site administration" item. These custom nodes will only be shown to site administrators.';
$string['setting_insertcustombottomnodesadmins'] = 'Insert custom bottom nodes for admins';
$string['setting_insertcustombottomnodesusers_desc'] = 'With this setting, you can insert custom nodes to Boost\'s nav drawer which will be added below the main section in the nav drawer, similar to the "site administration" item. These custom nodes will be shown to all users.';
$string['setting_insertcustombottomnodesusers'] = 'Insert custom bottom nodes for users';
$string['setting_insertcustomcoursenodesadmins_desc'] = 'With this setting, you can insert custom nodes to Boost\'s nav drawer which will be added after the last item of the course section in the nav drawer, most probably below the last course topic\'s item. These custom nodes will only be shown to site administrators.';
$string['setting_insertcustomcoursenodesadmins'] = 'Insert custom course nodes for admins';
$string['setting_insertcustomcoursenodesusers_desc'] = 'With this setting, you can insert custom nodes to Boost\'s nav drawer which will be added after the last item of the course section in the nav drawer, most probably below the last course topic\'s item. These custom nodes will be shown to all users.';
$string['setting_insertcustomcoursenodesusers'] = 'Insert custom course nodes for users';
$string['setting_insertcustomnodesadmins_desc'] = 'With this setting, you can insert custom nodes to Boost\'s nav drawer which will be added after the last item of the main section in the nav drawer, most probably below the "My courses" item. These custom nodes will only be shown to site administrators.';
$string['setting_insertcustomnodesadmins'] = 'Insert custom root nodes for admins';
$string['setting_insertcustomnodesusers_desc'] = 'With this setting, you can insert custom nodes to Boost\'s nav drawer which will be added after the last item of the main section in the nav drawer, most probably below the "My courses" item. These custom nodes will be shown to all users.';
$string['setting_insertcustomnodesusers'] = 'Insert custom root nodes for users';
$string['setting_insertnodescollapsehint'] = 'Please note that the inserted node has an action link which leads to the course home page because Boost does not support adding nodes without an action link. The action link will be overridden as soon as you also enable the setting to collapse the node at the same time.';
$string['setting_insertnodesheading'] = 'Insert root nodes to Boost\'s nav drawer';
$string['setting_insertresourcescoursenode_desc'] = 'Enabling this setting will insert a "Resources" node to Boost\'s nav drawer which will link to the resources overview page.<br /><em>This setting is associated to the "Inserting node \'Activities\'" setting. If you enable both settings, you wil get an "Activities" and a "Resources" node as requested. If you only enable the "Activities" setting, the "Activities" node will also hold a node linking to the resources overview page.</em>';
$string['setting_insertresourcescoursenode'] = 'Insert node "Resources"';
$string['setting_removebadgescoursenode_desc'] = 'Enabling this setting will remove the "Badges" node from Boost\'s nav drawer if there are no badges in the course. Teachers can still always access the badges management page in the course menu (cog menu).<br /><em>This setting is only processed when the badges subsystem is enabled in Moodle.</em>';
$string['setting_removebadgescoursenode'] = 'Remove "Badges" node';
$string['setting_removecalendarnode_desc'] = 'Enabling this setting will remove the "Calendar" node from Boost\'s nav drawer.';
$string['setting_removecalendarnode'] = 'Remove "Calendar" node';
$string['setting_removecompetenciescoursenode_desc'] = 'Enabling this setting will remove the "Competencies" node from Boost\'s nav drawer if there are no competencies in the course. For teachers, there will be another "Competencies" node added to the course menu (cog menu).<br /><em>This setting is only processed when the competencies subsystem is enabled in Moodle.</em>';
$string['setting_removecompetenciescoursenode'] = 'Remove "Competencies" node';
$string['setting_removecoursenodesheading'] = 'Remove course nodes from Boost\'s nav drawer';
$string['setting_removecoursenodestechnicalhint'] = 'Technical background: This is done by removing the node from the navigation tree. Thus, the node cannot be accessed by other parts of Moodle anymore. In normal Moodle setups, this should hopefully not cause any trouble.';
$string['setting_removedashboardnode_desc'] = 'Enabling this setting will remove the "Dashboard" node from Boost\'s nav drawer.';
$string['setting_removedashboardnode'] = 'Remove "Dashboard" node';
$string['setting_removefirsthomenode_desc'] = 'Enabling this setting will remove the "Home" or "Dashboard" node, depending on what the user chose to be his home page, from Boost\'s nav drawer.';
$string['setting_removefirsthomenode'] = 'Remove first "Home" or "Dashboard" node';
$string['setting_removegradescoursenode_desc'] = 'Enabling this setting will remove the "Grades" node from Boost\'s nav drawer. It is removed for all users, regardless of a users capabilities and regardless of the setting \'Show gradebook to students\' in the course settings.';
$string['setting_removegradescoursenode'] = 'Remove "Grades" node';
$string['setting_removehomenode_desc'] = 'Enabling this setting will remove the "Home" node from Boost\'s nav drawer.';
$string['setting_removehomenode'] = 'Remove "Home" node';
$string['setting_removemycoursesnode_desc'] = 'Enabling this setting will remove the "My courses" node from Boost\'s nav drawer.';
$string['setting_removemycoursesnode'] = 'Remove "My courses" node';
$string['setting_removemycoursesnodeperformancehint'] = 'Please note: If you enable this setting and have also enabled the setting <a href="{$a->url}">navshowmycoursecategories</a>, removing the "My courses" node takes more time and you should consider disabling the navshowmycoursecategories setting.';
$string['setting_removenodesheading'] = 'Remove root nodes from Boost\'s nav drawer';
$string['setting_removenodestechnicalhint'] = 'Technical background: This is done by setting the node\'s showinflatnavigation attribute to false. Thus, the node will only be hidden from the nav drawer, but it will remain in the navigation tree and can still be accessed by other parts of Moodle.';
$string['setting_removeparticipantscoursenode_desc'] = 'Enabling this setting will remove the "Participants" node from Boost\'s nav drawer. It is removed for all users, regardless of a users capabilities.';
$string['setting_removeparticipantscoursenode'] = 'Remove "Participants" node';
$string['setting_removeprivatefilesnode_desc'] = 'Enabling this setting will remove the "Private files" node from Boost\'s nav drawer.';
$string['setting_removeprivatefilesnode'] = 'Remove "Private files" node';
$string['setting_removesecondhomenode_desc'] = 'Enabling this setting will remove the "Home" or "Dashboard" node, depending on what the user chose not to be his home page, from Boost\'s nav drawer.';
$string['setting_removesecondhomenode'] = 'Remove second "Home" or "Dashboard" node';
$string['settingspage_rootnodes'] = 'Root nodes';
$string['settingspage_coursenodes'] = 'Course nodes';
$string['settingspage_bottomnodes'] = 'Bottom nodes';
