<?php
 class DatabaseTest extends PHPUnit_Extensions_Database_TestCase
 {
	static private $pdo = null;
	private $conn = null;
	
	final public function getConnection()
	{
		print_r($GLOBALS);
		if ($this->conn === null) {
            if (self::$pdo == null) {
                self::$pdo = new PDO( $GLOBALS['DB_DSN'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASSWD'] );
            }
            $this->conn = $this->createDefaultDBConnection(self::$pdo, $GLOBALS['DB_DBNAME']);
        }

        return $this->conn;
	}
	
	final public function getDataSet()
	{
	}
 } 
?>