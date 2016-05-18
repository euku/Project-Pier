<?php

  /** 
  * Error messages
  *
  * @version 1.0
  * @http://www.projectpier.org/
  */

  // Return langs
  return array(
  
    // General
    'invalid email address' => 'E-Mail-Adressenformat ist ungültig',
    'id missing' => 'Benötigte ID fehlt',
   
    // Company validation errors
    'company name required' => 'Firmenname fehlt',
    'company homepage invalid' => 'Homepage ist keine gültige URL (http://www.beispiel.de)',

    // Contact validation errors
    'name value required' => 'Name wird benötigt',
    'existing contact required' => 'Du musst einen existierenden Kontakt auswählen',
    
    // Add user to contact form
    'contact already has user' => 'Dieser Kontakt hat bereits ein verbundenes Benutzerkonto.',    
    // User validation errors
    'username value required' => 'Nutzername wird benötigt',
    'username must be unique' => 'Tut mir Leid, aber der Name wird schon benutzt',
    'email value is required' => 'E-Mailadresse wird benötigt',
    'email address must be unique' => 'Tut mir Leid, aber die E-Mail-Adresse wird schon benutzt',
    'company value required' => 'Nutzer muss zur Firma gehören',
    'password value required' => 'Passwort wird benötigt',
    'passwords dont match' => 'Passwörter stimmen nicht überein',
    'old password required' => 'Altes Passwort wird benötigt',
    'invalid old password' => 'Altes Passwort ist ungültig',
    'user homepage invalid' => 'Homepage ist keine gültige URL (http://www.beispiel.de)',
    
    // Avatar
    'invalid upload type' => 'Ungültiger Dateityp. Erlaubt sind %s',
    'invalid upload dimensions' => 'Ungültige Bildauflösung. Maximale Größe ist %sx%s Pixel',
    'invalid upload size' => 'Ungültige Bildgröße. Maximale Größe ist %s',
    'invalid upload failed to move' => 'Verschieben der hogeladenen Datei scheiterte',
    
    // Registration form
    'terms of services not accepted' => 'Um ein Konto zu erstellen musst du unsere AGBs lesen und akzeptieren.',
    
    // Init company website
    'failed to load company website' => 'Laden der Website scheiterte. Besitzer-Firma nicht gefunden',
    'failed to load project' => 'Laden des aktiven Projektes scheiterte',
    
    // Login form
    'username value missing' => 'Gib deinen Nutzernamen ein',
    'password value missing' => 'Gib dein Passwort ein',
    'invalid login data' => 'Anmeldung scheiterte. Bitte prüfe deine Eingaben und versuche es nochmal',
    
    // Add project form
    'project name required' => 'Projektname wird benötigt',
    'project name unique' => 'Projektname muss eindeutig sein',
    
    // Add message form
    'message title required' => 'Titel wird benötigt',
    'message title unique' => 'Titel muss innerhalb dieses Projektes eindeutig sein',
    'message text required' => 'Texteingabe wird benötigt',
    
    // Add comment form
    'comment text required' => 'Kommentartext wird benötigt',
    
    // Add milestone form
    'milestone name required' => 'Meilensteinname wird benötigt',
    'milestone due date required' => 'Meilensteinfälligkeitsdatum wird benötigt',

    // Add task list
    'task list name required' => 'Aufgabenlistenname wird benötigt',
    'task list name unique' => 'Aufgabenlistenname muss innerhalb des Projektes eindeutig sein',
    
    // Add task
    'task text required' => 'Aufgabentext wird benötigt',

    // Test mail settings
    'test mail recipient required' => 'Empfängeradresse wird benötigt',
    'test mail recipient invalid format' => 'Ungültiges Empfängeradressenformat',
    'test mail message required' => 'E-Mailnachrichtentext wird benötigt',
    
    // Mass mailer
    'massmailer subject required' => 'Betreff wird benötigt',
    'massmailer message required' => 'Inhalt wird benötigt',
    'massmailer select recipients' => 'Bitte wähle die Empfänger aus',
    
  ); // array

?>