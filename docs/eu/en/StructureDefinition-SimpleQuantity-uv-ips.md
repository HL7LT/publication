# SimpleQuantity (IPS) - HL7 Europe IG Snapshot v0.0.1

## Data Type Profile: SimpleQuantity (IPS) 

 
Data type profile SimpleQuantity constrained to use UCUM as the code system for units 

**Usages:**

* Use this DataType Profile: [Range (IPS)](StructureDefinition-Range-uv-ips.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/SimpleQuantity-uv-ips)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-SimpleQuantity-uv-ips.csv), [Excel](../StructureDefinition-SimpleQuantity-uv-ips.xlsx), [Schematron](../StructureDefinition-SimpleQuantity-uv-ips.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "SimpleQuantity-uv-ips",
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
  "url" : "http://hl7.org/fhir/uv/ips/StructureDefinition/SimpleQuantity-uv-ips",
  "version" : "1.1.0",
  "name" : "SimpleQuantityIPS",
  "title" : "SimpleQuantity (IPS)",
  "status" : "draft",
  "date" : "2026-03-15T17:10:39+02:00",
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
  "description" : "Data type profile SimpleQuantity constrained to use UCUM as the code system for units",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "EU"
    }]
  }],
  "purpose" : "This profile of the SimpleQuantity data type profile imposes the usage of the UCUM code system for units",
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
      "id" : "Quantity",
      "path" : "Quantity",
      "short" : "A measured amount using UCUM",
      "definition" : "A measured amount (or an amount that can potentially be measured). Note that measured amounts include amounts that are not precisely quantified, including amounts involving arbitrary units and floating currencies.\r\nThis profile imposes that the code system for units be UCUM."
    },
    {
      "id" : "Quantity.system",
      "path" : "Quantity.system",
      "short" : "UCUM system for units",
      "min" : 1,
      "fixedUri" : "http://unitsofmeasure.org",
      "mustSupport" : true
    },
    {
      "id" : "Quantity.code",
      "path" : "Quantity.code",
      "min" : 1,
      "mustSupport" : true
    }]
  }
}

```
