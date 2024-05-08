DB_PASSWORD := $(shell cat .env | grep DATABASE_ROOT_PASSWORD | cut -d '=' -f 2)
DB_NAME := $(shell cat .env | grep DATABASE_NAME | cut -d '=' -f 2)
DB_USER := $(shell cat .env | grep DATABASE_USER | cut -d '=' -f 2)

info:
	@echo "DB_PASSWORD: $(DB_PASSWORD)"
	@echo "DB_NAME: $(DB_NAME)"
	@echo "DB_USER: $(DB_USER)"

runtestdb:
	docker run --name=ipw \
		-e MYSQL_ROOT_PASSWORD=$(DB_PASSWORD) \
		-e MYSQL_DATABASE=$(DB_NAME) \
		-d --rm -p '3306:3306' \
		mysql



migrateup:
	export $$(cat .env | grep -v ^# | xargs) && vendor/bin/phinx migrate -e development
