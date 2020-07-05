# Database_project_生命禮儀
## 報告
### https://hackmd.io/CrXFTTP9TWa_t7AUnU9NyQ?fbclid=IwAR3J0-FblgjldxzHbo_aYu1wTxpx5hF1ES7Q-X7sufRqsuhb32qevuvWCRo
## meeting紀錄
### https://hackmd.io/1QbUa7k-TF6oVKuelIhmjw?both

### Required
- PHP 7.2+
- Docker
- Docker-compose
- Composer
- Laravel
- Yarn

### Install
```
   git clone https://github.com/enewen0324/Database_project.git --branch dev
   cd Database_project
```

### Init submodule
```
   git submodule update --init
   cd laradock/
   cp env-example .env
```

### Start laradock
```
   docker-compose up -d nginx mysql workspace php-fpm
   docker-compose exec --user=laradock workspace bash
   composer install
   yarn
   cp .env.example .env
   (cp example.env .env)
   (for Macos)
```

### Generate key
```
   php artisan key:generate
   (Then you can use exit command to exit workspace)
```

### Important
```
    you may need to modify .env file for your environment
```
