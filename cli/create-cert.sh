#!/bin/bash

set -e

source "../.env"

DOMAIN=$(echo "$DOMAIN")

mkcert -install "${DOMAIN}"

sudo mkdir -p ../certs

sudo find . -type f -name "*.pem" -exec mv {} ../certs \;
