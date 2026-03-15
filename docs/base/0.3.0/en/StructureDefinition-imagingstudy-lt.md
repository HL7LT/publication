# ImagingStudyLt - Lithuanian Base Implementation Guide v0.3.0

## Resource Profile: ImagingStudyLt 

 
Lithuanian Base Imaging Study profile, used for documenting general imaging studies and their characteristics. 

**Usages:**

* Refer to this Profile: [DiagnosticReportLt](StructureDefinition-diagnostic-report-lt.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/imagingstudy-lt)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-imagingstudy-lt.csv), [Excel](../StructureDefinition-imagingstudy-lt.xlsx), [Schematron](../StructureDefinition-imagingstudy-lt.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "imagingstudy-lt",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/imagingstudy-lt",
  "version" : "0.3.0",
  "name" : "ImagingStudyLt",
  "title" : "ImagingStudyLt",
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
  "description" : "Lithuanian Base Imaging Study profile, used for documenting general imaging studies and their characteristics.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "LT"
    }]
  }],
  "fhirVersion" : "5.0.0",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
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
    "identity" : "dicom",
    "uri" : "http://nema.org/dicom",
    "name" : "DICOM Tag Mapping"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 V2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ImagingStudy",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ImagingStudy|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ImagingStudy",
      "path" : "ImagingStudy"
    },
    {
      "id" : "ImagingStudy.identifier",
      "path" : "ImagingStudy.identifier",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "ImagingStudy.status",
      "path" : "ImagingStudy.status",
      "mustSupport" : true
    },
    {
      "id" : "ImagingStudy.modality",
      "path" : "ImagingStudy.modality",
      "mustSupport" : true
    },
    {
      "id" : "ImagingStudy.subject",
      "path" : "ImagingStudy.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/Device|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/Group|5.0.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "ImagingStudy.encounter",
      "path" : "ImagingStudy.encounter",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/encounter-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "ImagingStudy.basedOn",
      "path" : "ImagingStudy.basedOn",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/service-request-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/appointment-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/CarePlan|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/Task|5.0.0"]
      }]
    },
    {
      "id" : "ImagingStudy.partOf",
      "path" : "ImagingStudy.partOf",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/procedure-lt|0.3.0"]
      }]
    },
    {
      "id" : "ImagingStudy.referrer",
      "path" : "ImagingStudy.referrer",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "ImagingStudy.reason",
      "path" : "ImagingStudy.reason",
      "type" : [{
        "code" : "CodeableReference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/condition-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/observation-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/diagnostic-report-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/document-reference-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "ImagingStudy.note",
      "path" : "ImagingStudy.note",
      "mustSupport" : true
    },
    {
      "id" : "ImagingStudy.series.performer.actor",
      "path" : "ImagingStudy.series.performer.actor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/Device|5.0.0",
        "https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/care-team-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/healthcare-service-lt|0.3.0"]
      }]
    }]
  }
}

```
