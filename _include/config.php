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
define('OKTA_OAUTH2_ISSUER', 'https://dev-24886101.okta.com/oauth2');
define('OKTA_OAUTH2_CLIENT_ID', '0oagy10kg3X05jfgD5d7');
define('OKTA_OAUTH2_REDIRECT_URI', 'http://localhost/avwhims/_include/sso.php');

// Okta Oauth values for Access and ID Token flow for registered app (AV WHIMS)
define('OKTA_OAUTH2_TOKEN_URL', 'https://dev-24886101.okta.com/oauth2/v1/token');
define('OKTA_OAUTH2_CLIENT_SECRET', 'R-FYrWbr5hNgoZkZQqgkMRgITp2DhiDicdzsibYgB8luIuKgVfYC2iUg_vcb5LwI');

// Lighthouse Provider Directory API
define('LH_API_KEY', 'FU1jrtVhStvahCjqdYTMP1Qt5o1R6R3X');

// Lighthouse Patient Health API (FHIR)
define('PHAPI_OAUTH2_AUTHORIZATION_ENDPOINT', 'https://sandbox-api.va.gov/oauth2/health/v1/authorization');
define('PHAPI_OAUTH2_CLIENT_ID', '0oavb56g5dD3Hn1eK2p7');
define('PHAPI_OAUTH2_CLIENT_SECRET', '1oshJERyKALcWbZtiUmLYEr6OffdUcjmCVPxvgXj8L5KJxNQd8YgDT0RBgi26sqY');
define('PHAPI_OAUTH2_REDIRECT_URI', 'http://localhost/avwhims/_include/phapi.php');
define('PHAPI_OAUTH2_ENVIRONMENT', 'sandbox');

// Lighthouse Clinical Health API (FHIR)
define('CHAPI_OAUTH2_CLIENT_ID', '0oavb56g5dD3Hn1eK2p7');
define('CHAPI_OAUTH2_CLIENT_SECRET', '1oshJERyKALcWbZtiUmLYEr6OffdUcjmCVPxvgXj8L5KJxNQd8YgDT0RBgi26sqY');
define('CHAPI_OAUTH2_REDIRECT_URI', 'http://localhost/avwhims/_include/chapi.php');
define('CHAPI_OAUTH2_ENVIRONMENT', 'sandbox');

// Security Notice Dialog Values
define('ORGANIZATION_NAME', 'Office of Scientific Intelligence');
define('ORGANIZATION_ACRONYM', 'OSI');
define('ORGANIZATION_MISSION', 'to explore strange new worlds; to seek out new life and new civilizations; to boldly go where no man has gone before.');
