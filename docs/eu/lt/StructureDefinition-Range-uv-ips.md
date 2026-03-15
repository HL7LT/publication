# Range (IPS) - HL7 Europe IG Snapshot v0.0.1

## Duomenų tipo profilis: Range (IPS) 

 
Range constrained to UCUM as the code system for units. 

**Usages:**

* Use this DataType Profile: [Observation Results: laboratory (Eu Lab)](StructureDefinition-Observation-resultslab-eu-lab.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/Range-uv-ips)

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

Must-Support: 2 elements

**Structures**

This structure refers to these other structures:

* [SimpleQuantity (IPS) (http://hl7.org/fhir/uv/ips/StructureDefinition/SimpleQuantity-uv-ips|1.1.0)](StructureDefinition-SimpleQuantity-uv-ips.md)

 **Pagrindinių elementų peržiūra** 

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Constraints

** Summary **

Must-Support: 2 elements

**Structures**

This structure refers to these other structures:

* [SimpleQuantity (IPS) (http://hl7.org/fhir/uv/ips/StructureDefinition/SimpleQuantity-uv-ips|1.1.0)](StructureDefinition-SimpleQuantity-uv-ips.md)

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-Range-uv-ips.csv), [Excel](../StructureDefinition-Range-uv-ips.xlsx), [Schematron](../StructureDefinition-Range-uv-ips.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "Range-uv-ips",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-bind"
  }],
  "url" : "http://hl7.org/fhir/uv/ips/StructureDefinition/Range-uv-ips",
  "version" : "1.1.0",
  "name" : "RangeIPS",
  "title" : "Range (IPS)",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-03-15T18:11:06+02:00",
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
  "description" : "Range constrained to UCUM as the code system for units.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "EU"
    }]
  }],
  "purpose" : "Requires UCUM as the code system for units",
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
        "profile" : ["http://hl7.org/fhir/uv/ips/StructureDefinition/SimpleQuantity-uv-ips|1.1.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Range.high",
      "path" : "Range.high",
      "type" : [{
        "code" : "Quantity",
        "profile" : ["http://hl7.org/fhir/uv/ips/StructureDefinition/SimpleQuantity-uv-ips|1.1.0"]
      }],
      "mustSupport" : true
    }]
  }
}

```
