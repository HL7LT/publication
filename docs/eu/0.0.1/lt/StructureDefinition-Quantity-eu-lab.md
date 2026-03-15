# Quantity (Eu Lab) - HL7 Europe IG Snapshot v0.0.1

## Duomenų tipo profilis: Quantity (Eu Lab) 

 
This profile constrains the Quantity data type to use UCUM as the code system for units and optionally share measurement uncertainty 

**Usages:**

* Use this DataType Profile: [Observation Results: laboratory (Eu Lab)](StructureDefinition-Observation-resultslab-eu-lab.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/Quantity-eu-lab)

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

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/iso21090-uncertainty|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-iso21090-uncertainty.html)
* [http://hl7.org/fhir/StructureDefinition/iso21090-uncertaintyType|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-iso21090-uncertaintyType.html)

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/iso21090-uncertainty|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-iso21090-uncertainty.html)
* [http://hl7.org/fhir/StructureDefinition/iso21090-uncertaintyType|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-iso21090-uncertaintyType.html)

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-Quantity-eu-lab.csv), [Excel](../StructureDefinition-Quantity-eu-lab.xlsx), [Schematron](../StructureDefinition-Quantity-eu-lab.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "Quantity-eu-lab",
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
  }],
  "url" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab",
  "version" : "0.0.1",
  "name" : "QuantityEuLab",
  "title" : "Quantity (Eu Lab)",
  "status" : "draft",
  "date" : "2026-03-15T18:07:36+02:00",
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
  "description" : "This profile constrains the Quantity data type to use UCUM as the code system for units and optionally share measurement uncertainty",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "EU"
    }]
  }],
  "purpose" : "This profile of the Quantity data type imposes the usage of the UCUM as the code system for units and allows expressing uncertainty of measurement",
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
  "baseDefinition" : "http://hl7.org/fhir/uv/ips/StructureDefinition/Quantity-uv-ips|1.1.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Quantity",
      "path" : "Quantity",
      "definition" : "A measured amount (or an amount that can potentially be measured) and uncertainty of the measurement. Note that measured amounts include amounts that are not precisely quantified, including amounts involving arbitrary units and floating currencies.\r\nThis profile imposes that the code system for units be UCUM."
    },
    {
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
