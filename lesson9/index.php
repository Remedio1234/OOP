<?php
    include "BankAccount.php";
    // $account = new BankAccount();

    // include "Customer.php";
    // $cust = new Customer;
    // $cust->name = "ACLC";
    // echo $cust->getName();

    // include "SettersAndGetters.php";
    // $setget = new SettersAndGetters;
    // $setget->setStudentName("Jose Rizal");
    // echo $setget->getStudentName();

    // $setget->setCalc(10,50);
    // echo $setget->getResult();

    $account                = new BankAccount();
    $account->accountNumber = 1;
    $account->balance       = 100;   
    
    $account->deposit(100);
    
    // echo $account->balance;

    if($account->withdraw(150)){
        echo $account->balance;
        echo " success";
    } else {
        echo "failed. Try again!";
    }
?>