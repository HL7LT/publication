# Condition: Cancer (example) - Lithuanian Base Implementation Guide v0.3.0

## Pavyzdys Condition: Condition: Cancer (example)

-------

**Lithuanian**

-------

Language: en

Profile: [ConditionLt](StructureDefinition-condition-lt.md)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**code**: Malignant neoplasm of breast

**bodySite**: Breast structure

**subject**: [Jonas Petrauskas(official) Male, DoB: 1985-01-01 ( http://hospital-lt.lt/patient-id#HOSPLT-10005 (use: usual, ))](Patient-patient-example.md)

**onset**: 2025-08-15

**recordedDate**: 2025-09-01

### Participants

| | | |
| :--- | :--- | :--- |
| - | **Function** | **Actor** |
| * | Author | [Practitioner Dr. Petras Kazlauskas(official)](Practitioner-practitioner-example.md) |

**note**: 

> 

Patient diagnosed with breast cancer. Staging and treatment plan to be determined.




## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "condition-cancer-example",
  "meta" : {
    "profile" : ["https://hl7.lt/fhir/base/StructureDefinition/condition-lt"]
  },
  "language" : "en",
  "clinicalStatus" : {
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
      "code" : "active",
      "display" : "Active"
    }]
  },
  "verificationStatus" : {
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
      "code" : "confirmed",
      "display" : "Confirmed"
    }]
  },
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "254837009",
      "display" : "Malignant neoplasm of breast"
    }]
  },
  "bodySite" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "76752008",
      "display" : "Breast structure"
    }]
  }],
  "subject" : {
    "reference" : "Patient/patient-example"
  },
  "onsetDateTime" : "2025-08-15",
  "recordedDate" : "2025-09-01",
  "participant" : [{
    "function" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/provenance-participant-type",
        "code" : "author",
        "display" : "Author"
      }]
    },
    "actor" : {
      "reference" : "Practitioner/practitioner-example"
    }
  }],
  "note" : [{
    "text" : "Patient diagnosed with breast cancer. Staging and treatment plan to be determined."
  }]
}

```
