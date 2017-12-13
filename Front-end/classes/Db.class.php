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
	public function getData()
		{
			return $this->data;	
		}
	
	public function getRowCount()
		{
			return $this->_numRow;	
		}
		
		public function queryCart($sql, $arr = array(), $mode = PDO::FETCH_ASSOC)
		{
			$stm = $this->conn->prepare($sql);
			if (!$stm->execute( $arr)) 
				{
				echo "Sql lỗi."; exit;	
				}
			$this->_numRow = $stm->rowCount();
			return $stm->fetchAll($mode);
			
		}
		/*
		Sử dụng cho các sql select
		*/
		public function exeQuery($sql,  $arr = array(), $mode = PDO::FETCH_ASSOC)
		{
			return $this->query($sql, $arr, $mode);	
		}
		/*
		Sử dụng cho các sql cập nhật dữ liệu. Kết quả trả về số dòng bị tác động
		*/
		public function exeNoneQuery($sql,  $arr = array(), $mode = PDO::FETCH_ASSOC)
		{
			$this->query($sql, $arr, $mode);	
			return $this->getRowCount();
		}
}