#!/bin/bash
set -euo pipefail

if [ $# -lt 1 ]; then
  echo "Usage: $0 <ig-suffix> [source-dir-name]"
  echo "  ig-suffix:      e.g. 'base', 'vitalsigns', 'lifestyle'"
  echo "  source-dir-name: source directory name (default: ig-lt-<ig-suffix>)"
  exit 1
fi

IG_SUFFIX="$1"
SOURCE_DIR="${2:-ig-lt-$IG_SUFFIX}"
BASE_DIR="/Users/igor/source/hl7lt"
PUB_DIR="$BASE_DIR/publication"

java -jar "$BASE_DIR/publisher.jar" -go-publish \
   -source    "$BASE_DIR/$SOURCE_DIR" \
   -web       "$PUB_DIR/docs" \
   -history   "$BASE_DIR/ig-history" \
   -registry  "$BASE_DIR/ig-registry/fhir-ig-list.json" \
   -temp      "$PUB_DIR/temp" \
   -templates "$PUB_DIR/templates"

read -n 1 -s -r -p "Press any key to clean current files in docs/$IG_SUFFIX ..."
echo

# Keep version dirs, package-list.json, and root redirect pages (index.html, history.html, en/index.html, lt/index.html)
find "docs/$IG_SUFFIX" -type d -name '[0-9]*.[0-9]*.[0-9]*' -prune \
   -o -type f \( -not -name 'package-list.json' -and -not -name 'index.html' -and -not -name 'history.html' \) -exec rm -f {} \;

read -n 1 -s -r -p "Press any key to copy new files to docs/$IG_SUFFIX ..."
echo

rsync -a docs/fhir/ "docs/$IG_SUFFIX/"

# Ensure root has index.html, history.html, en/lt redirects, and copies of package.tgz/full-ig.zip from latest
"$PUB_DIR/_ensure_ig_root.sh" "$IG_SUFFIX"

read -n 1 -s -r -p "Press any key to clean up docs/fhir ..."
echo

rm -rf docs/fhir
echo "Done publishing $IG_SUFFIX"
