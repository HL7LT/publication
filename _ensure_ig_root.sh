#!/bin/bash
# Ensures docs/$IG_SUFFIX/ has root redirect pages and copies from latest version.
# Called after rsync in _publish.sh. Uses package-list.json to determine latest version.
set -euo pipefail

if [ $# -lt 1 ]; then
  echo "Usage: $0 <ig-suffix>"
  exit 1
fi

IG_SUFFIX="$1"
SCRIPT_DIR="$(cd "$(dirname "$0")" && pwd)"
DOCS_IG="$SCRIPT_DIR/docs/$IG_SUFFIX"
PKG_LIST="$DOCS_IG/package-list.json"
TEMPLATE="$SCRIPT_DIR/templates/ig-root-history.template.html"

if [ ! -f "$PKG_LIST" ]; then
  echo "Missing $PKG_LIST, skipping root pages."
  exit 0
fi

# Write root pages and get latest version (print only latest to stdout for capture).
LATEST=$(python3 << PYTHON
import json
import os
import sys

with open("$PKG_LIST") as f:
    data = json.load(f)

# Find latest: entry with "current": true, else first numeric version in list
latest = None
for item in data.get("list", []):
    v = item.get("version", "")
    if item.get("current") is True and v != "current":
        latest = v
        break
if not latest:
    for item in data.get("list", []):
        v = item.get("version", "")
        if v != "current" and all(c.isdigit() or c == "." for c in v):
            latest = v
            break

if not latest:
    sys.stderr.write("Could not determine latest version from package-list.json\n")
    sys.exit(1)

title = data.get("title", "Implementation Guide")
package_id = data.get("package-id", "")
page_json = json.dumps(data, separators=(",", ":")).replace("\\\\", "\\\\\\\\").replace("'", "\\\\'")

# Write index.html
index_html = f'''<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="refresh" content="0;url={latest}/"/>
  <title>{title}</title>
  <link rel="canonical" href="https://hl7.lt/fhir/$IG_SUFFIX/{latest}/"/>
  <script type="text/javascript">window.location.replace("{latest}/");</script>
</head>
<body>
  <p>This page is part of the {title}. Redirecting to <a href="{latest}/">current version ({latest})</a>.</p>
  <p>For a full list of available versions, see the <a href="history.html">Directory of published versions</a>.</p>
</body>
</html>
'''
with open("$DOCS_IG/index.html", "w") as f:
    f.write(index_html)

# Write en/index.html
os.makedirs("$DOCS_IG/en", exist_ok=True)
en_html = f'''<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="refresh" content="0;url=../{latest}/en/"/>
  <title>{title} (English)</title>
  <link rel="canonical" href="https://hl7.lt/fhir/$IG_SUFFIX/{latest}/en/"/>
  <script type="text/javascript">window.location.href = "../{latest}/en/";</script>
</head>
<body>
  <p>Redirecting to <a href="../{latest}/en/">current version ({latest}) – English</a>.</p>
  <p><a href="../history.html">Directory of published versions</a></p>
</body>
</html>
'''
with open("$DOCS_IG/en/index.html", "w") as f:
    f.write(en_html)

# Write lt/index.html
os.makedirs("$DOCS_IG/lt", exist_ok=True)
lt_html = f'''<!DOCTYPE html>
<html lang="lt">
<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="refresh" content="0;url=../{latest}/lt/"/>
  <title>{title} (Lietuvių)</title>
  <link rel="canonical" href="https://hl7.lt/fhir/$IG_SUFFIX/{latest}/lt/"/>
  <script type="text/javascript">window.location.href = "../{latest}/lt/";</script>
</head>
<body>
  <p>Nukreipiama į <a href="../{latest}/lt/">dabartinę versiją ({latest}) – lietuvių kalba</a>.</p>
  <p><a href="../history.html">Publikuotų versijų katalogas</a></p>
</body>
</html>
'''
with open("$DOCS_IG/lt/index.html", "w") as f:
    f.write(lt_html)

# Write history.html from template
with open("$TEMPLATE") as f:
    history_html = f.read()
history_html = history_html.replace("{{TITLE}}", title).replace("{{PACKAGE_ID}}", package_id).replace("{{PAGE_JSON}}", page_json)
with open("$DOCS_IG/history.html", "w") as f:
    f.write(history_html)

# Only print latest so shell can capture it
print(latest)
PYTHON
)
LATEST="${LATEST//[$'\r\n']}"

# Copy package.tgz and full-ig.zip from latest to root
LATEST_DIR="$DOCS_IG/$LATEST"
if [ -d "$LATEST_DIR" ]; then
  for f in package.tgz full-ig.zip; do
    if [ -f "$LATEST_DIR/$f" ]; then
      cp "$LATEST_DIR/$f" "$DOCS_IG/$f"
      echo "Copied $f from $LATEST/ to root"
    fi
  done
fi

echo "Ensured root pages for $IG_SUFFIX (latest: $LATEST)"
