# BP Panel observation codes - Lithuanian Vital Signs Implementation Guide v0.0.1

## ValueSet: BP Panel observation codes 

 
This value set defines the set of LOINC codes considered to be appropriate for representing an arterial szstolic and diastolic BP panel of vital signs measurements in Observation.component.code. 

 **References** 

* [Blood Pressure Panel](StructureDefinition-blood-pressure-panel.md)

### Logical Definition (CLD)

 

### Išplėtimas

Expansion from tx.fhir.org based on Loinc v2.81

This value set contains 3 concepts

-------

 [Aukščiau pateiktos(-ų) lentelės(-ių) aprašymas(-ai)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "bp-panel-observation",
  "meta" : {
    "lastUpdated" : "2025-10-26T17:42:56.640+00:00",
    "profile" : [
      "http://hl7.org/fhir/StructureDefinition/shareablevalueset|5.0.0"
    ]
  },
  "language" : "en",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-wg",
      "valueCode" : "oo"
    }
  ],
  "url" : "https://hl7.lt/fhir/vitalsigns/ValueSet/bp-panel-observation",
  "version" : "6.0.0",
  "name" : "BloodPressurePanelObservation",
  "title" : "BP Panel observation codes",
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
  "description" : "This value set defines the set of LOINC codes considered to be appropriate for representing an arterial szstolic and diastolic BP panel of vital signs measurements in Observation.component.code.",
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
  "copyright" : "This content from LOINC® is copyright © 1995 Regenstrief Institute, Inc. and the LOINC Committee, and available at no cost under the license at http://loinc.org/terms-of-use",
  "compose" : {
    "include" : [
      {
        "system" : "http://loinc.org",
        "concept" : [
          {
            "code" : "35094-2",
            "display" : "Blood pressure panel"
          },
          {
            "code" : "55417-0",
            "display" : "Short blood pressure panel"
          },
          {
            "code" : "85354-9",
            "display" : "Blood pressure panel with all children optional"
          }
        ]
      }
    ]
  }
}

```
