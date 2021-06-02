# Minimal project for begin test app.

## Install

```
export HOST_UID=$(id -u) && \
export HOST_GID=$(id -g) && \
docker-compose build && \
docker-compose up -d && \
docker-compose exec phpfpm composer install
```

## Swagger codegen

Generating a PHP client via Swagger codegen.

Open API v3:
```shell
docker run --rm \
-v ${PWD}/schemas:/schemas \
-v ${PWD}/swagger:/swagger \
swaggerapi/swagger-codegen-cli-v3 generate \
-i /schemas/schema3.json \
-l php \
-o /swagger/3
```

Open API v2:
```shell
docker run --rm \
-v ${PWD}/schemas:/schemas \
-v ${PWD}/swagger:/swagger \
swaggerapi/swagger-codegen-cli generate \
-i /schemas/schema2.json \
-l php \
-o /swagger/2
```
