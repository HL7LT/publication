# EpisodeOfCareLt - Lithuanian Base Implementation Guide v0.3.0

## Resource Profile: EpisodeOfCareLt 

 
Lithuanian Base EpisodeOfCare profile, used for composing episodes of care. 

**Usages:**

* Refer to this Profile: [DocumentReferenceLt](StructureDefinition-document-reference-lt.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/episode-of-care-lt)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-episode-of-care-lt.csv), [Excel](../StructureDefinition-episode-of-care-lt.xlsx), [Schematron](../StructureDefinition-episode-of-care-lt.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "episode-of-care-lt",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/episode-of-care-lt",
  "version" : "0.3.0",
  "name" : "EpisodeOfCareLt",
  "title" : "EpisodeOfCareLt",
  "status" : "active",
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
  "description" : "Lithuanian Base EpisodeOfCare profile, used for composing episodes of care.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "LT"
    }]
  }],
  "fhirVersion" : "5.0.0",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "EpisodeOfCare",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/EpisodeOfCare|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "EpisodeOfCare",
      "path" : "EpisodeOfCare"
    },
    {
      "id" : "EpisodeOfCare.identifier",
      "path" : "EpisodeOfCare.identifier",
      "mustSupport" : true
    },
    {
      "id" : "EpisodeOfCare.status",
      "path" : "EpisodeOfCare.status",
      "mustSupport" : true
    },
    {
      "id" : "EpisodeOfCare.diagnosis",
      "path" : "EpisodeOfCare.diagnosis",
      "mustSupport" : true
    },
    {
      "id" : "EpisodeOfCare.diagnosis.condition",
      "path" : "EpisodeOfCare.diagnosis.condition",
      "type" : [{
        "code" : "CodeableReference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/condition-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "EpisodeOfCare.patient",
      "path" : "EpisodeOfCare.patient",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "EpisodeOfCare.managingOrganization",
      "path" : "EpisodeOfCare.managingOrganization",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "EpisodeOfCare.period",
      "path" : "EpisodeOfCare.period",
      "mustSupport" : true
    },
    {
      "id" : "EpisodeOfCare.referralRequest",
      "path" : "EpisodeOfCare.referralRequest",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/service-request-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "EpisodeOfCare.careManager",
      "path" : "EpisodeOfCare.careManager",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "EpisodeOfCare.careTeam",
      "path" : "EpisodeOfCare.careTeam",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/care-team-lt|0.3.0"]
      }],
      "mustSupport" : true
    }]
  }
}

```
