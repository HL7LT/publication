# LT Base Practitioner Role - Lithuanian Base Implementation Guide v0.2.0

## Resource Profile: LT Base Practitioner Role ( Experimental ) 

 
Lithuanian Base Practitioner Role profile, used to define roles of the healthcare practitioner in the healthcare facilities 

**Usages:**

* Refer to this Profile: [LT Base Condition](StructureDefinition-lt-condition.md), [LT Base Observation](StructureDefinition-lt-observation.md) and [LT Base Patient](StructureDefinition-lt-patient.md)
* Examples for this Profile: [PractitionerRole/example-practitioner-role](PractitionerRole-example-practitioner-role.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/lt-practitioner-role)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-lt-practitioner-role.csv), [Excel](../StructureDefinition-lt-practitioner-role.xlsx), [Schematron](../StructureDefinition-lt-practitioner-role.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "lt-practitioner-role",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner-role",
  "version" : "0.2.0",
  "name" : "LTBasePractitionerRole",
  "title" : "LT Base Practitioner Role",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-10-30T19:02:48+02:00",
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
  "description" : "Lithuanian Base Practitioner Role profile, used to define roles of the healthcare practitioner in the healthcare facilities",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 V2 Mapping"
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
    },
    {
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "PractitionerRole",
  "baseDefinition" : "http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu-core|0.1.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "PractitionerRole",
        "path" : "PractitionerRole"
      },
      {
        "id" : "PractitionerRole.practitioner",
        "path" : "PractitionerRole.practitioner",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner|0.2.0"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "PractitionerRole.organization",
        "path" : "PractitionerRole.organization",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/base/StructureDefinition/lt-organization|0.2.0"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "PractitionerRole.code",
        "path" : "PractitionerRole.code",
        "mustSupport" : true
      },
      {
        "id" : "PractitionerRole.specialty",
        "path" : "PractitionerRole.specialty",
        "mustSupport" : true
      },
      {
        "id" : "PractitionerRole.location",
        "path" : "PractitionerRole.location",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/base/StructureDefinition/lt-location|0.2.0"
            ]
          }
        ],
        "mustSupport" : true
      }
    ]
  }
}

```
