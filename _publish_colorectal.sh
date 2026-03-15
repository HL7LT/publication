#!/bin/bash
# Wrapper script for publishing LT Colorectal IG
# Calls the generic _publish.sh script

cd "$(dirname "$0")"
./_publish.sh colorectal
