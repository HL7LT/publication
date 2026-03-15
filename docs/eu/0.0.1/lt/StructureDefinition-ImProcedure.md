# IM Imaging Procedure - HL7 Europe General Implementation Guide v0.0.1

## Resursų profilis: IM Imaging Procedure 

 
This profile on Procedure represents the imaging procedure. 

**Usages:**

* Refer to this Profile: [IM Composition](StructureDefinition-ImComposition.md) and [IM Diagnostic Report](StructureDefinition-ImDiagnosticReport.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/ImProcedure)

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

Mandatory: 1 element(1 nested mandatory element)

**Structures**

This structure refers to these other structures:

* [PractitionerRole (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitionerRole-eu.html)
* [IM Imaging Device (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingDevice|0.1.0-ballot)](StructureDefinition-ImImagingDevice.md)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Procedure.performer
* The element 1 is sliced based on the value of Procedure.performer.function.coding

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

#### Terminology Bindings (Differential)

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Mandatory: 1 element(1 nested mandatory element)

**Structures**

This structure refers to these other structures:

* [PractitionerRole (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitionerRole-eu.html)
* [IM Imaging Device (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingDevice|0.1.0-ballot)](StructureDefinition-ImImagingDevice.md)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Procedure.performer
* The element 1 is sliced based on the value of Procedure.performer.function.coding

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-ImProcedure.csv), [Excel](../StructureDefinition-ImProcedure.xlsx), [Schematron](../StructureDefinition-ImProcedure.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ImProcedure",
  "language" : "en",
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImProcedure",
  "version" : "0.0.1",
  "name" : "ImProcedure",
  "title" : "IM Imaging Procedure",
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
  "description" : "This profile on Procedure represents the imaging procedure.",
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
  "baseDefinition" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ProcedureEu|0.1.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Procedure",
      "path" : "Procedure"
    },
    {
      "id" : "Procedure.code",
      "path" : "Procedure.code",
      "min" : 1,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://hl7.eu/fhir/imaging-r5/ValueSet/im-procedure-type"
      }
    },
    {
      "id" : "Procedure.performer",
      "path" : "Procedure.performer",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "function"
        }],
        "description" : "Different performers can be added to the procedure.",
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Procedure.performer.function",
      "path" : "Procedure.performer.function",
      "min" : 1
    },
    {
      "id" : "Procedure.performer:performer",
      "path" : "Procedure.performer",
      "sliceName" : "performer",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Procedure.performer:performer.function.coding",
      "path" : "Procedure.performer.function.coding",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "\"\"$this\"\""
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Procedure.performer:performer.function.coding:healthcare-professional",
      "path" : "Procedure.performer.function.coding",
      "sliceName" : "healthcare-professional",
      "min" : 0,
      "max" : "1",
      "patternCoding" : {
        "system" : "http://snomed.info/sct",
        "code" : "223366009",
        "display" : "Healthcare professional"
      }
    },
    {
      "id" : "Procedure.performer:performer.actor",
      "path" : "Procedure.performer.actor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0"]
      }]
    },
    {
      "id" : "Procedure.performer:imaging-device",
      "path" : "Procedure.performer",
      "sliceName" : "imaging-device",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Procedure.performer:imaging-device.function.coding",
      "path" : "Procedure.performer.function.coding",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "\"\"$this\"\""
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Procedure.performer:imaging-device.function.coding:imaging-equipment",
      "path" : "Procedure.performer.function.coding",
      "sliceName" : "imaging-equipment",
      "min" : 0,
      "max" : "1",
      "patternCoding" : {
        "system" : "http://snomed.info/sct",
        "code" : "314789007",
        "display" : "Diagnostic imaging equipment"
      }
    },
    {
      "id" : "Procedure.performer:imaging-device.actor",
      "path" : "Procedure.performer.actor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingDevice|0.1.0-ballot"]
      }]
    }]
  }
}

```
