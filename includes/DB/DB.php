<?php
include 'Table.php';
include 'Product.php';
include 'User.php';
include 'Contact.php';
if(! class_exists('DB')) {
    class DB{
        private $dbc;
        public function __construct(){
            $this -> connect();
            $this -> selectDB();
            $this -> dbc -> set_charset( CHARSET );
        }

        private function connect(){
            $this -> dbc = new mysqli(DBHOST, DBUSER, DBPASS);
            if( $this -> dbc -> connect_error ){
                $error = "
						خطا در اتصال به دیتابیس!
						<section lang = 'en'>{$this -> dbc -> connect_error}</section>";
                die( $error );
            }
        }
        private function selectDB(){
            $this -> dbc -> select_db(DBNAME);
            if( $this -> dbc -> error ){
                $error = "
						خطا در انتخاب دیتابیس!
						<section lang = 'en'>{$this -> dbc -> error}</section>";
                die( $error );
            }
        }

        public function execute( $sql ){
            $result = $this -> dbc -> query( $sql );
            if( $this -> dbc -> error ){
                $error = "
						خطا در اجرای کوئری!
						<section>{$sql}<br>
						{$this -> dbc -> error}</section>";
                die( $error );
                return false;
            }
            elseif($result !== true && $result !== false){ //Select
                $table=$result->fetch_all( MYSQLI_ASSOC );
                return $table;
            }
            elseif(isset($this -> dbc -> insert_id)) //Insert
                return $this -> dbc -> insert_id;
            else //Update/Delete
                return $result; //True | False
        }

        public function __destruct(){
            $this -> dbc -> close();
        }
    }
}