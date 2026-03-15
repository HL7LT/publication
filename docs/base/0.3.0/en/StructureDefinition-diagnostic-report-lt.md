# DiagnosticReportLt - Lithuanian Base Implementation Guide v0.3.0

## Resource Profile: DiagnosticReportLt 

 
Lithuanian Base DiagnosticReport profile, used for interpretation of diagnostic tests. 

**Usages:**

* Refer to this Profile: [DiagnosticReportLt](StructureDefinition-diagnostic-report-lt.md), [FamilyMemberHistoryLt](StructureDefinition-family-member-history-lt.md), [ImagingStudyLt](StructureDefinition-imagingstudy-lt.md), [ProcedureLt](StructureDefinition-procedure-lt.md) and [ServiceRequestLt](StructureDefinition-service-request-lt.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/diagnostic-report-lt)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-diagnostic-report-lt.csv), [Excel](../StructureDefinition-diagnostic-report-lt.xlsx), [Schematron](../StructureDefinition-diagnostic-report-lt.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "diagnostic-report-lt",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/diagnostic-report-lt",
  "version" : "0.3.0",
  "name" : "DiagnosticReportLt",
  "title" : "DiagnosticReportLt",
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
  "description" : "Lithuanian Base DiagnosticReport profile, used for interpretation of diagnostic tests.",
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
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 V2 Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DiagnosticReport",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/DiagnosticReport|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "DiagnosticReport",
      "path" : "DiagnosticReport"
    },
    {
      "id" : "DiagnosticReport.identifier",
      "path" : "DiagnosticReport.identifier",
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.basedOn",
      "path" : "DiagnosticReport.basedOn",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/service-request-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/care-plan-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/ImmunizationRecommendation|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/MedicationRequest|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/NutritionOrder|5.0.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.status",
      "path" : "DiagnosticReport.status",
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.category",
      "path" : "DiagnosticReport.category",
      "mustSupport" : true,
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://terminology.hl7.org/ValueSet/v2-0074|3.0.0"
      }
    },
    {
      "id" : "DiagnosticReport.code",
      "path" : "DiagnosticReport.code",
      "mustSupport" : true,
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://hl7.eu/fhir/ValueSet/report-code|1.0.0"
      }
    },
    {
      "id" : "DiagnosticReport.subject",
      "path" : "DiagnosticReport.subject",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/Group|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/Device|5.0.0",
        "https://hl7.lt/fhir/base/StructureDefinition/location-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/Medication|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/Substance|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/BiologicallyDerivedProduct|5.0.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.encounter",
      "path" : "DiagnosticReport.encounter",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/encounter-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.effective[x]",
      "path" : "DiagnosticReport.effective[x]",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.issued",
      "path" : "DiagnosticReport.issued",
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.performer",
      "path" : "DiagnosticReport.performer",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/care-team-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter",
      "path" : "DiagnosticReport.resultsInterpreter",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/care-team-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.result",
      "path" : "DiagnosticReport.result",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/observation-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.note",
      "path" : "DiagnosticReport.note",
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.study",
      "path" : "DiagnosticReport.study",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/imagingstudy-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/GenomicStudy|5.0.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.supportingInfo",
      "path" : "DiagnosticReport.supportingInfo",
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.supportingInfo.reference",
      "path" : "DiagnosticReport.supportingInfo.reference",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/observation-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/procedure-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/diagnostic-report-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/Citation|5.0.0"]
      }]
    },
    {
      "id" : "DiagnosticReport.composition",
      "path" : "DiagnosticReport.composition",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/composition-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.conclusion",
      "path" : "DiagnosticReport.conclusion",
      "mustSupport" : true
    },
    {
      "id" : "DiagnosticReport.conclusionCode",
      "path" : "DiagnosticReport.conclusionCode",
      "mustSupport" : true
    }]
  }
}

```
