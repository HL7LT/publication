# Body Position used in Vital Signs Measurements - Lithuanian Vital Signs Implementation Guide v0.0.1

## ValueSet: Body Position used in Vital Signs Measurements 

 
SELECT SNOMED CT code system values the position in which the individual was in during a measurement. 

 **References** 

* [Body Position Extension](StructureDefinition-body-position.md)
* [Body Structure for Blood Pressure](StructureDefinition-body-structure-blood-pressure.md)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on SNOMED CT International edition 01-Feb 2025

This value set contains 13 concepts

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "vital-signs-body-position",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/ValueSet/vital-signs-body-position",
  "version" : "1.0.0",
  "name" : "VitalSignsBodyPosition",
  "title" : "Body Position used in Vital Signs Measurements",
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
  "description" : "SELECT SNOMED CT code system values the position in which the individual was in during a measurement.",
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
            "code" : "30212006",
            "display" : "Fowler's position (finding)"
          },
          {
            "code" : "26527006",
            "display" : "Inverse Trendelenburg position (finding)"
          },
          {
            "code" : "102536004",
            "display" : "Left lateral decubitus position (finding)"
          },
          {
            "code" : "414585002",
            "display" : "Left lateral tilt (finding)"
          },
          {
            "code" : "10904000",
            "display" : "Orthostatic body position (finding)"
          },
          {
            "code" : "1240000",
            "display" : "Prone body position (finding)"
          },
          {
            "code" : "102538003",
            "display" : "Recumbent body position (finding)"
          },
          {
            "code" : "423413008",
            "display" : "Reverse trendelenburg positioning (finding)"
          },
          {
            "code" : "102535000",
            "display" : "Right lateral decubitus position (finding)"
          },
          {
            "code" : "415346000",
            "display" : "Right lateral tilt (finding)"
          },
          {
            "code" : "33586001",
            "display" : "Sitting position (finding)"
          },
          {
            "code" : "40199007",
            "display" : "Supine body position (finding)"
          },
          {
            "code" : "34106002",
            "display" : "Trendelenburg position (finding)"
          }
        ]
      }
    ]
  }
}

```
