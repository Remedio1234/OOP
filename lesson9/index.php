<?php
    // include "BankAccount.php";
    // $account = new BankAccount();

    // include "Customer.php";
    // $cust = new Customer;
    // $cust->name = "ACLC";
    // echo $cust->getName();

    include "SettersAndGetters.php";
    $setget = new SettersAndGetters;
    // $setget->setStudentName("Jose Rizal");
    // echo $setget->getStudentName();

    $setget->setCalc(10,50);
    echo $setget->getResult();
?>