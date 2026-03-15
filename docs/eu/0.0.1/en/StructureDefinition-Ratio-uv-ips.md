# Ratio (IPS) - HL7 Europe IG Snapshot v0.0.1

## Data Type Profile: Ratio (IPS) 

 
Ratio data type, constrained to use UCUM as the code system for units. 

**Usages:**

* Derived from this DataType Profile: [Ratio (Eu Lab)](StructureDefinition-Ratio-eu-lab.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/Ratio-uv-ips)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-Ratio-uv-ips.csv), [Excel](../StructureDefinition-Ratio-uv-ips.xlsx), [Schematron](../StructureDefinition-Ratio-uv-ips.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "Ratio-uv-ips",
  "language" : "en",
  "url" : "http://hl7.org/fhir/uv/ips/StructureDefinition/Ratio-uv-ips",
  "version" : "1.1.0",
  "name" : "RatioIPS",
  "title" : "Ratio (IPS)",
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
  "description" : "Ratio data type, constrained to use UCUM as the code system for units.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "EU"
    }]
  }],
  "purpose" : "Allow only UCUM as the code system for units.",
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
  "type" : "Ratio",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Ratio|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Ratio",
      "path" : "Ratio"
    }]
  }
}

```
