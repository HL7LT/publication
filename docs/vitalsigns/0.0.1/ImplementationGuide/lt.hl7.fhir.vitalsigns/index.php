<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.lt/fhir/vitalsigns/0.0.1/ImplementationGuide-lt.hl7.fhir.vitalsigns.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.lt/fhir/vitalsigns/0.0.1/ImplementationGuide-lt.hl7.fhir.vitalsigns.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.lt/fhir/vitalsigns/0.0.1/ImplementationGuide-lt.hl7.fhir.vitalsigns.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.lt/fhir/vitalsigns/0.0.1/ImplementationGuide-lt.hl7.fhir.vitalsigns.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.lt/fhir/vitalsigns/0.0.1/ImplementationGuide-lt.hl7.fhir.vitalsigns.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.lt/fhir/vitalsigns/0.0.1/index.html');
else 
  Redirect('https://hl7.lt/fhir/vitalsigns/0.0.1/ImplementationGuide-lt.hl7.fhir.vitalsigns.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
