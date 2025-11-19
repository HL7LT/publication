# Example Device - Blood Pressure Measurement - Lithuanian Vital Signs Implementation Guide v0.0.1

## Example Device: Example Device - Blood Pressure Measurement

-------

**English**

-------

Language: en

Profile: [Device for Blood Pressure Measurement](StructureDefinition-device-blood-pressure.md)

**status**: Active

**manufacturer**: Omron Healthcare

**type**: Non-invasive blood pressure monitor (physical object)

### Properties

| | | |
| :--- | :--- | :--- |
| - | **Type** | **Value[x]** |
| * | MDC_DEV_SPEC_PROFILE_BP | Blood pressure cuff, adult size (physical object) |



## Resource Content

```json
{
  "resourceType" : "Device",
  "id" : "example-device-blood-pressure",
  "meta" : {
    "profile" : [
      "https://hl7.lt/fhir/vitalsigns/StructureDefinition/device-blood-pressure"
    ]
  },
  "language" : "en",
  "status" : "active",
  "manufacturer" : "Omron Healthcare",
  "type" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "258057004",
          "display" : "Non-invasive blood pressure monitor (physical object)"
        }
      ]
    }
  ],
  "property" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "urn:iso:std:iso:11073:10101",
            "code" : "528391"
          }
        ]
      },
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "720737000",
            "display" : "Blood pressure cuff, adult size (physical object)"
          }
        ]
      }
    }
  ]
}

```
