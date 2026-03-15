# OrganizationLt - Lithuanian Base Implementation Guide v0.3.0

## Resursų profilis: OrganizationLt 

 
Lithuanian Base Organization profile, used to define healthcare organizations and sub-units 

**Usages:**

* Refer to this Profile: [CareTeamLt](StructureDefinition-care-team-lt.md), [CompositionLt](StructureDefinition-composition-lt.md), [DiagnosticReportLt](StructureDefinition-diagnostic-report-lt.md), [DocumentReferenceLt](StructureDefinition-document-reference-lt.md)... Show 12 more, [EpisodeOfCareLt](StructureDefinition-episode-of-care-lt.md), [FamilyMemberHistoryLt](StructureDefinition-family-member-history-lt.md), [GoalLt](StructureDefinition-goal-lt.md), [HealthcareServiceLt](StructureDefinition-healthcare-service-lt.md), [ImagingStudyLt](StructureDefinition-imagingstudy-lt.md), [ObservationLt](StructureDefinition-observation-lt.md), [OrganizationLt](StructureDefinition-organization-lt.md), [PatientLt](StructureDefinition-patient-lt.md), [PractitionerLt](StructureDefinition-practitioner-lt.md), [PractitionerRoleLt](StructureDefinition-practitioner-role-lt.md), [ProcedureLt](StructureDefinition-procedure-lt.md) and [ServiceRequestLt](StructureDefinition-service-request-lt.md)
* Examples for this Profile: [Lietuvos Medicinos biblioteka](Organization-organization-example.md) and [Vilniaus miesto ligoninė](Organization-organization-vilnius-hospital-example.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/organization-lt)

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

Mandatory: 2 elements(3 nested mandatory elements)
 Must-Support: 14 elements
 Fixed: 2 elements

**Structures**

This structure refers to these other structures:

* [OrganizationLt (https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0)](StructureDefinition-organization-lt.md)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/translation|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-translation.html)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Organization.contact.telecom

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

#### Terminology Bindings (Differential)

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Mandatory: 2 elements(3 nested mandatory elements)
 Must-Support: 14 elements
 Fixed: 2 elements

**Structures**

This structure refers to these other structures:

* [OrganizationLt (https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0)](StructureDefinition-organization-lt.md)

**Extensions**

This structure refers to these extensions:

* [http://hl7.org/fhir/StructureDefinition/translation|5.2.0](http://hl7.org/fhir/extensions/5.2.0/StructureDefinition-translation.html)

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Organization.contact.telecom

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-organization-lt.csv), [Excel](../StructureDefinition-organization-lt.xlsx), [Schematron](../StructureDefinition-organization-lt.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "organization-lt",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/organization-lt",
  "version" : "0.3.0",
  "name" : "OrganizationLt",
  "title" : "OrganizationLt",
  "status" : "active",
  "date" : "2026-03-15T18:57:53+02:00",
  "publisher" : "Lithuanian Medical Library",
  "_publisher" : {
    "extension" : [{
      "extension" : [{
        "url" : "lang",
        "valueCode" : "lt"
      },
      {
        "url" : "content",
        "valueString" : "Lietuvos medicinos biblioteka"
      }],
      "url" : "http://hl7.org/fhir/StructureDefinition/translation"
    }]
  },
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
  "description" : "Lithuanian Base Organization profile, used to define healthcare organizations and sub-units",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "LT"
    }]
  }],
  "fhirVersion" : "5.0.0",
  "mapping" : [{
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
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
    "identity" : "interface",
    "uri" : "http://hl7.org/fhir/interface",
    "name" : "Interface Pattern"
  },
  {
    "identity" : "servd",
    "uri" : "http://www.omg.org/spec/ServD/1.0/",
    "name" : "ServD"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Organization",
  "baseDefinition" : "http://hl7.eu/fhir/base-r5/StructureDefinition/organization-eu-core|0.1.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Organization",
      "path" : "Organization"
    },
    {
      "id" : "Organization.identifier",
      "path" : "Organization.identifier",
      "short" : "Įstaigos identifikatorius",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Organization.identifier.system",
      "path" : "Organization.identifier.system",
      "mustSupport" : true,
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "https://tx.hl7.lt/fhir/ValueSet/organization-identifier|1.0.0"
      }
    },
    {
      "id" : "Organization.identifier.value",
      "path" : "Organization.identifier.value",
      "mustSupport" : true
    },
    {
      "id" : "Organization.active",
      "path" : "Organization.active",
      "short" : "Ar įstaiga yra veikianti / Whether the organization's record is still in active use",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Organization.name",
      "path" : "Organization.name",
      "short" : "Name organizations (in Lithuanian)",
      "mustSupport" : true
    },
    {
      "id" : "Organization.name.extension",
      "path" : "Organization.name.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "short" : "Name organizations (in English)"
    },
    {
      "id" : "Organization.name.extension:translation",
      "path" : "Organization.name.extension",
      "sliceName" : "translation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/translation|5.2.0"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Organization.contact",
      "path" : "Organization.contact",
      "short" : "Įstaigos kontaktinė informacija / Official contact details for the Organization",
      "mustSupport" : true
    },
    {
      "id" : "Organization.contact.telecom",
      "path" : "Organization.contact.telecom",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "system"
        }],
        "rules" : "open"
      },
      "short" : "Contact details (phone/email and more)"
    },
    {
      "id" : "Organization.contact.telecom.system",
      "path" : "Organization.contact.telecom.system",
      "mustSupport" : true
    },
    {
      "id" : "Organization.contact.telecom.value",
      "path" : "Organization.contact.telecom.value",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Organization.contact.telecom.use",
      "path" : "Organization.contact.telecom.use",
      "mustSupport" : true
    },
    {
      "id" : "Organization.contact.telecom:phone",
      "path" : "Organization.contact.telecom",
      "sliceName" : "phone",
      "short" : "Telefono numeris / Phone number",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Organization.contact.telecom:phone.system",
      "path" : "Organization.contact.telecom.system",
      "min" : 1,
      "fixedCode" : "phone"
    },
    {
      "id" : "Organization.contact.telecom:email",
      "path" : "Organization.contact.telecom",
      "sliceName" : "email",
      "short" : "Elektroninio pašto adresas / Email",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Organization.contact.telecom:email.system",
      "path" : "Organization.contact.telecom.system",
      "min" : 1,
      "fixedCode" : "email"
    },
    {
      "id" : "Organization.contact.address",
      "path" : "Organization.contact.address",
      "short" : "Įstaigos adresas / Adress",
      "mustSupport" : true
    },
    {
      "id" : "Organization.partOf",
      "path" : "Organization.partOf",
      "short" : "Įstaiga, kuriai priklausi ši įstaiga/padalinys / The organization of which this organization forms a part.",
      "type" : [{
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-hierarchy",
          "valueBoolean" : true
        }],
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/organization-lt|0.3.0"]
      }],
      "mustSupport" : true
    }]
  }
}

```
