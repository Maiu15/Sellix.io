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

### getFeedbacks()
Get all feedbacks

### getFeedback(id)
Get a specific feedback

### getCoupons()
Get all coupons

### getCoupon(id)
Get a specific coupon

### getCategories()
Get all categories

### getCategory(id)
Get a specific category

### getQueries()
Get all queries

### getQuery(id)
Get a specific query

### getBlacklist()
Get blacklist

### getBlacklistId(id)
Get blacklist by id
