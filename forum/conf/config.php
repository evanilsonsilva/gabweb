<?php if (!defined('APPLICATION')) exit();

// API
$Configuration['API']['Secret'] = 'ce9715c8-0eab-4298-a169-7724eb3f1346';
$Configuration['API']['Version'] = '0.5.0';

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
$Configuration['EnabledApplications']['api'] = 'api';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = false;
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['AdmProfissional'] = true;
$Configuration['EnabledPlugins']['ProfileExtender'] = true;

// Garden
$Configuration['Garden']['Title'] = 'Vanilla 2';
$Configuration['Garden']['Cookie']['Salt'] = 'hldyI7RDVmxsi6iW';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = '1';
$Configuration['Garden']['Registration']['Method'] = 'Approval';
$Configuration['Garden']['Registration']['InviteExpiration'] = '1 week';
$Configuration['Garden']['Registration']['CaptchaPrivateKey'] = '6Le8HRwUAAAAAD3Hp6tJJWELvasAOjQoI32stVyd';
$Configuration['Garden']['Registration']['CaptchaPublicKey'] = '6Le8HRwUAAAAADLGyblayPkP7LHWgeBZVy6XPdFn';
$Configuration['Garden']['Registration']['InviteRoles']['3'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['4'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['8'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['32'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['16'] = '0';
$Configuration['Garden']['Email']['SupportName'] = 'Vanilla 2';
$Configuration['Garden']['Email']['Format'] = 'text';
$Configuration['Garden']['Email']['SupportAddress'] = 'pdomicioex@hotmail.com';
$Configuration['Garden']['Email']['UseSmtp'] = false;
$Configuration['Garden']['Email']['SmtpHost'] = '';
$Configuration['Garden']['Email']['SmtpUser'] = 'admin';
$Configuration['Garden']['Email']['SmtpPassword'] = '12345';
$Configuration['Garden']['Email']['SmtpPort'] = '25';
$Configuration['Garden']['Email']['SmtpSecurity'] = '';
$Configuration['Garden']['Email']['OmitToName'] = false;
$Configuration['Garden']['SystemUserID'] = '1';
$Configuration['Garden']['InputFormatter'] = 'Markdown';
$Configuration['Garden']['Version'] = '2.3';
$Configuration['Garden']['Cdns']['Disable'] = false;
$Configuration['Garden']['CanProcessImages'] = true;
$Configuration['Garden']['Installed'] = true;
$Configuration['Garden']['Theme'] = 'Cloudy';

// Plugin
$Configuration['Plugin']['AdminProfissional']['TrimSize'] = 100;
$Configuration['Plugin']['AdminProfissional']['RenderCondition'] = 'all';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Profile'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';

// ProfileExtender
$Configuration['ProfileExtender']['Fields']['CRM']['FormType'] = 'TextBox';
$Configuration['ProfileExtender']['Fields']['CRM']['Label'] = 'CRM';
$Configuration['ProfileExtender']['Fields']['CRM']['Options'] = '';
$Configuration['ProfileExtender']['Fields']['CRM']['Required'] = '1';
$Configuration['ProfileExtender']['Fields']['CRM']['OnRegister'] = '1';
$Configuration['ProfileExtender']['Fields']['CRM']['OnProfile'] = '1';
$Configuration['ProfileExtender']['Fields']['Nome']['FormType'] = 'TextBox';
$Configuration['ProfileExtender']['Fields']['Nome']['Label'] = 'Nome';
$Configuration['ProfileExtender']['Fields']['Nome']['Options'] = '';
$Configuration['ProfileExtender']['Fields']['Nome']['Required'] = '1';
$Configuration['ProfileExtender']['Fields']['Nome']['OnRegister'] = '1';
$Configuration['ProfileExtender']['Fields']['Nome']['OnProfile'] = '1';

// Routes
$Configuration['Routes']['DefaultController'] = array('categories', 'Internal');

// Vanilla
$Configuration['Vanilla']['Version'] = '2.3';
$Configuration['Vanilla']['Discussions']['Layout'] = 'modern';
$Configuration['Vanilla']['Categories']['Layout'] = 'modern';

// Last edited by admin (127.0.0.1)2017-05-25 21:41:14