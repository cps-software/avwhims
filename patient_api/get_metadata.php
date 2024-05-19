<?php

/************************************************************************
 * Patient Health API (FHIR) Resource: Patient Health Metadata
 ************************************************************************/

function get_metadata()
{
  include '../_include/config.php';

  define('PHAPI_BASE_URL', 'https://api.va.gov/internal/docs/fhir/v0-r4/openapi.json');
  define('HEADER', ['Content-Type: text/html']); // not sure if this (or json type) is required

  $full_url = PHAPI_BASE_URL;

  // initiate a curl session and return a handle to the session
  $ch = curl_init();

  //set a few curl options using an associative array
  curl_setopt_array($ch, [
    CURLOPT_URL => $full_url,
    CURLOPT_HTTPHEADER => HEADER,
    CURLOPT_RETURNTRANSFER => true
  ]);

  $curl_response = curl_exec($ch);

  $curl_response = str_replace("\\n\\n", "<br><br>", $curl_response);
  $curl_response = str_replace("**", "", $curl_response);
  $curl_response = str_replace("# Background", "", $curl_response);
  $curl_response = str_replace("# Technical overview", "Technical Overview", $curl_response);
  $curl_response = str_replace("## Authentication and authorization", "", $curl_response);
  $curl_response = str_replace("## Test data", "", $curl_response);
  $curl_response = str_replace("[Sandbox test patients](https://github.com/department-of-veterans-affairs/vets-api-clients/blob/master/test_accounts/health_test_accounts.md) contain no PII or PHI but mimic real VA patient demographics and disease models.", "", $curl_response);
  $curl_response = str_replace("The associated clinical resources include data generated disease models covering up to a dozen of the most common VA patient afflictions.", "", $curl_response);

  $response_json = json_decode($curl_response, true);

  curl_close($ch);
  return $response_json;
}
