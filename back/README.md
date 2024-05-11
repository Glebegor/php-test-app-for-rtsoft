# Backend 
## stack
- Php (Nette, Nette tester)
- Phinx
- PHPUnit
- Rector
- PHPStan
- MySQL
- Docker
- Makefile

[//]: # (## API)

[//]: # (### Rules)

[//]: # (#### api/v1)

[//]: # (It's open api for all users)

[//]: # (#### api/v2)

[//]: # (It's api that has protection by JWT tokens.)
## DB
## docs
## env
### .env

```dotenv
DATABASE_ROOT_PASSWORD="123321"
DATABASE_HOST='127.0.0.1'
DATABASE_NAME='test'
DATABASE_USER='root'
DATABASE_PORT='3306'
DATABASE_CODDING='utf8'

SECRET_KEY="--SECRET--"
```

## How to run
### makefile commands
#### runtestdb
running test database on mysql in docker container without saving the data.
