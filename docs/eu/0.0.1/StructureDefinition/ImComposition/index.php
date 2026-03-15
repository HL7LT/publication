<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-ImComposition.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-ImComposition.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-ImComposition.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-ImComposition.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-ImComposition.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-ImComposition.html');
else 
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-ImComposition.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
