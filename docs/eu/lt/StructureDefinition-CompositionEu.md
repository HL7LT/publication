# EU Composition - HL7 Europe IG Snapshot v0.0.1

## Resursų profilis: EU Composition 

 
Clinical document used to represent a report for the scope of the HL7 Europe project. 

**Usages:**

* Derived from this Profile: [IM Composition](StructureDefinition-ImComposition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/CompositionEu)

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

Mandatory: 1 element

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/event-basedOn|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-event-basedOn.html)
* [http://hl7.eu/fhir/StructureDefinition/information-recipient|0.1.1](http://hl7.eu/fhir/extensions/0.1.1/StructureDefinition-information-recipient.html)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Composition.category

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Mandatory: 1 element

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/event-basedOn|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-event-basedOn.html)
* [http://hl7.eu/fhir/StructureDefinition/information-recipient|0.1.1](http://hl7.eu/fhir/extensions/0.1.1/StructureDefinition-information-recipient.html)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Composition.category

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-CompositionEu.csv), [Excel](../StructureDefinition-CompositionEu.xlsx), [Schematron](../StructureDefinition-CompositionEu.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "CompositionEu",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "draft"
  }],
  "url" : "https://hl7.lt/fhir/eu/StructureDefinition/CompositionEu",
  "version" : "0.1.0-ballot",
  "name" : "CompositionEu",
  "title" : "EU Composition",
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
  "description" : "Clinical document used to represent a report for the scope of the HL7 Europe project.",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/clinicaldocument|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Composition",
      "path" : "Composition"
    },
    {
      "id" : "Composition.extension",
      "path" : "Composition.extension",
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
      "id" : "Composition.extension:basedOn",
      "path" : "Composition.extension",
      "sliceName" : "basedOn",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/event-basedOn|5.2.0"]
      }]
    },
    {
      "id" : "Composition.extension:informationRecipient",
      "path" : "Composition.extension",
      "sliceName" : "informationRecipient",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.eu/fhir/StructureDefinition/information-recipient|0.1.1"]
      }]
    },
    {
      "id" : "Composition.url",
      "path" : "Composition.url",
      "patternUri" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/CompositionEu"
    },
    {
      "id" : "Composition.identifier",
      "path" : "Composition.identifier",
      "short" : "Report identifier",
      "definition" : "Identifiers assigned to this report by the performer or other systems. It shall be common to several report versions",
      "comment" : "Composition.identifier SHALL be equal to one of the DiagnosticReport.identifier, if at least one exists"
    },
    {
      "id" : "Composition.category",
      "path" : "Composition.category",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    }]
  }
}

```
