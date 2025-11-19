# Blood Pressure Measurement Body Location - Lithuanian Vital Signs Implementation Guide v0.0.1

## ValueSet: Blood Pressure Measurement Body Location 

 
SELECT SNOMED CT code system values that describe the location on the body where the blood pressure was measured. 

 **References** 

* [Body Structure for Blood Pressure](StructureDefinition-body-structure-blood-pressure.md)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on SNOMED CT International edition 01-Feb 2025

This value set contains 18 concepts

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "bp-measurement-body-location",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/ValueSet/bp-measurement-body-location",
  "version" : "2.0.0",
  "name" : "BloodPressureMeasurementBodyLocation",
  "title" : "Blood Pressure Measurement Body Location",
  "status" : "draft",
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
  "description" : "SELECT SNOMED CT code system values that describe the location on the body where the blood pressure was measured.",
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
            "code" : "49256001",
            "display" : "Structure of dorsal digital artery of foot (body structure)"
          },
          {
            "code" : "368469003",
            "display" : "Structure of proper volar digital arteries (body structure)"
          },
          {
            "code" : "17137000",
            "display" : "Structure of brachial artery (body structure)"
          },
          {
            "code" : "723961002",
            "display" : "Structure of left brachial artery (body structure)"
          },
          {
            "code" : "723962009",
            "display" : "Structure of right brachial artery (body structure)"
          },
          {
            "code" : "7657000",
            "display" : "Structure of femoral artery (body structure)"
          },
          {
            "code" : "113270003",
            "display" : "Structure of left femoral artery (body structure)"
          },
          {
            "code" : "69833005",
            "display" : "Structure of right femoral artery (body structure)"
          },
          {
            "code" : "45631007",
            "display" : "Structure of radial artery (body structure)"
          },
          {
            "code" : "368504007",
            "display" : "Structure of left radial artery (body structure)"
          },
          {
            "code" : "368503001",
            "display" : "Structure of right radial artery (body structure)"
          },
          {
            "code" : "13363002",
            "display" : "Structure of posterior tibial artery (body structure)"
          },
          {
            "code" : "214912001",
            "display" : "Structure of left posterior tibial artery (body structure)"
          },
          {
            "code" : "214811007",
            "display" : "Structure of right posterior tibial artery (body structure)"
          },
          {
            "code" : "54247002",
            "display" : "Ascending aorta structure (body structure)"
          },
          {
            "code" : "281130003",
            "display" : "Descending aorta structure (body structure)"
          },
          {
            "code" : "57034009",
            "display" : "Aortic arch structure (body structure)"
          },
          {
            "code" : "7832008",
            "display" : "Abdominal aorta structure (body structure)"
          }
        ]
      }
    ]
  }
}

```
