sudo cp .env.example .env (содержание своего env с ключами pusher предоставлю)
важно задать сначала правильные данные по разделу БД в .env, а ПОСЛЕ запустить sail up -d


composer install --ignore-platform-reqs

sail up -d

sail artisan key:generate

sail artisan migrate:refresh --seed

npm install

npm run watch

Регистрируемся, пишем в чат

