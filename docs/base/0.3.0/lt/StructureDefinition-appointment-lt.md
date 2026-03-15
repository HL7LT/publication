# AppointmentLt - Lithuanian Base Implementation Guide v0.3.0

## Resursų profilis: AppointmentLt 

 
Lithuanian Base Appointment profile, used for planing visit to healthcare services. 

**Usages:**

* Refer to this Profile: [AppointmentLt](StructureDefinition-appointment-lt.md), [CarePlanLt](StructureDefinition-care-plan-lt.md), [DocumentReferenceLt](StructureDefinition-document-reference-lt.md) and [ImagingStudyLt](StructureDefinition-imagingstudy-lt.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.base|current/StructureDefinition/appointment-lt)

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

Must-Support: 10 elements

**Structures**

This structure refers to these other structures:

* [AppointmentLt (https://hl7.lt/fhir/base/StructureDefinition/appointment-lt|0.3.0)](StructureDefinition-appointment-lt.md)
* [PatientLt (https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0)](StructureDefinition-patient-lt.md)
* [PractitionerLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0)](StructureDefinition-practitioner-lt.md)
* [PractitionerRoleLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0)](StructureDefinition-practitioner-role-lt.md)
* [RelatedPersonLt (https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0)](StructureDefinition-related-person-lt.md)
* [CareTeamLt (https://hl7.lt/fhir/base/StructureDefinition/care-team-lt|0.3.0)](StructureDefinition-care-team-lt.md)
* [LocationLt (https://hl7.lt/fhir/base/StructureDefinition/location-lt|0.3.0)](StructureDefinition-location-lt.md)
* [HealthcareServiceLt (https://hl7.lt/fhir/base/StructureDefinition/healthcare-service-lt|0.3.0)](StructureDefinition-healthcare-service-lt.md)
* [Group (http://hl7.org/fhir/StructureDefinition/Group|5.0.0)](http://hl7.org/fhir/R5/group.html)
* [Device (http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

#### Terminology Bindings (Differential)

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

** Summary **

Must-Support: 10 elements

**Structures**

This structure refers to these other structures:

* [AppointmentLt (https://hl7.lt/fhir/base/StructureDefinition/appointment-lt|0.3.0)](StructureDefinition-appointment-lt.md)
* [PatientLt (https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0)](StructureDefinition-patient-lt.md)
* [PractitionerLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0)](StructureDefinition-practitioner-lt.md)
* [PractitionerRoleLt (https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0)](StructureDefinition-practitioner-role-lt.md)
* [RelatedPersonLt (https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0)](StructureDefinition-related-person-lt.md)
* [CareTeamLt (https://hl7.lt/fhir/base/StructureDefinition/care-team-lt|0.3.0)](StructureDefinition-care-team-lt.md)
* [LocationLt (https://hl7.lt/fhir/base/StructureDefinition/location-lt|0.3.0)](StructureDefinition-location-lt.md)
* [HealthcareServiceLt (https://hl7.lt/fhir/base/StructureDefinition/healthcare-service-lt|0.3.0)](StructureDefinition-healthcare-service-lt.md)
* [Group (http://hl7.org/fhir/StructureDefinition/Group|5.0.0)](http://hl7.org/fhir/R5/group.html)
* [Device (http://hl7.org/fhir/StructureDefinition/Device|5.0.0)](http://hl7.org/fhir/R5/device.html)

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-appointment-lt.csv), [Excel](../StructureDefinition-appointment-lt.xlsx), [Schematron](../StructureDefinition-appointment-lt.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "appointment-lt",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/base/StructureDefinition/appointment-lt",
  "version" : "0.3.0",
  "name" : "AppointmentLt",
  "title" : "AppointmentLt",
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
  "description" : "Lithuanian Base Appointment profile, used for planing visit to healthcare services.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "LT"
    }]
  }],
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
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "ical",
    "uri" : "http://ietf.org/rfc/2445",
    "name" : "iCalendar"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 V2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Appointment",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Appointment|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Appointment",
      "path" : "Appointment"
    },
    {
      "id" : "Appointment.status",
      "path" : "Appointment.status",
      "mustSupport" : true
    },
    {
      "id" : "Appointment.class",
      "path" : "Appointment.class",
      "mustSupport" : true,
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://terminology.hl7.org/ValueSet/encounter-class|2.0.1"
      }
    },
    {
      "id" : "Appointment.serviceCategory",
      "path" : "Appointment.serviceCategory",
      "mustSupport" : true
    },
    {
      "id" : "Appointment.specialty",
      "path" : "Appointment.specialty",
      "mustSupport" : true
    },
    {
      "id" : "Appointment.appointmentType",
      "path" : "Appointment.appointmentType",
      "mustSupport" : true
    },
    {
      "id" : "Appointment.replaces",
      "path" : "Appointment.replaces",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/appointment-lt|0.3.0"]
      }]
    },
    {
      "id" : "Appointment.start",
      "path" : "Appointment.start",
      "mustSupport" : true
    },
    {
      "id" : "Appointment.end",
      "path" : "Appointment.end",
      "mustSupport" : true
    },
    {
      "id" : "Appointment.note",
      "path" : "Appointment.note",
      "mustSupport" : true
    },
    {
      "id" : "Appointment.participant",
      "path" : "Appointment.participant",
      "mustSupport" : true
    },
    {
      "id" : "Appointment.participant.actor",
      "path" : "Appointment.participant.actor",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["https://hl7.lt/fhir/base/StructureDefinition/patient-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/practitioner-role-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/related-person-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/care-team-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/location-lt|0.3.0",
        "https://hl7.lt/fhir/base/StructureDefinition/healthcare-service-lt|0.3.0",
        "http://hl7.org/fhir/StructureDefinition/Group|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/Device|5.0.0"]
      }]
    },
    {
      "id" : "Appointment.participant.status",
      "path" : "Appointment.participant.status",
      "mustSupport" : true
    }]
  }
}

```
