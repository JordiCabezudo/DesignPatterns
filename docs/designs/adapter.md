# adapter

## Description
An adapter allows two incompatible interfaces to work together. This is the real-world definition for an adapter. Interfaces may be incompatible, but the inner functionality should suit the need. The adapter design pattern allows otherwise incompatible classes to work together by converting the interface of one class into an interface expected by the clients.


## Examples

Persist product on different repository implementations
```php
<?php

$createProductService = new CreateProduct(
    new Implemeentation()
);

$createProductService->execute(Uuid);
```