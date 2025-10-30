# LT Base Encounter - Lithuanian Base Implementation Guide v0.2.0

## Resource Profile: LT Base Encounter ( Experimental ) 

 
Lithuanian Base Encounter profile, used to represent clinical encounters 

**Usages:**

* Refer to this Profile: [LT Base Condition](StructureDefinition-lt-condition.md) and [LT Base Observation](StructureDefinition-lt-observation.md)
* Examples for this Profile: [Encounter/example-encounter](Encounter-example-encounter.md) and [Encounter/example-pencounter](Encounter-example-pencounter.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/lt-encounter)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-lt-encounter.csv), [Excel](../StructureDefinition-lt-encounter.xlsx), [Schematron](../StructureDefinition-lt-encounter.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "lt-encounter",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/lt-encounter",
  "version" : "0.2.0",
  "name" : "LTBaseEncounter",
  "title" : "LT Base Encounter",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-10-15",
  "publisher" : "Lithuanian Medical Library",
  "_publisher" : {
    "extension" : [
      {
        "extension" : [
          {
            "url" : "lang",
            "valueCode" : "lt"
          },
          {
            "url" : "content",
            "valueString" : "Lietuvos medicinos biblioteka"
          }
        ],
        "url" : "http://hl7.org/fhir/StructureDefinition/translation"
      }
    ]
  },
  "contact" : [
    {
      "name" : "Lithuanian Medical Library",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://medicinosnk.lt"
        },
        {
          "system" : "email",
          "value" : "info@medicinosnk.lt"
        }
      ]
    }
  ],
  "description" : "Lithuanian Base Encounter profile, used to represent clinical encounters",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "LT"
        }
      ]
    }
  ],
  "fhirVersion" : "5.0.0",
  "mapping" : [
    {
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Encounter",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Encounter|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
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
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/base/StructureDefinition/lt-patient|0.2.0"
            ]
          }
        ],
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
        "type" : [
          {
            "code" : "CodeableReference",
            "targetProfile" : [
              "https://hl7.lt/fhir/base/StructureDefinition/lt-condition|0.2.0",
              "http://hl7.org/fhir/StructureDefinition/DiagnosticReport|5.0.0",
              "http://hl7.org/fhir/StructureDefinition/Procedure|5.0.0",
              "https://hl7.lt/fhir/base/StructureDefinition/lt-observation|0.2.0"
            ]
          }
        ],
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
      }
    ]
  }
}

```
