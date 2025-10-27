# LT Base Organization - Lithuanian Base Implementation Guide v0.1.0

## Resursų profilis: LT Base Organization ( Eksperimentinis ) 

 
Lithuanian Base Organization profile, used to define healthcare organizations and sub-units 

**Usages:**

* Refer to this Profile: [LT Base Observation](StructureDefinition-lt-observation.md), [LT Base Organization](StructureDefinition-lt-organization.md) and [LT Base Practitioner Role](StructureDefinition-lt-practitioner-role.md)
* Examples for this Profile: [Lietuvos Medicinos biblioteka](Organization-example-lmb.md) and [Vilniaus miesto ligoninė](Organization-example-organization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/lt-organization)

### Profilio turinio formaliosios peržiūros

 [Profilių, skirtumų rinkinių, momentinių kopijų aprašas ir jų reprezentacijos](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Pagrindinių elementų lentelė](#tabs-key) 
*  [Skirtumų rinkinių lentelė](#tabs-diff) 
*  [Momentinės kopijos lentelė](#tabs-snap) 
*  [Statistika/Nuorodos](#tabs-summ) 
*  [Viskas](#tabs-all) 

#### Terminology Bindings

#### Constraints

#### Terminology Bindings (Differential)

#### Terminology Bindings

#### Constraints

**Summary**

Mandatory: 6 elements(3 nested mandatory elements)
 Must-Support: 9 elements
 Fixed: 2 elements

**Structures**

This structure refers to these other structures:

* [LT Base Organization(https://hl7.lt/fhir/base/StructureDefinition/lt-organization|0.1.0)](StructureDefinition-lt-organization.md)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/translation|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-translation.html)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Organization.contact.telecom

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

#### Terminology Bindings (Differential)

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

**Summary**

Mandatory: 6 elements(3 nested mandatory elements)
 Must-Support: 9 elements
 Fixed: 2 elements

**Structures**

This structure refers to these other structures:

* [LT Base Organization(https://hl7.lt/fhir/base/StructureDefinition/lt-organization|0.1.0)](StructureDefinition-lt-organization.md)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/translation|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-translation.html)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Organization.contact.telecom

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-lt-organization.csv), [Excel](../StructureDefinition-lt-organization.xlsx), [Schematron](../StructureDefinition-lt-organization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "lt-organization",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/lt-organization",
  "version" : "0.1.0",
  "name" : "LTBaseOrganization",
  "title" : "LT Base Organization",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-10-27T14:29:14+02:00",
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
  "description" : "Lithuanian Base Organization profile, used to define healthcare organizations and sub-units",
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
  "type" : "Organization",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Organization|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Organization",
        "path" : "Organization"
      },
      {
        "id" : "Organization.identifier",
        "path" : "Organization.identifier",
        "short" : "Įstaigos identifikatorius",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Organization.identifier.system",
        "path" : "Organization.identifier.system",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "https://hl7.lt/fhir/base/ValueSet/organization-identifier|1.0.0"
        }
      },
      {
        "id" : "Organization.active",
        "path" : "Organization.active",
        "short" : "Ar įstaiga yra veikianti / Whether the organization's record is still in active use",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Organization.name",
        "path" : "Organization.name",
        "short" : "Name organizations (in Lithuanian)",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Organization.name.extension",
        "path" : "Organization.name.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "short" : "Name organizations (in English)"
      },
      {
        "id" : "Organization.name.extension:translation",
        "path" : "Organization.name.extension",
        "sliceName" : "translation",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/translation|5.2.0"]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Organization.contact",
        "path" : "Organization.contact",
        "short" : "Įstaigos kontaktinė informacija / Official contact details for the Organization",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Organization.contact.telecom",
        "path" : "Organization.contact.telecom",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        },
        "short" : "Contact details (phone/email and more)",
        "min" : 1
      },
      {
        "id" : "Organization.contact.telecom.value",
        "path" : "Organization.contact.telecom.value",
        "min" : 1
      },
      {
        "id" : "Organization.contact.telecom:Phone",
        "path" : "Organization.contact.telecom",
        "sliceName" : "Phone",
        "short" : "Telefono numeris / Phone number",
        "min" : 0,
        "max" : "*",
        "mustSupport" : true
      },
      {
        "id" : "Organization.contact.telecom:Phone.system",
        "path" : "Organization.contact.telecom.system",
        "min" : 1,
        "fixedCode" : "phone"
      },
      {
        "id" : "Organization.contact.telecom:Email",
        "path" : "Organization.contact.telecom",
        "sliceName" : "Email",
        "short" : "Elektroninio pašto adresas / Email",
        "min" : 0,
        "max" : "*",
        "mustSupport" : true
      },
      {
        "id" : "Organization.contact.telecom:Email.system",
        "path" : "Organization.contact.telecom.system",
        "min" : 1,
        "fixedCode" : "email"
      },
      {
        "id" : "Organization.contact.address",
        "path" : "Organization.contact.address",
        "short" : "Įstaigos adresas / Adress",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Organization.partOf",
        "path" : "Organization.partOf",
        "short" : "Įstaiga, kuriai priklausi ši įstaiga/padalinys / The organization of which this organization forms a part.",
        "type" : [
          {
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-hierarchy",
                "valueBoolean" : true
              }
            ],
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/base/StructureDefinition/lt-organization|0.1.0"
            ]
          }
        ],
        "mustSupport" : true
      }
    ]
  }
}

```
