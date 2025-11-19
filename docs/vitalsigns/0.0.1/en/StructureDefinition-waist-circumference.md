# Waist Circumference - Lithuanian Vital Signs Implementation Guide v0.0.1

## Resource Profile: Waist Circumference 

 
Waist circumference by Tape measure. The measurement in centimeters or inches around the narrowest part of the waist. 

**Usages:**

* Examples for this Profile: [Observation/example-waist-circumference](Observation-example-waist-circumference.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.vitalsigns|current/StructureDefinition/waist-circumference)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-waist-circumference.csv), [Excel](../StructureDefinition-waist-circumference.xlsx), [Schematron](../StructureDefinition-waist-circumference.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "waist-circumference",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/StructureDefinition/waist-circumference",
  "version" : "1.0.0",
  "name" : "WaistCircumference",
  "title" : "Waist Circumference",
  "status" : "draft",
  "date" : "2025-11-19T15:54:38+02:00",
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
  "description" : "Waist circumference by Tape measure. The measurement in centimeters or inches around the narrowest part of the waist.",
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
        "short" : "Waist Circumference Profile",
        "definition" : "This profile defines  how to represent waist circumference observations in FHIR using a standard LOINC code and UCUM units of measure.",
        "constraint" : [
          {
            "key" : "vs-bw-2",
            "severity" : "error",
            "human" : "For single vital signs observations (that do not require use of components or hasMember), then either a value[x] or a data absent reason must be present.",
            "expression" : "dataAbsentReason.exists() or value.exists()",
            "source" : "https://hl7.lt/fhir/vitalsigns/StructureDefinition/waist-circumference|1.0.0"
          }
        ]
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
        "id" : "Observation.category:WaistCircumferenceCode",
        "path" : "Observation.category",
        "sliceName" : "WaistCircumferenceCode",
        "definition" : "This waist circumference category",
        "min" : 1,
        "max" : "1",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "8280-0",
              "display" : "Waist Circumference at umbilicus by Tape measure"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "short" : "Waist Circumference observation",
        "definition" : "Waist Circumference observation.",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "VitalSignsWaistCircumference"
            }
          ],
          "strength" : "preferred",
          "description" : "This identifies the set of LOINC codes that are appropriate for representing waist circumference vital sign measurements in Observation.code.",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/waist-circumference-obervation|1.0.0"
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
        ]
      },
      {
        "id" : "Observation.value[x]",
        "path" : "Observation.value[x]",
        "type" : [
          {
            "code" : "Quantity"
          }
        ],
        "condition" : ["vs-bh-2", "obs-6"],
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/binding-definition",
              "valueMarkdown" : "Common UCUM units for body length measures such as Body Height and Head Circumference."
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "BodyLengthUnits"
            }
          ],
          "strength" : "required",
          "description" : "cm | [in_i]",
          "valueSet" : "http://hl7.org/fhir/ValueSet/ucum-bodylength|5.0.0"
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
        "id" : "Observation.method",
        "path" : "Observation.method",
        "max" : "0"
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
