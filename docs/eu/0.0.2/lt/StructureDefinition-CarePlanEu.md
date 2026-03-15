# EU CarePlan - HL7 Europe IG Snapshot v0.0.2

## Resursų profilis: EU CarePlan 

 
Care plan for the patient. Contains the narrative containing the plan including proposals, goals, and order requests for monitoring, tracking, or improving the condition of the patient. In the future it is expected that the care plan could be provided in a structured and coded format. 

**Usages:**

* Refer to this Profile: [IM Composition](StructureDefinition-ImComposition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/CarePlanEu)

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

**Structures**

This structure refers to these other structures:

* [Patient (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-patient-eu.html)
* [Group (http://hl7.org/fhir/StructureDefinition/Group|5.0.0)](http://hl7.org/fhir/R5/group.html)
* [PractitionerRole (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitionerRole-eu.html)
* [Device (http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)
* [RelatedPerson (http://hl7.org/fhir/StructureDefinition/RelatedPerson|5.0.0)](http://hl7.org/fhir/R5/relatedperson.html)
* [Organization (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/organization-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-organization-eu.html)
* [CareTeam (http://hl7.org/fhir/StructureDefinition/CareTeam|5.0.0)](http://hl7.org/fhir/R5/careteam.html)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/rendering-xhtml|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-rendering-xhtml.html)

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

**Structures**

This structure refers to these other structures:

* [Patient (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-patient-eu.html)
* [Group (http://hl7.org/fhir/StructureDefinition/Group|5.0.0)](http://hl7.org/fhir/R5/group.html)
* [PractitionerRole (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitionerRole-eu.html)
* [Device (http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)
* [RelatedPerson (http://hl7.org/fhir/StructureDefinition/RelatedPerson|5.0.0)](http://hl7.org/fhir/R5/relatedperson.html)
* [Organization (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/organization-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-organization-eu.html)
* [CareTeam (http://hl7.org/fhir/StructureDefinition/CareTeam|5.0.0)](http://hl7.org/fhir/R5/careteam.html)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/rendering-xhtml|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-rendering-xhtml.html)

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-CarePlanEu.csv), [Excel](../StructureDefinition-CarePlanEu.xlsx), [Schematron](../StructureDefinition-CarePlanEu.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "CarePlanEu",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "draft"
  }],
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/CarePlanEu",
  "version" : "0.1.0-ballot",
  "name" : "CarePlanEu",
  "title" : "EU CarePlan",
  "status" : "draft",
  "date" : "2025-05-14T15:47:13+02:00",
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
  "description" : "Care plan for the patient. \nContains the narrative containing the plan including proposals, goals, and order requests for monitoring, tracking, or improving the condition of the patient. In the future it is expected that the care plan could be provided in a structured and coded format.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "EU"
    }]
  }],
  "copyright" : "Used by permission of HL7 Europe, all rights reserved Creative Commons License",
  "fhirVersion" : "5.0.0",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 V2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "CarePlan",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/CarePlan|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "CarePlan",
      "path" : "CarePlan"
    },
    {
      "id" : "CarePlan.title.extension",
      "path" : "CarePlan.title.extension",
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
      "id" : "CarePlan.title.extension:xthml",
      "path" : "CarePlan.title.extension",
      "sliceName" : "xthml",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/rendering-xhtml|5.2.0"]
      }]
    },
    {
      "id" : "CarePlan.description.extension",
      "path" : "CarePlan.description.extension",
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
      "id" : "CarePlan.description.extension:xthml",
      "path" : "CarePlan.description.extension",
      "sliceName" : "xthml",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/rendering-xhtml|5.2.0"]
      }]
    },
    {
      "id" : "CarePlan.subject",
      "path" : "CarePlan.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0",
        "http://hl7.org/fhir/StructureDefinition/Group|5.0.0"]
      }]
    },
    {
      "id" : "CarePlan.custodian",
      "path" : "CarePlan.custodian",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0",
        "http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0",
        "http://hl7.org/fhir/StructureDefinition/Device|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/RelatedPerson|5.0.0",
        "http://hl7.eu/fhir/base-r5/StructureDefinition/organization-eu|0.1.0",
        "http://hl7.org/fhir/StructureDefinition/CareTeam|5.0.0"]
      }]
    },
    {
      "id" : "CarePlan.contributor",
      "path" : "CarePlan.contributor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0",
        "http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0",
        "http://hl7.org/fhir/StructureDefinition/Device|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/RelatedPerson|5.0.0",
        "http://hl7.eu/fhir/base-r5/StructureDefinition/organization-eu|0.1.0",
        "http://hl7.org/fhir/StructureDefinition/CareTeam|5.0.0"]
      }]
    }]
  }
}

```
