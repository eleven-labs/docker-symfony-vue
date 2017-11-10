DOCKER - SYMFONY - VUE.JS
=========================

# Requirements

- Linux (debian or ubuntu) or MacOS X
- [docker](https://docs.docker.com/)
- [docker-compose](https://docs.docker.com/compose/)

# Get project

```bash
git clone git@github.com:eleven-labs/docker-symfony-vue.git && cd docker-symfony-vue
```

# Change environment variable
```bash
cp .env.dist .env
```

```dotenv
# DATABASE
POSTGRES_DB=                This is name of database
POSTGRES_USER=              This is user of database
POSTGRES_PASSWORD=          This is password of database
POSTGRES_PORT=              This is the port of used by postgreSQL

# PORT WEB
WEB_PORT=                   This is web port of website
ELK_PORT=                   This is port of ELK

# SYMFONY
SECRET=                     This is the secret of Symfony

#SMTP
SMTP_USER=                  This is username of mail server
SMTP_PASSWORD=              This is password of mail server
SMTP_HOST=                  This is host of mail server
SMTP_TRANSPORT=             This is protocol transport of mail server

#REDIS
REDIS_DSN=                  This is DNS of Redis

```

# Initialize project

- Initialize project with script
```bash
bin/app init
```

- Initialize project without script
```bash
docker-compose build --force-rm --no-cache
docker-compose up -d --force-recreate
docker-compose exec -T php chmod 777 -R /var/www/symfony/var/cache
docker-compose exec -T php chmod 777 -R /var/www/symfony/var/logs
docker-compose exec -T --user www-data php composer install -n
docker-compose exec -T --user www-data php bin/console doctrine:database:create --if-not-exists --no-interaction
docker-compose exec -T --user www-data php bin/console doctrine:schema:update --no-interaction --force
docker-compose exec -T --user www-data php bin/console doctrine:fixtures:load --no-interaction

```

# Basic command with script

```bash
bin/app init            # Initialize project
bin/app start           # Start project
bin/app stop            # Stop project
bin/app bash            # Use bash inside the app container
bin/app exec            # Execute a command inside the app container
bin/app destroy         # Removes all the project Docker containers with their volumes
bin/app console         # Use the Symfony console
bin/app composer        # Use Composer inside the app container
bin/app tests           # Run test project inside the app container

```
