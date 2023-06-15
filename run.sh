docker build -t php-digger .
docker run --rm --workdir /home -v$(pwd):/home php-digger php digger.php
