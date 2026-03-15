# Organization: Medical Library (example) - Lithuanian Base Implementation Guide v0.3.0

## Pavyzdys Organization: Organization: Medical Library (example)

-------

**Lithuanian**

-------

Language: lt

Profile: [OrganizationLt](StructureDefinition-organization-lt.md)

**identifier**: `http://esveikata.lt/classifiers/Identifier/JAR`/200935935 (use: official, )

**active**: true

**name**: Lithuanian Medical Library

### Contacts

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Purpose** | **Telecom** | **Address** |
| * | work | [+37061234567](tel:+37061234567) | Vilniaus g. 1 Vilnius 12345 LT (work) |



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "organization-example",
  "meta" : {
    "profile" : ["https://hl7.lt/fhir/base/StructureDefinition/organization-lt"]
  },
  "language" : "lt",
  "identifier" : [{
    "use" : "official",
    "system" : "http://esveikata.lt/classifiers/Identifier/JAR",
    "value" : "200935935"
  }],
  "active" : true,
  "name" : "Lietuvos Medicinos biblioteka",
  "_name" : {
    "extension" : [{
      "extension" : [{
        "url" : "lang",
        "valueCode" : "lt"
      },
      {
        "url" : "content",
        "valueString" : "Lithuanian Medical Library"
      }],
      "url" : "http://hl7.org/fhir/StructureDefinition/translation"
    }]
  },
  "contact" : [{
    "purpose" : {
      "coding" : [{
        "code" : "work"
      }]
    },
    "telecom" : [{
      "system" : "phone",
      "value" : "+37061234567",
      "use" : "work"
    }],
    "address" : {
      "use" : "work",
      "type" : "both",
      "line" : ["Vilniaus g. 1"],
      "city" : "Vilnius",
      "postalCode" : "12345",
      "country" : "LT"
    }
  }]
}

```
