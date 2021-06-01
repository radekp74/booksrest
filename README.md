# Books REST APIs

docker-compose up -d --build
docker-compose exec restapi composer dump-autoload

```
## Swagger documentation
```
http://localhost:3000/apidocs/

```
## Execute PHPUnit tests
```
docker-compose exec -T restapi php ./vendor/bin/phpunit --log-junit test-results.xml
