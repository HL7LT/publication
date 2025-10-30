# Identifier Domain - Lithuanian Base Implementation Guide v0.2.0

## CodeSystem: Identifier Domain (Eksperimentinis) 

 
Identifier Domain with translations in Lithuanian 

Ši kodų sistema minima apibrėžiant šiuos reikšmių rinkinius:

* [LTBaseOrganizationIdentifier](ValueSet-organization-identifier.md)
* [PatientIdentifier](ValueSet-patient-identifier.md)

-------

 [Aukščiau pateiktos(-ų) lentelės(-ių) aprašymas(-ai)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "identifier-domain",
  "language" : "lt",
  "url" : "https://hl7.lt/fhir/tx/CodeSystem/identifier-domain",
  "version" : "0.2.0",
  "name" : "LTBaseIdentifierDomain",
  "title" : "Identifier Domain",
  "status" : "draft",
  "experimental" : true,
  "date" : "2025-10-30T19:02:48+02:00",
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
  "count" : 13,
  "concept" : [
    {
      "code" : "http://esveikata.lt/Identifier/SVEIDRAID",
      "display" : "SVEIDRA identifier",
      "definition" : "SVEIDRA identifier",
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
    },
    {
      "code" : "http://esveikata.lt/Identifier/VAPRIS",
      "display" : "VAPRIS",
      "definition" : "VAPRIS",
      "designation" : [
        {
          "language" : "lt",
          "value" : "VAPRIS"
        }
      ]
    },
    {
      "code" : "http://esveikata.lt/Identifier/SPILIS",
      "display" : "SPĮLIS",
      "definition" : "SPĮLIS veiklos vietos identifikatorius",
      "designation" : [
        {
          "language" : "lt",
          "value" : "SPĮLIS veiklos vietos identifikatorius"
        }
      ]
    },
    {
      "code" : "http://esveikata.lt/Identifier/PersonalCode",
      "display" : "Personal Code",
      "definition" : "Personal Code",
      "designation" : [
        {
          "language" : "lt",
          "value" : "Asmens kodas"
        }
      ]
    },
    {
      "code" : "http://esveikata.lt/Identifier/Patient/ESI",
      "display" : "ESI code",
      "definition" : "ESI code",
      "designation" : [
        {
          "language" : "lt",
          "value" : "ESI code"
        }
      ]
    },
    {
      "code" : "http://esveikata.lt/Identifier/Patient/DIK",
      "display" : "DIK",
      "definition" : "DIK",
      "designation" : [
        {
          "language" : "lt",
          "value" : "DIK"
        }
      ]
    },
    {
      "code" : "http://esveikata.lt/Identifier/Patient/SveidraID",
      "display" : "SveidraID",
      "definition" : "SveidraID",
      "designation" : [
        {
          "language" : "lt",
          "value" : "SveidraID"
        }
      ]
    },
    {
      "code" : "http://esveikata.lt/Identifier/Patient/eFormNumber",
      "display" : "eFormNumber",
      "definition" : "eFormNumber",
      "designation" : [
        {
          "language" : "lt",
          "value" : "eFormNumber"
        }
      ]
    },
    {
      "code" : "http://esveikata.lt/Identifier/Patient/ForeignPersonalCode",
      "display" : "ForeignPersonalCode",
      "definition" : "ForeignPersonalCode",
      "designation" : [
        {
          "language" : "lt",
          "value" : "ForeignPersonalCode"
        }
      ]
    },
    {
      "code" : "http://esveikata.lt/Identifier/eDelivery",
      "display" : "eDelivery",
      "definition" : "eDelivery",
      "designation" : [
        {
          "language" : "lt",
          "value" : "eDelivery"
        }
      ]
    },
    {
      "code" : "http://esveikata.lt/classifiers/IdentityDocument/SerieNumber",
      "display" : "SerieNumber",
      "definition" : "SerieNumber",
      "designation" : [
        {
          "language" : "lt",
          "value" : "SerieNumber"
        }
      ]
    }
  ]
}

```
