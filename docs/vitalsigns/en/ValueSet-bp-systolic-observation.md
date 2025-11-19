# BP Systolic observation codes - Lithuanian Vital Signs Implementation Guide v0.0.1

## ValueSet: BP Systolic observation codes 

 
This value set defines the set of LOINC codes considered to be appropriate for representing an arterial systolic BP vital sign measurement in Observation.component.code. 

 **References** 

* [Blood Pressure Panel](StructureDefinition-blood-pressure-panel.md)

### Logical Definition (CLD)

Last updated: 2025-10-26 17:42:56+0000; Language: en

Profile: [Shareable ValueSetversion: null5.0.0)](http://hl7.org/fhir/R5/shareablevalueset.html)

* Include codes from[`http://loinc.org`](http://loinc.org)version Not Stated (use latest from terminology server) where COMPONENT in LP72836-7,LP304522-8,LP304524-4,LP304523-6,LP304513-7, PROPERTY = LP6847-0 (Pres), TIME_ASPCT = LP6960-1 (Pt), SYSTEM = LP7034-4 (Arterial system) and SCALE_TYP = LP7753-9 (Qn)

 

### Expansion

Expansion from tx.fhir.org based on Loinc v2.81

This value set contains 9 concepts

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "bp-systolic-observation",
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
  "url" : "https://hl7.lt/fhir/vitalsigns/ValueSet/bp-systolic-observation",
  "version" : "6.0.0",
  "name" : "BloodPressureSystolicObservation",
  "title" : "BP Systolic observation codes",
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
  "description" : "This value set defines the set of LOINC codes considered to be appropriate for representing an arterial systolic BP vital sign measurement in Observation.component.code.",
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
            "value" : "LP72836-7,LP304522-8,LP304524-4,LP304523-6,LP304513-7"
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
