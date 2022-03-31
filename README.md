> install

```shell
composer require root/laravel-model-comment
```

> start

示例

```php


public function up()
{
    Schema::create('new_ueser', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->comment('2434');
    });
}

```
