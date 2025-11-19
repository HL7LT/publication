# Example Head Circumference Observation - Lithuanian Vital Signs Implementation Guide v0.0.1

## Example Observation: Example Head Circumference Observation

-------

**English**

-------

Language: en

Profile: [Head Circumference](StructureDefinition-head-circumference.md)

**status**: Final

**category**: Vital Signs

**code**: Head Occipital-frontal circumference

**subject**: [Jonas Petrauskas(official) Male, DoB: 1985-01-01 ( http://hospital-lt.lt/patient-id#HOSPLT-10005 (use: usual, ))](Patient-example-patient.md)

**effective**: 2019-10-16 12:12:29-0900

**value**: 35 cm(Details: UCUM codecm = 'cm')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "example-head-circumference",
  "meta" : {
    "profile" : [
      "https://hl7.lt/fhir/vitalsigns/StructureDefinition/head-circumference"
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
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "9843-4",
        "display" : "Head Occipital-frontal circumference"
      },
      {
        "system" : "http://loinc.org",
        "code" : "8287-5",
        "display" : "Head Occipital-frontal circumference by Tape measure"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/example-patient"
  },
  "effectiveDateTime" : "2019-10-16T12:12:29-09:00",
  "valueQuantity" : {
    "value" : 35,
    "unit" : "cm",
    "system" : "http://unitsofmeasure.org",
    "code" : "cm"
  }
}

```
