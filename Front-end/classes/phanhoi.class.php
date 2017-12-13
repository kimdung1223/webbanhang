<?php
class phanhoi extends Db
{
	function getAll()
	{
		return $this->query("select * from phanhoi");
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from phanhoi where makh = ? ";
		return $this->query($sql, $arr);	
	}
	function insert($ma,$manv,$ngaynhan,$ngaygui,$ndgui,$ndnhan)
	{
		$sql="insert into phanhoi(makh,manv,ngaynhantn,ngayguitn,noidungtngui,noidungtnnhan)";
		$sql .="values (?,?,?,?,?,?)";
		$arr = array($ma,$manv,$ngaynhan,$ngaygui,$ndgui,$ndnhan);
		return $this->query($sql,$arr);
	}
	function delete($ma)
	{
		$sql="delete from phanhoi where makh= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}
	function update($ma,$manv,$ngaynhan,$ngaygui,$ndgui,$ndnhan)
	{
		$sql="update phanhoi set manv=:MNV,
								 ngaynhantn=:NN,
								 ngayguitn=:NG,
								 noidungtngui=:NDG,
								 noidungtnnhan=:NDN
								 where makh=:M";
		$arr = array(":M"=>$ma,":MNV"=>$manv,":NN"=>$ngaynhan,":NG"=>$ngaygui,":NDG"=>$ndgui,":NDN"=>$ndnhan);
		return $this->query($sql,$arr);
	}
}
?>