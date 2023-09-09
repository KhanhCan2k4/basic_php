<?php 
    class database {
        static $connection = null;

        function __construct() {
            self::$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            self::$connection->set_charset('utf8');
        }

        function __destruct() {
            self::$connection->close();
        }

        /**
         * @param string $keywordName
         * searches for a keyword in the database using the specified query string and returns the corresponding
         */

        function searchProductsByName($keywordName) {
            $sql = "SELECT * FROM products WHERE name LIKE '%".$keywordName."%'";

            $objResult = self::$connection->query($sql);
            $arrayResult = array();

            while ($row = $objResult->fetch_assoc()) {
                # code...
                $arrayResult[] = $row;
            }

            return $arrayResult;
        }

        //get products from the database
        function getProducts() {
            $sql = "SELECT * FROM products";

            $objResult = self::$connection->query($sql);
            $arrayResult = array();

            while ($row = $objResult->fetch_assoc()) {
                # code...
                $arrayResult[] = $row;
            }

            return $arrayResult;
        }

        //sperate pages 
        public function createLinks($baseUrl, $totalRows, $page, $perPage) {
            //no data --> not sperate pages
            if ($totalRows <= 0) {
                # code...
                return "";
            }

            // sum of pages
            $totalLinks = ceil($totalRows/$perPage);

            // 1 page --> not sperate pages
            if ($totalLinks <= 1) {
                # code...
                return "";
            }

            $link = "";

            for ($i=1; $i <= $totalLinks ; $i++) { 
                # code...
                $link = $link."<a href='$baseUrl&page=$i'> $i </a>";
            }

            return $link;

        }
    }
?>