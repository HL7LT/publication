# Organization Identifier - Lithuanian Base Implementation Guide v0.3.0

## ValueSet: Organization Identifier 

 
A curated list of identifier systems for organizations. 

 **References** 

* [OrganizationLt](StructureDefinition-organization-lt.md)

### Logical Definition (CLD)

 

### Išplėtimas

-------

 [Aukščiau pateiktos(-ų) lentelės(-ių) aprašymas(-ai)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "organization-identifier-lt",
  "language" : "en",
  "url" : "https://tx.hl7.lt/fhir/ValueSet/organization-identifier",
  "version" : "1.0.0",
  "name" : "OrganizationIdentifierLt",
  "title" : "Organization Identifier",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-03-15T18:57:53+02:00",
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
  "description" : "A curated list of identifier systems for organizations.",
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
        "code" : "http://esveikata.lt/Identifier/SVEIDRAID"
      },
      {
        "code" : "http://esveikata.lt/Identifier/SPILIS"
      },
      {
        "code" : "http://esveikata.lt/Identifier/ESPBI"
      },
      {
        "code" : "http://esveikata.lt/Identifier/VAPRIS"
      }]
    }]
  }
}

```
