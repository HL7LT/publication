# HL7 Lithuania FHIR IG Publication

This repository manages the publication of HL7 Lithuania FHIR Implementation Guides.

## Availability

The HL7 Lithuanian FHIR IG packages are published on [hl7lt.github.io/publication](https://hl7lt.github.io/publication) using GitHub Pages and available at [https://hl7.lt/fhir](https://hl7.lt/fhir).

## Prerequisites

Before publishing an IG, ensure you have the following installed:

- **Java 11+** - Required for running the FHIR IG Publisher
- **Node.js and npm** - For SUSHI and other tooling
- **SUSHI** - FSH to FHIR compiler: `npm install -g fsh-sushi`
- **Ruby and Jekyll** (optional) - For local preview: `gem install jekyll bundler`

### Required Repositories

Clone these repositories at the same level as your IG projects:

```bash
cd /Users/igor/source/hl7lt
git clone https://github.com/HL7/fhir-ig-history-template.git ig-history
git clone https://github.com/FHIR/ig-registry.git
```

### Download IG Publisher

Download the latest IG Publisher JAR:

```bash
cd /Users/igor/source/hl7lt
curl -L https://github.com/HL7/fhir-ig-publisher/releases/latest/download/publisher.jar -o publisher.jar
```

## Publication Workspace Structure

```
/Users/igor/source/hl7lt/
├── publisher.jar              # HL7 IG Publisher
├── ig-history/                # History templates (cloned from HL7)
├── ig-registry/               # IG registry (cloned from FHIR)
├── publication/               # This repository
│   ├── _publish.sh            # Generic publish script
│   ├── _publish_base.sh       # Wrapper for base IG
│   ├── _publish_vitalsigns.sh # Wrapper for vitalsigns IG
│   ├── _publish_*.sh          # Wrappers for other IGs
│   ├── publication-request-template.json  # Template for publication requests
│   ├── templates/             # Customized history templates
│   ├── temp/                  # Temporary build artifacts
│   └── docs/                  # Published web content (webroot)
│       ├── index.html         # Landing page
│       ├── publish-setup.json # Publication configuration
│       ├── package-feed.xml   # Package feed
│       ├── publication-feed.xml # Publication feed
│       ├── package-registry.json # Package registry
│       ├── base/              # Published base IG
│       ├── vitalsigns/        # Published vitalsigns IG
│       └── {ig}/              # Other published IGs
├── ig-lt-base/                # Base IG source
├── ig-lt-vitalsigns/          # Vital Signs IG source
└── ig-lt-*/                   # Other IG sources
```

## Publishing an Implementation Guide

### Step 1: Prepare Your IG for Release

1. **Update version and status** in `sushi-config.yaml`:

```yaml
version: 0.1.0              # Target version
status: draft               # draft | active | retired
releaseLabel: ci-build      # Before publishing
# releaseLabel: draft       # For publication
```

2. **Update dependencies** to use specific versions (not `dev` or `current`):

```yaml
dependencies:
  lt.hl7.fhir.base: 0.2.0   # Specific version, not "current"
```

3. **Commit your changes** to the IG repository:

```bash
cd /Users/igor/source/hl7lt/ig-lt-{your-ig}
git add .
git commit -m "Prepare for version 0.1.0 release"
git tag v0.1.0  # Tag the release
```

### Step 2: Create publication-request.json

Create `publication-request.json` in your IG root directory:

```json
{
   "package-id": "lt.hl7.fhir.{ig}",
   "version": "0.1.0",
   "path": "https://hl7.lt/fhir/{ig}/0.1.0",
   "mode": "milestone",
   "status": "draft",
   "sequence": "Releases",
   "desc": "Initial draft release.",
   "first": true,
   "title": "Lithuanian {Title} Implementation Guide",
   "ci-build": "http://build.fhir.org/ig/HL7LT/ig-lt-{ig}",
   "category": "Diagnostics",
   "introduction": "Description of your IG for the registry."
}
```

**Key fields:**
- `mode`: `milestone` (publish and make current) | `working` (publish but don't make current) | `technical-correction` (replace existing)
- `status`: `draft` | `trial-use` | `release` | `normative`
- `first`: `true` only for the first publication, `false` thereafter
- `category`: See [FHIR registry categories](http://fhir.org/guides/registry/)

**Note:** Use the template at `publication/publication-request-template.json` as a starting point.

### Step 3: Clean Build

Ensure a clean build before publishing:

```bash
cd /Users/igor/source/hl7lt/ig-lt-{your-ig}

# Clean previous builds
rm -rf fsh-generated input-cache output temp template
rm -rf ~/.fhir/*  # Keep fhir-settings.json if it exists

# Update tooling
./_updatePublisher.sh
npm update -g fsh-sushi

# Build the IG
./_genonce.sh
```

Review the build output and `output/qa.html` for errors and warnings.

### Step 4: Run Publication Script

From the publication directory, run the appropriate publish script:

```bash
cd /Users/igor/source/hl7lt/publication

# For specific IGs:
./_publish_base.sh
./_publish_vitalsigns.sh
./_publish_lifestyle.sh
# ... or any other _publish_{ig}.sh

# Or use the generic script directly:
./_publish.sh {ig-suffix}
```

The script will:
1. Run the IG Publisher in `-go-publish` mode
2. Generate history pages and feeds
3. Update the registry files
4. Pause at each step for review
5. Clean up and organize the output in `docs/{ig}/`

### Step 5: Review Locally

Preview the published content:

**Option A: Jekyll (recommended)**
```bash
cd /Users/igor/source/hl7lt/publication
jekyll serve -s docs
# Visit http://127.0.0.1:4000
```

**Option B: Simple HTTP Server**
```bash
cd /Users/igor/source/hl7lt/publication/docs
python3 -m http.server 8000
# Visit http://localhost:8000
```

### Step 6: Commit and Push to GitHub Pages

```bash
cd /Users/igor/source/hl7lt/publication
git add docs/
git commit -m "Publish {ig} version {version}"
git push origin main
```

GitHub Pages will automatically rebuild and deploy to https://hl7.lt/fhir.

### Step 7: Update IG Registry

The publication script updates `ig-registry/fhir-ig-list.json`. Now submit it to the official registry:

```bash
cd /Users/igor/source/hl7lt/ig-registry
git add fhir-ig-list.json
git commit -m "Add/update Lithuanian {IG} entries"
git push origin your-branch-name
```

Create a pull request to merge your changes into the [FHIR/ig-registry](https://github.com/FHIR/ig-registry) repository.

### Step 8: Post-Publication Updates

After publishing, prepare your IG for continued development:

1. **Update sushi-config.yaml** for next version:
```yaml
version: 0.2.0
releaseLabel: ci-build
# Optionally revert dependencies to current:
dependencies:
  lt.hl7.fhir.base: current
```

2. **Update publication-request.json**:
   - Remove `"first": true`
   - Update version and path for next release
   - Keep other fields up to date

3. **Commit changes**:
```bash
git add .
git commit -m "Prepare for next development cycle"
git push
```

## Key Differences from Standard IG Publisher Workflow

This publication setup has several customizations:

1. **Uses `docs/` instead of `webroot/`** - GitHub Pages requires content in `docs/`
2. **Custom rsync workflow** - The publisher outputs to `docs/fhir/`, which is then copied to `docs/{ig}/` to preserve version subdirectories
3. **GitHub Pages hosting** - No separate web server needed
4. **Centralized publication scripts** - All IGs use the same generic `_publish.sh` script

## Available Implementation Guides

| IG | Package ID | CI Build |
|----|------------|----------|
| Base | lt.hl7.fhir.base | [build.fhir.org/ig/HL7LT/ig-lt-base](https://build.fhir.org/ig/HL7LT/ig-lt-base) |
| Vital Signs | lt.hl7.fhir.vitalsigns | [build.fhir.org/ig/HL7LT/ig-lt-vitalsigns](https://build.fhir.org/ig/HL7LT/ig-lt-vitalsigns) |
| Breast | lt.hl7.fhir.breast | [build.fhir.org/ig/HL7LT/ig-lt-breast](https://build.fhir.org/ig/HL7LT/ig-lt-breast) |
| Cervical | lt.hl7.fhir.cervical | [build.fhir.org/ig/HL7LT/ig-lt-cervical](https://build.fhir.org/ig/HL7LT/ig-lt-cervical) |
| Colorectal | lt.hl7.fhir.colorectal | [build.fhir.org/ig/HL7LT/ig-lt-colorectal](https://build.fhir.org/ig/HL7LT/ig-lt-colorectal) |
| CVD | lt.hl7.fhir.cvd | [build.fhir.org/ig/HL7LT/ig-lt-cvd](https://build.fhir.org/ig/HL7LT/ig-lt-cvd) |
| Lab | lt.hl7.fhir.lab | [build.fhir.org/ig/HL7LT/ig-lt-lab](https://build.fhir.org/ig/HL7LT/ig-lt-lab) |
| Lifestyle | lt.hl7.fhir.lifestyle | [build.fhir.org/ig/HL7LT/ig-lt-lifestyle](https://build.fhir.org/ig/HL7LT/ig-lt-lifestyle) |
| Lung | lt.hl7.fhir.lung | [build.fhir.org/ig/HL7LT/ig-lt-lung](https://build.fhir.org/ig/HL7LT/ig-lt-lung) |
| Prostate | lt.hl7.fhir.prostate | [build.fhir.org/ig/HL7LT/ig-lt-prostate](https://build.fhir.org/ig/HL7LT/ig-lt-prostate) |

## Troubleshooting

### Publisher fails with "Cannot find source directory"
- Ensure the IG directory path is correct in the publish script
- Check that `sushi-config.yaml` exists in the IG root

### "pause" command not found
- This was fixed: old scripts used `pause` (Windows), now use `read` (Unix)

### Jekyll build fails
- Install missing gems: `bundle install`
- Check Ruby version: `ruby --version` (need 2.5+)

### Canonical URLs not resolving
- Ensure `.htaccess` or nginx config is properly deployed
- The publisher generates redirect scripts in the docs directory

### Registry PR rejected
- Ensure all required fields are filled in `fhir-ig-list.json`
- Validate JSON syntax: `python -m json.tool < ig-registry/fhir-ig-list.json`

## References

- [Eliot Silver's Publishing Guide](https://www.argentixinfo.com/ig/howtopub/index.html)
- [IG Publication Request Documentation](https://confluence.hl7.org/display/FHIR/IG+Publication+Request+Documentation)
- [FHIR IG Registry](https://fhir.org/guides/registry/)
- [HL7 IG Publisher](https://github.com/HL7/fhir-ig-publisher)

## Support

For questions or issues:
- Email: info@medicinosnk.lt
- GitHub Issues: [HL7LT/publication](https://github.com/HL7LT/publication/issues)
