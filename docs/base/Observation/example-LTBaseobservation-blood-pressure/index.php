<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.lt/fhir/base/0.1.0/Observation-example-LTBaseobservation-blood-pressure.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.lt/fhir/base/0.1.0/Observation-example-LTBaseobservation-blood-pressure.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.lt/fhir/base/0.1.0/Observation-example-LTBaseobservation-blood-pressure.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.lt/fhir/base/0.1.0/Observation-example-LTBaseobservation-blood-pressure.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.lt/fhir/base/0.1.0/Observation-example-LTBaseobservation-blood-pressure.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.lt/fhir/base/0.1.0/Observation-example-LTBaseobservation-blood-pressure.html');
else 
  Redirect('https://hl7.lt/fhir/base/0.1.0/Observation-example-LTBaseobservation-blood-pressure.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
