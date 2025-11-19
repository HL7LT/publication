# Example Heart Rate Observation - Lithuanian Vital Signs Implementation Guide v0.0.1

## Pavyzdys Observation: Example Heart Rate Observation

-------

**Lithuanian**

-------

Language: en

Profile: [Heart Rate](StructureDefinition-heart-rate.md)

**Exercise Association Extension**: Exercise therapy (regime/therapy)

**Sleep Status Extension**: Asleep (finding)

**status**: Final

**category**: Vital Signs, Heart rate

**code**: Heart rate

**subject**: [Jonas Petrauskas(official) Male, DoB: 1985-01-01 ( http://hospital-lt.lt/patient-id#HOSPLT-10005 (use: usual, ))](Patient-example-patient.md)

**effective**: 2025-10-28 09:25:00+0300

**value**: 72 /min(Details: UCUM code/min = '/min')

**interpretation**: Normal

**note**: 

> 

Measured manually while patient was seated and relaxed.


**bodyStructure**: [BodyStructure](BodyStructure-example-body-structure-blood-pressure.md)

**method**: Palpation (procedure)

**device**: [Device: status = active; type =](Device-example-device-heart-rate.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "example-heart-rate",
  "meta" : {
    "profile" : [
      "https://hl7.lt/fhir/vitalsigns/StructureDefinition/heart-rate"
    ]
  },
  "language" : "en",
  "extension" : [
    {
      "url" : "https://hl7.lt/fhir/vitalsigns/StructureDefinition/exercise-association",
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "229065009",
            "display" : "Exercise therapy (regime/therapy)"
          }
        ]
      }
    },
    {
      "url" : "https://hl7.lt/fhir/vitalsigns/StructureDefinition/sleep-status",
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "248220008",
            "display" : "Asleep (finding)"
          }
        ]
      }
    }
  ],
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
          "code" : "8867-4",
          "display" : "Heart rate"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "8867-4",
        "display" : "Heart rate"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/example-patient"
  },
  "effectiveDateTime" : "2025-10-28T09:25:00+03:00",
  "valueQuantity" : {
    "value" : 72,
    "unit" : "/min",
    "system" : "http://unitsofmeasure.org",
    "code" : "/min"
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
  ],
  "note" : [
    {
      "text" : "Measured manually while patient was seated and relaxed."
    }
  ],
  "bodyStructure" : {
    "reference" : "BodyStructure/example-body-structure-blood-pressure"
  },
  "method" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "113011001",
        "display" : "Palpation (procedure)"
      }
    ]
  },
  "device" : {
    "reference" : "Device/example-device-heart-rate"
  }
}

```
