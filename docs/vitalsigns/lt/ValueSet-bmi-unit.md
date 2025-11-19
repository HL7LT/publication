# BMI Units - Lithuanian Vital Signs Implementation Guide v0.0.1

## ValueSet: BMI Units 

 
UCUM units for recording BMI 

 **References** 

* [Body Mass Index](StructureDefinition-bmi.md)

### Logical Definition (CLD)

 

### Išplėtimas

Expansion from tx.fhir.org based on codesystem UCUM version 2.2

This value set contains 1 concepts

-------

 [Aukščiau pateiktos(-ų) lentelės(-ių) aprašymas(-ai)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "bmi-unit",
  "meta" : {
    "lastUpdated" : "2025-10-26T17:42:56.640+00:00",
    "profile" : [
      "http://hl7.org/fhir/StructureDefinition/shareablevalueset|5.0.0"
    ]
  },
  "language" : "en",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/valueset-extensible",
      "valueBoolean" : true
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-wg",
      "valueCode" : "oo"
    }
  ],
  "url" : "https://hl7.lt/fhir/vitalsigns/ValueSet/bmi-unit",
  "version" : "6.0.0",
  "name" : "BMIUnit",
  "title" : "BMI Units",
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
  "description" : "UCUM units for recording BMI",
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
  "copyright" : "UCUM is Copyright © 1999-2013 Regenstrief Institute, Inc. and The UCUM Organization, Indianapolis, IN. All rights reserved. See http://unitsofmeasure.org/trac//wiki/TermsOfUse for details",
  "compose" : {
    "include" : [
      {
        "system" : "http://unitsofmeasure.org",
        "concept" : [
          {
            "code" : "kg/m2",
            "display" : "kilogram / (meter ^ 2)"
          }
        ]
      }
    ]
  }
}

```
