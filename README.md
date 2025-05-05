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
   ```

2. Create the database:

   - Import `schema.sql` via phpMyAdmin or MySQL CLI:
     ```bash
     mysql -u root -p < schema.sql
     ```

3. Configure the DB connection in `config/db.php`.

4. Run the import script:
   ```bash
   php import.php
   ```

   Expected output:
   ```
   Loaded 100 posts and 500 comments
   ```

5. Open `public/search.php` in the browser to use the search form.

---

## 🇷🇺 Русский

### Возможности

- Импортирует записи и комментарии из:
  - https://jsonplaceholder.typicode.com/posts
  - https://jsonplaceholder.typicode.com/comments
- Сохраняет их в базу данных MySQL
- Форма поиска по тексту комментариев с отображением связанных записей

### Требования

- PHP 7.4 или новее
- MySQL / MariaDB
- Веб-сервер (Apache, Nginx, или встроенный в PHP)

### Установка

1. Клонируйте репозиторий:
   ```bash
   git clone https://github.com/your-username/blog-import.git
   cd blog-import
   ```

2. Создайте базу данных:

   - Импортируйте `schema.sql` через phpMyAdmin или в терминале:
     ```bash
     mysql -u root -p < schema.sql
     ```

3. Укажите параметры БД в `config/db.php`.

4. Запустите скрипт импорта:
   ```bash
   php import.php
   ```

   Ожидаемый результат:
   ```
   Загружено 100 записей и 500 комментариев
   ```

5. Откройте `public/search.php` в браузере, чтобы воспользоваться формой поиска.

---

###  Структура проекта

```
blog-import/
├── config/         # Настройки подключения к БД
├── public/         # Форма поиска
├── src/            # Класс Importer
├── schema.sql      # Схема базы данных
├── import.php      # Скрипт импорта
└── README.md       # Документация проекта
```

---


