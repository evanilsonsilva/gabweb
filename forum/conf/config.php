<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.3';

// Database
$Configuration['Database']['Name'] = 'gabweb';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'root';
$Configuration['Database']['Password'] = '123456789';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';

// Garden
$Configuration['Garden']['Title'] = 'Vanilla 2';
$Configuration['Garden']['Cookie']['Salt'] = 'hldyI7RDVmxsi6iW';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = true;
$Configuration['Garden']['Email']['SupportName'] = 'Vanilla 2';
$Configuration['Garden']['Email']['Format'] = 'text';
$Configuration['Garden']['SystemUserID'] = '1';
$Configuration['Garden']['InputFormatter'] = 'Markdown';
$Configuration['Garden']['Version'] = '2.3';
$Configuration['Garden']['Cdns']['Disable'] = false;
$Configuration['Garden']['CanProcessImages'] = true;
$Configuration['Garden']['Installed'] = true;
$Configuration['Garden']['Theme'] = 'Cloudy';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';

// Routes
$Configuration['Routes']['DefaultController'] = 'discussions';

// Vanilla
$Configuration['Vanilla']['Version'] = '2.3';

// Last edited by pdomicioex (127.0.0.1)2017-04-01 12:46:57