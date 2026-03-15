# Observation Results: laboratory (Eu Lab) - HL7 Europe General Implementation Guide v0.0.1

## Resource Profile: Observation Results: laboratory (Eu Lab) 

 
This profile constrains the Observation resource to represent results produced by laboratory tests or panels/studies for the HL7 Europe project. This observation may represent the result of a simple laboratory test such as hematocrit or it may group the set of results produced by a multi-test study or panel such as a complete blood count, a dynamic function test, a urine specimen study. In the latter case, the observation carries the overall conclusion of the study and or a global interpretation by the producer of the study, in the comment element; and references the atomic results of the study as "has-member" child observations. 

**Usages:**

* Refer to this Profile: [Composition: Laboratory Report (Eu Lab)](StructureDefinition-Composition-eu-lab.md), [DiagnosticReport: Laboratory Report (Eu Lab)](StructureDefinition-DiagnosticReport-eu-lab.md) and [Observation Results: laboratory (Eu Lab)](StructureDefinition-Observation-resultslab-eu-lab.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.eu|current/StructureDefinition/Observation-resultslab-eu-lab)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-Observation-resultslab-eu-lab.csv), [Excel](../StructureDefinition-Observation-resultslab-eu-lab.xlsx), [Schematron](../StructureDefinition-Observation-resultslab-eu-lab.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "Observation-resultslab-eu-lab",
  "language" : "en",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 2
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "trial-use"
  }],
  "url" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab",
  "version" : "0.2.0-ci",
  "name" : "ObservationResultsLaboratoryEu",
  "title" : "Observation Results: laboratory (Eu Lab)",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-03-15T14:53:25+02:00",
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
  "description" : "This profile constrains the Observation resource to represent results produced by laboratory tests or panels/studies for the  HL7 Europe project.\nThis observation may represent the result of a simple laboratory test such as hematocrit or it may group the set of results produced by a multi-test study or panel such as a complete blood count, a dynamic function test, a urine specimen study. In the latter case, the observation carries the overall conclusion of the study and or a global interpretation by the producer of the study, in the comment element; and references the atomic results of the study as \"has-member\" child observations.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "EU"
    }]
  }],
  "purpose" : "This profile constrains the Observation resource to represent a laboratory in vitro diagnostic test or panel/study. In case of a panel/study, the results of the panel appear as sub-observations. In this case this top-level Observation acts as a grouper of all the observations belonging to the panel or study.  The top-level observation may carry a conclusion in the value element and or a global interpretation by the producer of the study, in the comment element.",
  "copyright" : "Used by permission of HL7 Europe, all rights reserved Creative Commons License",
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Observation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Observation|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Observation",
      "path" : "Observation",
      "short" : "Laboratory result for a simple test or for a panel/study",
      "definition" : "This observation may represent the result of a simple laboratory test such as hematocrit or it may group the set of results produced by a multi-test study or panel such as a complete blood count, a dynamic function test, a urine specimen study. In the latter case, the observation carries the overall conclusion of the study and references the atomic results of the study as \"has-member\" child observations",
      "comment" : "Represents either a lab simple observation or the group of observations produced by a laboratory study.",
      "constraint" : [{
        "key" : "eu-lab-1",
        "severity" : "error",
        "human" : "If observation status is other then \"registered\" or \"cancelled\", at least one of these Observation elements shall be provided:  \"value\", \"dataAbsentReason\", \"hasMember\" or \"component\"",
        "expression" : "(status in ('registered'|'cancelled')) or value.exists() or hasMember.exists() or component.exists() or dataAbsentReason.exists()",
        "source" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab|0.2.0-ci"
      },
      {
        "key" : "eu-lab-2",
        "severity" : "error",
        "human" : "If observation has components and observation status is other then \"registered\" or \"cancelled\", at least one of these Observation.component elements shall be provided:  \"value\" or \"dataAbsentReason\"",
        "expression" : "component.exists() implies (status in ('registered'|'cancelled')) or component.value.exists() or component.dataAbsentReason.exists()",
        "source" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab|0.2.0-ci"
      }]
    },
    {
      "id" : "Observation.extension",
      "path" : "Observation.extension",
      "short" : "Laboratory Test Kit",
      "definition" : "The laboratory test kit used for this test."
    },
    {
      "id" : "Observation.status",
      "path" : "Observation.status",
      "short" : "Status of this observation (e.g. preliminary, final,...)"
    },
    {
      "id" : "Observation.category",
      "path" : "Observation.category",
      "slicing" : {
        "discriminator" : [{
          "type" : "pattern",
          "path" : "$this"
        }],
        "rules" : "open"
      },
      "comment" : "\"laboratory\" includes laboratory medicine and pathology",
      "min" : 1,
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://hl7.org/fhir/uv/ips/StructureDefinition/CodeableConcept-uv-ips|2.0.0"]
      }]
    },
    {
      "id" : "Observation.category:laboratory",
      "path" : "Observation.category",
      "sliceName" : "laboratory",
      "min" : 1,
      "max" : "1",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "laboratory"
        }]
      }
    },
    {
      "id" : "Observation.category:studyType",
      "path" : "Observation.category",
      "sliceName" : "studyType",
      "short" : "The way of grouping of the test results into clinically meaningful domains (e.g. hematology study, microbiology study, etc.)",
      "min" : 0,
      "max" : "*",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-studyType-eu-lab"
      }
    },
    {
      "id" : "Observation.category:specialty",
      "path" : "Observation.category",
      "sliceName" : "specialty",
      "short" : "The clinical domain of the laboratory performing the observation (e.g. microbiology, toxicology, chemistry)",
      "min" : 0,
      "max" : "*",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-specialty-eu-lab"
      }
    },
    {
      "id" : "Observation.code",
      "path" : "Observation.code",
      "definition" : "Describes what was observed. Sometimes this is called the observation \"name\".  In this profile this code represents either a simple laboratory test or a laboratory study with multiple child observations",
      "comment" : "In the context of this Observation-laboratory profile, when the observation plays the role of a grouper of member sub-observations, the code represent the group (for instance a panel code). In case no code is available, at least a text shall be provided.",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://hl7.org/fhir/uv/ips/StructureDefinition/CodeableConcept-uv-ips|2.0.0"]
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-obsCode-eu-lab"
      }
    },
    {
      "id" : "Observation.subject",
      "path" : "Observation.subject",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/patient-animal-eu-core|0.1.0",
        "http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0",
        "http://hl7.org/fhir/StructureDefinition/Group|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/Device|5.0.0",
        "http://hl7.org/fhir/StructureDefinition/Location|5.0.0"]
      }]
    },
    {
      "id" : "Observation.subject.reference",
      "path" : "Observation.subject.reference",
      "min" : 1
    },
    {
      "id" : "Observation.effective[x]",
      "path" : "Observation.effective[x]",
      "min" : 1,
      "type" : [{
        "code" : "dateTime"
      },
      {
        "code" : "Period"
      }]
    },
    {
      "id" : "Observation.effective[x].extension:data-absent-reason",
      "path" : "Observation.effective[x].extension",
      "sliceName" : "data-absent-reason",
      "short" : "effective[x] absence reason",
      "definition" : "Provides a reason why the effectiveTime is missing.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/data-absent-reason|5.2.0"]
      }]
    },
    {
      "id" : "Observation.issued",
      "path" : "Observation.issued",
      "short" : "Date/Time this result was made available"
    },
    {
      "id" : "Observation.performer",
      "path" : "Observation.performer",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/base-r5/StructureDefinition/practitionerRole-eu|0.1.0",
        "http://hl7.eu/fhir/base-r5/StructureDefinition/practitioner-eu|0.1.0",
        "http://hl7.eu/fhir/base-r5/StructureDefinition/organization-eu|0.1.0",
        "http://hl7.org/fhir/StructureDefinition/CareTeam|5.0.0",
        "http://hl7.eu/fhir/base-r5/StructureDefinition/patient-eu|0.1.0",
        "http://hl7.org/fhir/StructureDefinition/RelatedPerson|5.0.0"]
      }]
    },
    {
      "id" : "Observation.performer.extension:performerFunction",
      "path" : "Observation.performer.extension",
      "sliceName" : "performerFunction",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/event-performerFunction|5.2.0"]
      }]
    },
    {
      "id" : "Observation.value[x]",
      "path" : "Observation.value[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "rules" : "closed"
      }
    },
    {
      "id" : "Observation.value[x]:valueString",
      "path" : "Observation.value[x]",
      "sliceName" : "valueString",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "Observation.value[x]:valueRange",
      "path" : "Observation.value[x]",
      "sliceName" : "valueRange",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Range",
        "profile" : ["http://hl7.org/fhir/uv/ips/StructureDefinition/Range-uv-ips|1.1.0"]
      }]
    },
    {
      "id" : "Observation.value[x]:valueRatio",
      "path" : "Observation.value[x]",
      "sliceName" : "valueRatio",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Ratio",
        "profile" : ["http://hl7.eu/fhir/laboratory/StructureDefinition/Ratio-eu-lab|0.0.1"]
      }]
    },
    {
      "id" : "Observation.value[x]:valueTime",
      "path" : "Observation.value[x]",
      "sliceName" : "valueTime",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "time"
      }]
    },
    {
      "id" : "Observation.value[x]:valueDateTime",
      "path" : "Observation.value[x]",
      "sliceName" : "valueDateTime",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "Observation.value[x]:valuePeriod",
      "path" : "Observation.value[x]",
      "sliceName" : "valuePeriod",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Period"
      }]
    },
    {
      "id" : "Observation.value[x]:valueQuantity",
      "path" : "Observation.value[x]",
      "sliceName" : "valueQuantity",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity",
        "profile" : ["http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab|0.0.1"]
      }]
    },
    {
      "id" : "Observation.value[x]:valueCodeableConcept",
      "path" : "Observation.value[x]",
      "sliceName" : "valueCodeableConcept",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://hl7.org/fhir/uv/ips/StructureDefinition/CodeableConcept-uv-ips|2.0.0"]
      }],
      "binding" : {
        "extension" : [{
          "extension" : [{
            "url" : "purpose",
            "valueCode" : "candidate"
          },
          {
            "url" : "valueSet",
            "valueCanonical" : "http://hl7.org/fhir/uv/ips/ValueSet/results-blood-group-snomed-ct-ips-free-set"
          },
          {
            "url" : "documentation",
            "valueMarkdown" : "Additional conformance binding to a blood group findings value set for laboratory result values from the SNOMED CT IPS free set for use globally (in SNOMED member and non-member jurisdictions)."
          }],
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/additional-binding"
        },
        {
          "extension" : [{
            "url" : "purpose",
            "valueCode" : "candidate"
          },
          {
            "url" : "valueSet",
            "valueCanonical" : "http://hl7.org/fhir/uv/ips/ValueSet/results-presence-absence-snomed-ct-ips-free-set"
          },
          {
            "url" : "documentation",
            "valueMarkdown" : "Additional conformance binding to a presence and absence findings (qualifier values) value set for laboratory result values from the SNOMED CT IPS free set for use globally (in SNOMED member and non-member jurisdictions)."
          }],
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/additional-binding"
        },
        {
          "extension" : [{
            "url" : "purpose",
            "valueCode" : "candidate"
          },
          {
            "url" : "valueSet",
            "valueCanonical" : "http://hl7.org/fhir/uv/ips/ValueSet/results-microorganism-snomed-ct-ips-free-set"
          },
          {
            "url" : "documentation",
            "valueMarkdown" : "Additional conformance binding to a microorganisms value set for laboratory result values from the SNOMED CT IPS free set for use globally (in SNOMED member and non-member jurisdictions)."
          }],
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/additional-binding"
        }],
        "strength" : "preferred",
        "valueSet" : "http://hl7.org/fhir/uv/ips/ValueSet/results-coded-values-laboratory-uv-ips"
      }
    },
    {
      "id" : "Observation.dataAbsentReason",
      "path" : "Observation.dataAbsentReason",
      "short" : "Provides a reason why the expected value is missing."
    },
    {
      "id" : "Observation.interpretation",
      "path" : "Observation.interpretation",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://hl7.org/fhir/uv/ips/StructureDefinition/CodeableConcept-uv-ips|2.0.0"]
      }]
    },
    {
      "id" : "Observation.method",
      "path" : "Observation.method",
      "definition" : "Laboratory technigue that has been used",
      "comment" : "Laboratory technique (method of measurement) are integral parts of the test specification of some laboratory test coding systems (e.g. NPU), in LOINC hovewer measurement principle is not always present in the test definition. In some cases however knowledge of the used measurment techique is important for proper interpretation of the test result.\nThat's why it is important to explicitly include informaiton about measurement method is such cases.",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://hl7.org/fhir/uv/ips/StructureDefinition/CodeableConcept-uv-ips|2.0.0"]
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-technique-eu-lab"
      }
    },
    {
      "id" : "Observation.specimen",
      "path" : "Observation.specimen",
      "comment" : "When the specimen is applicable and known it shall be documented",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/laboratory/StructureDefinition/Specimen-eu-lab|0.2.0-ci"]
      }]
    },
    {
      "id" : "Observation.device",
      "path" : "Observation.device",
      "short" : "Measuring instrument"
    },
    {
      "id" : "Observation.hasMember",
      "path" : "Observation.hasMember",
      "definition" : "A reference to another Observation profiled by Observation-results-laboratory-uv-ips. The target observation (for instance an individual test member of a panel) is considered as a sub-observation of the current one, which plays the role of a grouper.",
      "comment" : "This element is used in the context of international patient summary when there is a need to group a collection of observations, because they belong to the same panel, or because they share a common interpretation comment, or a common media attachment (illustrative image or graph). In these cases, the current observation is the grouper, and its set of sub-observations are related observations using the type \"has-member\".  For a discussion on the ways Observations can be assembled in groups together see [Observation Grouping](http://hl7.org/fhir/observation.html#obsgrouping).",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab|0.2.0-ci"]
      }]
    },
    {
      "id" : "Observation.component",
      "path" : "Observation.component",
      "short" : "Laboratory result"
    },
    {
      "id" : "Observation.component.code",
      "path" : "Observation.component.code",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://hl7.org/fhir/uv/ips/StructureDefinition/CodeableConcept-uv-ips|2.0.0"]
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://hl7.org/fhir/uv/ips/ValueSet/results-laboratory-observations-uv-ips"
      }
    },
    {
      "id" : "Observation.component.value[x]",
      "path" : "Observation.component.value[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "rules" : "closed"
      }
    },
    {
      "id" : "Observation.component.value[x]:valueString",
      "path" : "Observation.component.value[x]",
      "sliceName" : "valueString",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "Observation.component.value[x]:valueRange",
      "path" : "Observation.component.value[x]",
      "sliceName" : "valueRange",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Range",
        "profile" : ["http://hl7.org/fhir/uv/ips/StructureDefinition/Range-uv-ips|1.1.0"]
      }]
    },
    {
      "id" : "Observation.component.value[x]:valueRatio",
      "path" : "Observation.component.value[x]",
      "sliceName" : "valueRatio",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Ratio",
        "profile" : ["http://hl7.eu/fhir/laboratory/StructureDefinition/Ratio-eu-lab|0.0.1"]
      }]
    },
    {
      "id" : "Observation.component.value[x]:valueTime",
      "path" : "Observation.component.value[x]",
      "sliceName" : "valueTime",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "time"
      }]
    },
    {
      "id" : "Observation.component.value[x]:valueDateTime",
      "path" : "Observation.component.value[x]",
      "sliceName" : "valueDateTime",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "Observation.component.value[x]:valuePeriod",
      "path" : "Observation.component.value[x]",
      "sliceName" : "valuePeriod",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Period"
      }]
    },
    {
      "id" : "Observation.component.value[x]:valueQuantity",
      "path" : "Observation.component.value[x]",
      "sliceName" : "valueQuantity",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Quantity",
        "profile" : ["http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab|0.0.1"]
      }]
    },
    {
      "id" : "Observation.component.value[x]:valueCodeableConcept",
      "path" : "Observation.component.value[x]",
      "sliceName" : "valueCodeableConcept",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://hl7.org/fhir/uv/ips/StructureDefinition/CodeableConcept-uv-ips|2.0.0"]
      }],
      "binding" : {
        "extension" : [{
          "extension" : [{
            "url" : "purpose",
            "valueCode" : "candidate"
          },
          {
            "url" : "valueSet",
            "valueCanonical" : "http://hl7.org/fhir/uv/ips/ValueSet/results-blood-group-snomed-ct-ips-free-set"
          },
          {
            "url" : "documentation",
            "valueMarkdown" : "Additional conformance binding to a blood group findings value set for laboratory result values from the SNOMED CT IPS free set for use globally (in SNOMED member and non-member jurisdictions)."
          }],
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/additional-binding"
        },
        {
          "extension" : [{
            "url" : "purpose",
            "valueCode" : "candidate"
          },
          {
            "url" : "valueSet",
            "valueCanonical" : "http://hl7.org/fhir/uv/ips/ValueSet/results-presence-absence-snomed-ct-ips-free-set"
          },
          {
            "url" : "documentation",
            "valueMarkdown" : "Additional conformance binding to a presence and absence findings (qualifier values) value set for laboratory result values from the SNOMED CT IPS free set for use globally (in SNOMED member and non-member jurisdictions)."
          }],
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/additional-binding"
        },
        {
          "extension" : [{
            "url" : "purpose",
            "valueCode" : "candidate"
          },
          {
            "url" : "valueSet",
            "valueCanonical" : "http://hl7.org/fhir/uv/ips/ValueSet/results-microorganism-snomed-ct-ips-free-set"
          },
          {
            "url" : "documentation",
            "valueMarkdown" : "Additional conformance binding to a microorganisms value set for laboratory result values from the SNOMED CT IPS free set for use globally (in SNOMED member and non-member jurisdictions)."
          }],
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/additional-binding"
        }],
        "strength" : "preferred",
        "valueSet" : "http://hl7.org/fhir/uv/ips/ValueSet/results-coded-values-laboratory-uv-ips"
      }
    }]
  }
}

```
