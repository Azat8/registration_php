<?php

/**
 * Created by PhpStorm.
 * User: mkhit
 * Date: 09.06.2017
 * Time: 1:27
 */
class Db
{
    public function __construct(){

        $conf = mysqli_connect("localhost","root", "", "mvc_site");

        $sql = "SELECT * FROM news";

        $query = mysqli_query($conf,$sql);

        $row = mysqli_fetch_array($query);
        echo '<pre>';
        print_r($row);

    }
}