# IM Instance Description - HL7 Europe General Implementation Guide v0.0.1

## Pratęsimas: IM Instance Description 

A description of the instance in an ImagingStudy.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [IM Imaging Study](StructureDefinition-ImImagingStudy.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/instance-description)

### Išplėtimų turinio formaliosios peržiūros

 [Profilių, skirtumų rinkinių, momentinių kopijų aprašas ir jų reprezentacijos](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Skirtumų rinkinių lentelė](#tabs-diff) 
*  [Momentinės kopijos lentelė](#tabs-snap) 
*  [Statistika/Nuorodos](#tabs-summ) 
*  [Viskas](#tabs-all) 

#### Constraints

** Summary **

Simple Extension with the type string: A description of the instance in an ImagingStudy.

 **Skirtumų rinkinių peržiūraDifferential View** 

 **Momentinės kopijos peržiūra** 

#### Constraints

** Summary **

Simple Extension with the type string: A description of the instance in an ImagingStudy.

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-instance-description.csv), [Excel](../StructureDefinition-instance-description.xlsx), [Schematron](../StructureDefinition-instance-description.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "instance-description",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-bind"
  }],
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/instance-description",
  "version" : "0.1.0-ballot",
  "name" : "ImImagingStudyInstanceDescription",
  "title" : "IM Instance Description",
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
  "description" : "A description of the instance in an ImagingStudy.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "EU"
    }]
  }],
  "copyright" : "Used by permission of HL7 Europe, all rights reserved Creative Commons License",
  "fhirVersion" : "5.0.0",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "ImagingStudy.series.instance"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Instance Description",
      "definition" : "A description of the instance in an ImagingStudy."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/instance-description"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
