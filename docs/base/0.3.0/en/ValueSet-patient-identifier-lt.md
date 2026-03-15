# Patient Identifier - Lithuanian Base Implementation Guide v0.3.0

## ValueSet: Patient Identifier 

 
A curated list of identifier systems for patients. 

 **References** 

* [PatientLt](StructureDefinition-patient-lt.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "patient-identifier-lt",
  "language" : "en",
  "url" : "https://tx.hl7.lt/fhir/ValueSet/patient-identifier",
  "version" : "1.0.0",
  "name" : "PatientIdentifierLt",
  "title" : "Patient Identifier",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-03-15T22:56:00+02:00",
  "publisher" : "Lithuanian Medical Library",
  "_publisher" : {
    "extension" : [{
      "extension" : [{
        "url" : "lang",
        "valueCode" : "lt"
      },
      {
        "url" : "content",
        "valueString" : "Lietuvos medicinos biblioteka"
      }],
      "url" : "http://hl7.org/fhir/StructureDefinition/translation"
    }]
  },
  "contact" : [{
    "name" : "Lithuanian Medical Library",
    "telecom" : [{
      "system" : "url",
      "value" : "https://medicinosnk.lt"
    },
    {
      "system" : "email",
      "value" : "info@medicinosnk.lt"
    }]
  }],
  "description" : "A curated list of identifier systems for patients.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "LT"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://tx.hl7.lt/fhir/CodeSystem/identifier-domain",
      "version" : "0.3.0",
      "concept" : [{
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
      }]
    }]
  }
}

```
