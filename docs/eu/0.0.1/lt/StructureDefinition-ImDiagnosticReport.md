# IM Diagnostic Report - HL7 Europe General Implementation Guide v0.0.1

## Resursų profilis: IM Diagnostic Report 

 
Diagnostic Report profile for Imaging Reports. This document represents the report of an imaging study. It is the anchor resource that refers to all structured data as well as the `Composition` resource that contains the narrative text of the report. 

**Usages:**

* Refer to this Profile: [IM Document DiagnosticReport Reference](StructureDefinition-im-composition-diagnosticReportReference.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/ImDiagnosticReport)

### Profilio turinio formaliosios peržiūros

 [Profilių, skirtumų rinkinių, momentinių kopijų aprašas ir jų reprezentacijos](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Pagrindinių elementų lentelė](#tabs-key) 
*  [Skirtumų rinkinių lentelė](#tabs-diff) 
*  [Momentinės kopijos lentelė](#tabs-snap) 
*  [Statistika/Nuorodos](#tabs-summ) 
*  [Viskas](#tabs-all) 

#### Terminology Bindings

#### Constraints

#### Terminology Bindings (Differential)

#### Terminology Bindings

#### Constraints

** Summary **

Mandatory: 8 elements(1 nested mandatory element)

**Structures**

This structure refers to these other structures:

* [IM Imaging Order (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImOrder|0.1.0-ballot)](StructureDefinition-ImOrder.md)
* [IM Imaging Accession Number Identifier (http://hl7.eu/fhir/imaging-r5/StructureDefinition/im-accession-number-identifier|0.1.0-ballot)](StructureDefinition-im-accession-number-identifier.md)
* [Patient (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-patient-eu.html)
* [PractitionerRole (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitionerRole-eu.html)
* [IM Imaging Study (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingStudy|0.1.0-ballot)](StructureDefinition-ImImagingStudy.md)
* [IM Imaging Procedure (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImProcedure|0.0.1)](StructureDefinition-ImProcedure.md)
* [IM Composition (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImComposition|0.0.1)](StructureDefinition-ImComposition.md)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/artifact-version|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-artifact-version.html)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of DiagnosticReport.basedOn
* The element 1 is sliced based on the value of DiagnosticReport.category
* The element 1 is sliced based on the value of DiagnosticReport.code.coding
* The element 1 is sliced based on the value of DiagnosticReport.performer
* The element 1 is sliced based on the value of DiagnosticReport.resultsInterpreter
* The element 1 is sliced based on the value of DiagnosticReport.supportingInfo

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

#### Terminology Bindings (Differential)

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Mandatory: 8 elements(1 nested mandatory element)

**Structures**

This structure refers to these other structures:

* [IM Imaging Order (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImOrder|0.1.0-ballot)](StructureDefinition-ImOrder.md)
* [IM Imaging Accession Number Identifier (http://hl7.eu/fhir/imaging-r5/StructureDefinition/im-accession-number-identifier|0.1.0-ballot)](StructureDefinition-im-accession-number-identifier.md)
* [Patient (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-patient-eu.html)
* [PractitionerRole (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitionerRole-eu.html)
* [IM Imaging Study (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingStudy|0.1.0-ballot)](StructureDefinition-ImImagingStudy.md)
* [IM Imaging Procedure (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImProcedure|0.0.1)](StructureDefinition-ImProcedure.md)
* [IM Composition (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImComposition|0.0.1)](StructureDefinition-ImComposition.md)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/artifact-version|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-artifact-version.html)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of DiagnosticReport.basedOn
* The element 1 is sliced based on the value of DiagnosticReport.category
* The element 1 is sliced based on the value of DiagnosticReport.code.coding
* The element 1 is sliced based on the value of DiagnosticReport.performer
* The element 1 is sliced based on the value of DiagnosticReport.resultsInterpreter
* The element 1 is sliced based on the value of DiagnosticReport.supportingInfo

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-ImDiagnosticReport.csv), [Excel](../StructureDefinition-ImDiagnosticReport.xlsx), [Schematron](../StructureDefinition-ImDiagnosticReport.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ImDiagnosticReport",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "draft"
  }],
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImDiagnosticReport",
  "version" : "0.1.0-ballot",
  "name" : "ImDiagnosticReport",
  "title" : "IM Diagnostic Report",
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
  "description" : "Diagnostic Report profile for Imaging Reports. This document represents the report of an imaging study. It is the anchor resource that refers to all structured data as well as the `Composition` resource that contains the narrative text of the report.",
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
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 V2 Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DiagnosticReport",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/DiagnosticReport|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "DiagnosticReport",
      "path" : "DiagnosticReport"
    },
    {
      "id" : "DiagnosticReport.extension",
      "path" : "DiagnosticReport.extension",
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
      "id" : "DiagnosticReport.extension:artifactVersion",
      "path" : "DiagnosticReport.extension",
      "sliceName" : "artifactVersion",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/artifact-version|5.2.0"]
      }]
    },
    {
      "id" : "DiagnosticReport.identifier",
      "path" : "DiagnosticReport.identifier",
      "short" : "Report identifier",
      "definition" : "Identifiers assigned to this Imaging Report by the performer or other systems. It shall be common to several report versions",
      "comment" : "Composition.identifier SHALL be equal to one of the DiagnosticReport.identifier, if at least one exists"
    },
    {
      "id" : "DiagnosticReport.basedOn",
      "path" : "DiagnosticReport.basedOn",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "DiagnosticReport.basedOn:imorderaccession",
      "path" : "DiagnosticReport.basedOn",
      "sliceName" : "imorderaccession",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImOrder|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.basedOn:imorderaccession.identifier",
      "path" : "DiagnosticReport.basedOn.identifier",
      "min" : 1,
      "type" : [{
        "code" : "Identifier",
        "profile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/im-accession-number-identifier|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.status",
      "path" : "DiagnosticReport.status",
      "short" : "Status of the Report",
      "comment" : "DiagnosticReport.status and Composition.status shall be aligned"
    },
    {
      "id" : "DiagnosticReport.category",
      "path" : "DiagnosticReport.category",
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
      "id" : "DiagnosticReport.category:imaging",
      "path" : "DiagnosticReport.category",
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
      "id" : "DiagnosticReport.category:imaging.coding",
      "path" : "DiagnosticReport.category.coding",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "DiagnosticReport.code.coding",
      "path" : "DiagnosticReport.code.coding",
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
      "id" : "DiagnosticReport.code.coding:eu-template",
      "path" : "DiagnosticReport.code.coding",
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
      "id" : "DiagnosticReport.subject",
      "path" : "DiagnosticReport.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0"]
      }]
    },
    {
      "id" : "DiagnosticReport.performer",
      "path" : "DiagnosticReport.performer",
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
      "id" : "DiagnosticReport.performer:author",
      "path" : "DiagnosticReport.performer",
      "sliceName" : "author",
      "min" : 1,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0"]
      }]
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter",
      "path" : "DiagnosticReport.resultsInterpreter",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "resolve()"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter:author",
      "path" : "DiagnosticReport.resultsInterpreter",
      "sliceName" : "author",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0"]
      }]
    },
    {
      "id" : "DiagnosticReport.study",
      "path" : "DiagnosticReport.study",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingStudy|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DiagnosticReport.supportingInfo",
      "path" : "DiagnosticReport.supportingInfo",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "reference"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "DiagnosticReport.supportingInfo.type",
      "path" : "DiagnosticReport.supportingInfo.type",
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://hl7.eu/fhir/imaging-r5/ValueSet/valueset-diagnosticreport-report-support-info"
      }
    },
    {
      "id" : "DiagnosticReport.supportingInfo:procedure",
      "path" : "DiagnosticReport.supportingInfo",
      "sliceName" : "procedure",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "DiagnosticReport.supportingInfo:procedure.type",
      "path" : "DiagnosticReport.supportingInfo.type",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.eu/fhir/imaging-r5/CodeSystem/codesystem-diagnostic-report-support-info",
          "code" : "imaging-procedure"
        }]
      }
    },
    {
      "id" : "DiagnosticReport.supportingInfo:procedure.reference",
      "path" : "DiagnosticReport.supportingInfo.reference",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImProcedure|0.0.1"]
      }]
    },
    {
      "id" : "DiagnosticReport.composition",
      "path" : "DiagnosticReport.composition",
      "short" : "Imaging Diagnostic Report",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImComposition|0.0.1"]
      }]
    }]
  }
}

```
