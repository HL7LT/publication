# RelatedPerson: Rūta Petrauskienė (example) - Lithuanian Base Implementation Guide v0.3.0

## Example RelatedPerson: RelatedPerson: Rūta Petrauskienė (example)

-------

**English**

-------

Language: en

Profile: [RelatedPersonLt](StructureDefinition-related-person-lt.md)

**patient**: [Jonas Petrauskas(official) Male, DoB: 1985-01-01 ( http://hospital-lt.lt/patient-id#HOSPLT-10005 (use: usual, ))](Patient-patient-example.md)

**relationship**: emergency contact

**name**: Rūta Petrauskienė



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "related-person-ruta-petrauskiene-example",
  "meta" : {
    "profile" : ["https://hl7.lt/fhir/base/StructureDefinition/related-person-lt"]
  },
  "language" : "en",
  "patient" : {
    "reference" : "Patient/patient-example"
  },
  "relationship" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleClass",
      "code" : "ECON",
      "display" : "emergency contact"
    }]
  }],
  "name" : [{
    "text" : "Rūta Petrauskienė",
    "family" : "Petrauskienė",
    "given" : ["Rūta"]
  }]
}

```
