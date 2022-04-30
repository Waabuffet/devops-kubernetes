#!/bin/bash

docker-compose down
./clean-images.sh
docker-compose up --build --force-recreate --no-deps -d