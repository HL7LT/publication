# Body Structure for Blood Pressure - Lithuanian Vital Signs Implementation Guide v0.0.1

## Resource Profile: Body Structure for Blood Pressure 

 
Body Structure profile to describe where on the body a blood pressure measurement was taken. 

**Usages:**

* Refer to this Profile: [Blood Pressure Panel](StructureDefinition-blood-pressure-panel.md) and [Heart Rate](StructureDefinition-heart-rate.md)
* Examples for this Profile: [BodyStructure/example-body-structure-blood-pressure](BodyStructure-example-body-structure-blood-pressure.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.vitalsigns|current/StructureDefinition/body-structure-blood-pressure)

### Formal Views of Profile Content

 [Description Differentials, Snapshots, and other representations](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](../StructureDefinition-body-structure-blood-pressure.csv), [Excel](../StructureDefinition-body-structure-blood-pressure.xlsx), [Schematron](../StructureDefinition-body-structure-blood-pressure.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "body-structure-blood-pressure",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/StructureDefinition/body-structure-blood-pressure",
  "version" : "0.0.1",
  "name" : "BodyStructureBloodPressure",
  "title" : "Body Structure for Blood Pressure",
  "status" : "draft",
  "date" : "2025-11-19T15:59:23+02:00",
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
  "description" : "Body Structure profile to describe where on the body a blood pressure measurement was taken.",
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
      "identity" : "openehr",
      "uri" : "http://openehr.org",
      "name" : "Open EHR Archetype Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 V2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "BodyStructure",
  "baseDefinition" : "http://hl7.eu/fhir/base-r5/StructureDefinition/bodyStructure-eu-core|0.1.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "BodyStructure",
        "path" : "BodyStructure"
      },
      {
        "id" : "BodyStructure.includedStructure",
        "path" : "BodyStructure.includedStructure",
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "BodyStructure.includedStructure.structure",
        "path" : "BodyStructure.includedStructure.structure",
        "short" : "A set of codes that describe site where on/in the body an observation or procedure took place",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/bp-measurement-body-location|2.0.0"
        }
      },
      {
        "id" : "BodyStructure.includedStructure.laterality",
        "path" : "BodyStructure.includedStructure.laterality",
        "short" : "Laterality",
        "mustSupport" : true
      },
      {
        "id" : "BodyStructure.includedStructure.bodyLandmarkOrientation",
        "path" : "BodyStructure.includedStructure.bodyLandmarkOrientation",
        "max" : "1"
      },
      {
        "id" : "BodyStructure.includedStructure.bodyLandmarkOrientation.landmarkDescription",
        "path" : "BodyStructure.includedStructure.bodyLandmarkOrientation.landmarkDescription",
        "short" : "Body Position",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true,
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/vital-signs-body-position|1.0.0"
        }
      }
    ]
  }
}

```
