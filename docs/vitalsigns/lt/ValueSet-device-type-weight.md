# Device Types for Weight Measurement - Lithuanian Vital Signs Implementation Guide v0.0.1

## ValueSet: Device Types for Weight Measurement 

 
SELECT SNOMED CT code system values that describe the instrument used to measure the body weight. 

 **References** 

* [Body Weight Measurement Device](StructureDefinition-device-body-weight.md)

### Logical Definition (CLD)

 

### Išplėtimas

Expansion from tx.fhir.org based on:

* SNOMED CT International edition 01-Feb 2025
* [codesystem SNOMED CT Solor Extension Temporary Code System v2.0.0 (CodeSystem)](CodeSystem-solor-temporary-codesystem.md)

This value set contains 9 concepts

-------

 [Aukščiau pateiktos(-ų) lentelės(-ių) aprašymas(-ai)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "device-type-weight",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/ValueSet/device-type-weight",
  "version" : "1.0.0",
  "name" : "DeviceTypeWeight",
  "title" : "Device Types for Weight Measurement",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-19T15:59:23+02:00",
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
  "description" : "SELECT SNOMED CT code system values that describe the instrument used to measure the body weight.",
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
  "copyright" : "This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement",
  "compose" : {
    "include" : [
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "466289007",
            "display" : "Bed scale (physical object)"
          },
          {
            "code" : "444063009",
            "display" : "Broselow Luten color coding system for pediatric weight estimation (assessment scale)"
          },
          {
            "code" : "720689000",
            "display" : "Chair scale (physical object)"
          },
          {
            "code" : "469204003",
            "display" : "Floor scale, electronic (physical object)"
          },
          {
            "code" : "469787007",
            "display" : "Floor scale, mechanical (physical object)"
          },
          {
            "code" : "58514003",
            "display" : "Infant scale (physical object)"
          },
          {
            "code" : "462242008",
            "display" : "Patient sling scale (physical object)"
          },
          {
            "code" : "466532009",
            "display" : "Wheelchair scale (physical object)"
          }
        ]
      },
      {
        "system" : "https://hl7.lt/fhir/vitalsigns/CodeSystem/solor-temporary-codesystem",
        "concept" : [
          {
            "code" : "24181000205106",
            "display" : "Patient lift scale (physical object)"
          }
        ]
      }
    ]
  }
}

```
