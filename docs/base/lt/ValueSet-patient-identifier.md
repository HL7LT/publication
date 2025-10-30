# Patient Identifier - Lithuanian Base Implementation Guide v0.2.0

## ValueSet: Patient Identifier 

 
A curated list of identifier systems for patients. 

 **References** 

* [LT Base Patient](StructureDefinition-lt-patient.md)

### Logical Definition (CLD)

 

### Išplėtimas

-------

 [Aukščiau pateiktos(-ų) lentelės(-ių) aprašymas(-ai)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "patient-identifier",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/ValueSet/patient-identifier",
  "version" : "1.0.0",
  "name" : "PatientIdentifier",
  "title" : "Patient Identifier",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-10-30T19:04:29+02:00",
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
  "description" : "A curated list of identifier systems for patients.",
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
  "compose" : {
    "include" : [
      {
        "system" : "https://hl7.lt/fhir/tx/CodeSystem/identifier-domain",
        "concept" : [
          {
            "code" : "http://esveikata.lt/Identifier/ESPBI"
          },
          {
            "code" : "http://esveikata.lt/Identifier/PersonalCode"
          },
          {
            "code" : "http://esveikata.lt/Identifier/Patient/ESI"
          },
          {
            "code" : "http://esveikata.lt/Identifier/Patient/DIK"
          },
          {
            "code" : "http://esveikata.lt/Identifier/Patient/SveidraID"
          },
          {
            "code" : "http://esveikata.lt/Identifier/Patient/eFormNumber"
          },
          {
            "code" : "http://esveikata.lt/Identifier/Patient/ForeignPersonalCode"
          },
          {
            "code" : "http://esveikata.lt/Identifier/eDelivery"
          },
          {
            "code" : "http://esveikata.lt/classifiers/IdentityDocument/SerieNumber"
          }
        ]
      }
    ]
  }
}

```
