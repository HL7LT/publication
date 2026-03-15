# IM Key images represented as an ImagingSelection - HL7 Europe IG Snapshot v0.0.2

## Resource Profile: IM Key images represented as an ImagingSelection 

 
Key images represented as an ImagingSelection 

**Usages:**

* Refer to this Profile: [IM Composition](StructureDefinition-ImComposition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/ImKeyImageImagingSelection)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-ImKeyImageImagingSelection.csv), [Excel](../StructureDefinition-ImKeyImageImagingSelection.xlsx), [Schematron](../StructureDefinition-ImKeyImageImagingSelection.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ImKeyImageImagingSelection",
  "language" : "en",
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImKeyImageImagingSelection",
  "version" : "0.0.2",
  "name" : "ImKeyImageImagingSelection",
  "title" : "IM Key images represented as an ImagingSelection",
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
  "description" : "Key images represented as an ImagingSelection",
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
    "identity" : "dicom",
    "uri" : "http://nema.org/dicom",
    "name" : "DICOM Tag Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ImagingSelection",
  "baseDefinition" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingSelection|0.1.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ImagingSelection",
      "path" : "ImagingSelection"
    },
    {
      "id" : "ImagingSelection.extension",
      "path" : "ImagingSelection.extension",
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
      "id" : "ImagingSelection.extension:title",
      "path" : "ImagingSelection.extension",
      "sliceName" : "title",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/artifact-description|5.2.0"]
      }]
    },
    {
      "id" : "ImagingSelection.extension:description",
      "path" : "ImagingSelection.extension",
      "sliceName" : "description",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/artifact-title|5.2.0"]
      }]
    },
    {
      "id" : "ImagingSelection.performer",
      "path" : "ImagingSelection.performer",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "actor"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "ImagingSelection.performer:performer",
      "path" : "ImagingSelection.performer",
      "sliceName" : "performer",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "ImagingSelection.performer:performer.actor",
      "path" : "ImagingSelection.performer.actor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0"]
      }]
    },
    {
      "id" : "ImagingSelection.performer:device",
      "path" : "ImagingSelection.performer",
      "sliceName" : "device",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "ImagingSelection.performer:device.actor",
      "path" : "ImagingSelection.performer.actor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingDevice|0.1.0-ballot"]
      }]
    }]
  }
}

```
