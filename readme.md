sudo cp .env.example .env (содержание своего env с ключами pusher предоставлю)
важно задать сначала правильные данные по разделу БД в .env, а ПОСЛЕ запустить sail up -d


composer install --ignore-platform-reqs

sail up -d

sail artisan key:generate

если на этом этапе ошибка 'Unknown database', то нужно остановить докер командой sail down -v
если ошибка не подходит имя пользователя/пароль, то нужно удалить образ этой БД через sail

sail artisan migrate:refresh --seed

npm install

npm run watch

Регистрируемся, пишем в чат

