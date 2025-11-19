<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.lt/fhir/vitalsigns/0.0.1/StructureDefinition-sleep-status.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.lt/fhir/vitalsigns/0.0.1/StructureDefinition-sleep-status.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.lt/fhir/vitalsigns/0.0.1/StructureDefinition-sleep-status.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.lt/fhir/vitalsigns/0.0.1/StructureDefinition-sleep-status.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.lt/fhir/vitalsigns/0.0.1/StructureDefinition-sleep-status.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.lt/fhir/vitalsigns/0.0.1/StructureDefinition-sleep-status.html');
else 
  Redirect('https://hl7.lt/fhir/vitalsigns/0.0.1/StructureDefinition-sleep-status.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
