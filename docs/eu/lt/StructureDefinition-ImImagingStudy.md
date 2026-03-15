# IM Imaging Study - HL7 Europe IG Snapshot v0.0.1

## Resursų profilis: IM Imaging Study 

 
This profile represents an imaging study instance. 

**Usages:**

* Refer to this Profile: [IM Composition](StructureDefinition-ImComposition.md), [IM Diagnostic Report](StructureDefinition-ImDiagnosticReport.md) and [IM Imaging Selection](StructureDefinition-ImImagingSelection.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/ImImagingStudy)

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

#### Constraints

#### Terminology Bindings

#### Constraints

** Summary **

Mandatory: 2 elements(1 nested mandatory element)

**Structures**

This structure refers to these other structures:

* [IM Study Instance UID Identifier (http://hl7.eu/fhir/imaging-r5/StructureDefinition/im-study-instance-uid-identifier|0.1.0-ballot)](StructureDefinition-im-study-instance-uid-identifier.md)
* [Patient (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-patient-eu.html)
* [Device (http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)
* [IM Imaging Order (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImOrder|0.1.0-ballot)](StructureDefinition-ImOrder.md)
* [IM Imaging Accession Number Identifier (http://hl7.eu/fhir/imaging-r5/StructureDefinition/im-accession-number-identifier|0.1.0-ballot)](StructureDefinition-im-accession-number-identifier.md)
* [IM WADO Endpoint (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImWadoEndpoint|0.0.1)](StructureDefinition-ImWadoEndpoint.md)
* [IM Image Viewer Endpoint (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImageIidViewerEndpoint|0.0.1)](StructureDefinition-ImImageIidViewerEndpoint.md)
* [PractitionerRole (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitionerRole-eu.html)
* [IM Imaging Device (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingDevice|0.1.0-ballot)](StructureDefinition-ImImagingDevice.md)
* [Organization (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/organization-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-organization-eu.html)

**Extensions**

This structure refers to these extensions:

* [http://hl7.eu/fhir/imaging-r5/StructureDefinition/instance-description|0.1.0-ballot](StructureDefinition-instance-description.md)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of ImagingStudy.identifier
* The element 1 is sliced based on the value of ImagingStudy.basedOn
* The element 1 is sliced based on the value of ImagingStudy.endpoint
* The element 1 is sliced based on the value of ImagingStudy.series.endpoint
* The element 1 is sliced based on the value of ImagingStudy.series.performer

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

#### Terminology Bindings (Differential)

#### Constraints

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Mandatory: 2 elements(1 nested mandatory element)

**Structures**

This structure refers to these other structures:

* [IM Study Instance UID Identifier (http://hl7.eu/fhir/imaging-r5/StructureDefinition/im-study-instance-uid-identifier|0.1.0-ballot)](StructureDefinition-im-study-instance-uid-identifier.md)
* [Patient (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-patient-eu.html)
* [Device (http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)
* [IM Imaging Order (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImOrder|0.1.0-ballot)](StructureDefinition-ImOrder.md)
* [IM Imaging Accession Number Identifier (http://hl7.eu/fhir/imaging-r5/StructureDefinition/im-accession-number-identifier|0.1.0-ballot)](StructureDefinition-im-accession-number-identifier.md)
* [IM WADO Endpoint (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImWadoEndpoint|0.0.1)](StructureDefinition-ImWadoEndpoint.md)
* [IM Image Viewer Endpoint (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImageIidViewerEndpoint|0.0.1)](StructureDefinition-ImImageIidViewerEndpoint.md)
* [PractitionerRole (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitionerRole-eu.html)
* [IM Imaging Device (http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingDevice|0.1.0-ballot)](StructureDefinition-ImImagingDevice.md)
* [Organization (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/organization-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-organization-eu.html)

**Extensions**

This structure refers to these extensions:

* [http://hl7.eu/fhir/imaging-r5/StructureDefinition/instance-description|0.1.0-ballot](StructureDefinition-instance-description.md)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of ImagingStudy.identifier
* The element 1 is sliced based on the value of ImagingStudy.basedOn
* The element 1 is sliced based on the value of ImagingStudy.endpoint
* The element 1 is sliced based on the value of ImagingStudy.series.endpoint
* The element 1 is sliced based on the value of ImagingStudy.series.performer

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-ImImagingStudy.csv), [Excel](../StructureDefinition-ImImagingStudy.xlsx), [Schematron](../StructureDefinition-ImImagingStudy.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ImImagingStudy",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "draft"
  }],
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingStudy",
  "version" : "0.1.0-ballot",
  "name" : "ImImagingStudy",
  "title" : "IM Imaging Study",
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
  "description" : "This profile represents an imaging study instance.",
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
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "dicom",
    "uri" : "http://nema.org/dicom",
    "name" : "DICOM Tag Mapping"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 V2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ImagingStudy",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ImagingStudy|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ImagingStudy",
      "path" : "ImagingStudy",
      "constraint" : [{
        "key" : "im-imagingstudy-01",
        "severity" : "warning",
        "human" : "A DICOM instance UID must start with 'urn:oid:'",
        "expression" : "identifier.where(system='urn:dicom:uid').value.startsWith('urn:oid:')",
        "source" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingStudy|0.1.0-ballot"
      }]
    },
    {
      "id" : "ImagingStudy.identifier",
      "path" : "ImagingStudy.identifier",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "system"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "ImagingStudy.identifier:studyInstanceUid",
      "path" : "ImagingStudy.identifier",
      "sliceName" : "studyInstanceUid",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Identifier",
        "profile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/im-study-instance-uid-identifier|0.1.0-ballot"]
      }]
    },
    {
      "id" : "ImagingStudy.subject",
      "path" : "ImagingStudy.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0",
        "http://hl7.org/fhir/StructureDefinition/Device|5.0.0"]
      }]
    },
    {
      "id" : "ImagingStudy.basedOn",
      "path" : "ImagingStudy.basedOn",
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
      "id" : "ImagingStudy.basedOn:imorderaccession",
      "path" : "ImagingStudy.basedOn",
      "sliceName" : "imorderaccession",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImOrder|0.1.0-ballot"]
      }]
    },
    {
      "id" : "ImagingStudy.basedOn:imorderaccession.identifier",
      "path" : "ImagingStudy.basedOn.identifier",
      "min" : 1,
      "type" : [{
        "code" : "Identifier",
        "profile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/im-accession-number-identifier|0.1.0-ballot"]
      }]
    },
    {
      "id" : "ImagingStudy.endpoint",
      "path" : "ImagingStudy.endpoint",
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
      "id" : "ImagingStudy.endpoint:wado",
      "path" : "ImagingStudy.endpoint",
      "sliceName" : "wado",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImWadoEndpoint|0.0.1"]
      }]
    },
    {
      "id" : "ImagingStudy.endpoint:iid",
      "path" : "ImagingStudy.endpoint",
      "sliceName" : "iid",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImageIidViewerEndpoint|0.0.1"]
      }]
    },
    {
      "id" : "ImagingStudy.series.endpoint",
      "path" : "ImagingStudy.series.endpoint",
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
      "id" : "ImagingStudy.series.endpoint:wado",
      "path" : "ImagingStudy.series.endpoint",
      "sliceName" : "wado",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImWadoEndpoint|0.0.1"]
      }]
    },
    {
      "id" : "ImagingStudy.series.endpoint:iid",
      "path" : "ImagingStudy.series.endpoint",
      "sliceName" : "iid",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImageIidViewerEndpoint|0.0.1"]
      }]
    },
    {
      "id" : "ImagingStudy.series.performer",
      "path" : "ImagingStudy.series.performer",
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
      "id" : "ImagingStudy.series.performer.function",
      "path" : "ImagingStudy.series.performer.function",
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://hl7.eu/fhir/imaging-r5/ValueSet/im-imaging-study-performer-type"
      }
    },
    {
      "id" : "ImagingStudy.series.performer:performer",
      "path" : "ImagingStudy.series.performer",
      "sliceName" : "performer",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "ImagingStudy.series.performer:performer.function",
      "path" : "ImagingStudy.series.performer.function",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ParticipationType",
          "code" : "PRF"
        }]
      }
    },
    {
      "id" : "ImagingStudy.series.performer:performer.actor",
      "path" : "ImagingStudy.series.performer.actor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0"]
      }]
    },
    {
      "id" : "ImagingStudy.series.performer:device",
      "path" : "ImagingStudy.series.performer",
      "sliceName" : "device",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "ImagingStudy.series.performer:device.function",
      "path" : "ImagingStudy.series.performer.function",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ParticipationType",
          "code" : "DEV"
        }]
      }
    },
    {
      "id" : "ImagingStudy.series.performer:device.actor",
      "path" : "ImagingStudy.series.performer.actor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/ImImagingDevice|0.1.0-ballot"]
      }]
    },
    {
      "id" : "ImagingStudy.series.performer:custodian",
      "path" : "ImagingStudy.series.performer",
      "sliceName" : "custodian",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "ImagingStudy.series.performer:custodian.function",
      "path" : "ImagingStudy.series.performer.function",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ParticipationType",
          "code" : "CST"
        }]
      }
    },
    {
      "id" : "ImagingStudy.series.performer:custodian.actor",
      "path" : "ImagingStudy.series.performer.actor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/organization-eu|0.1.0"]
      }]
    },
    {
      "id" : "ImagingStudy.series.instance.extension",
      "path" : "ImagingStudy.series.instance.extension",
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
      "id" : "ImagingStudy.series.instance.extension:instance-description",
      "path" : "ImagingStudy.series.instance.extension",
      "sliceName" : "instance-description",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.eu/fhir/imaging-r5/StructureDefinition/instance-description|0.1.0-ballot"]
      }]
    }]
  }
}

```
