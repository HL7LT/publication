# SNOMED CT Solor Extension Temporary Code System - Lithuanian Vital Signs Implementation Guide v0.0.1

## CodeSystem: SNOMED CT Solor Extension Temporary Code System (Experimental) 

 
A set of codes that are defined in the Solor extension to the SNOMED CT code system. To be used until they are adopted by SNOMED CT. 

This Code system is referenced in the definition of the following value sets:

* [BodyWeightAssociatedSituation](ValueSet-body-weight-associated-situation.md)
* [BloodPressureMeasurementMethod](ValueSet-bp-measurement-method.md)
* [DeviceTypeHeightLength](ValueSet-device-type-height-length.md)
* [DeviceTypeWeight](ValueSet-device-type-weight.md)
* [HeartRateMeasurementBodyLocation](ValueSet-heart-rate-measurement-body-location.md)
* [HeartRateMeasurementMethod](ValueSet-heart-rate-measurement-method.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "solor-temporary-codesystem",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/vitalsigns/CodeSystem/solor-temporary-codesystem",
  "version" : "2.0.0",
  "name" : "SolorTemporaryCodeSystem",
  "title" : "SNOMED CT Solor Extension Temporary Code System",
  "status" : "draft",
  "experimental" : true,
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
  "description" : "A set of codes that are defined in the Solor extension to the SNOMED CT code system. To be used until they are adopted by SNOMED CT.",
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
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 13,
  "concept" : [
    {
      "code" : "1461000205102",
      "display" : "Digital thermometer (physical object)",
      "definition" : "A device used to measure temperature with digital readout."
    },
    {
      "code" : "2331000205106",
      "display" : "Non-contact infrared thermometer (physical object)",
      "definition" : "A device used to measure temperature via infrared technology that does not come into contact with the skin."
    },
    {
      "code" : "24031000205108",
      "display" : "Thermoluminescent diode thermometer (physical object)",
      "definition" : "A device used to measure temperature that uses a thermoluminescent diode."
    },
    {
      "code" : "641000205104",
      "display" : "Computer aided auscultation (procedure)",
      "definition" : "A procedure that uses a computer aided device to measure blood pressure."
    },
    {
      "code" : "911000205109",
      "display" : "Measurement of blood pressure using intravascular transducer (procedure)",
      "definition" : "A device that measures blood pressure intravascularly via a trandsducer."
    },
    {
      "code" : "961000205106",
      "display" : "Wearing street clothes, no shoes (finding)",
      "definition" : "The subject is wearing clothing but not shoes."
    },
    {
      "code" : "971000205103",
      "display" : "Wearing street clothes with shoes (finding)",
      "definition" : "The subject is wearing clothing and shoes."
    },
    {
      "code" : "24311000205101",
      "display" : "Stadiometer (physical object)",
      "definition" : "A device used to measure a subject's height."
    },
    {
      "code" : "23861000205107",
      "display" : "Capnograph sensor device (physical object)",
      "definition" : "A device that captures expelled air, either via nasal prongs or CPAP and is used to measure the number of breaths taken per minute."
    },
    {
      "code" : "23921000205109",
      "display" : "Respiration strain gauge (physical object)",
      "definition" : "A device wrapped around a subject chest that measures the number of times a subject's chest expands with each inhalation.  This counts the breaths per minute."
    },
    {
      "code" : "24181000205106",
      "display" : "Patient lift scale (physical object)",
      "definition" : "A device used to lift a patient out of or into bed and also has a scale to measure the subject's weight."
    },
    {
      "code" : "24781000205105",
      "display" : "Structure of left superficial temporal artery (body structure)",
      "definition" : "A body structure of the superficial tempral artery on the left side of the body.  Currently part of the Solor SNOMED CT extension."
    },
    {
      "code" : "24791000205107",
      "display" : "Structure of right superficial temporal artery (body structure)",
      "definition" : "A body structure of the superficial tempral artery on the right side of the body.  Currently part of the Solor SNOMED CT extension."
    }
  ]
}

```
