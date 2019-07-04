# factory

## Description
Factory Method in PHP. Factory method is a creational design pattern which solves the problem of creating product objects without specifying their concrete classes. Factory Method defines a method, which should be used for creating objects instead of direct constructor call (new operator).


## Examples

Retrieve a class by name:
```php
<?php

ProductFactory::getProductInstance('objectName');
```