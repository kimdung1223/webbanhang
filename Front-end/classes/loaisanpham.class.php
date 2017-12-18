<?php
class loaisanpham extends Db
{
	function getAll()
	{
		return $this->query("select * from loaisanpham");
	}
	function getAllSP()
	{
		return $this->query("select * from sanpham");
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from loaisanpham where maloaisp = ? ";
		return $this->query($sql, $arr);	
	}
	
	function search($ten)
	{
		$arr = array("%$ten%");
		$sql ="select * from loaisanpham where tenloaisp like ? ";
		return $this->query($sql, $arr);	
	}
	function insert($ma, $ten)
	{
		$sql="insert into loaisanpham(maloaisp,tenloaisp)";
		$sql .="values (?,?)";
		$arr = array($ma,$ten);
		return $this->query($sql,$arr);
	}
	function delete($ma)
	{
		$sql="delete from loaisanpham where maloaisp= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}
	function update($ma,$ten)
	{
		$sql="update loaisanpham set tenloaisp = :T
									  where maloaisp =:M";
		$arr = array(":M" => $ma, ":T" => $ten);
		return $this->query($sql,$arr);
	}
	function getbyOne($ma)
	{
		$arr=array("$ma");
		$sql="select * from sanpham where maloaisp=?";
		return $this->query($sql,$arr);
	}
}
?>