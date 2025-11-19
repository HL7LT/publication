# Example Body Weight Observation - Lithuanian Vital Signs Implementation Guide v0.0.1

## Example Observation: Example Body Weight Observation

-------

**English**

-------

Language: en

Profile: [Body Weight](StructureDefinition-body-weight.md)

**Associated Situation Extension**: Wears undignified clothing (finding)

**status**: Final

**category**: Vital Signs, Body weight

**code**: Body weight

**subject**: [Jonas Petrauskas(official) Male, DoB: 1985-01-01 ( http://hospital-lt.lt/patient-id#HOSPLT-10005 (use: usual, ))](Patient-example-patient.md)

**effective**: 2025-10-27 09:20:00+0300

**value**: 68.4 kg(Details: UCUM codekg = 'kg')

**note**: 

> 

Measured after breakfast using a calibrated digital scale.


**method**: Weighing patient (procedure)

**device**: [Device: status = active; type =](Device-example-device-body-weight.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "example-body-weight",
  "meta" : {
    "profile" : [
      "https://hl7.lt/fhir/vitalsigns/StructureDefinition/body-weight"
    ]
  },
  "language" : "en",
  "extension" : [
    {
      "url" : "https://hl7.lt/fhir/vitalsigns/StructureDefinition/associated-situation",
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "225494003",
            "display" : "Wears undignified clothing (finding)"
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
          "code" : "29463-7",
          "display" : "Body weight"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "29463-7",
        "display" : "Body weight"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/example-patient"
  },
  "effectiveDateTime" : "2025-10-27T09:20:00+03:00",
  "valueQuantity" : {
    "value" : 68.4,
    "unit" : "kg",
    "system" : "http://unitsofmeasure.org",
    "code" : "kg"
  },
  "note" : [
    {
      "text" : "Measured after breakfast using a calibrated digital scale."
    }
  ],
  "method" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "39857003",
        "display" : "Weighing patient (procedure)"
      }
    ]
  },
  "device" : {
    "reference" : "Device/example-device-body-weight"
  }
}

```
