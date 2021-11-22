<?php include "BankAccount.php" ?>

<?php
   $account = new BankAccount(1, 100);


   echo $account->getBalance();
?>