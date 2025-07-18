# laravelapi

```shell
composer create-project laravel/laravel
docker run --rm -v $(pwd):/app composer/composer install
composer require laravel/sail --dev
```

```shell
artisan make:migration create_products_table --create=products
artisan make:migration create_items_table --create=items
artisan make:controller ProductController --resource --model=Product
artisan make:controller ItemController --resource --model=Item
```

