
log:
	docker compose logs -f php-fpm

dev-build:
	docker compose -f docker-compose.yml down
	docker compose -f docker-compose.yml up -d --build
	docker compose exec php-fpm composer install
	docker compose exec php-fpm bash

dev-build-no-cache:
	docker compose -f docker-compose.yml down
	docker compose -f docker-compose.yml build --no-cache
	docker compose -f docker-compose.yml up -d
	docker compose logs -f php-fpm


dev:
	docker compose -f docker-compose.yml down
	docker compose -f docker-compose.yml up -d
	docker compose exec php-fpm bash
