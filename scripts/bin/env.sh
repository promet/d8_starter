#!/usr/bin/env bash

echo $PROJECT_ROOT

DEF_ENV_FILE=$PROJECT_ROOT/.env.example
[ -f $DEF_ENV_FILE ] && source $DEF_ENV_FILE
ENV_FILE=$PROJECT_ROOT/.env
[ -f $ENV_FILE ] && source $ENV_FILE
