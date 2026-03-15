# IM Key images represented as an ImagingSelection - HL7 Europe General Implementation Guide v0.0.1

## Resursų profilis: IM Key images represented as an ImagingSelection 

 
Key images represented as an ImagingSelection 

**Usages:**

* Refer to this Profile: [IM Composition](StructureDefinition-ImComposition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/ImKeyImageImagingSelection)

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

* [PractitionerRole (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitionerRole-eu.html)
* [IM Imaging Device (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingDevice|0.1.0-ballot)](StructureDefinition-ImImagingDevice.md)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/artifact-description|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-artifact-description.html)
* [http://hl7.org/fhir/StructureDefinition/artifact-title|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-artifact-title.html)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of ImagingSelection.performer

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

* [PractitionerRole (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitionerRole-eu.html)
* [IM Imaging Device (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingDevice|0.1.0-ballot)](StructureDefinition-ImImagingDevice.md)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/artifact-description|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-artifact-description.html)
* [http://hl7.org/fhir/StructureDefinition/artifact-title|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-artifact-title.html)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of ImagingSelection.performer

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-ImKeyImageImagingSelection.csv), [Excel](../StructureDefinition-ImKeyImageImagingSelection.xlsx), [Schematron](../StructureDefinition-ImKeyImageImagingSelection.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ImKeyImageImagingSelection",
  "language" : "en",
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImKeyImageImagingSelection",
  "version" : "0.0.1",
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
