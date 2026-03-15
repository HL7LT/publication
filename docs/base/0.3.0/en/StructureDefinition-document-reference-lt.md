# DocumentReferenceLt - Lithuanian Base Implementation Guide v0.3.0

## Resource Profile: DocumentReferenceLt 

 
Lithuanian Base Document Reference profile, used for composing documents. 

**Usages:**

* Refer to this Profile: [FamilyMemberHistoryLt](StructureDefinition-family-member-history-lt.md), [ImagingStudyLt](StructureDefinition-imagingstudy-lt.md), [ProcedureLt](StructureDefinition-procedure-lt.md) and [ServiceRequestLt](StructureDefinition-service-request-lt.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/document-reference-lt)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-document-reference-lt.csv), [Excel](../StructureDefinition-document-reference-lt.xlsx), [Schematron](../StructureDefinition-document-reference-lt.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "document-reference-lt",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/document-reference-lt",
  "version" : "0.3.0",
  "name" : "DocumentReferenceLt",
  "title" : "DocumentReferenceLt",
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
  "description" : "Lithuanian Base Document Reference profile, used for composing documents.",
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
    "identity" : "fhircomposition",
    "uri" : "http://hl7.org/fhir/composition",
    "name" : "FHIR Composition"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "xds",
    "uri" : "http://ihe.net/xds",
    "name" : "XDS metadata equivalent"
  },
  {
    "identity" : "cda",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "CDA (R2)"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 V2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DocumentReference",
  "baseDefinition" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/DocumentReferenceEu|0.1.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "DocumentReference",
      "path" : "DocumentReference"
    },
    {
      "id" : "DocumentReference.identifier",
      "path" : "DocumentReference.identifier",
      "mustSupport" : true
    },
    {
      "id" : "DocumentReference.version",
      "path" : "DocumentReference.version",
      "mustSupport" : true
    },
    {
      "id" : "DocumentReference.basedOn",
      "path" : "DocumentReference.basedOn",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/appointment-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/service-request-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/CarePlan|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/Claim|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/CommunicationRequest|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/Contract|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/CoverageEligibilityRequest|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/DeviceRequest|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/EnrollmentRequest|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/ImmunizationRecommendation|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/MedicationRequest|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/NutritionOrder|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/RequestOrchestration|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/SupplyRequest|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/VisionPrescription|5.0.0"]
      }]
    },
    {
      "id" : "DocumentReference.status",
      "path" : "DocumentReference.status",
      "mustSupport" : true
    },
    {
      "id" : "DocumentReference.docStatus",
      "path" : "DocumentReference.docStatus",
      "mustSupport" : true
    },
    {
      "id" : "DocumentReference.type",
      "path" : "DocumentReference.type",
      "mustSupport" : true
    },
    {
      "id" : "DocumentReference.category",
      "path" : "DocumentReference.category",
      "mustSupport" : true
    },
    {
      "id" : "DocumentReference.subject",
      "path" : "DocumentReference.subject",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "DocumentReference.context",
      "path" : "DocumentReference.context",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/encounter-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/episode-of-care-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/appointment-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DocumentReference.date",
      "path" : "DocumentReference.date",
      "mustSupport" : true
    },
    {
      "id" : "DocumentReference.author",
      "path" : "DocumentReference.author",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/Device|5.0.0",
        "https://hl7.lt/fhir/base/StructureDefinition/care-team-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "DocumentReference.description",
      "path" : "DocumentReference.description",
      "mustSupport" : true
    }]
  }
}

```
