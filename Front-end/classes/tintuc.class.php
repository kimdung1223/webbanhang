<?php
class tintuc extends Db
{
	function getAll()
	{
		return $this->query("select * from tintuc");
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from tintuc where matt = ? ";
		return $this->query($sql, $arr);	
	}
	function search($ten)
	{
		$arr = array("%$ten%");
		$sql ="select * from tintuc where tentt like ? ";
		return $this->query($sql, $arr);	
	}
	function insert($manv,$ma, $ten,$nd)
	{
		$sql="insert into tintuc(manv,matt,tentt,noidungtt)";
		$sql .="values (?,?,?,?)";
		$arr = array($manv,$ma,$ten,$nd);
		return $this->query($sql,$arr);
	}
	function delete($ma)
	{
		$sql="delete from tintuc where matt= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}
	function update($manv,$ma,$ten,$nd)
	{
		$sql="update tintuc set manv=:MNV,
								tentt=:T,
								noidungtt=:N
								where matt=:M";
		$arr = array(":MNV"=>$manv,":M"=>$ma,":T"=>$ten,":N"=>$nd);
		return $this->query($sql,$arr);
	}
}
?>