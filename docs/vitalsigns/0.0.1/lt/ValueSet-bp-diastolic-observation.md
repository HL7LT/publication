# BP Diastolic observation codes - Lithuanian Vital Signs Implementation Guide v0.0.1

## ValueSet: BP Diastolic observation codes 

 
This value set defines the set of LOINC codes considered to be appropriate for representing an arterial diastolic BP vital sign measurement in Observation.component.code. 

 **References** 

* [Blood Pressure Panel](StructureDefinition-blood-pressure-panel.md)

### Logical Definition (CLD)

Last updated: 2025-10-26 17:42:56+0000; Language: en

Profile: [Shareable ValueSetversion: null5.0.0)](http://hl7.org/fhir/R5/shareablevalueset.html)

* Include codes from[`http://loinc.org`](http://loinc.org)version Not Stated (use latest from terminology server) where COMPONENT in LP72831-8,LP304516-0,LP304518-6,LP304517-8,LP304501-2, PROPERTY = LP6847-0 (Pres), TIME_ASPCT = LP6960-1 (Pt), SYSTEM = LP7034-4 (Arterial system) and SCALE_TYP = LP7753-9 (Qn)

 

### Išplėtimas

Expansion from tx.fhir.org based on Loinc v2.81

This value set contains 8 concepts

-------

 [Aukščiau pateiktos(-ų) lentelės(-ių) aprašymas(-ai)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "bp-diastolic-observation",
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
  "url" : "https://hl7.lt/fhir/vitalsigns/ValueSet/bp-diastolic-observation",
  "version" : "6.0.0",
  "name" : "BloodPressureDiastolicObservation",
  "title" : "BP Diastolic observation codes",
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
  "description" : "This value set defines the set of LOINC codes considered to be appropriate for representing an arterial diastolic BP vital sign measurement in Observation.component.code.",
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
        "filter" : [
          {
            "property" : "COMPONENT",
            "op" : "in",
            "value" : "LP72831-8,LP304516-0,LP304518-6,LP304517-8,LP304501-2"
          },
          {
            "property" : "PROPERTY",
            "op" : "=",
            "value" : "LP6847-0"
          },
          {
            "property" : "TIME_ASPCT",
            "op" : "=",
            "value" : "LP6960-1"
          },
          {
            "property" : "SYSTEM",
            "op" : "=",
            "value" : "LP7034-4"
          },
          {
            "property" : "SCALE_TYP",
            "op" : "=",
            "value" : "LP7753-9"
          }
        ]
      }
    ]
  }
}

```
