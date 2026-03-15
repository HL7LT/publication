# RelatedPersonLt - Lithuanian Base Implementation Guide v0.3.0

## Resursų profilis: RelatedPersonLt 

 
Lithuanian Base Related Person profile, used to define persons related to a patient 

**Usages:**

* Refer to this Profile: [AppointmentLt](StructureDefinition-appointment-lt.md), [CarePlanLt](StructureDefinition-care-plan-lt.md), [CareTeamLt](StructureDefinition-care-team-lt.md), [CompositionLt](StructureDefinition-composition-lt.md)... Show 8 more, [ConditionLt](StructureDefinition-condition-lt.md), [DocumentReferenceLt](StructureDefinition-document-reference-lt.md), [FamilyMemberHistoryLt](StructureDefinition-family-member-history-lt.md), [GoalLt](StructureDefinition-goal-lt.md), [ImagingStudyLt](StructureDefinition-imagingstudy-lt.md), [PatientLt](StructureDefinition-patient-lt.md), [ProcedureLt](StructureDefinition-procedure-lt.md) and [ServiceRequestLt](StructureDefinition-service-request-lt.md)
* Examples for this Profile: [RelatedPerson/related-person-ruta-petrauskiene-example](RelatedPerson-related-person-ruta-petrauskiene-example.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/related-person-lt)

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

Must-Support: 4 elements

**Structures**

This structure refers to these other structures:

* [PatientLt (https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0)](StructureDefinition-patient-lt.md)

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Must-Support: 4 elements

**Structures**

This structure refers to these other structures:

* [PatientLt (https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0)](StructureDefinition-patient-lt.md)

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-related-person-lt.csv), [Excel](../StructureDefinition-related-person-lt.xlsx), [Schematron](../StructureDefinition-related-person-lt.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "related-person-lt",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/related-person-lt",
  "version" : "0.3.0",
  "name" : "RelatedPersonLt",
  "title" : "RelatedPersonLt",
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
  "description" : "Lithuanian Base Related Person profile, used to define persons related to a patient",
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
  "type" : "RelatedPerson",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "RelatedPerson",
      "path" : "RelatedPerson"
    },
    {
      "id" : "RelatedPerson.identifier",
      "path" : "RelatedPerson.identifier",
      "mustSupport" : true
    },
    {
      "id" : "RelatedPerson.patient",
      "path" : "RelatedPerson.patient",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "RelatedPerson.relationship",
      "path" : "RelatedPerson.relationship",
      "mustSupport" : true
    },
    {
      "id" : "RelatedPerson.name",
      "path" : "RelatedPerson.name",
      "mustSupport" : true
    }]
  }
}

```
