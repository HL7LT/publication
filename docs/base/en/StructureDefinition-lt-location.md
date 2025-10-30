# LT Base Location - Lithuanian Base Implementation Guide v0.2.0

## Resource Profile: LT Base Location ( Experimental ) 

 
Lithuanian Base Location profile, used for documenting healthcare locations. 

**Usages:**

* Refer to this Profile: [LT Base Practitioner Role](StructureDefinition-lt-practitioner-role.md)
* Examples for this Profile: [Vilniaus miesto ligoninė](Location-example-location.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/lt-location)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-lt-location.csv), [Excel](../StructureDefinition-lt-location.xlsx), [Schematron](../StructureDefinition-lt-location.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "lt-location",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/lt-location",
  "version" : "0.2.0",
  "name" : "LTBaseLocation",
  "title" : "LT Base Location",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-10-30T19:04:29+02:00",
  "publisher" : "Lithuanian Medical Library",
  "_publisher" : {
    "extension" : [
      {
        "extension" : [
          {
            "url" : "lang",
            "valueCode" : "lt"
          },
          {
            "url" : "content",
            "valueString" : "Lietuvos medicinos biblioteka"
          }
        ],
        "url" : "http://hl7.org/fhir/StructureDefinition/translation"
      }
    ]
  },
  "contact" : [
    {
      "name" : "Lithuanian Medical Library",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://medicinosnk.lt"
        },
        {
          "system" : "email",
          "value" : "info@medicinosnk.lt"
        }
      ]
    }
  ],
  "description" : "Lithuanian Base Location profile, used for documenting healthcare locations.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "LT"
        }
      ]
    }
  ],
  "fhirVersion" : "5.0.0",
  "mapping" : [
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "interface",
      "uri" : "http://hl7.org/fhir/interface",
      "name" : "Interface Pattern"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Location",
  "baseDefinition" : "http://hl7.eu/fhir/base-r5/StructureDefinition/location-eu-core|0.1.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Location",
        "path" : "Location"
      }
    ]
  }
}

```
