<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-ObservationEu.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-ObservationEu.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-ObservationEu.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-ObservationEu.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-ObservationEu.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-ObservationEu.html');
else 
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-ObservationEu.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
