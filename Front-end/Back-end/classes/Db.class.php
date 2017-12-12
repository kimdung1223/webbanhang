<?php
class Db
{
	protected $data, $conn;
	
	function __construct()
	{
		$dsn = "mysql:host=" .HOST."; dbname=". DB;
		try
		{
		$this->conn = new PDO( $dsn, USER, PASS);
		$this->conn->query("set names 'utf8' ");	
		}
		catch(Exception $e)
		{
		   echo 'Lỗi: '. $e->getMessage();
		   exit;
		}
		
	}
	
	public function query($sql, $arr=array())
	{
		
		$stm = $this->conn->prepare($sql);
		try
		{$n = $stm->execute($arr);
	
		}
		
		catch (PDOException $e) {
    echo ' failed: ' . $e->getMessage();
		}
		$this->data = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;	
	}
}