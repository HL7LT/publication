# Height Length Measurement Method - Lithuanian Vital Signs Implementation Guide v0.0.1

## ValueSet: Height Length Measurement Method 

 
SELECT SNOMED CT code system values that describe how the height/length was measured. 

 **References** 

* [Body Height](StructureDefinition-body-height.md)

### Logical Definition (CLD)

 

### Išplėtimas

Expansion from tx.fhir.org based on SNOMED CT International edition 01-Feb 2025

This value set contains 3 concepts

-------

 [Aukščiau pateiktos(-ų) lentelės(-ių) aprašymas(-ai)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "height-length-measurement-method",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/ValueSet/height-length-measurement-method",
  "version" : "1.0.0",
  "name" : "HeightLengthMeasurementMethod",
  "title" : "Height Length Measurement Method",
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
  "description" : "SELECT SNOMED CT code system values that describe how the height/length was measured.",
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
            "code" : "414135002",
            "display" : "Estimated (qualifier value)"
          },
          {
            "code" : "258104002",
            "display" : "Measured (qualifier value)"
          },
          {
            "code" : "733985002",
            "display" : "Reported (qualifier value)"
          }
        ]
      }
    ]
  }
}

```
