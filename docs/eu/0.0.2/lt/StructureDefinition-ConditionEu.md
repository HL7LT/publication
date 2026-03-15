# EU Condition - HL7 Europe IG Snapshot v0.0.2

## Resursų profilis: EU Condition 

 
A condition profile for the EU. 

**Usages:**

* Refer to this Profile: [IM Composition](StructureDefinition-ImComposition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/ConditionEu)

### Profilio turinio formaliosios peržiūros

 [Profilių, skirtumų rinkinių, momentinių kopijų aprašas ir jų reprezentacijos](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Pagrindinių elementų lentelė](#tabs-key) 
*  [Skirtumų rinkinių lentelė](#tabs-diff) 
*  [Momentinės kopijos lentelė](#tabs-snap) 
*  [Statistika/Nuorodos](#tabs-summ) 
*  [Viskas](#tabs-all) 

#### Terminology Bindings

#### Constraints

#### Terminology Bindings (Differential)

#### Terminology Bindings

#### Constraints

** Summary **

**Structures**

This structure refers to these other structures:

* [Patient (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-patient-eu.html)
* [Group (http://hl7.org/fhir/StructureDefinition/Group|5.0.0)](http://hl7.org/fhir/R5/group.html)
* [Practitioner (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitioner-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitioner-eu.html)
* [PractitionerRole (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitionerRole-eu.html)
* [Device (http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)
* [RelatedPerson (http://hl7.org/fhir/StructureDefinition/RelatedPerson|5.0.0)](http://hl7.org/fhir/R5/relatedperson.html)
* [Organization (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/organization-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-organization-eu.html)
* [CareTeam (http://hl7.org/fhir/StructureDefinition/CareTeam|5.0.0)](http://hl7.org/fhir/R5/careteam.html)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/artifact-relatedArtifact|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-artifact-relatedArtifact.html)

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

#### Terminology Bindings (Differential)

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

**Structures**

This structure refers to these other structures:

* [Patient (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-patient-eu.html)
* [Group (http://hl7.org/fhir/StructureDefinition/Group|5.0.0)](http://hl7.org/fhir/R5/group.html)
* [Practitioner (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitioner-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitioner-eu.html)
* [PractitionerRole (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitionerRole-eu.html)
* [Device (http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)
* [RelatedPerson (http://hl7.org/fhir/StructureDefinition/RelatedPerson|5.0.0)](http://hl7.org/fhir/R5/relatedperson.html)
* [Organization (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/organization-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-organization-eu.html)
* [CareTeam (http://hl7.org/fhir/StructureDefinition/CareTeam|5.0.0)](http://hl7.org/fhir/R5/careteam.html)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/artifact-relatedArtifact|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-artifact-relatedArtifact.html)

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-ConditionEu.csv), [Excel](../StructureDefinition-ConditionEu.xlsx), [Schematron](../StructureDefinition-ConditionEu.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ConditionEu",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "draft"
  }],
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ConditionEu",
  "version" : "0.1.0-ballot",
  "name" : "ConditionEu",
  "title" : "EU Condition",
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
  "description" : "A condition profile for the EU.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "EU"
    }]
  }],
  "copyright" : "Used by permission of HL7 Europe, all rights reserved Creative Commons License",
  "fhirVersion" : "5.0.0",
  "mapping" : [{
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "sct-concept",
    "uri" : "http://snomed.info/conceptdomain",
    "name" : "SNOMED CT Concept Domain Binding"
  },
  {
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
    "identity" : "sct-attr",
    "uri" : "http://snomed.org/attributebinding",
    "name" : "SNOMED CT Attribute Binding"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Condition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Condition|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Condition",
      "path" : "Condition"
    },
    {
      "id" : "Condition.extension",
      "path" : "Condition.extension",
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
      "id" : "Condition.extension:relatedArtifact",
      "path" : "Condition.extension",
      "sliceName" : "relatedArtifact",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/artifact-relatedArtifact|5.2.0"]
      }]
    },
    {
      "id" : "Condition.bodySite",
      "path" : "Condition.bodySite",
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://hl7.org/fhir/ValueSet/body-site|5.0.0"
      }
    },
    {
      "id" : "Condition.subject",
      "path" : "Condition.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0",
        "http://hl7.org/fhir/StructureDefinition/Group|5.0.0"]
      }]
    },
    {
      "id" : "Condition.participant.actor",
      "path" : "Condition.participant.actor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/practitioner-eu|0.1.0",
        "http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0",
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
