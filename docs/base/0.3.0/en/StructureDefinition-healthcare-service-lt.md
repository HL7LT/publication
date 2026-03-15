# HealthcareServiceLt - Lithuanian Base Implementation Guide v0.3.0

## Resource Profile: HealthcareServiceLt 

 
Lithuanian Base HealthcareService profile, used for describing provided healthcare services. 

**Usages:**

* Refer to this Profile: [AppointmentLt](StructureDefinition-appointment-lt.md), [HealthcareServiceLt](StructureDefinition-healthcare-service-lt.md), [ImagingStudyLt](StructureDefinition-imagingstudy-lt.md), [ProcedureLt](StructureDefinition-procedure-lt.md) and [ServiceRequestLt](StructureDefinition-service-request-lt.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/healthcare-service-lt)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-healthcare-service-lt.csv), [Excel](../StructureDefinition-healthcare-service-lt.xlsx), [Schematron](../StructureDefinition-healthcare-service-lt.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "healthcare-service-lt",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/healthcare-service-lt",
  "version" : "0.3.0",
  "name" : "HealthcareServiceLt",
  "title" : "HealthcareServiceLt",
  "status" : "active",
  "date" : "2026-03-15T18:57:53+02:00",
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
  "description" : "Lithuanian Base HealthcareService profile, used for describing provided healthcare services.",
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
  "type" : "HealthcareService",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/HealthcareService|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "HealthcareService",
      "path" : "HealthcareService"
    },
    {
      "id" : "HealthcareService.providedBy",
      "path" : "HealthcareService.providedBy",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "HealthcareService.offeredIn",
      "path" : "HealthcareService.offeredIn",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/healthcare-service-lt|0.3.0"]
      }]
    },
    {
      "id" : "HealthcareService.category",
      "path" : "HealthcareService.category",
      "mustSupport" : true
    },
    {
      "id" : "HealthcareService.type",
      "path" : "HealthcareService.type",
      "mustSupport" : true
    },
    {
      "id" : "HealthcareService.specialty",
      "path" : "HealthcareService.specialty",
      "mustSupport" : true
    },
    {
      "id" : "HealthcareService.location",
      "path" : "HealthcareService.location",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/location-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "HealthcareService.name",
      "path" : "HealthcareService.name",
      "short" : "Name Healthcare Services (in Lithuanian)",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "HealthcareService.name.extension",
      "path" : "HealthcareService.name.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "short" : "Name Healthcare Services (in English)"
    },
    {
      "id" : "HealthcareService.name.extension:translation",
      "path" : "HealthcareService.name.extension",
      "sliceName" : "translation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/translation|5.2.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "HealthcareService.contact",
      "path" : "HealthcareService.contact",
      "mustSupport" : true
    },
    {
      "id" : "HealthcareService.coverageArea",
      "path" : "HealthcareService.coverageArea",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/location-lt|0.3.0"]
      }]
    }]
  }
}

```
