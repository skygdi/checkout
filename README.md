# A Laravel independent checkout
#### Sometimes, we need to add a simple checkout data's table for like express payment checkout and IPN
##### `composer require skygdi/checkout`
#### `php artisan migrate`
#### Example: 
##### `checkout::createInvoiceID("invoice_id_001");` 
##### `Checkout::checkInvoiceExist("invoice_id_001");`
##### `Checkout::markAsPaid("invoice_id_001");`