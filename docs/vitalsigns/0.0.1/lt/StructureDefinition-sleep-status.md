# Sleep Status Extension - Lithuanian Vital Signs Implementation Guide v0.0.1

## Pratęsimas: Sleep Status Extension 

The state of wakefulness during the measurement.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [Blood Pressure Panel](StructureDefinition-blood-pressure-panel.md) and [Heart Rate](StructureDefinition-heart-rate.md)
* Examples for this Extension: [Observation/example-heart-rate](Observation-example-heart-rate.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.vitalsigns|current/StructureDefinition/sleep-status)

### Išplėtimų turinio formaliosios peržiūros

 [Profilių, skirtumų rinkinių, momentinių kopijų aprašas ir jų reprezentacijos](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Skirtumų rinkinių lentelė](#tabs-diff) 
*  [Momentinės kopijos lentelė](#tabs-snap) 
*  [Statistika/Nuorodos](#tabs-summ) 
*  [ViskasAll](#tabs-all) 

#### Terminology Bindings (Differential)

#### Terminology Bindings

#### Constraints

**Summary**

Simple Extension with the type base64Binary, boolean, canonical, code, date, dateTime, decimal, id, instant, integer, integer64, markdown, oid, positiveInt, string, time, unsignedInt, uri, url, uuid, Address, Age, Annotation, Attachment, CodeableConcept, CodeableReference, Coding, ContactPoint, Count, Distance, Duration, HumanName, Identifier, Money, Period, Quantity, Range, Ratio, RatioRange, Reference, SampledData, Signature, Timing, ContactDetail, DataRequirement, Expression, ParameterDefinition, RelatedArtifact, TriggerDefinition, UsageContext, Availability, ExtendedContactDetail, Dosage, Meta: The state of wakefulness during the measurement.

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 3

 **Skirtumų rinkinių peržiūraDifferential View** 

#### Terminology Bindings (Differential)

 **Momentinės kopijos peržiūra** 

#### Terminology Bindings

#### Constraints

**Summary**

Simple Extension with the type base64Binary, boolean, canonical, code, date, dateTime, decimal, id, instant, integer, integer64, markdown, oid, positiveInt, string, time, unsignedInt, uri, url, uuid, Address, Age, Annotation, Attachment, CodeableConcept, CodeableReference, Coding, ContactPoint, Count, Distance, Duration, HumanName, Identifier, Money, Period, Quantity, Range, Ratio, RatioRange, Reference, SampledData, Signature, Timing, ContactDetail, DataRequirement, Expression, ParameterDefinition, RelatedArtifact, TriggerDefinition, UsageContext, Availability, ExtendedContactDetail, Dosage, Meta: The state of wakefulness during the measurement.

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 3

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-sleep-status.csv), [Excel](../StructureDefinition-sleep-status.xlsx), [Schematron](../StructureDefinition-sleep-status.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "sleep-status",
  "language" : "en",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-wg",
      "valueCode" : "oo"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 3
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
      "valueCode" : "trial-use"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
      "valueCode" : "can-bind"
    }
  ],
  "url" : "https://hl7.lt/fhir/vitalsigns/StructureDefinition/sleep-status",
  "version" : "2.0.0",
  "name" : "SleepStatus",
  "title" : "Sleep Status Extension",
  "status" : "draft",
  "date" : "2025-11-19T15:54:38+02:00",
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
  "description" : "The state of wakefulness during the measurement.",
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
  "copyright" : "Logica Health, all rights reserved Creative Commons License",
  "fhirVersion" : "5.0.0",
  "mapping" : [
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "Element"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "Sleep Status",
        "definition" : "The state of wakefulness during the measurement."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "https://hl7.lt/fhir/vitalsigns/StructureDefinition/sleep-status"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Extension.value[x]:valueCodeableConcept",
        "path" : "Extension.value[x]",
        "sliceName" : "valueCodeableConcept",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/vital-signs-sleep-status|1.0.0"
        }
      }
    ]
  }
}

```
