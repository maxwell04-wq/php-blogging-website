#!/bin/bash

# npm i && npm run build
# composer install

service php8.1-fpm start > /dev/null

service nginx start > /dev/null

service mongodb start > /dev/null

tail -f /dev/null
