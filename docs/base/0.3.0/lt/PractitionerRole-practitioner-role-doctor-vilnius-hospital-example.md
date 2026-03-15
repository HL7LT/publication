# PractitionerRole: Doctor Vilnius Hospital (example) - Lithuanian Base Implementation Guide v0.3.0

## Pavyzdys PractitionerRole: PractitionerRole: Doctor Vilnius Hospital (example)

-------

**Lithuanian**

-------

Language: en

Profile: [PractitionerRoleLt](StructureDefinition-practitioner-role-lt.md)

**active**: true

**practitioner**: [Practitioner Dr. Petras Kazlauskas(official)](Practitioner-practitioner-example.md)

**organization**: [Organization Lithuanian Medical Library](Organization-organization-example.md)

**code**: Doctor



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "practitioner-role-doctor-vilnius-hospital-example",
  "meta" : {
    "profile" : ["https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt"]
  },
  "language" : "en",
  "active" : true,
  "practitioner" : {
    "reference" : "Practitioner/practitioner-example"
  },
  "organization" : {
    "reference" : "Organization/organization-example"
  },
  "code" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/practitioner-role",
      "code" : "doctor",
      "display" : "Doctor"
    }]
  }]
}

```
