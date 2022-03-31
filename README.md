> install

```shell
composer require the-jane-world/laravel-model-comment
```

> start

示例

```php


public function up()
{
    Schema::create('new_users', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->comment('新用户表');
    });
}

```


```sql

CREATE TABLE `new_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='新用户表';

```
