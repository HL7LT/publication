# GoalLt - Lithuanian Base Implementation Guide v0.3.0

## Resource Profile: GoalLt 

 
Lithuanian Base Goal profile, used for describing goals. 

**Usages:**

* Refer to this Profile: [CarePlanLt](StructureDefinition-care-plan-lt.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/goal-lt)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-goal-lt.csv), [Excel](../StructureDefinition-goal-lt.xlsx), [Schematron](../StructureDefinition-goal-lt.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "goal-lt",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/goal-lt",
  "version" : "0.3.0",
  "name" : "GoalLt",
  "title" : "GoalLt",
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
  "description" : "Lithuanian Base Goal profile, used for describing goals.",
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Goal",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Goal|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Goal",
      "path" : "Goal"
    },
    {
      "id" : "Goal.lifecycleStatus",
      "path" : "Goal.lifecycleStatus",
      "mustSupport" : true
    },
    {
      "id" : "Goal.achievementStatus",
      "path" : "Goal.achievementStatus",
      "mustSupport" : true
    },
    {
      "id" : "Goal.category",
      "path" : "Goal.category",
      "mustSupport" : true
    },
    {
      "id" : "Goal.priority",
      "path" : "Goal.priority",
      "mustSupport" : true
    },
    {
      "id" : "Goal.description",
      "path" : "Goal.description",
      "mustSupport" : true
    },
    {
      "id" : "Goal.subject",
      "path" : "Goal.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/Group|5.0.0",
        "https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Goal.start[x]",
      "path" : "Goal.start[x]",
      "mustSupport" : true
    },
    {
      "id" : "Goal.target",
      "path" : "Goal.target",
      "mustSupport" : true
    },
    {
      "id" : "Goal.source",
      "path" : "Goal.source",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/care-team-lt|0.3.0"]
      }]
    },
    {
      "id" : "Goal.addresses",
      "path" : "Goal.addresses",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/condition-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/observation-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/service-request-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/procedure-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/MedicationStatement|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/MedicationRequest|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/NutritionOrder|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/RiskAssessment|5.0.0"]
      }]
    },
    {
      "id" : "Goal.note",
      "path" : "Goal.note",
      "mustSupport" : true
    },
    {
      "id" : "Goal.outcome",
      "path" : "Goal.outcome",
      "type" : [{
        "code" : "CodeableReference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/observation-lt|0.3.0"]
      }],
      "mustSupport" : true
    }]
  }
}

```
