docker-up:
	docker-compose up -d
docker-restart:
	docker compose down && docker compose up -d
