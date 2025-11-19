# Heart Rate Measurement Method - Lithuanian Vital Signs Implementation Guide v0.0.1

## ValueSet: Heart Rate Measurement Method 

 
SELECT SNOMED CT code system values that describe how the heart rate was measured. 

 **References** 

* [Heart Rate](StructureDefinition-heart-rate.md)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on:

* SNOMED CT International edition 01-Feb 2025
* [codesystem SNOMED CT Solor Extension Temporary Code System v2.0.0 (CodeSystem)](CodeSystem-solor-temporary-codesystem.md)

This value set contains 9 concepts

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "heart-rate-measurement-method",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/ValueSet/heart-rate-measurement-method",
  "version" : "1.0.0",
  "name" : "HeartRateMeasurementMethod",
  "title" : "Heart Rate Measurement Method",
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
  "description" : "SELECT SNOMED CT code system values that describe how the heart rate was measured.",
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
            "code" : "37931006",
            "display" : "Auscultation (procedure)"
          },
          {
            "code" : "268447006",
            "display" : "Doppler studies (procedure)"
          },
          {
            "code" : "29303009",
            "display" : "Electrocardiographic procedure (procedure)"
          },
          {
            "code" : "13385008",
            "display" : "Mediate auscultation (procedure)"
          },
          {
            "code" : "264598005",
            "display" : "Oximetry (procedure)"
          },
          {
            "code" : "113011001",
            "display" : "Palpation (procedure)"
          },
          {
            "code" : "277917001",
            "display" : "Thoracic impedance cardiography (procedure)"
          },
          {
            "code" : "239516002",
            "display" : "Monitoring procedure (regime/therapy)"
          }
        ]
      },
      {
        "system" : "https://hl7.lt/fhir/vitalsigns/CodeSystem/solor-temporary-codesystem",
        "concept" : [
          {
            "code" : "641000205104",
            "display" : "Auscultation - automatic (procedure)"
          }
        ]
      }
    ]
  }
}

```
