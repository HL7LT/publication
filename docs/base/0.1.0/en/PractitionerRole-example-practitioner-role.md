# Dr. Petras Kazlauskas at Vilniaus miesto ligoninė - LT Base Practitioner Role Example - Lithuanian Base Implementation Guide v0.1.0

## Example PractitionerRole: Dr. Petras Kazlauskas at Vilniaus miesto ligoninė - LT Base Practitioner Role Example

-------

**English**

-------

Language: en

Profile: [LT Base Practitioner Role](StructureDefinition-lt-practitioner-role.md)

**active**: true

**practitioner**: [Practitioner Dr. Petras Kazlauskas(official)](Practitioner-example-practitioner.md)

**organization**: [Organization Vilniaus miesto ligoninė](Organization-example-organization.md)

**code**: Doctor



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "example-practitioner-role",
  "meta" : {
    "profile" : [
      "https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner-role"
    ]
  },
  "language" : "en",
  "active" : true,
  "practitioner" : {
    "reference" : "Practitioner/example-practitioner"
  },
  "organization" : {
    "reference" : "Organization/example-organization"
  },
  "code" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/practitioner-role",
          "code" : "doctor",
          "display" : "Doctor"
        }
      ]
    }
  ]
}

```
