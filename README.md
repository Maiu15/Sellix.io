# Sellix.io
A Sellix.io wrapper in PHP

# Installation
Install using composer
```git
composer require maiu/sellix
```

# Usage

```php
require_once('./vendor/autoload.php');
$sellix = new \Sellix\Sellix('api_key_here');

echo $sellix->getProducts();
```

# Available functions

### getOrders()
Get all orders

### getOrder(id)
Get a specific order

### getProducts()
Get all products

### getProduct(id)
Get a specific product
