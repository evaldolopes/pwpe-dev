# ─── Makefile – PWPE Docker ─────────────────────────────────────────────────
# Uso: make <comando>
# Requer: Docker Desktop com WSL2 habilitado

.PHONY: help up down build restart logs shell artisan composer npm env key migrate seed fresh test

# ─── Help ────────────────────────────────────────────────────────────────────
help:
	@echo ""
	@echo "  Comandos disponíveis:"
	@echo ""
	@echo "  make up         – Sobe todos os containers em background"
	@echo "  make down       – Para e remove containers"
	@echo "  make build      – Reconstrói as imagens"
	@echo "  make restart    – Reinicia todos os containers"
	@echo "  make logs       – Exibe logs em tempo real"
	@echo "  make shell      – Acessa o container PHP (bash)"
	@echo "  make artisan c=<cmd>   – Executa comando Artisan (ex: make artisan c=migrate)"
	@echo "  make composer c=<cmd>  – Executa comando Composer"
	@echo "  make npm c=<cmd>       – Executa comando NPM no container Vite"
	@echo "  make env        – Copia .env.docker para src/.env"
	@echo "  make key        – Gera APP_KEY no Laravel"
	@echo "  make migrate    – Executa migrations"
	@echo "  make seed       – Executa seeders"
	@echo "  make fresh      – migrate:fresh --seed"
	@echo "  make test       – Executa testes PHP"
	@echo ""

# ─── Containers ──────────────────────────────────────────────────────────────
up:
	docker compose up -d

down:
	docker compose down

build:
	docker compose build --no-cache

restart:
	docker compose restart

logs:
	docker compose logs -f

# ─── Acesso ao container ──────────────────────────────────────────────────────
shell:
	docker compose exec app bash

# ─── Laravel ──────────────────────────────────────────────────────────────────
artisan:
	docker compose exec app php artisan $(c)

composer:
	docker compose exec app composer $(c)

npm:
	docker compose exec vite npm $(c)

env:
	@cp .env.docker src/.env
	@echo ".env copiado para src/.env"

key:
	docker compose exec app php artisan key:generate

migrate:
	docker compose exec app php artisan migrate

seed:
	docker compose exec app php artisan db:seed

fresh:
	docker compose exec app php artisan migrate:fresh --seed

test:
	docker compose exec app php artisan test
