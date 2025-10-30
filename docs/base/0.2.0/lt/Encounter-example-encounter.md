# Example Encounter - Lithuanian Base Implementation Guide v0.2.0

## Pavyzdys Encounter: Example Encounter

-------

**Lithuanian**

-------

Language: en

Profile: [LT Base Encounter](StructureDefinition-lt-encounter.md)

**status**: Completed

**class**: Inpatient encounter

**priority**: Emergency

**subject**: [Jonas Petrauskas(official) Male, DoB: 1985-01-01 ( http://hospital-lt.lt/patient-id#HOSPLT-10005 (use: usual, ))](Patient-example-patient.md)

### Participants

| | | |
| :--- | :--- | :--- |
| - | **Type** | **Period** |
| * | attender | 2024-01-01 10:00:00+0000 --> 2024-01-01 11:00:00+0000 |

**actualPeriod**: 2024-01-01 10:00:00+0000 --> 2024-01-01 11:00:00+0000

**plannedStartDate**: 2024-01-01 10:00:00+0000

**plannedEndDate**: 2024-01-01 11:00:00+0000

> **reason**

### Values

| | |
| :--- | :--- |
| - | **Reference** |
| * | [Condition Malignant neoplasm of breast](Condition-example-cancer.md) |


> **diagnosis**

### Conditions

| | |
| :--- | :--- |
| - | **Reference** |
| * | [Condition Malignant neoplasm of breast](Condition-example-cancer.md) |


### Admissions

| | | | |
| :--- | :--- | :--- | :--- |
| - | **AdmitSource** | **ReAdmission** | **DischargeDisposition** |
| * | From psychiatric hospital | Re-admission | Home |



## Resource Content

```json
{
  "resourceType" : "Encounter",
  "id" : "example-encounter",
  "meta" : {
    "profile" : ["https://hl7.lt/fhir/base/StructureDefinition/lt-encounter"]
  },
  "language" : "en",
  "status" : "completed",
  "class" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
          "code" : "IMP",
          "display" : "Inpatient encounter"
        }
      ]
    }
  ],
  "priority" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v3-ActPriority",
        "code" : "EM",
        "display" : "Emergency"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/example-patient"
  },
  "participant" : [
    {
      "type" : [
        {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v3-ParticipationType",
              "code" : "ATND",
              "display" : "attender"
            }
          ]
        }
      ],
      "period" : {
        "start" : "2024-01-01T10:00:00Z",
        "end" : "2024-01-01T11:00:00Z"
      }
    }
  ],
  "actualPeriod" : {
    "start" : "2024-01-01T10:00:00Z",
    "end" : "2024-01-01T11:00:00Z"
  },
  "plannedStartDate" : "2024-01-01T10:00:00Z",
  "plannedEndDate" : "2024-01-01T11:00:00Z",
  "reason" : [
    {
      "value" : [
        {
          "reference" : {
            "reference" : "Condition/example-cancer"
          }
        }
      ]
    }
  ],
  "diagnosis" : [
    {
      "condition" : [
        {
          "reference" : {
            "reference" : "Condition/example-cancer"
          }
        }
      ]
    }
  ],
  "admission" : {
    "admitSource" : {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/admit-source",
          "code" : "psych",
          "display" : "From psychiatric hospital"
        }
      ]
    },
    "reAdmission" : {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/v2-0092",
          "code" : "R",
          "display" : "Re-admission"
        }
      ]
    },
    "dischargeDisposition" : {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/discharge-disposition",
          "code" : "home",
          "display" : "Home"
        }
      ]
    }
  }
}

```
