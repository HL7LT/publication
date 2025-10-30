# LT Base Patient - Lithuanian Base Implementation Guide v0.2.0

## Resource Profile: LT Base Patient ( Experimental ) 

 
Lithuanian Base Patient profile, used to represent patients administrative information 

**Usages:**

* Refer to this Profile: [LT Base Condition](StructureDefinition-lt-condition.md), [LT Base Encounter](StructureDefinition-lt-encounter.md), [LT Base Observation](StructureDefinition-lt-observation.md), [LT Base Patient](StructureDefinition-lt-patient.md) and [LT Base Related Person](StructureDefinition-lt-related-person.md)
* Examples for this Profile: [Patient/example-patient](Patient-example-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/lt-patient)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-lt-patient.csv), [Excel](../StructureDefinition-lt-patient.xlsx), [Schematron](../StructureDefinition-lt-patient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "lt-patient",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/lt-patient",
  "version" : "0.2.0",
  "name" : "LTBasePatient",
  "title" : "LT Base Patient",
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
  "description" : "Lithuanian Base Patient profile, used to represent patients administrative information",
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
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 V2 Mapping"
    },
    {
      "identity" : "loinc",
      "uri" : "http://loinc.org",
      "name" : "LOINC code for the element"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient",
        "path" : "Patient"
      },
      {
        "id" : "Patient.identifier",
        "path" : "Patient.identifier",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Patient.identifier.extension:data-absent-reason",
        "path" : "Patient.identifier.extension",
        "sliceName" : "data-absent-reason",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/data-absent-reason|5.2.0"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Patient.identifier.system",
        "path" : "Patient.identifier.system",
        "mustSupport" : true,
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "https://hl7.lt/fhir/base/ValueSet/patient-identifier|1.0.0"
        }
      },
      {
        "id" : "Patient.identifier.value",
        "path" : "Patient.identifier.value",
        "mustSupport" : true
      },
      {
        "id" : "Patient.active",
        "path" : "Patient.active",
        "mustSupport" : true
      },
      {
        "id" : "Patient.name",
        "path" : "Patient.name",
        "mustSupport" : true
      },
      {
        "id" : "Patient.name.use",
        "path" : "Patient.name.use",
        "mustSupport" : true
      },
      {
        "id" : "Patient.name.text",
        "path" : "Patient.name.text",
        "mustSupport" : true
      },
      {
        "id" : "Patient.name.family",
        "path" : "Patient.name.family",
        "mustSupport" : true
      },
      {
        "id" : "Patient.name.given",
        "path" : "Patient.name.given",
        "mustSupport" : true
      },
      {
        "id" : "Patient.name.period",
        "path" : "Patient.name.period",
        "mustSupport" : true
      },
      {
        "id" : "Patient.telecom",
        "path" : "Patient.telecom",
        "mustSupport" : true
      },
      {
        "id" : "Patient.telecom.system",
        "path" : "Patient.telecom.system",
        "mustSupport" : true
      },
      {
        "id" : "Patient.telecom.value",
        "path" : "Patient.telecom.value",
        "mustSupport" : true
      },
      {
        "id" : "Patient.telecom.use",
        "path" : "Patient.telecom.use",
        "mustSupport" : true
      },
      {
        "id" : "Patient.gender",
        "path" : "Patient.gender",
        "mustSupport" : true
      },
      {
        "id" : "Patient.birthDate",
        "path" : "Patient.birthDate",
        "mustSupport" : true
      },
      {
        "id" : "Patient.deceased[x]",
        "path" : "Patient.deceased[x]",
        "mustSupport" : true
      },
      {
        "id" : "Patient.generalPractitioner",
        "path" : "Patient.generalPractitioner",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner|0.2.0",
              "https://hl7.lt/fhir/base/StructureDefinition/lt-organization|0.2.0",
              "https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner-role|0.2.0"
            ]
          }
        ]
      },
      {
        "id" : "Patient.managingOrganization",
        "path" : "Patient.managingOrganization",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/base/StructureDefinition/lt-organization|0.2.0"
            ]
          }
        ]
      },
      {
        "id" : "Patient.link.other",
        "path" : "Patient.link.other",
        "type" : [
          {
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-hierarchy",
                "valueBoolean" : false
              }
            ],
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/base/StructureDefinition/lt-patient|0.2.0",
              "https://hl7.lt/fhir/base/StructureDefinition/lt-related-person|0.2.0"
            ]
          }
        ]
      }
    ]
  }
}

```
