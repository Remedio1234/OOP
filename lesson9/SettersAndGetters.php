<?php
    class SettersAndGetters {
        public $student_name; //properties
        public $num1;
        public $num2;

        public function setCalc($n1, $n2){
            $this->num1 = $n1;
            $this->num2 = $n2;
        }

        public function getResult(){
            return $this->num1 + $this->num2;
        }

        //$name ~ paramter or arguments
        public function setStudentName($name){
            $this->student_name = $name;
        }

        public function getStudentName(){
            return $this->student_name;
        }
    }
?>