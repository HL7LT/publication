# Example Blood Pressure Observation - Lithuanian Vital Signs Implementation Guide v0.0.1

## Pavyzdys Observation: Example Blood Pressure Observation

-------

**Lithuanian**

-------

Language: en

Profile: [Blood Pressure Panel](StructureDefinition-blood-pressure-panel.md)

**status**: Final

**category**: Vital Signs, Blood pressure panel with all children optional

**code**: Blood pressure panel with all children optional

**subject**: [Jonas Petrauskas(official) Male, DoB: 1985-01-01 ( http://hospital-lt.lt/patient-id#HOSPLT-10005 (use: usual, ))](Patient-example-patient.md)

**effective**: 2025-08-01 10:00:00+0000

**interpretation**: Normal

**note**: 

> 

Patient was seated for 5 minutes before measurement.


**device**: [Device: status = active; manufacturer = Omron Healthcare; type = Non-invasive blood pressure monitor (physical object)](Device-example-device-blood-pressure.md)

> **component****Observation Component Category Code**:Systolic blood pressure**code**:Systolic blood pressure**value**: 117 mmHg(Details: UCUM codemm[Hg] = 'mm[Hg]')**interpretation**:Normal

> **component****Observation Component Category Code**:Diastolic blood pressure**code**:Diastolic blood pressure**value**: 78 mmHg(Details: UCUM codemm[Hg] = 'mm[Hg]')**interpretation**:Normal

> **component****Observation Component Category Code**:Mean blood pressure**code**:Mean blood pressure**value**: 91 mmHg(Details: UCUM codemm[Hg] = 'mm[Hg]')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "example-blood-pressure",
  "meta" : {
    "profile" : [
      "https://hl7.lt/fhir/vitalsigns/StructureDefinition/blood-pressure-panel"
    ]
  },
  "language" : "en",
  "status" : "final",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "vital-signs",
          "display" : "Vital Signs"
        }
      ]
    },
    {
      "coding" : [
        {
          "system" : "http://loinc.org",
          "code" : "85354-9",
          "display" : "Blood pressure panel with all children optional"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "85354-9",
        "display" : "Blood pressure panel with all children optional"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/example-patient"
  },
  "effectiveDateTime" : "2025-08-01T10:00:00Z",
  "interpretation" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation",
          "code" : "N",
          "display" : "Normal"
        }
      ]
    }
  ],
  "note" : [
    {
      "text" : "Patient was seated for 5 minutes before measurement."
    }
  ],
  "device" : {
    "reference" : "Device/example-device-blood-pressure"
  },
  "component" : [
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/observation-componentCategory",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://loinc.org",
                "code" : "8480-6",
                "display" : "Systolic blood pressure"
              }
            ]
          }
        }
      ],
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "8480-6",
            "display" : "Systolic blood pressure"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 117,
        "unit" : "mmHg",
        "system" : "http://unitsofmeasure.org",
        "code" : "mm[Hg]"
      },
      "interpretation" : [
        {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation",
              "code" : "N",
              "display" : "Normal"
            }
          ]
        }
      ]
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/observation-componentCategory",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://loinc.org",
                "code" : "8462-4",
                "display" : "Diastolic blood pressure"
              }
            ]
          }
        }
      ],
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "8462-4",
            "display" : "Diastolic blood pressure"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 78,
        "unit" : "mmHg",
        "system" : "http://unitsofmeasure.org",
        "code" : "mm[Hg]"
      },
      "interpretation" : [
        {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation",
              "code" : "N",
              "display" : "Normal"
            }
          ]
        }
      ]
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/observation-componentCategory",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://loinc.org",
                "code" : "8478-0"
              }
            ]
          }
        }
      ],
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "8478-0",
            "display" : "Mean blood pressure"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 91,
        "unit" : "mmHg",
        "system" : "http://unitsofmeasure.org",
        "code" : "mm[Hg]"
      }
    }
  ]
}

```
