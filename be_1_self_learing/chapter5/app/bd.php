<?php 
    class db {
        public static $connection;

        public function __construct(){
            self::$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            self::$connection->set_charset('utf8');
        }

        public function __destruct() {
            self::$connection->close();
        }

        public function __getData($object) {
            $array = array();

            while($row = $object->fetch_assoc()) {
                $array[] = $row;
            }

            return $array;
        }


        function getProducts($limit = 1000) {
            $sql = "SELECT * FROM products LIMIT $limit";
            $obj = self::$connection->query($sql);
            $array = array();

            while ($row = $obj->fetch_assoc()) {
                # code...
                $array[] = $row;
            }

            return $array;
        }

        function getProduct($id) {
            $sql = "SELECT * FROM products WHERE id = $id";
            $obj = self::$connection->query($sql);

            return $obj->fetch_object();
        }


        function getProtype($id) {
            $sql = "SELECT * FROM protypes WHERE type_ID = ".$id;
            $obj = self::$connection->query($sql);

            $array = array();

            while ($row = $obj->fetch_assoc()) {
                # code...
                $array[] = $row;
            }

            return $array;
        }


    }
?>