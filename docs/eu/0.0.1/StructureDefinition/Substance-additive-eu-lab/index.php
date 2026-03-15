<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-Substance-additive-eu-lab.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-Substance-additive-eu-lab.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-Substance-additive-eu-lab.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-Substance-additive-eu-lab.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-Substance-additive-eu-lab.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-Substance-additive-eu-lab.html');
else 
  Redirect('https://hl7.eu/fhir/0.0.1/StructureDefinition-Substance-additive-eu-lab.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
