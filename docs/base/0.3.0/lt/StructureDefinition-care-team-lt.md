# CareTeamLt - Lithuanian Base Implementation Guide v0.3.0

## Resursų profilis: CareTeamLt 

 
Lithuanian Base Care Team profile, used for documenting care teams involved in patient care. 

**Usages:**

* Refer to this Profile: [AppointmentLt](StructureDefinition-appointment-lt.md), [CarePlanLt](StructureDefinition-care-plan-lt.md), [CareTeamLt](StructureDefinition-care-team-lt.md), [DiagnosticReportLt](StructureDefinition-diagnostic-report-lt.md)... Show 7 more, [DocumentReferenceLt](StructureDefinition-document-reference-lt.md), [EpisodeOfCareLt](StructureDefinition-episode-of-care-lt.md), [FamilyMemberHistoryLt](StructureDefinition-family-member-history-lt.md), [GoalLt](StructureDefinition-goal-lt.md), [ImagingStudyLt](StructureDefinition-imagingstudy-lt.md), [ProcedureLt](StructureDefinition-procedure-lt.md) and [ServiceRequestLt](StructureDefinition-service-request-lt.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/care-team-lt)

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

Must-Support: 9 elements

**Structures**

This structure refers to these other structures:

* [PatientLt (https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0)](StructureDefinition-patient-lt.md)
* [Group (http://hl7.org/fhir/StructureDefinition/Group|5.0.0)](http://hl7.org/fhir/R5/group.html)
* [PractitionerLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0)](StructureDefinition-practitioner-lt.md)
* [PractitionerRoleLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0)](StructureDefinition-practitioner-role-lt.md)
* [OrganizationLt (https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0)](StructureDefinition-organization-lt.md)
* [RelatedPersonLt (https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0)](StructureDefinition-related-person-lt.md)
* [CareTeamLt (https://hl7.lt/fhir/base/StructureDefinition/care-team-lt|0.3.0)](StructureDefinition-care-team-lt.md)

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Must-Support: 9 elements

**Structures**

This structure refers to these other structures:

* [PatientLt (https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0)](StructureDefinition-patient-lt.md)
* [Group (http://hl7.org/fhir/StructureDefinition/Group|5.0.0)](http://hl7.org/fhir/R5/group.html)
* [PractitionerLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0)](StructureDefinition-practitioner-lt.md)
* [PractitionerRoleLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0)](StructureDefinition-practitioner-role-lt.md)
* [OrganizationLt (https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0)](StructureDefinition-organization-lt.md)
* [RelatedPersonLt (https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0)](StructureDefinition-related-person-lt.md)
* [CareTeamLt (https://hl7.lt/fhir/base/StructureDefinition/care-team-lt|0.3.0)](StructureDefinition-care-team-lt.md)

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-care-team-lt.csv), [Excel](../StructureDefinition-care-team-lt.xlsx), [Schematron](../StructureDefinition-care-team-lt.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "care-team-lt",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/care-team-lt",
  "version" : "0.3.0",
  "name" : "CareTeamLt",
  "title" : "CareTeamLt",
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
  "description" : "Lithuanian Base Care Team profile, used for documenting care teams involved in patient care.",
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
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 V2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "CareTeam",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/CareTeam|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "CareTeam",
      "path" : "CareTeam"
    },
    {
      "id" : "CareTeam.status",
      "path" : "CareTeam.status",
      "mustSupport" : true
    },
    {
      "id" : "CareTeam.subject",
      "path" : "CareTeam.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/Group|5.0.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "CareTeam.period",
      "path" : "CareTeam.period",
      "mustSupport" : true
    },
    {
      "id" : "CareTeam.participant",
      "path" : "CareTeam.participant",
      "mustSupport" : true
    },
    {
      "id" : "CareTeam.participant.role",
      "path" : "CareTeam.participant.role",
      "mustSupport" : true
    },
    {
      "id" : "CareTeam.participant.member",
      "path" : "CareTeam.participant.member",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/care-team-lt|0.3.0"]
      }]
    },
    {
      "id" : "CareTeam.participant.onBehalfOf",
      "path" : "CareTeam.participant.onBehalfOf",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "CareTeam.participant.coverage[x]",
      "path" : "CareTeam.participant.coverage[x]",
      "mustSupport" : true
    },
    {
      "id" : "CareTeam.telecom",
      "path" : "CareTeam.telecom",
      "mustSupport" : true
    },
    {
      "id" : "CareTeam.note",
      "path" : "CareTeam.note",
      "mustSupport" : true
    }]
  }
}

```
