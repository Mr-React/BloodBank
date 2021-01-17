<?php
    class Db{
        public function __construct() {
            $con="";
        }
    public function conn()
    {
        $this->con=mysqli_connect('remotemysql.com','bhDbcQRgN8','FMjHpHykUv');
        return $this->con;
    }
}

?>