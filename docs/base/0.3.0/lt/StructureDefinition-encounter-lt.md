# EncounterLt - Lithuanian Base Implementation Guide v0.3.0

## Resursų profilis: EncounterLt 

 
Lithuanian Base Encounter profile, used to represent clinical encounters 

**Usages:**

* Refer to this Profile: [CarePlanLt](StructureDefinition-care-plan-lt.md), [CompositionLt](StructureDefinition-composition-lt.md), [ConditionLt](StructureDefinition-condition-lt.md), [DiagnosticReportLt](StructureDefinition-diagnostic-report-lt.md)... Show 5 more, [DocumentReferenceLt](StructureDefinition-document-reference-lt.md), [ImagingStudyLt](StructureDefinition-imagingstudy-lt.md), [ObservationLt](StructureDefinition-observation-lt.md), [ProcedureLt](StructureDefinition-procedure-lt.md) and [ServiceRequestLt](StructureDefinition-service-request-lt.md)
* Examples for this Profile: [Encounter/encounter-psychiatric-example](Encounter-encounter-psychiatric-example.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/encounter-lt)

### Profilio turinio formaliosios peržiūros

 [Profilių, skirtumų rinkinių, momentinių kopijų aprašas ir jų reprezentacijos](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Pagrindinių elementų lentelė](#tabs-key) 
*  [Skirtumų rinkinių lentelė](#tabs-diff) 
*  [Momentinės kopijos lentelė](#tabs-snap) 
*  [Statistika/Nuorodos](#tabs-summ) 
*  [Viskas](#tabs-all) 

#### Terminology Bindings

#### Constraints

#### Terminology Bindings

#### Constraints

** Summary **

Must-Support: 38 elements

**Structures**

This structure refers to these other structures:

* [PatientLt (https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0)](StructureDefinition-patient-lt.md)
* [ConditionLt (https://hl7.lt/fhir/base/StructureDefinition/condition-lt|0.3.0)](StructureDefinition-condition-lt.md)
* [DiagnosticReport (http://hl7.org/fhir/StructureDefinition/DiagnosticReport|5.0.0)](http://hl7.org/fhir/R5/diagnosticreport.html)
* [Procedure (http://hl7.org/fhir/StructureDefinition/Procedure|5.0.0)](http://hl7.org/fhir/R5/procedure.html)
* [ObservationLt (https://hl7.lt/fhir/base/StructureDefinition/observation-lt|0.3.0)](StructureDefinition-observation-lt.md)

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Must-Support: 38 elements

**Structures**

This structure refers to these other structures:

* [PatientLt (https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0)](StructureDefinition-patient-lt.md)
* [ConditionLt (https://hl7.lt/fhir/base/StructureDefinition/condition-lt|0.3.0)](StructureDefinition-condition-lt.md)
* [DiagnosticReport (http://hl7.org/fhir/StructureDefinition/DiagnosticReport|5.0.0)](http://hl7.org/fhir/R5/diagnosticreport.html)
* [Procedure (http://hl7.org/fhir/StructureDefinition/Procedure|5.0.0)](http://hl7.org/fhir/R5/procedure.html)
* [ObservationLt (https://hl7.lt/fhir/base/StructureDefinition/observation-lt|0.3.0)](StructureDefinition-observation-lt.md)

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-encounter-lt.csv), [Excel](../StructureDefinition-encounter-lt.xlsx), [Schematron](../StructureDefinition-encounter-lt.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "encounter-lt",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/encounter-lt",
  "version" : "0.3.0",
  "name" : "EncounterLt",
  "title" : "EncounterLt",
  "status" : "active",
  "date" : "2025-10-15",
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
  "description" : "Lithuanian Base Encounter profile, used to represent clinical encounters",
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
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 V2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Encounter",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Encounter|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Encounter",
      "path" : "Encounter"
    },
    {
      "id" : "Encounter.identifier",
      "path" : "Encounter.identifier",
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.status",
      "path" : "Encounter.status",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.class",
      "path" : "Encounter.class",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.priority",
      "path" : "Encounter.priority",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.type",
      "path" : "Encounter.type",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.serviceType",
      "path" : "Encounter.serviceType",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.subject",
      "path" : "Encounter.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Encounter.subjectStatus",
      "path" : "Encounter.subjectStatus",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.episodeOfCare",
      "path" : "Encounter.episodeOfCare",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.basedOn",
      "path" : "Encounter.basedOn",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.careTeam",
      "path" : "Encounter.careTeam",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.partOf",
      "path" : "Encounter.partOf",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.serviceProvider",
      "path" : "Encounter.serviceProvider",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.participant",
      "path" : "Encounter.participant",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.participant.type",
      "path" : "Encounter.participant.type",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.participant.period",
      "path" : "Encounter.participant.period",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.participant.actor",
      "path" : "Encounter.participant.actor",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.appointment",
      "path" : "Encounter.appointment",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.virtualService",
      "path" : "Encounter.virtualService",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.actualPeriod",
      "path" : "Encounter.actualPeriod",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.plannedStartDate",
      "path" : "Encounter.plannedStartDate",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.plannedEndDate",
      "path" : "Encounter.plannedEndDate",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.length",
      "path" : "Encounter.length",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.reason",
      "path" : "Encounter.reason",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.reason.use",
      "path" : "Encounter.reason.use",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.reason.value",
      "path" : "Encounter.reason.value",
      "type" : [{
        "code" : "CodeableReference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/condition-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/DiagnosticReport|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/Procedure|5.0.0",
        "https://hl7.lt/fhir/base/StructureDefinition/observation-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Encounter.diagnosis",
      "path" : "Encounter.diagnosis",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.diagnosis.condition",
      "path" : "Encounter.diagnosis.condition",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.diagnosis.use",
      "path" : "Encounter.diagnosis.use",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.account",
      "path" : "Encounter.account",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.admission",
      "path" : "Encounter.admission",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.admission.origin",
      "path" : "Encounter.admission.origin",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.admission.admitSource",
      "path" : "Encounter.admission.admitSource",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.admission.reAdmission",
      "path" : "Encounter.admission.reAdmission",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.admission.destination",
      "path" : "Encounter.admission.destination",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.admission.dischargeDisposition",
      "path" : "Encounter.admission.dischargeDisposition",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.location",
      "path" : "Encounter.location",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.location.location",
      "path" : "Encounter.location.location",
      "mustSupport" : true
    }]
  }
}

```
