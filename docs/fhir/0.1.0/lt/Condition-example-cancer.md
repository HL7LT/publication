# Example LT Base Condition - Cancer - Lithuanian Base Implementation Guide v0.1.0

## Pavyzdys Condition: Example LT Base Condition - Cancer

-------

**Lithuanian**

-------

Language: en

Profile: [LT Base Condition](StructureDefinition-lt-condition.md)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**code**: Malignant neoplasm of breast

**bodySite**: Breast structure

**subject**: [Jonas Petrauskas(official) Male, DoB: 1985-01-01 ( http://hospital-lt.lt/patient-id#HOSPLT-10005 (use: usual, ))](Patient-example-patient.md)

**onset**: 2025-08-15

**recordedDate**: 2025-09-01

### Participants

| | | |
| :--- | :--- | :--- |
| - | **Function** | **Actor** |
| * | Author | [Practitioner Dr. Petras Kazlauskas(official)](Practitioner-example-practitioner.md) |

**note**: 

> 

Patient diagnosed with breast cancer. Staging and treatment plan to be determined.




## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "example-cancer",
  "meta" : {
    "profile" : ["https://hl7.lt/fhir/base/StructureDefinition/lt-condition"]
  },
  "language" : "en",
  "clinicalStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
        "code" : "active",
        "display" : "Active"
      }
    ]
  },
  "verificationStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
        "code" : "confirmed",
        "display" : "Confirmed"
      }
    ]
  },
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "254837009",
        "display" : "Malignant neoplasm of breast"
      }
    ]
  },
  "bodySite" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "76752008",
          "display" : "Breast structure"
        }
      ]
    }
  ],
  "subject" : {
    "reference" : "Patient/example-patient"
  },
  "onsetDateTime" : "2025-08-15",
  "recordedDate" : "2025-09-01",
  "participant" : [
    {
      "function" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/provenance-participant-type",
            "code" : "author",
            "display" : "Author"
          }
        ]
      },
      "actor" : {
        "reference" : "Practitioner/example-practitioner"
      }
    }
  ],
  "note" : [
    {
      "text" : "Patient diagnosed with breast cancer. Staging and treatment plan to be determined."
    }
  ]
}

```
