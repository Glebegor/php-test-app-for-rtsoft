runtestdb:
	docker run --name=ipw -e MYSQL_ROOT_PASSWORD="123321" -e MYSQL_DATABASE="test" -d --rm -p 3306:3306 mysql
migrateUp:
	ipw/vendor/bin/phinx migrate