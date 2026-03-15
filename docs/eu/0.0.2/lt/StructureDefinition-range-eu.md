# EU Range - HL7 Europe IG Snapshot v0.0.2

## Duomenų tipo profilis: EU Range 

 
A range profile for the EU. 

**Usages:**

* Use this DataType Profile: [EU Observation](StructureDefinition-ObservationEu.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/range-eu)

### Profilio turinio formaliosios peržiūros

 [Profilių, skirtumų rinkinių, momentinių kopijų aprašas ir jų reprezentacijos](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Pagrindinių elementų lentelė](#tabs-key) 
*  [Skirtumų rinkinių lentelė](#tabs-diff) 
*  [Momentinės kopijos lentelė](#tabs-snap) 
*  [Statistika/Nuorodos](#tabs-summ) 
*  [Viskas](#tabs-all) 

#### Constraints

#### Constraints

** Summary **

**Structures**

This structure refers to these other structures:

* [EU SimpleQuantity (http://hl7.eu/fhir/imaging-r5/StructureDefinition/SimpleQuantityEu|0.1.0-ballot)](StructureDefinition-SimpleQuantityEu.md)

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 **Pagrindinių elementų peržiūra** 

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Constraints

** Summary **

**Structures**

This structure refers to these other structures:

* [EU SimpleQuantity (http://hl7.eu/fhir/imaging-r5/StructureDefinition/SimpleQuantityEu|0.1.0-ballot)](StructureDefinition-SimpleQuantityEu.md)

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-range-eu.csv), [Excel](../StructureDefinition-range-eu.xlsx), [Schematron](../StructureDefinition-range-eu.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "range-eu",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-bind"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "draft"
  }],
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/range-eu",
  "version" : "0.1.0-ballot",
  "name" : "RangeEu",
  "title" : "EU Range",
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
  "description" : "A range profile for the EU.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "EU"
    }]
  }],
  "copyright" : "Used by permission of HL7 Europe, all rights reserved Creative Commons License",
  "fhirVersion" : "5.0.0",
  "mapping" : [{
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 V2 Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Range",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Range|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Range.low",
      "path" : "Range.low",
      "type" : [{
        "code" : "Quantity",
        "profile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/SimpleQuantityEu|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Range.high",
      "path" : "Range.high",
      "type" : [{
        "code" : "Quantity",
        "profile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/SimpleQuantityEu|0.1.0-ballot"]
      }]
    }]
  }
}

```
