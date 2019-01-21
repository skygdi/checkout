# checkout
##composer require skygdi/checkout:dev-master
##add this provider to config/app.php Skygdi\Checkout\CheckoutServiceProvider::class,
##example:
###Checkout::createInvoiceID("invoice_id_001");
###Checkout::checkInvoiceExist("invoice_id_001");
###Checkout::markAsPaid("invoice_id_001");
