#!/bin/bash
# Wrapper script for publishing HL7 Europe General IG
# Calls the generic _publish.sh script

cd "$(dirname "$0")"
./_publish.sh eu ig-eu-ehds
