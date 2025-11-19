# Body Weight - Lithuanian Vital Signs Implementation Guide v0.0.1

## Resursų profilis: Body Weight 

 
The measured mass of an individual's body. 

**Usages:**

* Examples for this Profile: [Observation/example-body-weight](Observation-example-body-weight.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.vitalsigns|current/StructureDefinition/body-weight)

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

#### Constraints

#### Terminology Bindings

#### Constraints

**Summary**

Mandatory: 3 elements
 Must-Support: 4 elements
 Prohibited: 3 elements

**Structures**

This structure refers to these other structures:

* [Body Weight Measurement Device(https://hl7.lt/fhir/vitalsigns/StructureDefinition/device-body-weight|1.0.0)](StructureDefinition-device-body-weight.md)

**Extensions**

This structure refers to these extensions:

* [https://hl7.lt/fhir/vitalsigns/StructureDefinition/associated-situation|2.0.0](StructureDefinition-associated-situation.md)
* [https://hl7.lt/fhir/vitalsigns/StructureDefinition/measurement-setting|2.0.0](StructureDefinition-measurement-setting.md)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Observation.category

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

#### Terminology Bindings (Differential)

#### Constraints

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

**Summary**

Mandatory: 3 elements
 Must-Support: 4 elements
 Prohibited: 3 elements

**Structures**

This structure refers to these other structures:

* [Body Weight Measurement Device(https://hl7.lt/fhir/vitalsigns/StructureDefinition/device-body-weight|1.0.0)](StructureDefinition-device-body-weight.md)

**Extensions**

This structure refers to these extensions:

* [https://hl7.lt/fhir/vitalsigns/StructureDefinition/associated-situation|2.0.0](StructureDefinition-associated-situation.md)
* [https://hl7.lt/fhir/vitalsigns/StructureDefinition/measurement-setting|2.0.0](StructureDefinition-measurement-setting.md)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Observation.category

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-body-weight.csv), [Excel](../StructureDefinition-body-weight.xlsx), [Schematron](../StructureDefinition-body-weight.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "body-weight",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/StructureDefinition/body-weight",
  "version" : "1.0.0",
  "name" : "BodyWeight",
  "title" : "Body Weight",
  "status" : "draft",
  "date" : "2025-11-19T15:59:23+02:00",
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
  "description" : "The measured mass of an individual's body.",
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
  "copyright" : "MIT",
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
  "type" : "Observation",
  "baseDefinition" : "https://hl7.lt/fhir/base/StructureDefinition/lt-observation|0.2.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation",
        "short" : "Body Weight Profile (EE)",
        "definition" : "This profile defines  how to represent body weight observations in FHIR using a standard LOINC code and UCUM units of measure.",
        "constraint" : [
          {
            "key" : "vs-bw-1",
            "severity" : "error",
            "human" : "if Observation.effective[x] (as dateTime) has a value then that value shall be precise at least to the day",
            "expression" : "(effective as dateTime).toString().length() >= 8",
            "source" : "https://hl7.lt/fhir/vitalsigns/StructureDefinition/body-weight|1.0.0"
          },
          {
            "key" : "vs-bw-2",
            "severity" : "error",
            "human" : "For single vital signs observations (that do not require use of components or hasMember), then either a value[x] or a data absent reason must be present.",
            "expression" : "dataAbsentReason.exists() or value.exists()",
            "source" : "https://hl7.lt/fhir/vitalsigns/StructureDefinition/body-weight|1.0.0"
          }
        ]
      },
      {
        "id" : "Observation.extension",
        "path" : "Observation.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Observation.extension:associatedSituation",
        "path" : "Observation.extension",
        "sliceName" : "associatedSituation",
        "short" : "Description of the state of dress of the person at the time of weighing",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "https://hl7.lt/fhir/vitalsigns/StructureDefinition/associated-situation|2.0.0"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.extension:associatedSituation.value[x]",
        "path" : "Observation.extension.value[x]",
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ]
      },
      {
        "id" : "Observation.extension:associatedSituation.value[x]:valueCodeableConcept",
        "path" : "Observation.extension.value[x]",
        "sliceName" : "valueCodeableConcept",
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/body-weight-associated-situation|1.0.0"
        }
      },
      {
        "id" : "Observation.extension:measurementSetting",
        "path" : "Observation.extension",
        "sliceName" : "measurementSetting",
        "short" : "Measurement setting",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "https://hl7.lt/fhir/vitalsigns/StructureDefinition/measurement-setting|2.0.0"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.category",
        "path" : "Observation.category",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "pattern",
              "path" : "$this"
            }
          ],
          "rules" : "open"
        },
        "min" : 2
      },
      {
        "id" : "Observation.category:VSCat",
        "path" : "Observation.category",
        "sliceName" : "VSCat",
        "definition" : "This vital signs category",
        "min" : 1,
        "max" : "1",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
              "code" : "vital-signs"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Observation.category:BodyWeightCode",
        "path" : "Observation.category",
        "sliceName" : "BodyWeightCode",
        "definition" : "This body weight category",
        "min" : 1,
        "max" : "1",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "29463-7"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "short" : "Body Weight",
        "definition" : "Body Weight.",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "BodyWeightObservation"
            }
          ],
          "strength" : "preferred",
          "description" : "This identifies the set of LOINC codes that are appropriate for representing body weight vital sign measurements in Observation.code.",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/body-weight-observation|6.0.0"
        }
      },
      {
        "id" : "Observation.effective[x]",
        "path" : "Observation.effective[x]",
        "short" : "Vital Signs are point in time measurements and are recorded using the dateTime data type",
        "definition" : "Vital Signs are point in time measurements and are recorded using the dateTime data type.",
        "min" : 1,
        "type" : [
          {
            "code" : "dateTime"
          }
        ],
        "condition" : ["vs-bw-1"]
      },
      {
        "id" : "Observation.value[x]",
        "path" : "Observation.value[x]",
        "type" : [
          {
            "code" : "Quantity"
          }
        ],
        "condition" : ["vs-bw-2", "obs-6"],
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/binding-definition",
              "valueMarkdown" : "Common UCUM units for Body Weight."
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "BodyWeightUnits"
            }
          ],
          "strength" : "required",
          "description" : "g | kg  | [lb_av]",
          "valueSet" : "http://hl7.org/fhir/ValueSet/ucum-bodyweight|5.0.0"
        }
      },
      {
        "id" : "Observation.dataAbsentReason",
        "path" : "Observation.dataAbsentReason",
        "condition" : ["vs-bw-2"]
      },
      {
        "id" : "Observation.interpretation",
        "path" : "Observation.interpretation",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/numeric-result-interpretation-non-panic|1.0.0"
        }
      },
      {
        "id" : "Observation.bodySite",
        "path" : "Observation.bodySite",
        "max" : "0"
      },
      {
        "id" : "Observation.bodyStructure",
        "path" : "Observation.bodyStructure",
        "max" : "0"
      },
      {
        "id" : "Observation.device",
        "path" : "Observation.device",
        "short" : "Body Weight Measurement Device",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/vitalsigns/StructureDefinition/device-body-weight|1.0.0"
            ]
          }
        ]
      },
      {
        "id" : "Observation.component",
        "path" : "Observation.component",
        "max" : "0"
      }
    ]
  }
}

```
