# Blood Pressure Panel - Lithuanian Vital Signs Implementation Guide v0.0.1

## Resource Profile: Blood Pressure Panel 

 
Blood Pressure Panel; a grouping of systolic, diastolic, and mean arterial blood pressure components. 

**Usages:**

* Examples for this Profile: [Observation/example-blood-pressure](Observation-example-blood-pressure.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.vitalsigns|current/StructureDefinition/blood-pressure-panel)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-blood-pressure-panel.csv), [Excel](../StructureDefinition-blood-pressure-panel.xlsx), [Schematron](../StructureDefinition-blood-pressure-panel.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "blood-pressure-panel",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/StructureDefinition/blood-pressure-panel",
  "version" : "1.0.0",
  "name" : "BloodPressurePanel",
  "title" : "Blood Pressure Panel",
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
  "description" : "Blood Pressure Panel; a grouping of systolic, diastolic, and mean arterial blood pressure components.",
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
        "id" : "Observation.category:BPCategory",
        "path" : "Observation.category",
        "sliceName" : "BPCategory",
        "min" : 1,
        "max" : "1",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "85354-9"
            }
          ]
        }
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "short" : "Blood Pressure",
        "definition" : "Blood Pressure.",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "BloodPressurePanelObservation"
            }
          ],
          "strength" : "preferred",
          "description" : "This identifies the set of LOINC codes that are appropriate for representing an arterial systolic and diastolic BP panel of vital sign measurements in Observation.code.",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/bp-panel-observation|6.0.0"
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
        "condition" : ["vsp-2"]
      },
      {
        "id" : "Observation.value[x]",
        "path" : "Observation.value[x]",
        "max" : "0"
      },
      {
        "id" : "Observation.interpretation",
        "path" : "Observation.interpretation",
        "max" : "1",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/numeric-result-interpretation|1.0.0"
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
          "description" : "A set of codes that describe the method used to measure a blood pressure",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/bp-measurement-method|1.0.0"
        }
      },
      {
        "id" : "Observation.specimen",
        "path" : "Observation.specimen",
        "max" : "0"
      },
      {
        "id" : "Observation.device",
        "path" : "Observation.device",
        "short" : "Blood Pressure Device",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/vitalsigns/StructureDefinition/device-blood-pressure|1.0.0"
            ]
          }
        ]
      },
      {
        "id" : "Observation.component",
        "path" : "Observation.component",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "extension.url"
            },
            {
              "type" : "pattern",
              "path" : "extension.value"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "short" : "Used when reporting systolic and diastolic blood pressure.",
        "definition" : "Used when reporting systolic and diastolic blood pressure.",
        "min" : 2
      },
      {
        "id" : "Observation.component:SystolicBP",
        "path" : "Observation.component",
        "sliceName" : "SystolicBP",
        "min" : 1,
        "max" : "1",
        "constraint" : [
          {
            "key" : "vsp-3-sbp",
            "severity" : "error",
            "human" : "If the systolic BP component exists and there is no component value a component data absent reason must be present.",
            "expression" : "component.all(value.exists() or dataAbsentReason.exists())",
            "source" : "https://hl7.lt/fhir/vitalsigns/StructureDefinition/blood-pressure-panel|1.0.0"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:SystolicBP.extension",
        "path" : "Observation.component.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            },
            {
              "type" : "value",
              "path" : "value"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Observation.component:SystolicBP.extension:SBPCode",
        "path" : "Observation.component.extension",
        "sliceName" : "SBPCode",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/observation-componentCategory|5.2.0"
            ]
          }
        ]
      },
      {
        "id" : "Observation.component:SystolicBP.extension:SBPCode.value[x]",
        "path" : "Observation.component.extension.value[x]",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "8480-6"
            }
          ]
        }
      },
      {
        "id" : "Observation.component:SystolicBP.code",
        "path" : "Observation.component.code",
        "short" : "Systolic Blood Pressure",
        "definition" : "Systolic Blood Pressure.",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "8480-6"
            }
          ]
        },
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "BloodPressureSystolicObservation"
            }
          ],
          "strength" : "preferred",
          "description" : "This identifies the set of LOINC codes that are appropriate for representing an arterial systolic BP vital sign measurement in Observation.component.code.",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/bp-systolic-observation|6.0.0"
        }
      },
      {
        "id" : "Observation.component:SystolicBP.value[x]",
        "path" : "Observation.component.value[x]",
        "short" : "Vital Sign Systolic BP Component Value recorded with UCUM mm[Hg]",
        "definition" : "Vital Sign Systolic BP Component Value recorded with UCUM mm[Hg].",
        "type" : [
          {
            "code" : "Quantity"
          }
        ],
        "condition" : ["vsp-3-sbp"],
        "binding" : {
          "strength" : "required",
          "valueSet" : "https://hl7.lt/fhir/tx/ValueSet/bp-unit|6.0.0"
        }
      },
      {
        "id" : "Observation.component:SystolicBP.value[x].value",
        "path" : "Observation.component.value[x].value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:SystolicBP.value[x].unit",
        "path" : "Observation.component.value[x].unit",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:SystolicBP.value[x].system",
        "path" : "Observation.component.value[x].system",
        "min" : 1,
        "fixedUri" : "http://unitsofmeasure.org",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:SystolicBP.value[x].code",
        "path" : "Observation.component.value[x].code",
        "min" : 1,
        "fixedCode" : "mm[Hg]",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:SystolicBP.dataAbsentReason",
        "path" : "Observation.component.dataAbsentReason",
        "condition" : ["vsp-3-sbp"],
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:DiastolicBP",
        "path" : "Observation.component",
        "sliceName" : "DiastolicBP",
        "min" : 1,
        "max" : "1",
        "constraint" : [
          {
            "key" : "vsp-3-dbp",
            "severity" : "error",
            "human" : "If the diastolic BP component exists and there is no component value a component data absent reason must be present.",
            "expression" : "component.all(value.exists() or dataAbsentReason.exists())",
            "source" : "https://hl7.lt/fhir/vitalsigns/StructureDefinition/blood-pressure-panel|1.0.0"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:DiastolicBP.extension",
        "path" : "Observation.component.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            },
            {
              "type" : "pattern",
              "path" : "value"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Observation.component:DiastolicBP.extension:DBPCode",
        "path" : "Observation.component.extension",
        "sliceName" : "DBPCode",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/observation-componentCategory|5.2.0"
            ]
          }
        ]
      },
      {
        "id" : "Observation.component:DiastolicBP.extension:DBPCode.value[x]",
        "path" : "Observation.component.extension.value[x]",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "8462-4"
            }
          ]
        }
      },
      {
        "id" : "Observation.component:DiastolicBP.code",
        "path" : "Observation.component.code",
        "short" : "Diastolic Blood Pressure",
        "definition" : "Diastolic Blood Pressure.",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "BloodPressureDiastolicObservation"
            }
          ],
          "strength" : "preferred",
          "description" : "This identifies the set of LOINC codes that are appropriate for representing an arterial diastolic BP vital sign measurement in Observation.component.code.",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/bp-diastolic-observation|6.0.0"
        }
      },
      {
        "id" : "Observation.component:DiastolicBP.value[x]",
        "path" : "Observation.component.value[x]",
        "short" : "Vital Sign DiastolicBP BP Component Value recorded with UCUM mm[Hg]",
        "definition" : "Vital Sign DiastolicBP BP Component Value recorded with UCUM mm[Hg].",
        "type" : [
          {
            "code" : "Quantity"
          }
        ],
        "condition" : ["vsp-3-dbp"],
        "binding" : {
          "strength" : "required",
          "valueSet" : "https://hl7.lt/fhir/tx/ValueSet/bp-unit|6.0.0"
        }
      },
      {
        "id" : "Observation.component:DiastolicBP.value[x].value",
        "path" : "Observation.component.value[x].value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:DiastolicBP.value[x].unit",
        "path" : "Observation.component.value[x].unit",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:DiastolicBP.value[x].system",
        "path" : "Observation.component.value[x].system",
        "min" : 1,
        "fixedUri" : "http://unitsofmeasure.org",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:DiastolicBP.value[x].code",
        "path" : "Observation.component.value[x].code",
        "min" : 1,
        "fixedCode" : "mm[Hg]",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:DiastolicBP.dataAbsentReason",
        "path" : "Observation.component.dataAbsentReason",
        "condition" : ["vsp-3-dbp"],
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanArterialBP",
        "path" : "Observation.component",
        "sliceName" : "MeanArterialBP",
        "short" : "Mean Arterial Blood Pressure",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanArterialBP.extension",
        "path" : "Observation.component.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            },
            {
              "type" : "value",
              "path" : "value"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Observation.component:MeanArterialBP.extension:MeanCode",
        "path" : "Observation.component.extension",
        "sliceName" : "MeanCode",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/observation-componentCategory|5.2.0"
            ]
          }
        ]
      },
      {
        "id" : "Observation.component:MeanArterialBP.extension:MeanCode.value[x]",
        "path" : "Observation.component.extension.value[x]",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "8478-0"
            }
          ]
        }
      },
      {
        "id" : "Observation.component:MeanArterialBP.code",
        "path" : "Observation.component.code",
        "short" : "Mean blood pressure",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "8478-0"
            }
          ]
        }
      },
      {
        "id" : "Observation.component:MeanArterialBP.value[x]",
        "path" : "Observation.component.value[x]",
        "type" : [
          {
            "code" : "Quantity"
          }
        ]
      },
      {
        "id" : "Observation.component:MeanArterialBP.value[x].value",
        "path" : "Observation.component.value[x].value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanArterialBP.value[x].unit",
        "path" : "Observation.component.value[x].unit",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanArterialBP.value[x].system",
        "path" : "Observation.component.value[x].system",
        "min" : 1,
        "fixedUri" : "http://unitsofmeasure.org",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component:MeanArterialBP.value[x].code",
        "path" : "Observation.component.value[x].code",
        "min" : 1,
        "fixedCode" : "mm[Hg]",
        "mustSupport" : true
      }
    ]
  }
}

```
