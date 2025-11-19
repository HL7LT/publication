# Example Waist Circumference Observation - Lithuanian Vital Signs Implementation Guide v0.0.1

## Pavyzdys Observation: Example Waist Circumference Observation

-------

**Lithuanian**

-------

Language: en

Profile: [Waist Circumference](StructureDefinition-waist-circumference.md)

**status**: Final

**category**: Vital Signs, Waist Circumference at umbilicus by Tape measure

**code**: Waist circumference (observable entity)

**subject**: [Jonas Petrauskas(official) Male, DoB: 1985-01-01 ( http://hospital-lt.lt/patient-id#HOSPLT-10005 (use: usual, ))](Patient-example-patient.md)

**effective**: 2019-10-16 12:12:29-0900

**value**: 90 cm(Details: UCUM codecm = 'cm')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "example-waist-circumference",
  "meta" : {
    "profile" : [
      "https://hl7.lt/fhir/vitalsigns/StructureDefinition/waist-circumference"
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
          "code" : "8280-0",
          "display" : "Waist Circumference at umbilicus by Tape measure"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "276361009",
        "display" : "Waist circumference (observable entity)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/example-patient"
  },
  "effectiveDateTime" : "2019-10-16T12:12:29-09:00",
  "valueQuantity" : {
    "value" : 90,
    "unit" : "cm",
    "system" : "http://unitsofmeasure.org",
    "code" : "cm"
  }
}

```
