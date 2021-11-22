<?php
    // class BankAccount {
    //     public $accountNumber;
    //     public $balance;

    //     public function deposit($amount){
    //         if ($amount > 0) {
    //             $this->balance += $amount;
    //         }
    //     }

    //     public function withdraw($amount) {
    //         if ($amount <= $this->balance) {
    //             $this->balance -= $amount;
    //             return true;
    //         }
    //         return false;
	//     }

    // }

    class A {
        protected function test(){
            //implementation
        }
    }

    class B extends A {
        public function getTest(){
            return $this->test();
        }
    }
    
?>