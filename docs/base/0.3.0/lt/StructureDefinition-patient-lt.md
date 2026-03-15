# PatientLt - Lithuanian Base Implementation Guide v0.3.0

## Resursų profilis: PatientLt 

 
Lithuanian Base Patient profile, used to represent patients administrative information 

**Usages:**

* Refer to this Profile: [AppointmentLt](StructureDefinition-appointment-lt.md), [CarePlanLt](StructureDefinition-care-plan-lt.md), [CareTeamLt](StructureDefinition-care-team-lt.md), [CompositionLt](StructureDefinition-composition-lt.md)... Show 13 more, [ConditionLt](StructureDefinition-condition-lt.md), [DiagnosticReportLt](StructureDefinition-diagnostic-report-lt.md), [DocumentReferenceLt](StructureDefinition-document-reference-lt.md), [EncounterLt](StructureDefinition-encounter-lt.md), [EpisodeOfCareLt](StructureDefinition-episode-of-care-lt.md), [FamilyMemberHistoryLt](StructureDefinition-family-member-history-lt.md), [GoalLt](StructureDefinition-goal-lt.md), [ImagingStudyLt](StructureDefinition-imagingstudy-lt.md), [ObservationLt](StructureDefinition-observation-lt.md), [PatientLt](StructureDefinition-patient-lt.md), [ProcedureLt](StructureDefinition-procedure-lt.md), [RelatedPersonLt](StructureDefinition-related-person-lt.md) and [ServiceRequestLt](StructureDefinition-service-request-lt.md)
* Examples for this Profile: [Patient/patient-example](Patient-patient-example.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/patient-lt)

### Profilio turinio formaliosios peržiūros

 [Profilių, skirtumų rinkinių, momentinių kopijų aprašas ir jų reprezentacijos](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Pagrindinių elementų lentelė](#tabs-key) 
*  [Skirtumų rinkinių lentelė](#tabs-diff) 
*  [Momentinės kopijos lentelė](#tabs-snap) 
*  [Statistika/Nuorodos](#tabs-summ) 
*  [Viskas](#tabs-all) 

#### Terminology Bindings

#### Constraints

#### Terminology Bindings (Differential)

#### Terminology Bindings

#### Constraints

** Summary **

Mandatory: 1 element
 Must-Support: 18 elements

**Structures**

This structure refers to these other structures:

* [PractitionerLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0)](StructureDefinition-practitioner-lt.md)
* [OrganizationLt (https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0)](StructureDefinition-organization-lt.md)
* [PractitionerRoleLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0)](StructureDefinition-practitioner-role-lt.md)
* [PatientLt (https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0)](StructureDefinition-patient-lt.md)
* [RelatedPersonLt (https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0)](StructureDefinition-related-person-lt.md)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/data-absent-reason|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-data-absent-reason.html)

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

#### Terminology Bindings (Differential)

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Mandatory: 1 element
 Must-Support: 18 elements

**Structures**

This structure refers to these other structures:

* [PractitionerLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0)](StructureDefinition-practitioner-lt.md)
* [OrganizationLt (https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0)](StructureDefinition-organization-lt.md)
* [PractitionerRoleLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0)](StructureDefinition-practitioner-role-lt.md)
* [PatientLt (https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0)](StructureDefinition-patient-lt.md)
* [RelatedPersonLt (https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0)](StructureDefinition-related-person-lt.md)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/data-absent-reason|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-data-absent-reason.html)

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-patient-lt.csv), [Excel](../StructureDefinition-patient-lt.xlsx), [Schematron](../StructureDefinition-patient-lt.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "patient-lt",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/patient-lt",
  "version" : "0.3.0",
  "name" : "PatientLt",
  "title" : "PatientLt",
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
  "description" : "Lithuanian Base Patient profile, used to represent patients administrative information",
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
    "identity" : "cda",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "CDA (R2)"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 V2 Mapping"
  },
  {
    "identity" : "loinc",
    "uri" : "http://loinc.org",
    "name" : "LOINC code for the element"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Patient",
      "path" : "Patient"
    },
    {
      "id" : "Patient.identifier",
      "path" : "Patient.identifier",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Patient.identifier.extension:data-absent-reason",
      "path" : "Patient.identifier.extension",
      "sliceName" : "data-absent-reason",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/data-absent-reason|5.2.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Patient.identifier.system",
      "path" : "Patient.identifier.system",
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "https://tx.hl7.lt/fhir/ValueSet/patient-identifier|1.0.0"
      }
    },
    {
      "id" : "Patient.identifier.value",
      "path" : "Patient.identifier.value",
      "mustSupport" : true
    },
    {
      "id" : "Patient.active",
      "path" : "Patient.active",
      "mustSupport" : true
    },
    {
      "id" : "Patient.name",
      "path" : "Patient.name",
      "mustSupport" : true
    },
    {
      "id" : "Patient.name.use",
      "path" : "Patient.name.use",
      "mustSupport" : true
    },
    {
      "id" : "Patient.name.text",
      "path" : "Patient.name.text",
      "mustSupport" : true
    },
    {
      "id" : "Patient.name.family",
      "path" : "Patient.name.family",
      "mustSupport" : true
    },
    {
      "id" : "Patient.name.given",
      "path" : "Patient.name.given",
      "mustSupport" : true
    },
    {
      "id" : "Patient.name.period",
      "path" : "Patient.name.period",
      "mustSupport" : true
    },
    {
      "id" : "Patient.telecom",
      "path" : "Patient.telecom",
      "mustSupport" : true
    },
    {
      "id" : "Patient.telecom.system",
      "path" : "Patient.telecom.system",
      "mustSupport" : true
    },
    {
      "id" : "Patient.telecom.value",
      "path" : "Patient.telecom.value",
      "mustSupport" : true
    },
    {
      "id" : "Patient.telecom.use",
      "path" : "Patient.telecom.use",
      "mustSupport" : true
    },
    {
      "id" : "Patient.gender",
      "path" : "Patient.gender",
      "mustSupport" : true
    },
    {
      "id" : "Patient.birthDate",
      "path" : "Patient.birthDate",
      "mustSupport" : true
    },
    {
      "id" : "Patient.deceased[x]",
      "path" : "Patient.deceased[x]",
      "mustSupport" : true
    },
    {
      "id" : "Patient.generalPractitioner",
      "path" : "Patient.generalPractitioner",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0"]
      }]
    },
    {
      "id" : "Patient.managingOrganization",
      "path" : "Patient.managingOrganization",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0"]
      }]
    },
    {
      "id" : "Patient.link.other",
      "path" : "Patient.link.other",
      "type" : [{
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-hierarchy",
          "valueBoolean" : false
        }],
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0"]
      }]
    }]
  }
}

```
