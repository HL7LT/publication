# Device Types for Height Length Measurement - Lithuanian Vital Signs Implementation Guide v0.0.1

## ValueSet: Device Types for Height Length Measurement 

 
SELECT SNOMED CT code system values that describe the instrument used to measure the body height/length. 

 **References** 

* [Device for Body Height Measurement](StructureDefinition-device-body-height.md)

### Logical Definition (CLD)

 

### Išplėtimas

Expansion from tx.fhir.org based on:

* SNOMED CT International edition 01-Feb 2025
* [codesystem SNOMED CT Solor Extension Temporary Code System v2.0.0 (CodeSystem)](CodeSystem-solor-temporary-codesystem.md)

This value set contains 3 concepts

-------

 [Aukščiau pateiktos(-ų) lentelės(-ių) aprašymas(-ai)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "device-type-height-length",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/ValueSet/device-type-height-length",
  "version" : "1.0.0",
  "name" : "DeviceTypeHeightLength",
  "title" : "Device Types for Height Length Measurement",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-19T15:54:38+02:00",
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
  "description" : "SELECT SNOMED CT code system values that describe the instrument used to measure the body height/length.",
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
            "code" : "102304005",
            "display" : "Measuring ruler, device (physical object)"
          },
          {
            "code" : "51791000",
            "display" : "Measuring tape, device (physical object)"
          }
        ]
      },
      {
        "system" : "https://hl7.lt/fhir/vitalsigns/CodeSystem/solor-temporary-codesystem",
        "concept" : [
          {
            "code" : "24311000205101",
            "display" : "Stadiometer (physical object)"
          }
        ]
      }
    ]
  }
}

```
