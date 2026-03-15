# EU Observation - HL7 Europe IG Snapshot v0.0.2

## Resursų profilis: EU Observation 

 
A observation profile for the EU. 

**Usages:**

* Derived from this Profile: [IM Finding](StructureDefinition-ImFinding.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/ObservationEu)

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

Mandatory: 1 element(1 nested mandatory element)

**Structures**

This structure refers to these other structures:

* [EU Quantity (http://hl7.eu/fhir/imaging-r5/StructureDefinition/quantity-eu|0.1.0-ballot)](StructureDefinition-quantity-eu.md)
* [EU Range (http://hl7.eu/fhir/imaging-r5/StructureDefinition/range-eu|0.1.0-ballot)](StructureDefinition-range-eu.md)
* [MolecularSequence (http://hl7.org/fhir/StructureDefinition/MolecularSequence|5.0.0)](http://hl7.org/fhir/R5/molecularsequence.html)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/event-performerFunction|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-event-performerFunction.html)
* [http://hl7.org/fhir/StructureDefinition/data-absent-reason|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-data-absent-reason.html)

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Mandatory: 1 element(1 nested mandatory element)

**Structures**

This structure refers to these other structures:

* [EU Quantity (http://hl7.eu/fhir/imaging-r5/StructureDefinition/quantity-eu|0.1.0-ballot)](StructureDefinition-quantity-eu.md)
* [EU Range (http://hl7.eu/fhir/imaging-r5/StructureDefinition/range-eu|0.1.0-ballot)](StructureDefinition-range-eu.md)
* [MolecularSequence (http://hl7.org/fhir/StructureDefinition/MolecularSequence|5.0.0)](http://hl7.org/fhir/R5/molecularsequence.html)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/event-performerFunction|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-event-performerFunction.html)
* [http://hl7.org/fhir/StructureDefinition/data-absent-reason|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-data-absent-reason.html)

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-ObservationEu.csv), [Excel](../StructureDefinition-ObservationEu.xlsx), [Schematron](../StructureDefinition-ObservationEu.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ObservationEu",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "draft"
  }],
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ObservationEu",
  "version" : "0.1.0-ballot",
  "name" : "ObservationEu",
  "title" : "EU Observation",
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
  "description" : "A observation profile for the EU.",
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
    "identity" : "sct-concept",
    "uri" : "http://snomed.info/conceptdomain",
    "name" : "SNOMED CT Concept Domain Binding"
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
  },
  {
    "identity" : "sct-attr",
    "uri" : "http://snomed.org/attributebinding",
    "name" : "SNOMED CT Attribute Binding"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Observation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Observation|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Observation",
      "path" : "Observation"
    },
    {
      "id" : "Observation.effective[x]",
      "path" : "Observation.effective[x]",
      "min" : 1
    },
    {
      "id" : "Observation.performer.extension:performerFunction",
      "path" : "Observation.performer.extension",
      "sliceName" : "performerFunction",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/event-performerFunction|5.2.0"]
      }]
    },
    {
      "id" : "Observation.value[x]",
      "path" : "Observation.value[x]",
      "type" : [{
        "code" : "Quantity",
        "profile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/quantity-eu|0.1.0-ballot"]
      },
      {
        "code" : "CodeableConcept"
      },
      {
        "code" : "string"
      },
      {
        "code" : "boolean"
      },
      {
        "code" : "integer"
      },
      {
        "code" : "Range",
        "profile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/range-eu|0.1.0-ballot"]
      },
      {
        "code" : "Ratio"
      },
      {
        "code" : "SampledData"
      },
      {
        "code" : "time"
      },
      {
        "code" : "dateTime"
      },
      {
        "code" : "Period"
      },
      {
        "code" : "Attachment"
      },
      {
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/MolecularSequence|5.0.0"]
      }]
    },
    {
      "id" : "Observation.value[x].extension:dataAbsentReason",
      "path" : "Observation.value[x].extension",
      "sliceName" : "dataAbsentReason",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/data-absent-reason|5.2.0"]
      }]
    },
    {
      "id" : "Observation.component.value[x]",
      "path" : "Observation.component.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "Quantity",
        "profile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/quantity-eu|0.1.0-ballot"]
      },
      {
        "code" : "CodeableConcept"
      },
      {
        "code" : "string"
      },
      {
        "code" : "boolean"
      },
      {
        "code" : "integer"
      },
      {
        "code" : "Range",
        "profile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/range-eu|0.1.0-ballot"]
      },
      {
        "code" : "Ratio"
      },
      {
        "code" : "SampledData"
      },
      {
        "code" : "time"
      },
      {
        "code" : "dateTime"
      },
      {
        "code" : "Period"
      },
      {
        "code" : "Attachment"
      },
      {
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/MolecularSequence|5.0.0"]
      }]
    },
    {
      "id" : "Observation.component.value[x].extension:dataAbsentReason",
      "path" : "Observation.component.value[x].extension",
      "sliceName" : "dataAbsentReason",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/data-absent-reason|5.2.0"]
      }]
    }]
  }
}

```
