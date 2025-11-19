# Blood Pressure Cuff Size - Lithuanian Vital Signs Implementation Guide v0.0.1

## ValueSet: Blood Pressure Cuff Size 

 
SELECT SNOMED CT code system values that describe the size of blood pressure cuff in use. 

 **References** 

* [Device for Blood Pressure Measurement](StructureDefinition-device-blood-pressure.md)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on SNOMED CT International edition 01-Feb 2025

This value set contains 2 concepts

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "bp-cuff-size",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/ValueSet/bp-cuff-size",
  "version" : "1.0.0",
  "name" : "BloodPressureCuffSize",
  "title" : "Blood Pressure Cuff Size",
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
  "description" : "SELECT SNOMED CT code system values that describe the size of blood pressure cuff in use.",
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
            "code" : "720736009",
            "display" : "Blood pressure cuff, pediatric size (physical object)"
          },
          {
            "code" : "720737000",
            "display" : "Blood pressure cuff, adult size (physical object)"
          }
        ]
      }
    ]
  }
}

```
