# Example Body Mass Index Observation - Lithuanian Vital Signs Implementation Guide v0.0.1

## Pavyzdys Observation: Example Body Mass Index Observation

-------

**Lithuanian**

-------

Language: en

Profile: [Body Mass Index](StructureDefinition-bmi.md)

**status**: Final

**category**: Vital Signs

**code**: Body mass index (BMI) [Ratio]

**subject**: [Jonas Petrauskas(official) Male, DoB: 1985-01-01 ( http://hospital-lt.lt/patient-id#HOSPLT-10005 (use: usual, ))](Patient-example-patient.md)

**effective**: 2019-10-16 12:12:29-0900

**value**: 22 kilogram / (meter ^ 2)(Details: UCUM codekg/m2 = 'kg/m2')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "example-bmi",
  "meta" : {
    "profile" : ["https://hl7.lt/fhir/vitalsigns/StructureDefinition/bmi"]
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
        "code" : "39156-5",
        "display" : "Body mass index (BMI) [Ratio]"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/example-patient"
  },
  "effectiveDateTime" : "2019-10-16T12:12:29-09:00",
  "valueQuantity" : {
    "value" : 22,
    "unit" : "kilogram / (meter ^ 2)",
    "system" : "http://unitsofmeasure.org",
    "code" : "kg/m2"
  }
}

```
