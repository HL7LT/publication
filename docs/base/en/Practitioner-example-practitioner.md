# Dr. Petras Kazlauskas - LT Base Practitioner Example - Lithuanian Base Implementation Guide v0.1.0

## Example Practitioner: Dr. Petras Kazlauskas - LT Base Practitioner Example

-------

**English**

-------

Language: en

Profile: [LT Base Practitioner](StructureDefinition-lt-practitioner.md)

**identifier**: `urn:oid:1.2.3.4.5.6.7.8.9.10`/19750515-LT12345 (use: official, ), `http://licensing.lt/medical-license`/MED-LT-54321 (use: secondary, )

**active**: true

**name**: Dr. Petras Kazlauskas(Official)

**telecom**: [+370 5 123 4567](tel:+37051234567), [p.kazlauskas@clinic.lt](mailto:p.kazlauskas@clinic.lt)

**gender**: Male

**birthDate**: 1975-05-15



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "example-practitioner",
  "meta" : {
    "profile" : [
      "https://hl7.lt/fhir/base/StructureDefinition/lt-practitioner"
    ]
  },
  "language" : "en",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:oid:1.2.3.4.5.6.7.8.9.10",
      "value" : "19750515-LT12345"
    },
    {
      "use" : "secondary",
      "system" : "http://licensing.lt/medical-license",
      "value" : "MED-LT-54321"
    }
  ],
  "active" : true,
  "name" : [
    {
      "use" : "official",
      "text" : "Dr. Petras Kazlauskas",
      "family" : "Kazlauskas",
      "given" : ["Petras"],
      "prefix" : ["Dr."]
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+370 5 123 4567",
      "use" : "work"
    },
    {
      "system" : "email",
      "value" : "p.kazlauskas@clinic.lt",
      "use" : "work"
    }
  ],
  "gender" : "male",
  "birthDate" : "1975-05-15"
}

```
