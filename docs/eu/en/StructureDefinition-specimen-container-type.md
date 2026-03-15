# Extension: Specimen Container Type - HL7 Europe IG Snapshot v0.0.1

## Extension: Extension: Specimen Container Type 

Type of container used for the specimen.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [Specimen: Laboratory (Eu Lab)](StructureDefinition-Specimen-eu-lab.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/specimen-container-type)

### Formal Views of Extension Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-specimen-container-type.csv), [Excel](../StructureDefinition-specimen-container-type.xlsx), [Schematron](../StructureDefinition-specimen-container-type.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "specimen-container-type",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-bind"
  }],
  "url" : "http://hl7.org/fhir/StructureDefinition/specimen-container-type",
  "version" : "5.2.0",
  "name" : "SpecimenContainerType",
  "title" : "Extension: Specimen Container Type",
  "status" : "draft",
  "experimental" : false,
  "date" : "2015-02-19",
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
  "description" : "Type of container used for the specimen.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "EU"
    }]
  }],
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
    "expression" : "Specimen.container"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Special handling of the specimen",
      "definition" : "Special handling during the collection, transport, or storage of the specimen."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org/fhir/StructureDefinition/specimen-container-type"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-specimenContainer-eu-lab"
      }
    }]
  }
}

```
