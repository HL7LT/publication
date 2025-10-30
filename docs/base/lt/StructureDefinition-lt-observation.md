# LT Base Observation - Lithuanian Base Implementation Guide v0.2.0

## Resursų profilis: LT Base Observation ( Eksperimentinis ) 

 
Lithuanian Base Observation profile, used to represent vitals, demographic, clinical and laboratory observations 

**Usages:**

* Refer to this Profile: [LT Base Encounter](StructureDefinition-lt-encounter.md) and [LT Base Observation](StructureDefinition-lt-observation.md)
* Examples for this Profile: [Observation/example-LTBaseobservation-blood-pressure](Observation-example-LTBaseobservation-blood-pressure.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/lt-observation)

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

**Summary**

Must-Support: 32 elements

**Structures**

This structure refers to these other structures:

* [LT Base Observation(https://hl7.lt/fhir/base/StructureDefinition/lt-observation|0.2.0)](StructureDefinition-lt-observation.md)
* [LT Base Patient(https://hl7.lt/fhir/base/StructureDefinition/lt-patient|0.2.0)](StructureDefinition-lt-patient.md)
* [LT Base Organization(https://hl7.lt/fhir/base/StructureDefinition/lt-organization|0.2.0)](StructureDefinition-lt-organization.md)
* [Procedure(http://hl7.org/fhir/StructureDefinition/Procedure|5.0.0)](http://hl7.org/fhir/R5/procedure.html)
* [Medication(http://hl7.org/fhir/StructureDefinition/Medication|5.0.0)](http://hl7.org/fhir/R5/medication.html)
* [LT Base Encounter(https://hl7.lt/fhir/base/StructureDefinition/lt-encounter|0.2.0)](StructureDefinition-lt-encounter.md)
* [LT Base Practitioner(https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner|0.2.0)](StructureDefinition-lt-practitioner.md)
* [LT Base Practitioner Role(https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner-role|0.2.0)](StructureDefinition-lt-practitioner-role.md)
* [BodyStructure (EU core)(http://hl7.eu/fhir/base-r5/StructureDefinition/bodyStructure-eu-core|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-bodyStructure-eu-core.html)
* [QuestionnaireResponse(http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse|5.0.0)](http://hl7.org/fhir/R5/questionnaireresponse.html)
* [DocumentReference(http://hl7.org/fhir/StructureDefinition/DocumentReference|5.0.0)](http://hl7.org/fhir/R5/documentreference.html)
* [ImagingStudy(http://hl7.org/fhir/StructureDefinition/ImagingStudy|5.0.0)](http://hl7.org/fhir/R5/imagingstudy.html)

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

**Summary**

Must-Support: 32 elements

**Structures**

This structure refers to these other structures:

* [LT Base Observation(https://hl7.lt/fhir/base/StructureDefinition/lt-observation|0.2.0)](StructureDefinition-lt-observation.md)
* [LT Base Patient(https://hl7.lt/fhir/base/StructureDefinition/lt-patient|0.2.0)](StructureDefinition-lt-patient.md)
* [LT Base Organization(https://hl7.lt/fhir/base/StructureDefinition/lt-organization|0.2.0)](StructureDefinition-lt-organization.md)
* [Procedure(http://hl7.org/fhir/StructureDefinition/Procedure|5.0.0)](http://hl7.org/fhir/R5/procedure.html)
* [Medication(http://hl7.org/fhir/StructureDefinition/Medication|5.0.0)](http://hl7.org/fhir/R5/medication.html)
* [LT Base Encounter(https://hl7.lt/fhir/base/StructureDefinition/lt-encounter|0.2.0)](StructureDefinition-lt-encounter.md)
* [LT Base Practitioner(https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner|0.2.0)](StructureDefinition-lt-practitioner.md)
* [LT Base Practitioner Role(https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner-role|0.2.0)](StructureDefinition-lt-practitioner-role.md)
* [BodyStructure (EU core)(http://hl7.eu/fhir/base-r5/StructureDefinition/bodyStructure-eu-core|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-bodyStructure-eu-core.html)
* [QuestionnaireResponse(http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse|5.0.0)](http://hl7.org/fhir/R5/questionnaireresponse.html)
* [DocumentReference(http://hl7.org/fhir/StructureDefinition/DocumentReference|5.0.0)](http://hl7.org/fhir/R5/documentreference.html)
* [ImagingStudy(http://hl7.org/fhir/StructureDefinition/ImagingStudy|5.0.0)](http://hl7.org/fhir/R5/imagingstudy.html)

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-lt-observation.csv), [Excel](../StructureDefinition-lt-observation.xlsx), [Schematron](../StructureDefinition-lt-observation.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "lt-observation",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/lt-observation",
  "version" : "0.2.0",
  "name" : "LTBaseObservation",
  "title" : "LT Base Observation",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-10-30T19:04:29+02:00",
  "publisher" : "Lithuanian Medical Library",
  "_publisher" : {
    "extension" : [
      {
        "extension" : [
          {
            "url" : "lang",
            "valueCode" : "lt"
          },
          {
            "url" : "content",
            "valueString" : "Lietuvos medicinos biblioteka"
          }
        ],
        "url" : "http://hl7.org/fhir/StructureDefinition/translation"
      }
    ]
  },
  "contact" : [
    {
      "name" : "Lithuanian Medical Library",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://medicinosnk.lt"
        },
        {
          "system" : "email",
          "value" : "info@medicinosnk.lt"
        }
      ]
    }
  ],
  "description" : "Lithuanian Base Observation profile, used to represent vitals, demographic, clinical and laboratory observations",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "LT"
        }
      ]
    }
  ],
  "fhirVersion" : "5.0.0",
  "mapping" : [
    {
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Observation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Observation|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation"
      },
      {
        "id" : "Observation.identifier",
        "path" : "Observation.identifier",
        "mustSupport" : true
      },
      {
        "id" : "Observation.instantiates[x]",
        "path" : "Observation.instantiates[x]",
        "mustSupport" : true
      },
      {
        "id" : "Observation.basedOn",
        "path" : "Observation.basedOn",
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.triggeredBy",
        "path" : "Observation.triggeredBy",
        "mustSupport" : true
      },
      {
        "id" : "Observation.triggeredBy.observation",
        "path" : "Observation.triggeredBy.observation",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/base/StructureDefinition/lt-observation|0.2.0"
            ]
          }
        ]
      },
      {
        "id" : "Observation.triggeredBy.reason",
        "path" : "Observation.triggeredBy.reason",
        "mustSupport" : true
      },
      {
        "id" : "Observation.partOf",
        "path" : "Observation.partOf",
        "mustSupport" : true
      },
      {
        "id" : "Observation.status",
        "path" : "Observation.status",
        "mustSupport" : true
      },
      {
        "id" : "Observation.category",
        "path" : "Observation.category",
        "mustSupport" : true
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "mustSupport" : true
      },
      {
        "id" : "Observation.subject",
        "path" : "Observation.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/base/StructureDefinition/lt-patient|0.2.0",
              "https://hl7.lt/fhir/base/StructureDefinition/lt-organization|0.2.0",
              "http://hl7.org/fhir/StructureDefinition/Procedure|5.0.0",
              "http://hl7.org/fhir/StructureDefinition/Medication|5.0.0"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.focus",
        "path" : "Observation.focus",
        "mustSupport" : true
      },
      {
        "id" : "Observation.encounter",
        "path" : "Observation.encounter",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/base/StructureDefinition/lt-encounter|0.2.0"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.effective[x]",
        "path" : "Observation.effective[x]",
        "mustSupport" : true
      },
      {
        "id" : "Observation.issued",
        "path" : "Observation.issued",
        "mustSupport" : true
      },
      {
        "id" : "Observation.performer",
        "path" : "Observation.performer",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner|0.2.0",
              "https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner-role|0.2.0",
              "https://hl7.lt/fhir/base/StructureDefinition/lt-organization|0.2.0"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.value[x]",
        "path" : "Observation.value[x]",
        "mustSupport" : true
      },
      {
        "id" : "Observation.dataAbsentReason",
        "path" : "Observation.dataAbsentReason",
        "mustSupport" : true
      },
      {
        "id" : "Observation.note",
        "path" : "Observation.note",
        "mustSupport" : true
      },
      {
        "id" : "Observation.bodyStructure",
        "path" : "Observation.bodyStructure",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.eu/fhir/base-r5/StructureDefinition/bodyStructure-eu-core|0.1.0"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.specimen",
        "path" : "Observation.specimen",
        "mustSupport" : true
      },
      {
        "id" : "Observation.device",
        "path" : "Observation.device",
        "mustSupport" : true
      },
      {
        "id" : "Observation.referenceRange",
        "path" : "Observation.referenceRange",
        "mustSupport" : true
      },
      {
        "id" : "Observation.referenceRange.low",
        "path" : "Observation.referenceRange.low",
        "mustSupport" : true
      },
      {
        "id" : "Observation.referenceRange.high",
        "path" : "Observation.referenceRange.high",
        "mustSupport" : true
      },
      {
        "id" : "Observation.referenceRange.normalValue",
        "path" : "Observation.referenceRange.normalValue",
        "mustSupport" : true
      },
      {
        "id" : "Observation.referenceRange.age",
        "path" : "Observation.referenceRange.age",
        "mustSupport" : true
      },
      {
        "id" : "Observation.referenceRange.text",
        "path" : "Observation.referenceRange.text",
        "mustSupport" : true
      },
      {
        "id" : "Observation.hasMember",
        "path" : "Observation.hasMember",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://hl7.lt/fhir/base/StructureDefinition/lt-observation|0.2.0",
              "http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse|5.0.0"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.derivedFrom",
        "path" : "Observation.derivedFrom",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/StructureDefinition/DocumentReference|5.0.0",
              "http://hl7.org/fhir/StructureDefinition/ImagingStudy|5.0.0",
              "http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse|5.0.0",
              "https://hl7.lt/fhir/base/StructureDefinition/lt-observation|0.2.0"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.component",
        "path" : "Observation.component",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component.code",
        "path" : "Observation.component.code",
        "mustSupport" : true
      },
      {
        "id" : "Observation.component.value[x]",
        "path" : "Observation.component.value[x]",
        "mustSupport" : true
      }
    ]
  }
}

```
