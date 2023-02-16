<?php

return [
    'ad'				        => 'Υπηρεσία καταλόγου Active Directory',
    'ad_domain'				    => 'Τομέα Active Directory',
    'ad_domain_help'			=> 'Αυτό είναι μερικές φορές το ίδιο με τον τομέα ηλεκτρονικού ταχυδρομείου σας, αλλά όχι πάντα.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".',
    'admin_cc_email'            => 'Επασύναψη email',
    'admin_cc_email_help'       => 'Εάν θέλετε να στείλετε ένα αντίγραφο checkin/checkout emails που αποστέλλονται στους χρήστες σε έναν επιπλέον λογαριασμό email, εισαγάγετέ το εδώ. Διαφορετικά, αφήστε αυτό το πεδίο κενό.',
    'is_ad'				        => 'Αυτός είναι ένας διακομιστής υπηρεσίας καταλόγου Active Directory',
    'alerts'                	=> 'Alerts',
    'alert_title'               => 'Update Alert Settings',
    'alert_email'				=> 'Αποστολή ειδοποιήσεων προς',
    'alert_email_help'    => 'Email addresses or distribution lists you want alerts to be sent to, comma separated',
    'alerts_enabled'			=> 'Ειδοποιήσεις ενεργοποιημένες',
    'alert_interval'			=> 'Ελάχιστο όριο λήξης ειδοποιήσεων (σε ημέρες)',
    'alert_inv_threshold'		=> 'Ειδοποιήση ορίου αποθήκης',
    'allow_user_skin'           => 'Allow User Skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.',
    'asset_ids'					=> 'Στοιχεία ταυτότητας περιουσιακών στοιχείων',
    'audit_interval'            => 'Διάρκεια ελέγχου',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date.',
    'audit_warning_days'        => 'Όριο προειδοποίησης ελέγχου',
    'audit_warning_days_help'   => 'Πόσες μέρες νωρίτερα θα πρέπει να σας προειδοποιήσουμε όταν τα περιουσιακά στοιχεία οφείλονται για έλεγχο;',
    'auto_increment_assets'		=> 'Generate auto-incrementing asset tags',
    'auto_increment_prefix'		=> 'Πρόθεμα (μη υποχρεωτικό)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'					=> 'Αντίγραφα Ασφαλείας',
    'backups_help'              => 'Create, download, and restore backups ',
    'backups_restoring'         => 'Restoring from Backup',
    'backups_upload'            => 'Upload Backup',
    'backups_path'              => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings'			=> 'Ρυθμίσεις γραμμωτού κώδικα',
    'confirm_purge'			    => 'Επιβεβαίωση καθαρισμού',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'Προσαρμοσμένο CSS',
    'custom_css_help'			=> 'Εισαγάγετε τυχόν προσαρμοσμένες επικαλύψεις CSS που θέλετε να χρησιμοποιήσετε. Μην συμπεριλάβετε τις ετικέτες &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'URL επαναφοράς προσαρμοσμένου κωδικού πρόσβασης',
    'custom_forgot_pass_url_help'	=> 'Αυτό αντικαθιστά την ενσωματωμένη ξεχασμένη διεύθυνση URL κωδικού πρόσβασης στην οθόνη σύνδεσης, χρήσιμη για να κατευθύνει τα άτομα σε λειτουργία εσωτερικής ή φιλοξενούμενης επαναφοράς κωδικού πρόσβασης LDAP. Θα απενεργοποιήσει αποτελεσματικά τη λειτουργικότητα ξεχασμένου κωδικού πρόσβασης τοπικού χρήστη.',
    'dashboard_message'			=> 'Όνομα Εμφάνισης Στο Μενού',
    'dashboard_message_help'	=> 'Αυτό το κείμενο θα εμφανίζεται στον πίνακα ελέγχου για οποιονδήποτε έχει άδεια να δει τον πίνακα ελέγχου.',
    'default_currency'  		=> 'Προεπιλεγμένο νόμισμα',
    'default_eula_text'			=> 'Προεπιλογή EULA',
    'default_language'			=> 'Προκαθορισμένη γλώσσα',
    'default_eula_help_text'	=> 'Μπορείτε επίσης να συσχετίσετε προσαρμοσμένες ΑΔΕΚ με συγκεκριμένες κατηγορίες περιουσιακών στοιχείων.',
    'display_asset_name'        => 'Εμφάνιση ονόματος παγίου',
    'display_checkout_date'     => 'Εμφάνιση ημερομηνίας αποχώρησης',
    'display_eol'               => 'Εμφάνιση του EOL στην προβολή πίνακα',
    'display_qr'                => 'Εμφάνιση τετραγώνων κωδίκων',
    'display_alt_barcode'		=> 'Εμφάνιση 1D barcode',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> '2D Barcode Type',
    'alt_barcode_type'			=> '1D τύπο γραμμωτού κώδικα',
    'email_logo_size'       => 'Square logos in email look best. ',
    'enabled'                   => 'Enabled',
    'eula_settings'				=> 'Ρυθμίσεις EULA',
    'eula_markdown'				=> 'Αυτή η EULA επιτρέπει <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Πρόσθετο κείμενο Footer',
    'footer_text_help'          => 'Αυτό το κείμενο θα εμφανιστεί στο υποσέλιδο στη δεξιά πλευρά. Οι σύνδεσμοι επιτρέπονται χρησιμοποιώντας την <a href="https://help.github.com/articles/github-flavored-markdown/"> Github flavored markdown </a>. Διακοπή γραμμής, κεφαλίδες, εικόνες κ.λπ. μπορεί να οδηγήσουν σε απρόβλεπτα αποτελέσματα.',
    'general_settings'			=> 'Γενικές ρυθμίσεις',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula,  tos, dashboard, privacy',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'			=> 'Δημιουργία Αντίγραφου Ασφαλείας',
    'header_color'              => 'Χρώμα επικεφαλίδας',
    'info'                      => 'Αυτές οι ρυθμίσεις σάς επιτρέπουν να προσαρμόσετε ορισμένες πτυχές της εγκατάστασής σας.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Έκδοση οδηγού',
    'ldap'                      => 'LDAP',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client TLS Key',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'Ενεργό LDAP',
    'ldap_integration'          => 'Ενσωμάτωση LDAP',
    'ldap_settings'             => 'Ρυθμίσεις LDAP',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
     'ldap_client_tls_key'       => 'LDAP Client-Side TLS key',
    'ldap_login_test_help'      => 'Εισαγάγετε ένα έγκυρο όνομα χρήστη και κωδικό πρόσβασης LDAP από τη βάση DN που καθορίσατε παραπάνω για να ελέγξετε εάν η σύνδεσή LDAP έχει ρυθμιστεί σωστά. ΠΡΩΤΑ ΑΠΟΘΗΚΕΥΣΤΕ ΤΙΣ ΡΥΘΜΙΣΕΙΣ ΣΑΣ ΣΤΟ LDAP.',
    'ldap_login_sync_help'      => 'Αυτό ελέγχει μόνο ότι το LDAP μπορεί να συγχρονιστεί σωστά. Εάν το Authentication στο LDAP δεν είναι σωστό, οι χρήστες ενδέχεται να μην μπορούν να συνδεθούν. ΠΡΩΤΑ ΑΠΟΘΗΚΕΥΣΤΕ ΤΙΣ ΡΥΘΜΙΣΕΙΣ ΣΑΣ ΣΤΟ LDAP.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'LDAP Server',
    'ldap_server_help'          => 'Αυτό θα πρέπει να ξεκινά με το ldap: // (για μη κρυπτογραφημένο ή TLS) ή ldaps: // (για SSL)',
    'ldap_server_cert'			=> 'Πιστοποίηση πιστοποιητικού SSL για LDAP',
    'ldap_server_cert_ignore'	=> 'Να επιτρέπεται η μη έγκυρη πιστοποίηση SSL',
    'ldap_server_cert_help'		=> 'Επιλέξτε αυτό το πλαίσιο ελέγχου εάν χρησιμοποιείτε έναν αυτόματο έλεγχο SSL και θέλετε να αποδεχτείτε ένα μη έγκυρο πιστοποιητικό SSL.',
    'ldap_tls'                  => 'Χρήση TLS',
    'ldap_tls_help'             => 'Αυτό θα πρέπει να ελέγχεται μόνο αν εκτελείτε το STARTTLS στο διακομιστή LDAP.',
    'ldap_uname'                => 'LDAP δεσμεύει το όνομα χρήστη',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'Κωδικός πρόσβασης δεσμού LDAP',
    'ldap_basedn'               => 'Δέσμευση βάσης DN',
    'ldap_filter'               => 'LDAP Φίλτρο',
    'ldap_pw_sync'              => 'LDAP συγχρονισμός κωδικού πρόσβασης',
    'ldap_pw_sync_help'         => 'Καταργήστε την επιλογή αυτού του πλαισίου αν δεν θέλετε να διατηρείτε τους κωδικούς LDAP συγχρονισμένους με τοπικούς κωδικούς πρόσβασης. Απενεργοποιώντας αυτό σημαίνει ότι οι χρήστες σας ενδέχεται να μην μπορούν να συνδεθούν αν ο διακομιστής LDAP δεν είναι προσβάσιμος για κάποιο λόγο.',
    'ldap_username_field'       => 'Πεδίο ονόματος χρήστη',
    'ldap_lname_field'          => 'Επίθετο',
    'ldap_fname_field'          => 'Όνομα LDAP',
    'ldap_auth_filter_query'    => 'Ερώτημα ελέγχου ταυτότητας LDAP',
    'ldap_version'              => 'Έκδοση LDAP',
    'ldap_active_flag'          => 'Ενεργή σημαία LDAP',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_emp_num'              => 'Αριθμός υπαλλήλου LDAP',
    'ldap_email'                => 'LDAP Email',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synchronization',
    'license'                   => 'Άδειες λογισμικού',
    'load_remote_text'          => 'Απομακρυσμένα Scripts',
    'load_remote_help_text'		=> 'Αυτή η εγκατάσταση Snipe-IT μπορεί να φορτώσει δέσμες ενεργειών από τον έξω κόσμο.',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'IP Address',
    'login_success'             => 'Success?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => 'Σύνδεση Σημείωση',
    'login_note_help'           => 'Προαιρετικά συμπεριλάβετε μερικές προτάσεις στην οθόνη σύνδεσης, για παράδειγμα για να βοηθήσετε άτομα που έχουν βρει μια χαμένη ή κλεμμένη συσκευή. Αυτό το πεδίο δέχεται <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'login_remote_user_text'    => 'Επιλογές σύνδεσης απομακρυσμένου χρήστη',
    'login_remote_user_enabled_text' => 'Ενεργοποίηση απομακρησμένου χρήστη',
    'login_remote_user_enabled_help' => 'Αυτή η επιλογή επιτρέπει το Authentication μέσω του REMOTE_USER σύμφωνα με το "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Απενεργοποιήστε άλλους μηχανισμούς authentication',
    'login_common_disabled_help' => 'Αυτή η επιλογή απενεργοποιεί άλλους μηχανισμούς authentication. Απλώς ενεργοποιήστε αυτήν την επιλογή εάν είστε βέβαιοι ότι η σύνδεση REMOTE_USER λειτουργεί ήδη',
    'login_remote_user_custom_logout_url_text' => 'Προσαρμοσμένη διεύθυνση URL αποσύνδεσης',
    'login_remote_user_custom_logout_url_help' => 'Εάν παρέχεται ένα url εδώ, οι χρήστες θα ανακατευθυνθούν σε αυτήν τη διεύθυνση URL αφού ο χρήστης αποσυνδεθεί από το Snipe-IT. Σε περίπτωση που χρησιμοποιήτε κάποιο συγκεκριμένο πάρωχο Authentication.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Λογότυπο',
    'logo_print_assets'         => 'Χρήση σε Εκτύπωση',
    'logo_print_assets_help'    => 'Use branding on printable asset lists ',
    'full_multiple_companies_support_help_text' => 'Περιορισμός των χρηστών (συμπεριλαμβανομένων των διαχειριστών) που εκχωρούνται σε εταιρείες στα περιουσιακά στοιχεία της εταιρείας τους.',
    'full_multiple_companies_support_text' => 'Πλήρης υποστήριξη πολλαπλών εταιρειών',
    'show_in_model_list'   => 'Show in Model Dropdowns',
    'optional'					=> 'προαιρετικός',
    'per_page'                  => 'Αποτελέσματα ανά σελίδα',
    'php'                       => 'Έκδοση PHP',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Πρέπει να εγκαταστήσετε το php-gd για να εμφανίσετε τους QR κώδικες, δείτε τις οδηγίες εγκατάστασης.',
    'php_gd_warning'            => 'Η επεξεργασία εικόνας PHP και το πρόσθετο GD ΔΕΝ έχουν εγκατασταθεί.',
    'pwd_secure_complexity'     => 'Πολυπλοκότητα κωδικού πρόσβασης',
    'pwd_secure_complexity_help' => 'Επιλέξτε τους κανόνες περίπλοκου κωδικού πρόσβασης που θέλετε να επιβάλλετε.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => 'Κωδικοί ελάχιστων χαρακτήρων',
    'pwd_secure_min_help'       => 'Minimum permitted value is 8',
    'pwd_secure_uncommon'       => 'Αποτρέψτε τους κοινούς κωδικούς πρόσβασης',
    'pwd_secure_uncommon_help'  => 'Αυτό θα αποκλείσει τους χρήστες από τη χρήση κοινών κωδικών πρόσβασης από τους κορυφαίους 10.000 κωδικούς πρόσβασης που αναφέρονται σε παραβιάσεις.',
    'qr_help'                   => 'Ενεργοποιήστε πρώτα τους κωδικούς QR για να τις ορίσετε',
    'qr_text'                   => 'QR Code Κείμενο',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML settings',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'saml_download'             => 'Download Metadata',
    'setting'                   => 'Ρύθμιση',
    'settings'                  => 'Ρυθμίσεις',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Archived Assets',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Show images in emails',
    'show_images_in_email_help'   => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name'                 => 'Όνομα ιστότοπου',
    'slack'                     => 'Slack',
    'slack_title'               => 'Update Slack Settings',
    'slack_help'                => 'Slack settings',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Χωρίς κανάλι',
    'slack_endpoint'            => 'Χαμηλό τελικό σημείο',
    'slack_integration'         => 'Ρυθμίσεις χαλαρών',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'Once you have saved your Slack information, a test button will appear.',
    'slack_test_help'           => 'Test whether your Slack integration is configured correctly. YOU MUST SAVE YOUR UPDATED SLACK SETTINGS FIRST.',
    'snipe_version'  			=> 'Snipe-It έκδοση',
    'support_footer'            => 'Support Footer Links ',
    'support_footer_help'       => 'Specify who sees the links to the Snipe-IT Support info and Users Manual',
    'version_footer'            => 'Έκδοση στο υποσέλιδο ',
    'version_footer_help'       => 'Καθορίστε ποιός μπορεί να δει την έκδοση και τον αριθμό κατασκευής του Snipe-ΙΤ.',
    'system'                    => 'Πληροφορίες συστήματος',
    'update'                    => 'Ενημέρωση ρυθμίσεων',
    'value'                     => 'Τιμή',
    'brand'                     => 'Μάρκα',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, Site Name',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Σχετικά με τις ρυθμίσεις',
    'about_settings_text'       => 'Αυτές οι ρυθμίσεις σάς επιτρέπουν να προσαρμόσετε ορισμένες πτυχές της εγκατάστασής σας.',
    'labels_per_page'           => 'Ετικέτες ανά σελίδα',
    'label_dimensions'          => 'Διαστάσεις ετικέτας (ίντσες)',
    'next_auto_tag_base'        => 'Επόμενη αυτόματη αύξηση',
    'page_padding'              => 'Περιθώρια σελίδας (ίντσες)',
    'privacy_policy_link'       => 'Σύνδεσμος στην Πολιτική Απορρήτου',
    'privacy_policy'            => 'Πολιτική Απορρήτου',
    'privacy_policy_link_help'  => 'If a url is included here, a link to your privacy policy will be included in the app footer and in any emails that the system sends out, in compliance with GDPR. ',
    'purge'                     => 'Καθαρισμός αρχείων που έχουν διαγραφεί',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => 'Ετικέτα κάτω υδρορροή',
    'labels_display_sgutter'    => 'Εσωτερική υδρορροή ετικέτας',
    'labels_fontsize'           => 'Μέγεθος γραμματοσειράς ετικέτας',
    'labels_pagewidth'          => 'Πλάτος ετικέτας',
    'labels_pageheight'         => 'Ύψος φύλλου ετικέτας',
    'label_gutters'        => 'Απόσταση ετικετών (ίντσες)',
    'page_dimensions'        => 'Διαστάσεις σελίδας (ίντσες)',
    'label_fields'          => 'Ετικέτα ορατά πεδία',
    'inches'        => 'ίντσες',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Σύνδεση με το Snipe-IT στα ηλεκτρονικά ταχυδρομεία',
    'show_url_in_emails_help_text'      => 'Καταργήστε την επιλογή αυτού του πλαισίου αν δεν θέλετε να συνδεθείτε πίσω στην εγκατάσταση Snipe-IT στα υποσέλιδα ηλεκτρονικού ταχυδρομείου σας. Χρήσιμο αν οι περισσότεροι χρήστες σας δεν συνδέονται ποτέ.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Μέγιστο ύψος μικρογραφιών',
    'thumbnail_max_h_help'   => 'Το μέγιστο ύψος σε εικονοστοιχεία που ενδέχεται να εμφανίζονται στην εικ να. Ελάχιστο 25, μέγιστο 500.',
    'two_factor'        => 'Έλεγχος ταυτότητας δύο παραγόντων',
    'two_factor_secret'        => 'Κωδικός δύο συντελεστών',
    'two_factor_enrollment'        => 'Εγγραφή δύο συντελεστών',
    'two_factor_enabled_text'        => 'Ενεργοποίηση ελέγχου ταυτότητας δύο παραγόντων',
    'two_factor_reset'        => 'Επαναφορά του μυστικού δύο παραγόντων',
    'two_factor_reset_help'        => 'Αυτό θα υποχρεώσει τον χρήστη να εγγραφεί ξανά στη συσκευή του με τον Επαληθευτή Google. Αυτό μπορεί να είναι χρήσιμο εάν η τρέχουσα εγγεγραμμένη συσκευή τους χάσει ή κλαπεί.',
    'two_factor_reset_success'          => 'Επαναφορά της συσκευής δύο παραγόντων',
    'two_factor_reset_error'          => 'Επαναφορά συσκευής δύο παραγόντων απέτυχε',
    'two_factor_enabled_warning'        => 'Εάν ενεργοποιήσετε τον παράγοντα δύο παραγόντων, εάν δεν είναι ενεργοποιημένος, θα σας αναγκάσει αμέσως να επαληθεύσετε την ταυτότητά σας με μια συσκευή εγγραφής στο Google Auth. Θα έχετε τη δυνατότητα να εγγραφείτε στη συσκευή σας εάν δεν είστε εγγεγραμμένος.',
    'two_factor_enabled_help'        => 'Αυτό θα ενεργοποιήσει τον έλεγχο ταυτότητας δύο παραγόντων χρησιμοποιώντας το Google Authenticator.',
    'two_factor_optional'        => 'Επιλεκτική (Οι χρήστες μπορούν να ενεργοποιήσουν ή να απενεργοποιήσουν αν επιτρέπεται)',
    'two_factor_required'        => 'Απαιτείται για όλους τούς χρήστες',
    'two_factor_disabled'        => 'Έχει απενεργοποιηθεί',
    'two_factor_enter_code'	=> 'Εισαγάγετε τον κωδικό δύο συντελεστών',
    'two_factor_config_complete'	=> 'Υποβολή Κωδικού',
    'two_factor_enabled_edit_not_allowed' => 'Ο διαχειριστής σας δεν σας επιτρέπει να επεξεργαστείτε αυτήν τη ρύθμιση.',
    'two_factor_enrollment_text'	=> "Απαιτείται έλεγχος ταυτότητας δύο παραγόντων, ωστόσο η συσκευή σας δεν έχει εγγραφεί ακόμα. Ανοίξτε την εφαρμογή Google Authenticator και σαρώστε τον παρακάτω κωδικό QR για να εγγραφείτε στη συσκευή σας. Μόλις εγγραφείτε στη συσκευή σας, πληκτρολογήστε τον παρακάτω κώδικα",
    'require_accept_signature'      => 'Απαιτείται υπογραφή',
    'require_accept_signature_help_text'      => 'Η ενεργοποίηση αυτής της λειτουργίας θα απαιτεί από τους χρήστες να αποδεχθούν φυσικά την αποδοχή ενός στοιχείου.',
    'left'        => 'αριστερά',
    'right'        => 'δεξιά',
    'top'        => 'κορυφή',
    'bottom'        => 'κάτω μέρος',
    'vertical'        => 'κάθετα',
    'horizontal'        => 'οριζόντιος',
    'unique_serial'                => 'Μοναδικοί σειριακοί αριθμοί',
    'unique_serial_help_text'                => 'Με την επιλογή αυτή θα επιβληθεί ο περιορισμός μοναδικότητας σειριακού αριθμού στα πάγια',
    'zerofill_count'        => 'Μήκος ετικετών ενεργητικού, συμπεριλαμβανομένου του zerofill',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
    'oauth_title' => 'OAuth API Settings',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint Settings',
    'asset_tag_title' => 'Update Asset Tag Settings',
    'barcode_title' => 'Update Barcode Settings',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Barcode &amp; QR settings',
    'barcodes_help' => 'This will attempt to delete cached barcodes. This would typically only be used if your barcode settings have changed, or if your Snipe-IT URL has changed. Barcodes will be re-generated when accessed next.',
    'barcodes_spinner' => 'Attempting to delete files...',
    'barcode_delete_cache' => 'Delete Barcode Cache',
    'branding_title' => 'Update Branding Settings',
    'general_title' => 'Update General Settings',
    'mail_test' => 'Send Test',
    'mail_test_help' => 'This will attempt to send a test mail to :replyto.',
    'filter_by_keyword' => 'Filter by setting keyword',
    'security' => 'Security',
    'security_title' => 'Update Security Settings',
    'security_keywords' => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    'security_help' => 'Two-factor, Password Restrictions',
    'groups_keywords' => 'permissions, permission groups, authorization',
    'groups_help' => 'Account permission groups',
    'localization' => 'Localization',
    'localization_title' => 'Update Localization Settings',
    'localization_keywords' => 'localization, currency, local, locale, time zone, timezone, international, internatinalization, language, languages, translation',
    'localization_help' => 'Language, date display',
    'notifications' => 'Notifications',
    'notifications_help' => 'Email alerts, audit settings',
    'asset_tags_help' => 'Incrementing and prefixes',
    'labels' => 'Labels',
    'labels_title' => 'Update Label Settings',
    'labels_help' => 'Label sizes &amp; settings',
    'purge' => 'Purge',
    'purge_keywords' => 'permanently delete',
    'purge_help' => 'Purge Deleted Records',
    'ldap_extension_warning' => 'It does not look like the LDAP extension is installed or enabled on this server. You can still save your settings, but you will need to enable the LDAP extension for PHP before LDAP syncing or login will work.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Employee Number',
    'create_admin_user' => 'Create a User ::',
    'create_admin_success' => 'Success! Your admin user has been added!',
    'create_admin_redirect' => 'Click here to go to your app login!',
    'setup_migrations' => 'Database Migrations ::',
    'setup_no_migrations' => 'There was nothing to migrate. Your database tables were already set up!',
    'setup_successful_migrations' => 'Your database tables have been created',
    'setup_migration_output' => 'Migration output:',
    'setup_migration_create_user' => 'Next: Create User',
    'ldap_settings_link' => 'LDAP Settings Page',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integration',
];
