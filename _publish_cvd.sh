#!/bin/bash
# Wrapper script for publishing LT CVD IG
# Calls the generic _publish.sh script

cd "$(dirname "$0")"
./_publish.sh cvd
