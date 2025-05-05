# Blog Import Tool

A small PHP project that imports blog posts and comments from JSONPlaceholder API into a MySQL database and provides a search form to find posts by comment text.

---

## 🇬🇧 English

### Features

- Imports blog posts and comments from:
  - https://jsonplaceholder.typicode.com/posts
  - https://jsonplaceholder.typicode.com/comments
- Stores them in a MySQL database
- Allows searching posts by comment text via a web form

### Requirements

- PHP 7.4 or higher
- MySQL / MariaDB
- Web server (Apache, Nginx, or built-in PHP server)

### Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/blog-import.git
   cd blog-import
Create the database:

Import schema.sql via phpMyAdmin or MySQL CLI:


mysql -u root -p < schema.sql
Configure the DB connection in config/db.php.

Run the import script:

php import.php
Expected output:

Loaded 100 posts and 500 comments
Open public/search.php in the browser to use the search form.

🇷🇺 Русский

**Возможности**
Импортирует записи и комментарии из:

  https://jsonplaceholder.typicode.com/posts
  
  https://jsonplaceholder.typicode.com/comments

Сохраняет их в базу данных MySQL

Форма поиска по тексту комментариев с отображением связанных записей

  Требования
  PHP 7.4 или новее
  
  MySQL / MariaDB
  
  Веб-сервер (Apache, Nginx, или встроенный в PHP)

**Установка**
**Клонируйте репозиторий:**

  git clone https://github.com/your-username/blog-import.git
  cd blog-import
**Создайте базу данных:**

Импортируйте schema.sql через phpMyAdmin или в терминале:

  mysql -u root -p < schema.sql
  Укажите параметры БД в config/db.php.

**Запустите скрипт импорта:**


php import.php
**Ожидаемый результат:**

  Загружено 100 записей и 500 комментариев
  Откройте public/search.php в браузере, чтобы воспользоваться формой поиска.

**Структура проекта**

blog-import/
├── config/            # Настройки подключения к БД
├── public/            # Форма поиска
├── src/               # Класс Importer
├── schema.sql         # Схема базы данных
├── import.php         # Запуск импорта
└── README.md          # Документация проекта
