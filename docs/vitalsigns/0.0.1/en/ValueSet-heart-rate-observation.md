# Heart Rate observation codes - Lithuanian Vital Signs Implementation Guide v0.0.1

## ValueSet: Heart Rate observation codes 

 
This value set defines the set of LOINC codes considered to be appropriate for representing heart rate vital sign measurements in Observation.code. 

 **References** 

* [Heart Rate](StructureDefinition-heart-rate.md)

### Logical Definition (CLD)

Last updated: 2025-10-26 17:42:56+0000; Language: en

Profile: [Shareable ValueSetversion: null5.0.0)](http://hl7.org/fhir/R5/shareablevalueset.html)

This value set includes codes based on the following rules:

* Include codes from[`http://loinc.org`](http://loinc.org)version Not Stated (use latest from terminology server) where COMPONENT in LP72677-5,LP308218-9,LP308219-7,LP308220-5,LP308221-3, PROPERTY = LP6839-7 (NRat), TIME_ASPCT = LP6960-1 (Pt) and SCALE_TYP = LP7753-9 (Qn)

This value set excludes codes based on the following rules:

* Exclude codes from[`http://loinc.org`](http://loinc.org)version Not Stated (use latest from terminology server) where SYSTEM = LP310004-9 (^Fetus)

 

### Expansion

Expansion from tx.fhir.org based on Loinc v2.81

This value set contains 16 concepts

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "heart-rate-observation",
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
  "url" : "https://hl7.lt/fhir/vitalsigns/ValueSet/heart-rate-observation",
  "version" : "6.0.0",
  "name" : "HeartRateObservation",
  "title" : "Heart Rate observation codes",
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
  "description" : "This value set defines the set of LOINC codes considered to be appropriate for representing heart rate vital sign measurements in Observation.code.",
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
            "value" : "LP72677-5,LP308218-9,LP308219-7,LP308220-5,LP308221-3"
          },
          {
            "property" : "PROPERTY",
            "op" : "=",
            "value" : "LP6839-7"
          },
          {
            "property" : "TIME_ASPCT",
            "op" : "=",
            "value" : "LP6960-1"
          },
          {
            "property" : "SCALE_TYP",
            "op" : "=",
            "value" : "LP7753-9"
          }
        ]
      }
    ],
    "exclude" : [
      {
        "system" : "http://loinc.org",
        "filter" : [
          {
            "property" : "SYSTEM",
            "op" : "=",
            "value" : "LP310004-9"
          }
        ]
      }
    ]
  }
}

```
