<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.lt/fhir/base/0.2.0/Organization-example-organization.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.lt/fhir/base/0.2.0/Organization-example-organization.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.lt/fhir/base/0.2.0/Organization-example-organization.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.lt/fhir/base/0.2.0/Organization-example-organization.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.lt/fhir/base/0.2.0/Organization-example-organization.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.lt/fhir/base/0.2.0/Organization-example-organization.html');
else 
  Redirect('https://hl7.lt/fhir/base/0.2.0/Organization-example-organization.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
