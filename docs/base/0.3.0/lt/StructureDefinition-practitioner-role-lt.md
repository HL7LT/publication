# PractitionerRoleLt - Lithuanian Base Implementation Guide v0.3.0

## Resursų profilis: PractitionerRoleLt 

 
Lithuanian Base Practitioner Role profile, used to define roles of the healthcare practitioner in the healthcare facilities 

**Usages:**

* Refer to this Profile: [AppointmentLt](StructureDefinition-appointment-lt.md), [CarePlanLt](StructureDefinition-care-plan-lt.md), [CareTeamLt](StructureDefinition-care-team-lt.md), [CompositionLt](StructureDefinition-composition-lt.md)... Show 11 more, [ConditionLt](StructureDefinition-condition-lt.md), [DiagnosticReportLt](StructureDefinition-diagnostic-report-lt.md), [DocumentReferenceLt](StructureDefinition-document-reference-lt.md), [EpisodeOfCareLt](StructureDefinition-episode-of-care-lt.md), [FamilyMemberHistoryLt](StructureDefinition-family-member-history-lt.md), [GoalLt](StructureDefinition-goal-lt.md), [ImagingStudyLt](StructureDefinition-imagingstudy-lt.md), [ObservationLt](StructureDefinition-observation-lt.md), [PatientLt](StructureDefinition-patient-lt.md), [ProcedureLt](StructureDefinition-procedure-lt.md) and [ServiceRequestLt](StructureDefinition-service-request-lt.md)
* Examples for this Profile: [PractitionerRole/practitioner-role-doctor-vilnius-hospital-example](PractitionerRole-practitioner-role-doctor-vilnius-hospital-example.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/practitioner-role-lt)

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

Must-Support: 5 elements

**Structures**

This structure refers to these other structures:

* [PractitionerLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0)](StructureDefinition-practitioner-lt.md)
* [OrganizationLt (https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0)](StructureDefinition-organization-lt.md)
* [LocationLt (https://hl7.lt/fhir/base/StructureDefinition/location-lt|0.3.0)](StructureDefinition-location-lt.md)

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Must-Support: 5 elements

**Structures**

This structure refers to these other structures:

* [PractitionerLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0)](StructureDefinition-practitioner-lt.md)
* [OrganizationLt (https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0)](StructureDefinition-organization-lt.md)
* [LocationLt (https://hl7.lt/fhir/base/StructureDefinition/location-lt|0.3.0)](StructureDefinition-location-lt.md)

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-practitioner-role-lt.csv), [Excel](../StructureDefinition-practitioner-role-lt.xlsx), [Schematron](../StructureDefinition-practitioner-role-lt.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "practitioner-role-lt",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt",
  "version" : "0.3.0",
  "name" : "PractitionerRoleLt",
  "title" : "PractitionerRoleLt",
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
  "description" : "Lithuanian Base Practitioner Role profile, used to define roles of the healthcare practitioner in the healthcare facilities",
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
    "identity" : "interface",
    "uri" : "http://hl7.org/fhir/interface",
    "name" : "Interface Pattern"
  },
  {
    "identity" : "servd",
    "uri" : "http://www.omg.org/spec/ServD/1.0/",
    "name" : "ServD"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "PractitionerRole",
  "baseDefinition" : "http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu-core|0.1.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "PractitionerRole",
      "path" : "PractitionerRole"
    },
    {
      "id" : "PractitionerRole.practitioner",
      "path" : "PractitionerRole.practitioner",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "PractitionerRole.organization",
      "path" : "PractitionerRole.organization",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "PractitionerRole.code",
      "path" : "PractitionerRole.code",
      "mustSupport" : true
    },
    {
      "id" : "PractitionerRole.specialty",
      "path" : "PractitionerRole.specialty",
      "mustSupport" : true
    },
    {
      "id" : "PractitionerRole.location",
      "path" : "PractitionerRole.location",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/location-lt|0.3.0"]
      }],
      "mustSupport" : true
    }]
  }
}

```
