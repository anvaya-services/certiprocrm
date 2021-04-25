<?php
return [
  'ActionHistoryRecord' => [
    'fields' => [
      'user' => 'Utilizator',
      'action' => 'Acțiune',
      'createdAt' => 'Dată',
      'userType' => 'User Type',
      'target' => 'Țintă',
      'targetType' => 'Tipul Țintei',
      'authToken' => 'Token Autentificare',
      'ipAddress' => 'Adresă IP',
      'authLogRecord' => 'Auth Log Record'
    ],
    'links' => [
      'authToken' => 'Token Autentificare',
      'authLogRecord' => 'Auth Log Record',
      'user' => 'Utilizator',
      'target' => 'Țintă'
    ],
    'presetFilters' => [
      'onlyMy' => 'Doar Eu'
    ],
    'options' => [
      'action' => [
        'read' => 'Citește',
        'update' => 'Actualizare',
        'delete' => 'Șterge',
        'create' => 'Creează'
      ]
    ]
  ],
  'Admin' => [
    'labels' => [
      'Enabled' => 'Activat',
      'Disabled' => 'Dezactivat',
      'System' => 'Sistem',
      'Users' => 'Utilizatori',
      'Email' => 'Email',
      'Data' => 'Date',
      'Customization' => 'Personalizare',
      'Available Fields' => 'Câmpuri disponibile',
      'Layout' => 'Aspect',
      'Entity Manager' => 'Manager Entitate',
      'Add Panel' => 'Adaugă Panou',
      'Add Field' => 'Adaugă Câmp',
      'Settings' => 'Setări',
      'Scheduled Jobs' => 'Activități Planificate',
      'Upgrade' => 'Actualizare',
      'Clear Cache' => 'Șterge Cache',
      'Rebuild' => 'Reconstruire',
      'Teams' => 'Echipe',
      'Roles' => 'Roluri',
      'Portal' => 'Portal',
      'Portals' => 'Portaluri',
      'Portal Roles' => 'Roluri Portaluri',
      'Portal Users' => 'Utilizatorii portalului',
      'API Users' => 'API Users',
      'Outbound Emails' => 'Email-uri trimise',
      'Group Email Accounts' => 'Grup Conturi Email',
      'Personal Email Accounts' => 'Conturi Personale Email',
      'Inbound Emails' => 'Email-uri intrate',
      'Email Templates' => 'Template-uri Email',
      'Import' => 'Importare',
      'Layout Manager' => 'Manager Aspect',
      'User Interface' => 'Interfață Utilizator',
      'Auth Tokens' => 'Token-uri Autentificare',
      'Auth Log' => 'Auth Log',
      'Authentication' => 'Autentificare',
      'Currency' => 'Monedă',
      'Integrations' => 'Integrări',
      'Extensions' => 'Extensii',
      'Webhooks' => 'Webhooks',
      'Dashboard Templates' => 'Dashboard Templates',
      'Upload' => 'Încarcă',
      'Installing...' => 'Se instaleză...',
      'Upgrading...' => 'Se actualizează...',
      'Upgraded successfully' => 'S-a actualizat cu succes',
      'Installed successfully' => 'S-a instalat cu succes',
      'Ready for upgrade' => 'Gata pentru actualizare',
      'Run Upgrade' => 'Rulează actualizarea',
      'Install' => 'Instalare',
      'Ready for installation' => 'Gata pentru instalare',
      'Uninstalling...' => 'Se dezinstalează...',
      'Uninstalled' => 'Dezinstalat',
      'Create Entity' => 'Crează Entitate',
      'Edit Entity' => 'Editare Entitate',
      'Create Link' => 'Crează Link',
      'Edit Link' => 'Editează Link',
      'Notifications' => 'Notificări',
      'Jobs' => 'Jobs',
      'Reset to Default' => 'Resetează la Implicit',
      'Email Filters' => 'Filtre Email',
      'Action History' => 'Istoric Acțiune',
      'Label Manager' => 'Manager Etichetă',
      'Template Manager' => 'Template Manager',
      'Lead Capture' => 'Lead Capture',
      'Attachments' => 'Attachments',
      'System Requirements' => 'Cerințe de sistem',
      'PDF Templates' => 'PDF Templates',
      'PHP Settings' => 'Setări PHP',
      'Database Settings' => 'Database Settings',
      'Permissions' => 'Permisiune',
      'Email Addresses' => 'Email Addresses',
      'Phone Numbers' => 'Phone Numbers',
      'Layout Sets' => 'Layout Sets',
      'Success' => 'Success',
      'Fail' => 'Fail',
      'is recommended' => 'is recommended',
      'extension is missing' => 'extension is missing'
    ],
    'layouts' => [
      'list' => 'Listă',
      'detail' => 'Detaliu',
      'listSmall' => 'Listă (Mic)',
      'detailSmall' => 'Detaliu (Mic)',
      'detailPortal' => 'Detaliu (Portal)',
      'detailSmallPortal' => 'Detaliu (Mic, Portal)',
      'listSmallPortal' => 'Listă (Mic, Portal)',
      'listPortal' => 'Listă (Portaluri)',
      'relationshipsPortal' => 'Panouri Relație (Portal)',
      'filters' => 'Filtre Căutare',
      'massUpdate' => 'Actualizează tot',
      'relationships' => 'Panouri Relație',
      'defaultSidePanel' => 'Side Panel Fields',
      'bottomPanelsDetail' => 'Bottom Panels',
      'bottomPanelsEdit' => 'Bottom Panels (Edit)',
      'bottomPanelsDetailSmall' => 'Bottom Panels (Detail Small)',
      'bottomPanelsEditSmall' => 'Bottom Panels (Edit Small)',
      'sidePanelsDetail' => 'Panouri Laterale (Detaliu)',
      'sidePanelsEdit' => 'Panouri Laterale (Editează)',
      'sidePanelsDetailSmall' => 'Panouri Laterale (Detaliu Mic)',
      'sidePanelsEditSmall' => 'Panouri Laterale (Editează Mic)',
      'kanban' => 'Kanban',
      'detailConvert' => 'Convert Lead',
      'listForAccount' => 'Listă (pentru Cont)',
      'listForContact' => 'List (for Contact)'
    ],
    'fieldTypes' => [
      'address' => 'Adresă',
      'array' => 'Array',
      'foreign' => 'Străin',
      'duration' => 'Durată',
      'password' => 'Parolă',
      'personName' => 'Nume Persoană',
      'autoincrement' => 'Auto-incrementare',
      'bool' => 'Bool',
      'currency' => 'Valută',
      'currencyConverted' => 'Valută (Convertită)',
      'date' => 'Dată',
      'datetime' => 'Date-Time',
      'datetimeOptional' => 'Date/Date-Time',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiplu',
      'linkParent' => 'Link Părinte',
      'linkOne' => 'Link One',
      'phone' => 'Telefon',
      'text' => 'Text',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'Fișier',
      'image' => 'Imagine',
      'multiEnum' => 'Multi-Enum',
      'attachmentMultiple' => 'Atașare Multiplă',
      'rangeInt' => 'Interval Integer',
      'rangeFloat' => 'Interval Float',
      'rangeCurrency' => 'Interval Valută',
      'wysiwyg' => 'Wysiwyg',
      'map' => 'Hartă',
      'number' => 'Număr (auto-incrementare)',
      'colorpicker' => 'Selector Culoarea',
      'checklist' => 'Checklist',
      'barcode' => 'Barcode',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Object'
    ],
    'fields' => [
      'type' => 'Tip',
      'name' => 'Nume',
      'label' => 'Etichetă',
      'tooltipText' => 'Tooltip Text',
      'required' => 'Obligatoriu',
      'default' => 'Inițial',
      'maxLength' => 'Lungime Maximă',
      'options' => 'Opțiuni',
      'after' => 'După (câmp)',
      'before' => 'Înainte (câmp)',
      'link' => 'Link',
      'field' => 'Câmp',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Tranducere',
      'previewSize' => 'Previzualizare Mărime',
      'listPreviewSize' => 'Preview Size in List View',
      'noEmptyString' => 'Șirul nu poate fi gol',
      'defaultType' => 'Tip Implicit',
      'seeMoreDisabled' => 'Dezactivează Text Cut',
      'cutHeight' => 'Cut Height (px)',
      'entityList' => 'Listă Entitate',
      'isSorted' => 'Este Sortat (alfabetică)',
      'audited' => 'Audiate',
      'trim' => 'Aranjează',
      'height' => 'Înălțime (px)',
      'minHeight' => 'Înălțime Min (px)',
      'provider' => 'Furnizor',
      'typeList' => 'Tip Listă',
      'rows' => 'Numbăr de rânduri din textarea',
      'lengthOfCut' => 'Length of cut',
      'sourceList' => 'Lista Sursă',
      'prefix' => 'Prefix',
      'nextNumber' => 'Următorul Număr',
      'padLength' => 'Pad Length',
      'disableFormatting' => 'Dezactivează Formatarea',
      'dynamicLogicVisible' => 'Condiții care fac câmpul vizibil',
      'dynamicLogicReadOnly' => 'Condiții care fac câmpul numai-citit',
      'dynamicLogicRequired' => 'Condiții care fac câmpul necesar',
      'dynamicLogicOptions' => 'Opțiuni Condiționale',
      'probabilityMap' => 'Etape Probabilități (%)',
      'notActualOptions' => 'Not Actual Options',
      'readOnly' => 'Numai-citit',
      'maxFileSize' => 'Mărimea Maximă A Fișierului (Mb)',
      'isPersonalData' => 'Is Personal Data',
      'useIframe' => 'Use Iframe',
      'useNumericFormat' => 'Use Numeric Format',
      'strip' => 'Strip',
      'minuteStep' => 'Minutes Step',
      'inlineEditDisabled' => 'Disable Inline Edit',
      'allowCustomOptions' => 'Allow Custom Options',
      'displayAsLabel' => 'Display as Label',
      'displayAsList' => 'Display as List',
      'maxCount' => 'Max Item Count',
      'accept' => 'Accept',
      'viewMap' => 'View Map Button',
      'codeType' => 'Code Type',
      'lastChar' => 'Last Character',
      'onlyDefaultCurrency' => 'Only default currency',
      'displayRawText' => 'Display raw text (no markdown)'
    ],
    'strings' => [
      'rebuildRequired' => 'Rebuild is required'
    ],
    'messages' => [
      'formulaFunctions' => 'More functions can be found in [documentation]({documentationUrl}).',
      'rebuildRequired' => 'You need to run rebuild from CLI.',
      'upgradeVersion' => 'EspoCRM will be upgraded to version **{version}**. Please be patient as this may take a while.',
      'upgradeDone' => 'EspoCRM has been upgraded to version **{version}**.',
      'upgradeBackup' => 'Vă rugăm să faceți o copie de rezervă a EspoCRM înainte de a face actualizarea.',
      'thousandSeparatorEqualsDecimalMark' => 'Separatorul de mii nu poate fi același cu separatorul de zecimale.',
      'userHasNoEmailAddress' => 'Utilizatorul nu are adresă de email.',
      'selectEntityType' => 'Selectați tipul entității aflat în meniul din stânga.',
      'selectUpgradePackage' => 'Selectați pachetul de actualizare',
      'downloadUpgradePackage' => 'Download upgrade package(s) [here]({url}).',
      'selectLayout' => 'Selectați aspectul dorit din meniul din stanga și editați-l.',
      'selectExtensionPackage' => 'Selectează pachetul de extensii ',
      'extensionInstalled' => ' Extenisa {name} {version} a fost instalată. ',
      'installExtension' => 'Extenisa {name} {version} este gata pentru instalare.',
      'cronIsNotConfigured' => 'Scheduled jobs are not running.  Hence inbound emails, notifications and reminders are not working. Please follow the [instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) to setup cron job.',
      'newVersionIsAvailable' => ' O nouă vesiune de EspoCRM {latestVersion} este disponibilă. ',
      'newExtensionVersionIsAvailable' => 'New {extensionName} version {latestVersion} is available.',
      'uninstallConfirmation' => 'Are you sure you want to uninstall the extension?',
      'upgradeInfo' => 'Check the [documentation]({url}) about how to upgrade your EspoCRM instance.',
      'upgradeRecommendation' => 'This way of upgrading is not recommended. It\'s better to upgrade from CLI.'
    ],
    'descriptions' => [
      'settings' => 'Setările de sistem ale aplicației.',
      'scheduledJob' => 'Activități care sunt executate de cron.',
      'jobs' => 'Jobs execute tasks in the background.',
      'upgrade' => 'Actualizare aplicație.',
      'clearCache' => 'Șterge tot cache-ul din backend.',
      'rebuild' => 'Reconstruire backend și ștergere cache.',
      'users' => 'Management Utilizatori.',
      'teams' => 'Management Echipe.',
      'roles' => 'Management Roluri.',
      'portals' => 'Management Portaluri',
      'portalRoles' => 'Roluri pentru portal.',
      'portalUsers' => 'Utilizatorii portalului.',
      'outboundEmails' => 'Setări SMTP pentru trimitere email-uri.',
      'groupEmailAccounts' => 'Grupează conturi email IMAP. Importă Email și Email-către-Caz.',
      'personalEmailAccounts' => 'Conturi utilizatori email',
      'emailTemplates' => 'Șabloane pentru email-urile trimise.',
      'import' => 'Importare date din fișier CSV.',
      'layoutManager' => 'Personalizare aspect (listă, detaliu, editare, căutare, actualizează tot).',
      'entityManager' => 'Creează și editează entități personalizate. Gestionează câmpuri și relații.',
      'userInterface' => 'Configurare UI.',
      'authTokens' => 'Sesiuni Auth Active. Adresă IP și data ultimei accesări.',
      'authentication' => 'Setări de autentificare.',
      'currency' => 'Setări valură și curs valutar.',
      'extensions' => 'Instalează sau dezinstalează extensii.',
      'integrations' => 'Integrează cu serviciile terților. ',
      'notifications' => 'Notificări pentru setări în aplicație și email.',
      'inboundEmails' => 'Setări pentru email-urile primite.',
      'emailFilters' => 'Mesajele din email care se potrivesc cu filtrul specificat nu o să fie importate.',
      'actionHistory' => 'Jurnalul acțiunilor utilizatorului.',
      'labelManager' => 'Personalizează etichetele aplicației.',
      'templateManager' => 'Customize message templates.',
      'authLog' => 'Login history.',
      'leadCapture' => 'API entry points for Web-to-Lead.',
      'attachments' => 'All file attachments stored in the system.',
      'systemRequirements' => 'System Requirements for EspoCRM.',
      'apiUsers' => 'Separate users for integration purposes.',
      'webhooks' => 'Manage webhooks.',
      'emailAddresses' => 'All email addresses stored in the system.',
      'phoneNumbers' => 'All phone numbers stored in the system.',
      'dashboardTemplates' => 'Deploy dashboards to users.',
      'layoutSets' => 'Collections of layouts that can be assigned to teams & portals.',
      'pdfTemplates' => 'Templates for printing to PDF.'
    ],
    'keywords' => [
      'settings' => 'system',
      'userInterface' => 'ui,theme,tabs,logo,dashboard',
      'authentication' => 'password',
      'scheduledJob' => 'cron,jobs',
      'integrations' => 'google,maps,google maps',
      'authLog' => 'log,history',
      'authTokens' => 'history,access,log',
      'entityManager' => 'fields,relations,relationships',
      'templateManager' => 'notifications',
      'jobs' => 'cron'
    ],
    'options' => [
      'previewSize' => [
        '' => 'Default',
        'x-small' => 'X-Mic',
        'small' => 'Mic',
        'medium' => 'Mediu',
        'large' => 'Mare'
      ]
    ],
    'logicalOperators' => [
      'and' => 'ȘI',
      'or' => 'SAU',
      'not' => 'NU'
    ],
    'systemRequirements' => [
      'requiredPhpVersion' => 'Versiune PHP',
      'requiredMysqlVersion' => 'Versiune MySQL',
      'requiredMariadbVersion' => 'MariaDB version',
      'host' => 'Numele Gazdei',
      'dbname' => 'Numele Bazei de Date',
      'user' => 'Nume Utilizator',
      'writable' => 'Writable',
      'readable' => 'Readable'
    ],
    'templates' => [
      'accessInfo' => 'Access Info',
      'accessInfoPortal' => 'Access Info for Portals',
      'assignment' => 'Assignment',
      'mention' => 'Mention',
      'noteEmailReceived' => 'Note about Received Email',
      'notePost' => 'Note about Post',
      'notePostNoParent' => 'Note about Post (no Parent)',
      'noteStatus' => 'Note about Status Update',
      'passwordChangeLink' => 'Password Change Link',
      'invitation' => 'Invitation',
      'reminder' => 'Reminder'
    ]
  ],
  'ApiUser' => [
    'labels' => [
      'Create ApiUser' => 'Create API User'
    ]
  ],
  'Attachment' => [
    'fields' => [
      'role' => 'Role',
      'related' => 'Related',
      'file' => 'File',
      'type' => 'Type',
      'field' => 'Field',
      'sourceId' => 'Source ID',
      'storage' => 'Storage',
      'size' => 'Size (bytes)'
    ],
    'options' => [
      'role' => [
        'Attachment' => 'Attachment',
        'Inline Attachment' => 'Inline Attachment',
        'Import File' => 'Import File',
        'Export File' => 'Export File',
        'Mail Merge' => 'Mail Merge',
        'Mass Pdf' => 'Mass Pdf'
      ]
    ],
    'insertFromSourceLabels' => [
      'Document' => 'Inserează Document'
    ],
    'presetFilters' => [
      'orphan' => 'Orphan'
    ]
  ],
  'AuthLogRecord' => [
    'fields' => [
      'username' => 'Username',
      'ipAddress' => 'IP Address',
      'requestTime' => 'Request Time',
      'createdAt' => 'Requested At',
      'isDenied' => 'Is Denied',
      'denialReason' => 'Denial Reason',
      'portal' => 'Portal',
      'user' => 'User',
      'authToken' => 'Auth Token Created',
      'requestUrl' => 'Request URL',
      'requestMethod' => 'Request Method',
      'authTokenIsActive' => 'Auth Token is Active',
      'authenticationMethod' => 'Authentication Method'
    ],
    'links' => [
      'authToken' => 'Auth Token Created',
      'user' => 'User',
      'portal' => 'Portal',
      'actionHistoryRecords' => 'Action History'
    ],
    'presetFilters' => [
      'denied' => 'Denied',
      'accepted' => 'Accepted'
    ],
    'options' => [
      'denialReason' => [
        'CREDENTIALS' => 'Invalid credentials',
        'INACTIVE_USER' => 'Inactive user',
        'IS_PORTAL_USER' => 'Portal user',
        'IS_NOT_PORTAL_USER' => 'Not a portal user',
        'USER_IS_NOT_IN_PORTAL' => 'User is not related to the portal'
      ]
    ]
  ],
  'AuthToken' => [
    'fields' => [
      'user' => 'Utilizator',
      'ipAddress' => 'Adresa IP',
      'lastAccess' => 'Data ultimei accesări',
      'createdAt' => 'Data conectării',
      'isActive' => 'Este Activă',
      'portal' => 'Portal'
    ],
    'links' => [
      'actionHistoryRecords' => 'Istoric Acțiune'
    ],
    'presetFilters' => [
      'active' => 'Activ',
      'inactive' => 'Inactiv'
    ],
    'labels' => [
      'Set Inactive' => 'Setează Inactiv'
    ],
    'massActions' => [
      'setInactive' => 'Setează Inactiv'
    ]
  ],
  'Currency' => [
    'names' => [
      'AED' => 'United Arab Emirates Dirham',
      'AFN' => 'Afghan Afghani',
      'ALL' => 'Albanian Lek',
      'AMD' => 'Armenian Dram',
      'ANG' => 'Netherlands Antillean Guilder',
      'AOA' => 'Angolan Kwanza',
      'ARS' => 'Argentine Peso',
      'AUD' => 'Australian Dollar',
      'AWG' => 'Aruban Florin',
      'AZN' => 'Azerbaijani Manat',
      'BAM' => 'Bosnia-Herzegovina Convertible Mark',
      'BBD' => 'Barbadian Dollar',
      'BDT' => 'Bangladeshi Taka',
      'BGN' => 'Bulgarian Lev',
      'BHD' => 'Bahraini Dinar',
      'BIF' => 'Burundian Franc',
      'BMD' => 'Bermudan Dollar',
      'BND' => 'Brunei Dollar',
      'BOB' => 'Bolivian Boliviano',
      'BOV' => 'Bolivian Mvdol',
      'BRL' => 'Brazilian Real',
      'BSD' => 'Bahamian Dollar',
      'BTN' => 'Bhutanese Ngultrum',
      'BWP' => 'Botswanan Pula',
      'BYN' => 'Belarusian Ruble',
      'BZD' => 'Belize Dollar',
      'CAD' => 'Canadian Dollar',
      'CDF' => 'Congolese Franc',
      'CHE' => 'WIR Euro',
      'CHF' => 'Swiss Franc',
      'CHW' => 'WIR Franc',
      'CLF' => 'Chilean Unit of Account (UF)',
      'CLP' => 'Chilean Peso',
      'CNH' => 'Chinese Yuan (offshore)',
      'CNY' => 'Chinese Yuan',
      'COP' => 'Colombian Peso',
      'COU' => 'Colombian Real Value Unit',
      'CRC' => 'Costa Rican Colón',
      'CUC' => 'Cuban Convertible Peso',
      'CUP' => 'Cuban Peso',
      'CVE' => 'Cape Verdean Escudo',
      'CZK' => 'Czech Koruna',
      'DJF' => 'Djiboutian Franc',
      'DKK' => 'Danish Krone',
      'DOP' => 'Dominican Peso',
      'DZD' => 'Algerian Dinar',
      'EGP' => 'Egyptian Pound',
      'ERN' => 'Eritrean Nakfa',
      'ETB' => 'Ethiopian Birr',
      'EUR' => 'Euro',
      'FJD' => 'Fijian Dollar',
      'FKP' => 'Falkland Islands Pound',
      'GBP' => 'British Pound',
      'GEL' => 'Georgian Lari',
      'GHS' => 'Ghanaian Cedi',
      'GIP' => 'Gibraltar Pound',
      'GMD' => 'Gambian Dalasi',
      'GNF' => 'Guinean Franc',
      'GTQ' => 'Guatemalan Quetzal',
      'GYD' => 'Guyanaese Dollar',
      'HKD' => 'Hong Kong Dollar',
      'HNL' => 'Honduran Lempira',
      'HRK' => 'Croatian Kuna',
      'HTG' => 'Haitian Gourde',
      'HUF' => 'Hungarian Forint',
      'IDR' => 'Indonesian Rupiah',
      'ILS' => 'Israeli New Shekel',
      'INR' => 'Indian Rupee',
      'IQD' => 'Iraqi Dinar',
      'IRR' => 'Iranian Rial',
      'ISK' => 'Icelandic Króna',
      'JMD' => 'Jamaican Dollar',
      'JOD' => 'Jordanian Dinar',
      'JPY' => 'Japanese Yen',
      'KES' => 'Kenyan Shilling',
      'KGS' => 'Kyrgystani Som',
      'KHR' => 'Cambodian Riel',
      'KMF' => 'Comorian Franc',
      'KPW' => 'North Korean Won',
      'KRW' => 'South Korean Won',
      'KWD' => 'Kuwaiti Dinar',
      'KYD' => 'Cayman Islands Dollar',
      'KZT' => 'Kazakhstani Tenge',
      'LAK' => 'Laotian Kip',
      'LBP' => 'Lebanese Pound',
      'LKR' => 'Sri Lankan Rupee',
      'LRD' => 'Liberian Dollar',
      'LSL' => 'Lesotho Loti',
      'LYD' => 'Libyan Dinar',
      'MAD' => 'Moroccan Dirham',
      'MDL' => 'Moldovan Leu',
      'MGA' => 'Malagasy Ariary',
      'MKD' => 'Macedonian Denar',
      'MMK' => 'Myanmar Kyat',
      'MNT' => 'Mongolian Tugrik',
      'MOP' => 'Macanese Pataca',
      'MRO' => 'Mauritanian Ouguiya',
      'MUR' => 'Mauritian Rupee',
      'MWK' => 'Malawian Kwacha',
      'MXN' => 'Mexican Peso',
      'MXV' => 'Mexican Investment Unit',
      'MYR' => 'Malaysian Ringgit',
      'MZN' => 'Mozambican Metical',
      'NAD' => 'Namibian Dollar',
      'NGN' => 'Nigerian Naira',
      'NIO' => 'Nicaraguan Córdoba',
      'NOK' => 'Norwegian Krone',
      'NPR' => 'Nepalese Rupee',
      'NZD' => 'New Zealand Dollar',
      'OMR' => 'Omani Rial',
      'PAB' => 'Panamanian Balboa',
      'PEN' => 'Peruvian Sol',
      'PGK' => 'Papua New Guinean Kina',
      'PHP' => 'Philippine Piso',
      'PKR' => 'Pakistani Rupee',
      'PLN' => 'Polish Zloty',
      'PYG' => 'Paraguayan Guarani',
      'QAR' => 'Qatari Rial',
      'RON' => 'Romanian Leu',
      'RSD' => 'Serbian Dinar',
      'RUB' => 'Russian Ruble',
      'RWF' => 'Rwandan Franc',
      'SAR' => 'Saudi Riyal',
      'SBD' => 'Solomon Islands Dollar',
      'SCR' => 'Seychellois Rupee',
      'SDG' => 'Sudanese Pound',
      'SEK' => 'Swedish Krona',
      'SGD' => 'Singapore Dollar',
      'SHP' => 'St. Helena Pound',
      'SLL' => 'Sierra Leonean Leone',
      'SOS' => 'Somali Shilling',
      'SRD' => 'Surinamese Dollar',
      'SSP' => 'South Sudanese Pound',
      'STN' => 'São Tomé & Príncipe Dobra (2018)',
      'SYP' => 'Syrian Pound',
      'SZL' => 'Swazi Lilangeni',
      'SVC' => 'Salvadoran Colón',
      'THB' => 'Thai Baht',
      'TJS' => 'Tajikistani Somoni',
      'TND' => 'Tunisian Dinar',
      'TOP' => 'Tongan Paʻanga',
      'TRY' => 'Turkish Lira',
      'TTD' => 'Trinidad & Tobago Dollar',
      'TWD' => 'New Taiwan Dollar',
      'TZS' => 'Tanzanian Shilling',
      'UAH' => 'Ukrainian Hryvnia',
      'UGX' => 'Ugandan Shilling',
      'USD' => 'US Dollar',
      'USN' => 'US Dollar (Next day)',
      'UYI' => 'Uruguayan Peso (Indexed Units)',
      'UYU' => 'Uruguayan Peso',
      'UZS' => 'Uzbekistani Som',
      'VEF' => 'Venezuelan Bolívar',
      'VND' => 'Vietnamese Dong',
      'VUV' => 'Vanuatu Vatu',
      'WST' => 'Samoan Tala',
      'XAF' => 'Central African CFA Franc',
      'XCD' => 'East Caribbean Dollar',
      'XOF' => 'West African CFA Franc',
      'XPF' => 'CFP Franc',
      'YER' => 'Yemeni Rial',
      'ZAR' => 'South African Rand',
      'ZMW' => 'Zambian Kwacha',
      'ZWL' => 'Zimbabwe Dollar'
    ]
  ],
  'DashboardTemplate' => [
    'fields' => [
      'layout' => 'Layout',
      'append' => 'Append (don\'t remove user\'s tabs)'
    ],
    'links' => [],
    'labels' => [
      'Create DashboardTemplate' => 'Create Template',
      'Deploy to Users' => 'Deploy to Users',
      'Deploy to Team' => 'Deploy to Team'
    ]
  ],
  'DashletOptions' => [
    'fields' => [
      'title' => 'Titlu',
      'dateFrom' => 'Forma Datei',
      'dateTo' => 'Dată către',
      'autorefreshInterval' => 'Interval de auto-împrospătare',
      'displayRecords' => 'Afișează Înregistrările',
      'isDoubleHeight' => 'Înălțime 2x',
      'mode' => 'Mod',
      'enabledScopeList' => 'Ce să se afișeze',
      'users' => 'Utilizatori',
      'entityType' => 'Tipul Entității',
      'primaryFilter' => 'Filtru Principal',
      'boolFilterList' => 'Filtre Adiționale',
      'sortBy' => 'Ordonare (câmp)',
      'sortDirection' => 'Ordonare (direcție)',
      'expandedLayout' => 'Aspect',
      'skipOwn' => 'Don\'t show own records',
      'url' => 'URL',
      'dateFilter' => 'Filtru Dată',
      'team' => 'Team',
      'futureDays' => 'Next X Days',
      'useLastStage' => 'Group by last reached stage'
    ],
    'options' => [
      'mode' => [
        'agendaWeek' => 'Săptămână (agendă)',
        'basicWeek' => 'Săptămână',
        'month' => 'Lună',
        'basicDay' => 'Zi',
        'agendaDay' => 'Zi (agendă)',
        'timeline' => 'Cronologie'
      ]
    ],
    'messages' => [
      'selectEntityType' => 'Selectează Tipul Entității în opțiunile dashlet.'
    ],
    'tooltips' => [
      'skipOwn' => 'Actions made by your user account won\'t be displayed.'
    ]
  ],
  'DynamicLogic' => [
    'labels' => [
      'Field' => 'Câmp'
    ],
    'options' => [
      'operators' => [
        'equals' => 'Egal',
        'notEquals' => 'Nu este egal',
        'greaterThan' => 'Mai mare decât',
        'lessThan' => 'Mai mic decât',
        'greaterThanOrEquals' => 'Mai mare sau egal',
        'lessThanOrEquals' => 'Mai mic sau egal',
        'in' => 'În',
        'notIn' => 'Nu în',
        'inPast' => 'În Trecut',
        'inFuture' => 'În Viitor',
        'isToday' => 'Este Astăzi',
        'isTrue' => 'Este Adevărat',
        'isFalse' => 'Este Fals',
        'isEmpty' => 'Este Gol',
        'isNotEmpty' => 'Nu este Gol',
        'contains' => 'Conține',
        'notContains' => 'Nu Conține',
        'has' => 'Conține',
        'notHas' => 'Nu Conține'
      ]
    ]
  ],
  'Email' => [
    'fields' => [
      'name' => ' Nume (Subiect)',
      'parent' => 'Părinte',
      'status' => 'Stare',
      'dateSent' => 'Data trimiterii',
      'from' => 'De la',
      'to' => 'Către',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Răspunde la',
      'replyToString' => 'Răspunde la (Șir)',
      'personStringData' => 'Person String Data',
      'isHtml' => 'În format Html',
      'body' => 'Conținut',
      'bodyPlain' => 'Conținut (Simplu)',
      'subject' => 'Subiect',
      'attachments' => 'Atașamente',
      'selectTemplate' => 'Selectează Șablon',
      'fromEmailAddress' => 'From Address (link)',
      'toEmailAddresses' => 'To EmailAddresses',
      'emailAddress' => 'Adresă Email',
      'deliveryDate' => 'Data Livrării',
      'account' => 'COnt',
      'users' => 'Utilizatori',
      'replied' => 'A Răspuns',
      'replies' => 'Răspunsuri',
      'isRead' => 'Este Citit',
      'isNotRead' => 'Nu este citit',
      'isImportant' => 'Este Important',
      'isReplied' => 'A fost răspuns',
      'isNotReplied' => 'Nu a fost răspuns',
      'isUsers' => 'Este al utilizatorului',
      'inTrash' => 'În Coșul de gunoi',
      'sentBy' => 'Trimis de',
      'folder' => 'Dosar',
      'inboundEmails' => 'Grup Conturi',
      'emailAccounts' => 'Conturi Personale',
      'hasAttachment' => 'Are Atașamente',
      'assignedUsers' => 'Utilizatori Alocați',
      'ccEmailAddresses' => 'CC Adresă Email',
      'bccEmailAddresses' => 'BCC EmailAddresses',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses',
      'messageId' => 'Id Mesaj',
      'messageIdInternal' => 'Id Mesaj (Intern)',
      'folderId' => 'Dosar Id',
      'fromName' => 'De la Nume',
      'fromString' => 'De la Șir',
      'fromAddress' => 'De la adresa',
      'replyToName' => 'Reply-To Name',
      'replyToAddress' => 'Reply-To Address',
      'isSystem' => 'Este Sistem'
    ],
    'links' => [
      'replied' => 'A Răspuns',
      'replies' => 'Răspunsuri',
      'inboundEmails' => 'Grup Conturi',
      'emailAccounts' => 'Conturi Personale',
      'assignedUsers' => 'Utilizatori Alocați',
      'sentBy' => 'Trimis de',
      'attachments' => 'Atașamente',
      'fromEmailAddress' => 'From Email Address',
      'toEmailAddresses' => 'To EmailAddresses',
      'ccEmailAddresses' => 'CC EmailAddresses',
      'bccEmailAddresses' => 'BCC EmailAddresses',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Schiță',
        'Sending' => 'Se trimite',
        'Sent' => 'Trimis',
        'Archived' => 'Arhivat',
        'Received' => 'Primit',
        'Failed' => 'Eșuat'
      ]
    ],
    'labels' => [
      'Create Email' => 'Arhivează Email',
      'Archive Email' => 'Arhivează Email',
      'Compose' => 'Compune',
      'Reply' => 'Răspunde',
      'Reply to All' => 'Răspunde la Tot',
      'Forward' => 'Redirecționează',
      'Insert Field' => 'Insert Field',
      'Original message' => 'Mesaj Original',
      'Forwarded message' => 'Redirecționează mesaj',
      'Email Accounts' => 'Conturi Personale Email',
      'Inbound Emails' => 'Grup Conturi Email',
      'Email Templates' => 'Șablon Email',
      'Send Test Email' => 'Trimite Test Email',
      'Send' => 'Trimite',
      'Email Address' => 'Adresă Email',
      'Mark Read' => 'Marchează ca Citit',
      'Sending...' => 'Se trimite...',
      'Save Draft' => 'Salvează Schiță',
      'Mark all as read' => 'Marchează tot ca Citit',
      'Show Plain Text' => 'Afișează Textul Simplu',
      'Mark as Important' => 'Marchează ca Important',
      'Unmark Importance' => 'Anulează marcarea importanței',
      'Move to Trash' => 'Mută în coșul de gunoi',
      'Retrieve from Trash' => 'Recuperează din coșul de gunoi',
      'Move to Folder' => 'Mută în Dosar',
      'Filters' => 'Filtre',
      'Folders' => 'Dosare',
      'No Subject' => 'No Subject',
      'View Users' => 'View Users',
      'Create Lead' => 'Creați Lead',
      'Create Contact' => 'Creați Contact',
      'Add to Contact' => 'Adăugați la Contacte',
      'Add to Lead' => 'Adăugați la Lead',
      'Create Task' => 'Creați Sarcină',
      'Create Case' => 'Creați Caz'
    ],
    'strings' => [
      'sendingFailed' => 'Email sending failed'
    ],
    'messages' => [
      'noSmtpSetup' => 'Nici o setare SMTP. {link}.',
      'testEmailSent' => 'Email-ul test a fost trmimis',
      'emailSent' => 'Email-ul a fost trimis',
      'savedAsDraft' => 'Salvat ca schiță',
      'sendConfirm' => 'Send the email?',
      'removeSelectedRecordsConfirmation' => 'Are you sure you want to remove selected emails?

They will be removed for other users too.',
      'removeRecordConfirmation' => 'Are you sure you want to remove the email?

It will be removed for other users too.',
      'confirmInsertTemplate' => 'The email body will be lost. Are you sure you want to insert the template?'
    ],
    'presetFilters' => [
      'sent' => 'Trimis',
      'archived' => 'Arhivat',
      'inbox' => 'Căsuța poștală',
      'drafts' => 'Schițe',
      'trash' => 'Coș de gunoi',
      'important' => 'Importă'
    ],
    'massActions' => [
      'markAsRead' => 'Marchează ca Citit',
      'markAsNotRead' => 'Marchează ca necitit',
      'markAsImportant' => 'Marchează ca Important',
      'markAsNotImportant' => 'Anulează marcarea importanței',
      'moveToTrash' => 'Mută în Coșul de gunoi',
      'moveToFolder' => 'Mută în Dosar',
      'retrieveFromTrash' => 'Recuperează din Coșul de gunoi'
    ]
  ],
  'EmailAccount' => [
    'fields' => [
      'name' => 'Nume',
      'status' => 'Status',
      'host' => 'Gazdă',
      'username' => 'Nume utilizator',
      'password' => 'Parolă',
      'port' => 'Port',
      'monitoredFolders' => 'Dosare monitorizate',
      'security' => 'Security',
      'fetchSince' => 'Ia începând din',
      'emailAddress' => 'Adresă Email',
      'sentFolder' => 'Trimite Dosar',
      'storeSentEmails' => 'Trimite Email-uri Magazin',
      'keepFetchedEmailsUnread' => 'Păstrează Email-urile luate ca necitite',
      'emailFolder' => 'Pune în Dosar',
      'useImap' => 'Ia Email-uri',
      'useSmtp' => 'Folosește SMTP',
      'smtpHost' => 'Gazdă SMTP',
      'smtpPort' => 'Port SMTP',
      'smtpAuth' => 'Autentificare SMTP',
      'smtpSecurity' => 'Securitate SMTP',
      'smtpAuthMechanism' => 'SMTP Auth Mechanism',
      'smtpUsername' => 'Nume Utilizator SMTP',
      'smtpPassword' => 'Parolă SMTP'
    ],
    'links' => [
      'filters' => 'Filtre',
      'emails' => 'Email-uri'
    ],
    'options' => [
      'status' => [
        'Active' => 'Activ',
        'Inactive' => 'Inactiv'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'PLAIN',
        'login' => 'LOGIN',
        'crammd5' => 'CRAM-MD5'
      ]
    ],
    'labels' => [
      'Create EmailAccount' => 'Creează Cont Email',
      'IMAP' => 'IMAP',
      'Main' => 'Principal',
      'Test Connection' => 'Conexiune Test',
      'Send Test Email' => 'Trimite Email Test',
      'SMTP' => 'SMTP'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'Nu s-a putut conecta la server-ul IMAP',
      'connectionIsOk' => 'Conexiunea este Ok'
    ],
    'tooltips' => [
      'useSmtp' => 'The ability to send emails.',
      'emailAddress' => 'The user record (assigned user) should have the same email address to be able to use this email account for sending.',
      'monitoredFolders' => 'Dosarele multiple nu ar trebui separate prin virgulă. 

Poți trimite un dosar \'Trmis\' pentru a sincroniza email-urile trimise dintr-un client extern de email-uri.',
      'storeSentEmails' => 'Mesajele trmise o să fie stocate pe serverul IMAP. Câmpul adresei de email trebuie să se potrivească cu adresa de email de unde vor fi trimise email-urile.'
    ]
  ],
  'EmailAddress' => [
    'labels' => [
      'Primary' => 'Primar',
      'Opted Out' => 'Renunțat la',
      'Invalid' => 'Nu este valid'
    ],
    'fields' => [
      'optOut' => 'Opted Out',
      'invalid' => 'Invalid'
    ],
    'presetFilters' => [
      'orphan' => 'Orphan'
    ]
  ],
  'EmailFilter' => [
    'fields' => [
      'from' => 'De la',
      'to' => 'Către',
      'subject' => 'Subiect',
      'bodyContains' => 'Conținutul Conține',
      'action' => 'Acțiune',
      'isGlobal' => 'Este Global',
      'emailFolder' => 'Dosar'
    ],
    'labels' => [
      'Create EmailFilter' => 'Creează Filtru Email',
      'Emails' => 'Email-uri'
    ],
    'options' => [
      'action' => [
        'Skip' => 'Ignoră',
        'Move to Folder' => 'Pune în Dosar'
      ]
    ],
    'tooltips' => [
      'name' => 'Dă-i filtrului un nume descriptiv.',
      'subject' => 'Folosește un wildcard *:

text* - începe cu text,
*text* - conține text,
*text - se termină cu text. ',
      'bodyContains' => 'Conținutul email-ului conține unul dintre cuvintele sau frazele specificate.',
      'from' => 'Email-urile trimise de la adresa specificată. Dacă nu este necesar, lasă gol. Poți folosi un wildcard *.',
      'to' => 'Email-urile trimise de la adresa specificată. Dacă nu este necesar, lasă gol. Poți folosi un wildcard *.',
      'isGlobal' => 'Aplică acest filtru la toate email-urile primite în sistem.'
    ]
  ],
  'EmailFolder' => [
    'fields' => [
      'skipNotifications' => 'Sări peste Notificări'
    ],
    'labels' => [
      'Create EmailFolder' => 'Creează Dosar',
      'Manage Folders' => 'Gestionează Dosare',
      'Emails' => 'Email-uri'
    ]
  ],
  'EmailTemplate' => [
    'fields' => [
      'name' => 'Nume',
      'status' => 'Status',
      'isHtml' => 'În format Html',
      'body' => 'Conținutul',
      'subject' => 'Subiect',
      'attachments' => 'Atașamente',
      'insertField' => 'Inserează Câmp',
      'oneOff' => 'Pornit-oprit',
      'category' => 'Category'
    ],
    'links' => [],
    'labels' => [
      'Create EmailTemplate' => 'Creează Șablon Email',
      'Info' => 'Info',
      'Available placeholders' => 'Available placeholders'
    ],
    'messages' => [
      'infoText' => 'Available placeholders:

{optOutUrl} &#8211; URL for an unsubscribe link;

{optOutLink} &#8211; an unsubscribe link.'
    ],
    'tooltips' => [
      'oneOff' => 'Bifează dacă o să folosești acest șablon doar o dată. Ex. pentru Email-uri în masă.'
    ],
    'presetFilters' => [
      'actual' => 'Actual'
    ],
    'placeholderTexts' => [
      'today' => 'Today\'s date',
      'now' => 'Current date & time',
      'currentYear' => 'Current Year',
      'optOutUrl' => 'URL for an unsubsbribe link',
      'optOutLink' => 'an unsubscribe link'
    ]
  ],
  'EmailTemplateCategory' => [
    'labels' => [
      'Create EmailTemplateCategory' => 'Create Category',
      'Manage Categories' => 'Manage Categories',
      'EmailTemplates' => 'Email Templates'
    ],
    'fields' => [
      'order' => 'Order',
      'childList' => 'Child List'
    ],
    'links' => [
      'emailTemplates' => 'Email Templates'
    ]
  ],
  'EntityManager' => [
    'labels' => [
      'Fields' => 'Câmpuri',
      'Relationships' => 'Relații',
      'Layouts' => 'Layouts',
      'Schedule' => 'Program',
      'Log' => 'Jurnal',
      'Formula' => 'Formulă'
    ],
    'fields' => [
      'name' => 'Nume',
      'type' => 'Tip',
      'labelSingular' => 'Etichetă Singulară',
      'labelPlural' => 'Etichetă Plurală',
      'stream' => 'Stream',
      'label' => 'Etichetă',
      'linkType' => 'Tipul Link-ului',
      'entityForeign' => 'Entitate Străină',
      'linkForeign' => 'Link Străin',
      'link' => 'Link',
      'labelForeign' => 'Etichetă Străină',
      'sortBy' => 'Ordonare Implicită (câmp)',
      'sortDirection' => 'Ordonare Implicită (direcție)',
      'relationName' => 'Nume tabel mijlociu',
      'linkMultipleField' => 'Link Câmp Multiplu',
      'linkMultipleFieldForeign' => 'Link Străin Câmp Multimplu',
      'disabled' => 'Dezactivat',
      'textFilterFields' => 'Câmpurile de filtrare a textului',
      'audited' => 'Audiate',
      'auditedForeign' => 'Audiate Străin',
      'statusField' => 'Stare Câmp',
      'beforeSaveCustomScript' => 'Înainte de a salva scriptul personalizat',
      'color' => 'Color',
      'kanbanViewMode' => 'Kanban View',
      'kanbanStatusIgnoreList' => 'Ignored groups in Kanban view',
      'iconClass' => 'Icon',
      'countDisabled' => 'Disable record count',
      'fullTextSearch' => 'Full-Text Search',
      'parentEntityTypeList' => 'Parent Entity Types',
      'foreignLinkEntityTypeList' => 'Foreign Links'
    ],
    'options' => [
      'type' => [
        '' => 'Nici unul',
        'Base' => 'Bază',
        'Person' => 'Persoană',
        'CategoryTree' => 'Arbore Categorie',
        'Event' => 'Eveniment',
        'BasePlus' => 'Bază Plus',
        'Company' => 'Companie'
      ],
      'linkType' => [
        'manyToMany' => 'Multe-către-multe',
        'oneToMany' => 'Una-către-multe',
        'manyToOne' => 'Multe-către-una',
        'oneToOneRight' => 'One-to-One Right',
        'oneToOneLeft' => 'One-to-One Left',
        'parentToChildren' => 'Părinte-către-Copil',
        'childrenToParent' => 'Copil-către-Părinte'
      ],
      'sortDirection' => [
        'asc' => 'Ascendent',
        'desc' => 'Descendent'
      ]
    ],
    'messages' => [
      'confirmRemove' => 'Are you sure you want to remove the entity type from the system?',
      'entityCreated' => 'Entitatea a fost creată',
      'linkAlreadyExists' => 'Confict nume link.',
      'linkConflict' => 'Confilct nume: link-ul sau câmpul cu același nume există deja.'
    ],
    'tooltips' => [
      'statusField' => 'Actualizările acestui câmp sunt autentificate în stream.',
      'textFilterFields' => 'Câmpuri folosite de căutarea text.',
      'stream' => 'Dacă entittatea are un Stream.',
      'disabled' => 'Bifează dacă nu ai nevoie de această entitate în sistemul tău.',
      'linkAudited' => 'Se creează înregistrări asemănătoare și se conectează cu înregistrările existente, fiind autentificate în Stream.',
      'linkMultipleField' => 'Câmpurile multiple conectate, oferă o posibilitate ușoară de a edita relatții. Nu folosi dacă ai un număr mare de înregistrări asemănătoare.',
      'entityType' => 'Bază Plus - are Activități, Istoric și pnouri de sarcini.

Event - disponibile în Calendar și panoul de Activități.',
      'countDisabled' => 'Total number won\'t be displayed on the list view. Can decrease loading time when the DB table is big.',
      'fullTextSearch' => 'Running rebuild is required.'
    ]
  ],
  'Export' => [
    'fields' => [
      'exportAllFields' => 'Exportă toate câmpurile',
      'fieldList' => 'Listă Câmp',
      'format' => 'Format'
    ],
    'options' => [
      'format' => [
        'csv' => 'CSV',
        'xlsx' => 'XLSX (Excel)'
      ]
    ]
  ],
  'Extension' => [
    'fields' => [
      'name' => 'Nume',
      'version' => 'Versiune',
      'description' => 'Descriere',
      'isInstalled' => 'Instalat',
      'checkVersionUrl' => 'An URL for checking new versions'
    ],
    'labels' => [
      'Uninstall' => 'Dezinstalează',
      'Install' => 'Instalează'
    ],
    'messages' => [
      'uninstalled' => 'Extenisa {name} a fost dezinstalată'
    ]
  ],
  'ExternalAccount' => [
    'labels' => [
      'Connect' => 'Conectare',
      'Disconnect' => 'Disconnect',
      'Disconnected' => 'Disconnected',
      'Connected' => 'Conectat'
    ],
    'help' => []
  ],
  'FieldManager' => [
    'labels' => [
      'Dynamic Logic' => 'Logică Dinamică',
      'Name' => 'Nume',
      'Label' => 'Etichetă',
      'Type' => 'Tip'
    ],
    'options' => [
      'dateTimeDefault' => [
        '' => 'Nici unul',
        'javascript: return this.dateTime.getNow(1);' => 'Acum',
        'javascript: return this.dateTime.getNow(5);' => 'Acum (5m)',
        'javascript: return this.dateTime.getNow(15);' => 'Acum (15m)',
        'javascript: return this.dateTime.getNow(30);' => 'Acum (30m)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 oră',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+0 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 ore',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 zi',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 zile',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 zile',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 zile',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 zile',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 zile',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 săptămână'
      ],
      'dateDefault' => [
        '' => 'Nici unul',
        'javascript: return this.dateTime.getToday();' => 'Astăzi',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 zi',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 zile',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 zile',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 zile',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 zile',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 zile',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 zile',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 zile',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 zile',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 zile',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 săptâmână',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 săptămâni',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 săptămâni',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 lună',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 luni',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 an'
      ],
      'barcodeType' => [
        'EAN13' => 'EAN-13',
        'EAN8' => 'EAN-8',
        'EAN5' => 'EAN-5',
        'EAN2' => 'EAN-2',
        'UPC' => 'UPC (A)',
        'UPCE' => 'UPC (E)',
        'pharmacode' => 'Pharmacode',
        'QRcode' => 'QR code'
      ]
    ],
    'tooltips' => [
      'audited' => 'Actualizătile o să fie autentificate în stream',
      'required' => 'Câmpul o să fie obligatoriu. Nu poate fi lăsat necompletat.',
      'default' => 'La creeare, valoarea o să fie setată la valoarea implicită.',
      'min' => 'Valoarea min acceptată.',
      'max' => 'Valoarea max acceptată',
      'seeMoreDisabled' => 'Dacă nu este bifat, textele lungi o să fie scurtate.',
      'lengthOfCut' => 'Cum o să fie textele înainte să fie tăiate',
      'maxLength' => 'Lungimea max acceptată a textului.',
      'before' => 'Valoarea datei ar trebui să fie înaintea valorii datei câmpului specificat.',
      'after' => 'Valoarea datei ar trebui să fie după valorea datei câmpului specificat.',
      'readOnly' => 'Valoare câmpului nu poate fi specificată de utilizator. Dar poate fi calculată cu ajutorul formulei.',
      'fileAccept' => 'Which file types to accept. It\'s possible to add custom items.',
      'barcodeLastChar' => 'For EAN-13 type.',
      'maxFileSize' => 'Dacă este necompletat sau 0, atunci nici o limită.'
    ],
    'fieldParts' => [
      'address' => [
        'street' => 'Stradă',
        'city' => 'Oraș',
        'state' => 'Stat',
        'country' => 'Țară',
        'postalCode' => 'Cod Poștal',
        'map' => 'Hartă'
      ],
      'personName' => [
        'salutation' => 'Salutare',
        'first' => 'First',
        'middle' => 'Middle',
        'last' => 'Last'
      ],
      'currency' => [
        'converted' => '(Convertit)',
        'currency' => '(Currency)'
      ],
      'datetimeOptional' => [
        'date' => 'Dată'
      ]
    ],
    'fieldInfo' => [
      'varchar' => 'A single-line text.',
      'enum' => 'Selectbox, only one value can be selected.',
      'text' => 'A multiline text with markdown support.',
      'date' => 'Date w/o time.',
      'datetime' => 'Date and time',
      'currency' => 'A currency value. A float number with a currency code.',
      'int' => 'A whole number.',
      'float' => 'A number with a decimal part.',
      'bool' => 'A checkbox. Two possible values: true and false.',
      'multiEnum' => 'A list of values, multiple values can be selected. The list is ordered.',
      'checklist' => 'A list of checkboxes.',
      'array' => 'A list of values, similar to Multi-Enum field.',
      'address' => 'An address with street, city, state, postal code and country.',
      'url' => 'For storing links.',
      'wysiwyg' => 'A text with HTML support.',
      'file' => 'For file uploading.',
      'image' => 'For image uploading.',
      'attachmentMultiple' => 'Allows to upload multiple files.',
      'number' => 'An auto-incrementing number of string type with a possible prefix and specific length.',
      'autoincrement' => 'A generated read-only auto-incrementing integer number.',
      'barcode' => 'A barcode. Can be printed to PDF.',
      'email' => 'A set of email addresses with their parameters: Opted-out, Invalid, Primary.',
      'phone' => 'A set of phone numbers with their parameters: Type, Opted-out, Invalid, Primary.',
      'foreign' => 'A field of a related record. Read-only.',
      'link' => 'A record related through Belongs-To (many-to-one or one-to-one) relationship.',
      'linkParent' => 'A record related through Belongs-To-Parent relationship. Can be of different entity types.',
      'linkMultiple' => 'A set of records related through Has-Many (many-to-many or one-to-many) relationship. Not all relatioships have their link-multiple fields. Only those do, where Link-Multiple parameter(s) is enabled.'
    ]
  ],
  'Global' => [
    'scopeNames' => [
      'Email' => 'Email',
      'User' => 'Utilizator',
      'Team' => 'Echipă',
      'Role' => 'Rol',
      'EmailTemplate' => 'Șablon Email',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Cont Personal de Email',
      'EmailAccountScope' => 'Cont Personal de Email',
      'OutboundEmail' => 'Email ieșire',
      'ScheduledJob' => 'Activități planificate',
      'ExternalAccount' => 'Cont Extern',
      'Extension' => 'Extensie',
      'Dashboard' => 'Tablou de bord',
      'InboundEmail' => 'Cont Grup Email',
      'Stream' => 'Stream',
      'Import' => 'Importă',
      'Template' => 'Șablon',
      'Job' => 'Activitate',
      'EmailFilter' => 'Filtru Email',
      'Portal' => 'Portal',
      'PortalRole' => 'Rol Portal',
      'Attachment' => 'Atașament',
      'EmailFolder' => 'Dosar Email',
      'PortalUser' => 'Utilizator Portal',
      'ApiUser' => 'API User',
      'ScheduledJobLogRecord' => '"Jurnal Înregistrări Activități Planificate',
      'PasswordChangeRequest' => 'Cerere Schimbare Parolă',
      'ActionHistoryRecord' => 'Istoric Înregistrări Acțiune',
      'AuthToken' => 'Token Auth',
      'UniqueId' => 'ID Unic',
      'LastViewed' => 'Ultima Vizualizare',
      'Settings' => 'Setări',
      'FieldManager' => 'Manager Câmp',
      'Integration' => 'Integrare',
      'LayoutManager' => 'Manager Aspect',
      'EntityManager' => 'Manger Entități',
      'Export' => 'Export',
      'DynamicLogic' => 'Logică Dinamică',
      'DashletOptions' => 'Opțiuni Dashlet',
      'Admin' => 'Admin',
      'Global' => 'Global',
      'Preferences' => 'Preferințe',
      'EmailAddress' => 'Adresă Email',
      'PhoneNumber' => 'Număr Telefon',
      'AuthLogRecord' => 'Auth Log Record',
      'AuthFailLogRecord' => 'Auth Fail Log Record',
      'LeadCapture' => 'Lead Capture Entry Point',
      'LeadCaptureLogRecord' => 'Lead Capture Log Record',
      'ArrayValue' => 'Array Value',
      'DashboardTemplate' => 'Dashboard Template',
      'Currency' => 'Currency',
      'LayoutSet' => 'Layout Set',
      'Webhook' => 'Webhook',
      'Account' => 'Cont',
      'Contact' => 'Contact',
      'Lead' => 'Lead',
      'Target' => 'Țintă',
      'Opportunity' => 'Oportunitate',
      'Meeting' => 'Întâlnire',
      'Calendar' => 'Calendar',
      'Call' => 'Apel',
      'Task' => 'Sarcină',
      'Case' => 'Caz',
      'Document' => 'Document',
      'DocumentFolder' => 'Dosar Document',
      'Campaign' => 'Campanie',
      'TargetList' => 'Listă Țintă',
      'MassEmail' => 'Email în Masă',
      'EmailQueueItem' => 'Email Element de așteptare',
      'CampaignTrackingUrl' => 'Urmărire URL',
      'Activities' => 'Activități',
      'KnowledgeBaseArticle' => 'Atricol Bază de Cunoștințe',
      'KnowledgeBaseCategory' => 'Categorie Bază de Cunoștințe',
      'CampaignLogRecord' => 'Înregistrare Jurnal Campanie'
    ],
    'scopeNamesPlural' => [
      'Email' => 'Email-uri',
      'User' => 'Utilizatori',
      'Team' => 'Echipe',
      'Role' => 'Roluri',
      'EmailTemplate' => 'Șabloane Email',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Conturi Personale Email',
      'EmailAccountScope' => 'Conturi Personale Email',
      'OutboundEmail' => 'Email-uri trimise',
      'ScheduledJob' => 'Activități Planificate',
      'ExternalAccount' => 'Conturi Externe',
      'Extension' => 'Extensii',
      'Dashboard' => 'Tablou de bord',
      'InboundEmail' => 'Conturi Grup Email',
      'EmailAddress' => 'Email Addresses',
      'PhoneNumber' => 'Phone Numbers',
      'Stream' => 'Stream',
      'Import' => 'Import',
      'Template' => 'Șabloane',
      'Job' => 'Activități',
      'EmailFilter' => 'Filtre Email',
      'Portal' => 'Portaluri',
      'PortalRole' => 'Roluri Portaluri',
      'Attachment' => 'Atașamente',
      'EmailFolder' => 'Dosare Email',
      'PortalUser' => 'Utilizatori Portal',
      'ApiUser' => 'API Users',
      'ScheduledJobLogRecord' => 'Jurnal înregistrări Activități Planificate',
      'PasswordChangeRequest' => 'Cereri Schimbare Parolă',
      'ActionHistoryRecord' => 'Istoric Acțiune',
      'AuthToken' => 'Tokeni Auth',
      'UniqueId' => 'ID-uri Unice',
      'LastViewed' => 'Ultima Vizualizare',
      'AuthLogRecord' => 'Auth Log',
      'AuthFailLogRecord' => 'Auth Fail Log',
      'LeadCapture' => 'Lead Capture',
      'LeadCaptureLogRecord' => 'Lead Capture Log',
      'ArrayValue' => 'Array Values',
      'DashboardTemplate' => 'Dashboard Templates',
      'Currency' => 'Currency',
      'LayoutSet' => 'Layout Sets',
      'Webhook' => 'Webhooks',
      'Account' => 'Conturi',
      'Contact' => 'Contacte',
      'Lead' => 'Lead-uri',
      'Target' => 'Ținte',
      'Opportunity' => 'Oportunități',
      'Meeting' => 'Întâlniri',
      'Calendar' => 'Calendar',
      'Call' => 'Apeluri',
      'Task' => 'Sarcini',
      'Case' => 'Cazuri',
      'Document' => 'Documente',
      'DocumentFolder' => 'Dosare Document',
      'Campaign' => 'Campanii',
      'TargetList' => 'Liste Țintă',
      'MassEmail' => 'Email-uri în Masă',
      'EmailQueueItem' => 'Email Element de Așteptare',
      'CampaignTrackingUrl' => 'Urmărire URL-uri',
      'Activities' => 'Activității',
      'KnowledgeBaseArticle' => 'Bază de Cunoștințe',
      'KnowledgeBaseCategory' => 'Categorii Bază de Cunoștințe',
      'CampaignLogRecord' => 'Înregistrări Jurnal Campanie'
    ],
    'labels' => [
      'Misc' => 'Amestecat',
      'Merge' => 'Îmbina',
      'None' => 'Nici unul',
      'Home' => 'Acasă',
      'by' => 'de',
      'Proceed' => 'Proceed',
      'Saved' => 'Salvat',
      'Error' => 'Eroare',
      'Select' => 'Selectează',
      'Not valid' => 'Nu este valid',
      'Please wait...' => 'Vă rugăm așteptați...',
      'Please wait' => 'Vă rugăm așteptați',
      'Attached' => 'Attached',
      'Loading...' => 'Se încarcă...',
      'Uploading...' => 'Se încarcă...',
      'Sending...' => 'Se trimite...',
      'Merging...' => 'Se îmbină...',
      'Merged' => 'Îmbinate',
      'Removed' => 'Șters',
      'Posted' => 'Publicat',
      'Linked' => 'Legat',
      'Unlinked' => 'Nu este legat',
      'Done' => 'Terminat',
      'Access denied' => 'Acces refuzat',
      'Not found' => 'Nu a fost găsit',
      'Access' => 'Acces',
      'Are you sure?' => 'Ești sigur?',
      'Record has been removed' => 'Înregistrarea a fost ștearsă',
      'Wrong username/password' => 'Nume utilizator/parola nu sunt corecte',
      'Post cannot be empty' => 'Articolul nu poate fi gol',
      'Removing...' => 'Se șterge...',
      'Unlinking...' => 'Se deconectează...',
      'Posting...' => 'Se publică...',
      'Username can not be empty!' => 'Numele de utilizator nu poate fi gol!',
      'Cache is not enabled' => 'Cache-ul nu este activat',
      'Cache has been cleared' => 'Cache-ul a fost șters',
      'Rebuild has been done' => 'Reconstruit cu succes',
      'Return to Application' => 'Întoarce-te la aplicație',
      'Saving...' => 'Se salvează...',
      'Modified' => 'Modificat',
      'Created' => 'Creat',
      'Create' => 'Creaza',
      'create' => 'creaza',
      'Overview' => 'Prezentare generală',
      'Details' => 'Detalii',
      'Add Field' => 'Adaugă Câmp',
      'Add Dashlet' => 'Adaugă Dashlet',
      'Filter' => 'Filtru',
      'Edit Dashboard' => 'Editare tablu de bord',
      'Add' => 'Adaugă',
      'Add Item' => 'Adaugă Element',
      'Reset' => 'Resetare',
      'Menu' => 'Meniu',
      'More' => 'Mai mult',
      'Search' => 'Căutare',
      'Only My' => 'Doar eu',
      'Open' => 'Deschide',
      'Admin' => 'Admin',
      'About' => 'Despre',
      'Refresh' => 'Reîmprospătare',
      'Remove' => 'Șterge',
      'Restore' => 'Restore',
      'Options' => 'Opțiuni',
      'Username' => 'Nume Utilizator',
      'Password' => 'Parolă',
      'Login' => 'Conectare',
      'Log Out' => 'Deconectare',
      'Preferences' => 'Preferințe',
      'State' => 'Stat',
      'Street' => 'Stradă',
      'Country' => 'Țara',
      'City' => 'Oraș',
      'PostalCode' => 'Code Poștal',
      'Followed' => 'Urmărit',
      'Follow' => 'Urmărește',
      'Followers' => 'Urmăritori',
      'Clear Local Cache' => 'Ștergere Cache Local',
      'Actions' => 'Acțiuni',
      'Delete' => 'Șterge',
      'Update' => 'Actualizare',
      'Save' => 'Salvează',
      'Edit' => 'Editare',
      'View' => 'Vizualizare',
      'Cancel' => 'Anulează',
      'Apply' => 'Aplică',
      'Unlink' => 'Nu mai leaga',
      'Mass Update' => 'Actualizează tot',
      'Export' => 'Export',
      'No Data' => 'Nu sunt date',
      'No Access' => 'Acces nepermis',
      'All' => 'Toate',
      'Active' => 'Activ',
      'Inactive' => 'Inactiv',
      'Write your comment here' => 'Scrie comentariul tău aici',
      'Post' => 'Publică',
      'Stream' => 'Curent',
      'Show more' => 'Afișează mai mult',
      'Dashlet Options' => 'Opțiuni Dashlet',
      'Full Form' => 'Formă întreagă',
      'Insert' => 'Inserare',
      'Person' => 'Persoană',
      'First Name' => 'Prenume',
      'Last Name' => 'Nume',
      'Middle Name' => 'Middle Name',
      'Original' => 'Original',
      'You' => 'Tu',
      'you' => 'tu',
      'change' => 'schimbă',
      'Change' => 'Schimbă',
      'Primary' => 'Primar',
      'Save Filter' => 'Salvează Filtru',
      'Administration' => 'Administrare',
      'Run Import' => 'Rulează Import',
      'Duplicate' => 'Duplicat',
      'Notifications' => 'Notificări',
      'Mark all read' => 'Marchează tot ca citit',
      'See more' => 'Vezi mai Mult',
      'Today' => 'Astăzi',
      'Tomorrow' => 'Mâine',
      'Yesterday' => 'Ieri',
      'Submit' => 'Trimite',
      'Close' => 'Închide',
      'Yes' => 'Da',
      'No' => 'Nu',
      'Select All Results' => 'Selectează toate rezultatele',
      'Value' => 'Valoare',
      'Current version' => 'Verisune actuală',
      'List View' => 'Vizualizare listă',
      'Tree View' => 'Vizualizare Arbore',
      'Unlink All' => 'Dezleagă tot',
      'Total' => 'Total',
      'Print to PDF' => 'Imprimă către PDF',
      'Default' => 'Implicit',
      'Number' => 'Număr',
      'From' => 'De la',
      'To' => 'Către',
      'Create Post' => 'Creează Articol',
      'Previous Entry' => 'Intrarea Precedentă',
      'Next Entry' => 'Următoarea Intrare',
      'View List' => 'Vizualizare Listă',
      'Attach File' => 'Fișier Atașat',
      'Skip' => 'Sări',
      'Attribute' => 'Atribut',
      'Function' => 'Funcție',
      'Self-Assign' => 'Auto-atribuire',
      'Self-Assigned' => 'Auto=Atribuit',
      'Expand' => 'Expandează',
      'Collapse' => 'Minimizează',
      'New notifications' => 'Notificare Nouă',
      'Manage Categories' => 'Gestionează Categorii',
      'Manage Folders' => 'Gestionează Dosare',
      'Convert to' => 'Convert to',
      'View Personal Data' => 'View Personal Data',
      'Personal Data' => 'Personal Data',
      'Erase' => 'Erase',
      'View Followers' => 'View Followers',
      'Convert Currency' => 'Convert Currency',
      'View on Map' => 'View on Map',
      'Preview' => 'Preview',
      'Move Over' => 'Move Over',
      'Scheduler' => 'Scheduler',
      'Create InboundEmail' => 'Creare Email Intrare',
      'Activities' => 'Activități',
      'History' => 'Istoric',
      'Attendees' => 'Participanți',
      'Schedule Meeting' => 'Planifică Întâlnire',
      'Schedule Call' => 'Planifică Apel',
      'Compose Email' => 'Compune Email',
      'Log Meeting' => 'Jurnal Intalnire',
      'Log Call' => 'Jurnal Apel',
      'Archive Email' => 'Arhivează Email',
      'Create Task' => 'Crează Sarcină',
      'Tasks' => 'Activități'
    ],
    'messages' => [
      'pleaseWait' => 'Vă rugăm așteptați...',
      'posting' => 'Se publică...',
      'loading' => 'Se încarcă...',
      'saving' => 'Se salvează...',
      'confirmLeaveOutMessage' => 'Ești sigur că vrei să părăsești formularul?',
      'notModified' => 'Nu ai modificat înregistrarea',
      'duplicate' => 'Înregistrarea pe care o creezi pare să fie duplicat',
      'dropToAttach' => 'Trage pentru a atașa',
      'fieldInvalid' => '{field} is invalid',
      'fieldIsRequired' => '{field} este obligatoriu',
      'fieldShouldBeEmail' => '{field} trebuie să fie o adresă de email validă',
      'fieldShouldBeFloat' => '{field} trebuie să fie float valid',
      'fieldShouldBeInt' => '{field} trebuie sa fie întreg valid',
      'fieldShouldBeDate' => '{field} trebuie sa fie dată validă',
      'fieldShouldBeDatetime' => '{field} trebuie să fie data/timp valid',
      'fieldShouldAfter' => '{field} trebuie sa fie după {otherField}',
      'fieldShouldBefore' => '{field} trebuie sa fie înainte de {otherField}',
      'fieldShouldBeBetween' => '{field} trebuie sa fie între {min} și  {max}',
      'fieldShouldBeLess' => '{field} trebuie sa fie mai puțin de {value}',
      'fieldShouldBeGreater' => '{field} trebuie sa fie mai mare de {value}',
      'fieldBadPasswordConfirm' => '{field} confirmat în mod necorespunzator',
      'fieldMaxFileSizeError' => 'Fișierul nu ar trebui să depășească {max} Mb',
      'fieldValueDuplicate' => 'Duplicate value',
      'fieldIsUploading' => 'Se încarcă',
      'fieldExceedsMaxCount' => 'Count exceeds max allowed {maxCount}',
      'resetPreferencesDone' => 'Preferințele au fost resetate la valori implicite',
      'confirmation' => 'Ești sigur?',
      'unlinkAllConfirmation' => 'Ești sigur că vrei să dezlegi toate înregistrările asemănătoare?',
      'resetPreferencesConfirmation' => 'Eșt sigur că vrei să resetezi preferințele la valori implicite?',
      'removeRecordConfirmation' => 'Eșt sigur că vrei să înlături înregistrarea?',
      'unlinkRecordConfirmation' => 'Eșt sigur că vrei să dezlegi înregistrarea asemănătoare?',
      'removeSelectedRecordsConfirmation' => 'Eșt sigur că vrei să înlături înregistrările selectate?',
      'unlinkSelectedRecordsConfirmation' => 'Are you sure you want to unlink selected records?',
      'massUpdateResult' => '{count} înregistrările au fost actualizate',
      'massUpdateResultSingle' => '{count} înregistrarea a fost actualizată',
      'recalculateFormulaConfirmation' => 'Are you sure you want to recalculate formula for selected records?',
      'noRecordsUpdated' => 'Nu a fost actualizat nici o înregistrare',
      'massRemoveResult' => '{count} înregistrări au fost șterse',
      'massRemoveResultSingle' => '{count} înregistrare a fost ștearsă',
      'noRecordsRemoved' => 'Înregistrările nu au fost șterse',
      'clickToRefresh' => 'Apasă pentru reîmprospătare',
      'writeYourCommentHere' => 'Scrie comentariul tău aici',
      'writeMessageToUser' => 'Scrie un mesaj către{user}',
      'writeMessageToSelf' => 'Scrie un mesaj pe stream',
      'typeAndPressEnter' => 'Tastează & apasă enter',
      'checkForNewNotifications' => 'Verifică pentru noi notificări',
      'checkForNewNotes' => 'Verifică pentru actualizări stream',
      'internalPost' => 'Articolul va fi vizulaizat doar de utilizatori interni',
      'internalPostTitle' => 'Articolul este vizualizat de utilizatori interni',
      'done' => 'Terminat',
      'notUpdated' => 'Not updated',
      'confirmMassFollow' => 'Ești sigur că vrei să urmărești înregistrările selectate?',
      'confirmMassUnfollow' => 'Ești sigur că nu mai vrei să urmărești înregistrările selectate?',
      'massFollowResult' => '{count} înregistrările sunt urmărite',
      'massUnfollowResult' => '{count} înregistările nu mai sunt urmărite',
      'massFollowResultSingle' => '{count} înregistrarea este urmărită',
      'massUnfollowResultSingle' => '{count} înregistrarea nu mai este urmărită',
      'massFollowZeroResult' => 'Nimic nu a fost urmărit',
      'massUnfollowZeroResult' => 'Nimic nu a mai fost neurmărit',
      'erasePersonalDataConfirmation' => 'Checked fields will be erased permanently. Are you sure?',
      'maintenanceMode' => 'The application currently is in maintenance mode. Only admin users have access.

Maintenance mode can be disabled at Administration → Settings.',
      'massPrintPdfMaxCountError' => 'Can\'t print more that {maxCount} records.'
    ],
    'boolFilters' => [
      'onlyMy' => 'Doar eu',
      'onlyMyTeam' => 'My Team',
      'followed' => 'Urmărit'
    ],
    'presetFilters' => [
      'followed' => 'Urmărit',
      'all' => 'Tot'
    ],
    'massActions' => [
      'remove' => 'Șterge',
      'merge' => 'Îmbină',
      'massUpdate' => 'Actualizează tot',
      'unlink' => 'Unlink',
      'export' => 'Exportă',
      'follow' => 'Urmărește',
      'unfollow' => 'Nu mai urmări',
      'convertCurrency' => 'Convert Currency',
      'recalculateFormula' => 'Recalculate Formula',
      'printPdf' => 'Print to PDF'
    ],
    'fields' => [
      'name' => 'Nume',
      'firstName' => 'Prenume',
      'lastName' => 'Nume',
      'middleName' => 'Middle Name',
      'salutationName' => 'Salutare',
      'assignedUser' => 'Utilizator alocat',
      'assignedUsers' => 'Utilizatori alocați',
      'emailAddress' => 'Email',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'assignedUserName' => 'Nume utilizator alocat',
      'teams' => 'Echipe',
      'createdAt' => 'creat la',
      'modifiedAt' => 'Modificat la',
      'createdBy' => 'creat de',
      'modifiedBy' => 'Modificat de',
      'description' => 'Descriere',
      'address' => 'Adresă',
      'phoneNumber' => 'Phone',
      'phoneNumberMobile' => 'Telefon (Mobil)',
      'phoneNumberHome' => 'Telefon (Acasă)',
      'phoneNumberFax' => 'Telefon (Fax)',
      'phoneNumberOffice' => 'Telefon (Birou)',
      'phoneNumberOther' => 'Telefon (Altul)',
      'phoneNumberData' => 'Phone Number Data',
      'phoneNumberIsOptedOut' => 'Phone Number is Opted-Out',
      'order' => 'Ordonează',
      'parent' => 'Părinte',
      'children' => 'Copil',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Type',
      'names' => 'Names',
      'types' => 'Types',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'billingAddressCity' => 'Oraș',
      'billingAddressCountry' => 'Țara',
      'billingAddressPostalCode' => 'Cod Poștal',
      'billingAddressState' => 'Stat',
      'billingAddressStreet' => 'Strada',
      'billingAddressMap' => 'Hartă',
      'addressCity' => 'Oraș',
      'addressStreet' => 'Strada',
      'addressCountry' => 'Țara',
      'addressState' => 'Stat',
      'addressPostalCode' => 'Cod Poștal',
      'addressMap' => 'Hartă',
      'shippingAddressCity' => 'Oraș (Livrare)',
      'shippingAddressStreet' => 'Stradă (Livrare)',
      'shippingAddressCountry' => 'Țară (Livrare)',
      'shippingAddressState' => 'Stat (Livrare)',
      'shippingAddressPostalCode' => 'Cod Poștal (Livrare)',
      'shippingAddressMap' => 'Hartă (Livrare)'
    ],
    'links' => [
      'assignedUser' => 'Utilizator alocat',
      'createdBy' => 'creat de',
      'modifiedBy' => 'Modificat de',
      'team' => 'Echipă',
      'roles' => 'Roluri',
      'teams' => 'Echipe',
      'users' => 'Utilizatori',
      'parent' => 'Părinte',
      'children' => 'Copil',
      'contacts' => 'Contacte',
      'opportunities' => 'Oportunități',
      'leads' => 'Lead-uri',
      'meetings' => 'Întâlniri',
      'calls' => 'Apeluri',
      'tasks' => 'Sarcini',
      'emails' => 'Email-uri',
      'accounts' => 'Conturi',
      'cases' => 'Cazuri',
      'documents' => 'Documente',
      'account' => 'Cont',
      'opportunity' => 'Oportunitate',
      'contact' => 'Contact'
    ],
    'dashlets' => [
      'Stream' => 'Curent',
      'Emails' => 'Căsuța mea poștală',
      'Iframe' => 'Iframe',
      'Records' => 'Listă Înregistrare',
      'Leads' => 'Lead-urile mele',
      'Opportunities' => 'Oportunitățile mele',
      'Tasks' => 'Sarcinile mele',
      'Cases' => 'Cazurile mele',
      'Calendar' => 'Calendar',
      'Calls' => 'Apelurile mele',
      'Meetings' => 'Întâlnirile mele',
      'OpportunitiesByStage' => 'Oportunități în funcție de stadiu',
      'OpportunitiesByLeadSource' => 'Oportunități în funcție de Sursa Lead-ului',
      'SalesByMonth' => 'Vânzări pe luna',
      'SalesPipeline' => 'Linie de Vanzari',
      'Activities' => 'Activitățiile mele'
    ],
    'notificationMessages' => [
      'assign' => '{entityType} {entity} a fost alocată ție',
      'emailReceived' => 'Email trimis de la {from}',
      'entityRemoved' => '{user} șters {entityType} {entity}'
    ],
    'streamMessages' => [
      'post' => '{user} publicat la {entityType} {entity}',
      'attach' => '{user} atașat la {entityType} {entity}',
      'status' => '{user} actualizat {field} pe {entityType} {entity}',
      'update' => '{user} actualizat {entityType} {entity}',
      'postTargetTeam' => '{user} publicat către echipă {target}',
      'postTargetTeams' => '{user} publicat către echipe {target}',
      'postTargetPortal' => '{user} publicat către portal {target}',
      'postTargetPortals' => '{user} publicat către portaluri {target}',
      'postTarget' => '{user} publicat către {target}',
      'postTargetYou' => '{user} publicat către tine',
      'postTargetYouAndOthers' => '{user} publicat către {target} și tine',
      'postTargetAll' => '{user} publicat la toți',
      'postTargetSelf' => '{user} auto-publicat',
      'postTargetSelfAndOthers' => '{user} publicat la {target} și la el însuși',
      'mentionInPost' => '{user} menționat {mentioned} în {entityType} {entity}',
      'mentionYouInPost' => '{user} menționat în {entityType} {entity}',
      'mentionInPostTarget' => '{user} menționat {mentioned} în articol',
      'mentionYouInPostTarget' => '{user} te-a menționat în articolul, lui {target}',
      'mentionYouInPostTargetAll' => '{user} te-a menționat în articolul, tuturor',
      'mentionYouInPostTargetNoTarget' => '{user} te-a menționat în articol',
      'create' => '{user} a creat {entityType} {entity}',
      'createThis' => '{user} a creaat acest {entityType}',
      'createAssignedThis' => '{user} a creat acest {entityType} alocat lui {assignee}',
      'createAssigned' => '{user} a creat {entityType} {entity} și alocat lui {assignee}',
      'createAssignedYou' => '{user} a creat {entityType} {entity} alocată ție',
      'createAssignedThisSelf' => '{user} a creat {entityType} auto-alocată',
      'createAssignedSelf' => '{user} a creat {entityType} {entity} auto-alocată',
      'assign' => '{user} a alocat {entityType} {entity} lui {assignee}',
      'assignThis' => '{user} a alocat acest {entityType} lui {assignee}',
      'assignYou' => '{user} a alocat {entityType} {entity} ție',
      'assignThisVoid' => '{user} a oprit alocarea {entityType}',
      'assignVoid' => '{user} a oprit alocarea {entityType} {entity}',
      'assignThisSelf' => '{user} a auto-alocat {entityType}',
      'assignSelf' => '{user} a auto-alocat {entityType} {entity}',
      'postThis' => '{user} publicat',
      'attachThis' => '{user} atașat',
      'statusThis' => '{user} a actualizat {field}',
      'updateThis' => '{user} a actualizat acest {entityType}',
      'createRelatedThis' => '{user} a creat {relatedEntityType} {relatedEntity} asemănătoare cu {entityType}',
      'createRelated' => '{user} a creat {relatedEntityType} {relatedEntity} asemănătoare cu {entityType} {entity}',
      'relate' => '{user} a legat {relatedEntityType} {relatedEntity} cu {entityType} {entity}',
      'relateThis' => '{user} a legat {relatedEntityType} {relatedEntity} cu {entityType',
      'emailReceivedFromThis' => 'Email primit de la {from}',
      'emailReceivedInitialFromThis' => 'Email primit de la {from}, a creat {entityType}',
      'emailReceivedThis' => 'Email primit',
      'emailReceivedInitialThis' => 'Email primit, a creat această {entityType}',
      'emailReceivedFrom' => 'Email primit de la {from}, asemănător cu {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email primit de la {from}, creat {entityType} {entity}',
      'emailReceived' => 'Email a fost primit pentru {entityType} {entity}',
      'emailReceivedInitial' => 'Email primt: creat {entityType} {entity}',
      'emailReceivedInitialFrom' => 'Email primit de la {from}, creat {entityType} {entity}',
      'emailSent' => '{by} a trimis emailul asemănător {entityType} {entity}',
      'emailSentThis' => '{by} a trimis email'
    ],
    'streamMessagesMale' => [
      'postTargetSelfAndOthers' => '{user} a publica la {target} și lui'
    ],
    'streamMessagesFemale' => [
      'postTargetSelfAndOthers' => '{user} posted to {target} și ei'
    ],
    'lists' => [
      'monthNames' => [
        0 => 'Ianuarie',
        1 => 'Februarie',
        2 => 'Martie',
        3 => 'Aprilie',
        4 => 'Mai',
        5 => 'Iunie',
        6 => 'Iulie',
        7 => 'August',
        8 => 'Septembrie',
        9 => 'Octombrie',
        10 => 'Noiembrie',
        11 => 'Decembrie'
      ],
      'monthNamesShort' => [
        0 => 'Ian',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Apr',
        4 => 'Mai',
        5 => 'Iun',
        6 => 'Iul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Oct',
        10 => 'Nov',
        11 => 'Dec'
      ],
      'dayNames' => [
        0 => 'Duminică',
        1 => 'Luni',
        2 => 'Marți',
        3 => 'Miercuri',
        4 => 'Joi',
        5 => 'Vineri',
        6 => 'sâmbăta'
      ],
      'dayNamesShort' => [
        0 => 'Dum',
        1 => 'Lun',
        2 => 'Mar',
        3 => 'Mie',
        4 => 'Joi',
        5 => 'Vin',
        6 => 'Sâm'
      ],
      'dayNamesMin' => [
        0 => 'Du',
        1 => 'Lu',
        2 => 'Ma',
        3 => 'Mi',
        4 => 'Jo',
        5 => 'Vi',
        6 => 'Sâ'
      ]
    ],
    'durationUnits' => [
      'd' => 'z',
      'h' => 'o',
      'm' => 'm',
      's' => 's'
    ],
    'options' => [
      'salutationName' => [
        'Mr.' => 'Dl.',
        'Mrs.' => 'D-na.',
        'Ms.' => 'D-șoara',
        'Dr.' => 'Dl.'
      ],
      'language' => [
        'af_ZA' => 'Africană',
        'az_AZ' => 'Azerbaijană',
        'be_BY' => 'Belarusă',
        'bg_BG' => 'Bulgară',
        'bn_IN' => 'Bengaleză',
        'bs_BA' => 'Bosniacă',
        'ca_ES' => 'Catalană',
        'cs_CZ' => 'Cehă',
        'cy_GB' => 'Galeză',
        'da_DK' => 'Daneză',
        'de_DE' => 'Germană',
        'el_GR' => 'Greacă',
        'en_GB' => 'Engleză (UK)',
        'es_MX' => 'Spaniolă (Mexic)',
        'en_US' => 'Engleză (US)',
        'es_ES' => 'Spaniolă (Spania)',
        'et_EE' => 'Estoniană',
        'eu_ES' => 'Bască',
        'fa_IR' => 'Persană',
        'fi_FI' => 'Finlandeză',
        'fo_FO' => 'Feroeză',
        'fr_CA' => 'Franceză (Canada)',
        'fr_FR' => 'Franceză (Franța)',
        'ga_IE' => 'Irlandeză',
        'gl_ES' => 'Galiciană',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Ebraică',
        'hi_IN' => 'Hindusă',
        'hr_HR' => 'Croată',
        'hu_HU' => 'Maghiară',
        'hy_AM' => 'Armeană',
        'id_ID' => 'Indoneziană',
        'is_IS' => 'Islandeză',
        'it_IT' => 'Italiană',
        'ja_JP' => 'Japoneză',
        'ka_GE' => 'Georgiană',
        'km_KH' => 'Khmeră',
        'ko_KR' => 'Coreană',
        'ku_TR' => 'Curdă',
        'lt_LT' => 'Lituaniană',
        'lv_LV' => 'Letonă',
        'mk_MK' => 'Macedoneană',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malai',
        'nb_NO' => 'Norvegiană Bokmål',
        'nn_NO' => 'Norvegiană Nynorsk',
        'ne_NP' => 'Nepaleză',
        'nl_NL' => 'Olandeză',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Poloneză',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portugheză (Brazilia)',
        'pt_PT' => 'Portugheză (Portugalia)',
        'ro_RO' => 'Română',
        'ru_RU' => 'Rusă',
        'sk_SK' => 'Slovacă',
        'sl_SI' => 'Slovenă',
        'sq_AL' => 'Albaneză',
        'sr_RS' => 'Sârbă',
        'sv_SE' => 'Suedeză',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamilă',
        'te_IN' => 'Telugu',
        'th_TH' => 'Tailandeză',
        'tl_PH' => 'Tagalogă',
        'tr_TR' => 'Turcă',
        'uk_UA' => 'Ucraineană',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnameză',
        'zh_CN' => 'Chineză Simplificată (China)',
        'zh_HK' => 'Chineză Tradițională (Honk Kong)',
        'zh_TW' => 'Chineză Tradițională (Taiwan)'
      ],
      'dateSearchRanges' => [
        'on' => 'Pornit',
        'notOn' => 'Oprit',
        'after' => 'După',
        'before' => 'Înainte',
        'between' => 'Între',
        'today' => 'Astăzi',
        'past' => 'În trecut',
        'future' => 'În viitor',
        'currentMonth' => 'Luna curentă',
        'lastMonth' => 'Luna trecută',
        'nextMonth' => 'Luna viitoare',
        'currentQuarter' => 'Trimestru actual',
        'lastQuarter' => 'Trimestrul trecut',
        'currentYear' => 'Anul curent',
        'lastYear' => 'Anul trecut',
        'lastSevenDays' => 'În ultimele 7 zile',
        'lastXDays' => 'Ultimele X zile',
        'nextXDays' => 'Următoarele X zile',
        'ever' => 'Vreodată',
        'isEmpty' => 'Este gol',
        'olderThanXDays' => 'Mai vechi decât X zile',
        'afterXDays' => 'După X zile',
        'currentFiscalYear' => 'Current Fiscal Year',
        'lastFiscalYear' => 'Last Fiscal Year',
        'currentFiscalQuarter' => 'Current Fiscal Quarter',
        'lastFiscalQuarter' => 'Last Fiscal Quarter'
      ],
      'searchRanges' => [
        'is' => 'Este',
        'isEmpty' => 'Este gol',
        'isNotEmpty' => 'Nu este gol',
        'isOneOf' => 'Oricare dintre',
        'isFromTeams' => 'Face parte din echipa',
        'isNot' => 'Nu este',
        'isNotOneOf' => 'Nici unul dintre',
        'anyOf' => 'Oricare dintre',
        'allOf' => 'All Of',
        'noneOf' => 'Nici unul dintre',
        'any' => 'Any'
      ],
      'varcharSearchRanges' => [
        'equals' => 'Egal',
        'like' => 'Este ca (%)',
        'notLike' => 'Nu este ca (%)',
        'startsWith' => 'Începe cu',
        'endsWith' => 'Se termină cu',
        'contains' => 'Conține',
        'notContains' => 'Nu Conține',
        'isEmpty' => 'Este gol',
        'isNotEmpty' => 'Nu este gol',
        'notEquals' => 'Nu este egal'
      ],
      'intSearchRanges' => [
        'equals' => 'Egal',
        'notEquals' => 'Nu este egal',
        'greaterThan' => 'Mai mare decât',
        'lessThan' => 'Mai mic decât',
        'greaterThanOrEquals' => 'Mai mare sau egal',
        'lessThanOrEquals' => 'Mai mic sau egal',
        'between' => 'Între',
        'isEmpty' => 'Este gol',
        'isNotEmpty' => 'Nu este gol'
      ],
      'autorefreshInterval' => [
        0 => 'Nici unul',
        '0.5' => '30 secunde',
        1 => '1 minut',
        2 => '2 minute',
        5 => '5 minute',
        10 => '10 minute'
      ],
      'phoneNumber' => [
        'Mobile' => 'Mobil',
        'Office' => 'Birou',
        'Fax' => 'Fax',
        'Home' => 'Acasă',
        'Other' => 'Altele'
      ],
      'reminderTypes' => [
        'Popup' => 'Popup',
        'Email' => 'Email'
      ]
    ],
    'sets' => [
      'summernote' => [
        'NOTICE' => 'Puteți găsi traducerea aici: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => [
          'bold' => 'Bold',
          'italic' => 'Italic',
          'underline' => 'Subliniat',
          'strike' => 'Tăiat',
          'clear' => 'Șterge stil font',
          'height' => 'Înălțime linie',
          'name' => 'Familie Font',
          'size' => 'Mărime Font'
        ],
        'image' => [
          'image' => 'Imagine',
          'insert' => 'Inserare Imagine',
          'resizeFull' => 'Redimensionare completă',
          'resizeHalf' => 'Redimensionare la jumatate',
          'resizeQuarter' => 'Redimensionare la sfert',
          'floatLeft' => 'Plutire la stânga',
          'floatRight' => 'Plutire la dreapta',
          'floatNone' => 'Fără plutire',
          'dragImageHere' => 'Trage o imaginea aici',
          'selectFromFiles' => 'Selectează din fișiere',
          'url' => 'URL Imagine',
          'remove' => 'Ștergere imagine'
        ],
        'link' => [
          'link' => 'Link',
          'insert' => 'Inserare Link',
          'unlink' => 'Dezleagă',
          'edit' => 'Editare',
          'textToDisplay' => 'Text de afișat',
          'url' => 'Către ce URL să ducă acest link?',
          'openInNewWindow' => 'Deschidere în fereastră noua'
        ],
        'video' => [
          'video' => 'Video',
          'videoLink' => 'Link Video',
          'insert' => 'Inserare Video',
          'url' => 'URL Video?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, sau DailyMotion)'
        ],
        'table' => [
          'table' => 'Tabel'
        ],
        'hr' => [
          'insert' => 'Inserare Linie Orizontală'
        ],
        'style' => [
          'style' => 'Stil',
          'normal' => 'Normal',
          'blockquote' => 'Ofertă',
          'pre' => 'Cod',
          'h1' => 'Header 1',
          'h2' => 'Header 2',
          'h3' => 'Header 3',
          'h4' => 'Header 4',
          'h5' => 'Header 5',
          'h6' => 'Header 6'
        ],
        'lists' => [
          'unordered' => 'Listă neordonată',
          'ordered' => 'Listă ordonată'
        ],
        'options' => [
          'help' => 'Ajutor',
          'fullscreen' => 'Pe tot ecranul',
          'codeview' => 'Vizualizare cod'
        ],
        'paragraph' => [
          'paragraph' => 'Paragraf',
          'outdent' => 'Neindentat',
          'indent' => 'Indentat',
          'left' => 'Aliniere stânga',
          'center' => 'Aliniere centru',
          'right' => 'Aliniere dreapta',
          'justify' => 'Justify complet'
        ],
        'color' => [
          'recent' => 'Culoarea recentă',
          'more' => 'Mai multe culori',
          'background' => 'Culoare fundal',
          'foreground' => 'Culoare font',
          'transparent' => 'Transparent',
          'setTransparent' => 'Setare transparență',
          'reset' => 'Resetare',
          'resetToDefault' => 'Resetare la implicit'
        ],
        'shortcut' => [
          'shortcuts' => 'Scurtături tastatură',
          'close' => 'Închide',
          'textFormatting' => 'Formatare Text',
          'action' => 'Acțiune',
          'paragraphFormatting' => 'Formatare Paragraf',
          'documentStyle' => 'Stil Document'
        ],
        'history' => [
          'undo' => 'Anulează',
          'redo' => 'Reface'
        ]
      ]
    ],
    'listViewModes' => [
      'list' => 'List',
      'kanban' => 'Kanban'
    ],
    'themes' => [
      'Espo' => 'Classic Espo',
      'EspoRtl' => 'RTL Espo',
      'Sakura' => 'Classic Sakura',
      'EspoVertical' => 'Vertical Espo',
      'SakuraVertical' => 'Vertical Sakura',
      'Violet' => 'Classic Violet',
      'VioletVertical' => 'Vertical Violet',
      'Hazyblue' => 'Classic Hazyblue',
      'HazyblueVertical' => 'Vertical Hazyblue'
    ]
  ],
  'Import' => [
    'labels' => [
      'New import with same params' => 'New import with same params',
      'Revert Import' => 'Revert Import',
      'Return to Import' => 'Revenire la importare',
      'Run Import' => 'Rulează Importarea',
      'Back' => 'Înapoi',
      'Field Mapping' => 'Câmp mapare',
      'Default Values' => 'Valori implicite',
      'Add Field' => 'Adăugare Câmp',
      'Created' => 'Creat',
      'Updated' => 'Actualizat',
      'Result' => 'Rezultat',
      'Show records' => 'Arată înregistrările',
      'Remove Duplicates' => 'Elimină duplicatele',
      'importedCount' => 'Importat (numără)',
      'duplicateCount' => 'Duplicate (numără)',
      'updatedCount' => 'Actualizat (numără)',
      'Create Only' => 'Doar crearea',
      'Create and Update' => 'Creare % Actualizare',
      'Update Only' => 'Doar actualizare',
      'Update by' => 'Actualizat de',
      'Set as Not Duplicate' => 'Setat ca Nu Duplicat',
      'File (CSV)' => 'Fișier (CSV)',
      'First Row Value' => 'Prima Valoare Rând',
      'Skip' => 'Sări',
      'Header Row Value' => 'Valoarea Header Rând',
      'Field' => 'Câmp',
      'What to Import?' => 'Ce să se importe?',
      'Entity Type' => 'Tip Entitate',
      'What to do?' => 'Ce să se întâmple?',
      'Properties' => 'Proprietăți',
      'Header Row' => 'Rând Header',
      'Person Name Format' => 'Format Nume Persoană',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => 'Delimitator Câmp',
      'Date Format' => 'Format Dată',
      'Decimal Mark' => 'Marcaj zecimal',
      'Text Qualifier' => 'Textul calificare',
      'Time Format' => 'Format timp',
      'Currency' => 'Valută',
      'Preview' => 'Previzualizare',
      'Next' => 'Următorul',
      'Step 1' => 'Pasul 1',
      'Step 2' => 'Pasul 2',
      'Double Quote' => 'Ofertă dublă',
      'Single Quote' => 'Ofertă unică',
      'Imported' => 'Importat',
      'Duplicates' => 'Duplicate',
      'Skip searching for duplicates' => 'Sări peste căutarea duplicatelor',
      'Timezone' => 'Fus orar',
      'Remove Import Log' => 'Remove Import Log',
      'New Import' => 'New Import',
      'Import Results' => 'Import Results',
      'Run Manually' => 'Run Manually',
      'Silent Mode' => 'Silent Mode'
    ],
    'messages' => [
      'utf8' => 'Ar trebui să fie codificat UTF-8',
      'duplicatesRemoved' => 'Duplicatele au fost înlăturate',
      'inIdle' => 'Executați în modul inactiv (pentru date mari; via crom)',
      'revert' => 'This will remove all imported records permanently.',
      'removeDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates.',
      'confirmRevert' => 'This will remove all imported records permanently. Are you sure?',
      'confirmRemoveDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates. Are you sure?',
      'confirmRemoveImportLog' => 'This will remove the import log. All imported records will be kept. You won\'t be able to revert import results. Are you sure?',
      'removeImportLog' => 'This will remove the import log. All imported records will be kept. Use it if you are sure that import is fine.'
    ],
    'fields' => [
      'file' => 'Fișier',
      'entityType' => 'Tip Entitate',
      'imported' => 'Înregistrări Importate',
      'duplicates' => 'Înregistrări duplicate',
      'updated' => 'Înregistrări actualizate',
      'status' => 'Status'
    ],
    'options' => [
      'status' => [
        'Failed' => 'Nu s-a reușit',
        'Standby' => 'Standby',
        'Pending' => 'Pending',
        'In Process' => 'În Proces',
        'Complete' => 'Terminat'
      ],
      'personNameFormat' => [
        'f l' => 'First Last',
        'l f' => 'Last First',
        'f m l' => 'First Middle Last',
        'l f m' => 'Last First Middle',
        'l, f' => 'Last, First'
      ]
    ],
    'strings' => [
      'commandToRun' => 'Command to run (from CLI)',
      'saveAsDefault' => 'Save as default'
    ],
    'tooltips' => [
      'manualMode' => 'If checked, you will need to run import manually from CLI. Command will be shown after setting up the import.',
      'silentMode' => 'A majority of after-save scripts will be skipped, stream notes won\'t be created. Import will run faster.'
    ]
  ],
  'InboundEmail' => [
    'fields' => [
      'name' => 'Nume',
      'emailAddress' => 'Adresă Email',
      'team' => 'Echipa',
      'status' => 'Status',
      'assignToUser' => 'Atribuie utilizatorului',
      'host' => 'Gazda',
      'username' => 'Nume Utilizator',
      'password' => 'Parola',
      'port' => 'Port',
      'monitoredFolders' => 'Directoare Monitorizate',
      'trashFolder' => 'Gunoi',
      'security' => 'Security',
      'createCase' => 'Creare Caz',
      'reply' => 'Raspunde',
      'caseDistribution' => 'Distribuire Caz',
      'replyEmailTemplate' => 'Template Raspuns Email ',
      'replyFromAddress' => 'Raspunde cu Adresa',
      'replyToAddress' => 'Răspunde la Adresa',
      'replyFromName' => 'Raspunde cu Numele',
      'targetUserPosition' => 'Poziția Țintă a Utiliztorului',
      'fetchSince' => 'Fetch începând cu',
      'addAllTeamUsers' => 'Pentru toți utilizatorii echipei',
      'teams' => 'Echipe',
      'sentFolder' => 'Trimite dosar',
      'storeSentEmails' => 'Stochează Email-uri trimisw',
      'keepFetchedEmailsUnread' => 'Keep Fetched Emails Unread',
      'useImap' => 'Fetch email-uri',
      'useSmtp' => 'Folosește SMTP',
      'smtpHost' => 'Gazdă SMTP',
      'smtpPort' => 'Port SMTP',
      'smtpAuth' => 'Autentificare SMTP',
      'smtpSecurity' => 'SEcuritate SMTP',
      'smtpAuthMechanism' => 'SMTP Auth Mechanism',
      'smtpUsername' => 'Nume utilizator SMTP',
      'smtpPassword' => 'Parolă SMTP',
      'fromName' => 'De la Nume',
      'smtpIsShared' => 'SMTP este partajat',
      'smtpIsForMassEmail' => 'SMTP este din Email-uri în Masă',
      'ssl' => 'SSL'
    ],
    'tooltips' => [
      'useSmtp' => 'The ability to send emails.',
      'reply' => 'Notificați expeditorii că email-urile lor au fost primite.

 Doar un email va fi trimis unui anumit destinatar într-o anumită perioadă de timp pentru a preveni looping.',
      'createCase' => 'Creați cazul automat din email-urile primite',
      'replyToAddress' => 'Specificați adresa de email a acestei căsuțe poștale pentru a redirecționa răspunsurile aici.',
      'caseDistribution' => 'Cum o să fie atribuite cazurile. Atribuite direct utilizatorului sau în rândul echipei.',
      'assignToUser' => 'Cazurile utilizatorului o să fie atribuite.',
      'team' => 'Cazurile echipei o să fie atribuite.',
      'teams' => 'Email-urile echipei o să fie atribuite.',
      'targetUserPosition' => 'Utilizatoriilor cu poziția specificată o să le fie distribuite cazurile.',
      'addAllTeamUsers' => 'Email-urile o să apară în căsuța poștală a tuturor utilizatorilor din echipele specificate.',
      'monitoredFolders' => 'Dosarele multiple ar trebui separate prin virgulă',
      'smtpIsShared' => 'Dacă este bifat, utiliatorii o să poată trimite email-uri folosind SMTP. Disponibilitatea este controlată de Roluri prin intermediul permisiunilor din Grupul Contului Email.',
      'smtpIsForMassEmail' => 'Dacă este bifat, SMTP o să fie disponibil pentru Email în Masă.',
      'storeSentEmails' => 'Email-urile trimise o să fie stocate pe server-ul IMAP'
    ],
    'links' => [
      'filters' => 'Filtre',
      'emails' => 'Email-uri',
      'assignToUser' => 'Atribuit Utilizatorului'
    ],
    'options' => [
      'status' => [
        'Active' => 'Activ',
        'Inactive' => 'Inactiv'
      ],
      'caseDistribution' => [
        '' => 'Nici unul',
        'Direct-Assignment' => 'Atribuire directa',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Cel putin, Ocupat'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'PLAIN',
        'login' => 'LOGIN',
        'crammd5' => 'CRAM-MD5'
      ]
    ],
    'labels' => [
      'Create InboundEmail' => 'Creare Email intrare',
      'IMAP' => 'IMAP',
      'Actions' => 'Actiuni',
      'Main' => 'Principal'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'Could neconectat la server-ul IMAP'
    ]
  ],
  'Integration' => [
    'fields' => [
      'enabled' => 'Activat',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'redirectUri' => 'Redirecționare URI',
      'apiKey' => 'Cheie API'
    ],
    'titles' => [
      'GoogleMaps' => 'Google Maps'
    ],
    'messages' => [
      'selectIntegration' => 'Selectați o integrare din meniu',
      'noIntegrations' => 'Nu este disponibilă nici o integrare'
    ],
    'help' => [
      'Google' => '**Obtain OAuth 2.0 credentials from the Google Developers Console.**

Visit [Google Developers Console](https://console.developers.google.com/project) to obtain OAuth 2.0 credentials such as a Client ID and Client Secret that are known to both Google and EspoCRM application.',
      'GoogleMaps' => 'Obtain API key [here](https://developers.google.com/maps/documentation/javascript/get-api-key).'
    ]
  ],
  'Job' => [
    'fields' => [
      'status' => 'Status',
      'executeTime' => 'Execută la',
      'executedAt' => 'Executed At',
      'startedAt' => 'Started At',
      'attempts' => 'Încercări rămase',
      'failedAttempts' => 'Încercări nereușite',
      'serviceName' => 'Serviciu',
      'method' => 'Metodă (depreciată)',
      'methodName' => 'Metodă',
      'scheduledJob' => 'Activitate Planificată',
      'scheduledJobJob' => 'Nume Activitate Planificată',
      'data' => 'Date',
      'targetType' => 'Target Type',
      'targetId' => 'Target ID',
      'number' => 'Number',
      'queue' => 'Queue',
      'job' => 'Job'
    ],
    'options' => [
      'status' => [
        'Pending' => 'În așteptare',
        'Success' => 'Succes',
        'Running' => 'Rulează',
        'Failed' => 'Eșuat'
      ]
    ]
  ],
  'LayoutManager' => [
    'fields' => [
      'width' => 'Lăţime (%)',
      'link' => 'Link',
      'notSortable' => 'Nu se poate sorta',
      'align' => 'Aliniere',
      'panelName' => 'Nume Panou',
      'style' => 'Stil',
      'sticked' => 'Lipit',
      'isLarge' => 'Large font size',
      'hidden' => 'Hidden',
      'dynamicLogicVisible' => 'Conditions making panel visible'
    ],
    'options' => [
      'align' => [
        'left' => 'Stânga',
        'right' => 'Dreapta'
      ],
      'style' => [
        'default' => 'Implicit',
        'success' => 'Succes',
        'danger' => 'Pericol',
        'info' => 'Info',
        'warning' => 'Avertisment',
        'primary' => 'Primar'
      ]
    ],
    'labels' => [
      'New panel' => 'Panou nou',
      'Layout' => 'Aspect'
    ],
    'tooltips' => [
      'hiddenPanel' => 'Need to click \'show more\' to see the panel.',
      'link' => 'If checked, then a field value will be displayed as a link pointing to the detail view of the record. Usually it is used for *Name* fields.'
    ]
  ],
  'LayoutSet' => [
    'fields' => [
      'layoutList' => 'Layouts'
    ],
    'labels' => [
      'Create LayoutSet' => 'Create Layout Set',
      'Edit Layouts' => 'Edit Layouts'
    ],
    'tooltips' => []
  ],
  'LeadCapture' => [
    'fields' => [
      'name' => 'Name',
      'campaign' => 'Campaign',
      'isActive' => 'Is Active',
      'subscribeToTargetList' => 'Subscribe to Target List',
      'subscribeContactToTargetList' => 'Subscribe Contact if exists',
      'targetList' => 'Target List',
      'fieldList' => 'Payload Fields',
      'optInConfirmation' => 'Double Opt-In',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'optInConfirmationLifetime' => 'Opt-in confirmation lifetime (hours)',
      'optInConfirmationSuccessMessage' => 'Text to show after opt-in confirmation',
      'leadSource' => 'Lead Source',
      'apiKey' => 'API Key',
      'targetTeam' => 'Target Team',
      'exampleRequestMethod' => 'Method',
      'exampleRequestUrl' => 'URL',
      'exampleRequestPayload' => 'Payload',
      'createLeadBeforeOptInConfirmation' => 'Create Lead before confirmation',
      'skipOptInConfirmationIfSubscribed' => 'Skip confirmation if lead is already in target list',
      'smtpAccount' => 'SMTP Account',
      'inboundEmail' => 'Group Email Account',
      'duplicateCheck' => 'Duplicate Check'
    ],
    'links' => [
      'targetList' => 'Target List',
      'campaign' => 'Campaign',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'targetTeam' => 'Target Team',
      'inboundEmail' => 'Group Email Account',
      'logRecords' => 'Log'
    ],
    'labels' => [
      'Create LeadCapture' => 'Create Entry Point',
      'Generate New API Key' => 'Generate New API Key',
      'Request' => 'Request',
      'Confirm Opt-In' => 'Confirm Opt-In'
    ],
    'messages' => [
      'generateApiKey' => 'Create new API Key',
      'optInConfirmationExpired' => 'Opt-in confirmation link is expired.',
      'optInIsConfirmed' => 'Opt-in is confirmed.'
    ],
    'tooltips' => [
      'optInConfirmationSuccessMessage' => 'Markdown is supported.'
    ]
  ],
  'LeadCaptureLogRecord' => [
    'fields' => [
      'number' => 'Number',
      'data' => 'Data',
      'target' => 'Target',
      'leadCapture' => 'Lead Capture',
      'createdAt' => 'Entered At',
      'isCreated' => 'Is Lead Created'
    ],
    'links' => [
      'leadCapture' => 'Lead Capture',
      'target' => 'Target'
    ]
  ],
  'Note' => [
    'fields' => [
      'post' => 'Publică',
      'attachments' => 'Atașamente',
      'targetType' => 'Țintă',
      'teams' => 'Echipe',
      'users' => 'Utilizatori',
      'portals' => 'Portale',
      'type' => 'Tip',
      'isGlobal' => 'Este Global',
      'isInternal' => 'Este Intern (nu pentru utilizatori interni)',
      'related' => 'Legat',
      'createdByGender' => 'Creat de genul',
      'data' => 'Date',
      'number' => 'Număr'
    ],
    'filters' => [
      'all' => 'Tot',
      'posts' => 'Postări',
      'updates' => 'Actualizări'
    ],
    'options' => [
      'targetType' => [
        'self' => 'către mine',
        'users' => 'către utilizatori anume',
        'teams' => 'către echipe anume',
        'all' => 'către toți utilizatorii interni',
        'portals' => 'către utilizatorii portalului'
      ],
      'type' => [
        'Post' => 'Postare'
      ]
    ],
    'messages' => [
      'writeMessage' => 'Scrieți mesajul aici'
    ],
    'links' => [
      'superParent' => 'Super Părinte',
      'related' => 'Legat'
    ]
  ],
  'PhoneNumber' => [
    'fields' => [
      'type' => 'Type',
      'optOut' => 'Opted Out',
      'invalid' => 'Invalid'
    ],
    'presetFilters' => [
      'orphan' => 'Orphan'
    ]
  ],
  'Portal' => [
    'fields' => [
      'name' => 'Nume',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Roluri',
      'isActive' => 'Este Activ',
      'isDefault' => 'Este Implicit',
      'tabList' => 'Listă filă',
      'quickCreateList' => 'Crează listă rapidă',
      'companyLogo' => 'Logo',
      'theme' => 'Temă',
      'language' => 'Limbă',
      'dashboardLayout' => 'Aspect bord',
      'dateFormat' => 'Format dată',
      'timeFormat' => 'Format oră',
      'timeZone' => 'Fus orar',
      'weekStart' => 'Prima zi a săptămânii',
      'defaultCurrency' => 'Valută implicită',
      'layoutSet' => 'Layout Set',
      'customUrl' => 'URL particularizat',
      'customId' => 'ID particularizat'
    ],
    'links' => [
      'users' => 'Utilizatori',
      'portalRoles' => 'Roluri',
      'layoutSet' => 'Layout Set',
      'notes' => 'Note',
      'articles' => 'Articole Bază de Cunoștință'
    ],
    'tooltips' => [
      'layoutSet' => 'Provides the ability to have layouts that differ from standard ones.',
      'portalRoles' => 'Rolurile specificate ale portalului o să fie aplicate la toți utilizatorii portalului.'
    ],
    'labels' => [
      'Create Portal' => 'Crați portal',
      'User Interface' => 'Interfață utilizator',
      'General' => 'General',
      'Settings' => 'Setări'
    ]
  ],
  'PortalRole' => [
    'fields' => [
      'exportPermission' => 'Permisiune de exportare',
      'massUpdatePermission' => 'Mass Update Permission'
    ],
    'links' => [
      'users' => 'Utilizatori'
    ],
    'tooltips' => [
      'exportPermission' => 'Defines whether portal users have an ability to export records.',
      'massUpdatePermission' => 'Defines whether portal users have an ability to do mass update of records.'
    ],
    'labels' => [
      'Access' => 'Acces',
      'Create PortalRole' => 'Creați Rolul Portalului',
      'Scope Level' => 'Nivel Domeniu',
      'Field Level' => 'Nivel câmp'
    ]
  ],
  'PortalUser' => [
    'labels' => [
      'Create PortalUser' => 'Creați Utilizator Portal'
    ]
  ],
  'Preferences' => [
    'fields' => [
      'dateFormat' => 'Format Dată',
      'timeFormat' => 'Format oră',
      'timeZone' => 'Fus orar',
      'weekStart' => 'Prima zi a săptămânii',
      'thousandSeparator' => 'Separator mii',
      'decimalMark' => 'Marcaj zecimal',
      'defaultCurrency' => 'Valută implicită',
      'currencyList' => 'Listă valute',
      'language' => 'Limbă',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorizare',
      'smtpSecurity' => 'Securitate',
      'smtpUsername' => 'Nume Utilizator',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Parolă',
      'smtpEmailAddress' => 'Adresă Email',
      'exportDelimiter' => 'Delimitator Exportare',
      'receiveAssignmentEmailNotifications' => 'Notificări email pentru sarcină',
      'receiveMentionEmailNotifications' => 'Notificări email despre mențiuni în postări',
      'receiveStreamEmailNotifications' => 'Notificări email despre postări și actualizare statusului',
      'assignmentNotificationsIgnoreEntityTypeList' => 'In-app assignment notifications',
      'assignmentEmailNotificationsIgnoreEntityTypeList' => 'Email assignment notifications',
      'autoFollowEntityTypeList' => 'Auto-urmărire globală',
      'signature' => 'Semnătură Email',
      'dashboardTabList' => 'Listă filă',
      'defaultReminders' => 'Default Reminders',
      'theme' => 'Temă',
      'useCustomTabList' => 'Listă Personalizată Personalizată',
      'tabList' => 'Listă filă',
      'emailReplyToAllByDefault' => 'Răspunde cu un email la tot, în mod implicit',
      'dashboardLayout' => 'Aspect bord',
      'emailReplyForceHtml' => 'Răspunde la email în HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Do not pre-fill assigned user on record creation',
      'followEntityOnStreamPost' => 'După publicare în Stream, auto-urmărește înregistrarea',
      'followCreatedEntities' => 'Auto-urmărire înregistrări create',
      'followCreatedEntityTypeList' => 'Auto-urmărire înregistrări create sau anumite tipuri de entitate',
      'emailUseExternalClient' => 'Use an external email client',
      'scopeColorsDisabled' => 'Disable scope colors',
      'tabColorsDisabled' => 'Disable tab colors'
    ],
    'links' => [],
    'options' => [
      'weekStart' => [
        0 => 'Duminică',
        1 => 'Luni'
      ]
    ],
    'labels' => [
      'Notifications' => 'Notificări',
      'User Interface' => 'Interfață utilizator',
      'SMTP' => 'SMTP',
      'Misc' => 'Amestecat',
      'Locale' => 'Local',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default'
    ],
    'tooltips' => [
      'autoFollowEntityTypeList' => 'Automatically follow ALL new records (created by any user) of the selected entity types. To be able to see information in the stream and receive notifications about all records in the system.',
      'doNotFillAssignedUserIfNotRequired' => 'When create record assigned user won\'t be filled with own user unless the field is required.',
      'followCreatedEntities' => 'When create new records, they will be automatically followed even if assigned to another user.',
      'followCreatedEntityTypeList' => 'When create new records of selected entity types, they will be followed automatically even if assigned to another user.'
    ]
  ],
  'Role' => [
    'fields' => [
      'name' => 'Nume',
      'roles' => 'Roluri',
      'assignmentPermission' => 'Permisiuni Sarcină',
      'userPermission' => 'Permisiuni Utilizator',
      'portalPermission' => 'Permisiuni Portal',
      'groupEmailAccountPermission' => 'Group Email Account Permission',
      'exportPermission' => 'Export Permission',
      'massUpdatePermission' => 'Mass Update Permission',
      'dataPrivacyPermission' => 'Data Privacy Permission'
    ],
    'links' => [
      'users' => 'Utilizatori',
      'teams' => 'Echipe'
    ],
    'tooltips' => [
      'assignmentPermission' => 'Allows to restrict an ability to assign records and post messages to other users.

all - no restriction

team - can assign and post only to teammates

no - can assign and post only to self',
      'userPermission' => 'Allows to restrict an ability for users to view activities, calendar and stream of other users.

all - can view all

team - can view activities of teammates only

no - can\'t view',
      'portalPermission' => 'Defines an access to portal information, ability to post messages to portal users.',
      'groupEmailAccountPermission' => 'Defines an access to group email accounts, an ability to send emails from group SMTP.',
      'exportPermission' => 'Defines whether users have an ability to export records.',
      'massUpdatePermission' => 'Defines whether users have an ability to do mass update of records.',
      'dataPrivacyPermission' => 'Allows to view and erase personal data.'
    ],
    'labels' => [
      'Access' => 'Acces',
      'Create Role' => 'Creare Rol',
      'Scope Level' => 'Nivel Domeniu',
      'Field Level' => 'Nivel Câmp'
    ],
    'options' => [
      'accessList' => [
        'not-set' => 'nu a fost setat',
        'enabled' => 'activat',
        'disabled' => 'dezactivat'
      ],
      'levelList' => [
        'all' => 'toate',
        'team' => 'echipa',
        'account' => 'cont',
        'contact' => 'contact',
        'own' => 'personal',
        'no' => 'nu',
        'yes' => 'da',
        'not-set' => 'nu a fost setat'
      ]
    ],
    'actions' => [
      'read' => 'Citește',
      'edit' => 'Editare',
      'delete' => 'Șterge',
      'stream' => 'Stream',
      'create' => 'Creați'
    ],
    'messages' => [
      'changesAfterClearCache' => 'Toate schimbările din controlul de acces o să fie aplicate după ce memoria chache este ștearsă.'
    ]
  ],
  'ScheduledJob' => [
    'fields' => [
      'name' => 'Nume',
      'status' => 'Stare',
      'job' => 'Activitate',
      'scheduling' => 'Planificare'
    ],
    'links' => [
      'log' => 'Jurnal'
    ],
    'labels' => [
      'As often as possible' => 'As often as possible',
      'Create ScheduledJob' => 'Creați activiate planificată'
    ],
    'options' => [
      'job' => [
        'Cleanup' => 'Curățare',
        'CheckInboundEmails' => 'Verificare Grup Conturi Email',
        'CheckEmailAccounts' => 'Verificare Conturi Personale de Email',
        'SendEmailReminders' => 'Trimite Mementouri Email',
        'AuthTokenControl' => 'Control Autentificare Token',
        'SendEmailNotifications' => 'Trimite Notificări Email',
        'CheckNewVersion' => 'Verificați dacă există versiuni mai noi',
        'ProcessWebhookQueue' => 'Process Webhook Queue',
        'ProcessMassEmail' => 'Trimite Email-uri în Masă',
        'ControlKnowledgeBaseArticleStatus' => 'Controlează Starea Articolelor Bază de Cunoștințe'
      ],
      'cronSetup' => [
        'linux' => 'Notă: Adaugă acestă linie în fișierul crontab pentru a rula Activitățile Espo planificate:',
        'mac' => 'Notă: Adaugă acestă linie în fișierul crontab pentru a rula Activitățile Espo planificate:',
        'windows' => 'Notă: Crează un fișier batch care să conțina următoarele comenzi pentru a rula Activitățile Espo planificate, folosind Windows Scheduled Tasks:',
        'default' => 'Notă: Adaugă această comandă în Cron Job (Sacini planificate):'
      ],
      'status' => [
        'Active' => 'Activ',
        'Inactive' => 'Inactiv'
      ]
    ],
    'tooltips' => [
      'scheduling' => 'Notificări Crontab. Definește frecvența rulării activității.

*/5 * * * * - la fiecare 5 minute

0 */2 * * * - la fiecare 2 ore

30 1 * * * - la 01:30 o dată pe zi

0 0 1 * * - în prima zi a luni'
    ]
  ],
  'ScheduledJobLogRecord' => [
    'fields' => [
      'status' => 'Stare',
      'executionTime' => 'Timp Execuție',
      'target' => 'Țintă'
    ]
  ],
  'Settings' => [
    'fields' => [
      'useCache' => 'Folosește Cache',
      'dateFormat' => 'Format Dată',
      'timeFormat' => 'Format Oră',
      'timeZone' => 'Fus orar',
      'weekStart' => 'Prima zi a săptămânii',
      'thousandSeparator' => 'Separator mii',
      'decimalMark' => 'Marcaj zecimal',
      'defaultCurrency' => 'Valută implicită',
      'baseCurrency' => 'Valută de Bază',
      'currencyRates' => 'Valori Rate',
      'currencyList' => 'Listă valute',
      'language' => 'Limbă',
      'companyLogo' => 'Logo Companie',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorizare',
      'smtpSecurity' => 'Securitate',
      'smtpUsername' => 'Nume Utilizator',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Parolă',
      'outboundEmailFromName' => 'De la Nume',
      'outboundEmailFromAddress' => 'De la adresa',
      'outboundEmailIsShared' => 'Este Distribuit',
      'emailAddressLookupEntityTypeList' => 'Email address look-up scopes',
      'recordsPerPage' => 'Înregistrări per pagină',
      'recordsPerPageSmall' => 'Înregistrări per pagină (mic)',
      'tabList' => 'Listă filă',
      'quickCreateList' => 'Creare listă rapidă',
      'exportDelimiter' => 'Delimitator Export',
      'globalSearchEntityList' => 'Căutare Globală Listă Entitate',
      'authenticationMethod' => 'Metodă de autentificare',
      'ldapHost' => 'Gazdă',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Autorizare',
      'ldapUsername' => 'Nume Utilizator',
      'ldapPassword' => 'Parolă',
      'ldapBindRequiresDn' => 'Necesită DN',
      'ldapBaseDn' => 'Bază DN',
      'ldapAccountCanonicalForm' => 'Forma Canonică a Contului',
      'ldapAccountDomainName' => 'Nume Cont Domeniu',
      'ldapTryUsernameSplit' => 'Încercă tăierea numelui de utilizator',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Creați utilizator în EspoCRM',
      'ldapSecurity' => 'Securitate',
      'ldapUserLoginFilter' => 'Filtru Autentificare Utilizator',
      'ldapAccountDomainNameShort' => 'Nume scurt al contului domeniului',
      'ldapOptReferrals' => 'Opt Referrals',
      'ldapUserNameAttribute' => 'Atribut Nume utilizator',
      'ldapUserObjectClass' => 'Utilizator ObjectClass',
      'ldapUserTitleAttribute' => 'Atribut Titlu Utilizator',
      'ldapUserFirstNameAttribute' => 'Atribut Prenume Utilizator',
      'ldapUserLastNameAttribute' => 'Atribut Nume Utilizator',
      'ldapUserEmailAddressAttribute' => 'Atribut Adresă de Email Utilizator',
      'ldapUserTeams' => 'Echipele Utilizatorului',
      'ldapUserDefaultTeam' => 'Echipa implicită a Utilizatorului',
      'ldapUserPhoneNumberAttribute' => 'Atribut număr de telefon utilizator',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => 'Dezactivează Exportul (doar adminul este permis)',
      'assignmentNotificationsEntityList' => 'Entitățiile să fie notificate despre sarcină',
      'assignmentEmailNotifications' => 'Notificări despre sarcină',
      'assignmentEmailNotificationsEntityList' => 'Trimiteți subiecte de notificări prin e-mail',
      'streamEmailNotifications' => 'Notificări despre actualizări în Stream pentru utilizatrii interni',
      'portalStreamEmailNotifications' => 'Notificări despre actualizări în Stream pentru portal utilizatrii',
      'streamEmailNotificationsEntityList' => 'Redirecționați câmpurile de notificări prin e-mail',
      'streamEmailNotificationsTypeList' => 'What to notify about',
      'emailNotificationsDelay' => 'Delay of email notifications (in seconds)',
      'b2cMode' => 'Mod B2C',
      'avatarsDisabled' => 'Dezactivare Avatare',
      'followCreatedEntities' => 'Urmăriți înregistrările create',
      'displayListViewRecordCount' => 'Afișează Numărul Total (în vizualizarea listei)',
      'theme' => 'Temă',
      'userThemesDisabled' => 'Dezactivare Teme Utilizatori',
      'emailMessageMaxSize' => 'Mărime Max Email (Mb)',
      'massEmailMaxPerHourCount' => 'Numărul maxim de email-uri trimise pe oră',
      'personalEmailMaxPortionSize' => 'Dimensiunea max a părții email pentru contul fetching personal',
      'inboundEmailMaxPortionSize' => 'Dimensiunea max a părții email pentru contul fetching al grupului',
      'maxEmailAccountCount' => 'Numărul max al conturile personale de email, per utilizator',
      'authTokenLifetime' => 'Auth Token Lifetime (ore)',
      'authTokenMaxIdleTime' => 'Auth Token Max Idle Time (ore)',
      'dashboardLayout' => 'Aspeci Bord (implicit)',
      'siteUrl' => 'Site URL',
      'addressPreview' => 'Previzualizare Adresă',
      'addressFormat' => 'Format Adresă',
      'personNameFormat' => 'Person Name Format',
      'notificationSoundsDisabled' => 'Dezactivează Sunetele Notificărilor',
      'newNotificationCountInTitle' => 'Display new notification number in page title',
      'applicationName' => 'Nume Aplicație',
      'calendarEntityList' => 'Calendar Listă Entitate',
      'busyRangesEntityList' => 'Free/Busy Entity List',
      'mentionEmailNotifications' => 'Trimite notificări email despre mențiuni în postări',
      'massEmailDisableMandatoryOptOutLink' => 'Dezactivare link-uri obligatorii opt-out',
      'massEmailOpenTracking' => 'Email Open Tracking',
      'massEmailVerp' => 'Use VERP',
      'activitiesEntityList' => 'Activități Listă Entitate',
      'historyEntityList' => 'Istoric Listă Entitate',
      'currencyFormat' => 'Format Valută',
      'currencyDecimalPlaces' => 'Currency Decimal Places',
      'aclStrictMode' => 'Mod Strict ACL',
      'aclAllowDeleteCreated' => 'Permite ștergerea înregistrărilor create',
      'adminNotifications' => 'Notificări de sistem în panoul de administrare',
      'adminNotificationsNewVersion' => 'Afișează notificări atunci când o nouă versiune EspoCRM este disponibilă',
      'adminNotificationsNewExtensionVersion' => 'Show notification when new versions of extensions are available',
      'textFilterUseContainsForVarchar' => 'Use \'contains\' operator when filtering varchar fields',
      'authTokenPreventConcurrent' => 'Only one auth token per user',
      'scopeColorsDisabled' => 'Disable scope colors',
      'tabColorsDisabled' => 'Disable tab colors',
      'tabIconsDisabled' => 'Disable tab icons',
      'emailAddressIsOptedOutByDefault' => 'Mark new email addresses as opted-out',
      'outboundEmailBccAddress' => 'BCC address for external clients',
      'cleanupDeletedRecords' => 'Clean up deleted records',
      'addressCountryList' => 'Address Country Autocomplete List',
      'addressCityList' => 'Address City Autocomplete List',
      'addressStateList' => 'Address State Autocomplete List',
      'fiscalYearShift' => 'Fiscal Year Start',
      'jobRunInParallel' => 'Jobs Run in Parallel',
      'jobMaxPortion' => 'Jobs Max Portion',
      'jobPoolConcurrencyNumber' => 'Jobs Pool Concurrency Number',
      'daemonInterval' => 'Daemon Interval',
      'daemonMaxProcessNumber' => 'Daemon Max Process Number',
      'daemonProcessTimeout' => 'Daemon Process Timeout',
      'cronDisabled' => 'Disable Cron',
      'maintenanceMode' => 'Maintenance Mode',
      'useWebSocket' => 'Use WebSocket',
      'passwordRecoveryDisabled' => 'Disable password recovery',
      'passwordRecoveryForAdminDisabled' => 'Disable password recovery for admin users',
      'passwordRecoveryForInternalUsersDisabled' => 'Disable password recovery for internal users',
      'passwordRecoveryNoExposure' => 'Prevent email address exposure on password recovery form',
      'passwordGenerateLength' => 'Length of generated passwords',
      'passwordStrengthLength' => 'Minimum password length',
      'passwordStrengthLetterCount' => 'Number of letters required in password',
      'passwordStrengthNumberCount' => 'Number of digits required in password',
      'passwordStrengthBothCases' => 'Password must contain letters of both upper and lower case',
      'auth2FA' => 'Enable 2-Factor Authentication',
      'auth2FAForced' => 'Force regular users to set up 2FA',
      'auth2FAMethodList' => 'Available 2FA methods'
    ],
    'options' => [
      'weekStart' => [
        0 => 'Duminică',
        1 => 'Luni'
      ],
      'currencyFormat' => [
        1 => '10 USD',
        2 => '$10',
        3 => '10 $'
      ],
      'personNameFormat' => [
        'firstLast' => 'First Last',
        'lastFirst' => 'Last First',
        'firstMiddleLast' => 'First Middle Last',
        'lastFirstMiddle' => 'Last First Middle'
      ],
      'streamEmailNotificationsTypeList' => [
        'Post' => 'Posts',
        'Status' => 'Status updates',
        'EmailReceived' => 'Received emails'
      ],
      'auth2FAMethodList' => [
        'Totp' => 'TOTP'
      ]
    ],
    'tooltips' => [
      'displayListViewRecordCount' => 'A total number of records will be shown on the list view.',
      'currencyList' => 'What currencies will be available in the system.',
      'activitiesEntityList' => 'What records will be available in the Activities panel.',
      'historyEntityList' => 'What records will be available in the History panel.',
      'calendarEntityList' => 'What records will be available in the Calendar.',
      'addressStateList' => 'State suggestions for address fields.',
      'addressCityList' => 'City suggestions for address fields.',
      'addressCountryList' => 'Country suggestions for address fields.',
      'exportDisabled' => 'Users won\'t be able to export records. Only admin will be allowed.',
      'globalSearchEntityList' => 'What records can be searched with Global Search.',
      'siteUrl' => 'A URL of this EspoCRM instance. You need to change it if you move to another domain.',
      'useCache' => 'Not recommended to disable, unless for development purpose.',
      'useWebSocket' => 'WebSocket enables two-way interactive communication between a server and a browser. Requires setting up the WebSocket daemon on your server. Check the documentation for more info.',
      'passwordRecoveryForInternalUsersDisabled' => 'Only portal users will be able to recover password.',
      'passwordRecoveryNoExposure' => 'It won\'t be possible to determine whether a specific email address is registered in the system.',
      'emailAddressLookupEntityTypeList' => 'For email address autocomplete.',
      'emailNotificationsDelay' => 'A message can be edited within the specified timeframe before the notification is sent.',
      'outboundEmailFromAddress' => 'The system email address.',
      'smtpServer' => 'If empty, then Group Email Account with the corresponding email address will be used.',
      'busyRangesEntityList' => 'What will be taken into account when showing busy time ranges in scheduler & timeline.',
      'massEmailVerp' => 'Variable envelope return path. For better handling of bounced messages. Make sure that your SMTP provider supports it.',
      'recordsPerPage' => 'Numărul de înregistrări afișate inițial în vizualizarea listei.',
      'recordsPerPageSmall' => 'Numărul de înregistrări afișate inițial în panul de ralații.',
      'outboundEmailIsShared' => 'Permite utilizatorilor să trimită email-uri de pe această adresă.',
      'followCreatedEntities' => 'Utilizatorii o să urmeze automat înregistrări pe care le-au creat.',
      'emailMessageMaxSize' => 'Toate email-urile de intrare care depățesc o anumită mărime, o să fie fetched fără conținut și atașamente.',
      'authTokenLifetime' => 'Definește cât timp o să existe tokeni.
0 - nu au dată de expirare.',
      'authTokenMaxIdleTime' => 'Definește cât timp de la ultima accesare, pot să existe tokeni.
0 - nu au dată de expirare.',
      'userThemesDisabled' => 'Dacă este bifat, utilizatorii nu o să poată selecta o altă temă.',
      'ldapUsername' => 'Utilizatorul de sistem complet DN, care permite căutarea altor utilizatori. EX."CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan".',
      'ldapPassword' => 'Parola de accesare a serverului LDAP.',
      'ldapAuth' => 'Acreditările de acces pentru serverul LDAP.',
      'ldapUserNameAttribute' => 'Atributul pentru identificare utilizatorului. EX."userPrincipalName" sau "sAMAccountName" pentru Directorul Activ, "uid" pentru OpenLDAP. ',
      'ldapUserObjectClass' => 'Atributul ObjectClass pentru a căuta utilizatori. Ex. "person" pentru AD, "inetOrgPerson" pentru OpenLDAP. ',
      'ldapAccountCanonicalForm' => 'The type of your account canonical form. There are 4 options:

- \'Dn\' - the form in the format \'CN=tester,OU=espocrm,DC=test, DC=lan\'.

- \'Username\' - the form \'tester\'.

- \'Backslash\' - the form \'COMPANY\\tester\'.

- \'Principal\' - the form \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'Opțiunile pentru a formata numele utilizatorului în formatul DN.',
      'ldapBaseDn' => 'Baza DN implicită pentru a căuta utilizatori.Ex. "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'Opțiunea de a tăia numele utilizatorului cu domeniul.',
      'ldapOptReferrals' => 'dacă recomandările ar trebui urmate la clientul LDAP.',
      'ldapPortalUserLdapAuth' => 'Allow portal users to use LDAP authentication instead of Espo authentication.',
      'ldapCreateEspoUser' => 'Această opțiune permite EspoCRM să creeze un utilizator din LDAP',
      'ldapUserFirstNameAttribute' => 'Atributul LDAP care este folosit pentru a determina prenumele utilizatorului. Ex. "givenname".',
      'ldapUserLastNameAttribute' => 'Atributul LDAP care este folosit pentru a determina numele utilizatorului. Ex."sn".',
      'ldapUserTitleAttribute' => 'Atributul LDAP care este folosit pentru a determina titlul utilizatorului. Ex."title".',
      'ldapUserEmailAddressAttribute' => 'Atributul LDAP care este folosit pentru a determina adresa de email a utilizatorului. Ex."mail".',
      'ldapUserPhoneNumberAttribute' => 'Atributul LDAP care este folosit pentru a determina numărul de telefon al utilizatorului. Ex. "telephoneNumber".',
      'ldapUserLoginFilter' => 'Filtrul care permite restricționarea utilizatorilor să folosească EspoCRM. Ex. "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'Domeniul care este folosit pentru autorizarea serverului LDAP.',
      'ldapAccountDomainNameShort' => 'Domeniul scurt care este folsoit pentru autorizarea serverului LDAP.',
      'ldapUserTeams' => 'Echipe pentru crearea utilizatorului. Pentru mai multe, vezi profil utilizator.',
      'ldapUserDefaultTeam' => 'Echipa implicită pentru utilizatorul creat. Pentru mai multe detalii, consultați profilul utilizatorului.',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => 'Implicit, EspoCRM este adaptat pentru B2B. Puteți comuta la B2C.',
      'currencyDecimalPlaces' => 'Number of decimal places. If empty then all nonempty decimal places will be displayed.',
      'aclStrictMode' => 'Enabled: Access to scopes will be forbidden if it\'s not specified in roles.

Disabled: Access to scopes will be allowed if it\'s not specified in roles.',
      'aclAllowDeleteCreated' => 'Utilizatorii vor putea elimina înregistrările pe care le-au creat chiar dacă nu au acces la ștergere.',
      'textFilterUseContainsForVarchar' => 'If not checked then \'starts with\' operator is used. You can use the wildcard \'%\'.',
      'streamEmailNotificationsEntityList' => 'Email notifications about stream updates of followed records. Users will receive email notifications only for specified entity types.',
      'authTokenPreventConcurrent' => 'Users won\'t be able to be logged in on multiple devices simultaneously.',
      'emailAddressIsOptedOutByDefault' => 'When creating new record email addess will be marked as opted-out.',
      'cleanupDeletedRecords' => 'Removed records will be deleted from database after a while.',
      'jobRunInParallel' => 'Jobs will be executed in parallel processes.',
      'jobPoolConcurrencyNumber' => 'Max number of processes run simultaneously.',
      'jobMaxPortion' => 'Max number of jobs processed per one execution.',
      'daemonInterval' => 'Interval between process cron runs in seconds.',
      'daemonMaxProcessNumber' => 'Max number of cron processes run simultaneously.',
      'daemonProcessTimeout' => 'Max execution time (in seconds) allocated for a single cron process.',
      'cronDisabled' => 'Cron will not run.',
      'maintenanceMode' => 'Only administrators will have access to the system.'
    ],
    'labels' => [
      'Group Tab' => 'Group Tab',
      'System' => 'Sistem',
      'Locale' => 'Localizare',
      'Search' => 'Search',
      'Misc' => 'Misc',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configurare',
      'In-app Notifications' => 'Notificări în aplicație',
      'Email Notifications' => 'Notificări Email',
      'Currency Settings' => 'Setări Valută',
      'Currency Rates' => 'Currency Rates',
      'Mass Email' => 'Email în Masă',
      'Test Connection' => 'Conexiune Test',
      'Connecting' => 'Se conectează...',
      'Activities' => 'Activități',
      'Admin Notifications' => 'Notificări Admin',
      'Passwords' => 'Passwords',
      '2-Factor Authentication' => '2-Factor Authentication'
    ],
    'messages' => [
      'ldapTestConnection' => 'Conexiunea a fost stabilită cu succes'
    ]
  ],
  'Stream' => [
    'messages' => [
      'infoMention' => 'Type **@username** to mention user in the post.',
      'infoSyntax' => 'Available markdown syntax'
    ],
    'syntaxItems' => [
      'code' => 'code',
      'multilineCode' => 'multiline code',
      'strongText' => 'strong text',
      'emphasizedText' => 'emphasized text',
      'deletedText' => 'deleted text',
      'blockquote' => 'blockquote',
      'link' => 'link'
    ]
  ],
  'Team' => [
    'fields' => [
      'name' => 'Nume',
      'roles' => 'Roluri',
      'layoutSet' => 'Layout Set',
      'positionList' => 'Listă Poziție'
    ],
    'links' => [
      'users' => 'Utilizatori',
      'notes' => 'Note',
      'roles' => 'Roluri',
      'layoutSet' => 'Layout Set',
      'inboundEmails' => 'Grup conturi Email'
    ],
    'tooltips' => [
      'layoutSet' => 'Provides the ability to have layouts that differ from standard ones. Layout Set will be applied to users who have this team set as Default Team.',
      'roles' => 'Roluri Acces. Utilizatorii acestei echipe obțin nivel de control al accesului din rolurile selectate.',
      'positionList' => 'Poziții disponibile în această echipă. Ex. Agent de vânzări, Manager.'
    ],
    'labels' => [
      'Create Team' => 'Creare Echipă'
    ]
  ],
  'Template' => [
    'fields' => [
      'name' => 'Nume',
      'body' => 'Body',
      'entityType' => 'Tip Entitate',
      'header' => 'Header',
      'footer' => 'Foorter',
      'leftMargin' => 'Marginea Stângă',
      'topMargin' => 'Marginea de Sus',
      'rightMargin' => 'Marginea Dreaptă',
      'bottomMargin' => 'Marginea de Jos',
      'printFooter' => 'Imprimare Footer',
      'printHeader' => 'Print Header on each page',
      'footerPosition' => 'Poziție Footer',
      'headerPosition' => 'Header Position',
      'variables' => 'Substituenți disponibili',
      'pageOrientation' => 'Page Orientation',
      'pageFormat' => 'Paper Format',
      'pageWidth' => 'Page Width (mm)',
      'pageHeight' => 'Page Height (mm)',
      'fontFace' => 'Font'
    ],
    'links' => [],
    'labels' => [
      'Create Template' => 'Creați Șablon'
    ],
    'options' => [
      'pageOrientation' => [
        'Portrait' => 'Portrait',
        'Landscape' => 'Landscape'
      ],
      'pageFormat' => [
        'Custom' => 'Custom'
      ],
      'placeholders' => [
        'pagebreak' => 'Page break',
        'today' => 'Today (date)',
        'now' => 'Now (date-time)'
      ],
      'fontFace' => [
        'aealarabiya' => 'AlArabiya',
        'aefurat' => 'Aefurat',
        'cid0cs' => 'CID-0 cs',
        'cid0ct' => 'CID-0 ct',
        'cid0jp' => 'CID-0 jp',
        'cid0kr' => 'CID-0 kr',
        'courier' => 'Courier',
        'dejavusans' => 'DejaVu Sans',
        'dejavusanscondensed' => 'DejaVu Sans Condensed',
        'dejavusansextralight' => 'DejaVu Sans ExtraLight',
        'dejavusansmono' => 'DejaVu Sans Mono',
        'dejavuserif' => 'DejaVu Serif',
        'dejavuserifcondensed' => 'DejaVu Serif Condensed',
        'freemono' => 'FreeMono',
        'freesans' => 'FreeSans',
        'freeserif' => 'FreeSerif',
        'helvetica' => 'Helvetica',
        'hysmyeongjostdmedium' => 'Hysmyeongjostd Medium',
        'kozgopromedium' => 'Kozgo Pro Medium',
        'kozminproregular' => 'Kozmin Pro Regular',
        'msungstdlight' => 'Msung Std Light',
        'pdfacourier' => 'PDFA Courier',
        'pdfahelvetica' => 'PDFA Helvetica',
        'pdfasymbol' => 'PDFA Symbol',
        'pdfatimes' => 'PDFA Times',
        'stsongstdlight' => 'STSong Std Light',
        'symbol' => 'Symbol',
        'times' => 'Times'
      ]
    ],
    'tooltips' => [
      'footer' => 'Folosiți {pageNumber} pentru a imprima numărul paginii.',
      'variables' => 'Copiere-lipire are nevoie de substituenți pentru Haeder, Body și Footer.'
    ]
  ],
  'User' => [
    'fields' => [
      'name' => 'Nume',
      'userName' => 'Nume Utilizator',
      'title' => 'Titlu',
      'type' => 'Type',
      'isAdmin' => 'Este Admin',
      'defaultTeam' => 'Echipă Inițială',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Telefon',
      'roles' => 'Roluri',
      'portals' => 'Portaluri',
      'portalRoles' => 'Roluri Portal',
      'teamRole' => 'Poziție',
      'password' => 'Parola',
      'currentPassword' => 'Parolă Actuală',
      'passwordConfirm' => 'Confirmare Parolă',
      'newPassword' => 'Parolă Nouă',
      'newPasswordConfirm' => 'Confirmare Parolă Nouă',
      'yourPassword' => 'Your current password',
      'avatar' => 'Avatar',
      'isActive' => 'Este Activ',
      'isPortalUser' => 'Este Utilizator Portal',
      'contact' => 'Contact',
      'accounts' => 'Conturi',
      'account' => 'Cont (Principal)',
      'sendAccessInfo' => 'Trimite Email cu Informații de Acces către Utilizator',
      'portal' => 'Portal',
      'gender' => 'Sex',
      'position' => 'Poziția în Echipă',
      'ipAddress' => 'IP Adresă',
      'passwordPreview' => 'Previzualizare Parolă',
      'isSuperAdmin' => 'Este Super Admin',
      'lastAccess' => 'Last Access',
      'apiKey' => 'API Key',
      'secretKey' => 'Secret Key',
      'dashboardTemplate' => 'Dashboard Template',
      'auth2FA' => '2FA',
      'authMethod' => 'Authentication Method',
      'auth2FAEnable' => 'Enable 2-Factor Authentication',
      'auth2FAMethod' => '2FA Method',
      'auth2FATotpSecret' => '2FA TOTP Secret',
      'acceptanceStatus' => 'Stare Acceptare',
      'acceptanceStatusMeetings' => 'Stare Acceptare (Întâlniri)',
      'acceptanceStatusCalls' => 'Stare Acceptare (Apeluri)'
    ],
    'links' => [
      'defaultTeam' => 'Default Team',
      'teams' => 'Echipe',
      'roles' => 'Roluri',
      'notes' => 'Note',
      'portals' => 'Portaluri',
      'portalRoles' => 'Roluri Portaluri',
      'contact' => 'Contact',
      'accounts' => 'Conturi',
      'account' => 'Cont (Principal)',
      'tasks' => 'Sarcini',
      'userData' => 'User Data',
      'dashboardTemplate' => 'Dashboard Template',
      'targetLists' => 'Liste Țintă'
    ],
    'labels' => [
      'Create User' => 'Creare Utilizator',
      'Generate' => 'Generare',
      'Access' => 'Acces',
      'Preferences' => 'Preferințe',
      'Change Password' => 'Schimbare Parolă',
      'Teams and Access Control' => 'Echipe și Acces Control',
      'Forgot Password?' => 'Ai uitat Parola?',
      'Password Change Request' => 'Cerere Schimbare Parolă',
      'Email Address' => 'Adresă Email',
      'External Accounts' => 'Conturi Externe',
      'Email Accounts' => 'Conturi Email',
      'Portal' => 'Portal',
      'Create Portal User' => 'Creați Utilizator Portal',
      'Proceed w/o Contact' => 'Continuă fără Contact',
      'Generate New API Key' => 'Generate New API Key',
      'Generate New Password' => 'Generate New Password',
      'Code' => 'Code',
      'Back to login form' => 'Back to login form',
      'Requirements' => 'Requirements',
      'Security' => 'Security',
      'Reset 2FA' => 'Reset 2FA',
      'Secret' => 'Secret'
    ],
    'tooltips' => [
      'defaultTeam' => 'Toate înregistrările create de acest utilizator vor fi legate de această echipă în mod implicit.',
      'userName' => 'Scrisorile a-z, numerele 0-9, puncte, cratime, @ și underscores sunt permise.',
      'isAdmin' => 'Utilizatorii admin au acces la tot.',
      'isActive' => 'Dacă nu este bifat, utilizatorul nu o să se poată autentifica.',
      'teams' => 'Echipele din care face parte acest utilizator. Nivelul de control al accesului este moștenit din rolurile echipei.',
      'roles' => 'Roluri suplimentare de acces. Utilizați-l dacă utilizatorul nu aparține nici unei echipe sau trebuie să extindeți nivelul de control al accesului exclusiv pentru acest utilizator.',
      'portalRoles' => 'Roluri suplimentare de portal. Utilizați-l pentru a extinde nivelul de control al accesului exclusiv pentru acest utilizator.',
      'portals' => 'Portalurile la care are acces acest utilizator.'
    ],
    'messages' => [
      'passwordRecoverySentIfMatched' => 'Assuming the entered data matched any user account.',
      'passwordStrengthLength' => 'Must be at least {length} characters long.',
      'passwordStrengthLetterCount' => 'Must contain at least {count} letter(s).',
      'passwordStrengthNumberCount' => 'Must contain at least {count} digit(s).',
      'passwordStrengthBothCases' => 'Must contain letters of both upper and lower case.',
      'passwordWillBeSent' => 'Parola va fi trimisă în email-ul utilizatorului.',
      'passwordChanged' => 'Parola a fost schimbată',
      'userCantBeEmpty' => 'Numele de utilizator nu poate fi necompletat',
      'wrongUsernamePasword' => 'Nume utilizator/parolă greșit(e).',
      'emailAddressCantBeEmpty' => 'Adresa de Email nu poate fi necompletată',
      'userNameEmailAddressNotFound' => 'Nume utilizator/Adresă de email nu a(u) fost găsi(e)',
      'forbidden' => 'Înterzis, încercați mai târziu',
      'uniqueLinkHasBeenSent' => 'URL-ul unic a fost trimis la adresa de email specificată.',
      'passwordChangedByRequest' => 'Parola a fost schimbată.',
      'setupSmtpBefore' => 'You need to setup [SMTP settings]({url}) to make the system be able to send password in email.',
      'userNameExists' => 'Acest nume de utilizator există deja',
      'wrongCode' => 'Wrong code',
      'codeIsRequired' => 'Code is required',
      'enterTotpCode' => 'Enter a code from your authenticator app.',
      'verifyTotpCode' => 'Scan the QR-code with your mobile authenticator app. If you have a trouble with scanning, you can enter the secret manually. After that you will see a 6-digit code in your application. Enter this code in the field below.',
      'generateAndSendNewPassword' => 'A new password will be generated and sent to the user\'s email address.',
      'security2FaResetConfimation' => 'Are you sure you want to reset the current 2FA settings?',
      'auth2FARequiredHeader' => '2 factor authentication required',
      'auth2FARequired' => 'You need to set up 2 factor authentication. Use an authenticator application on your mobile phone (e.g. Google Authenticator).',
      'ldapUserInEspoNotFound' => 'User is not found in EspoCRM. Contact your administrator to create the user.'
    ],
    'options' => [
      'gender' => [
        '' => 'Nu este setat',
        'Male' => 'Masculin',
        'Female' => 'Feminin',
        'Neutral' => 'Neutru'
      ],
      'type' => [
        'regular' => 'Regular',
        'admin' => 'Admin',
        'portal' => 'Portal',
        'system' => 'System',
        'super-admin' => 'Super-Admin',
        'api' => 'API'
      ],
      'authMethod' => [
        'ApiKey' => 'API Key',
        'Hmac' => 'HMAC'
      ]
    ],
    'boolFilters' => [
      'onlyMyTeam' => 'Doar în Echipa Mea'
    ],
    'presetFilters' => [
      'active' => 'Activ',
      'activePortal' => 'Portal Activ',
      'activeApi' => 'API Active'
    ]
  ],
  'Webhook' => [
    'labels' => [
      'Create Webhook' => 'Create Webhook'
    ],
    'fields' => [
      'event' => 'Event',
      'url' => 'URL',
      'isActive' => 'Is Active',
      'user' => 'API User',
      'entityType' => 'Entity Type',
      'field' => 'Field',
      'secretKey' => 'Secret Key'
    ],
    'links' => [
      'user' => 'User'
    ]
  ],
  'Account' => [
    'fields' => [
      'name' => 'Nume',
      'emailAddress' => 'Email',
      'website' => 'Site Web',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Adresa de Facturare',
      'shippingAddress' => 'Adresa de Transport',
      'description' => 'Descriere',
      'sicCode' => 'Cod Sic',
      'industry' => 'Industrie',
      'type' => 'Tip',
      'contactRole' => 'Rol',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
      'originalLead' => 'Original Lead'
    ],
    'links' => [
      'contacts' => 'Contacte',
      'opportunities' => 'Oportunitati',
      'cases' => 'Cazuri',
      'documents' => 'Documents',
      'meetingsPrimary' => 'Meetings (expanded)',
      'callsPrimary' => 'Calls (expanded)',
      'tasksPrimary' => 'Tasks (expanded)',
      'emailsPrimary' => 'Emails (expanded)',
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
      'campaign' => 'Campaign',
      'portalUsers' => 'Portal Users',
      'originalLead' => 'Original Lead'
    ],
    'options' => [
      'type' => [
        'Customer' => 'Client',
        'Investor' => 'Investitor',
        'Partner' => 'Partener',
        'Reseller' => 'Reseller'
      ],
      'industry' => [
        'Aerospace' => 'Aerospace',
        'Agriculture' => 'Agriculture',
        'Advertising' => 'Advertising',
        'Apparel & Accessories' => 'Apparel & Accessories',
        'Architecture' => 'Architecture',
        'Automotive' => 'Automotive',
        'Banking' => 'Banking',
        'Biotechnology' => 'Biotechnology',
        'Building Materials & Equipment' => 'Building Materials & Equipment',
        'Chemical' => 'Chemical',
        'Construction' => 'Construction',
        'Computer' => 'Computer',
        'Defense' => 'Defense',
        'Creative' => 'Creative',
        'Culture' => 'Culture',
        'Consulting' => 'Consulting',
        'Education' => 'Educatie',
        'Electronics' => 'Electronice',
        'Electric Power' => 'Electric Power',
        'Energy' => 'Energy',
        'Entertainment & Leisure' => 'Entertainment & Leisure',
        'Finance' => 'Finante',
        'Food & Beverage' => 'Food & Beverage',
        'Grocery' => 'Grocery',
        'Hospitality' => 'Hospitality',
        'Healthcare' => 'Healthcare',
        'Insurance' => 'Asigurari',
        'Legal' => 'Legal',
        'Manufacturing' => 'Manufacturing',
        'Mass Media' => 'Mass Media',
        'Mining' => 'Mining',
        'Music' => 'Music',
        'Marketing' => 'Marketing',
        'Publishing' => 'Publishing',
        'Petroleum' => 'Petroleum',
        'Real Estate' => 'Real Estate',
        'Retail' => 'Retail',
        'Shipping' => 'Shipping',
        'Service' => 'Service',
        'Support' => 'Support',
        'Sports' => 'Sports',
        'Software' => 'Software',
        'Technology' => 'Tehnologie',
        'Telecommunications' => 'Telecomunicații',
        'Television' => 'Televiziune',
        'Testing, Inspection & Certification' => 'Testare, Inspecție & Certificări',
        'Transportation' => 'Transport',
        'Travel' => 'Călătorit',
        'Venture Capital' => 'Capital de risc',
        'Wholesale' => 'Angro',
        'Water' => 'Apă'
      ]
    ],
    'labels' => [
      'Create Account' => 'Creare cont',
      'Copy Billing' => 'Copiați facturarea',
      'Set Primary' => 'Setați primar'
    ],
    'presetFilters' => [
      'customers' => 'Clienți',
      'partners' => 'Parteneri',
      'recentlyCreated' => 'Create recent'
    ]
  ],
  'Calendar' => [
    'modes' => [
      'month' => 'Lună',
      'week' => 'Săptămână',
      'day' => 'Zi',
      'agendaWeek' => 'Săptămână',
      'agendaDay' => 'Zi',
      'timeline' => 'Cronologie'
    ],
    'labels' => [
      'Today' => 'Astăzi',
      'Create' => 'Crează',
      'Shared' => 'Partajat',
      'Add User' => 'Adăugare utilizator',
      'current' => 'actual',
      'time' => 'timp',
      'User List' => 'Listă Utiliziator',
      'Manage Users' => 'Gestionare Utilizatori',
      'View Calendar' => 'Vizualizare Calendar',
      'Create Shared View' => 'Create Shared View'
    ]
  ],
  'Call' => [
    'fields' => [
      'name' => 'Nume',
      'parent' => 'Părinte',
      'status' => 'Stare',
      'dateStart' => 'Dată început',
      'dateEnd' => 'Dată terminare',
      'direction' => 'Direcție',
      'duration' => 'Durată',
      'description' => 'Descriere',
      'users' => 'Utilizatori',
      'contacts' => 'Contacte',
      'leads' => 'Lead-uri',
      'reminders' => 'Mementouri',
      'account' => 'Cont',
      'acceptanceStatus' => 'Starea de acceptare'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Planificat',
        'Held' => 'Reținut',
        'Not Held' => 'Nereșinut'
      ],
      'direction' => [
        'Outbound' => 'Ieșire',
        'Inbound' => 'Intrare'
      ],
      'acceptanceStatus' => [
        'None' => 'Nici unul',
        'Accepted' => 'Acceptat',
        'Declined' => 'Respins',
        'Tentative' => 'Tentativă'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Setează ca reținut',
      'setNotHeld' => 'Setează ca nereținut'
    ],
    'labels' => [
      'Create Call' => 'Creare Apelare',
      'Set Held' => 'Setează ca reținut',
      'Set Not Held' => 'Setează ca nereținut',
      'Send Invitations' => 'Trimite invitații'
    ],
    'presetFilters' => [
      'planned' => 'Planificat',
      'held' => 'Reținut',
      'todays' => 'Azi'
    ]
  ],
  'Campaign' => [
    'fields' => [
      'name' => 'Nume',
      'description' => 'Descriere',
      'status' => 'Stare',
      'type' => 'Tip',
      'startDate' => 'Dată începere',
      'endDate' => 'Dată terminare',
      'targetLists' => 'Liste țintă',
      'excludingTargetLists' => 'Excluderea listelor țintă',
      'sentCount' => 'Trimis',
      'openedCount' => 'Deschis',
      'clickedCount' => 'Apăsat',
      'optedOutCount' => 'Ales să nu',
      'bouncedCount' => 'Bounced',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Hard Bounced',
      'softBouncedCount' => 'Soft Bounced',
      'leadCreatedCount' => 'Leads Created',
      'revenue' => 'Venituri',
      'revenueConverted' => 'Venituri (convertit)',
      'budget' => 'Buget',
      'budgetConverted' => 'Buget (convertit)',
      'budgetCurrency' => 'Budget Currency',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address'
    ],
    'links' => [
      'targetLists' => 'Liste Țintă',
      'excludingTargetLists' => 'Excluderea listelor țintă',
      'accounts' => 'Conturi',
      'contacts' => 'Contacte',
      'leads' => 'Lead-uri',
      'opportunities' => 'Oportunități',
      'campaignLogRecords' => 'Jurnal',
      'massEmails' => 'Email-uri în Masă',
      'trackingUrls' => 'Urmărire URL-uri',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template'
    ],
    'options' => [
      'type' => [
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Televiziune',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Mail'
      ],
      'status' => [
        'Planning' => 'Planificare',
        'Active' => 'Activ',
        'Inactive' => 'Inactiv',
        'Complete' => 'Complet'
      ]
    ],
    'labels' => [
      'Create Campaign' => 'Crează Campanie',
      'Target Lists' => 'Liste Țintă',
      'Statistics' => 'Statistici',
      'hard' => 'tare',
      'soft' => 'ușor',
      'Unsubscribe' => 'Dezabonare',
      'Mass Emails' => 'Email-uri în Masă',
      'Email Templates' => 'Șabloane Email',
      'Unsubscribe again' => 'Dezabonare încă o dată',
      'Subscribe again' => 'Abonare încă o dată',
      'Create Target List' => 'Creați Listă Țintă',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF'
    ],
    'presetFilters' => [
      'active' => 'Activ'
    ],
    'messages' => [
      'unsubscribed' => 'V-ați dezabonat din lista noastră de mail-uri',
      'subscribedAgain' => 'V-ați abonat încă o dată.'
    ],
    'tooltips' => [
      'targetLists' => 'Țintele care ar trebui să primească mesaje.',
      'excludingTargetLists' => 'Țintele care nu ar trebui să primească mesaje.'
    ]
  ],
  'CampaignLogRecord' => [
    'fields' => [
      'action' => 'Acțiune',
      'actionDate' => 'Dată',
      'data' => 'Date',
      'campaign' => 'Campanie',
      'parent' => 'Țintă',
      'object' => 'Obiect',
      'application' => 'Aplicație',
      'queueItem' => 'Elementul de așteptare',
      'stringData' => 'Șir Date',
      'stringAdditionalData' => 'Șir de Date Adiționale',
      'isTest' => 'Este Test'
    ],
    'links' => [
      'queueItem' => 'Elementul de așteptare',
      'parent' => 'Părinte',
      'object' => 'Obiect',
      'campaign' => 'Campanie'
    ],
    'options' => [
      'action' => [
        'Sent' => 'Trimis',
        'Opened' => 'Deschis',
        'Opted Out' => 'Ales să nu',
        'Bounced' => 'Bounced',
        'Clicked' => 'Apăsat',
        'Lead Created' => 'Lead-ul a fost creat',
        'Opted In' => 'Opted In'
      ]
    ],
    'labels' => [
      'All' => 'Tot'
    ],
    'presetFilters' => [
      'sent' => 'Trimis',
      'opened' => 'Deschis',
      'optedOut' => 'Ales să nu',
      'optedIn' => 'Opted In',
      'bounced' => 'Bounced',
      'clicked' => 'Apăsat',
      'leadCreated' => 'Lead-ul a fost creat'
    ]
  ],
  'CampaignTrackingUrl' => [
    'fields' => [
      'url' => 'URL',
      'action' => 'Action',
      'urlToUse' => 'Cod pentru inserare, în locul URL',
      'message' => 'Message',
      'campaign' => 'Campanie'
    ],
    'links' => [
      'campaign' => 'Campanie'
    ],
    'labels' => [
      'Create CampaignTrackingUrl' => 'Creați Urmărire URL'
    ],
    'options' => [
      'action' => [
        'Redirect' => 'Redirect',
        'Show Message' => 'Show Message'
      ]
    ],
    'tooltips' => [
      'url' => 'The recipient will be redirected to this location after they follow the link.',
      'message' => 'The message will be shown to the recipient after they follow the link. Markdown is supported.'
    ]
  ],
  'Case' => [
    'fields' => [
      'name' => 'Nume',
      'number' => 'Număr',
      'status' => 'Stare',
      'account' => 'Cont',
      'contact' => 'Contact',
      'contacts' => 'Contacte',
      'priority' => 'Prioritate',
      'type' => 'Tip',
      'description' => 'Descriere',
      'inboundEmail' => 'Grup Cont Email',
      'lead' => 'Lead',
      'attachments' => 'Atașamente'
    ],
    'links' => [
      'inboundEmail' => 'Grup Cont Email',
      'account' => 'Cont',
      'contact' => 'Contact (Principal)',
      'Contacts' => 'Contacte',
      'meetings' => 'Întâlniri',
      'calls' => 'Apeluri',
      'tasks' => 'Sarcini',
      'emails' => 'Email-uri',
      'articles' => 'Articole Bază de Cunoștință',
      'lead' => 'Lead',
      'attachments' => 'Atașamente'
    ],
    'options' => [
      'status' => [
        'New' => 'Nou',
        'Assigned' => 'Alocat',
        'Pending' => 'În așteptare',
        'Closed' => 'Închis',
        'Rejected' => 'Respins',
        'Duplicate' => 'Duplicat'
      ],
      'priority' => [
        'Low' => 'Scăzut',
        'Normal' => 'Normal',
        'High' => 'Înalt',
        'Urgent' => 'Urgent'
      ],
      'type' => [
        'Question' => 'Întrebare',
        'Incident' => 'Incident',
        'Problem' => 'Problemă'
      ]
    ],
    'labels' => [
      'Create Case' => 'Creare Caz',
      'Close' => 'Închis',
      'Reject' => 'Respins',
      'Closed' => 'Închis',
      'Rejected' => 'Respins'
    ],
    'presetFilters' => [
      'open' => 'Deschis',
      'closed' => 'Închis'
    ]
  ],
  'Contact' => [
    'fields' => [
      'name' => 'Nume',
      'emailAddress' => 'Email',
      'title' => 'Account Title',
      'account' => 'Cont',
      'accounts' => 'Conturi',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Tip cont',
      'doNotCall' => 'Nu sunați',
      'address' => 'Adresă',
      'opportunityRole' => 'Rol Oportunitate',
      'accountRole' => 'Rol',
      'description' => 'Descriere',
      'campaign' => 'Campanie',
      'targetLists' => 'Liste Țintă',
      'targetList' => 'Listă țintă',
      'portalUser' => 'Utilizator Portal',
      'hasPortalUser' => 'Has Portal User',
      'originalLead' => 'Lead Original',
      'acceptanceStatus' => 'Stare Acceptare',
      'accountIsInactive' => 'Cont Inactiv',
      'acceptanceStatusMeetings' => 'Stare Acceptare (Întâlniri)',
      'acceptanceStatusCalls' => 'Stare Acceptare (Apeluri)'
    ],
    'links' => [
      'opportunities' => 'Oportunități',
      'cases' => 'Cazuri',
      'targetLists' => 'Liste Țintă',
      'campaignLogRecords' => 'Jurnal Campanie',
      'campaign' => 'Campanie',
      'account' => 'Cont (Principal)',
      'accounts' => 'Conturi',
      'casesPrimary' => 'Cazuri (Principal)',
      'tasksPrimary' => 'Sarcini (extins)',
      'opportunitiesPrimary' => 'Opportunities (Primary)',
      'portalUser' => 'Utilizator Portal',
      'originalLead' => 'Lead Original',
      'documents' => 'Documente'
    ],
    'labels' => [
      'Create Contact' => 'Creare Contact'
    ],
    'options' => [
      'opportunityRole' => [
        '' => '',
        'Decision Maker' => 'Factor de decizie',
        'Evaluator' => 'Evaluator',
        'Influencer' => 'Influencer'
      ]
    ],
    'presetFilters' => [
      'portalUsers' => 'Utilizatori Portal',
      'notPortalUsers' => 'Nu sunt Utilizatori ai Portalului',
      'accountActive' => 'Activ'
    ]
  ],
  'Document' => [
    'labels' => [
      'Create Document' => 'Creați Document',
      'Details' => 'Detalii'
    ],
    'fields' => [
      'name' => 'Nume',
      'status' => 'Stare',
      'file' => 'Fișier',
      'type' => 'Tip',
      'publishDate' => 'Publică Dată',
      'expirationDate' => 'Data expirării',
      'description' => 'Descriere',
      'accounts' => 'Conturi',
      'folder' => 'Dosar'
    ],
    'links' => [
      'accounts' => 'Conturi',
      'opportunities' => 'Oportunități',
      'folder' => 'Dosar',
      'leads' => 'Lead-uri',
      'contacts' => 'Contacte'
    ],
    'options' => [
      'status' => [
        'Active' => 'Activ',
        'Draft' => 'Schiță',
        'Expired' => 'Expirat',
        'Canceled' => 'Anulat'
      ],
      'type' => [
        '' => 'Nici unul',
        'Contract' => 'Contract',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Acord de licențiere'
      ]
    ],
    'presetFilters' => [
      'active' => 'Activ',
      'draft' => 'Schiță'
    ]
  ],
  'DocumentFolder' => [
    'labels' => [
      'Create DocumentFolder' => 'Creați Dosarul Documentului',
      'Manage Categories' => 'Gestionare Dosare',
      'Documents' => 'Documente'
    ],
    'links' => [
      'documents' => 'Documente'
    ]
  ],
  'EmailQueueItem' => [
    'fields' => [
      'name' => 'Nume',
      'status' => 'Stare',
      'target' => 'Țintă',
      'sentAt' => 'Dată Trimitere',
      'attemptCount' => 'Încercări',
      'emailAddress' => 'Adresă Email',
      'massEmail' => 'Email în Masă',
      'isTest' => 'Este test'
    ],
    'links' => [
      'target' => 'Țintă',
      'massEmail' => 'Email în Masă'
    ],
    'options' => [
      'status' => [
        'Pending' => 'În așteptare',
        'Sent' => 'Trimis',
        'Failed' => 'Eșuat',
        'Sending' => 'Se trimite'
      ]
    ],
    'presetFilters' => [
      'pending' => 'În așteptare',
      'sent' => 'Trimis',
      'failed' => 'Eșuat'
    ]
  ],
  'KnowledgeBaseArticle' => [
    'labels' => [
      'Create KnowledgeBaseArticle' => 'Creați Articol',
      'Any' => 'Oricare',
      'Send in Email' => 'Trimite în Email',
      'Move Up' => 'Mută Sus',
      'Move Down' => 'Mută Jos',
      'Move to Top' => 'Mută la Început',
      'Move to Bottom' => 'Mută la Sfârșit'
    ],
    'fields' => [
      'name' => 'Nume',
      'status' => 'Stare',
      'type' => 'Tip',
      'attachments' => 'Atașamente',
      'publishDate' => 'Publică Dată',
      'expirationDate' => 'Data Expirării',
      'description' => 'Descriere',
      'body' => 'Conținut',
      'categories' => 'Categorii',
      'language' => 'Limbă',
      'portals' => 'Portaluri'
    ],
    'links' => [
      'cases' => 'Cazuri',
      'opportunities' => 'Oportunități',
      'categories' => 'Ctegorii',
      'portals' => 'Portaluri'
    ],
    'options' => [
      'status' => [
        'In Review' => 'În revizuire',
        'Draft' => 'Schiță',
        'Archived' => 'Arhivat',
        'Published' => 'Publicat'
      ],
      'type' => [
        'Article' => 'Articol'
      ]
    ],
    'tooltips' => [
      'portals' => 'Articolul o să fie disponibil doar în portalurile specificate.'
    ],
    'presetFilters' => [
      'published' => 'Publicat'
    ]
  ],
  'KnowledgeBaseCategory' => [
    'labels' => [
      'Create KnowledgeBaseCategory' => 'Creați Categorie',
      'Manage Categories' => 'Gestionare Categorii',
      'Articles' => 'Articole'
    ],
    'links' => [
      'articles' => 'Articole'
    ]
  ],
  'Lead' => [
    'labels' => [
      'Converted To' => 'Convertit la',
      'Create Lead' => 'Creare Lead',
      'Convert' => 'Convertește',
      'convert' => 'convertește'
    ],
    'fields' => [
      'name' => 'Nume',
      'emailAddress' => 'Email',
      'title' => 'Titlu',
      'website' => 'Site Web',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Nume Cont',
      'doNotCall' => 'Nu sunați',
      'address' => 'Adresa',
      'status' => 'Stare',
      'source' => 'Sursa',
      'opportunityAmount' => 'Sumă Oportunitate',
      'opportunityAmountConverted' => 'Sumă Oportunitate (convertită)',
      'description' => 'Descriere',
      'createdAccount' => 'Cont',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Oportunitate',
      'convertedAt' => 'Converted At',
      'campaign' => 'Campanie',
      'targetLists' => 'Liste Țintă',
      'targetList' => 'Listă Țintă',
      'industry' => 'Industrie',
      'acceptanceStatus' => 'Stare Acceptare',
      'opportunityAmountCurrency' => 'Valută Sumă Oportunitate',
      'acceptanceStatusMeetings' => 'Stare Acceptare (Întâlniri)',
      'acceptanceStatusCalls' => 'Stare Acceptare (Apeluri)'
    ],
    'links' => [
      'targetLists' => 'Liste Țintă',
      'campaignLogRecords' => 'Jurnal Campanie',
      'campaign' => 'Campanie',
      'createdAccount' => 'Cont',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Oportunitate',
      'cases' => 'Cazuri',
      'documents' => 'Documente'
    ],
    'options' => [
      'status' => [
        'New' => 'Nou',
        'Assigned' => 'Atribuit',
        'In Process' => 'În Proces',
        'Converted' => 'Convertit',
        'Recycled' => 'Reciclat',
        'Dead' => 'Inactiv'
      ],
      'source' => [
        '' => 'Nici unul',
        'Call' => 'Apel',
        'Email' => 'Email',
        'Existing Customer' => 'Client Existent',
        'Partner' => 'Partener',
        'Public Relations' => 'Relații Publice',
        'Web Site' => 'Site Web',
        'Campaign' => 'Campanie',
        'Other' => 'Altele'
      ]
    ],
    'presetFilters' => [
      'active' => 'Activ',
      'actual' => 'Actual',
      'converted' => 'Convertit'
    ]
  ],
  'MassEmail' => [
    'fields' => [
      'name' => 'Nume',
      'status' => 'Stare',
      'storeSentEmails' => 'Stocați email-urile trimise',
      'startAt' => 'Data Începerii',
      'fromAddress' => 'Din Adresă',
      'fromName' => 'Din Nume',
      'replyToAddress' => 'Răspundeți la Adresă',
      'replyToName' => 'Răspundeți la Nume',
      'campaign' => 'Campanie',
      'emailTemplate' => 'Șablon Email',
      'inboundEmail' => 'Cont Email',
      'targetLists' => 'Liste Țintă',
      'excludingTargetLists' => 'Excluderea listelor țintă',
      'optOutEntirely' => 'Opt-Out Entirely',
      'smtpAccount' => 'Cont SMTP'
    ],
    'links' => [
      'targetLists' => 'Liste Țintă',
      'excludingTargetLists' => 'Excluderea listelor țintă',
      'queueItems' => 'Elemente de Așteptare',
      'campaign' => 'Campanie',
      'emailTemplate' => 'Șablon Email',
      'inboundEmail' => 'Cont Email'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Schiță',
        'Pending' => 'În așteptare',
        'In Process' => 'În proces',
        'Complete' => 'Terminat',
        'Canceled' => 'Anulat',
        'Failed' => 'Eșuat'
      ]
    ],
    'labels' => [
      'Create MassEmail' => 'Creați Email în Masă',
      'Send Test' => 'Trimite Test',
      'System SMTP' => 'Sistem SMTP',
      'system' => 'sistem',
      'group' => 'grup'
    ],
    'messages' => [
      'selectAtLeastOneTarget' => 'Selectați cel puțin o țintă.',
      'testSent' => 'Email(uri) test care ar trebui să fie trimise'
    ],
    'tooltips' => [
      'optOutEntirely' => 'Adresele de email ale destinatarilor care s-au dezabonat, vor fi marcate ca fiind oprite și nu vor mai primi email-uri în masă ',
      'targetLists' => 'Țintele care ar trebui să primească mesaje.',
      'excludingTargetLists' => 'Țintele care nu ar trebui să primească mesaje.',
      'storeSentEmails' => 'Email-urile o să fie stocate în CRM.'
    ],
    'presetFilters' => [
      'actual' => 'Actual',
      'complete' => 'Terminat'
    ]
  ],
  'Meeting' => [
    'fields' => [
      'name' => 'Nume',
      'parent' => 'Părinte',
      'status' => 'Stare',
      'dateStart' => 'Dată Început',
      'dateEnd' => 'Dată Terminare',
      'duration' => 'Durată',
      'description' => 'Descriere',
      'users' => 'Utilizatori',
      'contacts' => 'Contacte',
      'leads' => 'Lead-uri',
      'reminders' => 'Mementouri',
      'account' => 'Cont',
      'acceptanceStatus' => 'Stare Acceptare',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'isAllDay' => 'Is All-Day',
      'Acceptance' => 'Acceptance'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Planificat',
        'Held' => 'Reținut',
        'Not Held' => 'Nereținut'
      ],
      'acceptanceStatus' => [
        'None' => 'Nici unul',
        'Accepted' => 'Acceptat',
        'Declined' => 'Respins',
        'Tentative' => 'Tentativă'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Setat ca reținut',
      'setNotHeld' => 'Setat ca nereținut'
    ],
    'labels' => [
      'Create Meeting' => 'Creare Întâlnire',
      'Set Held' => 'Setat ca reținut',
      'Set Not Held' => 'Setat ca nereținut',
      'Send Invitations' => 'Trimite Invitații',
      'on time' => 'la timp',
      'before' => 'înainte',
      'All-Day' => 'All-Day'
    ],
    'presetFilters' => [
      'planned' => 'Planificat',
      'held' => 'Reținut',
      'todays' => 'Astăzi'
    ],
    'messages' => [
      'selectAcceptanceStatus' => 'Set your acceptance status.',
      'nothingHasBeenSent' => 'Nu a fost trimis nimic'
    ]
  ],
  'Opportunity' => [
    'fields' => [
      'name' => 'Nume',
      'account' => 'Cont',
      'stage' => 'Stadiu',
      'amount' => 'Sumă',
      'probability' => 'Probabilitate, %',
      'leadSource' => 'Sursă Lead',
      'doNotCall' => 'Nu sunați',
      'closeDate' => 'Data Închiderii',
      'contacts' => 'Contacte',
      'contact' => 'Contact (Primary)',
      'description' => 'Descriere',
      'amountConverted' => 'Sumă (convertit)',
      'amountWeightedConverted' => 'Suma ponderată',
      'campaign' => 'Campanie',
      'originalLead' => 'Lead Original',
      'amountCurrency' => 'Sumă Valută',
      'contactRole' => 'Rol Contact',
      'lastStage' => 'Last Stage'
    ],
    'links' => [
      'contacts' => 'Contacte',
      'contact' => 'Contact (Primary)',
      'documents' => 'Documente',
      'campaign' => 'Campanie',
      'originalLead' => 'Lead Original'
    ],
    'options' => [
      'stage' => [
        'Prospecting' => 'Prospectare',
        'Qualification' => 'Calificări',
        'Proposal' => 'Propunere',
        'Negotiation' => 'Negociere',
        'Needs Analysis' => 'Necesită Analiză',
        'Value Proposition' => 'Propunere Valoare',
        'Id. Decision Makers' => 'Id. Factori de Decizie',
        'Perception Analysis' => 'Analiză Percepției',
        'Proposal/Price Quote' => 'Propunere/Preț Ofertă',
        'Negotiation/Review' => 'Negociere/Revizuire',
        'Closed Won' => 'Închide Câștigat',
        'Closed Lost' => 'Închide Pierdut'
      ]
    ],
    'labels' => [
      'Create Opportunity' => 'Creare Oportunitate'
    ],
    'presetFilters' => [
      'open' => 'Deschide',
      'won' => 'Câștigat',
      'lost' => 'Pierdut'
    ]
  ],
  'TargetList' => [
    'fields' => [
      'name' => 'Nume',
      'description' => 'Descriere',
      'entryCount' => 'Numără Intrări',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'Campanii',
      'endDate' => 'Dată Terminare',
      'targetLists' => 'Liste Țintă',
      'includingActionList' => 'Include',
      'excludingActionList' => 'Exclude',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out'
    ],
    'links' => [
      'accounts' => 'Conturi',
      'contacts' => 'Contacte',
      'leads' => 'Lead-uri',
      'campaigns' => 'Campanii',
      'massEmails' => 'Email-uri în Masă'
    ],
    'options' => [
      'type' => [
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Televiziune',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter'
      ],
      'targetStatus' => [
        'Opted Out' => 'Opted Out',
        'Listed' => 'Listed'
      ]
    ],
    'labels' => [
      'Create TargetList' => 'Creați Listă Țintă',
      'Opted Out' => 'Ales să nu',
      'Cancel Opt-Out' => 'Anulează alegerea de ieșire',
      'Opt-Out' => 'Aleg să nu'
    ]
  ],
  'Task' => [
    'fields' => [
      'name' => 'Nume',
      'parent' => 'Părinte',
      'status' => 'Stare',
      'dateStart' => 'Dată Începere',
      'dateEnd' => 'Dată Scadență',
      'dateStartDate' => 'Dată Începere (toată ziua)',
      'dateEndDate' => 'Dată Terminare (toată ziua)',
      'priority' => 'Prioritate',
      'description' => 'Descriere',
      'isOverdue' => 'Este Restant',
      'account' => 'Cont',
      'dateCompleted' => 'Dată Terminare',
      'attachments' => 'Atașamente',
      'reminders' => 'Mementouri',
      'contact' => 'Contact'
    ],
    'links' => [
      'attachments' => 'Atașamente',
      'account' => 'Cont',
      'contact' => 'Contact'
    ],
    'options' => [
      'status' => [
        'Not Started' => 'Nu a început',
        'Started' => 'Început',
        'Completed' => 'Terminat',
        'Canceled' => 'Anulat',
        'Deferred' => 'Amânat'
      ],
      'priority' => [
        'Low' => 'Scăzut',
        'Normal' => 'Normal',
        'High' => 'Înalt',
        'Urgent' => 'Urgent'
      ]
    ],
    'labels' => [
      'Create Task' => 'Crează Sarcine',
      'Complete' => 'Terminat',
      'overdue' => 'overdue'
    ],
    'presetFilters' => [
      'actual' => 'Actual',
      'completed' => 'Terminat',
      'deferred' => 'Amânat',
      'todays' => 'Astăzi',
      'overdue' => 'Restant'
    ]
  ]
];
