<?php

require_once 'PaymentInterface.php';
require_once 'Ahly.php';
require_once 'Qnb.php';
require_once 'Cib.php';
require_once 'payment.php';



$pay = new Payment(new Qnb());
$pay->paymentAccount()->deposite();