# Device for Blood Pressure Measurement - Lithuanian Vital Signs Implementation Guide v0.0.1

## Resursų profilis: Device for Blood Pressure Measurement 

 
Device used to measure blood pressure. 

**Usages:**

* Refer to this Profile: [Blood Pressure Panel](StructureDefinition-blood-pressure-panel.md)
* Examples for this Profile: [Device/example-device-blood-pressure](Device-example-device-blood-pressure.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/lt.hl7.fhir.vitalsigns|current/StructureDefinition/device-blood-pressure)

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

**Summary**

Must-Support: 3 elements
 Fixed: 1 element

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Device.property

 **Pagrindinių elementų peržiūra** 

#### Terminology Bindings

#### Constraints

 **Skirtumų rinkinių peržiūra** 

#### Terminology Bindings (Differential)

 **Momentinės kopijos peržiūraView** 

#### Terminology Bindings

#### Constraints

**Summary**

Must-Support: 3 elements
 Fixed: 1 element

**Slices**

This structure defines the following [Slices](http://hl7.org/fhir/R5/profiling.html#slices):

* The element 1 is sliced based on the value of Device.property

 

Kitos profilio reprezentacijos: [CSV](../StructureDefinition-device-blood-pressure.csv), [Excel](../StructureDefinition-device-blood-pressure.xlsx), [Schematron](../StructureDefinition-device-blood-pressure.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "device-blood-pressure",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/StructureDefinition/device-blood-pressure",
  "version" : "1.0.0",
  "name" : "DeviceBloodPressure",
  "title" : "Device for Blood Pressure Measurement",
  "status" : "draft",
  "date" : "2025-11-19T15:54:38+02:00",
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
  "description" : "Device used to measure blood pressure.",
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
      "identity" : "interface",
      "uri" : "http://hl7.org/fhir/interface",
      "name" : "Interface Pattern"
    },
    {
      "identity" : "udi",
      "uri" : "http://fda.gov/UDI",
      "name" : "UDI Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Device",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Device|5.0.0",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Device",
        "path" : "Device"
      },
      {
        "id" : "Device.type",
        "path" : "Device.type",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/device-type-blood-pressure|1.0.0"
        }
      },
      {
        "id" : "Device.property",
        "path" : "Device.property",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "type"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Device.property:BPCuffSize",
        "path" : "Device.property",
        "sliceName" : "BPCuffSize",
        "short" : "Cuff Size",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Device.property:BPCuffSize.type",
        "path" : "Device.property.type",
        "fixedCodeableConcept" : {
          "coding" : [
            {
              "system" : "urn:iso:std:iso:11073:10101",
              "code" : "528391"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Device.property:BPCuffSize.value[x]",
        "path" : "Device.property.value[x]",
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "mustSupport" : true,
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "https://hl7.lt/fhir/vitalsigns/ValueSet/bp-cuff-size|1.0.0"
        }
      }
    ]
  }
}

```
