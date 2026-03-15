# EU SimpleQuantity - HL7 Europe General Implementation Guide v0.0.1

## Duomenų tipo profilis: EU SimpleQuantity 

 
A simple quantity profile for the EU. 

**Usages:**

* Use this DataType Profile: [EU Range](StructureDefinition-range-eu.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/SimpleQuantityEu)

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

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/iso21090-uncertainty|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-iso21090-uncertainty.html)
* [http://hl7.org/fhir/StructureDefinition/iso21090-uncertaintyType|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-iso21090-uncertaintyType.html)

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 **Pagrindinių elementų peržiūra** 

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Constraints

** Summary **

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/iso21090-uncertainty|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-iso21090-uncertainty.html)
* [http://hl7.org/fhir/StructureDefinition/iso21090-uncertaintyType|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-iso21090-uncertaintyType.html)

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-SimpleQuantityEu.csv), [Excel](../StructureDefinition-SimpleQuantityEu.xlsx), [Schematron](../StructureDefinition-SimpleQuantityEu.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "SimpleQuantityEu",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "has-range"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "is-continuous"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-bind"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "has-units"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "draft"
  }],
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/SimpleQuantityEu",
  "version" : "0.1.0-ballot",
  "name" : "SimpleQuantityEu",
  "title" : "EU SimpleQuantity",
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
  "description" : "A simple quantity profile for the EU.",
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
  "type" : "Quantity",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/SimpleQuantity|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Quantity.extension:uncertainty",
      "path" : "Quantity.extension",
      "sliceName" : "uncertainty",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/iso21090-uncertainty|5.2.0"]
      }]
    },
    {
      "id" : "Quantity.extension:uncertaintyType",
      "path" : "Quantity.extension",
      "sliceName" : "uncertaintyType",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/iso21090-uncertaintyType|5.2.0"]
      }]
    }]
  }
}

```
