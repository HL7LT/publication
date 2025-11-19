# Body Weight Associated Situation - Lithuanian Vital Signs Implementation Guide v0.0.1

## ValueSet: Body Weight Associated Situation 

 
SELECT SNOMED CT code system values and temporary code system values that describe situations to be considered when interpreting measured values. 

 **References** 

* [Body Weight](StructureDefinition-body-weight.md)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on:

* SNOMED CT International edition 01-Feb 2025
* [codesystem SNOMED CT Solor Extension Temporary Code System v2.0.0 (CodeSystem)](CodeSystem-solor-temporary-codesystem.md)

This value set contains 6 concepts

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "body-weight-associated-situation",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/ValueSet/body-weight-associated-situation",
  "version" : "1.0.0",
  "name" : "BodyWeightAssociatedSituation",
  "title" : "Body Weight Associated Situation",
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
  "description" : "SELECT SNOMED CT code system values and temporary code system values that describe situations to be considered when interpreting measured values.",
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
            "code" : "118643004",
            "display" : "Cast device (physical object)"
          },
          {
            "code" : "257308009",
            "display" : "Oxygenator (physical object)"
          },
          {
            "code" : "53350007",
            "display" : "Prosthesis (physical object)"
          },
          {
            "code" : "248160001",
            "display" : "Undressed (finding)"
          }
        ]
      },
      {
        "system" : "https://hl7.lt/fhir/vitalsigns/CodeSystem/solor-temporary-codesystem",
        "concept" : [
          {
            "code" : "961000205106",
            "display" : "Wearing street clothes, no shoes (finding)"
          },
          {
            "code" : "971000205103",
            "display" : "Wearing street clothes with shoes (finding)"
          }
        ]
      }
    ]
  }
}

```
