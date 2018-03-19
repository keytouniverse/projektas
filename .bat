@echo off
cd %CD%
IF EXIST %CD%\vendor (
echo ===== Composer'is egzistuoja =====
) ELSE (
echo ===== Composer'is neegzistuoja, instaliuojame... =====
composer install
echo ===== Kopijuojame ".env.example" =^> ".env"... =====
copy .env.example .env
echo ===== Sukuriamas raktas... =====
php artisan key:generate
echo ===== Baigta. =====
pause
)
echo ===== Kopijuojame ".env.example" =^> ".env"... =====
copy .env.example .env
echo ===== Sukuriamas raktas... =====
php artisan key:generate
echo ===== Baigta. =====
pause