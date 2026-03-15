# IM Imaging Order - HL7 Europe IG Snapshot v0.0.2

## Resource Profile: IM Imaging Order 

 
This profile on ServiceRequest represents the order for the Imaging Study and report. 

**Usages:**

* Refer to this Profile: [IM Composition](StructureDefinition-ImComposition.md), [IM Diagnostic Report](StructureDefinition-ImDiagnosticReport.md), [IM Finding](StructureDefinition-ImFinding.md), [IM Imaging Study](StructureDefinition-ImImagingStudy.md) and [IM Key Image Document Reference](StructureDefinition-ImKeyImageDocumentReference.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/ImOrder)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-ImOrder.csv), [Excel](../StructureDefinition-ImOrder.xlsx), [Schematron](../StructureDefinition-ImOrder.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ImOrder",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "draft"
  }],
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImOrder",
  "version" : "0.1.0-ballot",
  "name" : "ImOrder",
  "title" : "IM Imaging Order",
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
  "description" : "This profile on ServiceRequest represents the order for the Imaging Study and report.",
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
    "identity" : "quick",
    "uri" : "http://siframework.org/cqf",
    "name" : "Quality Improvement and Clinical Knowledge (QUICK)"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ServiceRequest",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ServiceRequest|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ServiceRequest",
      "path" : "ServiceRequest"
    },
    {
      "id" : "ServiceRequest.identifier",
      "path" : "ServiceRequest.identifier",
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
      "id" : "ServiceRequest.identifier:accessionNumber",
      "path" : "ServiceRequest.identifier",
      "sliceName" : "accessionNumber",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier",
        "profile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/im-accession-number-identifier|0.1.0-ballot"]
      }]
    },
    {
      "id" : "ServiceRequest.category",
      "path" : "ServiceRequest.category",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "ServiceRequest.category:imaging",
      "path" : "ServiceRequest.category",
      "sliceName" : "imaging",
      "min" : 1,
      "max" : "1",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "363679005",
          "display" : "Imaging"
        }]
      }
    },
    {
      "id" : "ServiceRequest.supportingInfo",
      "path" : "ServiceRequest.supportingInfo",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "ServiceRequest.supportingInfo:pregnancy",
      "path" : "ServiceRequest.supportingInfo",
      "sliceName" : "pregnancy",
      "min" : 0,
      "max" : "1",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://hl7.org/fhir/uv/ips/ValueSet/pregnancy-status-uv-ips"
      }
    }]
  }
}

```
