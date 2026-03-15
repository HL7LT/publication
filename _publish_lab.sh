#!/bin/bash
# Wrapper script for publishing LT Lab IG
# Calls the generic _publish.sh script

cd "$(dirname "$0")"
./_publish.sh lab
