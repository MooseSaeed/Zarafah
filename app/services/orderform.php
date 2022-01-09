<?php

namespace App\services;

use JotForm;

class Orderform
{
    public function addOrder(string $firstname, string $lastname, string $fulladdress, string $city, string $phonenumber, string $productname)
    {

        include "../vendor/jotform/jotform-api-php/JotForm.php";

        $jotformAPI = new JotForm(config("services.jotform.key"));

        $submission = [
            "3_first" => $firstname,
            "3_last" => $lastname,
            "4_addr_line1" => $fulladdress,
            "4_city" => $city,
            "5" => $phonenumber,
            "6" => $productname
        ];

        return $jotformAPI->createFormSubmission(config("services.jotform.form"), $submission);
    }
}