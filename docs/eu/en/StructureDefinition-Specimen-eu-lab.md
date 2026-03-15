# Specimen: Laboratory (Eu Lab) - HL7 Europe IG Snapshot v0.0.2

## Resource Profile: Specimen: Laboratory (Eu Lab) 

 
This profile defines how to represent Specimens in HL7 FHIR for the purpose of this guide. 

**Usages:**

* Refer to this Profile: [DiagnosticReport: Laboratory Report (Eu Lab)](StructureDefinition-DiagnosticReport-eu-lab.md), [Observation Results: laboratory (Eu Lab)](StructureDefinition-Observation-resultslab-eu-lab.md), [ServiceRequest: Laboratory Order (Eu Lab)](StructureDefinition-ServiceRequest-eu-lab.md) and [Specimen: Laboratory (Eu Lab)](StructureDefinition-Specimen-eu-lab.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/Specimen-eu-lab)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-Specimen-eu-lab.csv), [Excel](../StructureDefinition-Specimen-eu-lab.xlsx), [Schematron](../StructureDefinition-Specimen-eu-lab.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "Specimen-eu-lab",
  "language" : "en",
  "url" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Specimen-eu-lab",
  "version" : "0.2.0-ci",
  "name" : "SpecimenEu",
  "title" : "Specimen: Laboratory (Eu Lab)",
  "status" : "draft",
  "date" : "2026-03-15T21:22:52+02:00",
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
  "description" : "This profile defines how to represent Specimens in HL7 FHIR for the purpose of this guide.",
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
  "type" : "Specimen",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Specimen|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Specimen",
      "path" : "Specimen",
      "short" : "Laboratory Specimen",
      "definition" : "Laboratory specimen"
    },
    {
      "id" : "Specimen.type",
      "path" : "Specimen.type",
      "comment" : "If the specimen.type conveys information about the site the specimen has been collected from, then, if the bodySite if present it shall be coherent with the type.",
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-specimenType-eu-lab"
      }
    },
    {
      "id" : "Specimen.subject",
      "path" : "Specimen.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0",
        "http://hl7.eu/fhir/base-r5/StructureDefinition/patient-animal-eu-core|0.1.0",
        "http://hl7.org/fhir/StructureDefinition/Group|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/Device|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/Substance|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/Location|5.0.0"]
      }]
    },
    {
      "id" : "Specimen.parent",
      "path" : "Specimen.parent",
      "type" : [{
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-hierarchy",
          "valueBoolean" : true
        }],
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/laboratory/StructureDefinition/Specimen-eu-lab|0.2.0-ci"]
      }]
    },
    {
      "id" : "Specimen.request",
      "path" : "Specimen.request",
      "short" : "Why the specimen was collected.",
      "comment" : "If the specimen information are known when the order is created then the ServiceRequest.specimen should be used.\nIf the ServiceRequest can be updated when the specimen is collected then the ServiceRequest.specimen or the Specimen.request could be used.\nOtherwise the relationship is recorded in the Specimen.request element"
    },
    {
      "id" : "Specimen.collection.bodySite",
      "path" : "Specimen.collection.bodySite",
      "comment" : "If the specimen.type conveys information about the site the specimen has been collected from, then, if the bodySite is present, it shall be coherent with the type",
      "type" : [{
        "code" : "CodeableReference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/bodyStructure-eu-core|0.1.0"]
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://hl7.org/fhir/ValueSet/body-site|5.0.0"
      }
    },
    {
      "id" : "Specimen.processing.additive",
      "path" : "Specimen.processing.additive",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Substance|5.0.0",
        "http://hl7.eu/fhir/laboratory/StructureDefinition/Substance-additive-eu-lab|0.2.0-ci"]
      }]
    },
    {
      "id" : "Specimen.container.extension",
      "path" : "Specimen.container.extension",
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
      "id" : "Specimen.container.extension:type",
      "path" : "Specimen.container.extension",
      "sliceName" : "type",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/specimen-container-type|5.2.0"]
      }]
    }]
  }
}

```
