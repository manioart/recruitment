## Uruchomienie aplikacji

```
git clone https://github.com/manioart/recruitment.git
```
```
cd recruitment
```
```
composer install
```
```
cp .env.example .env
```
```
php artisan key:generate
```
```
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```
```
php artisan sail:install
```
select mysql
```
sail up -d
```
```
sail artisan migrate
```
Aplikacja jest dostępna pod adresem: http://localhost/