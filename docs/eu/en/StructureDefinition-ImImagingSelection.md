# IM Imaging Selection - HL7 Europe IG Snapshot v0.0.1

## Resource Profile: IM Imaging Selection 

 
Imaging Selection 

**Usages:**

* Derived from this Profile: [IM Key images represented as an ImagingSelection](StructureDefinition-ImKeyImageImagingSelection.md)
* Refer to this Profile: [IM Composition](StructureDefinition-ImComposition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/ImImagingSelection)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-ImImagingSelection.csv), [Excel](../StructureDefinition-ImImagingSelection.xlsx), [Schematron](../StructureDefinition-ImImagingSelection.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ImImagingSelection",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "draft"
  }],
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingSelection",
  "version" : "0.1.0-ballot",
  "name" : "ImImagingSelection",
  "title" : "IM Imaging Selection",
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
  "description" : "Imaging Selection",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ImagingSelection|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ImagingSelection",
      "path" : "ImagingSelection"
    },
    {
      "id" : "ImagingSelection.subject",
      "path" : "ImagingSelection.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0"]
      }]
    },
    {
      "id" : "ImagingSelection.derivedFrom",
      "path" : "ImagingSelection.derivedFrom",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "ImagingSelection.derivedFrom:study",
      "path" : "ImagingSelection.derivedFrom",
      "sliceName" : "study",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingStudy|0.1.0-ballot"]
      }]
    }]
  }
}

```
