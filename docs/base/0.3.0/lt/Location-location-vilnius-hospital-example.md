# Location: Vilnius Hospital (example) - Lithuanian Base Implementation Guide v0.3.0

## Pavyzdys Location: Location: Vilnius Hospital (example)

-------

**Lithuanian**

-------

Language: en

Profile: [LocationLt](StructureDefinition-location-lt.md)

**status**: Active

**name**: Vilniaus miesto ligoninė

**description**: 

Pagrindinė Vilniaus miesto ligoninė, teikianti įvairias sveikatos priežiūros paslaugas.

**address**: Santariškių g. 2 Vilnius 08661 LT 

**form**: Building

**managingOrganization**: [Organization Lithuanian Medical Library](Organization-organization-example.md)



## Resource Content

```json
{
  "resourceType" : "Location",
  "id" : "location-vilnius-hospital-example",
  "meta" : {
    "profile" : ["https://hl7.lt/fhir/base/StructureDefinition/location-lt"]
  },
  "language" : "en",
  "status" : "active",
  "name" : "Vilniaus miesto ligoninė",
  "description" : "Pagrindinė Vilniaus miesto ligoninė, teikianti įvairias sveikatos priežiūros paslaugas.",
  "address" : {
    "line" : ["Santariškių g. 2"],
    "city" : "Vilnius",
    "postalCode" : "08661",
    "country" : "LT"
  },
  "form" : {
    "coding" : [{
      "code" : "building",
      "display" : "Building"
    }]
  },
  "managingOrganization" : {
    "reference" : "Organization/organization-example"
  }
}

```
