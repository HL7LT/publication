# Ratio (Eu Lab) - HL7 Europe IG Snapshot v0.0.2

## Duomenų tipo profilis: Ratio (Eu Lab) 

 
This profile constrains the Ratio data type to use UCUM as the code system for units and optionally share measurement uncertainty 

**Usages:**

* Use this DataType Profile: [Observation Results: laboratory (Eu Lab)](StructureDefinition-Observation-resultslab-eu-lab.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/Ratio-eu-lab)

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

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-Ratio-eu-lab.csv), [Excel](../StructureDefinition-Ratio-eu-lab.xlsx), [Schematron](../StructureDefinition-Ratio-eu-lab.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "Ratio-eu-lab",
  "language" : "en",
  "url" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Ratio-eu-lab",
  "version" : "0.0.2",
  "name" : "RatioEuLab",
  "title" : "Ratio (Eu Lab)",
  "status" : "draft",
  "date" : "2026-03-15T21:19:00+02:00",
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
  "description" : "This profile constrains the Ratio data type to use UCUM as the code system for units and optionally share measurement uncertainty",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "EU"
    }]
  }],
  "purpose" : "This profile of the Ratio data type imposes the usage of the UCUM as the code system for units and allows expressing uncertainty of measurement",
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
  "type" : "Ratio",
  "baseDefinition" : "http://hl7.org/fhir/uv/ips/StructureDefinition/Ratio-uv-ips|1.1.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Ratio",
      "path" : "Ratio",
      "short" : "A measured ratio using UCUM",
      "definition" : "A measured ratio (or a ratio that can potentially be measured) and uncertainty of the measurement. This profile imposes that the code system for units be UCUM."
    },
    {
      "id" : "Ratio.extension:uncertainty",
      "path" : "Ratio.extension",
      "sliceName" : "uncertainty",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/iso21090-uncertainty|5.2.0"]
      }]
    },
    {
      "id" : "Ratio.extension:uncertaintyType",
      "path" : "Ratio.extension",
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
