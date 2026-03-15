# EU Media.view extension - HL7 Europe IG Snapshot v0.0.1

## Pratęsimas: EU Media.view extension 

This cross version extension includes the FHIR R4 version of the Media.view field which has at this point in time (April 18, 2025), not yet been included in the extension pack.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [EU DocumentReference](StructureDefinition-DocumentReferenceEu.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/CrossVersionMediaViewExtension)

### Išplėtimų turinio formaliosios peržiūros

 [Profilių, skirtumų rinkinių, momentinių kopijų aprašas ir jų reprezentacijos](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

*  [Skirtumų rinkinių lentelė](#tabs-diff) 
*  [Momentinės kopijos lentelė](#tabs-snap) 
*  [Statistika/Nuorodos](#tabs-summ) 
*  [Viskas](#tabs-all) 

#### Terminology Bindings (Differential)

#### Terminology Bindings

#### Constraints

** Summary **

Simple Extension with the type CodeableConcept: This cross version extension includes the FHIR R4 version of the Media.view field which has at this point in time (April 18, 2025), not yet been included in the extension pack.

 **Skirtumų rinkinių peržiūraDifferential View** 

#### Terminology Bindings (Differential)

 **Momentinės kopijos peržiūra** 

#### Terminology Bindings

#### Constraints

** Summary **

Simple Extension with the type CodeableConcept: This cross version extension includes the FHIR R4 version of the Media.view field which has at this point in time (April 18, 2025), not yet been included in the extension pack.

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-CrossVersionMediaViewExtension.csv), [Excel](../StructureDefinition-CrossVersionMediaViewExtension.xlsx), [Schematron](../StructureDefinition-CrossVersionMediaViewExtension.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "CrossVersionMediaViewExtension",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-bind"
  }],
  "url" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/CrossVersionMediaViewExtension",
  "version" : "0.1.0-ballot",
  "name" : "CrossVersionMediaViewExtension",
  "title" : "EU Media.view extension",
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
  "description" : "This cross version extension includes the FHIR R4 version of the Media.view field which has at this point in time (April 18, 2025), not yet been included in the extension pack.",
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
    "expression" : "DocumentReference"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Media.view extension",
      "definition" : "This cross version extension includes the FHIR R4 version of the Media.view field which has at this point in time (April 18, 2025), not yet been included in the extension pack."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.eu/fhir/imaging-r5/StructureDefinition/CrossVersionMediaViewExtension"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://hl7.eu/fhir/imaging-r5/ValueSet/media-view"
      }
    }]
  }
}

```
