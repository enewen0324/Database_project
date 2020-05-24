# Database_project_生命禮儀
## 報告
### https://hackmd.io/CrXFTTP9TWa_t7AUnU9NyQ?fbclid=IwAR3J0-FblgjldxzHbo_aYu1wTxpx5hF1ES7Q-X7sufRqsuhb32qevuvWCRo
## meeting紀錄
### https://hackmd.io/1QbUa7k-TF6oVKuelIhmjw?both

## Setting
#### git clone https://github.com/enewen0324/Database_project.git --branch master
#### cd Database_project
#### git submodule update --init
#### cd laradock/
#### cp env-example .env

## start laradock
#### docker-compose up -d nginx mysql workspace php-fpm
#### docker-compose exec --user=laradock workspace bash
#### composer install
#### yarn
#### cp .env.example .env

## generate key
#### php artisan key:generate
