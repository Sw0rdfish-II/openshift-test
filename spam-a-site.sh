#!/bin/bash
while true; do curl -s "$1?[1-1000]"; done &>/dev/null
