<?php
    class Db{
        public function __construct() {
            $con="";
        }
    public function conn()
    {
        $this->con=mysqli_connect('localhost','root','');
        return $this->con;
    }
}

?>