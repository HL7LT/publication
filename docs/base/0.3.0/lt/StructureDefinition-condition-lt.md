# ConditionLt - Lithuanian Base Implementation Guide v0.3.0

## Resursų profilis: ConditionLt 

 
Lithuanian Base Condition profile, used for documenting general, symptoms, conditions, and their characteristics. 

**Usages:**

* Refer to this Profile: [CarePlanLt](StructureDefinition-care-plan-lt.md), [EncounterLt](StructureDefinition-encounter-lt.md), [EpisodeOfCareLt](StructureDefinition-episode-of-care-lt.md), [FamilyMemberHistoryLt](StructureDefinition-family-member-history-lt.md)... Show 4 more, [GoalLt](StructureDefinition-goal-lt.md), [ImagingStudyLt](StructureDefinition-imagingstudy-lt.md), [ProcedureLt](StructureDefinition-procedure-lt.md) and [ServiceRequestLt](StructureDefinition-service-request-lt.md)
* Examples for this Profile: [Condition/condition-cancer-example](Condition-condition-cancer-example.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/condition-lt)

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

Must-Support: 12 elements

**Structures**

This structure refers to these other structures:

* [PatientLt (https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0)](StructureDefinition-patient-lt.md)
* [EncounterLt (https://hl7.lt/fhir/base/StructureDefinition/encounter-lt|0.3.0)](StructureDefinition-encounter-lt.md)
* [PractitionerLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0)](StructureDefinition-practitioner-lt.md)
* [PractitionerRoleLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0)](StructureDefinition-practitioner-role-lt.md)
* [RelatedPersonLt (https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0)](StructureDefinition-related-person-lt.md)
* [Device (http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Must-Support: 12 elements

**Structures**

This structure refers to these other structures:

* [PatientLt (https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0)](StructureDefinition-patient-lt.md)
* [EncounterLt (https://hl7.lt/fhir/base/StructureDefinition/encounter-lt|0.3.0)](StructureDefinition-encounter-lt.md)
* [PractitionerLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0)](StructureDefinition-practitioner-lt.md)
* [PractitionerRoleLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0)](StructureDefinition-practitioner-role-lt.md)
* [RelatedPersonLt (https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0)](StructureDefinition-related-person-lt.md)
* [Device (http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-condition-lt.csv), [Excel](../StructureDefinition-condition-lt.xlsx), [Schematron](../StructureDefinition-condition-lt.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "condition-lt",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/condition-lt",
  "version" : "0.3.0",
  "name" : "ConditionLt",
  "title" : "ConditionLt",
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
  "description" : "Lithuanian Base Condition profile, used for documenting general, symptoms, conditions, and their characteristics.",
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
    "identity" : "sct-concept",
    "uri" : "http://snomed.info/conceptdomain",
    "name" : "SNOMED CT Concept Domain Binding"
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
  },
  {
    "identity" : "sct-attr",
    "uri" : "http://snomed.org/attributebinding",
    "name" : "SNOMED CT Attribute Binding"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Condition",
  "baseDefinition" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ConditionEu|0.1.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Condition",
      "path" : "Condition"
    },
    {
      "id" : "Condition.clinicalStatus",
      "path" : "Condition.clinicalStatus",
      "mustSupport" : true
    },
    {
      "id" : "Condition.verificationStatus",
      "path" : "Condition.verificationStatus",
      "mustSupport" : true
    },
    {
      "id" : "Condition.severity",
      "path" : "Condition.severity",
      "mustSupport" : true
    },
    {
      "id" : "Condition.code",
      "path" : "Condition.code",
      "mustSupport" : true
    },
    {
      "id" : "Condition.subject",
      "path" : "Condition.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Condition.encounter",
      "path" : "Condition.encounter",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/encounter-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Condition.onset[x]",
      "path" : "Condition.onset[x]",
      "mustSupport" : true
    },
    {
      "id" : "Condition.abatement[x]",
      "path" : "Condition.abatement[x]",
      "mustSupport" : true
    },
    {
      "id" : "Condition.recordedDate",
      "path" : "Condition.recordedDate",
      "mustSupport" : true
    },
    {
      "id" : "Condition.participant",
      "path" : "Condition.participant",
      "mustSupport" : true
    },
    {
      "id" : "Condition.participant.function",
      "path" : "Condition.participant.function",
      "mustSupport" : true
    },
    {
      "id" : "Condition.participant.actor",
      "path" : "Condition.participant.actor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/Device|5.0.0"]
      }]
    },
    {
      "id" : "Condition.note",
      "path" : "Condition.note",
      "mustSupport" : true
    }]
  }
}

```
