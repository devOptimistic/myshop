<?php
if(! class_exists('Table')) {
    class Table
    {
        protected static function columnsList( $vars, $sep = ', ' ){
            // رشته‌ای شامل اسامی ستون‌های جدول را بر میگرداند
            $columns = array_keys( $vars );
            return join($sep , $columns);
        }
        protected static function valuesList( $vars, $sep = "', '" ){
            // رشته‌ای شامل مقادیر رکورد را بر میگرداند
            $values = array_values( $vars );
            return "'" . join($sep , $values) . "'";
        }
        protected static function columnsValue($params,$sep = ', '){
            foreach ($params as $key => $value) {
                $varPairs[]="{$key} = '{$value}'";
            }
            return join($sep,$varPairs);
        }
        public static function add( $params ){
            $params['status']='default';
            $params['imgSrc']=SITE_URL.assets("images/pic.jpg");
            $columnsString = self::columnsList( $params );
            $valuesString = self::valuesList( $params );
            $tableName = static::class;   //__CLASS__ //get_class() //self::class 
            // 2. create insert query
            $sql = "INSERT INTO {$tableName}({$columnsString}) 
                    VALUES({$valuesString})";
            $result = $GLOBALS['db'] -> execute( $sql );
            // C. success message
            if( $result )
                Alert::alerts(" {$tableName}  با موفقیت ثبت شد!", 'success');

            return $result;

        }
        public static function update($id,$params){
            $columnsValue = self::columnsValue( $params );
            $tableName = static::class;   //__CLASS__ //get_class() //self::class 
            // 2. create insert query
            $sql = "UPDATE {$tableName}
                    SET {$columnsValue}
                    WHERE id={$id}";
            $result = $GLOBALS['db'] -> execute( $sql );
            // C. success message
            if( $result )
                Alert::alerts("{$tableName} ذخیره شد", 'success');
        }
        public static function delete($id){
            $tableName = static::class;   //__CLASS__ //get_class() //self::class 
            //$sql="DELETE FROM {$tableName}
            //      WHERE id={$id}";
            //ما نمیخوایم کلا سطر رو پاک کنیم چون ممکنه این سطر از جدول یک سری سوابق داشته باشه
            $sql= "UPDATE {$tableName}
                   SET status = 'deleted'
                   WHERE id={$id}";  
            $result = $GLOBALS['db'] -> execute( $sql );
            // C. success message
            if( $result )
                Alert::alerts("{$tableName} حذف شد", 'success');      

        }
        public static function find($where='true',$order='id DESC',$offset=0,$count=1000){
            // 2. create find query
            $tableName = static::class;   //__CLASS__  //get_class() //self::class
            $sql="SELECT * FROM {$tableName}
                  WHERE {$where} AND status != 'deleted'
                  ORDER BY {$order}
                  LIMIT {$offset},{$count}
            ";
            $table = $GLOBALS['db'] -> execute( $sql );

            return $table;
        }
    }
}
?>