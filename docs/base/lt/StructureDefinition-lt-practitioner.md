# LT Base Practitioner - Lithuanian Base Implementation Guide v0.2.0

## Resursų profilis: LT Base Practitioner ( Eksperimentinis ) 

 
Lithuanian Base Practitioner profile, used to define healthcare practitioners 

**Usages:**

* Refer to this Profile: [LT Base Condition](StructureDefinition-lt-condition.md), [LT Base Observation](StructureDefinition-lt-observation.md), [LT Base Patient](StructureDefinition-lt-patient.md) and [LT Base Practitioner Role](StructureDefinition-lt-practitioner-role.md)
* Examples for this Profile: [Practitioner/example-practitioner](Practitioner-example-practitioner.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/lt-practitioner)

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

Mandatory: 1 element(1 nested mandatory element)
 Must-Support: 16 elements

**Structures**

This structure refers to these other structures:

* [LT Base Organization(https://hl7.lt/fhir/base/StructureDefinition/lt-organization|0.2.0)](StructureDefinition-lt-organization.md)

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

**Summary**

Mandatory: 1 element(1 nested mandatory element)
 Must-Support: 16 elements

**Structures**

This structure refers to these other structures:

* [LT Base Organization(https://hl7.lt/fhir/base/StructureDefinition/lt-organization|0.2.0)](StructureDefinition-lt-organization.md)

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-lt-practitioner.csv), [Excel](../StructureDefinition-lt-practitioner.xlsx), [Schematron](../StructureDefinition-lt-practitioner.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "lt-practitioner",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner",
  "version" : "0.2.0",
  "name" : "LTBasePractitioner",
  "title" : "LT Base Practitioner",
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
  "description" : "Lithuanian Base Practitioner profile, used to define healthcare practitioners",
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Practitioner",
  "baseDefinition" : "http://hl7.eu/fhir/base-r5/StructureDefinition/practitioner-eu-core|0.1.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Practitioner",
        "path" : "Practitioner"
      },
      {
        "id" : "Practitioner.identifier",
        "path" : "Practitioner.identifier",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.identifier.system",
        "path" : "Practitioner.identifier.system",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.identifier.value",
        "path" : "Practitioner.identifier.value",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.active",
        "path" : "Practitioner.active",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.name",
        "path" : "Practitioner.name",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.name.family",
        "path" : "Practitioner.name.family",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.name.given",
        "path" : "Practitioner.name.given",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.telecom",
        "path" : "Practitioner.telecom",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.telecom.system",
        "path" : "Practitioner.telecom.system",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.telecom.value",
        "path" : "Practitioner.telecom.value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.telecom.use",
        "path" : "Practitioner.telecom.use",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.qualification",
        "path" : "Practitioner.qualification",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.qualification.identifier",
        "path" : "Practitioner.qualification.identifier",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.qualification.code",
        "path" : "Practitioner.qualification.code",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.qualification.period",
        "path" : "Practitioner.qualification.period",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.qualification.issuer",
        "path" : "Practitioner.qualification.issuer",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/base/StructureDefinition/lt-organization|0.2.0"
            ]
          }
        ],
        "mustSupport" : true
      }
    ]
  }
}

```
