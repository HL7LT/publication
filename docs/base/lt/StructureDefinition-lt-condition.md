# LT Base Condition - Lithuanian Base Implementation Guide v0.2.0

## Resursų profilis: LT Base Condition ( Eksperimentinis ) 

 
Lithuanian Base Condition profile, used for documenting general, symptoms, conditions, and their characteristics. 

**Usages:**

* Refer to this Profile: [LT Base Encounter](StructureDefinition-lt-encounter.md)
* Examples for this Profile: [Condition/example-cancer](Condition-example-cancer.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/lt-condition)

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

**Summary**

Must-Support: 12 elements

**Structures**

This structure refers to these other structures:

* [LT Base Patient(https://hl7.lt/fhir/base/StructureDefinition/lt-patient|0.2.0)](StructureDefinition-lt-patient.md)
* [LT Base Encounter(https://hl7.lt/fhir/base/StructureDefinition/lt-encounter|0.2.0)](StructureDefinition-lt-encounter.md)
* [LT Base Practitioner(https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner|0.2.0)](StructureDefinition-lt-practitioner.md)
* [LT Base Practitioner Role(https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner-role|0.2.0)](StructureDefinition-lt-practitioner-role.md)
* [LT Base Related Person(https://hl7.lt/fhir/base/StructureDefinition/lt-related-person|0.2.0)](StructureDefinition-lt-related-person.md)
* [Device(http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

**Summary**

Must-Support: 12 elements

**Structures**

This structure refers to these other structures:

* [LT Base Patient(https://hl7.lt/fhir/base/StructureDefinition/lt-patient|0.2.0)](StructureDefinition-lt-patient.md)
* [LT Base Encounter(https://hl7.lt/fhir/base/StructureDefinition/lt-encounter|0.2.0)](StructureDefinition-lt-encounter.md)
* [LT Base Practitioner(https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner|0.2.0)](StructureDefinition-lt-practitioner.md)
* [LT Base Practitioner Role(https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner-role|0.2.0)](StructureDefinition-lt-practitioner-role.md)
* [LT Base Related Person(https://hl7.lt/fhir/base/StructureDefinition/lt-related-person|0.2.0)](StructureDefinition-lt-related-person.md)
* [Device(http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-lt-condition.csv), [Excel](../StructureDefinition-lt-condition.xlsx), [Schematron](../StructureDefinition-lt-condition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "lt-condition",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/lt-condition",
  "version" : "0.2.0",
  "name" : "LTBaseCondition",
  "title" : "LT Base Condition",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-10-30T19:04:29+02:00",
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
  "description" : "Lithuanian Base Condition profile, used for documenting general, symptoms, conditions, and their characteristics.",
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Condition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Condition|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
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
        "id" : "Condition.encounter",
        "path" : "Condition.encounter",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/base/StructureDefinition/lt-encounter|0.2.0"
            ]
          }
        ],
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
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner|0.2.0",
              "https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner-role|0.2.0",
              "https://hl7.lt/fhir/base/StructureDefinition/lt-patient|0.2.0",
              "https://hl7.lt/fhir/base/StructureDefinition/lt-related-person|0.2.0",
              "http://hl7.org/fhir/StructureDefinition/Device|5.0.0"
            ]
          }
        ]
      },
      {
        "id" : "Condition.note",
        "path" : "Condition.note",
        "mustSupport" : true
      }
    ]
  }
}

```
