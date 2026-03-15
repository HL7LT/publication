#!/bin/bash
# Wrapper script for publishing LT Breast IG
# Calls the generic _publish.sh script

cd "$(dirname "$0")"
./_publish.sh breast
