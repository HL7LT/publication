# Identifier Domain - Lithuanian Base Implementation Guide v0.1.0

## CodeSystem: Identifier Domain (Experimental) 

 
Identifier Domain with translations in Lithuanian 

This Code system is referenced in the definition of the following value sets:

* [LTBaseOrganizationIdentifier](ValueSet-organization-identifier.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "identifier-domain",
  "language" : "lt",
  "url" : "https://hl7.lt/fhir/CodeSystem/identifier-domain",
  "version" : "0.1.0",
  "name" : "LTBaseIdentifierDomain",
  "title" : "Identifier Domain",
  "status" : "draft",
  "experimental" : true,
  "date" : "2025-10-27T15:57:00+02:00",
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
  "description" : "Identifier Domain with translations in Lithuanian",
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
  "caseSensitive" : true,
  "hierarchyMeaning" : "is-a",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "http://esveikata.lt/Identifier/SVEIDRAID",
      "display" : "VEIDRA identifier",
      "definition" : "VEIDRA identifier",
      "designation" : [
        {
          "language" : "lt",
          "value" : "SVEIDRA identifikatorius"
        }
      ]
    },
    {
      "code" : "http://esveikata.lt/classifiers/Identifier/JAR",
      "display" : "JAR code",
      "definition" : "JAR code",
      "designation" : [
        {
          "language" : "lt",
          "value" : "JAR kodas"
        }
      ]
    },
    {
      "code" : "http://esveikata.lt/Identifier/ESPBI",
      "display" : "ESPBI id",
      "definition" : "ESPBI id",
      "designation" : [
        {
          "language" : "lt",
          "value" : "ESPBI id"
        }
      ]
    }
  ]
}

```
