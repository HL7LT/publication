# Measurement Environment - Lithuanian Vital Signs Implementation Guide v0.0.1

## ValueSet: Measurement Environment 

 
Environment that indicate the surroundings the individual was in during the measurement (i.e. home, clinic, hospital, etc.). 

 **References** 

* [Measurement Setting Extension](StructureDefinition-measurement-setting.md)

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
  "id" : "measurement-environment",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/ValueSet/measurement-environment",
  "version" : "1.0.0",
  "name" : "MeasurementEnvironment",
  "title" : "Measurement Environment",
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
  "description" : "Environment that indicate the surroundings the individual was in during the measurement (i.e. home, clinic, hospital, etc.).",
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
            "code" : "285201006",
            "display" : "Hospital environment (environment)"
          },
          {
            "code" : "264362003",
            "display" : "Home (environment)"
          },
          {
            "code" : "257585005",
            "display" : "Clinic (environment)"
          }
        ]
      }
    ]
  }
}

```
