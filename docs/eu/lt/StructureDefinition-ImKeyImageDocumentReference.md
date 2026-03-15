# IM Key Image Document Reference - HL7 Europe IG Snapshot v0.0.1

## Resursų profilis: IM Key Image Document Reference 

 
A document containing key images for a patient. It can refer to a DICOM or non-DICOM image. When referring to a DICOM image, the DocumentReference.content.attachment.url should be a WADO-URI. When referring to a non-DICOM image, the DocumentReference.content.attachment.url should be a direct URL to the image. 
When the resource represents a DICOM instance it SHALL contain a the SOP Instance UID in the identifier element. When the resource represents a DICOM series it SHALL contain the Series Instance UID in the identifier element. 

**Usages:**

* Refer to this Profile: [IM Composition](StructureDefinition-ImComposition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/ImKeyImageDocumentReference)

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

Mandatory: 10 elements(9 nested mandatory elements)

**Structures**

This structure refers to these other structures:

* [IM Imaging Order (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImOrder|0.1.0-ballot)](StructureDefinition-ImOrder.md)
* [IM Imaging Accession Number Identifier (http://hl7.eu/fhir/imaging-r5/StructureDefinition/im-accession-number-identifier|0.1.0-ballot)](StructureDefinition-im-accession-number-identifier.md)
* [Patient (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-patient-eu.html)
* [PractitionerRole (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitionerRole-eu.html)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/documentreference-thumbnail|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-documentreference-thumbnail.html)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of DocumentReference.identifier
* The element 1 is sliced based on the value of DocumentReference.basedOn
* The element 1 is sliced based on the value of DocumentReference.category
* The element 1 is sliced based on the value of DocumentReference.category.coding
* The element 1 is sliced based on the value of DocumentReference.author
* The element 1 is sliced based on the value of DocumentReference.content

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Mandatory: 10 elements(9 nested mandatory elements)

**Structures**

This structure refers to these other structures:

* [IM Imaging Order (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImOrder|0.1.0-ballot)](StructureDefinition-ImOrder.md)
* [IM Imaging Accession Number Identifier (http://hl7.eu/fhir/imaging-r5/StructureDefinition/im-accession-number-identifier|0.1.0-ballot)](StructureDefinition-im-accession-number-identifier.md)
* [Patient (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-patient-eu.html)
* [PractitionerRole (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitionerRole-eu.html)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/documentreference-thumbnail|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-documentreference-thumbnail.html)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of DocumentReference.identifier
* The element 1 is sliced based on the value of DocumentReference.basedOn
* The element 1 is sliced based on the value of DocumentReference.category
* The element 1 is sliced based on the value of DocumentReference.category.coding
* The element 1 is sliced based on the value of DocumentReference.author
* The element 1 is sliced based on the value of DocumentReference.content

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-ImKeyImageDocumentReference.csv), [Excel](../StructureDefinition-ImKeyImageDocumentReference.xlsx), [Schematron](../StructureDefinition-ImKeyImageDocumentReference.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ImKeyImageDocumentReference",
  "language" : "en",
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImKeyImageDocumentReference",
  "version" : "0.0.1",
  "name" : "ImKeyImageDocumentReference",
  "title" : "IM Key Image Document Reference",
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
  "description" : "A document containing key images for a patient. It can refer to a DICOM or non-DICOM image. When referring to a DICOM image, the DocumentReference.content.attachment.url should be a WADO-URI. When referring to a non-DICOM image, the DocumentReference.content.attachment.url should be a direct URL to the image.\n\nWhen the resource represents a DICOM instance it SHALL contain a the SOP Instance UID in the identifier element. When the resource represents a DICOM series it SHALL contain the Series Instance UID in the identifier element. ",
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
    "identity" : "fhircomposition",
    "uri" : "http://hl7.org/fhir/composition",
    "name" : "FHIR Composition"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "xds",
    "uri" : "http://ihe.net/xds",
    "name" : "XDS metadata equivalent"
  },
  {
    "identity" : "cda",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "CDA (R2)"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 V2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DocumentReference",
  "baseDefinition" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/DocumentReferenceEu|0.1.0-ballot",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "DocumentReference",
      "path" : "DocumentReference"
    },
    {
      "id" : "DocumentReference.identifier",
      "path" : "DocumentReference.identifier",
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
      "id" : "DocumentReference.identifier:seriesInstanceUid",
      "path" : "DocumentReference.identifier",
      "sliceName" : "seriesInstanceUid",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "DocumentReference.identifier:seriesInstanceUid.type",
      "path" : "DocumentReference.identifier.type",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.eu/fhir/imaging-r5/CodeSystem/codesystem-missing-dicom-terminology",
          "code" : "00080018"
        }]
      }
    },
    {
      "id" : "DocumentReference.identifier:seriesInstanceUid.system",
      "path" : "DocumentReference.identifier.system",
      "min" : 1,
      "patternUri" : "urn:ietf:rfc:3986"
    },
    {
      "id" : "DocumentReference.identifier:seriesInstanceUid.value",
      "path" : "DocumentReference.identifier.value",
      "min" : 1
    },
    {
      "id" : "DocumentReference.identifier:sopClassInstanceUid",
      "path" : "DocumentReference.identifier",
      "sliceName" : "sopClassInstanceUid",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "DocumentReference.identifier:sopClassInstanceUid.type",
      "path" : "DocumentReference.identifier.type",
      "min" : 1,
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://dicom.nema.org/resources/ontology/DCM",
          "code" : "112002"
        }]
      }
    },
    {
      "id" : "DocumentReference.identifier:sopClassInstanceUid.system",
      "path" : "DocumentReference.identifier.system",
      "min" : 1,
      "patternUri" : "urn:ietf:rfc:3986"
    },
    {
      "id" : "DocumentReference.identifier:sopClassInstanceUid.value",
      "path" : "DocumentReference.identifier.value",
      "min" : 1
    },
    {
      "id" : "DocumentReference.basedOn",
      "path" : "DocumentReference.basedOn",
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
      "id" : "DocumentReference.basedOn:imorderaccession",
      "path" : "DocumentReference.basedOn",
      "sliceName" : "imorderaccession",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImOrder|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DocumentReference.basedOn:imorderaccession.identifier",
      "path" : "DocumentReference.basedOn.identifier",
      "min" : 1,
      "type" : [{
        "code" : "Identifier",
        "profile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/im-accession-number-identifier|0.1.0-ballot"]
      }]
    },
    {
      "id" : "DocumentReference.modality",
      "path" : "DocumentReference.modality",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "DocumentReference.category",
      "path" : "DocumentReference.category",
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
      "id" : "DocumentReference.category:imkeyimages",
      "path" : "DocumentReference.category",
      "sliceName" : "imkeyimages",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "DocumentReference.category:imkeyimages.coding",
      "path" : "DocumentReference.category.coding",
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
      "id" : "DocumentReference.category:imkeyimages.coding:keyimagecode",
      "path" : "DocumentReference.category.coding",
      "sliceName" : "keyimagecode",
      "min" : 1,
      "max" : "1",
      "patternCoding" : {
        "system" : "http://loinc.org",
        "code" : "55113-5",
        "display" : "Key images Document Radiology"
      }
    },
    {
      "id" : "DocumentReference.subject",
      "path" : "DocumentReference.subject",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0"]
      }]
    },
    {
      "id" : "DocumentReference.author",
      "path" : "DocumentReference.author",
      "slicing" : {
        "discriminator" : [{
          "type" : "profile",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "DocumentReference.author:performer",
      "path" : "DocumentReference.author",
      "sliceName" : "performer",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0"]
      }]
    },
    {
      "id" : "DocumentReference.content",
      "path" : "DocumentReference.content",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "extension.value"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "DocumentReference.content:thumbnail",
      "path" : "DocumentReference.content",
      "sliceName" : "thumbnail",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "DocumentReference.content:thumbnail.extension",
      "path" : "DocumentReference.content.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "DocumentReference.content:thumbnail.extension:thumbnail",
      "path" : "DocumentReference.content.extension",
      "sliceName" : "thumbnail",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/documentreference-thumbnail|5.2.0"]
      }]
    },
    {
      "id" : "DocumentReference.content:thumbnail.extension:thumbnail.value[x]",
      "path" : "DocumentReference.content.extension.value[x]",
      "patternBoolean" : true
    },
    {
      "id" : "DocumentReference.content:content",
      "path" : "DocumentReference.content",
      "sliceName" : "content",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "DocumentReference.content:content.extension",
      "path" : "DocumentReference.content.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "DocumentReference.content:content.extension:thumbnail",
      "path" : "DocumentReference.content.extension",
      "sliceName" : "thumbnail",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/documentreference-thumbnail|5.2.0"]
      }]
    },
    {
      "id" : "DocumentReference.content:content.extension:thumbnail.value[x]",
      "path" : "DocumentReference.content.extension.value[x]",
      "patternBoolean" : false
    },
    {
      "id" : "DocumentReference.content:content.attachment.url",
      "path" : "DocumentReference.content.attachment.url",
      "min" : 1
    }]
  }
}

```
