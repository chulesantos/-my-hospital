#!/bin/bash

docker run -it --name my-hospital -p 8080:8080 -v $(pwd):/var/www/html -w /var/www/html chulesantos/php7.3 /bin/bash