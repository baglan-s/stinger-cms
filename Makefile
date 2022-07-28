docker-up:
	docker-compose --env-file ./src/.env up

docker-up-d:
	docker-compose --env-file ./src/.env up -d

docker-down:
	docker-compose --env-file ./src/.env down