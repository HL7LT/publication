# IM Finding - HL7 Europe IG Snapshot v0.0.1

## Resursų profilis: IM Finding 

 
Finding during imaging procedure. 

**Usages:**

* Refer to this Profile: [IM Composition](StructureDefinition-ImComposition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/ImFinding)

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

Mandatory: 0 element(2 nested mandatory elements)

**Structures**

This structure refers to these other structures:

* [IM Imaging Order (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImOrder|0.1.0-ballot)](StructureDefinition-ImOrder.md)
* [IM Imaging Accession Number Identifier (http://hl7.eu/fhir/imaging-r5/StructureDefinition/im-accession-number-identifier|0.1.0-ballot)](StructureDefinition-im-accession-number-identifier.md)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Observation.identifier
* The element 1 is sliced based on the value of Observation.basedOn

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Mandatory: 0 element(2 nested mandatory elements)

**Structures**

This structure refers to these other structures:

* [IM Imaging Order (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImOrder|0.1.0-ballot)](StructureDefinition-ImOrder.md)
* [IM Imaging Accession Number Identifier (http://hl7.eu/fhir/imaging-r5/StructureDefinition/im-accession-number-identifier|0.1.0-ballot)](StructureDefinition-im-accession-number-identifier.md)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Observation.identifier
* The element 1 is sliced based on the value of Observation.basedOn

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-ImFinding.csv), [Excel](../StructureDefinition-ImFinding.xlsx), [Schematron](../StructureDefinition-ImFinding.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ImFinding",
  "language" : "en",
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImFinding",
  "version" : "0.0.1",
  "name" : "ImFinding",
  "title" : "IM Finding",
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
  "description" : "Finding during imaging procedure.",
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
  "baseDefinition" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ObservationEu|0.1.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Observation",
      "path" : "Observation"
    },
    {
      "id" : "Observation.identifier",
      "path" : "Observation.identifier",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "type"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Observation.identifier:observationUid",
      "path" : "Observation.identifier",
      "sliceName" : "observationUid",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Observation.identifier:observationUid.type",
      "path" : "Observation.identifier.type",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.eu/fhir/imaging-r5/CodeSystem/codesystem-missing-dicom-terminology",
          "code" : "00080018",
          "display" : "SOP Instance UID"
        }]
      }
    },
    {
      "id" : "Observation.basedOn",
      "path" : "Observation.basedOn",
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
      "id" : "Observation.basedOn:imorderaccession",
      "path" : "Observation.basedOn",
      "sliceName" : "imorderaccession",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImOrder|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.basedOn:imorderaccession.identifier",
      "path" : "Observation.basedOn.identifier",
      "min" : 1,
      "type" : [{
        "code" : "Identifier",
        "profile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/im-accession-number-identifier|0.1.0-ballot"]
      }]
    }]
  }
}

```
