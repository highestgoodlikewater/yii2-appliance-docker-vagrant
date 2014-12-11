#!/bin/bash

render-templates.sh /etc/nginx/sites-templates /etc/nginx/sites-enabled
service php5-fpm start && nginx
