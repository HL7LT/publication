java -jar ../publisher.jar -go-publish \
   -source    /Users/igor/source/hl7lt/ig-lt-base \
   -web       /Users/igor/source/hl7lt/publication/docs \
   -history   /Users/igor/source/hl7lt/ig-history \
   -registry  /Users/igor/source/hl7lt/ig-registry/fhir-ig-list.json \
   -temp      /Users/igor/source/hl7lt/publication/temp \
   -templates /Users/igor/source/hl7lt/publication/templates

echo "Press any key to delete docs/base except x.x.x folders ..."
pause

# delete 
find docs/base -type d -name '[0-9]*.[0-9]*.[0-9]*' -prune -o -type f -exec rm -f {} \;

echo "Press any key to copy new files to docs/base ..."
pause

# copy new files
rsync -a docs/fhir/ docs/base/

echo "Press any key to clean up ..."
pause

# clean up
rm -rf docs/fhir
