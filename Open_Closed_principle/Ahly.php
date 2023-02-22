<?php


class Ahly implements PaymentInterface 
{

    public function deposite()
    { 
        echo __CLASS__ . " deposite : ";

    }

    public function withdraw()
    {

        echo __CLASS__ . " withdraw : ";

    }

}


