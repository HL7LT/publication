# Heart Rate Measurement Body Location - Lithuanian Vital Signs Implementation Guide v0.0.1

## ValueSet: Heart Rate Measurement Body Location 

 
SELECT SNOMED CT code system values that describe where on the body the heart rate was measured. 

 **References** 

* [Heart Rate](StructureDefinition-heart-rate.md)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on:

* SNOMED CT International edition 01-Feb 2025
* [codesystem SNOMED CT Solor Extension Temporary Code System v2.0.0 (CodeSystem)](CodeSystem-solor-temporary-codesystem.md)

This value set contains 30 concepts

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "heart-rate-measurement-body-location",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/ValueSet/heart-rate-measurement-body-location",
  "version" : "1.0.0",
  "name" : "HeartRateMeasurementBodyLocation",
  "title" : "Heart Rate Measurement Body Location",
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
  "description" : "SELECT SNOMED CT code system values that describe where on the body the heart rate was measured.",
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
            "code" : "32062004",
            "display" : "Common carotid artery structure (body structure)"
          },
          {
            "code" : "113263003",
            "display" : "Left common carotid artery structure (body structure)"
          },
          {
            "code" : "65355003",
            "display" : "Right common carotid artery structure (body structure)"
          },
          {
            "code" : "13383001",
            "display" : "Structure of apex of heart (body structure)"
          },
          {
            "code" : "17137000",
            "display" : "Structure of brachial artery (body structure)"
          },
          {
            "code" : "86547008",
            "display" : "Structure of dorsalis pedis artery (body structure)"
          },
          {
            "code" : "7657000",
            "display" : "Structure of femoral artery (body structure)"
          },
          {
            "code" : "723961002",
            "display" : "Structure of left brachial artery (body structure)"
          },
          {
            "code" : "792817008",
            "display" : "Structure of left dorsalis pedis artery (body structure)"
          },
          {
            "code" : "113270003",
            "display" : "Structure of left femoral artery (body structure)"
          },
          {
            "code" : "25885001",
            "display" : "Structure of left popliteal artery (body structure)"
          },
          {
            "code" : "214912001",
            "display" : "Structure of left posterior tibial artery (body structure)"
          },
          {
            "code" : "50408007",
            "display" : "Structure of left pulmonary artery"
          },
          {
            "code" : "368504007",
            "display" : "Structure of left radial artery (body structure)"
          },
          {
            "code" : "368506009",
            "display" : "Structure of left ulnar artery (body structure)"
          },
          {
            "code" : "43899006",
            "display" : "Structure of popliteal artery (body structure)"
          },
          {
            "code" : "13363002",
            "display" : "Structure of posterior tibial artery (body structure)"
          },
          {
            "code" : "45631007",
            "display" : "Structure of radial artery (body structure)"
          },
          {
            "code" : "723962009",
            "display" : "Structure of right brachial artery (body structure)"
          },
          {
            "code" : "792816004",
            "display" : "Structure of right dorsalis pedis artery (body structure)"
          },
          {
            "code" : "69833005",
            "display" : "Structure of right femoral artery (body structure)"
          },
          {
            "code" : "57832007",
            "display" : "Structure of right popliteal artery (body structure)"
          },
          {
            "code" : "368503001",
            "display" : "Structure of right radial artery (body structure)"
          },
          {
            "code" : "214811007",
            "display" : "Structure of right posterior tibial artery (body structure)"
          },
          {
            "code" : "78480002",
            "display" : "Structure of right pulmonary artery (body structure)"
          },
          {
            "code" : "368505008",
            "display" : "Structure of right ulnar artery (body structure)"
          },
          {
            "code" : "15672000",
            "display" : "Structure of superficial temporal artery (body structure)"
          },
          {
            "code" : "44984001",
            "display" : "Structure of ulnar artery (body structure)"
          }
        ]
      },
      {
        "system" : "https://hl7.lt/fhir/vitalsigns/CodeSystem/solor-temporary-codesystem",
        "concept" : [
          {
            "code" : "24781000205105",
            "display" : "Structure of left superficial temporal artery (body structure)"
          },
          {
            "code" : "24791000205107",
            "display" : "Structure of right superficial temporal artery (body structure)"
          }
        ]
      }
    ]
  }
}

```
