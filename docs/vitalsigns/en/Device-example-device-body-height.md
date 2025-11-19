# Example Device - Body Height Measurement - Lithuanian Vital Signs Implementation Guide v0.0.1

## Example Device: Example Device - Body Height Measurement

-------

**English**

-------

Language: en

Profile: [Device for Body Height Measurement](StructureDefinition-device-body-height.md)

**status**: Active

**type**: Stadiometer (physical object)



## Resource Content

```json
{
  "resourceType" : "Device",
  "id" : "example-device-body-height",
  "meta" : {
    "profile" : [
      "https://hl7.lt/fhir/vitalsigns/StructureDefinition/device-body-height"
    ]
  },
  "language" : "en",
  "status" : "active",
  "type" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "24311000205101",
          "display" : "Stadiometer (physical object)"
        }
      ]
    }
  ]
}

```
