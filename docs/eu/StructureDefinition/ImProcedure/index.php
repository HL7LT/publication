<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.lt/fhir/eu/0.0.1/StructureDefinition-ImProcedure.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.lt/fhir/eu/0.0.1/StructureDefinition-ImProcedure.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.lt/fhir/eu/0.0.1/StructureDefinition-ImProcedure.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.lt/fhir/eu/0.0.1/StructureDefinition-ImProcedure.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.lt/fhir/eu/0.0.1/StructureDefinition-ImProcedure.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.lt/fhir/eu/0.0.1/StructureDefinition-ImProcedure.html');
else 
  Redirect('https://hl7.lt/fhir/eu/0.0.1/StructureDefinition-ImProcedure.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
