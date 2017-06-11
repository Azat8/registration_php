<?php

include_once ROOT.'/components/Db.php';

class NewsController
{

    public function actionIndex(){
        echo 'NewsController actionIndex';

        $db = Db;

        echo $db;

        return true;

    }
    public function actionView($category,$id){


        echo 'Yesssssssssssssssss!!!!';


    }

}