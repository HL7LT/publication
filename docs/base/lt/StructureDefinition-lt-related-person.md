# LT Base Related Person - Lithuanian Base Implementation Guide v0.1.0

## Resursų profilis: LT Base Related Person ( Eksperimentinis ) 

 
Lithuanian Base Related Person profile, used to define persons related to a patient 

**Usages:**

* Refer to this Profile: [LT Base Condition](StructureDefinition-lt-condition.md)
* Examples for this Profile: [RelatedPerson/example-related-person](RelatedPerson-example-related-person.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/lt-related-person)

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

Must-Support: 4 elements

**Structures**

This structure refers to these other structures:

* [LT Base Patient(https://hl7.lt/fhir/base/StructureDefinition/lt-patient|0.1.0)](StructureDefinition-lt-patient.md)

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

**Summary**

Must-Support: 4 elements

**Structures**

This structure refers to these other structures:

* [LT Base Patient(https://hl7.lt/fhir/base/StructureDefinition/lt-patient|0.1.0)](StructureDefinition-lt-patient.md)

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-lt-related-person.csv), [Excel](../StructureDefinition-lt-related-person.xlsx), [Schematron](../StructureDefinition-lt-related-person.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "lt-related-person",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/lt-related-person",
  "version" : "0.1.0",
  "name" : "LTBaseRelatedPerson",
  "title" : "LT Base Related Person",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-10-27T15:58:38+02:00",
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
  "description" : "Lithuanian Base Related Person profile, used to define persons related to a patient",
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "RelatedPerson",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
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
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/base/StructureDefinition/lt-patient|0.1.0"
            ]
          }
        ],
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
      }
    ]
  }
}

```
