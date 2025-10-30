# example-organization - Lithuanian Base Implementation Guide v0.2.0

## Pavyzdys Organization: example-organization

-------

**Lithuanian**

-------

Language: lt

Profile: [LT Base Organization](StructureDefinition-lt-organization.md)

**identifier**: `http://esveikata.lt/classifiers/Identifier/JAR`/123456789 (use: official, )

**active**: true

**name**: Vilniaus miesto ligoninė

### Contacts

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Purpose** | **Telecom** | **Address** |
| * | work | [+37061234567](tel:+37061234567) | Gedimino pr. 1 Vilnius 01103 LT (work) |



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "example-organization",
  "meta" : {
    "profile" : [
      "https://hl7.lt/fhir/base/StructureDefinition/lt-organization"
    ]
  },
  "language" : "lt",
  "identifier" : [
    {
      "use" : "official",
      "system" : "http://esveikata.lt/classifiers/Identifier/JAR",
      "value" : "123456789"
    }
  ],
  "active" : true,
  "name" : "Vilniaus miesto ligoninė",
  "contact" : [
    {
      "purpose" : {
        "coding" : [
          {
            "code" : "work"
          }
        ]
      },
      "telecom" : [
        {
          "system" : "phone",
          "value" : "+37061234567",
          "use" : "work"
        }
      ],
      "address" : {
        "use" : "work",
        "type" : "both",
        "line" : ["Gedimino pr. 1"],
        "city" : "Vilnius",
        "postalCode" : "01103",
        "country" : "LT"
      }
    }
  ]
}

```
