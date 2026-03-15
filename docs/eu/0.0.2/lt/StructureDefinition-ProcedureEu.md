# EU Procedure - HL7 Europe IG Snapshot v0.0.2

## Resursų profilis: EU Procedure 

 
A procedure profile for the EU. 

**Usages:**

* Derived from this Profile: [IM Imaging Procedure](StructureDefinition-ImProcedure.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/ProcedureEu)

### Profilio turinio formaliosios peržiūros

 [Profilių, skirtumų rinkinių, momentinių kopijų aprašas ir jų reprezentacijos](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Pagrindinių elementų lentelė](#tabs-key) 
*  [Skirtumų rinkinių lentelė](#tabs-diff) 
*  [Momentinės kopijos lentelė](#tabs-snap) 
*  [Statistika/Nuorodos](#tabs-summ) 
*  [Viskas](#tabs-all) 

#### Terminology Bindings

#### Constraints

#### Terminology Bindings

#### Constraints

** Summary **

**Structures**

This structure refers to these other structures:

* [Patient (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-patient-eu.html)
* [Device (http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/bodySite|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-bodySite.html)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Procedure.used

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

**Structures**

This structure refers to these other structures:

* [Patient (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-patient-eu.html)
* [Device (http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/bodySite|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-bodySite.html)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Procedure.used

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-ProcedureEu.csv), [Excel](../StructureDefinition-ProcedureEu.xlsx), [Schematron](../StructureDefinition-ProcedureEu.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ProcedureEu",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "draft"
  }],
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ProcedureEu",
  "version" : "0.1.0-ballot",
  "name" : "ProcedureEu",
  "title" : "EU Procedure",
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
  "description" : "A procedure profile for the EU.",
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
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 V2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Procedure",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Procedure|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Procedure",
      "path" : "Procedure"
    },
    {
      "id" : "Procedure.subject",
      "path" : "Procedure.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0"]
      }]
    },
    {
      "id" : "Procedure.bodySite.extension:bodyStructure",
      "path" : "Procedure.bodySite.extension",
      "sliceName" : "bodyStructure",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/bodySite|5.2.0"]
      }]
    },
    {
      "id" : "Procedure.used",
      "path" : "Procedure.used",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "concept"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Procedure.used:device",
      "path" : "Procedure.used",
      "sliceName" : "device",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableReference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Device|5.0.0"]
      }]
    }]
  }
}

```
