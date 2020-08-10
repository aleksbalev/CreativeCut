Настройка config файла
===============================

## Инициализация сборщика parcel

1. `npm i` - Установка пакетов (node_modules)
2. `npm run dev` - для запуска parcel в режиме разработки
3. `npm run build` - для запуска parcel в режиме сборки. Обязательно перед деплоем!!!

## Продакшин настройки, данные для сервера
В `core/config/config.inc.php` нужно изменить данные в этих полях:
```php
$DNS = '';
$database_type = 'mysql';
$database_server = 'localhost';
$database_user = 'database user';
$database_password = 'database password';
$database_connection_charset = 'utf8';
$dbase = 'data base name';
$table_prefix = 'table prefix, default - inside_';
```

## Локальная разработка, подключение к локальной базе
1. Скопируй `core/config/local/local_config.simple.php` и переназови в `local_config.php`.
2. Измени эти данные на свои локальные:
```php
$database_type = 'mysql';
$database_server = 'localhost';
$database_user = 'root';
$database_password = 'root';
$database_connection_charset = 'utf8';
$dbase = '';
$table_prefix = '';
$DNS = 'Your domain name';
```
3. Важно чтобы файл `local_config.php` был прописан в `.gitignore` файле, иначе на сервере после выгрузки сайт не заработает, потому-что будет пытаться подключиться с данными из `local_config.php` файла.