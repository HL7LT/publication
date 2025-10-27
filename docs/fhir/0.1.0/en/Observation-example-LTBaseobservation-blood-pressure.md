# Example LT Base Observation - Blood Pressure - Lithuanian Base Implementation Guide v0.1.0

## Example Observation: Example LT Base Observation - Blood Pressure

-------

**English**

-------

Language: en

Profile: [LT Base Observation](StructureDefinition-lt-observation.md)

**status**: Preliminary

**category**: Vital Signs

**code**: Blood pressure panel with all children optional

**subject**: [Jonas Petrauskas(official) Male, DoB: 1985-01-01 ( http://hospital-lt.lt/patient-id#HOSPLT-10005 (use: usual, ))](Patient-example-patient.md)

**encounter**: [Encounter: status = completed; class = Inpatient encounter; priority = Emergency; actualPeriod = 2024-01-01 10:00:00+0000 --> 2024-01-01 11:00:00+0000; plannedStartDate = 2024-01-01 10:00:00+0000; plannedEndDate = 2024-01-01 11:00:00+0000](Encounter-example-encounter.md)

**effective**: 2025-08-01 10:00:00+0000

**issued**: 2025-08-01 10:01:00+0000

**performer**: [Practitioner Dr. Petras Kazlauskas(official)](Practitioner-example-practitioner.md)

**value**: Blood pressure within normal limits

**interpretation**: Normal

**note**: 

> 

Patient was calm and seated for 5 minutes before measurement.


### ReferenceRanges

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| - | **Low** | **High** | **Type** | **Text** |
| * | 90 mmHg | 120 mmHg | Normal Range | Normal systolic blood pressure for adults |

> **component****code**:Systolic blood pressure**value**: 117 mmHg(Details: UCUM codemm[Hg] = 'mm[Hg]')**interpretation**:Normal

> **component****code**:Diastolic blood pressure**value**: 78 mmHg(Details: UCUM codemm[Hg] = 'mm[Hg]')**interpretation**:Normal



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "example-LTBaseobservation-blood-pressure",
  "meta" : {
    "profile" : [
      "https://hl7.lt/fhir/base/StructureDefinition/lt-observation"
    ]
  },
  "language" : "en",
  "status" : "preliminary",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "vital-signs",
          "display" : "Vital Signs"
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
  "encounter" : {
    "reference" : "Encounter/example-encounter"
  },
  "effectiveDateTime" : "2025-08-01T10:00:00Z",
  "issued" : "2025-08-01T10:01:00Z",
  "performer" : [
    {
      "reference" : "Practitioner/example-practitioner"
    }
  ],
  "valueString" : "Blood pressure within normal  limits",
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
      "text" : "Patient was calm and seated for 5 minutes before measurement."
    }
  ],
  "referenceRange" : [
    {
      "low" : {
        "value" : 90,
        "unit" : "mmHg"
      },
      "high" : {
        "value" : 120,
        "unit" : "mmHg"
      },
      "type" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/referencerange-meaning",
            "code" : "normal",
            "display" : "Normal Range"
          }
        ]
      },
      "text" : "Normal systolic blood pressure for adults"
    }
  ],
  "component" : [
    {
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
    }
  ]
}

```
