<?php
class loaisanpham extends Db
{
	function getAll()
	{
		return $this->query("select * from loaisanpham");
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from loaisanpham where maloaisp = ? ";
		return $this->query($sql, $arr);	
	}
	
	function search($ma)
	{
		$arr = array("%$ma%");
		$sql ="select * from loaisanpham where maloaisp like ? ";
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
}
?>