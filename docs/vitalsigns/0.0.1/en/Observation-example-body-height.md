# Example Body Height Observation - Lithuanian Vital Signs Implementation Guide v0.0.1

## Example Observation: Example Body Height Observation

-------

**English**

-------

Language: en

Profile: [Body Height](StructureDefinition-body-height.md)

**status**: Final

**category**: Vital Signs, Body height

**code**: Body height

**subject**: [Jonas Petrauskas(official) Male, DoB: 1985-01-01 ( http://hospital-lt.lt/patient-id#HOSPLT-10005 (use: usual, ))](Patient-example-patient.md)

**effective**: 2025-10-27 09:15:00+0300

**value**: 176 cm(Details: UCUM codecm = 'cm')

**note**: 

> 

Height measured without shoes during routine examination.


**method**: Measured using a stadiometer

**device**: [Device: status = active; type = Stadiometer (physical object)](Device-example-device-body-height.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "example-body-height",
  "meta" : {
    "profile" : [
      "https://hl7.lt/fhir/vitalsigns/StructureDefinition/body-height"
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
          "code" : "8302-2",
          "display" : "Body height"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "8302-2",
        "display" : "Body height"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/example-patient"
  },
  "effectiveDateTime" : "2025-10-27T09:15:00+03:00",
  "valueQuantity" : {
    "value" : 176,
    "unit" : "cm",
    "system" : "http://unitsofmeasure.org",
    "code" : "cm"
  },
  "note" : [
    {
      "text" : "Height measured without shoes during routine examination."
    }
  ],
  "method" : {
    "text" : "Measured using a stadiometer"
  },
  "device" : {
    "reference" : "Device/example-device-body-height"
  }
}

```
