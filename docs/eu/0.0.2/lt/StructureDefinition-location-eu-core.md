# Location (EU core) - HL7 Europe IG Snapshot v0.0.2

## Resursų profilis: Location (EU core) 

 
This profile sets minimum expectations for the Location resource to be used for the purpose of this guide. 

**Usages:**

* Refer to this Profile: [MedicalTestResult (EU core)](StructureDefinition-medicalTestResult-eu-core.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/location-eu-core)

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

**Structures**

This structure refers to these other structures:

* [Address (EU) (http://hl7.eu/fhir/base-r5/StructureDefinition/Address-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-Address-eu.html)

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 2

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

**Structures**

This structure refers to these other structures:

* [Address (EU) (http://hl7.eu/fhir/base-r5/StructureDefinition/Address-eu|0.1.0)](http://hl7.eu/fhir/base-r5/0.1.0/StructureDefinition-Address-eu.html)

**[Maturity](http://hl7.org/fhir/versions.html#maturity)**: 2

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-location-eu-core.csv), [Excel](../StructureDefinition-location-eu-core.xlsx), [Schematron](../StructureDefinition-location-eu-core.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "location-eu-core",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 2
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "trial-use"
  }],
  "url" : "http://hl7.eu/fhir/base-r5/StructureDefinition/location-eu",
  "version" : "2.0.0-ballot",
  "name" : "LocationEuCore",
  "title" : "Location (EU core)",
  "status" : "active",
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
  "description" : "This profile sets minimum expectations for the Location resource to be used for the purpose of this guide.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "EU"
    }]
  }],
  "copyright" : "Copyright HL7 Europe. Licensed under creative commons public domain (CC0 1.0).",
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
    "identity" : "interface",
    "uri" : "http://hl7.org/fhir/interface",
    "name" : "Interface Pattern"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Location",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Location|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Location",
      "path" : "Location"
    },
    {
      "id" : "Location.identifier",
      "path" : "Location.identifier",
      "short" : "Location identifier"
    },
    {
      "id" : "Location.name",
      "path" : "Location.name",
      "short" : "Location name"
    },
    {
      "id" : "Location.type",
      "path" : "Location.type",
      "short" : "Location type"
    },
    {
      "id" : "Location.contact",
      "path" : "Location.contact",
      "short" : "Location telecom"
    },
    {
      "id" : "Location.address",
      "path" : "Location.address",
      "type" : [{
        "code" : "Address",
        "profile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/Address-eu|0.1.0"]
      }]
    },
    {
      "id" : "Location.managingOrganization",
      "path" : "Location.managingOrganization",
      "short" : "Managing organization",
      "comment" : "The managing organization is the organization responsible for the location, such as a hospital or clinic."
    },
    {
      "id" : "Location.partOf",
      "path" : "Location.partOf",
      "short" : "Location this one is physically a part of"
    }]
  }
}

```
