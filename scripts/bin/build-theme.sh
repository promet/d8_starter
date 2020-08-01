#!/usr/bin/env bash

source ${PROJECT_ROOT}/scripts/bin/env.sh

THEME_NAME='';

cd ${PROJECT_ROOT}/${DOCROOT}/themes/custom/$THEME_NAME; yarn; yarn build 
