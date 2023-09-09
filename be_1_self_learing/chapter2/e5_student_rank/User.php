<?php 

    /**
     * TOPIC: EXERCISE 1-2 CHAPTER 2 
     * CREAT A NEW CLASS : USER 
     * 
     * NAME: LE VIET KHANH
     * CLASS: CD22TT11
     * ID: 22211TT2577
     * DATE: 2023/08/05
     */

     /**
      * people who uses courses at website abc.com
      * @author Khanh <22211tt2577@mail.tdc.edu.vn>
      * @copyright 2023 ACER
      * @license http://www.opensource.org/licenses/
      * @version 1.0
      */
     class User {
        //fields
        private $username;
        private $password;
        private $firstname;
        private $lastname;

        //properties
        public function getUsername() {
            return $this->username;
        }
        
        public function getFullname() {
            return ($this->firstname." ".$this->lastname);
        }
        
        //constructor
        public function __construct($username, $password, $firstname, $lastname) {
            $this->username = $username;
            $this->password = password_hash($password, PASSWORD_DEFAULT);
            $this->firstname = $firstname;
            $this->lastname = $lastname;
        }

        //methods
        public function __toString() {
            return $this->username."";
        }

        static function login($username, $password) {
            if ($username == "admin" && $password == "abc") {
                return true;
            } else {
                return false;
            }
        }

     }

?>