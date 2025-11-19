# Device Types for Heart Rate Measurement - Lithuanian Vital Signs Implementation Guide v0.0.1

## ValueSet: Device Types for Heart Rate Measurement 

 
SELECT SNOMED CT code system values that describe the instrument used to measure the heart rate. 

 **References** 

* [Device for Heart Rate Measurement](StructureDefinition-device-heart-rate.md)

### Logical Definition (CLD)

 

### Išplėtimas

Expansion from tx.fhir.org based on SNOMED CT International edition 01-Feb 2025

This value set contains 11 concepts

-------

 [Aukščiau pateiktos(-ų) lentelės(-ių) aprašymas(-ai)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "device-type-heart-rate",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/ValueSet/device-type-heart-rate",
  "version" : "1.0.0",
  "name" : "DeviceTypeHeartRate",
  "title" : "Device Types for Heart Rate Measurement",
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
  "description" : "SELECT SNOMED CT code system values that describe the instrument used to measure the heart rate.",
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
            "code" : "467178001",
            "display" : "Bedside heart rate monitor (physical object)"
          },
          {
            "code" : "43770009",
            "display" : "Doppler device (physical object)"
          },
          {
            "code" : "86184003",
            "display" : "Electrocardiographic monitor and recorder (physical object)"
          },
          {
            "code" : "469801002",
            "display" : "Invasive blood pressure monitor (physical object)"
          },
          {
            "code" : "258057004",
            "display" : "Non-invasive blood pressure monitor (physical object)"
          },
          {
            "code" : "448703006",
            "display" : "Pulse oximeter (physical object)"
          },
          {
            "code" : "466093008",
            "display" : "Automatic-inflation electronic sphygmomanometer, non-portable (physical object)"
          },
          {
            "code" : "466086009",
            "display" : "Automatic-inflation electronic sphygmomanometer, portable, arm/wrist (physical object)"
          },
          {
            "code" : "466139008",
            "display" : "Automatic-inflation electronic sphygmomanometer, portable, finger (physical object)"
          },
          {
            "code" : "711337005",
            "display" : "Implantable pulmonary artery pressure monitoring system (physical object)"
          },
          {
            "code" : "774007007",
            "display" : "Wearable neonatal heart rate meter (physical object)"
          }
        ]
      }
    ]
  }
}

```
