# Heart Rate - Lithuanian Vital Signs Implementation Guide v0.0.1

## Resource Profile: Heart Rate 

 
The number of heart beats in a minute. 

**Usages:**

* Examples for this Profile: [Observation/example-heart-rate](Observation-example-heart-rate.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.vitalsigns|current/StructureDefinition/heart-rate)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-heart-rate.csv), [Excel](../StructureDefinition-heart-rate.xlsx), [Schematron](../StructureDefinition-heart-rate.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "heart-rate",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/StructureDefinition/heart-rate",
  "version" : "1.0.0",
  "name" : "HeartRate",
  "title" : "Heart Rate",
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
  "description" : "The number of heart beats in a minute.",
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
        "path" : "Observation"
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
        "id" : "Observation.extension:exerciseAssociation",
        "path" : "Observation.extension",
        "sliceName" : "exerciseAssociation",
        "short" : "Exercise Association",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "https://hl7.lt/fhir/vitalsigns/StructureDefinition/exercise-association|2.0.0"
            ]
          }
        ],
        "mustSupport" : true
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
        "id" : "Observation.extension:sleepStatus",
        "path" : "Observation.extension",
        "sliceName" : "sleepStatus",
        "short" : "Sleep Status",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "https://hl7.lt/fhir/vitalsigns/StructureDefinition/sleep-status|2.0.0"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.extension:associatedSituation",
        "path" : "Observation.extension",
        "sliceName" : "associatedSituation",
        "short" : "Associated Situation",
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
        "id" : "Observation.category:HeartRateCategory",
        "path" : "Observation.category",
        "sliceName" : "HeartRateCategory",
        "min" : 1,
        "max" : "1",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "8867-4"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "short" : "Heart Rate",
        "definition" : "Heart Rate.",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "VitalSignsHeartRate"
            }
          ],
          "strength" : "preferred",
          "description" : "This identifies the set of LOINC codes that are appropriate for representing heart rate vital sign measurements in Observation.code. <br/>R6! Proper link is https://build.fhir.org/valueset-observation-vitalsign-heartrate.html <br/>TODO: own valieset that based on SNOMED",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/heart-rate-observation|6.0.0"
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
        "condition" : ["vshree-1"]
      },
      {
        "id" : "Observation.value[x]",
        "path" : "Observation.value[x]",
        "short" : "Common UCUM rate units for vital signs including heart and respiratory rate. <br/>R6! Proper link is https://build.fhir.org/valueset-ucum-vitalsignsrate.html.",
        "type" : [
          {
            "code" : "Quantity"
          }
        ],
        "condition" : ["vshree-2", "obs-6"],
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/binding-definition",
              "valueMarkdown" : "Common UCUM rate units for vital signs including heart and respiratory rate."
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "VitalSignsRateUnit"
            }
          ],
          "strength" : "required",
          "description" : "/min",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/vital-signs-rate-unit|6.0.0"
        }
      },
      {
        "id" : "Observation.dataAbsentReason",
        "path" : "Observation.dataAbsentReason",
        "condition" : ["vshree-2"]
      },
      {
        "id" : "Observation.interpretation",
        "path" : "Observation.interpretation",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/numeric-result-interpretation|1.0.0"
        }
      },
      {
        "id" : "Observation.bodySite",
        "path" : "Observation.bodySite",
        "max" : "0",
        "mustSupport" : true,
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/heart-rate-measurement-body-location|1.0.0"
        }
      },
      {
        "id" : "Observation.bodyStructure",
        "path" : "Observation.bodyStructure",
        "short" : "Describe body characteristics where on/in body an observation or procedure took place",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/vitalsigns/StructureDefinition/body-structure-blood-pressure|0.0.1"
            ]
          }
        ]
      },
      {
        "id" : "Observation.method",
        "path" : "Observation.method",
        "mustSupport" : true,
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/heart-rate-measurement-method|1.0.0"
        }
      },
      {
        "id" : "Observation.device",
        "path" : "Observation.device",
        "short" : "Heart Rate Measurement Device",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/vitalsigns/StructureDefinition/device-heart-rate|1.0.0"
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
