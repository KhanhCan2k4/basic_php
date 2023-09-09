<?php 
    /**
     * TOPIC: EXERCISE 5 CHPATER 2 
     * create Student extends class User
     * add property $gpa 
     * constructor
     * rank()
     * 
     * NAME: LE VIET KHANH
     * CLASS: CD22TT11
     * ID: 22211TT2577
     * DATE: 2023/08/07
     */

    require 'User.php';

    class Student extends User {
        //fields
        private $gpa;

        //properties
        public function getGpa() {
            return $this->gpa;
        }

        public function setGpa($gpa) {
            $this->gpa = $gpa;
        }

        //construct
        public function __construct($username, $password, $firstname, $lastname, $gpa = 0) {
            parent::__construct($username, $password, $firstname, $lastname);
            $this->gpa = $gpa;
        }

        //methods

        /**
         * @param $gpa
         * @return string rank of this student base on $gpa
         */
        public function rank() {
            if ($this->gpa >= 8) {
                # code...
                return "A";
            } else if ($this->gpa >= 7) {
                # code...
                return "B";
            } else if ($this->gpa >= 5) {
                # code...
                return "C";
            } else {
                # code...
                return "D";
            }
            
        }

        public function __toString() {
            return $this->getUsername()." ".$this->getFullname()." ".$this->getGpa();
        }

        public function isValid() {
            if ($this->getUsername() == "") {
                return false;
            }

            if ($this->getFullname() == "") {
                return false;
            }

            if ($this->gpa == "") {
                return false;
            }

            return true;
        }
    }


?>