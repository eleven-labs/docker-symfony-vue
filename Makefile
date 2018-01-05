include .env

help: ## This help.
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_-]+:.*?## / {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

.DEFAULT_GOAL := help

build: ## Build containers
	$(info --> Build containers)
	@docker-compose build

up: ## Run containers
	$(info --> Run containers)
	@docker-compose up -d --build --force-recreate

start: ## Start containers
	$(info --> Start containers)
	@docker-compose start

stop: ## Stop containers
	$(info --> Stop container)
	@docker-compose stop

down: ## Stop and remove containers
	$(info --> Stop and remove a running containers)
	@docker-compose down

log: ## Display logs
	$(info --> Display log)
	@docker-compose logs --follow

ifeq (bash,$(firstword $(MAKECMDGOALS)))
  RUN_ARGS := $(wordlist 2,$(words $(MAKECMDGOALS)),$(MAKECMDGOALS))
  $(eval $(RUN_ARGS):;@:)

  ifeq ($(RUN_ARGS),)
  	RUN_ARGS := php
  endif
endif
bash: ## Run bash inside container app
	$(info --> Run bash inside the container $(RUN_ARGS))
	@docker-compose exec $(RUN_ARGS) bash

ifeq (composer,$(firstword $(MAKECMDGOALS)))
  RUN_ARGS := $(wordlist 2,$(words $(MAKECMDGOALS)),$(MAKECMDGOALS))
  $(eval $(RUN_ARGS):;@:)
endif
composer: ## Run npm inside container
	$(info --> Run composer inside the container app)
	@docker-compose exec app composer $(RUN_ARGS)

ifeq (npm,$(firstword $(MAKECMDGOALS)))
  RUN_ARGS := $(wordlist 2,$(words $(MAKECMDGOALS)),$(MAKECMDGOALS))
  $(eval $(RUN_ARGS):;@:)
endif
npm: ## Run npm inside container node
	$(info --> Run npm inside the container node)
	@docker-compose exec node npm $(RUN_ARGS)

ifeq (yarn,$(firstword $(MAKECMDGOALS)))
  RUN_ARGS := $(wordlist 2,$(words $(MAKECMDGOALS)),$(MAKECMDGOALS))
  $(eval $(RUN_ARGS):;@:)
endif
yarn: ## Run yarn inside container node
	$(info --> Run npm inside the container node)
	@docker-compose exec node yarn $(RUN_ARGS)
