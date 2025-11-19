# Numeric Result Interpretation without panic values, value set - Lithuanian Vital Signs Implementation Guide v0.0.1

## ValueSet: Numeric Result Interpretation without panic values, value set 

 
The HL7 V3:ObservationInterpretation code set (OID: 2.16.840.1.113883.5.83) that describes interpretations associated with a measured value, constrained to terms that are not those associated with 'panic' terms. 

 **References** 

* [Body Mass Index](StructureDefinition-bmi.md)
* [Body Height](StructureDefinition-body-height.md)
* [Body Weight](StructureDefinition-body-weight.md)
* [Head Circumference](StructureDefinition-head-circumference.md)
* [Waist Circumference](StructureDefinition-waist-circumference.md)

### Logical Definition (CLD)

 

### Išplėtimas

-------

 [Aukščiau pateiktos(-ų) lentelės(-ių) aprašymas(-ai)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "numeric-result-interpretation-non-panic",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/ValueSet/numeric-result-interpretation-non-panic",
  "version" : "1.0.0",
  "name" : "NumericResultInterpretationNonPanic",
  "title" : "Numeric Result Interpretation without panic values, value set",
  "status" : "active",
  "experimental" : false,
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
  "description" : "The HL7 V3:ObservationInterpretation code set (OID: 2.16.840.1.113883.5.83) that describes interpretations associated with a measured value, constrained to terms that are not those associated with 'panic' terms.",
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
  "copyright" : "Logica Health, all rights reserved Creative Commons License",
  "compose" : {
    "include" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation",
        "concept" : [
          {
            "code" : "A",
            "display" : "Abnormal"
          },
          {
            "code" : "H",
            "display" : "Higher Than Normal"
          },
          {
            "code" : "L",
            "display" : "Lower Than Normal"
          }
        ]
      }
    ]
  }
}

```
