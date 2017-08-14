#!/bin/sh

chown -R apache:apache /app

# to keep it running
tail -F /var/log/apache2/*log &

echo "[i] Starting daemon..."

# run apache httpd daemon
httpd -D FOREGROUND
