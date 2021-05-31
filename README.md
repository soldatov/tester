# Minimal project for begin test app.

## Install

```
export HOST_UID=$(id -u) && \
export HOST_GID=$(id -g) && \
docker-compose build && \
docker-compose up -d && \
docker-compose exec phpfpm composer install
```
