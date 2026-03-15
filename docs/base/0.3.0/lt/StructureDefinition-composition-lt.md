# CompositionLt - Lithuanian Base Implementation Guide v0.3.0

## Resursų profilis: CompositionLt 

 
Lithuanian Base Composition profile, used for creating healthcare compositions. 

**Usages:**

* Refer to this Profile: [DiagnosticReportLt](StructureDefinition-diagnostic-report-lt.md) and [ProcedureLt](StructureDefinition-procedure-lt.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/composition-lt)

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

Mandatory: 1 element
 Must-Support: 17 elements

**Structures**

This structure refers to these other structures:

* [EncounterLt (https://hl7.lt/fhir/base/StructureDefinition/encounter-lt|0.3.0)](StructureDefinition-encounter-lt.md)
* [PractitionerLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0)](StructureDefinition-practitioner-lt.md)
* [PractitionerRoleLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0)](StructureDefinition-practitioner-role-lt.md)
* [OrganizationLt (https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0)](StructureDefinition-organization-lt.md)
* [PatientLt (https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0)](StructureDefinition-patient-lt.md)
* [RelatedPersonLt (https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0)](StructureDefinition-related-person-lt.md)
* [Device (http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/translation|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-translation.html)

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Mandatory: 1 element
 Must-Support: 17 elements

**Structures**

This structure refers to these other structures:

* [EncounterLt (https://hl7.lt/fhir/base/StructureDefinition/encounter-lt|0.3.0)](StructureDefinition-encounter-lt.md)
* [PractitionerLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0)](StructureDefinition-practitioner-lt.md)
* [PractitionerRoleLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0)](StructureDefinition-practitioner-role-lt.md)
* [OrganizationLt (https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0)](StructureDefinition-organization-lt.md)
* [PatientLt (https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0)](StructureDefinition-patient-lt.md)
* [RelatedPersonLt (https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0)](StructureDefinition-related-person-lt.md)
* [Device (http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/translation|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-translation.html)

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-composition-lt.csv), [Excel](../StructureDefinition-composition-lt.xlsx), [Schematron](../StructureDefinition-composition-lt.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "composition-lt",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/composition-lt",
  "version" : "0.3.0",
  "name" : "CompositionLt",
  "title" : "CompositionLt",
  "status" : "active",
  "date" : "2026-03-15T18:57:53+02:00",
  "publisher" : "Lithuanian Medical Library",
  "_publisher" : {
    "extension" : [{
      "extension" : [{
        "url" : "lang",
        "valueCode" : "lt"
      },
      {
        "url" : "content",
        "valueString" : "Lietuvos medicinos biblioteka"
      }],
      "url" : "http://hl7.org/fhir/StructureDefinition/translation"
    }]
  },
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
  "description" : "Lithuanian Base Composition profile, used for creating healthcare compositions.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "LT"
    }]
  }],
  "fhirVersion" : "5.0.0",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "cda",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "CDA (R2)"
  },
  {
    "identity" : "fhirdocumentreference",
    "uri" : "http://hl7.org/fhir/documentreference",
    "name" : "FHIR DocumentReference"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Composition",
  "baseDefinition" : "https://hl7.eu/fhir/StructureDefinition/CompositionEu|0.1.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Composition",
      "path" : "Composition"
    },
    {
      "id" : "Composition.version",
      "path" : "Composition.version",
      "mustSupport" : true
    },
    {
      "id" : "Composition.status",
      "path" : "Composition.status",
      "mustSupport" : true
    },
    {
      "id" : "Composition.type",
      "path" : "Composition.type",
      "mustSupport" : true
    },
    {
      "id" : "Composition.subject",
      "path" : "Composition.subject",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Composition.encounter",
      "path" : "Composition.encounter",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/encounter-lt|0.3.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.date",
      "path" : "Composition.date",
      "mustSupport" : true
    },
    {
      "id" : "Composition.author",
      "path" : "Composition.author",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/Device|5.0.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.name",
      "path" : "Composition.name",
      "mustSupport" : true
    },
    {
      "id" : "Composition.title",
      "path" : "Composition.title",
      "mustSupport" : true
    },
    {
      "id" : "Composition.title.extension",
      "path" : "Composition.title.extension",
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
      "id" : "Composition.title.extension:translation",
      "path" : "Composition.title.extension",
      "sliceName" : "translation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/translation|5.2.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.note",
      "path" : "Composition.note",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section",
      "path" : "Composition.section",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section.title",
      "path" : "Composition.section.title",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section.code",
      "path" : "Composition.section.code",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section.author",
      "path" : "Composition.section.author",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/Device|5.0.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Composition.section.entry",
      "path" : "Composition.section.entry",
      "mustSupport" : true
    },
    {
      "id" : "Composition.section.section",
      "path" : "Composition.section.section",
      "mustSupport" : true
    }]
  }
}

```
