DB_PASSWORD = $$(cat .env | grep DATABASE_ROOT_PASSWORD | cut -d '=' -f 2)
DB_NAME = $$(cat .env | grep DATABASE_NAME | cut -d '=' -f 2)

runtestdb:
	docker run --name=ipw -e MYSQL_ROOT_PASSWORD=$(DB_PASSWORD) -e MYSQL_DATABASE=$(DB_NAME) -d --rm -p '3306:3306' mysql

migrateup:
	export $$(cat .env | grep -v ^# | xargs) && vendor/bin/phinx migrate -e development
