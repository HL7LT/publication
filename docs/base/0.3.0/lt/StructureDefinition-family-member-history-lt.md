# FamilyMemberHistoryLt - Lithuanian Base Implementation Guide v0.3.0

## Resursų profilis: FamilyMemberHistoryLt 

 
Lithuanian Base FamilyMemberHistory profile, used for health conditions for a person related to the patient. 

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/family-member-history-lt)

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

Must-Support: 7 elements

**Structures**

This structure refers to these other structures:

* [PatientLt (https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0)](StructureDefinition-patient-lt.md)
* [PractitionerLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0)](StructureDefinition-practitioner-lt.md)
* [PractitionerRoleLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0)](StructureDefinition-practitioner-role-lt.md)
* [RelatedPersonLt (https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0)](StructureDefinition-related-person-lt.md)
* [CareTeamLt (https://hl7.lt/fhir/base/StructureDefinition/care-team-lt|0.3.0)](StructureDefinition-care-team-lt.md)
* [OrganizationLt (https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0)](StructureDefinition-organization-lt.md)
* [Device (http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)
* [ConditionLt (https://hl7.lt/fhir/base/StructureDefinition/condition-lt|0.3.0)](StructureDefinition-condition-lt.md)
* [ObservationLt (https://hl7.lt/fhir/base/StructureDefinition/observation-lt|0.3.0)](StructureDefinition-observation-lt.md)
* [DiagnosticReportLt (https://hl7.lt/fhir/base/StructureDefinition/diagnostic-report-lt|0.3.0)](StructureDefinition-diagnostic-report-lt.md)
* [DocumentReferenceLt (https://hl7.lt/fhir/base/StructureDefinition/document-reference-lt|0.3.0)](StructureDefinition-document-reference-lt.md)
* [AllergyIntolerance (http://hl7.org/fhir/StructureDefinition/AllergyIntolerance|5.0.0)](http://hl7.org/fhir/R5/allergyintolerance.html)
* [QuestionnaireResponse (http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse|5.0.0)](http://hl7.org/fhir/R5/questionnaireresponse.html)

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Must-Support: 7 elements

**Structures**

This structure refers to these other structures:

* [PatientLt (https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0)](StructureDefinition-patient-lt.md)
* [PractitionerLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0)](StructureDefinition-practitioner-lt.md)
* [PractitionerRoleLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0)](StructureDefinition-practitioner-role-lt.md)
* [RelatedPersonLt (https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0)](StructureDefinition-related-person-lt.md)
* [CareTeamLt (https://hl7.lt/fhir/base/StructureDefinition/care-team-lt|0.3.0)](StructureDefinition-care-team-lt.md)
* [OrganizationLt (https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0)](StructureDefinition-organization-lt.md)
* [Device (http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)
* [ConditionLt (https://hl7.lt/fhir/base/StructureDefinition/condition-lt|0.3.0)](StructureDefinition-condition-lt.md)
* [ObservationLt (https://hl7.lt/fhir/base/StructureDefinition/observation-lt|0.3.0)](StructureDefinition-observation-lt.md)
* [DiagnosticReportLt (https://hl7.lt/fhir/base/StructureDefinition/diagnostic-report-lt|0.3.0)](StructureDefinition-diagnostic-report-lt.md)
* [DocumentReferenceLt (https://hl7.lt/fhir/base/StructureDefinition/document-reference-lt|0.3.0)](StructureDefinition-document-reference-lt.md)
* [AllergyIntolerance (http://hl7.org/fhir/StructureDefinition/AllergyIntolerance|5.0.0)](http://hl7.org/fhir/R5/allergyintolerance.html)
* [QuestionnaireResponse (http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse|5.0.0)](http://hl7.org/fhir/R5/questionnaireresponse.html)

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-family-member-history-lt.csv), [Excel](../StructureDefinition-family-member-history-lt.xlsx), [Schematron](../StructureDefinition-family-member-history-lt.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "family-member-history-lt",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/family-member-history-lt",
  "version" : "0.3.0",
  "name" : "FamilyMemberHistoryLt",
  "title" : "FamilyMemberHistoryLt",
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
  "description" : "Lithuanian Base FamilyMemberHistory profile, used for health conditions for a person related to the patient.",
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
  "type" : "FamilyMemberHistory",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/FamilyMemberHistory|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "FamilyMemberHistory",
      "path" : "FamilyMemberHistory"
    },
    {
      "id" : "FamilyMemberHistory.status",
      "path" : "FamilyMemberHistory.status",
      "mustSupport" : true
    },
    {
      "id" : "FamilyMemberHistory.patient",
      "path" : "FamilyMemberHistory.patient",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "FamilyMemberHistory.participant.actor",
      "path" : "FamilyMemberHistory.participant.actor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/care-team-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/Device|5.0.0"]
      }]
    },
    {
      "id" : "FamilyMemberHistory.age[x]",
      "path" : "FamilyMemberHistory.age[x]",
      "mustSupport" : true
    },
    {
      "id" : "FamilyMemberHistory.deceased[x]",
      "path" : "FamilyMemberHistory.deceased[x]",
      "mustSupport" : true
    },
    {
      "id" : "FamilyMemberHistory.reason",
      "path" : "FamilyMemberHistory.reason",
      "type" : [{
        "code" : "CodeableReference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/condition-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/observation-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/diagnostic-report-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/document-reference-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/AllergyIntolerance|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse|5.0.0"]
      }]
    },
    {
      "id" : "FamilyMemberHistory.note",
      "path" : "FamilyMemberHistory.note",
      "mustSupport" : true
    },
    {
      "id" : "FamilyMemberHistory.condition",
      "path" : "FamilyMemberHistory.condition",
      "mustSupport" : true
    },
    {
      "id" : "FamilyMemberHistory.procedure",
      "path" : "FamilyMemberHistory.procedure",
      "mustSupport" : true
    }]
  }
}

```
