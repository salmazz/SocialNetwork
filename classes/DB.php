<?php 


class DB{
    private static function connect(){
        $pdo = new PDO('mysql:host=localhost;dbname=socialnetwork;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    public static function query($query,$parms = array()){
         $statment= self::connect()->prepare($query);
         $statment->execute($parms);
         if(explode($query,' ')[0] == 'SELECT'){
     $date=$statment->fetchALL();
         return $data;
         }
    
    }
}