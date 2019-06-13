# PHP CLI

## PHP 内蔵 Web サーバを起動

```php
php -S 127.0.0.1:8000
```

## SQLite メモ

```sh
mkdir db
sqlite3 db/database.sqlite
```

```sql
create table books(id integer, title string);
.tables

insert into books values(1,'やさしい高校数学3');
insert into books values(2,'英文長文問題精講');
insert into books values(3,'花火');
select * from books; order by id DESC;

.exit
```
