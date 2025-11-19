# Body Position Extension - Lithuanian Vital Signs Implementation Guide v0.0.1

## Pratęsimas: Body Position Extension 

The position of the body when the observation was done, e.g. standing, sitting. To be used only when the body position in not precoordinated in the observation code.

**Context of Use**

**Usage info**

**Usages:**

* This Extension is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.vitalsigns|current/StructureDefinition/body-position)

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

Simple Extension with the type base64Binary, boolean, canonical, code, date, dateTime, decimal, id, instant, integer, integer64, markdown, oid, positiveInt, string, time, unsignedInt, uri, url, uuid, Address, Age, Annotation, Attachment, CodeableConcept, CodeableReference, Coding, ContactPoint, Count, Distance, Duration, HumanName, Identifier, Money, Period, Quantity, Range, Ratio, RatioRange, Reference, SampledData, Signature, Timing, ContactDetail, DataRequirement, Expression, ParameterDefinition, RelatedArtifact, TriggerDefinition, UsageContext, Availability, ExtendedContactDetail, Dosage, Meta: The position of the body when the observation was done, e.g. standing, sitting. To be used only when the body position in not precoordinated in the observation code.

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 3

 **Skirtumų rinkinių peržiūraDifferential View** 

#### Terminology Bindings (Differential)

 **Momentinės kopijos peržiūra** 

#### Terminology Bindings

#### Constraints

**Summary**

Simple Extension with the type base64Binary, boolean, canonical, code, date, dateTime, decimal, id, instant, integer, integer64, markdown, oid, positiveInt, string, time, unsignedInt, uri, url, uuid, Address, Age, Annotation, Attachment, CodeableConcept, CodeableReference, Coding, ContactPoint, Count, Distance, Duration, HumanName, Identifier, Money, Period, Quantity, Range, Ratio, RatioRange, Reference, SampledData, Signature, Timing, ContactDetail, DataRequirement, Expression, ParameterDefinition, RelatedArtifact, TriggerDefinition, UsageContext, Availability, ExtendedContactDetail, Dosage, Meta: The position of the body when the observation was done, e.g. standing, sitting. To be used only when the body position in not precoordinated in the observation code.

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 3

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-body-position.csv), [Excel](../StructureDefinition-body-position.xlsx), [Schematron](../StructureDefinition-body-position.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "body-position",
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
  "url" : "https://hl7.lt/fhir/vitalsigns/StructureDefinition/body-position",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.840.1.113883.4.642.5.1472"
    }
  ],
  "version" : "5.1.0",
  "name" : "BodyPosition",
  "title" : "Body Position Extension",
  "status" : "draft",
  "experimental" : false,
  "date" : "2015-03-02",
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
  "description" : "The position of the body when the observation was done, e.g. standing, sitting. To be used only when the body position in not precoordinated in the observation code.",
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
      "expression" : "Observation"
    },
    {
      "type" : "element",
      "expression" : "Specimen.collection"
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
        "short" : "The body position during the observation",
        "definition" : "The position of the body when the observation was done, e.g. standing, sitting. To be used only when the body position in not precoordinated in the observation code.",
        "max" : "1"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "https://hl7.lt/fhir/vitalsigns/StructureDefinition/body-position"
      },
      {
        "id" : "Extension.value[x]:valueCodeableConcept",
        "path" : "Extension.value[x]",
        "sliceName" : "valueCodeableConcept",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/vital-signs-body-position|1.0.0"
        }
      }
    ]
  }
}

```
