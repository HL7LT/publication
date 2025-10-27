<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.lt/fhir/base/0.1.0/ImplementationGuide-lt.hl7.fhir.base.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.lt/fhir/base/0.1.0/ImplementationGuide-lt.hl7.fhir.base.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.lt/fhir/base/0.1.0/ImplementationGuide-lt.hl7.fhir.base.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.lt/fhir/base/0.1.0/ImplementationGuide-lt.hl7.fhir.base.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.lt/fhir/base/0.1.0/ImplementationGuide-lt.hl7.fhir.base.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.lt/fhir/base/0.1.0/index.html');
else 
  Redirect('https://hl7.lt/fhir/base/0.1.0/ImplementationGuide-lt.hl7.fhir.base.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
