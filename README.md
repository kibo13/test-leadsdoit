## Weather Microservice

```bash
# download project
git clone git@github.com:kibo13/test-leadsdoit.git

# install dependencies
composer install

# copy file .env
copy .env.example .env

# generate key
php artisan key:generate

# database configuration
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=database_username
DB_PASSWORD=database_password

# run migrations 
php artisan migrate

# open-weather 
OPENWEATHER_API_KEY=9876587a8f81e7f488b895f3f021f016
OPENWEATHER_CITY=Almaty

# x-token
X_TOKEN=iQUevEDhofIvP4QGomAFL0kSoHR6VlTn
```
