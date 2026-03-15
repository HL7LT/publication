# IM Image Viewer Endpoint - HL7 Europe IG Snapshot v0.0.2

## Resursų profilis: IM Image Viewer Endpoint 

 
This profile defines a placeholder for an Endpoint for a viewer that can be used to access the study, serie it is present on. The application is based on [IHE-IID](https://www.ihe.net/uploadedFiles/Documents/Radiology/IHE_RAD_Suppl_IID.pdf). 

**Usages:**

* Refer to this Profile: [IM Imaging Study](StructureDefinition-ImImagingStudy.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/ImImageIidViewerEndpoint)

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

Mandatory: 5 elements

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Endpoint.connectionType
* The element 1 is sliced based on the value of Endpoint.payload.mimeType

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Mandatory: 5 elements

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Endpoint.connectionType
* The element 1 is sliced based on the value of Endpoint.payload.mimeType

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-ImImageIidViewerEndpoint.csv), [Excel](../StructureDefinition-ImImageIidViewerEndpoint.xlsx), [Schematron](../StructureDefinition-ImImageIidViewerEndpoint.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ImImageIidViewerEndpoint",
  "language" : "en",
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImageIidViewerEndpoint",
  "version" : "0.0.2",
  "name" : "ImImageIidViewerEndpoint",
  "title" : "IM Image Viewer Endpoint",
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
  "description" : "This profile defines a placeholder for an Endpoint for a viewer that can be used to access the study, serie it is present on.\nThe application is based on [IHE-IID](https://www.ihe.net/uploadedFiles/Documents/Radiology/IHE_RAD_Suppl_IID.pdf).",
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Endpoint",
  "baseDefinition" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/EndpointEu|0.1.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Endpoint",
      "path" : "Endpoint"
    },
    {
      "id" : "Endpoint.connectionType",
      "path" : "Endpoint.connectionType",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "coding"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Endpoint.connectionType:iid",
      "path" : "Endpoint.connectionType",
      "sliceName" : "iid",
      "min" : 1,
      "max" : "1",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.eu/fhir/imaging-r5/CodeSystem/codesystem-endpoint-terminology",
          "code" : "ihe-iid",
          "display" : "IHE IID endpoint"
        }]
      }
    },
    {
      "id" : "Endpoint.payload",
      "path" : "Endpoint.payload",
      "min" : 1
    },
    {
      "id" : "Endpoint.payload.type",
      "path" : "Endpoint.payload.type",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Endpoint.payload.type.text",
      "path" : "Endpoint.payload.type.text",
      "patternString" : "IHE IID"
    },
    {
      "id" : "Endpoint.payload.mimeType",
      "path" : "Endpoint.payload.mimeType",
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
      "id" : "Endpoint.payload.mimeType:text-html",
      "path" : "Endpoint.payload.mimeType",
      "sliceName" : "text-html",
      "min" : 1,
      "max" : "1",
      "patternCode" : "text/html"
    }]
  }
}

```
