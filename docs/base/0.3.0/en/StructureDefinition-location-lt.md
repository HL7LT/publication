# LocationLt - Lithuanian Base Implementation Guide v0.3.0

## Resource Profile: LocationLt 

 
Lithuanian Base Location profile, used for documenting healthcare locations. 

**Usages:**

* Refer to this Profile: [AppointmentLt](StructureDefinition-appointment-lt.md), [DiagnosticReportLt](StructureDefinition-diagnostic-report-lt.md), [HealthcareServiceLt](StructureDefinition-healthcare-service-lt.md), [ObservationLt](StructureDefinition-observation-lt.md)... Show 3 more, [PractitionerRoleLt](StructureDefinition-practitioner-role-lt.md), [ProcedureLt](StructureDefinition-procedure-lt.md) and [ServiceRequestLt](StructureDefinition-service-request-lt.md)
* Examples for this Profile: [Vilniaus miesto ligoninė](Location-location-vilnius-hospital-example.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/location-lt)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-location-lt.csv), [Excel](../StructureDefinition-location-lt.xlsx), [Schematron](../StructureDefinition-location-lt.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "location-lt",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/location-lt",
  "version" : "0.3.0",
  "name" : "LocationLt",
  "title" : "LocationLt",
  "status" : "active",
  "date" : "2026-03-15T22:56:00+02:00",
  "publisher" : "Lithuanian Medical Library",
  "_publisher" : {
    "extension" : [{
      "extension" : [{
        "url" : "lang",
        "valueCode" : "lt"
      },
      {
        "url" : "content",
        "valueString" : "Lietuvos medicinos biblioteka"
      }],
      "url" : "http://hl7.org/fhir/StructureDefinition/translation"
    }]
  },
  "contact" : [{
    "name" : "Lithuanian Medical Library",
    "telecom" : [{
      "system" : "url",
      "value" : "https://medicinosnk.lt"
    },
    {
      "system" : "email",
      "value" : "info@medicinosnk.lt"
    }]
  }],
  "description" : "Lithuanian Base Location profile, used for documenting healthcare locations.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "LT"
    }]
  }],
  "fhirVersion" : "5.0.0",
  "mapping" : [{
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "interface",
    "uri" : "http://hl7.org/fhir/interface",
    "name" : "Interface Pattern"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Location",
  "baseDefinition" : "http://hl7.eu/fhir/base-r5/StructureDefinition/location-eu-core|0.1.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Location",
      "path" : "Location"
    }]
  }
}

```
