# Observation: Breast Density Fatty (example) - Lithuanian Base Implementation Guide v0.3.0

## Pavyzdys Observation: Observation: Breast Density Fatty (example)

-------

**Lithuanian**

-------

Language: en

Profile: [ObservationLt](StructureDefinition-observation-lt.md)

**status**: Final

**category**: Exam

**code**: Breast consistency (observable entity)

**subject**: [Jonas Petrauskas(official) Male, DoB: 1985-01-01 ( http://hospital-lt.lt/patient-id#HOSPLT-10005 (use: usual, ))](Patient-patient-example.md)

**effective**: 2025-10-01 09:00:00+0000

**performer**: [Practitioner Dr. Petras Kazlauskas(official)](Practitioner-practitioner-example.md)

**value**: Almost entirely fat breast composition

**note**: 

> 

Mammography shows predominantly fatty breast density.


**bodySite**: Breast



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "observation-breast-density-fatty-example",
  "meta" : {
    "profile" : ["https://hl7.lt/fhir/base/StructureDefinition/observation-lt"]
  },
  "language" : "en",
  "status" : "final",
  "category" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
      "code" : "exam",
      "display" : "Exam"
    }]
  }],
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "733851004",
      "display" : "Breast consistency (observable entity)"
    }]
  },
  "subject" : {
    "reference" : "Patient/patient-example"
  },
  "effectiveDateTime" : "2025-10-01T09:00:00Z",
  "performer" : [{
    "reference" : "Practitioner/practitioner-example"
  }],
  "valueCodeableConcept" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "129716005"
    }]
  },
  "note" : [{
    "text" : "Mammography shows predominantly fatty breast density."
  }],
  "bodySite" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "76752008",
      "display" : "Breast"
    }]
  }
}

```
