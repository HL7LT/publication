# Report Code - HL7 Europe IG Snapshot v0.0.1

## ValueSet: Report Code 

 
Diagnostic report codes including all subtypes of Clinical procedure report, excluding the root concept itself. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "report-code",
  "language" : "en",
  "url" : "https://hl7.lt/fhir/eu/ValueSet/report-code",
  "version" : "1.0.0",
  "name" : "ReportCode",
  "title" : "Report Code",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-03-15T17:10:39+02:00",
  "publisher" : "Lithuanian Medical Library",
  "contact" : [{
    "name" : "Lithuanian Medical Library",
    "telecom" : [{
      "system" : "url",
      "value" : "https://medicinosnk.lt"
    },
    {
      "system" : "email",
      "value" : "info@medicinosnk.lt"
    }]
  }],
  "description" : "Diagnostic report codes including all subtypes of Clinical procedure report, excluding the root concept itself.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "EU"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://snomed.info/sct",
      "filter" : [{
        "property" : "concept",
        "op" : "descendent-of",
        "value" : "371525003"
      }]
    }]
  }
}

```
