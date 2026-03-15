# Range (IPS) - HL7 Europe General Implementation Guide v0.0.1

## Data Type Profile: Range (IPS) 

 
Range constrained to UCUM as the code system for units. 

**Usages:**

* Use this DataType Profile: [Observation Results: laboratory (Eu Lab)](StructureDefinition-Observation-resultslab-eu-lab.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/Range-uv-ips)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-Range-uv-ips.csv), [Excel](../StructureDefinition-Range-uv-ips.xlsx), [Schematron](../StructureDefinition-Range-uv-ips.sch) 



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
  "date" : "2026-03-15T14:53:25+02:00",
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
