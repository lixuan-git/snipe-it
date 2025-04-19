<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory tartomány',
    'ad_domain_help'			=> 'Ez néha megegyezik az e-mail domainjével, de nem mindig.',
    'ad_append_domain_label'    => 'Domainnév hozzáadása',
    'ad_append_domain'          => 'Domain név hozzáadása a felhasználónév mezőhöz',
    'ad_append_domain_help'     => 'A felhasználóknak nem szükséges beírni az egész címet "username@domain.local", elég csak a felhasználónevüket "username".',
    'admin_cc_email'            => 'Email másolat',
    'admin_cc_email_help'       => 'Send a copy of checkin/checkout emails to this address.',
    'admin_settings'            => 'Rendszergazdai Beállítások',
    'is_ad'				        => 'Ez egy Active Directory szerver',
    'alerts'                	=> 'Riasztások',
    'alert_title'               => 'Értesítési beállítások módosítása',
    'alert_email'				=> 'Riasztás címzettje',
    'alert_email_help'          => 'E-mail címek vagy terjesztési listák, amelyekre figyelmeztetéseket szeretne küldeni, vesszővel elválasztva.',
    'alerts_enabled'			=> 'Riasztás engedélyezve',
    'alert_interval'			=> 'A figyelmeztetések lejárata küszöbérték (napokban)',
    'alert_inv_threshold'		=> 'Leltár riasztási küszöb',
    'allow_user_skin'           => 'Felhasználók saját kinézetüknek engedélyezése',
    'allow_user_skin_help_text' => 'Pipáld be ezt a dobozt ha szeretnéd, hogy a felhasználok felülírhassák az alap oldal kinézetét egy másikkal.',
    'asset_ids'					=> 'Eszköz ID',
    'audit_interval'            => 'Audit időtartam',
    'audit_interval_help'       => 'Ha rendszeresen fizikailag is ellenőrizni kell az eszközeit, adja meg az Ön által használt intervallumot hónapokban kifejezve. Ha frissíti ezt az értéket, a közelgő ellenőrzési dátummal rendelkező eszközök összes "következő ellenőrzési dátuma" megjelenik.',
    'audit_warning_days'        => 'Ellenőrzési figyelmeztető küszöbérték',
    'audit_warning_days_help'   => 'Hány nappal előre figyelmeztetni kell Önt arra, hogy az eszközöknek az ellenőrzésre van szükségük?',
    'auto_increment_assets'		=> 'Enerate auto-incrementing asset tags',
    'auto_increment_prefix'		=> 'Előtag (opcionális)',
    'auto_incrementing_help'    => 'Először engedélyezze az eszközazonosítók automatikus növelését, hogy ezt beállítsa',
    'backups'					=> 'Biztonsági mentések',
    'backups_help'              => 'Biztonsági mentések létrehozása, letöltése és visszaállítása ',
    'backups_restoring'         => 'Visszaállítás biztonsági másolatból',
    'backups_clean' => 'Clean the backed-up database before restore',
    'backups_clean_helptext' => "This can be useful if you're changing between database versions",
    'backups_upload'            => 'Biztonsági másolat feltöltése',
    'backups_path'              => 'A tárolt biztonsági másolatok a szerveren elérhetőek a <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.)<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file  ',
    'backups_logged_out'         => 'A visszaállítás befejeztével minden meglévő felhasználó, beleértve Önt is, kijelentkezik a rendszerből.',
    'backups_large'             => 'A nagyon nagyméretű biztonsági mentések a visszaállítási kísérlet során megszakadhatnak, és előfordulhat, hogy továbbra is a parancssoron keresztül kell futtatni őket. ',
    'barcode_settings'			=> 'Vonalkód beállítások',
    'confirm_purge'			    => 'Nyugtázza a tisztítást',
    'confirm_purge_help'		=> 'Írd be a "DELETE" szót a lenti dobozba ha azt szeretnéd, hogy minden adat kitörlödjön. Ez a művelet nem visszaállítható és VÉGLEGESEN töröl minden eszközt és felhasználót. (Csinálj elötte egy biztonsági mentést, biztos ami biztos.)',
    'custom_css'				=> 'Egyéni CSS',
    'custom_css_placeholder'	=> 'Add your custom CSS',
    'custom_css_help'			=> 'Adjon meg olyan egyedi CSS felülírást, amelyet használni szeretne. Ne tüntesse fel a &lt;style&gt;&lt;/style&gt; címkéket.',
    'custom_forgot_pass_url'	=> 'Egyéni jelszó visszaállítási URL',
    'custom_forgot_pass_url_help'	=> 'Ez felváltja a beépített elfelejtett jelszó URL-jét a bejelentkezési képernyőn, amely hasznos lehet arra, hogy az embereket belső vagy hosztolt LDAP jelszó-visszaállítási funkciókra irányítsa. Hatékonyan kikapcsolja a helyi felhasználók elfelejtett jelszavát.',
    'dashboard_message'			=> 'Irányítópult üzenet',
    'dashboard_message_help'	=> 'Ez a szöveg megjelenik a műszerfalon bárki számára, aki engedélyt kapott a vezérlőpult megtekintésére.',
    'default_currency'  		=> 'Alapértelmezett pénznem',
    'default_eula_text'			=> 'Alapértelmezett EULA',
    'default_eula_text_placeholder' => 'Add your default EULA text',
    'default_language'			=> 'Alapértelmezett nyelv',
    'default_eula_help_text'	=> 'Egyéni EULA-kat is társíthat bizonyos eszközkategóriákhoz.',
    'acceptance_note'           => 'Add a note for your decision (Optional)',
    'display_asset_name'        => 'Eszköznév megjelenítése',
    'display_checkout_date'     => 'Megjelenik a Checkout dátum',
    'display_eol'               => 'Táblázat nézetben az EOL megjelenítése',
    'display_qr'                => 'Display 2D barcode',
    'display_alt_barcode'		=> '1D vonalkód megjelenítése',
    'barcode_type'				=> '2D vonalkód típusa',
    'alt_barcode_type'			=> '1D vonalkód típusa',
    'enabled'                   => 'Bekapcsolva',
    'eula_settings'				=> 'EULA beállítások',
    'eula_markdown'				=> 'Ez az EULA lehetővé teszi <a href="https://help.github.com/articles/github-flavored-markdown/">Github ízesített markdown</a>-et.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Az elfogadott fájltípusok: ico, png és gif. A többi képformátum lehet, hogy nem működik minden böngészőben.',
    'favicon_size'          => 'A favicon egy 16x16 pixeles kép kell legyen.',
    'footer_text'               => 'További lábjegyzet szöveg ',
    'footer_text_help'          => 'Ez a szöveg a lábléc jobb oldalán fog megjelenni. Linkek használata engedélyezett <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a> formátumban. Sortörések, fejlécek, képek, stb. okozhatnak problémákat a megjelenítés során.',
    'footer_text_placeholder'   => 'Optional footer text',
    'general_settings'			=> 'Általános beállítások',
    'general_settings_help'     => 'Alapértelmezett EULA és egyéb',
    'generate_backup'			=> 'Háttér létrehozása',
    'google_workspaces'         => 'Google Workspaces',
    'header_color'              => 'Fejléc színe',
    'info'                      => 'Ezek a beállítások lehetővé teszik a telepítés egyes szempontjainak testreszabását.',
    'label_logo_size'           => 'Négyzet alakú logok jobban néznek ki - ez a logo fog megjelenni minden címke jobb felső sarkában. ',
    'laravel'                   => 'Laravel verzió',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Alapértelmezett engedélyek csoport',
    'ldap_default_group_info'   => 'Válasszon ki egy csoportot az újonan szinkronizált felhasználókhoz. Ne felejtse el, hogy a felhasználó átveszi a hozzárendelt csoport engedélyeit.',
    'no_default_group'          => 'Nincs alapértelmezett csoport',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP ügyfél TLS-kulcsa',
    'ldap_client_tls_cert'      => 'LDAP ügyféloldali TLS tanúsítvány',
    'ldap_enabled'              => 'LDAP bekapcsolva',
    'ldap_integration'          => 'LDAP integráció',
    'ldap_settings'             => 'LDAP beállítások',
    'ldap_client_tls_cert_help' => 'Az LDAP-kapcsolatok ügyféloldali TLS-tanúsítványa és kulcsa általában csak a "Biztonságos LDAP" Google Workspace-konfigurációkban hasznos. Mindkettőre szükség van.',
    'ldap_location'             => 'LDAP Location',
