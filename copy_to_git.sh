#!/bin/bash

mkdir -p "/tmp/GitHub/customtab/source/customtab/usr/local/emhttp/plugins/customtab/"

cp /usr/local/emhttp/plugins/customtab/* /tmp/GitHub/customtab/source/customtab/usr/local/emhttp/plugins/customtab -R -v -p
find . -maxdepth 9999 -noleaf -type f -name "._*" -exec rm -v "{}" \;

