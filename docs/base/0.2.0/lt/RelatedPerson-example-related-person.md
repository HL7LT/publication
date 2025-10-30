# Rūta Petrauskienė - LT Base Related Person Example - Lithuanian Base Implementation Guide v0.2.0

## Pavyzdys RelatedPerson: Rūta Petrauskienė - LT Base Related Person Example

-------

**Lithuanian**

-------

Language: en

Profile: [LT Base Related Person](StructureDefinition-lt-related-person.md)

**patient**: [Jonas Petrauskas(official) Male, DoB: 1985-01-01 ( http://hospital-lt.lt/patient-id#HOSPLT-10005 (use: usual, ))](Patient-example-patient.md)

**relationship**: emergency contact

**name**: Rūta Petrauskienė



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "example-related-person",
  "meta" : {
    "profile" : [
      "https://hl7.lt/fhir/base/StructureDefinition/lt-related-person"
    ]
  },
  "language" : "en",
  "patient" : {
    "reference" : "Patient/example-patient"
  },
  "relationship" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleClass",
          "code" : "ECON",
          "display" : "emergency contact"
        }
      ]
    }
  ],
  "name" : [
    {
      "text" : "Rūta Petrauskienė",
      "family" : "Petrauskienė",
      "given" : ["Rūta"]
    }
  ]
}

```
