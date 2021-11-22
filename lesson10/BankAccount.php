<?php

    class BankAccount {
        private $accountNumber;
	    private $balance;

        public function __construct($accountNumber, $balance) {
            $this->accountNumber    = $accountNumber;
		    $this->balance          = $balance;
        }

        public function getBalance(){
            return $this->balance;
        }
    }
?>