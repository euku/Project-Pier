<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    'installation' => 'Installation',
    'administration' => 'Administration',
    'administration tool desc mass_mailer' => 'Hiermit können Sie eine (Plain Text-) Nachricht an eine Gruppe von Nutzern schicken.',
    'administration tool name test_mail_settings' => 'Mail-Einstellungen testen',
    'administration tool desc test_mail_settings' => 'Senden Sie eine Test-E-Mail, um zu prüfen ob der ProjectPier-Mailer korrekt konfiguriert ist.',
    'administration tool dnx' => 'Das Administrationswerkzeug „%s“ gibt es nicht.',
    'administration tool name mass_mailer' => 'Massenversand von E-Mails',
    'administration tools' => 'Werkzeuge',
    'administration tool name system_info' => 'Systeminformation',
    'administration tool desc system_info' => 'Einfaches Tool, was die Systemdetails anzeigt',
    'administration tool name browse_log' => 'Browse System Log',
    'administration tool desc browse_log' => 'Nutze dieses Tool, um durch das System Log zu browsen und Fehler aufzudecken',

    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Einstellungen',
    'configuration categories' => 'Konfigurationskategorien',
    'configuration category' => 'Konfigurationskategorie',

    'mail transport mail()' => 'Standard-PHP-Einstellungen',
    'mail transport smtp' => 'SMTP-Server',

    'secure ldap connection no' => 'No',
    'secure ldap connection tls' => 'Yes, use TLS',
    'secure smtp connection no' => 'Nein',
    'secure smtp connection ssl' => 'Ja, nutze SSL',
    'secure smtp connection tls' => 'Ja, nutze TLS',
    
    'file storage file system' => 'Dateisystem',
    'file storage mysql' => 'Datenbank (MySQL)',
    
    // Categories
    'config category name tickets' => 'Tickets',
    'config category desc tickets' => 'Use this set of settings to set ticket options. Currently only default categories.',
    'config category dnx' => 'Die gesuchte Konfigurationskategorie gibt es nicht.',
    'config category is empty' => 'Die ausgewählte Konfigurationskategorie ist leer.',
    
    'config category name general' => 'Allgemein',
    'config category desc general' => 'Allgemeine ProjectPier-Einstellungen.',
    'config category name mailing' => 'E-Mail-Einstellungen',
    'config category desc mailing' => 'Hier können Sie einstellen wie ProjectPier E-Mails verschicken soll. Sie können die Einstellungen aus der php.ini-Datei übernehmen oder einen anderen SMTP-Server einstellen.',
    'config category name features' => 'Features',
    'config category desc features' => 'Use this set of settings to enable/disable different features and choose between different methods of displaying project data',
    'config category name database' => 'Database',
    'config category desc database' => 'Use this set of settings to set database options',
    'config category name authentication' => 'Authentication',
    'config category desc authentication' => 'Access to all authentication settings',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Site-Name',
    'config option desc site_name' => 'Dieser Name wird auf der Startseite angezeigt.',
    'config option name file_storage_adapter' => 'Dateiablage',
    'config option desc file_storage_adapter' => 'Hier können Sie auswählen, wo Dateianhänge, Bilder, Logos und andere hochgeladene Dokumente abgelegt werden. <strong>Die Ablage im Dateisystem wird empfohlen.</strong>',
    'config option name default_project_folders' => 'Standardordner',
    'config option desc default_project_folders' => 'Ordner, die bei der Anlage von Projekten erstellt werden. Jeder Ordnername soll in einer neuen Zeile stehen, doppelte oder leere Zeilen werden nicht beachtet.',
    'config option name theme' => 'Thema',
    'config option desc theme' => 'Mit Themen können Sie das Aussehen von ProjectPier ändern.',
    'config option name calendar_first_day_of_week' => 'Erster Tag der Woche',
    'config option name check_email_unique' => 'Email address must be unique',
    'config option name remember_login_lifetime' => 'Seconds to stay logged in',
    'config option name installation_root' => 'The path to the web site',
    'config option name installation_welcome_logo' => 'Logo on login page',
    'config option name installation_welcome_text' => 'Text on login page',
    'config option name installation_base_language' => 'Base language (also for login page)',
    'config option name dashboard action index' => 'Übersicht',
    'config option name dashboard action my_projects' => 'My Projects',
    'config option name dashboard action my_tasks' => 'My tasks',
    'config option name dashboard action my_projects_by_name' => 'My Projects - ordered by name',
    'config option name dashboard action my_projects_by_priority' => 'My Projects - ordered by priority',
    'config option name dashboard action my_projects_by_milestone' => 'My Projects - ordered by milestone',
    'config option name dashboard action my_tasks_by_name' => 'My Tasks - ordered by name',
    'config option name dashboard action my_tasks_by_priority' => 'My Tasks - ordered by priority',
    'config option name dashboard action my_tasks_by_milestone' => 'My Tasks - ordered by milestone',
    'config option name dashboard action contacts' => 'Contacts',
    'config option name dashboard action search_contacts' => 'Search contacts',
	
    // LDAP authentication support
    'config option name ldap_domain' => 'LDAP domain',
    'config option desc ldap_domain' => 'Your active directory domain',
    'config option name ldap_host' => 'LDAP host',
    'config option desc ldap_host' => 'Your active directory host name/IP',
    'secure ldap connection no' => 'No',
    'secure ldap connection tls' => 'Yes, use TLS',
    'config option name ldap_secure_connection' => 'Use secure LDAP connection',
    
    // ProjectPier
    'config option name upgrade_check_enabled' => 'Upgrade-Überprüfung aktivieren',
    'config option desc upgrade_check_enabled' => 'If \'Yes\' the system will once a day check if there are new versions of ProjectPier available for download',
    'config option name logout_redirect_page' => 'Redirect page on logout',
    'config option desc logout_redirect_page' => 'Set a page to redirect users to after logout.  Change to default to use default setting',
    
    // Mailing
    'config option name exchange_compatible' => 'Microsoft Exchange-Kompatibilitätsmodus',
    'config option desc exchange_compatible' => 'Wenn Sie einen Microsoft Exchange-Server nutzen, setzen Sie diese Option auf „Ja“, um bekannte Mail-Probleme zu vermeiden.',
    'config option name mail_transport' => 'E-Mail-Übermittlung',
    'config option desc mail_transport' => 'Sie können die Standard-PHP-Einstellungen zum E-Mail-Versand nutzen oder die Angaben für Ihren SMTP-Server eingeben.',
    'config option name mail_from' => 'Mail From: address',
    'config option name mail_use_reply_to' => 'Use Reply-To: for From',
    'config option name smtp_server' => 'SMTP server',
    'config option name smtp_port' => 'SMTP port',
    'config option name smtp_authenticate' => 'Use SMTP authentication',
    'config option name smtp_username' => 'SMTP username',
    'config option name smtp_password' => 'SMTP password',
    'config option name smtp_secure_connection' => 'Sichere SMTP-Verbindung nutzen',

    'config option name per_project_activity_logs' => 'Per-project activity logs',
    'config option name categories_per_page' => 'Number of categories per page',

    'config option name character_set' => 'Character set to use',
    'config option name collation' => 'Character sort order',

    'config option name session_lifetime' => 'Session lifetime',
    'config option name default_controller' => 'Default main page',
    'config option name default_action' => 'Page to show after login',

    'config option name logs_show_icons' => 'Show icons in the application log',
    'config option name default_private' => 'Default setting for private option',
    'config option name send_notification_default' => 'Default setting for Send notification',
    'config option name enable_efqm' => 'Enable EFQM options',
    'config option name login_show_options' => 'Show options on the login page',
    'config option desc login_show_options' => 'If yes, options for setting language and theme are shown.',
    'config option name display_application_logs' => 'Display application logs',
    'config option desc display_application_logs' => 'If no, logging still occurs but it is not displayed anymore.',
    'config option name dashboard_logs_count' => 'Max. number of application log lines to show',
    'config option desc dashboard_logs_count' => 'Limits the number of log lines to show on the dashboard',

    // Authentication
    'config option name authdb server' => 'Database server',
    'config option desc authdb server' => 'The ip address or DNS name of the database server for authentication. Port number can be included.',
    'config option name authdb username' => 'Database user name',
    'config option desc authdb username' => 'The password to access the database',
    'config option name authdb password' => 'Database user name',
    'config option desc authdb password' => 'The password corresponding to the user',
    'config option name authdb database' => 'Database name',
    'config option desc authdb database' => 'Name of the database in the database server',
    'config option name authdb sql' => 'Select SQL',
    'config option desc authdb sql' => 'The SQL to retrieve a single row from the table containing the user details. At least 1 field should be returned named email. $username/$password is the placeholder for the user name/password during login.',

    'config option name parking space reservation url' => 'Parking space url',
    'config option desc parking space reservation url' => 'Enter the complete url to start the parking space reservation web application',

    'config option name map url' => 'Display map url',
    'config option desc map url' => 'The url to display a map showing the location of a contact or company. $location is the placeholder for the location details.',
    'config option name route url' => 'Display route url',
    'config option desc route url' => 'The url to display a route showing a route from the current user (contact) to the location of a contact or company. $from/$to is the placeholder for the from address/to address.',

  ); // array

?>