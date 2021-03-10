## Para instalar o projeto

git clone https://github.com/kevnpessoa/teste-user3.git
composer install
npm install
npm run dev
php artisan migrate
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=UserAccessSeeder


## Para testar a tela de lista de usuários
http://127.0.0.1:8000/


## Para testar a API
http://127.0.0.1:8000/users
