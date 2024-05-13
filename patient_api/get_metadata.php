<?php

/************************************************************************
 * Lighthouse API request to HL7 FHIR Resource: Patient Health Metadata
 ************************************************************************/

function get_metadata()
{
  include '../_include/config.php';

  define('BASE_URL', 'https://sandbox-api.va.gov/services/provider-directory/v0/r4/Practitioner');
  define('RESOURCE_ID_KEY', '_id');
  define('RESOURCE_ID_VALUE', 'I2-VLZYJVF7MOB2SFAKTAPNSQIBWZS22HGVT3A56E5D5PHDUWJGQIGQ0000');
  define('HEADER', [
    'accept: application/fhir+json',
    'apikey: FU1jrtVhStvahCjqdYTMP1Qt5o1R6R3X'
  ]);

  $full_url = BASE_URL . "?" . RESOURCE_ID_KEY . "=" . RESOURCE_ID_VALUE;

  // initiate a curl session and return a handle to the session
  $ch = curl_init();

  //set a few curl options using an associative array
  curl_setopt_array($ch, [
    CURLOPT_URL => $full_url,
    CURLOPT_HTTPHEADER => HEADER,
    CURLOPT_RETURNTRANSFER => true
  ]);

  $curl_response = curl_exec($ch);
  $response_json = json_decode($curl_response, true);

  curl_close($ch);
  return $response_json;
}
