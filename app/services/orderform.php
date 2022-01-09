<?php

namespace App\services;

use JotForm;

class Orderform
{
    public function addOrder(string $firstname, string $lastname, string $fulladdress, string $city, string $phonenumber, string $productname)
    {

        $submission = [
            "3_first" => $firstname,
            "3_last" => $lastname,
            "4_addr_line1" => $fulladdress,
            "4_city" => $city,
            "5" => $phonenumber,
            "6" => $productname
        ];

        return $this->client()->createFormSubmission(config("services.jotform.form"), $submission);
    }

    public function client()
    {
        include "../vendor/jotform/jotform-api-php/JotForm.php";

        return new JotForm(config("services.jotform.key"));
    }
}