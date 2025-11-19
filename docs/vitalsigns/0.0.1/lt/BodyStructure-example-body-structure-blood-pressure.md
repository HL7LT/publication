# Example Body Structure for Blood Pressure - Lithuanian Vital Signs Implementation Guide v0.0.1

## Pavyzdys BodyStructure: Example Body Structure for Blood Pressure

-------

**Lithuanian**

-------

Language: en

Profile: [Body Structure for Blood Pressure](StructureDefinition-body-structure-blood-pressure.md)

> **includedStructure****structure**:Structure of femoral artery (body structure)**laterality**:Right

### BodyLandmarkOrientations

| | |
| :--- | :--- |
| - | **LandmarkDescription** |
| * | Sitting position (finding) |


**patient**: [Jonas Petrauskas(official) Male, DoB: 1985-01-01 ( http://hospital-lt.lt/patient-id#HOSPLT-10005 (use: usual, ))](Patient-example-patient.md)



## Resource Content

```json
{
  "resourceType" : "BodyStructure",
  "id" : "example-body-structure-blood-pressure",
  "meta" : {
    "profile" : [
      "https://hl7.lt/fhir/vitalsigns/StructureDefinition/body-structure-blood-pressure"
    ]
  },
  "language" : "en",
  "includedStructure" : [
    {
      "structure" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "7657000",
            "display" : "Structure of femoral artery (body structure)"
          }
        ]
      },
      "laterality" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "24028007",
            "display" : "Right"
          }
        ]
      },
      "bodyLandmarkOrientation" : [
        {
          "landmarkDescription" : [
            {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "33586001",
                  "display" : "Sitting position (finding)"
                }
              ]
            }
          ]
        }
      ]
    }
  ],
  "patient" : {
    "reference" : "Patient/example-patient"
  }
}

```
