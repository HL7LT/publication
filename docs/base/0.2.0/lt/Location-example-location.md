# Example LT Base Location - Lithuanian Base Implementation Guide v0.2.0

## Pavyzdys Location: Example LT Base Location

-------

**Lithuanian**

-------

Language: en

Profile: [LT Base Location](StructureDefinition-lt-location.md)

**status**: Active

**name**: Vilniaus miesto ligoninė

**description**: 

Pagrindinė Vilniaus miesto ligoninė, teikianti įvairias sveikatos priežiūros paslaugas.

**address**: Santariškių g. 2 Vilnius 08661 LT 

**form**: Building

**managingOrganization**: [Organization Vilniaus miesto ligoninė](Organization-example-organization.md)



## Resource Content

```json
{
  "resourceType" : "Location",
  "id" : "example-location",
  "meta" : {
    "profile" : ["https://hl7.lt/fhir/base/StructureDefinition/lt-location"]
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
    "coding" : [
      {
        "code" : "building",
        "display" : "Building"
      }
    ]
  },
  "managingOrganization" : {
    "reference" : "Organization/example-organization"
  }
}

```
