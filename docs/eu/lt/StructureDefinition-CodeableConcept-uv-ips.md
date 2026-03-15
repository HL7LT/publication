# Codeable Concept (IPS) - HL7 Europe IG Snapshot v0.0.1

## Duomenų tipo profilis: Codeable Concept (IPS) 

 
This profile represents the constraint applied to the CodeableConcept data type by the International Patient Summary (IPS) FHIR Implementation Guide to use the Coding-uv-ips data type profile. 

**Usages:**

* Use this DataType Profile: [Composition: Laboratory Report (Eu Lab)](StructureDefinition-Composition-eu-lab.md), [DiagnosticReport: Laboratory Report (Eu Lab)](StructureDefinition-DiagnosticReport-eu-lab.md) and [Observation Results: laboratory (Eu Lab)](StructureDefinition-Observation-resultslab-eu-lab.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/CodeableConcept-uv-ips)

### Profilio turinio formaliosios peržiūros

 [Profilių, skirtumų rinkinių, momentinių kopijų aprašas ir jų reprezentacijos](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Pagrindinių elementų lentelė](#tabs-key) 
*  [Skirtumų rinkinių lentelė](#tabs-diff) 
*  [Momentinės kopijos lentelė](#tabs-snap) 
*  [Įsipareigojimai](#tabs-obligations) 
*  [Statistika/Nuorodos](#tabs-summ) 
*  [Viskas](#tabs-all) 

#### Constraints

#### Constraints

** Summary **

Must-Support: 2 elements

**Structures**

This structure refers to these other structures:

* [Coding with translations (IPS) (http://hl7.org/fhir/uv/ips/StructureDefinition/Coding-uv-ips|2.0.0)](StructureDefinition-Coding-uv-ips.md)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/translation|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-translation.html)

 **Pagrindinių elementų peržiūra** 

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Constraints

** Summary **

Must-Support: 2 elements

**Structures**

This structure refers to these other structures:

* [Coding with translations (IPS) (http://hl7.org/fhir/uv/ips/StructureDefinition/Coding-uv-ips|2.0.0)](StructureDefinition-Coding-uv-ips.md)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/translation|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-translation.html)

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-CodeableConcept-uv-ips.csv), [Excel](../StructureDefinition-CodeableConcept-uv-ips.xlsx), [Schematron](../StructureDefinition-CodeableConcept-uv-ips.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "CodeableConcept-uv-ips",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-bind"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "do-translations"
  }],
  "url" : "http://hl7.org/fhir/uv/ips/StructureDefinition/CodeableConcept-uv-ips",
  "version" : "2.0.0",
  "name" : "CodeableConceptIPS",
  "title" : "Codeable Concept (IPS)",
  "status" : "draft",
  "date" : "2024-06-19T10:50:07-05:00",
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
  "description" : "This profile represents the constraint applied to the CodeableConcept data type by the International Patient Summary (IPS) FHIR Implementation Guide to use the Coding-uv-ips data type profile.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "EU"
    }]
  }],
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
  },
  {
    "identity" : "orim",
    "uri" : "http://hl7.org/orim",
    "name" : "Ontological RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "CodeableConcept",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/CodeableConcept|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "CodeableConcept",
      "path" : "CodeableConcept"
    },
    {
      "id" : "CodeableConcept.coding",
      "extension" : [{
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:populate-if-known"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Creator"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      },
      {
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:handle"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Consumer"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      }],
      "path" : "CodeableConcept.coding",
      "type" : [{
        "code" : "Coding",
        "profile" : ["http://hl7.org/fhir/uv/ips/StructureDefinition/Coding-uv-ips|2.0.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "CodeableConcept.text",
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-translatable",
        "valueBoolean" : true
      },
      {
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:populate-if-known"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Creator"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation",
        "valueBoolean" : true
      },
      {
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:handle"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Consumer"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      },
      {
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHOULD:display"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://hl7.org/fhir/uv/ips/ActorDefinition/Consumer"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      }],
      "path" : "CodeableConcept.text",
      "mustSupport" : true
    },
    {
      "id" : "CodeableConcept.text.extension",
      "path" : "CodeableConcept.text.extension",
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
      "id" : "CodeableConcept.text.extension:translation",
      "path" : "CodeableConcept.text.extension",
      "sliceName" : "translation",
      "short" : "Language Translation (Localization)",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/translation|5.2.0"]
      }]
    }]
  }
}

```
