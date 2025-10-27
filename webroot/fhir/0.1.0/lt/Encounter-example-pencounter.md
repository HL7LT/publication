# Example Psychiatric Encounter - Lithuanian Base Implementation Guide v0.1.0

## Pavyzdys Encounter: Example Psychiatric Encounter

-------

**Lithuanian**

-------

Language: en

Profile: [LT Base Encounter](StructureDefinition-lt-encounter.md)

**status**: Completed

**class**: Inpatient encounter

**priority**: Emergency

**subject**: [Jonas Petrauskas(official) Male, DoB: 1985-01-01 ( http://hospital-lt.lt/patient-id#HOSPLT-10005 (use: usual, ))](Patient-example-patient.md)

**serviceProvider**: [Organization Vilniaus miesto ligoninė](Organization-example-organization.md)

### Participants

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Type** | **Period** | **Actor** |
| * | attender | 2024-02-01 09:00:00+0000 --> 2024-02-12 10:30:00+0000 | [Practitioner Dr. Petras Kazlauskas(official)](Practitioner-example-practitioner.md) |

**actualPeriod**: 2024-02-01 09:00:00+0000 --> 2024-02-12 10:30:00+0000



## Resource Content

```json
{
  "resourceType" : "Encounter",
  "id" : "example-pencounter",
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
  "serviceProvider" : {
    "reference" : "Organization/example-organization"
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
        "start" : "2024-02-01T09:00:00Z",
        "end" : "2024-02-12T10:30:00Z"
      },
      "actor" : {
        "reference" : "Practitioner/example-practitioner"
      }
    }
  ],
  "actualPeriod" : {
    "start" : "2024-02-01T09:00:00Z",
    "end" : "2024-02-12T10:30:00Z"
  }
}

```
