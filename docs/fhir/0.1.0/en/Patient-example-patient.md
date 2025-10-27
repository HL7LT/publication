# Jonas Petrauskas - LT Base Patient Example - Lithuanian Base Implementation Guide v0.1.0

## Example Patient: Jonas Petrauskas - LT Base Patient Example

-------

**English**

-------

Language: en

Profile: [LT Base Patient](StructureDefinition-lt-patient.md)

Jonas Petrauskas(official) Male, DoB: 1985-01-01 ( http://hospital-lt.lt/patient-id#HOSPLT-10005 (use: usual, ))

-------

| | |
| :--- | :--- |
| Active: | true |
| Other Id: | `urn:oid:1.2.3.4.5.6.7.8.9.11`/38501019999 (use: official, ) |
| Contact Detail | * [+370 6 555 1234](tel:+37065551234)
* Gedimino pr. 10 Vilnius LT-01103 LT (home)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "example-patient",
  "meta" : {
    "profile" : ["https://hl7.lt/fhir/base/StructureDefinition/lt-patient"]
  },
  "language" : "en",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:oid:1.2.3.4.5.6.7.8.9.11",
      "value" : "38501019999"
    },
    {
      "use" : "usual",
      "system" : "http://hospital-lt.lt/patient-id",
      "value" : "HOSPLT-10005"
    }
  ],
  "active" : true,
  "name" : [
    {
      "use" : "official",
      "text" : "Jonas Petrauskas",
      "family" : "Petrauskas",
      "given" : ["Jonas"]
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+370 6 555 1234",
      "use" : "mobile"
    }
  ],
  "gender" : "male",
  "birthDate" : "1985-01-01",
  "address" : [
    {
      "use" : "home",
      "line" : ["Gedimino pr. 10"],
      "city" : "Vilnius",
      "postalCode" : "LT-01103",
      "country" : "LT"
    }
  ]
}

```
