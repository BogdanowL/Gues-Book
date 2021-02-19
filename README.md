Установка:  
  
Laravel 7  
  
Корневая директория сайта /public  
  
Создайте свой ENV файл или заполните .env.example переименовав его в .ENV  
Установите соединение с ваше базой данных  
establish a database connection in the .env file  
DB_DATABASE= `your name`  
DB_USERNAME= `your login`  
DB_PASSWORD= `your password`  

Затем выполните в консоли, чтобы создать таблицы в БД. Для успешного заполнения базы данных необходим composer на вашем сервере  
launch the command line:  
`php artisan migrate`  

Для тестирования на локальном и запуска приложения сервере выполните в консоли  
`php artisan serve`  
  

