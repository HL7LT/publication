# Extension: Document DiagnosticReport Reference (Eu Lab) - HL7 Europe IG Snapshot v0.0.1

## Pratęsimas: Extension: Document DiagnosticReport Reference (Eu Lab) 

This extension provides a reference to the DiagnosticReport instance that is associated with this Composition.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [Composition: Laboratory Report (Eu Lab)](StructureDefinition-Composition-eu-lab.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/composition-diagnosticReportReference)

### Išplėtimų turinio formaliosios peržiūros

 [Profilių, skirtumų rinkinių, momentinių kopijų aprašas ir jų reprezentacijos](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Skirtumų rinkinių lentelė](#tabs-diff) 
*  [Momentinės kopijos lentelė](#tabs-snap) 
*  [Statistika/Nuorodos](#tabs-summ) 
*  [Viskas](#tabs-all) 

#### Constraints

** Summary **

Simple Extension with the type Reference: This extension provides a reference to the DiagnosticReport instance that is associated with this Composition.

 **Skirtumų rinkinių peržiūraDifferential View** 

 **Momentinės kopijos peržiūra** 

#### Constraints

** Summary **

Simple Extension with the type Reference: This extension provides a reference to the DiagnosticReport instance that is associated with this Composition.

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-composition-diagnosticReportReference.csv), [Excel](../StructureDefinition-composition-diagnosticReportReference.xlsx), [Schematron](../StructureDefinition-composition-diagnosticReportReference.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "composition-diagnosticReportReference",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-bind"
  }],
  "url" : "http://hl7.eu/fhir/laboratory/StructureDefinition/composition-diagnosticReportReference",
  "version" : "0.2.0-ci",
  "name" : "DiagnosticReportReference",
  "title" : "Extension: Document DiagnosticReport Reference (Eu Lab)",
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
  "description" : "This extension provides a reference to the DiagnosticReport instance that is associated with this Composition.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "EU"
    }]
  }],
  "copyright" : "Used by permission of HL7 Europe, all rights reserved Creative Commons License",
  "fhirVersion" : "5.0.0",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "Composition"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Document DiagnosticReport Reference",
      "definition" : "This extension provides a reference to the DiagnosticReport instance that is associated with this Composition."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.eu/fhir/laboratory/StructureDefinition/composition-diagnosticReportReference"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/DiagnosticReport|5.0.0"]
      }]
    }]
  }
}

```
