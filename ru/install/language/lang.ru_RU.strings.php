<?php return; /* no output */ ?>

ERR_ADMIN_PASS_BLANK: 1CRM admin password cannot be blank.
ERR_CHECKSYS_CALL_TIME: Allow Call Time Pass Reference is On (this should be set to Off in php.ini)
ERR_CHECKSYS_CURL: Not found: 1CRM Scheduler will run with limited functionality.
ERR_CHECKSYS_IMAP:
	Not found: The IMAP libraries are required for inbound Email and Email Campaign support; neither will be fully functional
ERR_CHECKSYS_MSSQL_MQGPC: Magic Quotes GPC cannot be turned "On" when using MS SQL Server.
ERR_CHECKSYS_MBSTRING:
	Not found: 1CRM will not be able to process multi-byte characters.  This will impact receiving emails in character sets other than UTF-8.
ERR_CHECKSYS_MEM_LIMIT_1: " $memory_limit (Set this to "
ERR_CHECKSYS_MEM_LIMIT_2: M or larger in your php.ini file)
ERR_CHECKSYS_MYSQL_VERSION: Minimum Version 5.0.0 - Found
ERR_CHECKSYS_NO_SESSIONS:
	Failed to write and read session variables.  Unable to proceed with the installation.
ERR_CHECKSYS_NOT_VALID_DIR: Not A Valid Directory
ERR_CHECKSYS_NOT_WRITABLE: Error: Not Writable
ERR_CHECKSYS_PHP_INVALID_VER: Invalid PHP Version Installed: (ver
ERR_CHECKSYS_PHP_JSON: Not found: The PHP-JSON module may improve performance.
ERR_CHECKSYS_PHP_JSON_VERSION:
	Only PHP-JSON version 1.1.1 is supported in 1CRM at this time.  Please up/down-grade your version. Slower PHP code will be used for AJAX-style interactions.
ERR_CHECKSYS_PHP_UNSUPPORTED: Unsupported PHP Version Installed (ver
ERR_CHECKSYS_SAFE_MODE: Safe Mode is On (you may wish to disable in php.ini)
ERR_CHECKSYS_ZLIB: Not Found: 1CRM will be much more responsive with zlib compression enabled
ERR_CHECKSYS_ZIP: Not Found: ZIP extension is required
ERR_DB_ADMIN: "Database admin user name and/or password is invalid (Error "
ERR_DB_EXISTS_NOT: Database specified does not exist.
ERR_DB_EXISTS_WITH_CONFIG:
	Database already exists with config data.  To run an install with the chosen database, please re-run the install and choose: "Drop and recreate existing 1CRM tables?"  To upgrade, use the Upgrade Wizard in the Admin Console.
ERR_DB_EXISTS: Database name already exists--cannot create another one with the same name.
ERR_DB_HOSTNAME: Host name cannot be blank.
ERR_DB_INVALID: Invalid database type selected.
ERR_DB_LOGIN_FAILURE_MYSQL: "1CRM database user name and/or password is invalid (Error "
ERR_DB_LOGIN_FAILURE_MSSQL: 1CRM database user name and/or password is invalid.
ERR_DB_MYSQL_VERSION1: "MySQL version "
ERR_DB_MYSQL_VERSION2: " is not supported.  Only MySQL {VERSION} and higher is supported."
ERR_DB_NAME: Database name cannot be blank.
ERR_DB_NAME2: Database name cannot contain a '\', '/', or '.'
ERR_DB_PASSWORD: Passwords for 1CRM do not match.
ERR_DB_PRIV_USER: Database admin user name is required.
ERR_DB_USER_EXISTS:
	User name for 1CRM already exists--cannot create another one with the same name.
ERR_DB_USER: User name for 1CRM cannot be blank.
ERR_DBCONF_VALIDATION: Please fix the following errors before proceeding
ERR_ERROR_GENERAL: The following errors were encountered
ERR_LANG_CANNOT_DELETE_FILE: Cannot delete file
ERR_LANG_MISSING_FILE: Cannot find file
ERR_LANG_NO_LANG_FILE: No language pack file found at include/language inside
ERR_LANG_UPLOAD_1: There was a problem with your upload.  Please try again.
ERR_LANG_UPLOAD_2: Language Packs must be ZIP archives.
ERR_LANG_UPLOAD_3: PHP could not move the temp file to the upgrade directory.
ERR_LICENSE_MISSING: Missing Required Fields
ERR_LICENSE_NOT_FOUND: License file not found!
ERR_LOG_DIRECTORY_NOT_EXISTS: Log directory provided is not a valid directory.
ERR_LOG_DIRECTORY_NOT_WRITABLE: Log directory provided is not a writable directory.
ERR_LOG_DIRECTORY_REQUIRED: Log directory is required if you wish to specify your own.
ERR_NO_DIRECT_SCRIPT: Unable to process script directly.
ERR_NO_SINGLE_QUOTE: "Cannot use the single quotation mark for "
ERR_PASSWORD_MISMATCH: Passwords for 1CRM admin do not match.
ERR_PERFORM_CONFIG_PHP_1: Cannot write to the application config file.
ERR_PERFORM_CONFIG_PHP_2:
	You can continue this installation by manually creating the config.php file and pasting the configuration information below into the config.php file.  However, you <strong>must </strong>create the config.php file before you continue to the next step.
ERR_PERFORM_CONFIG_PHP_3: Did you remember to create the config.php file?
ERR_PERFORM_CONFIG_PHP_4: Warning: Could not write to the application config file.  Please ensure it exists.
ERR_PERFORM_HTACCESS_1: "Cannot write to the "
ERR_PERFORM_HTACCESS_2: " file."
ERR_PERFORM_HTACCESS_3:
	If you want to secure your log file from being accessible via browser, create an .htaccess file in your log directory with the line
ERR_PERFORM_NO_TCPIP:
	<b>We could not detect an internet connection.</b> When you do have a connection, please visit <a href=\"http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register\">http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a> to register with SugarCRM. By letting us know a little bit about how your company plans to use SugarCRM, we can ensure we are always delivering the right application for your business needs.
ERR_SESSION_DIRECTORY_NOT_EXISTS: Session directory provided is not a valid directory.
ERR_SESSION_DIRECTORY: Session directory provided is not a writable directory.
ERR_SESSION_PATH: Session path is required if you wish to specify your own.
ERR_SI_NO_CONFIG:
	You did not include config_si.php in the document root, or you did not define $sugar_config_si in config.php
ERR_SITE_GUID: Application ID is required if you wish to specify your own.
ERR_UPLOAD_MAX_FILESIZE:
	Warning: Your PHP configuration must be changed to allow files of at least 10MB to be uploaded.
ERR_URL_BLANK: URL cannot be blank.
ERR_UW_NO_UPDATE_RECORD: Could not locate installation record of
ERROR_FLAVOR_INCOMPATIBLE: The uploaded file is not compatible with this flavor of 1CRM
ERROR_LICENSE_EXPIRED: "Error: Your license expired "
ERROR_LICENSE_EXPIRED2:
	" day(s) ago.   Please go to the <a href='index.php?action=LicenseSettings&module=Administration'>\"License Management\"</a>  in the Admin screen to enter your new license key.  If you do not enter a new license key within 30 days of your license key expiration, you will no longer be able to log into this application."
ERROR_MANIFEST_TYPE: Manifest file must specify the package type.
ERROR_PACKAGE_TYPE: Manifest file specifies an unrecognized package type
ERROR_VALIDATION_EXPIRED: "Error: Your validation key expired "
ERROR_VALIDATION_EXPIRED2:
	" day(s) ago.   Please go to the <a href='index.php?action=LicenseSettings&module=Administration'>\"License Management\"</a> in the Admin screen to enter your new validation key.  If you do not enter a new validation key within 30 days of your validation key expiration, you will no longer be able to log into this application."
ERROR_VERSION_INCOMPATIBLE: The uploaded file is not compatible with this version of 1CRM
LBL_BACK: Back
LBL_CHECKSYS_1:
	In order for your 1CRM installation to function properly, please ensure all of the system check items listed below are green. If any are red, please take the necessary steps to fix them.
LBL_CHECKSYS_CACHE: Writable Cache Directories
LBL_CHECKSYS_CALL_TIME: PHP Allow Call Time Pass Reference Turned Off
LBL_CHECKSYS_COMPONENT: Component
LBL_CHECKSYS_COMPONENT_OPTIONAL: Optional Components
LBL_CHECKSYS_CONFIG: "Writable 1CRM Configuration File "
LBL_CHECKSYS_CURL: cURL Module
LBL_CHECKSYS_CUSTOM: Writable Custom Directory
LBL_CHECKSYS_DATA: Writable Data Sub-Directories
LBL_CHECKSYS_IMAP: IMAP Module
LBL_CHECKSYS_MQGPC: Magic Quotes GPC
LBL_CHECKSYS_MBSTRING: Multibyte String Support
LBL_CHECKSYS_MEM_OK: OK (No Limit)
LBL_CHECKSYS_MEM_UNLIMITED: OK (Unlimited)
LBL_CHECKSYS_MEM: "PHP Memory Limit >= "
LBL_CHECKSYS_MODULE: Writable Modules Sub-Directories and Files
LBL_CHECKSYS_MYSQL_VERSION: MySQL Version
LBL_CHECKSYS_NOT_AVAILABLE: Not Available
LBL_CHECKSYS_OK: OK
LBL_CHECKSYS_PHP_INI: <b>Note:</b> Your php configuration file (php.ini) is located at
LBL_CHECKSYS_PHP_JSON: PHP-JSON Module
LBL_CHECKSYS_PHP_OK: "OK (ver "
LBL_CHECKSYS_PHPVER: PHP Version
LBL_CHECKSYS_RECHECK: Re-check
LBL_CHECKSYS_SAFE_MODE: PHP Safe Mode Turned Off
LBL_CHECKSYS_SESSION: Writable Session Path (
LBL_CHECKSYS_STATUS: Status
LBL_CHECKSYS_TITLE: System Acceptance Check
LBL_CHECKSYS_VER: "Found: (ver "
LBL_CHECKSYS_XML: XML Parsing
LBL_CHECKSYS_ZLIB: ZLIB Compression Module
LBL_CHECKSYS_ZIP: ZIP Archiving Module
LBL_CLOSE: Close
LBL_CONFIRM_BE_CREATED: be created
LBL_CONFIRM_DB_TYPE: Database Type
LBL_CONFIRM_DIRECTIONS:
	Please confirm the settings below.  If you would like to change any of the values, click "Back" to edit.  Otherwise, click "Next" to start the installation.
LBL_CONFIRM_LICENSE_TITLE: License Information
LBL_CONFIRM_NOT: not
LBL_CONFIRM_TITLE: Confirm Settings
LBL_CONFIRM_WILL: will
LBL_DBCONF_CREATE_DB: Create Database
LBL_DBCONF_CREATE_USER: Create User
LBL_DBCONF_DB_DROP_CREATE_WARN:
	Caution: All 1CRM data will be erased<br>if this box is checked.
LBL_DBCONF_DB_DROP_CREATE: Drop and Recreate Existing 1CRM tables?
LBL_DBCONF_DB_NAME: Database Name
LBL_DBCONF_DB_PASSWORD: Database Password
LBL_DBCONF_DB_PASSWORD2: Re-enter Database Password
LBL_DBCONF_DB_USER: Database Username
LBL_DBCONF_DEMO_DATA: Populate Database with Demo Data?
LBL_DBCONF_HOST_NAME: Host Name / Host Instance
LBL_DBCONF_INSTRUCTIONS:
	Please enter your database configuration information below. If you are unsure of what to fill in, we suggest that you use the default values.
LBL_DBCONF_MB_DEMO_DATA: Use multi-byte text in demo data?
LBL_DBCONF_PRIV_PASS: Privileged Database User Password
LBL_DBCONF_PRIV_USER_2: Database Account Above Is a Privileged User?
LBL_DBCONF_PRIV_USER_DIRECTIONS:
	This privileged database user must have the proper permissions to create a database, drop/create tables, and create a user.  This privileged database user will only be used to perform these tasks as needed during the installation process.  You may also use the same database user as above if that user has sufficient privileges.
LBL_DBCONF_PRIV_USER: Privileged Database User Name
LBL_DBCONF_TITLE: Database Configuration
LBL_DISABLED_DESCRIPTION_2:
	After this change has been made, you may click the "Retry" button below to begin your installation.  <i>After the installation is complete, you will want to change the value for 'installer_locked' to 'true'.</i>
LBL_DISABLED_DESCRIPTION:
	The installer has already been run once.  As a safety measure, it has been disabled from running a second time.  If you are absolutely sure you want to run it again, please go to your application config file ({CONFIG_PATH}) and locate (or add) a variable in the 'site' section called 'installer_locked' and set it to 'false'.  The line should look like this:
LBL_DISABLED_TITLE_2: 1CRM Installation has been Disabled
LBL_DISABLED_TITLE: 1CRM Installation Disabled
LBL_DISABLED_TITLE_SHORT: Installer Locked
LBL_CACHEDIR_TITLE: System Cache Not Writable
LBL_CACHEDIR_DESCRIPTION:
	The system cache directory is not writable by this application. Please ensure that the directory below and any files contained within can be accessed and modified by the web server:
LBL_ERROR_TITLE_2: 1CRM Installation Cannot Proceed
LBL_ERROR_TITLE: 1CRM Installation Cannot Proceed
LBL_EMAIL_CHARSET_DESC:
	Set this to the character set most commonly used in your locale (UTF-8 for best compatibility)
LBL_EMAIL_CHARSET_TITLE: Outbound Email Character Set
LBL_HELP: Help
LBL_LANG_1:
	If you would like to install a language pack in addition to the ones provided, please do so below.  Otherwise, click "Start" to begin the installation process.  Language packs can also added or removed on the Upgrades &amp; Customization page at a later time.
LBL_LANG_BUTTON_COMMIT: Install
LBL_LANG_BUTTON_REMOVE: Remove
LBL_LANG_BUTTON_UNINSTALL: Uninstall
LBL_LANG_BUTTON_UPLOAD: Upload
LBL_LANG_NO_PACKS: none
LBL_LANG_PACK_INSTALLED: The following language packs have been installed
LBL_LANG_PACK_READY: The following language packs are ready to be installed
LBL_LANG_SUCCESS: The language pack was successfully uploaded.
LBL_LANG_TITLE: Language Pack
LBL_LANG_UPLOAD: Upload a language pack
LBL_LICENSE_ACCEPTANCE: License Acceptance
LBL_LICENSE_DIRECTIONS: If you have your license information, please enter it in the fields below.
LBL_LICENSE_DOWNLOAD_KEY: Download Key
LBL_LICENSE_EXPIRY: Expiration Date
LBL_LICENSE_I_ACCEPT: I Accept
LBL_LICENSE_NUM_USERS: Number of Users
LBL_LICENSE_OC_DIRECTIONS: Please enter the number of purchased offline clients.
LBL_LICENSE_OC_NUM: Number of Offline Client Licenses
LBL_LICENSE_OC: Offline Client Licenses
LBL_LICENSE_PRINTABLE: " Printable View "
LBL_LICENSE_TITLE_2: 1CRM System License
LBL_LICENSE_TITLE: License Information
LBL_LICENSE_USERS: Licensed Users
LBL_LOCALE_CURRENCY: Currency Settings
LBL_LOCALE_CURR_DEFAULT: Default Currency
LBL_LOCALE_CURR_SYMBOL: Currency Symbol
LBL_LOCALE_CURR_ISO: Currency Code (ISO 4217)
LBL_LOCALE_CURR_EXAMPLE: Example
LBL_LOCALE_CURR_SIG_DIGITS: Decimal Places
LBL_LOCALE_DATEF: Default Date Format
LBL_LOCALE_DESC: Adjust your 1CRM Locale settings below.
LBL_LOCALE_EXPORT: Import/Export Character Encoding
LBL_LOCALE_EXPORT_DELIMITER: Export (.csv) Delimiter
LBL_LOCALE_EXPORT_FORMAT: Default List Export Format
LBL_LOCALE_EXPORT_TITLE: Export Settings
LBL_LOCALE_LANG: Default Language
LBL_LOCALE_NAMEF: Default Name Format
LBL_LOCALE_NAMEF_DESC: "\"s\" Salutation<br />\"f\" First Name<br />\"l\" Last Name"
LBL_LOCALE_NAME_FIRST: David
LBL_LOCALE_NAME_LAST: Livingstone
LBL_LOCALE_NAME_SALUTATION: Dr.
LBL_LOCALE_TIMEF: Default Time Format
LBL_LOCALE_TITLE: Locale Settings
LBL_LOCALE_UI: User Interface
LBL_LOCALE_ADDRESS_FORMAT: Default Address Format
LBL_LOCALE_NUMBER_FORMAT: Default Number Format
LBL_ML_ACTION: Action
LBL_ML_DESCRIPTION: Description
LBL_ML_INSTALLED: Date Installed
LBL_ML_NAME: Name
LBL_ML_PUBLISHED: Date Published
LBL_ML_TYPE: Type
LBL_ML_UNINSTALLABLE: Uninstallable
LBL_ML_VERSION: Version
LBL_MSSQL: SQL Server
LBL_MYSQL: MySQL
LBL_NEXT: Next
LBL_NO: No
LBL_ORACLE: Oracle
LBL_PERFORM_ADMIN_PASSWORD: Setting site admin password
LBL_PERFORM_AUDIT_TABLE: "audit table / "
LBL_PERFORM_CONFIG_PHP: Creating 1CRM configuration file
LBL_PERFORM_CREATE_DB_1: "Creating the database "
LBL_PERFORM_CREATE_DB_2: " on "
LBL_PERFORM_CREATE_DB_USER: Creating the Database username and password...
LBL_PERFORM_CREATE_DEFAULT: Creating default 1CRM data
LBL_PERFORM_CREATE_LOCALHOST: Creating the Database username and password for localhost...
LBL_PERFORM_CREATE_RELATIONSHIPS: Creating 1CRM relationship tables
LBL_PERFORM_CREATING: "creating / "
LBL_PERFORM_DEFAULT_REPORTS: Creating default reports
LBL_PERFORM_DEFAULT_SCHEDULER: Creating default scheduler jobs
LBL_PERFORM_DEFAULT_SETTINGS: Inserting default settings
LBL_PERFORM_DEFAULT_USERS: Creating default users
LBL_PERFORM_DEMO_DATA: Populating the database tables with demo data (this may take a little while)...
LBL_PERFORM_DONE: done
LBL_PERFORM_DROPPING: "dropping / "
LBL_PERFORM_FINISH: Finish
LBL_PERFORM_LICENSE_SETTINGS: Updating license information
LBL_PERFORM_OUTRO_1: "The setup of Sugar "
LBL_PERFORM_OUTRO_2: " is now complete."
LBL_PERFORM_OUTRO_3: Total time
LBL_PERFORM_OUTRO_4: " seconds."
LBL_PERFORM_OUTRO_5: Approximate memory used
LBL_PERFORM_OUTRO_6: " bytes."
LBL_PERFORM_OUTRO_7: Your system is now installed and configured for use.
LBL_PERFORM_REL_META: "relationship meta ... "
LBL_PERFORM_SUCCESS: Success!
LBL_PERFORM_TABLES: Creating 1CRM application tables, audit tables, and relationship metadata
LBL_PERFORM_TITLE: Perform Setup
LBL_PRINT: Print
LBL_REG_CONF_1:
	Please take a moment to register with SugarCRM. By letting us know a little bit about how your company plans to use SugarCRM, we can ensure we are always delivering the right product for your business needs.
LBL_REG_CONF_2:
	Your name and email address are the only required fields for registration. All other fields are optional, but very helpful. We do not sell, rent, share, or otherwise distribute the information collected here to third parties.
LBL_REG_CONF_3:
	Thank you for registering. Click on the Finish button to login to SugarCRM. You will need to log in for the first time using the username "admin" and the password you entered in step 2.
LBL_REG_TITLE: Registration
LBL_REQUIRED: * Required field
LBL_SITECFG_ADMIN_PASS_2: Re-enter 1CRM <em>Admin</em> Password
LBL_SITECFG_ADMIN_PASS_WARN: Caution: This will override the admin password of any previous installation.
LBL_SITECFG_ADMIN_PASS: 1CRM <em>Admin</em> Password
LBL_SITECFG_APP_ID: Application ID
LBL_SITECFG_CUSTOM_ID_DIRECTIONS:
	Override the auto-generated application ID that prevents sessions from one instance of 1CRM from being used on another instance.  If you have a cluster of 1CRM installations, they all must share the same application ID.
LBL_SITECFG_CUSTOM_ID: Provide Your Own Application ID
LBL_SITECFG_CUSTOM_LOG_DIRECTIONS:
	Override the default directory and filename used by the 1CRM system log.  No matter where the log file resides, access to it via browser will be restricted via an .htaccess redirect.
LBL_SITECFG_CUSTOM_LOG: Use a Custom Log File
LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS:
	Provide a secure folder for storing 1CRM session information to prevent session data from being vulnerable on shared servers.
LBL_SITECFG_CUSTOM_SESSION: Use a Custom Session Directory for 1CRM
LBL_SITECFG_DIRECTIONS:
	Please enter your site configuration information below. If you are unsure of the fields, we suggest that you use the default values.
LBL_SITECFG_FIX_ERRORS: Please fix the following errors before proceeding
LBL_SITECFG_LOG_DIR: Log Directory
LBL_SITECFG_SESSION_PATH: Path to Session Directory<br>(must be writable)
LBL_SITECFG_SITE_SECURITY: Advanced Site Security
LBL_SITECFG_SUGAR_UP_DIRECTIONS:
	If checked, the system will periodically check to see if updated versions of the application are available.
LBL_SITECFG_SUGAR_UP: Automatically Check For Updates?
LBL_SITECFG_SUGAR_UPDATES: 1CRM Updates Config
LBL_SITECFG_TITLE: Site Configuration
LBL_SITECFG_URL: URL of 1CRM Instance
LBL_SITECFG_USE_DEFAULTS: Use Defaults?
LBL_SITECFG_ANONSTATS: Send Anonymous Usage Statistics?
LBL_SITECFG_ANONSTATS_DIRECTIONS:
	If checked, Sugar will send anonymous statistics about your installation to SugarCRM Inc. every time your system checks for new versions. This information will help us better understand how the application is used and guide improvements to the product.
LBL_START: Start
LBL_STEP: "Step "
LBL_TITLE_WELCOME: Welcome to 1CRM Professional
LBL_WELCOME_1:
	This installer creates the 1CRM database tables and sets the configuration variables that you need to start. The entire process should take about ten minutes.
LBL_WELCOME_2:
	For installation help, please read the <a href="{SUPPORT_GUIDE}" target="_blank">Implementation Guide</a>. If your problem is not covered by the guide please contact <a href="mailto:{SUPPORT_EMAIL}">{SUPPORT_EMAIL}</a>.
LBL_WELCOME_CHOOSE_LANGUAGE: Choose your language
LBL_WELCOME_SETUP_WIZARD: Setup Wizard
LBL_WELCOME_TITLE_WELCOME: "Welcome to the Setup Wizard for<br>1CRM Professional "
LBL_WELCOME_TITLE: 1CRM Setup Wizard
LBL_WIZARD_TITLE: "1CRM Setup Wizard: Step "
LBL_YES: Yes
LBL_OOTB_WORKFLOW: Process Workflow Tasks
LBL_OOTB_REPORTS: Run Report Generation Scheduled Tasks
LBL_OOTB_IE: Check Inbound Mailboxes
LBL_OOTB_BOUNCE: Run Nightly Process Bounced Campaign Emails
LBL_OOTB_CAMPAIGN: Run Nightly Mass Email Campaigns
LBL_OOTB_PRUNE: Prune Database on 1st of Month
LBL_SESSION_ERR_DESCRIPTION:
	1CRM relies upon PHP sessions to store important information while connected to this web server.  Your PHP installation does not have the Session information correctly configured.
	<br><br>A common misconfiguration is that the <b>'session.save_path'</b> directive is not pointing to a valid directory.<br>
	<br> Please correct your <a target=_new href='http://php.net/manual/en/ref.session.php'>PHP configuration</a> in the php.ini file located here below.
LBL_SESSION_ERR_TITLE: PHP Sessions Configuration Error
ERR_CHECKSYS_MEM_LIMIT_0: Warning
LBL_PATCHES_TITLE: Install Latest Patches
LBL_PATCH_1: If you would like to skip this step please click the Next button below.
LBL_PATCH_TITLE: System Patch
LBL_PATCH_READY: The following patch(es) are ready to be installed.
LBL_SYSTEM_NAME: System Name
LBL_SYSTEM_NAME_INFO:
	This will be displayed in the Title Bar of users who visit this SugarCRM installation
LBL_REQUIRED_SYSTEM_NAME: System Name cannot be blank
LBL_PATCH_UPLOAD: Upload a Patch
LBL_DISABLED_HELP:
	<p>For installation help, please read the <a href="{SUPPORT_GUIDE}" target="_blank">Implementation Guide</a>. If your problem is not covered by the guide please contact <a href="mailto:{SUPPORT_EMAIL}">{SUPPORT_EMAIL}</a>.
LBL_CREATE_DEFAULT_CURRENCIES: Creating default currencies
LBL_PERFORM_POST_INSTALL: Performing post-install actions
LBL_PERFORM_PRE_INSTALL: Performing pre-install actions
LBL_CREATE_DEFAULT_BOOKING: Creating default booking categories
LBL_CREATE_DEFAULT_SCHEDULES: Creating default schedules
LBL_CREATE_DEFAULT_DASHBOARDS: Creating default dashboards
LBL_CREATE_DEFAULT_REPORTS: Creating default reports
LBL_SCAN_REPORTS: Scanning report templates
LBL_GROUP_EMAIL_FOLDERS: Creating group email folders
LBL_SITECFG_LOG_FILE: Log Filename
LBL_INSTALLATION_PROCEEDING:
	Installation is proceeding... the output will appear below once it is complete. Please wait.
LBL_SERVER_TIMEZONE: Server Timezone
LBL_POPULATE_FEEDS: Populating default RSS feeds
LBL_CREATE_PDF_TEMPLATES: Creating default PDF Forms
LBL_CREATE_EMPLOYEES: Creating sample employees
LBL_CREATE_SAMPLE_EMAILS: Creating sample emails
LBL_CREATE_SAMPLE_MEETINGS: Creating sample meetings
LBL_CREATE_SAMPLE_TASKS: Creating sample tasks
LBL_CREATE_SAMPLE_LEADS: Creating sample leads
LBL_CREATE_SAMPLE_PROJECTS: Creating sample projects
LBL_CREATE_SAMPLE_OPPS: Creating sample opportunities
LBL_CREATE_SAMPLE_CONTACTS: Creating sample contacts
LBL_CREATE_SAMPLE_CASES: Creating sample cases
LBL_CREATE_SAMPLE_NOTES: Creating sample notes
LBL_CREATE_SAMPLE_ACCOUNTS: Creating sample accounts
LBL_CREATE_SAMPLE_BUGS: Creating sample bugs
LBL_CREATE_SAMPLE_DOCUMENTS: Creating sample documents (if available)
LBL_CREATE_SAMPLE_PORTALS: Creating sample portals
LBL_CREATE_SAMPLE_TAXES: Creating sample taxes
LBL_CREATE_SAMPLE_DISCOUNTS: Creating sample discounts
LBL_CREATE_SAMPLE_PROVIDERS: Creating sample shipping providers
LBL_ADD_RSS_FEEDS: Adding RSS feeds to favorites
LBL_CREATE_SAMPLE_PRODUCTS: Creating sample products and service contracts
LBL_CREATE_SAMPLE_RESOURCES: Creating sample resources
LBL_CREATE_SAMPLE_CALLS: Creating sample calls
LBL_CREATE_SAMPLE_QUOTES: Creating sample quotes, invoices and payments
LBL_CREATE_SAMPLE_MONTHLY_SERVICES: Creating sample recurring services
LBL_FINISH: Finish
ERR_CHECKSYS_DOM: Not found: The DOM module is required for PDF printing
LBL_CHECKSYS_DOM: DOM Module
ERR_CHECKSYS_GD: Not found: The GD module is required for resizing images
ERR_CHECKSYS_GD_FT: GD is compiled without FreeType support<br>(--with-freetype-dir=DIR)
LBL_CHECKSYS_GD: GD Module
ERR_CHECKSYS_PHP_UNSUPPORTED_BUG: Buggy PHP Version Installed (ver
ERR_CHECKSYS_PHP_DEPRECATED: Deprecated PHP Version Installed (ver
ERR_CHECKSYS_PHP_UNTESTED: Untested PHP Version Installed (ver
LBL_CHECKSYS_EXT_CACHE: External memory cache (APC, Zend)
ERR_CHECKSYS_EXT_CACHE: None detected; installing a memory cache can substantially increase performance
ERR_CHECKSYS_SOAP: Not found: The SOAP module is required for external application interfaces
LBL_CHECKSYS_SOAP: SOAP Module
LBL_LOCALE_EXPORT_FOR: (for Email, vCard, data import/export)
LBL_CONFIRM_MULTIBYTE: Multibyte
LBL_CHECKSYS_DB_MYSQL: MySQL Client Library
LBL_PERFORM_INPROGRESS: " &#8230;"
LBL_PERFORM_CONNECT: "Connecting to server &#8230;"
LBL_ACCOUNT_NAME_FORMAT: "[Account Name]"
LBL_CONTACT_NAME_FORMAT: "[Contact Name]"
LBL_STREET_FORMAT: "[Street]"
LBL_CITY_FORMAT: "[City]"
LBL_STATE_FORMAT: "[State]"
LBL_POSTAL_CODE_FORMAT: "[Postal Code]"
LBL_COUNTRY_FORMAT: "[Country]"
LBL_COMPANY_NAME_FORMAT: "[Company Name]"
LBL_PHONE_NUMBER_FORMAT: "[Phone Number]"
LBL_FAX_NUMBER_FORMAT: "[Fax Number]"
LBL_CHECK_UNCHECK: Check/Uncheck All
address_format_names_dom
	Britain: Britain/US/Canada
	France: Europe 1 (Contact first)
	Germany: Europe 2 (Account first)
	Japan: Japan
	Switzerland: Switzerland
LBL_DONE: done
LBL_DEMO_USERS: Create Sample Users and Employees
LBL_DEMO_ACCOUNTS: Create Sample Accounts
LBL_DEMO_CONTACTS: Create Sample Contacts
LBL_DEMO_OPPS: Create Sample Opportunities
LBL_DEMO_CASES: Create Sample Cases
LBL_DEMO_CALLS: Create Sample Calls
LBL_DEMO_MEETINGS: Create Sample Meetings
LBL_DEMO_TASKS: Create Sample Tasks
LBL_DEMO_NOTES: Create Sample Notes
LBL_DEMO_EMAILS: Create Sample Emails
LBL_DEMO_PROJECTS: Create Sample Projects
LBL_DEMO_CONTRACTS: Create Sample Service Contracts
LBL_DEMO_MONTHLY_SERVICES: Create Sample Recurring Services
LBL_DEMO_EXPENSE_REPORTS: Create Sample Expense Reports
LBL_DEMO_BUGS: Create Sample Software Bugs
LBL_DEMO_DOCUMENTS: Create Sample Documents
LBL_DEMO_PORTALS: Create Sample Portals
LBL_DEMO_FEEDS: Create Sample Feeds
LBL_DEMO_PRODUCTS: Create Sample Products
LBL_DEMO_ASSETS: Create Sample Assets
LBL_DEMO_TAXES: Create Sample Taxes
LBL_DEMO_DISCOUNTS: Create Sample Discounts
LBL_DEMO_PROVIDERS: Create Sample Shipping Providers
LBL_DEMO_QUOTES: Create Sample Quotes
LBL_DEMO_INVOICES: Create Sample Invoices
LBL_DEMO_SO: Create Sample Sales Orders
LBL_DEMO_PO: Create Sample Purchase Orders
LBL_DEMO_RESOURCES: Create Sample Resources
LBL_DEMO_LEADS: Create Sample Leads
LBL_DEMO_BILLS: Create Sample Bills
LBL_DEMOCONF_TITLE: Demo Data Configuration
LBL_DEMOSETUP_TITLE: Demo Data Installation
LBL_DEMOSETUP_CLI: Installing Demo Data
LBL_SETUP_CLI: Installing System
LBL_COMPLETE_CLI: Installation Complete
LBL_UPLOADED_LANGUAGES: Uploaded language packs
LBL_INSTALLED_LANGUAGES: Installed language packs
LBL_LPACK_NAME: Name
LBL_LPACK_VERSION: Version
LBL_LPACK_INSTALLED: Installed
LBL_LPACK_PUBLISHED: Published
LBL_LPACK_AUTHOR: Author
LBL_LPACK_ACTION: Action
LBL_LPACK_INSTALL: Install
LBL_LPACK_DELETE: Remove
LBL_LPACK_UNINSTALL: Uninstall
LBL_AUTO_INSTALL_TITLE: Automatic Installer
LBL_CONFIG_FILE: Installer Config File (optional)
UPLOAD_ERR_INI_SIZE: Package size exceeds maximum size specified in php.ini file
UPLOAD_ERR_FORM_SIZE: Package size exceeds maximum allowed size
UPLOAD_ERR_PARTIAL: Package file upload error
UPLOAD_ERR_NO_TMP_DIR: No temporary directory for uploaded file. Please check your PHP configuration
UPLOAD_ERR_CANT_WRITE: Cannot write temporary uploaded file
UPLOAD_ERR_EXTENSION: The filename extension is prohibited by PHP configuration
ERR_NOT_ZIP: Uploaded file should have a .zip filename extension
ERR_CANT_MOVE: Failed to move temporary file to destination directory
LBL_SAVE_CONFIG: Save Installer Configuration
ERR_CANT_OPEN_ZIP: Unable to open ZIP file
ERR_CANT_CREATE_ZIP_CONTENT_DIR: Failed to create directory for unzipping config file
ERR_CANT_UNZIP_CONFIG: Failed to unzip config file
ERR_CANT_PARSE_CONFIG: Error parsing configuration file
ERR_INVALID_CONFIG: Config file is not valid
LBL_DOWNLOAD_CONFIG: Download Installer Config File

