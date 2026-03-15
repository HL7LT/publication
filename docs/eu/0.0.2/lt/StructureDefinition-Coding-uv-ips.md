# Coding with translations (IPS) - HL7 Europe IG Snapshot v0.0.2

## Duomenų tipo profilis: Coding with translations (IPS) 

 
This profile extends the capabilities of the coding data type to support multi-language designations (display). It relies on the Translation extension. 

**Usages:**

* Use this DataType Profile: [Codeable Concept (IPS)](StructureDefinition-CodeableConcept-uv-ips.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/Coding-uv-ips)

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

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/translation|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-translation.html)

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-Coding-uv-ips.csv), [Excel](../StructureDefinition-Coding-uv-ips.xlsx), [Schematron](../StructureDefinition-Coding-uv-ips.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "Coding-uv-ips",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-bind"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "do-translations"
  }],
  "url" : "http://hl7.org/fhir/uv/ips/StructureDefinition/Coding-uv-ips",
  "version" : "2.0.0",
  "name" : "CodingIPS",
  "title" : "Coding with translations (IPS)",
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
  "description" : "This profile extends the capabilities of the coding data type to support multi-language designations (display).\nIt relies on the Translation extension.",
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
  "type" : "Coding",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Coding|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Coding.system",
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
      "path" : "Coding.system",
      "mustSupport" : true
    },
    {
      "id" : "Coding.code",
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
      "path" : "Coding.code",
      "mustSupport" : true
    },
    {
      "id" : "Coding.display",
      "path" : "Coding.display",
      "short" : "Text representation defined by the system"
    },
    {
      "id" : "Coding.display.extension",
      "path" : "Coding.display.extension",
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
      "id" : "Coding.display.extension:translation",
      "path" : "Coding.display.extension",
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
