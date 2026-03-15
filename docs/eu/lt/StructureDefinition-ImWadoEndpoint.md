# IM WADO Endpoint - HL7 Europe IG Snapshot v0.0.1

## Resursų profilis: IM WADO Endpoint 

 
This profile defines the WADO endpoint for accessing imaging study content. 

**Usages:**

* Refer to this Profile: [IM Imaging Study](StructureDefinition-ImImagingStudy.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/ImWadoEndpoint)

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

Mandatory: 22 elements

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Endpoint.connectionType
* The element 1 is sliced based on the value of Endpoint.payload
* The element 1 is sliced based on the value of Endpoint.payload.mimeType

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Mandatory: 22 elements

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Endpoint.connectionType
* The element 1 is sliced based on the value of Endpoint.payload
* The element 1 is sliced based on the value of Endpoint.payload.mimeType

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-ImWadoEndpoint.csv), [Excel](../StructureDefinition-ImWadoEndpoint.xlsx), [Schematron](../StructureDefinition-ImWadoEndpoint.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ImWadoEndpoint",
  "language" : "en",
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImWadoEndpoint",
  "version" : "0.0.1",
  "name" : "ImWadoEndpoint",
  "title" : "IM WADO Endpoint",
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
  "description" : "This profile defines the WADO endpoint for accessing imaging study content.",
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
      "id" : "Endpoint.connectionType:wado",
      "path" : "Endpoint.connectionType",
      "sliceName" : "wado",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Endpoint.connectionType:wado.coding",
      "path" : "Endpoint.connectionType.coding",
      "min" : 1,
      "patternCoding" : {
        "system" : "http://terminology.hl7.org/CodeSystem/endpoint-connection-type",
        "code" : "dicom-wado-rs",
        "display" : "DICOM WADO-RS"
      }
    },
    {
      "id" : "Endpoint.payload",
      "path" : "Endpoint.payload",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "type"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Endpoint.payload:wadors",
      "path" : "Endpoint.payload",
      "sliceName" : "wadors",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Endpoint.payload:wadors.type",
      "path" : "Endpoint.payload.type",
      "min" : 1,
      "max" : "1",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/endpoint-connection-type",
          "code" : "dicom-wado-rs",
          "display" : "DICOM WADO-RS"
        }]
      }
    },
    {
      "id" : "Endpoint.payload:wadors.mimeType",
      "path" : "Endpoint.payload.mimeType",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 17
    },
    {
      "id" : "Endpoint.payload:wadors.mimeType:dicom",
      "path" : "Endpoint.payload.mimeType",
      "sliceName" : "dicom",
      "min" : 1,
      "max" : "1",
      "patternCode" : "application/dicom"
    },
    {
      "id" : "Endpoint.payload:wadors.mimeType:dicom-octet",
      "path" : "Endpoint.payload.mimeType",
      "sliceName" : "dicom-octet",
      "min" : 1,
      "max" : "1",
      "patternCode" : "application/octet-stream"
    },
    {
      "id" : "Endpoint.payload:wadors.mimeType:dicom-xml",
      "path" : "Endpoint.payload.mimeType",
      "sliceName" : "dicom-xml",
      "min" : 1,
      "max" : "1",
      "patternCode" : "application/dicom+xml"
    },
    {
      "id" : "Endpoint.payload:wadors.mimeType:dicom-json",
      "path" : "Endpoint.payload.mimeType",
      "sliceName" : "dicom-json",
      "min" : 1,
      "max" : "1",
      "patternCode" : "application/json"
    },
    {
      "id" : "Endpoint.payload:wadors.mimeType:image-jpg",
      "path" : "Endpoint.payload.mimeType",
      "sliceName" : "image-jpg",
      "min" : 1,
      "max" : "1",
      "patternCode" : "image/jpg"
    },
    {
      "id" : "Endpoint.payload:wadors.mimeType:image-gif",
      "path" : "Endpoint.payload.mimeType",
      "sliceName" : "image-gif",
      "min" : 1,
      "max" : "1",
      "patternCode" : "image/gif"
    },
    {
      "id" : "Endpoint.payload:wadors.mimeType:image-jp2",
      "path" : "Endpoint.payload.mimeType",
      "sliceName" : "image-jp2",
      "min" : 1,
      "max" : "1",
      "patternCode" : "image/jp2"
    },
    {
      "id" : "Endpoint.payload:wadors.mimeType:image-jph",
      "path" : "Endpoint.payload.mimeType",
      "sliceName" : "image-jph",
      "min" : 1,
      "max" : "1",
      "patternCode" : "image/jph"
    },
    {
      "id" : "Endpoint.payload:wadors.mimeType:image-jxl",
      "path" : "Endpoint.payload.mimeType",
      "sliceName" : "image-jxl",
      "min" : 1,
      "max" : "1",
      "patternCode" : "image/jxl"
    },
    {
      "id" : "Endpoint.payload:wadors.mimeType:video-mpeg",
      "path" : "Endpoint.payload.mimeType",
      "sliceName" : "video-mpeg",
      "min" : 1,
      "max" : "1",
      "patternCode" : "video/mpeg"
    },
    {
      "id" : "Endpoint.payload:wadors.mimeType:video-mp4",
      "path" : "Endpoint.payload.mimeType",
      "sliceName" : "video-mp4",
      "min" : 1,
      "max" : "1",
      "patternCode" : "video/mp4"
    },
    {
      "id" : "Endpoint.payload:wadors.mimeType:video-H265",
      "path" : "Endpoint.payload.mimeType",
      "sliceName" : "video-H265",
      "min" : 1,
      "max" : "1",
      "patternCode" : "video/H265"
    },
    {
      "id" : "Endpoint.payload:wadors.mimeType:text-html",
      "path" : "Endpoint.payload.mimeType",
      "sliceName" : "text-html",
      "min" : 1,
      "max" : "1",
      "patternCode" : "text/html"
    },
    {
      "id" : "Endpoint.payload:wadors.mimeType:text-plain",
      "path" : "Endpoint.payload.mimeType",
      "sliceName" : "text-plain",
      "min" : 1,
      "max" : "1",
      "patternCode" : "text/plain"
    },
    {
      "id" : "Endpoint.payload:wadors.mimeType:text-xml",
      "path" : "Endpoint.payload.mimeType",
      "sliceName" : "text-xml",
      "min" : 1,
      "max" : "1",
      "patternCode" : "text/xml"
    },
    {
      "id" : "Endpoint.payload:wadors.mimeType:text-rtf",
      "path" : "Endpoint.payload.mimeType",
      "sliceName" : "text-rtf",
      "min" : 1,
      "max" : "1",
      "patternCode" : "text/rtf"
    },
    {
      "id" : "Endpoint.payload:wadors.mimeType:application-pdf",
      "path" : "Endpoint.payload.mimeType",
      "sliceName" : "application-pdf",
      "min" : 1,
      "max" : "1",
      "patternCode" : "application/pdf"
    }]
  }
}

```
