<?php

$patient_id = file_get_contents("php://input");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://open-ic.epic.com/FHIR/api/FHIR/DSTU2/Patient/" . $patient_id);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$patient_record = curl_exec($ch);
curl_close($ch);

$patient_profile = json_decode(json_encode(simplexml_load_string($patient_record))) or die("could not read EHR import");

$patient = new stdClass();

$patient_dob = new DateTime(getXmlVal($patient_profile, "birthDate"));
$now = new DateTime();
$patient->age = $now->diff($patient_dob)->y;
$patient->gender = getXmlVal($patient_profile, "gender");
$patient->isDeceased = getXmlVal($patient_profile, "deceasedBoolean");
echo json_encode($patient);


function getXmlVal($profile, $value){
    return $profile->{$value}->{"@attributes"}->{"value"};
}