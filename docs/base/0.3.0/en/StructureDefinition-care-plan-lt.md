# CarePlanLt - Lithuanian Base Implementation Guide v0.3.0

## Resource Profile: CarePlanLt 

 
Lithuanian Base CarePlan profile, used for describing care plans. 

**Usages:**

* Refer to this Profile: [CarePlanLt](StructureDefinition-care-plan-lt.md), [DiagnosticReportLt](StructureDefinition-diagnostic-report-lt.md) and [ServiceRequestLt](StructureDefinition-service-request-lt.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/care-plan-lt)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-care-plan-lt.csv), [Excel](../StructureDefinition-care-plan-lt.xlsx), [Schematron](../StructureDefinition-care-plan-lt.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "care-plan-lt",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/care-plan-lt",
  "version" : "0.3.0",
  "name" : "CarePlanLt",
  "title" : "CarePlanLt",
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
  "description" : "Lithuanian Base CarePlan profile, used for describing care plans.",
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
  "type" : "CarePlan",
  "baseDefinition" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/CarePlanEu|0.1.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "CarePlan",
      "path" : "CarePlan"
    },
    {
      "id" : "CarePlan.identifier",
      "path" : "CarePlan.identifier",
      "mustSupport" : true
    },
    {
      "id" : "CarePlan.basedOn",
      "path" : "CarePlan.basedOn",
      "type" : [{
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-hierarchy",
          "valueBoolean" : true
        }],
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/service-request-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/care-plan-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/RequestOrchestration|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/NutritionOrder|5.0.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "CarePlan.replaces",
      "path" : "CarePlan.replaces",
      "type" : [{
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-hierarchy",
          "valueBoolean" : true
        }],
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/care-plan-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "CarePlan.status",
      "path" : "CarePlan.status",
      "mustSupport" : true
    },
    {
      "id" : "CarePlan.intent",
      "path" : "CarePlan.intent",
      "mustSupport" : true
    },
    {
      "id" : "CarePlan.category",
      "path" : "CarePlan.category",
      "mustSupport" : true
    },
    {
      "id" : "CarePlan.title",
      "path" : "CarePlan.title",
      "mustSupport" : true
    },
    {
      "id" : "CarePlan.title.extension:translation",
      "path" : "CarePlan.title.extension",
      "sliceName" : "translation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/translation|5.2.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "CarePlan.description",
      "path" : "CarePlan.description",
      "mustSupport" : true
    },
    {
      "id" : "CarePlan.subject",
      "path" : "CarePlan.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/Group|5.0.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "CarePlan.encounter",
      "path" : "CarePlan.encounter",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/encounter-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "CarePlan.custodian",
      "path" : "CarePlan.custodian",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/care-team-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/Device|5.0.0"]
      }]
    },
    {
      "id" : "CarePlan.contributor",
      "path" : "CarePlan.contributor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/care-team-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/Device|5.0.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "CarePlan.careTeam",
      "path" : "CarePlan.careTeam",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/care-team-lt|0.3.0"]
      }]
    },
    {
      "id" : "CarePlan.addresses",
      "path" : "CarePlan.addresses",
      "type" : [{
        "code" : "CodeableReference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/condition-lt|0.3.0"]
      }]
    },
    {
      "id" : "CarePlan.goal",
      "path" : "CarePlan.goal",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/goal-lt|0.3.0"]
      }]
    },
    {
      "id" : "CarePlan.activity",
      "path" : "CarePlan.activity",
      "mustSupport" : true
    },
    {
      "id" : "CarePlan.activity.plannedActivityReference",
      "path" : "CarePlan.activity.plannedActivityReference",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/appointment-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/CommunicationRequest|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/DeviceRequest|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/MedicationRequest|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/NutritionOrder|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/Task|5.0.0",
        "https://hl7.lt/fhir/base/StructureDefinition/service-request-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/VisionPrescription|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/RequestOrchestration|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/ImmunizationRecommendation|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/SupplyRequest|5.0.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "CarePlan.note",
      "path" : "CarePlan.note",
      "mustSupport" : true
    }]
  }
}

```
