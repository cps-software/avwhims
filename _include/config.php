<?php

/**********************************************************************
 * Configuration settings as constants that are used in various
 * parts of the AVWHIMS application.
 **********************************************************************/

// MariaDB database - local (localhost)
define('LH_HOSTNAME', 'localhost');
define('LH_USERNAME', 'csylvester');
define('LH_PASSWORD', 'AllieD#1993');
define('LH_DATABASE', 'avwhims');

// MariaDB database - remote (GoDaddy)
define('GD_HOSTNAME', 'localhost');
define('GD_DB_PORT', 3306);
define('GD_USERNAME', 'avdrmsdb');
define('GD_PASSWORD', 'AllieD#1993#Shim#2023');
define('GD_DATABASE', 'avwhims');

// Okta Oauth values for Auth Code flow for registered app (AV WHIMS)
// [To-do: update these values after registering with Okta]
define('OKTA_OAUTH2_ISSUER', 'https://dev-24886101.okta.com/oauth2');
define('OKTA_OAUTH2_CLIENT_ID', '0oafupewz6zoMZvWA5d7');
define('OKTA_OAUTH2_REDIRECT_URI', 'http://localhost/avdrms/_include/sso.php');

// Okta Oauth values for Access and ID Token flow for registered app (AV DRMS)
// [To-do: update these values after registering with Okta]
define('OKTA_OAUTH2_TOKEN_URL', 'https://dev-24886101.okta.com/oauth2/v1/token');
define('OKTA_OAUTH2_CLIENT_SECRET', 'G6snx20X4Fb3E77APkRXjQtVEN_s8MmlJAnECtybsWRgg4E0ZdJRsGdembMtHDPT');

// Security Notice Dialog Values
define('ORGANIZATION_NAME', 'Office of Scientific Intelligence');
define('ORGANIZATION_ACRONYM', 'OSI');
define('ORGANIZATION_MISSION', 'to explore strange new worlds; to seek out new life and new civilizations; to boldly go where no man has gone before.');
