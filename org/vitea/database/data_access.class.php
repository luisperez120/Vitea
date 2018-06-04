<?php
class DB{

    private static $connection = null;

    public static function getDBConnection(){
        if(self::$connection === null){
            self::$connection = new PDO('sqlite:' . __DIR__ . '/datos.db');
            self::$connection->exec('PRAGMA foreign_keys = ON;');
            self::$connection->exec('PRAGMA encoding="UTF-8";');
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$connection;
    }

    public static function execute_sql($sql,$parms=null){
        try {
            $db = self::getDBConnection();
            $ints= $db->prepare($sql);
            if ($ints->execute($parms)) {
                return $ints;
            }
        }
        catch (PDOException $e) {
            // ¡Esto debería estar en presentation!
            echo '<h3>Error en al DB: ' . $e->getMessage() . '</h3>';
        }
        return false;
    }

    public static function user_exists($user, $password, &$res){
        $db = self::getDBConnection();
        $inst=$db->prepare('SELECT * FROM user WHERE username=? and password=?');
        $inst->execute(array($user, md5($password)));
        $inst->setFetchMode(PDO::FETCH_NAMED);
        $res=$inst->fetchAll();
        return count($res) == 1;
    }

}
