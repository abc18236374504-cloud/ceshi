#!/bin/bash
php -S localhost:8080 &
sleep 5
curl "http://localhost:8080/index.php?msg=你好"
kill $!
