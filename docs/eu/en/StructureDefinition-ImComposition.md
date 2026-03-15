# IM Composition - HL7 Europe IG Snapshot v0.0.1

## Resource Profile: IM Composition 

 
Clinical document used to represent a Imaging Study Report for the scope of the HL7 Europe project. 

**Usages:**

* Refer to this Profile: [IM Diagnostic Report](StructureDefinition-ImDiagnosticReport.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/ImComposition)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-ImComposition.csv), [Excel](../StructureDefinition-ImComposition.xlsx), [Schematron](../StructureDefinition-ImComposition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ImComposition",
  "language" : "en",
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImComposition",
  "version" : "0.0.1",
  "name" : "ImComposition",
  "title" : "IM Composition",
  "status" : "draft",
  "date" : "2025-05-14T15:47:13+02:00",
  "publisher" : "Lithuanian Medical Library",
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
  "description" : "Clinical document used to represent a Imaging Study Report for the scope of the HL7 Europe project.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "EU"
    }]
  }],
  "copyright" : "Used by permission of HL7 Europe, all rights reserved Creative Commons License",
  "fhirVersion" : "5.0.0",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "cda",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "CDA (R2)"
  },
  {
    "identity" : "fhirdocumentreference",
    "uri" : "http://hl7.org/fhir/documentreference",
    "name" : "FHIR DocumentReference"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Composition",
  "baseDefinition" : "https://hl7.lt/fhir/eu/StructureDefinition/CompositionEu|0.1.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Composition",
      "path" : "Composition",
      "short" : "Imaging Report composition",
      "definition" : "Imaging Study Report composition.\n\nA composition is a set of healthcare-related information that is assembled together into a single logical document that \nprovides a single coherent statement of meaning, establishes its own context and that has clinical attestation with regard \nto who is making the statement.\n\nWhile a Composition defines the structure, it does not actually contain the content: rather the full content of a document is contained in a Bundle, \nof which the Composition is the first resource contained.\n\n\nThe `text` field of each section SHALL contain a textual representation of all listed entries."
    },
    {
      "id" : "Composition.extension",
      "path" : "Composition.extension",
      "min" : 1
    },
    {
      "id" : "Composition.extension:diagnosticreport-reference",
      "path" : "Composition.extension",
      "sliceName" : "diagnosticreport-reference",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/im-composition-diagnosticReportReference|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.identifier",
      "path" : "Composition.identifier",
      "min" : 1
    },
    {
      "id" : "Composition.type",
      "path" : "Composition.type",
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://hl7.eu/fhir/imaging-r5/ValueSet/ImImagingReportTypesEuVS"
      }
    },
    {
      "id" : "Composition.type.coding",
      "path" : "Composition.type.coding",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Composition.type.coding:eu-template",
      "path" : "Composition.type.coding",
      "sliceName" : "eu-template",
      "min" : 1,
      "max" : "1",
      "patternCoding" : {
        "system" : "http://hl7.eu/fhir/imaging-r5/CodeSystem/Hl7EuDocumentTypes",
        "code" : "imaging-report-v0-0-1",
        "display" : "Imaging Report V0.0.1"
      }
    },
    {
      "id" : "Composition.category:imaging",
      "path" : "Composition.category",
      "sliceName" : "imaging",
      "min" : 1,
      "max" : "1",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "18748-4",
          "display" : "Diagnostic imaging study"
        }]
      }
    },
    {
      "id" : "Composition.category:imaging.coding",
      "path" : "Composition.category.coding",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Composition.author",
      "path" : "Composition.author",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.author:author",
      "path" : "Composition.author",
      "sliceName" : "author",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0"]
      }]
    },
    {
      "id" : "Composition.author:authoringDevice",
      "path" : "Composition.author",
      "sliceName" : "authoringDevice",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Device|5.0.0"]
      }]
    },
    {
      "id" : "Composition.attester",
      "path" : "Composition.attester",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "mode"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.attester:legalAuthenticator",
      "path" : "Composition.attester",
      "sliceName" : "legalAuthenticator",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Composition.attester:legalAuthenticator.mode",
      "path" : "Composition.attester.mode",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/composition-attestation-mode",
          "code" : "legal"
        }]
      }
    },
    {
      "id" : "Composition.attester:legalAuthenticator.time",
      "path" : "Composition.attester.time",
      "min" : 1
    },
    {
      "id" : "Composition.attester:legalAuthenticator.party",
      "path" : "Composition.attester.party",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0"]
      }]
    },
    {
      "id" : "Composition.attester:resultValidator",
      "path" : "Composition.attester",
      "sliceName" : "resultValidator",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Composition.attester:resultValidator.mode",
      "path" : "Composition.attester.mode",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/composition-attestation-mode",
          "code" : "professional"
        }]
      }
    },
    {
      "id" : "Composition.attester:resultValidator.time",
      "path" : "Composition.attester.time",
      "min" : 1
    },
    {
      "id" : "Composition.attester:resultValidator.party",
      "path" : "Composition.attester.party",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0"]
      }]
    },
    {
      "id" : "Composition.custodian",
      "path" : "Composition.custodian",
      "short" : "Organization that manages the Imaging Report",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/organization-eu|0.1.0"]
      }]
    },
    {
      "id" : "Composition.event",
      "path" : "Composition.event",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "detail.concept"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 2
    },
    {
      "id" : "Composition.event:imagingstudy",
      "path" : "Composition.event",
      "sliceName" : "imagingstudy",
      "short" : "Modality",
      "definition" : "The type of imaging modality used to perform the study.",
      "min" : 1,
      "max" : "*"
    },
    {
      "id" : "Composition.event:imagingstudy.detail",
      "path" : "Composition.event.detail",
      "min" : 1,
      "type" : [{
        "code" : "CodeableReference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingStudy|0.1.0-ballot"]
      }],
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "https://dicom.nema.org/medical/dicom/current/output/chtml/part16/sect_CID_33.html"
      }
    },
    {
      "id" : "Composition.event:procedure",
      "path" : "Composition.event",
      "sliceName" : "procedure",
      "short" : "Study Type",
      "definition" : "The type of imaging study performed.",
      "min" : 1,
      "max" : "*"
    },
    {
      "id" : "Composition.event:procedure.detail",
      "path" : "Composition.event.detail",
      "min" : 1,
      "type" : [{
        "code" : "CodeableReference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImProcedure|0.0.1"]
      }],
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "https://www.hl7.org/fhir/valueset-procedure-reason.html"
      }
    },
    {
      "id" : "Composition.section",
      "path" : "Composition.section",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "code"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 8,
      "constraint" : [{
        "key" : "eu-imaging-composition-1",
        "severity" : "error",
        "human" : "When a section is empty, the emptyReason extension SHALL be present.",
        "expression" : "entry.empty() and emptyReason.exists()",
        "source" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImComposition|0.0.1"
      }]
    },
    {
      "id" : "Composition.section.code",
      "path" : "Composition.section.code",
      "min" : 1
    },
    {
      "id" : "Composition.section.emptyReason",
      "path" : "Composition.section.emptyReason",
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://hl7.eu/fhir/imaging-r5/ValueSet/ImSectionEmptyReason"
      }
    },
    {
      "id" : "Composition.section:imagingstudy",
      "path" : "Composition.section",
      "sliceName" : "imagingstudy",
      "short" : "Imaging Study",
      "definition" : "This section holds information related to the imaging studies covered by this report.",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Composition.section:imagingstudy.extension",
      "path" : "Composition.section.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:imagingstudy.extension:note",
      "path" : "Composition.section.extension",
      "sliceName" : "note",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/note|5.2.0"]
      }]
    },
    {
      "id" : "Composition.section:imagingstudy.code",
      "path" : "Composition.section.code",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "18726-0"
        }]
      }
    },
    {
      "id" : "Composition.section:imagingstudy.entry",
      "path" : "Composition.section.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Composition.section:imagingstudy.entry:imagingstudy",
      "path" : "Composition.section.entry",
      "sliceName" : "imagingstudy",
      "short" : "Imaging Study Reference",
      "definition" : "This entry holds a reference to the Imaging Study instance that is associated with this Composition.",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingStudy|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.section:order",
      "path" : "Composition.section",
      "sliceName" : "order",
      "short" : "Order",
      "definition" : "This section holds information related to the order for the imaging study.",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Composition.section:order.extension",
      "path" : "Composition.section.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:order.extension:note",
      "path" : "Composition.section.extension",
      "sliceName" : "note",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/note|5.2.0"]
      }]
    },
    {
      "id" : "Composition.section:order.code",
      "path" : "Composition.section.code",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "55115-0",
          "display" : "Requested imaging studies information Document"
        }]
      }
    },
    {
      "id" : "Composition.section:order.entry",
      "path" : "Composition.section.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:order.entry:order",
      "path" : "Composition.section.entry",
      "sliceName" : "order",
      "short" : "Order reference",
      "definition" : "This entry holds a reference to the order for the Imaging Study and report.",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImOrder|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.section:history",
      "path" : "Composition.section",
      "sliceName" : "history",
      "short" : "History",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Composition.section:history.extension",
      "path" : "Composition.section.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:history.extension:note",
      "path" : "Composition.section.extension",
      "sliceName" : "note",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/note|5.2.0"]
      }]
    },
    {
      "id" : "Composition.section:history.code",
      "path" : "Composition.section.code",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "11329-0",
          "display" : "History general Narrative - Reported"
        }]
      }
    },
    {
      "id" : "Composition.section:procedure",
      "path" : "Composition.section",
      "sliceName" : "procedure",
      "short" : "Procedure",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Composition.section:procedure.extension",
      "path" : "Composition.section.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:procedure.extension:note",
      "path" : "Composition.section.extension",
      "sliceName" : "note",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/note|5.2.0"]
      }]
    },
    {
      "id" : "Composition.section:procedure.code",
      "path" : "Composition.section.code",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "55111-9",
          "display" : "Current imaging procedure descriptions Document"
        }]
      }
    },
    {
      "id" : "Composition.section:procedure.entry",
      "path" : "Composition.section.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:procedure.entry:procedure",
      "path" : "Composition.section.entry",
      "sliceName" : "procedure",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImProcedure|0.0.1"]
      }]
    },
    {
      "id" : "Composition.section:comparison",
      "path" : "Composition.section",
      "sliceName" : "comparison",
      "short" : "History",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Composition.section:comparison.extension",
      "path" : "Composition.section.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:comparison.extension:note",
      "path" : "Composition.section.extension",
      "sliceName" : "note",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/note|5.2.0"]
      }]
    },
    {
      "id" : "Composition.section:comparison.code",
      "path" : "Composition.section.code",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "18834-2",
          "display" : "Radiology Comparison study (narrative)"
        }]
      }
    },
    {
      "id" : "Composition.section:comparison.entry",
      "path" : "Composition.section.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:comparison.entry:comparedstudy",
      "path" : "Composition.section.entry",
      "sliceName" : "comparedstudy",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingStudy|0.1.0-ballot",
        "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingSelection|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.section:findings",
      "path" : "Composition.section",
      "sliceName" : "findings",
      "short" : "Findings",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Composition.section:findings.extension",
      "path" : "Composition.section.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:findings.extension:note",
      "path" : "Composition.section.extension",
      "sliceName" : "note",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/note|5.2.0"]
      }]
    },
    {
      "id" : "Composition.section:findings.code",
      "path" : "Composition.section.code",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "59776-5",
          "display" : "Findings"
        }]
      }
    },
    {
      "id" : "Composition.section:findings.entry",
      "path" : "Composition.section.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:findings.entry:finding",
      "path" : "Composition.section.entry",
      "sliceName" : "finding",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImFinding|0.0.1"]
      }]
    },
    {
      "id" : "Composition.section:findings.entry:keyimage",
      "path" : "Composition.section.entry",
      "sliceName" : "keyimage",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImKeyImageDocumentReference|0.0.1",
        "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImKeyImageImagingSelection|0.0.1"]
      }]
    },
    {
      "id" : "Composition.section:impression",
      "path" : "Composition.section",
      "sliceName" : "impression",
      "short" : "Impressions",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Composition.section:impression.extension",
      "path" : "Composition.section.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:impression.extension:note",
      "path" : "Composition.section.extension",
      "sliceName" : "note",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/note|5.2.0"]
      }]
    },
    {
      "id" : "Composition.section:impression.code",
      "path" : "Composition.section.code",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "19005-8",
          "display" : "Radiology Imaging study [Impression] (narrative)"
        }]
      }
    },
    {
      "id" : "Composition.section:impression.entry",
      "path" : "Composition.section.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:impression.entry:finding",
      "path" : "Composition.section.entry",
      "sliceName" : "finding",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImFinding|0.0.1"]
      }]
    },
    {
      "id" : "Composition.section:impression.entry:impression",
      "path" : "Composition.section.entry",
      "sliceName" : "impression",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ConditionEu|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.section:impression.entry:keyimage",
      "path" : "Composition.section.entry",
      "sliceName" : "keyimage",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImKeyImageDocumentReference|0.0.1",
        "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImKeyImageImagingSelection|0.0.1"]
      }]
    },
    {
      "id" : "Composition.section:recommendation",
      "path" : "Composition.section",
      "sliceName" : "recommendation",
      "short" : "Recommendations",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Composition.section:recommendation.extension",
      "path" : "Composition.section.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:recommendation.extension:note",
      "path" : "Composition.section.extension",
      "sliceName" : "note",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/note|5.2.0"]
      }]
    },
    {
      "id" : "Composition.section:recommendation.code",
      "path" : "Composition.section.code",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "18783-1",
          "display" : "Radiology Study recommendation (narrative)"
        }]
      }
    },
    {
      "id" : "Composition.section:recommendation.entry",
      "path" : "Composition.section.entry",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:recommendation.entry:careplan",
      "path" : "Composition.section.entry",
      "sliceName" : "careplan",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/CarePlanEu|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Composition.section:communication",
      "path" : "Composition.section",
      "sliceName" : "communication",
      "short" : "Communications",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Composition.section:communication.extension",
      "path" : "Composition.section.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Composition.section:communication.extension:note",
      "path" : "Composition.section.extension",
      "sliceName" : "note",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/note|5.2.0"]
      }]
    },
    {
      "id" : "Composition.section:communication.code",
      "path" : "Composition.section.code",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "18783-1",
          "display" : "Radiology Study recommendation (narrative)"
        }]
      }
    }]
  }
}

```
