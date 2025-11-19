<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile BodyStructureEuCore
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:BodyStructure</sch:title>
    <sch:rule context="f:BodyStructure">
      <sch:assert test="count(f:includedStructure) &lt;= 1">includedStructure: maximum cardinality of 'includedStructure' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:BodyStructure/f:includedStructure</sch:title>
    <sch:rule context="f:BodyStructure/f:includedStructure">
      <sch:assert test="count(f:bodyLandmarkOrientation) &lt;= 1">bodyLandmarkOrientation: maximum cardinality of 'bodyLandmarkOrientation' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:BodyStructure/f:includedStructure/f:bodyLandmarkOrientation</sch:title>
    <sch:rule context="f:BodyStructure/f:includedStructure/f:bodyLandmarkOrientation">
      <sch:assert test="count(f:landmarkDescription) &gt;= 1">landmarkDescription: minimum cardinality of 'landmarkDescription' is 1</sch:assert>
      <sch:assert test="count(f:landmarkDescription) &lt;= 1">landmarkDescription: maximum cardinality of 'landmarkDescription' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
