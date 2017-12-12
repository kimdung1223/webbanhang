<?php
class binhluansp extends Db
{
	function getAll()
	{
		return $this->query("select * from binhluansp");
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from binhluansp where mablsp = ? ";
		return $this->query($sql, $arr);	
	}
	function insert($ma, $makh,$masp,$ngay,$nd)
	{
		$sql="insert into binhluansp(mablsp,makh,masp,ngayblsp,noidungblsp)";
		$sql .="values (?,?,?,?,?)";
		$arr = array($ma, $makh,$masp,$ngay,$nd);
		return $this->query($sql,$arr);
	}
	function delete($ma)
	{
		$sql="delete from binhluansp where mablsp= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}
	function update($ma, $makh,$masp,$ngay,$nd)
	{
		$sql="update binhluansp set makh=:MKH,
								    masp=:MSP,
								    ngayblsp=:N,
									noidungblsp =:ND
									where mablsp=:M";
								
		$arr = array(":M"=>$ma,":MKH"=>$makh,":MSP"=>$masp,":N"=>$ngay,":ND"=>$nd);
		return $this->query($sql,$arr);
	}
}
?>