'ldap_location_help'             => 'The Ldap Location field should be used if <strong>an OU is not being used in the Base Bind DN.</strong> Leave this blank if an OU search is being used.',
    'ldap_login_test_help'      => 'Adjon meg egy érvényes LDAP felhasználónevet és jelszót a fenti alapszintű DN-ből, hogy ellenőrizze, hogy az LDAP-bejelentkezés megfelelően van-e beállítva. EL KELL MENTENIE A MÓDOSÍTOTT LDAP BEÁLLÍTÁSOKAT ELŐBB.',
    'ldap_login_sync_help'      => 'Ez csak azt teszteli, hogy az LDAP helyesen szinkronizálható. Ha az LDAP hitelesítési lekérdezése nem megfelelő, a felhasználók még mindig nem tudnak bejelentkezni. EL KELL MENTENIE A MÓDOSÍTOTT LDAP BEÁLLÍTÁSOKAT ELŐBB.',
    'ldap_manager'              => 'LDAP-kezelő',
    'ldap_server'               => 'LDAP szerver',
    'ldap_server_help'          => 'This should start with ldap:// (for unencrypted) or ldaps:// (for TLS or SSL)',
    'ldap_server_cert'			=> 'LDAP SSL tanúsítvány érvényesítés',
    'ldap_server_cert_ignore'	=> 'Érvénytelen SSL-tanúsítvány engedélyezése',
    'ldap_server_cert_help'		=> 'Jelölje be ezt a jelölőnégyzetet, ha önállóan aláírt SSL-tanúsítványt használ, és szeretne elfogadni egy érvénytelen SSL-tanúsítványt.',
    'ldap_tls'                  => 'TLS használata',
    'ldap_tls_help'             => 'Ezt csak akkor kell ellenőrizni, ha STARTTLS-t futtat az LDAP kiszolgálón.',
    'ldap_uname'                => 'LDAP összekapcsolja a felhasználónevet',
    'ldap_dept'                 => 'LDAP részleg',
    'ldap_phone'                => 'LDAP telefonszám',
    'ldap_jobtitle'             => 'LDAP munkakör címe',
    'ldap_country'              => 'LDAP ország',
    'ldap_pword'                => 'LDAP összekötő jelszó',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP szűrő',
    'ldap_pw_sync'              => 'Cache LDAP Passwords',
    'ldap_pw_sync_help'         => 'Uncheck this box if you do not wish to keep LDAP passwords cached as local hashed passwords. Disabling this means that your users may not be able to login if your LDAP server is unreachable for some reason.',
    'ldap_username_field'       => 'Felhasználónév mező',
    'ldap_lname_field'          => 'Vezetéknév',
    'ldap_fname_field'          => 'LDAP keresztnév',
    'ldap_auth_filter_query'    => 'LDAP hitelesítési lekérdezés',
    'ldap_version'              => 'LDAP verzió',
    'ldap_active_flag'          => 'LDAP aktív zászló',
    'ldap_activated_flag_help'  => 'Ez az érték határozza meg, hogy a szinkronizált felhasználó be tud-e jelentkezni a Snipe-IT-be. <strong>Ez nem befolyásolja az elemek be- és kijelentését</strong>, és az AD/LDAP-ban az <strong>attribútum nevének</strong> kell lennie, <strong>nem pedig az értékének</strong>. <br><br>Ha ez a mező olyan mezőnévre van beállítva, amely nem létezik az AD/LDAP-ban, vagy az AD/LDAP-mező értéke <code>0</code> vagy <code>hamis</code>, a <strong>felhasználói bejelentkezés letiltásra kerül</strong>. Ha az AD/LDAP mező értéke <code>1</code> vagy <code>true</code>, vagy <em>bármely más szöveg</em> azt jelenti, hogy a felhasználó bejelentkezhet. Ha a mező üres az AD-ban, tiszteletben tartjuk a <code>userAccountControl</code> attribútumot, amely általában lehetővé teszi a nem felfüggesztett felhasználók számára a bejelentkezést.',
    'ldap_invert_active_flag'   => 'LDAP Invert Active Flag',
    'ldap_invert_active_flag_help'     => 'If enabled: when the value returned by LDAP Active Flag is <code>0</code> or <code>false</code> the user account will be active.',
    'ldap_emp_num'              => 'LDAP alkalmazott száma',
    'ldap_email'                => 'LDAP e-mail',
    'ldap_test'                 => 'LDAP tesztelése',
    'ldap_test_sync'            => 'LDAP szinkronizáció tesztelése',
    'license'                   => 'Szoftverlicenc',
    'load_remote'               => 'Load Remote Avatars',
    'load_remote_help_text'		=> 'Uncheck this box if your install cannot load scripts from the outside internet. This will prevent Snipe-IT from trying load avatars from Gravatar or other outside sources.',
    'login'                     => 'Bejelentkezés próbálkozások',
    'login_attempt'             => 'Bejelentkezés próbálkozás',
    'login_ip'                  => 'IP címek',
    'login_success'             => 'Sikeres?',
    'login_user_agent'          => 'Felhasználó ügynök',
    'login_help'                => 'Bejelentkezés próbálkozások listája',
    'login_note'                => 'Bejelentkezési megjegyzés',
    'login_note_placeholder'            => "If you do not have a login or have found a device belonging to this company, please call technical support at 888-555-1212. Thank you.",
    'login_note_help'           => 'Opcionálisan tartalmazhat néhány mondatot a bejelentkezési képernyőn, például, hogy segítse az embereket, akik elvesztett vagy ellopott eszközt találtak. Ez a mező elfogad <a href="https://help.github.com/articles/github-flavored-markdown/">Github ízesített markdown</a>-et',
    'login_remote_user_text'    => 'Távoli felhasználói bejelentkezési beállítások',
    'login_remote_user_enabled_text' => 'Bejelentkezés engedélyezése Remote User Header segítségével',
    'login_remote_user_enabled_help' => 'Ez az opció lehetővé teszi a hitelesítést REMOTE_USER fejléc segítségével a "Common Gateway Interface (rfc3875)" szabvány alapján',
    'login_common_disabled_text' => 'Egyéb hitelesítési mechanizmusok letiltása',
    'login_common_disabled_help' => 'Ez a beállítás letiltja a többi hitelesítési mechanizmust. Engedélyezd ezt a lehetőséget, ha biztos, hogy a REMOTE_USER bejelentkezés már működik',
    'login_remote_user_custom_logout_url_text' => 'Egyéni kijelentkezési URL',
    'login_remote_user_custom_logout_url_help' => 'Ha megad itt egy URL-t, a felhasználók a Snipe-IT-ből való kilépéskor át lesznek irányítva a megadott URL-re. Ez hasznos lehet a hitelesítés szolgáltatónál meglévő felhasználói munkamenet megfelelő lezárására.',
    'login_remote_user_header_name_text' => 'Egyedi felhasználónév fejléc',
    'login_remote_user_header_name_help' => 'A megadott fejlécet használja a REMOTE_USER helyett',
    'logo'                    	=> 'logo',
    'logo_print_assets'         => 'Használat nyomtatásnál',
    'logo_print_assets_help'    => 'Arculati elemek használata a nyomtatott eszköz listáknál ',
    'full_multiple_companies_support_help_text' => 'A vállalatoknak a vállalat eszközeihez rendelt felhasználók (köztük az adminisztrátorok) korlátozása.',
    'full_multiple_companies_support_text' => 'Teljes több vállalat támogatása',
    'scope_locations_fmcs_support_text'  => 'Scope Locations with Full Multiple Companies Support',
    'scope_locations_fmcs_support_help_text'  => 'In previous versions, locations were not restricted to a particular company. If this setting is disabled, this preserves backward compatibility with older versions and locations can be used across multiple companies. If this setting is enabled, locations are restricted to their selected company.',
    'show_in_model_list'   => 'Mutassa a modellek lenyíló listájában',
    'optional'					=> 'választható',
    'per_page'                  => 'Eredmények oldalanként',
    'php'                       => 'PHP verzió',
    'php_info'                  => 'PHP info',
    'php_overview'              => 'PHP',
    'php_overview_help'         => 'PHP Rendszer információk',
    'php_gd_info'               => 'A QR-kódok megjelenítéséhez telepíteni kell a php-gd-t, lásd a telepítési utasításokat.',
    'php_gd_warning'            => 'A PHP Image Processing és a GD plugin NEM van telepítve.',
    'pwd_secure_complexity'     => 'Jelszó komplexitás',
    'pwd_secure_complexity_help' => 'Válassza ki a jelszavak összetettségi szabályait, amelyeket érvényesíteni kíván.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'A jelszó nem lehet azonos a keresztnévvel, vezetéknévvel, e-mail címmel és felhasználónévvel',
    'pwd_secure_complexity_letters' => 'Legalább egy betű szükséges',
    'pwd_secure_complexity_numbers' => 'Legalább egy szám szükséges',
    'pwd_secure_complexity_symbols' => 'Legalább egy szimbólum szükséges',
    'pwd_secure_complexity_case_diff' => 'Legalább egy nagy és egy kicsi betű szükséges',
    'pwd_secure_min'            => 'Jelszó minimális karakterek',
    'pwd_secure_min_help'       => 'A legkisebb megengedett érték 8',
    'pwd_secure_uncommon'       => 'A közös jelszavak megakadályozása',
    'pwd_secure_uncommon_help'  => 'Ez megakadályozza a felhasználók számára, hogy közös jelszavakat használjanak fel a leggyakrabban előforduló 10 000 jelszóból.',
    'qr_help'                   => 'Először engedélyezze a QR kódokat, hogy ezt beállítsa',
    'qr_text'                   => 'QR kód szöveg',
    'saml'                      => 'SAML',
    'saml_title'                => 'SAML beállítások frissítése',
    'saml_help'                 => 'SAML beállítások',
    'saml_enabled'              => 'SAML engedélyezve',
    'saml_integration'          => 'SAML integráció',
    'saml_sp_entityid'          => 'Entitás azonosító',
    'saml_sp_acs_url'           => 'Állításfogyasztói szolgáltatás (ACS) URL-címe',
    'saml_sp_sls_url'           => 'Egyszeri kijelentkezési szolgáltatás (SLS) URL címe',
    'saml_sp_x509cert'          => 'Nyilvános tanúsítvány',
    'saml_sp_metadata_url'      => 'Metaadatok hívatkozása',
    'saml_idp_metadata'         => 'SAML IdP Metaadat',
    'saml_idp_metadata_help'    => 'Az IdP metaadatokat URL-cím vagy XML-fájl segítségével adhatja meg.',
    'saml_attr_mapping_username' => 'Attribútum leképezés - Felhasználónév',
    'saml_attr_mapping_username_help' => 'A NameID akkor kerül alkalmazásra, ha az attribútum leképezése nem meghatározott vagy érvénytelen.',
    'saml_forcelogin_label'     => 'Erőltetett SAML bejelentkezés',
    'saml_forcelogin'           => 'A SAML legyen az elsődleges belépési mód',
    'saml_forcelogin_help'      => 'A \'/login?nosaml\' használatával a normál bejelentkezési oldalra juthatsz.',
    'saml_slo_label'            => 'SAML Egyszeri kijelentkezés',
    'saml_slo'                  => 'LogoutRequest küldése az IdP-nek kijelentkezéskor',
    'saml_slo_help'             => 'Ez azt eredményezi, hogy a felhasználó a kijelentkezéskor először az IdP-hez lesz átirányítva. Hagyja bejelölve, ha az IdP nem támogatja megfelelően az SP által kezdeményezett SAML SLO-t.',
    'saml_custom_settings'      => 'SAML egyedi beállítások',
    'saml_custom_settings_help' => 'Az onelogin/php-saml könyvtárhoz további beállításokat adhat meg. Használja saját felelősségére.',
    'saml_download'             => 'Metaadatok letöltése',
    'setting'                   => 'Beállítás',
    'settings'                  => 'Beállítások',
    'show_alerts_in_menu'       => 'Figyelmeztetések megjelenítése a felső menüben',
    'show_archived_in_list'     => 'Archivált eszközök',
    'show_archived_in_list_text'     => 'Mutassa az archivált eszközöket az "összes eszköz" listában',
    'show_assigned_assets'      => 'Eszközökhöz rendelt eszközök megjelenítése',
    'show_assigned_assets_help' => 'Megjeleníti azokat az eszközöket, amelyeket más eszközökhöz rendeltek a Felhasználó megtekintésében -> Eszközök, Felhasználó megtekintő -> Információ -> Minden hozzárendelt és számlán lévő nyomtatás -> Hozzárendelt eszközök megtekintése.',
    'show_images_in_email'     => 'Képek használata az email-ekben',
    'show_images_in_email_help'   => 'Vegye ki a jelölést innen, ha az Ön Snipe-IT alkalmazása VPN mögött, vagy zárt hálózaton található, és a felhasználók a hálózaton kívül nem tudják az emailekben megjeleníteni az alkalmazás által szolgáltatott képeket.',
    'site_name'                 => 'Webhely neve',
    'integrations'               => 'Integrációk',
    'slack'                     => 'Slack',
    'general_webhook'           => 'General Webhook',
    'ms_teams'                  => 'Microsoft Teams',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Test to Save',
    'webhook_title'               => 'Webhook beállítások frissítése',
    'webhook_help'                => 'Integrációs beállítások',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Channel',
    'webhook_endpoint'            => ':app Végpont',
    'webhook_integration'         => ':app Beállítások',
    'webhook_test'                 =>':app integráció tesztelése',
    'webhook_integration_help'    => ':app integration is optional, however the endpoint and channel are required if you wish to use it. To configure :app integration, you must first <a href=":webhook_link" target="_new" rel="noopener">create an incoming webhook</a> on your :app account. Click on the <strong>Test :app Integration</strong> button to confirm your settings are correct before saving. ',
    'webhook_integration_help_button'    => 'Once you have saved your :app information, a test button will appear.',
    'webhook_test_help'           => 'Test whether your :app integration is configured correctly. YOU MUST SAVE YOUR UPDATED :app SETTINGS FIRST.',
    'shortcuts_enabled'         => 'Enable Shortcuts',
    'shortcuts_help_text'       => '<strong>Windows</strong>: Alt + Access key, <strong>Mac</strong>: Control + Option + Access key',
    'snipe_version'  			=> 'Snipe-IT változat',
    'support_footer'            => 'Lábjegyzet linkek támogatása ',
    'support_footer_help'       => 'Adja meg, hogy ki láthassa a Snipe-IT támogatási információ és a felhasználói kézikönyv linkjeit',
    'version_footer'            => 'Verzió a láblécben ',
    'version_footer_help'       => 'Határozza meg, hogy ki láthassa a Snipe-IT verzió és build adatokat.',
    'system'                    => 'Rendszer információ',
    'update'                    => 'Frissítési beállítások',
    'value'                     => 'Érték',
    'brand'                     => 'Branding',
    'brand_help'                => 'Logó, oldal neve',
    'web_brand'                 => 'Weboldalon megjelenő branding típusa',
    'about_settings_title'      => 'A Beállítások részről',
    'about_settings_text'       => 'Ezek a beállítások lehetővé teszik a telepítés egyes szempontjainak testreszabását.',
    'labels_per_page'           => 'Címkék oldalanként',
    'label_dimensions'          => 'Címke méretei (hüvelyk)',
    'next_auto_tag_base'        => 'Következő automatikus növekmény',
    'page_padding'              => 'Oldal margó (hüvelyk)',
    'privacy_policy_link'       => 'Link az Adatkezelési Nyilatkozathoz',
    'privacy_policy'            => 'Adatvédelmi nyilatkozat',
    'privacy_policy_link_help'  => 'Ha elhelyezi ide az Adatkezelési Nyilatkozat URL-jét, akkor a GDPR előírásainak megfelelően egy oda mutató link kerül elhelyezésre az alkalmazás láblécében, valamint minden a rendszer által küldött levélben. ',
    'purge'                     => 'Törölje a törölt rekordokat',
    'purge_deleted'             => 'Törlés törölve ',
    'labels_display_bgutter'    => 'Jelölje le az alsó csatornát',
    'labels_display_sgutter'    => 'Címke oldalsó csatorna',
    'labels_fontsize'           => 'Címke betűmérete',
    'labels_pagewidth'          => 'Címke lap szélessége',
    'labels_pageheight'         => 'Címke lapmagassága',
    'label_gutters'        => 'Címke távolsága (hüvelyk)',
    'page_dimensions'        => 'Oldalméretek (hüvelyk)',
    'label_fields'          => 'Címke látható mezők',
    'inches'        => 'hüvelyk',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link a Snipe-IT-re az e-mailekben',
    'show_url_in_emails_help_text'      => 'Törölje a jelet a jelölőnégyzetből, ha nem kíván visszaváltani a Snipe-IT telepítéséhez az e-mail láblécében. Hasznos ha a legtöbb felhasználó soha nem jelentkezik be.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max thumbnail height',
    'thumbnail_max_h_help'   => 'Maximális képpontos magasság, amelyet a bélyegképek megjelenhetnek a listázási nézetben. Min 25, max 500.',
    'two_factor'        => 'Két tényező hitelesítés',
    'two_factor_secret'        => 'Két faktor kód',
    'two_factor_enrollment'        => 'Két faktoros beiratkozás',
    'two_factor_enabled_text'        => 'Engedélyezze a két tényezőt',
    'two_factor_reset'        => 'Törölje a két faktor titkát',
    'two_factor_reset_help'        => 'A felhasználónak újra fel kell vennie az eszközt a hitelesítő alkalmazásba. Ez hasznos lehet, ha az aktuálisan felvett eszközt elveszette vagy ellopták. ',
    'two_factor_reset_success'          => 'Két tényező eszköz sikeresen visszaáll',
    'two_factor_reset_error'          => 'Két faktoros eszköz visszaállítása sikertelen',
    'two_factor_enabled_warning'        => 'A két tényező bekapcsolása, ha nincs aktuálisan engedélyezve, azonnal kényszeríti Önt arra, hogy hitelesítést végezzen egy Google Auth által beiratkozott eszközzel. Lehetőséged lesz arra, hogy beírja a készüléket, ha nincs beiratkozva.',
    'two_factor_enabled_help'        => 'Ezzel a Google Authenticator használatával kétfaktoros hitelesítést kapcsolhat be.',
    'two_factor_optional'        => 'Szelektív (a felhasználók engedélyezhetik vagy letilthatják, ha megengedettek)',
    'two_factor_required'        => 'Minden felhasználó számára kötelező',
    'two_factor_disabled'        => 'Tiltva',
    'two_factor_enter_code'	=> 'Adja meg a két faktor kódot',
    'two_factor_config_complete'	=> 'Kód küldése',
    'two_factor_enabled_edit_not_allowed' => 'Az adminisztrátor nem teszi lehetővé a beállítás szerkesztését.',
    'two_factor_enrollment_text'	=> "Két tényező hitelesítésre van szükség, de a készülék még nem került bejegyzésre. Nyissa meg a Google Hitelesítő alkalmazást, és szkennelje be az alábbi QR-kódot a készülék regisztrálásához. Miután beírta a készüléket, adja meg az alábbi kódot",
    'require_accept_signature'      => 'Aláírásra van szükség',
    'require_accept_signature_help_text'      => 'Ha engedélyezni szeretné ezt a funkciót, akkor a felhasználóknak fizikailag ki kell jelentkezniük egy eszköz elfogadásáról.',
    'require_checkinout_notes'  => 'Require Notes on Checkin/Checkout',
    'require_checkinout_notes_help_text'    => 'Enabling this feature will require the note fields to be populated when checking in or checking out an asset.',
    'left'        => 'balra',
    'right'        => 'jobb',
    'top'        => 'felső',
    'bottom'        => 'alsó',
    'vertical'        => 'függőleges',
    'horizontal'        => 'vízszintes',
    'unique_serial'                => 'Egyedi sorozatszámok',
    'unique_serial_help_text'                => 'Bejelölés esetén az eszközök széria számának egyedinek kell lenni',
    'zerofill_count'        => 'Az eszközcímkék hossza, beleértve a nem töltöt',
    'username_format_help'   => 'Ezt a beállítást csak akkor használja az importálási folyamat, ha nem adtál meg felhasználónevet, és nekünk kell létrehoznunk neked egy felhasználónevet.',
    'oauth_title' => 'OAuth API beállítások',
    'oauth_clients' => 'OAuth Clients',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth végponti beállítások',
    'oauth_no_clients' => 'You have not created any OAuth clients yet.',
    'oauth_secret' => 'Secret',
    'oauth_authorized_apps' => 'Authorized Applications',
    'oauth_redirect_url' => 'Redirect URL',
    'oauth_name_help' => ' Something your users will recognize and trust.',
    'oauth_scopes' => 'Hatókörök',
    'oauth_callback_url' => 'Your application authorization callback URL.',
    'create_client' => 'Create Client',
    'no_scopes' => 'No scopes',
    'asset_tag_title' => 'Eszközcímke-beállítások frissítése',
    'barcode_title' => 'Vonalkód beállítások frissítése',
    'barcodes' => 'Vonalkódok',
    'barcodes_help_overview' => 'Vonalkód &amp; QR kód beállítások',
    'barcodes_help' => 'Ez megpróbálja törölni a gyorsítótárazott vonalkódokat. Ezt általában csak akkor használja, ha a vonalkód beállításai megváltoztak, vagy ha a Snipe-IT URL címe megváltozott. A vonalkódok a következő eléréskor újra generálásra kerülnek.',
    'barcodes_spinner' => 'Fájlok törlésének kísérlete...',
    'barcode_delete_cache' => 'Vonalkód gyorsítótár törlése',
    'branding_title' => 'Márka beállítások frissítése',
    'general_title' => 'Általános beállítások frissítése',
    'mail_test' => 'Teszt küldése',
    'mail_test_help' => 'Ez megkísérel elküldeni egy tesztlevelet a :replyto címre.',
    'filter_by_keyword' => 'Szűrés beállítási kulcsszó alapján',
    'security' => 'Biztonság',
    'security_title' => 'Biztonsági beállítások frissítése',
    'security_help' => 'Kétfaktoros, jelszavas korlátozások',
    'groups_help' => 'Fiókjogosultsági csoportok',
    'localization' => 'Lokalizáció',
    'localization_title' => 'Lokalizációs beállítások frissítése',
    'localization_help' => 'Nyelv, dátum kijelzés',
    'notifications' => 'Értesítések',
    'notifications_help' => 'E-mail riasztások, audit beállítások',
    'asset_tags_help' => 'Inkrementálás és előtagok',
    'labels' => 'Címkék',
    'labels_title' => 'Címke beállítások frissítése',
    'labels_help' => 'Barcodes &amp; label settings',
    'purge_help' => 'Törölt rekordok kitisztítása',
    'ldap_extension_warning' => 'Úgy tűnik, hogy az LDAP-bővítmény nincs telepítve vagy engedélyezve ezen a kiszolgálón. A beállításokat továbbra is elmentheti, de az LDAP-szinkronizálás vagy a bejelentkezés előtt engedélyeznie kell az LDAP-bővítményt a PHP számára.',
    'ldap_ad' => 'LDAP/AD',
    'ldap_test_label' => 'Test LDAP Sync',
    'ldap_test_login' => ' Test LDAP Login',
    'ldap_username_placeholder' => 'LDAP Username',
    'ldap_password_placeholder' => 'LDAP Password',
    'employee_number' => 'Alkalmazottak száma',
    'create_admin_user' => 'Felhasználó létrehozása ::',
    'create_admin_success' => 'Siker! Az Ön admin felhasználója hozzá lett adva!',
    'create_admin_redirect' => 'Kattintson ide az alkalmazás bejelentkezéshez!',
    'setup_migrations' => 'Adatbázis migrálások ::',
    'setup_no_migrations' => 'Nem volt mit migrálni. Az adatbázis táblái már be voltak állítva!',
    'setup_successful_migrations' => 'Az adatbázis táblái létrehozásra kerültek',
    'setup_migration_output' => 'Migrációs kimenetek:',
    'setup_migration_create_user' => 'Következő: Felhasználó létrehozása',
    'ldap_settings_link' => 'LDAP beállítások oldal',
    'slack_test' => 'Teszt <i class="fab fa-slack"></i> Integráció',
    'status_label_name' => 'Status Label Name',
    'super_admin_only'  => 'Super Admin Only',
    'label2_enable'           => 'New Label Engine',
    'label2_enable_help'      => 'Switch to the new label engine. <b>Note: You will need to save this setting before setting others.</b>',
    'label2_template'         => 'Sablon',
    'label2_template_help'    => 'Select which template to use for label generation',
    'label2_title'            => 'Cím',
    'label2_title_help'       => 'The title to show on labels that support it',
    'label2_title_help_phold' => 'The placeholder <code>{COMPANY}</code> will be replaced with the asset&apos;s company name',
    'label2_asset_logo'       => 'Eszköz logó használata',
    'label2_asset_logo_help'  => 'Use the logo of the asset&apos;s assigned company, rather than the value at <code>:setting_name</code>',
    'label2_1d_type'          => '1D vonalkód típus',
    'label2_1d_type_help'     => '1D vonalkód formátuma',
    'label2_2d_type'          => '2D vonalkód típus',
    'label2_2d_type_help'     => '2D vonalkód formátuma',
    'label2_2d_target'        => '2D Barcode Target',
    'label2_2d_target_help'   => 'The data that will be contained in the 2D barcode',
    'label2_fields'           => 'Mező definíciók',
    'label2_fields_help'      => 'Fields can be added, removed, and reordered in the left column. For each field, multiple options for Label and DataSource can be added, removed, and reordered in the right column.',
    'purge_barcodes' => 'Purge Barcodes',
    'help_asterisk_bold'    => 'Text entered as <code>**text**</code> will be displayed as bold',
    'help_blank_to_use'     => 'Leave blank to use the value from <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> will use the value from <code>:setting_name</code>. <br>Note that the value of the barcodes must comply with the respective barcode spec in order to be successfully generated. Please see <a href="https://snipe-it.readme.io/docs/barcodes">the documentation <i class="fa fa-external-link"></i></a> for more details. ',
    'asset_id'              => 'Asset ID',
    'data'               => 'Data',
    'default'               => 'Alapértelmezés',
    'none'                  => 'Egyik sem',
    'google_callback_help' => 'This should be entered as the callback URL in your Google OAuth app settings in your organization&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">Google developer console <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Google Workspace bejelentkezési beállítások',
    'enable_google_login'  => 'Bejelentkezés engedélyezése Google Workspace -el',
    'enable_google_login_help'  => 'A felhasználók nem kerülnek automatikusan létrehozásra. Léteznie kell felhasználói fióknak itt és a Google Workspace-ben, valamint a felhasználónévnek meg kell egyeznie a Google Workspace -ben megadott email címmel. ',
    'mail_reply_to' => 'Mail Reply-To Address',
    'mail_from' => 'Mail From Address',
    'database_driver' => 'Adatbázis Illesztő',
    'bs_table_storage' => 'Table Storage',
    'timezone' => 'Időzóna',
    'test_mail' => 'Test Mail',
    'profile_edit'          => 'Profil szerkesztése',
    'profile_edit_help'          => 'Allow users to edit their own profiles.',
    'default_avatar' => 'Custom Default Avatar',
    'default_avatar_help' => 'This image will be displayed as a profile if a user does not have a profile photo.',
    'restore_default_avatar' => 'Restore <a href=":default_avatar" data-toggle="lightbox" data-type="image">original system default avatar</a>',
    'restore_default_avatar_help' => '',
    'due_checkin_days' => 'Due For Checkin Warning',
    'due_checkin_days_help' => 'How many days before the expected checkin of an asset should it be listed in the "Due for checkin" page?',
    'no_groups' => 'No groups have been created yet. Visit <code>Admin Settings > Permission Groups</code> to add one.',
    'text' => 'Text',

    'username_formats' => [
        'username_format'		=> 'Felhasználónév formátum',
        'firstname_lastname_format'	=> 'Utónév (jane.smith)',
        'first_name_format'	        => 'First Name (jane)',
        'last_name_format'		=> 'Last Name (doe)',
        'filastname_format'			=> 'First Initial Last Name (jsmith)',
        'lastnamefirstinitial_format' =>  'Last Name First Initial (smithj)',
        'firstname_lastname_underscore_format' => 'First Name Last Name (jane_smith)',
        'firstinitial.lastname' => 'First Initial Last Name (j.smith)',
        'lastname_firstinitial' => 'Last Name First Initial (smith_j)',
        'lastname_dot_firstinitial_format' => 'Last Name First Initial (smith.j)',
        'firstnamelastname'     => 'First Name Last Name (janesmith)',
        'firstnamelastinitial'  => 'First Name Last Initial (janes)',
        'lastnamefirstname'      => 'Last Name.First Name (smith.jane)',
    ],

    'email_formats' => [
        'email_format'			=> 'E-mail formátum',
        'firstname_lastname_format'	=> 'Utónév (jane.smith@example.com)',
        'first_name_format'		=> 'Keresztnév (jane@example.com)',
        'last_name_format'		=> 'Last Name (doe@example.com)',
        'filastname_format'			=> 'Első kezdeti keresztnév (jsmith@example.com)',
        'lastnamefirstinitial_format' =>  'Utónév Keresztnév kezdőbetű (kovacsb@example.com)',
        'firstname_lastname_underscore_format' => 'Keresztnév Vezetéknév (jakab_gipsz@example.com)',
        'firstinitial.lastname' => 'Keresztnév kezdőbetűje majd vezetéknév (j.smith@example.com)',
        'lastname_firstinitial' => 'Vezetéknév majd keresztnév kezdőbetűje (smith_j@example.com)',
        'lastname_dot_firstinitial_format' => 'Last Name First Initial (smith.j@example.com)',
        'firstnamelastname'     => 'Keresztnév majd vezetéknév (janesmith@example.com)',
        'firstnamelastinitial'  => 'Keresztnév majd vezetéknév kezdőbetűje (janes@example.com)',
        'lastnamefirstname'      => 'Last Name.First Name (smith.jane@example.com)',
    ],



    'logo_labels' => [
        'acceptance_pdf_logo'       => 'PDF Logo',
        'email_logo'                => 'Email-ben szereplő logo',
        'label_logo'                => 'Címkéken szereplő logo',
        'logo'                      => 'Site Logo',
        'favicon'                   => 'Favicon',
    ],

    'logo_help' => [
        'email_logo_size'       => 'Négyzet alakú logok jobban néznek ki. ',
    ],

    'logo_option_types' => [
        'text' => 'Text',
        'logo' => 'logo',
        'logo_and_text' => 'Logo and Text',
    ],



    /* Keywords for settings overview help */
    'keywords' => [
        'brand'             => 'lábléc, logó, nyomtatás, téma, megjelenés, fejléc, színek, szín, css',
        'general_settings'  => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula, gravatar, tos, dashboard, privacy',
        'groups'            => 'jogosultságok, jogosultsági csoportok, engedélyezés',
        'labels'            => 'labels, barcodes, barcode, sheets, print, upc, qr, 1d, 2d',
        'localization'      => 'lokalizáció, pénznem, helyi, lokalitás, időzóna, időzóna, nemzetközi, internatinalizáció, nyelv, nyelvek, fordítás',
        'php_overview'      => 'phpinfo, rendszer, információ',
        'purge'             => 'véglegesen törölni',
        'security'          => 'jelszó, jelszavak, követelmények, kétfaktoros, két-faktoros, közös jelszavak, távoli bejelentkezés, kijelentkezés, hitelesítés',
    ],

];
