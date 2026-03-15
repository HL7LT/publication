# Substance: Specimen Additive Substance (Eu Lab) - HL7 Europe IG Snapshot v0.0.2

## Resursų profilis: Substance: Specimen Additive Substance (Eu Lab) 

 
This profile defines how to represent Specimen Additive Substances in HL7 FHIR for the purpose of this guide. 

**Usages:**

* Refer to this Profile: [Specimen: Laboratory (Eu Lab)](StructureDefinition-Specimen-eu-lab.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/Substance-additive-eu-lab)

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

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

#### Terminology Bindings (Differential)

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-Substance-additive-eu-lab.csv), [Excel](../StructureDefinition-Substance-additive-eu-lab.xlsx), [Schematron](../StructureDefinition-Substance-additive-eu-lab.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "Substance-additive-eu-lab",
  "language" : "en",
  "url" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Substance-additive-eu-lab",
  "version" : "0.2.0-ci",
  "name" : "SpecimenAdditiveSubstance",
  "title" : "Substance: Specimen Additive Substance (Eu Lab)",
  "status" : "draft",
  "date" : "2026-03-15T21:19:00+02:00",
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
  "description" : "This profile defines how to represent Specimen Additive Substances in HL7 FHIR for the purpose of this guide.",
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
  },
  {
    "identity" : "orim",
    "uri" : "http://hl7.org/orim",
    "name" : "Ontological RIM Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Substance",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Substance|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Substance",
      "path" : "Substance"
    },
    {
      "id" : "Substance.code",
      "path" : "Substance.code",
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-specimenAdditive-eu-lab"
      }
    }]
  }
}

```
