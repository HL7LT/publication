# IM Finding - HL7 Europe IG Snapshot v0.0.2

## Resource Profile: IM Finding 

 
Finding during imaging procedure. 

**Usages:**

* Refer to this Profile: [IM Composition](StructureDefinition-ImComposition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/ImFinding)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-ImFinding.csv), [Excel](../StructureDefinition-ImFinding.xlsx), [Schematron](../StructureDefinition-ImFinding.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ImFinding",
  "language" : "en",
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImFinding",
  "version" : "0.0.2",
  "name" : "ImFinding",
  "title" : "IM Finding",
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
  "description" : "Finding during imaging procedure.",
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
  "type" : "Observation",
  "baseDefinition" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ObservationEu|0.1.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Observation",
      "path" : "Observation"
    },
    {
      "id" : "Observation.identifier",
      "path" : "Observation.identifier",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "type"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Observation.identifier:observationUid",
      "path" : "Observation.identifier",
      "sliceName" : "observationUid",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Observation.identifier:observationUid.type",
      "path" : "Observation.identifier.type",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.eu/fhir/imaging-r5/CodeSystem/codesystem-missing-dicom-terminology",
          "code" : "00080018",
          "display" : "SOP Instance UID"
        }]
      }
    },
    {
      "id" : "Observation.basedOn",
      "path" : "Observation.basedOn",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Observation.basedOn:imorderaccession",
      "path" : "Observation.basedOn",
      "sliceName" : "imorderaccession",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImOrder|0.1.0-ballot"]
      }]
    },
    {
      "id" : "Observation.basedOn:imorderaccession.identifier",
      "path" : "Observation.basedOn.identifier",
      "min" : 1,
      "type" : [{
        "code" : "Identifier",
        "profile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/im-accession-number-identifier|0.1.0-ballot"]
      }]
    }]
  }
}

```
