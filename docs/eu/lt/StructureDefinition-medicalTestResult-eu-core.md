# MedicalTestResult (EU core) - HL7 Europe IG Snapshot v0.0.1

## Resursų profilis: MedicalTestResult (EU core) 

 
This profile sets minimum expectations for the Observation resource for Medical Test Results common to most of the use cases. 

**Usages:**

* Refer to this Profile: [MedicalTestResult (EU core)](StructureDefinition-medicalTestResult-eu-core.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/medicalTestResult-eu-core)

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

#### Terminology Bindings

#### Constraints

** Summary **

Mandatory: 3 elements

**Structures**

This structure refers to these other structures:

* [Patient (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-patient-eu.html)
* [RelatedPerson (http://hl7.org/fhir/StructureDefinition/RelatedPerson|5.0.0)](http://hl7.org/fhir/R5/relatedperson.html)
* [Group (http://hl7.org/fhir/StructureDefinition/Group|5.0.0)](http://hl7.org/fhir/R5/group.html)
* [Device (http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)
* [Location (EU core) (http://hl7.eu/fhir/base-r5/StructureDefinition/location-eu|2.0.0-ballot)](StructureDefinition-location-eu-core.md)
* [Practitioner (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitioner-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitioner-eu.html)
* [PractitionerRole (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitionerRole-eu.html)
* [Organization (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/organization-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-organization-eu.html)
* [MedicalTestResult (EU core) (https://hl7.lt/fhir/eu/StructureDefinition/medicalTestResult-eu-core|2.0.0-ballot)](StructureDefinition-medicalTestResult-eu-core.md)
* [QuestionnaireResponse (http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse|5.0.0)](http://hl7.org/fhir/R5/questionnaireresponse.html)
* [ImagingStudy (http://hl7.org/fhir/StructureDefinition/ImagingStudy|5.0.0)](http://hl7.org/fhir/R5/imagingstudy.html)
* [DocumentReference (http://hl7.org/fhir/StructureDefinition/DocumentReference|5.0.0)](http://hl7.org/fhir/R5/documentreference.html)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/iso21090-uncertainty|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-iso21090-uncertainty.html)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Observation.category
* The element 1 is sliced based on the value of Observation.value[x]
* The element 1 is sliced based on the value of Observation.component.value[x]

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

#### Terminology Bindings (Differential)

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Mandatory: 3 elements

**Structures**

This structure refers to these other structures:

* [Patient (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-patient-eu.html)
* [RelatedPerson (http://hl7.org/fhir/StructureDefinition/RelatedPerson|5.0.0)](http://hl7.org/fhir/R5/relatedperson.html)
* [Group (http://hl7.org/fhir/StructureDefinition/Group|5.0.0)](http://hl7.org/fhir/R5/group.html)
* [Device (http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)
* [Location (EU core) (http://hl7.eu/fhir/base-r5/StructureDefinition/location-eu|2.0.0-ballot)](StructureDefinition-location-eu-core.md)
* [Practitioner (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitioner-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitioner-eu.html)
* [PractitionerRole (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-practitionerRole-eu.html)
* [Organization (EU base) (http://hl7.eu/fhir/base-r5/StructureDefinition/organization-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-organization-eu.html)
* [MedicalTestResult (EU core) (https://hl7.lt/fhir/eu/StructureDefinition/medicalTestResult-eu-core|2.0.0-ballot)](StructureDefinition-medicalTestResult-eu-core.md)
* [QuestionnaireResponse (http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse|5.0.0)](http://hl7.org/fhir/R5/questionnaireresponse.html)
* [ImagingStudy (http://hl7.org/fhir/StructureDefinition/ImagingStudy|5.0.0)](http://hl7.org/fhir/R5/imagingstudy.html)
* [DocumentReference (http://hl7.org/fhir/StructureDefinition/DocumentReference|5.0.0)](http://hl7.org/fhir/R5/documentreference.html)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/iso21090-uncertainty|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-iso21090-uncertainty.html)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Observation.category
* The element 1 is sliced based on the value of Observation.value[x]
* The element 1 is sliced based on the value of Observation.component.value[x]

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 1

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-medicalTestResult-eu-core.csv), [Excel](../StructureDefinition-medicalTestResult-eu-core.xlsx), [Schematron](../StructureDefinition-medicalTestResult-eu-core.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medicalTestResult-eu-core",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "draft"
  }],
  "url" : "https://hl7.lt/fhir/eu/StructureDefinition/medicalTestResult-eu-core",
  "version" : "2.0.0-ballot",
  "name" : "MedicalTestResultEuCore",
  "title" : "MedicalTestResult (EU core)",
  "status" : "draft",
  "date" : "2026-03-15T17:10:39+02:00",
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
  "description" : "This profile sets minimum expectations for the Observation resource for Medical Test Results common to most of the use cases.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "EU"
    }]
  }],
  "copyright" : "Copyright HL7 Europe. Licensed under creative commons public domain (CC0 1.0).",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Observation|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Observation",
      "path" : "Observation"
    },
    {
      "id" : "Observation.identifier",
      "path" : "Observation.identifier",
      "requirements" : "EHDSObservation.header.identifier"
    },
    {
      "id" : "Observation.basedOn",
      "path" : "Observation.basedOn",
      "requirements" : "EHDSObservation.order"
    },
    {
      "id" : "Observation.status",
      "path" : "Observation.status",
      "requirements" : "EHDSObservation.header.status"
    },
    {
      "id" : "Observation.category",
      "path" : "Observation.category",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "requirements" : "EHDSObservation has no requirement",
      "min" : 1
    },
    {
      "id" : "Observation.category:laboratory",
      "path" : "Observation.category",
      "sliceName" : "laboratory",
      "min" : 0,
      "max" : "1",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "laboratory"
        }]
      }
    },
    {
      "id" : "Observation.category:vital-signs",
      "path" : "Observation.category",
      "sliceName" : "vital-signs",
      "min" : 0,
      "max" : "1",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "vital-signs"
        }]
      }
    },
    {
      "id" : "Observation.code",
      "path" : "Observation.code",
      "requirements" : "EHDSObservation.code",
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-obsCode-eu-lab"
      }
    },
    {
      "id" : "Observation.subject",
      "path" : "Observation.subject",
      "requirements" : "EHDSObservation.header.subject",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0"]
      }]
    },
    {
      "id" : "Observation.focus",
      "path" : "Observation.focus",
      "requirements" : "EHDSObservation.directSubject[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0",
        "http://hl7.org/fhir/StructureDefinition/RelatedPerson|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/Group|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/Device|5.0.0",
        "http://hl7.eu/fhir/base-r5/StructureDefinition/location-eu|2.0.0-ballot"]
      }]
    },
    {
      "id" : "Observation.effective[x]",
      "path" : "Observation.effective[x]",
      "requirements" : "EHDSObservation.observationDate[x]",
      "min" : 1,
      "type" : [{
        "code" : "dateTime"
      },
      {
        "code" : "Period"
      }]
    },
    {
      "id" : "Observation.issued",
      "path" : "Observation.issued",
      "requirements" : "EHDSObservation.header.authorship.datetime"
    },
    {
      "id" : "Observation.performer",
      "path" : "Observation.performer",
      "requirements" : "EHDSObservation.header.performer",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/practitioner-eu|0.1.0",
        "http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0",
        "http://hl7.eu/fhir/base-r5/StructureDefinition/organization-eu|0.1.0"]
      }]
    },
    {
      "id" : "Observation.value[x]",
      "path" : "Observation.value[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "requirements" : "EHDSObservation.result.value[x]"
    },
    {
      "id" : "Observation.value[x]:valueQuantity",
      "path" : "Observation.value[x]",
      "sliceName" : "valueQuantity",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }]
    },
    {
      "id" : "Observation.value[x]:valueQuantity.extension:uncertainty",
      "path" : "Observation.value[x].extension",
      "sliceName" : "uncertainty",
      "requirements" : "EHDSObservation.result.uncertainty",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/iso21090-uncertainty|5.2.0"]
      }]
    },
    {
      "id" : "Observation.dataAbsentReason",
      "path" : "Observation.dataAbsentReason",
      "requirements" : "EHDSObservation.dataAbsentReason"
    },
    {
      "id" : "Observation.interpretation",
      "path" : "Observation.interpretation",
      "requirements" : "EHDSObservation.interpretation"
    },
    {
      "id" : "Observation.note",
      "path" : "Observation.note",
      "requirements" : "EHDSObservation.resultDescription"
    },
    {
      "id" : "Observation.bodySite",
      "path" : "Observation.bodySite",
      "requirements" : "EHDSObservation.anatomicLocation"
    },
    {
      "id" : "Observation.method",
      "path" : "Observation.method",
      "requirements" : "EHDSObservation.method"
    },
    {
      "id" : "Observation.device",
      "path" : "Observation.device",
      "requirements" : "Device information for laboratory observations"
    },
    {
      "id" : "Observation.referenceRange",
      "path" : "Observation.referenceRange",
      "requirements" : "EHDSObservation.referenceRange"
    },
    {
      "id" : "Observation.hasMember",
      "path" : "Observation.hasMember",
      "requirements" : "EHDSObservation.hasMember[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/eu/StructureDefinition/medicalTestResult-eu-core|2.0.0-ballot",
        "http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse|5.0.0"]
      }]
    },
    {
      "id" : "Observation.derivedFrom",
      "path" : "Observation.derivedFrom",
      "requirements" : "EHDSObservation.derivedFrom[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/eu/StructureDefinition/medicalTestResult-eu-core|2.0.0-ballot",
        "http://hl7.org/fhir/StructureDefinition/ImagingStudy|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/DocumentReference|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse|5.0.0"]
      }]
    },
    {
      "id" : "Observation.component",
      "path" : "Observation.component",
      "requirements" : "EHDSObservation.component"
    },
    {
      "id" : "Observation.component.code",
      "path" : "Observation.component.code",
      "requirements" : "EHDSObservation.component.code",
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-obsCode-eu-lab"
      }
    },
    {
      "id" : "Observation.component.value[x]",
      "path" : "Observation.component.value[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "requirements" : "EHDSObservation.component.result.value[x]"
    },
    {
      "id" : "Observation.component.value[x]:valueQuantity",
      "path" : "Observation.component.value[x]",
      "sliceName" : "valueQuantity",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity"
      }]
    },
    {
      "id" : "Observation.component.value[x]:valueQuantity.extension:uncertainty",
      "path" : "Observation.component.value[x].extension",
      "sliceName" : "uncertainty",
      "requirements" : "EHDSObservation.component.result.uncertainty",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/iso21090-uncertainty|5.2.0"]
      }]
    },
    {
      "id" : "Observation.component.dataAbsentReason",
      "path" : "Observation.component.dataAbsentReason",
      "requirements" : "EHDSObservation.component.dataAbsentReason"
    },
    {
      "id" : "Observation.component.interpretation",
      "path" : "Observation.component.interpretation",
      "requirements" : "EHDSObservation.component.interpretation"
    },
    {
      "id" : "Observation.component.referenceRange",
      "path" : "Observation.component.referenceRange",
      "requirements" : "EHDSObservation.component.referenceRange"
    }]
  }
}

```
