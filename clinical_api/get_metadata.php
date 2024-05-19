<?php

/************************************************************************
 * Clinical Health API (FHIR) Resource: Metadata
 ************************************************************************/

function get_metadata()
{
  include '../_include/config.php';

  // patient version
  define('CHAPI_BASE_URL', 'https://api.va.gov/internal/docs/fhir-clinical-health/v0/openapi.json');
  define('HEADER', ['Content-Type: text/html']); // not sure if this (or json type) is required

  $full_url = CHAPI_BASE_URL;

  // initiate a curl session and return a handle to the session
  $ch = curl_init();

  //set a few curl options using an associative array
  curl_setopt_array($ch, [
    CURLOPT_URL => $full_url,
    CURLOPT_HTTPHEADER => HEADER,
    CURLOPT_RETURNTRANSFER => true
  ]);

  $curl_response = curl_exec($ch);

  // trim the response text some to simplify the display to user
  $curl_response = str_replace("# Background \\n\\n", "", $curl_response);
  $curl_response = str_replace("# Technical overview\\n\\n", "", $curl_response);
  $curl_response = str_replace("## Authentication and Authorization\\n\\n", "", $curl_response);
  $curl_response = str_replace("## Test Data\\n\\n", "", $curl_response);
  $curl_response = str_replace("[FHIR](https://www.hl7.org/fhir/overview.html)", "FHIR", $curl_response);
  $curl_response = str_replace("[HL7’s Fast Healthcare Interoperability Resources (FHIR)](https://www.hl7.org/fhir/overview.html)", "FHIR", $curl_response);
  $curl_response = str_replace("[Veterans Health Information Systems and Technology Architecture (VistA)](https://www.oit.va.gov/Services/TRM/ToolPage.aspx?tid=8338)", "VistA", $curl_response);
  $curl_response = str_replace("[Corporate Data Warehouse (CDW)](https://www.hsrd.research.va.gov/for_researchers/vinci/cdw.cfm)", "CDW", $curl_response);
  $curl_response = str_replace("[Sandbox test patients](https://github.com/department-of-veterans-affairs/vets-api-clients/blob/master/test_accounts/clinical_health_test_accounts.md)", "Sandbox test patients", $curl_response);
  $curl_response = str_replace("\\n\\n", "<br><br>", $curl_response);

  $response_json = json_decode($curl_response, true);

  curl_close($ch);
  return $response_json;
}
