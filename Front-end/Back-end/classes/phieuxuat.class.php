<?php
class phieuxuat extends Db
{
	function getAll()
	{
		return $this->query("select * from phieuxuat");
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from phieuxuat where mapx = ? ";
		return $this->query($sql, $arr);	
	}
	function insert($ma,$madh,$manv,$ngay,$tien)
	{
		$sql="insert into phieuxuat(mapx,madh,manv,ngayxuat,tongtien)";
		$sql .="values (?,?,?,?,?)";
		$arr = array($ma,$madh,$manv,$ngay,$tien);
		return $this->query($sql,$arr);
	}
	function delete($ma)
	{
		$sql="delete from phieuxuat where mapx= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}
	function update($ma,$madh,$manv,$ngay,$tien)
	{
		$sql="update phieuxuat set madh = :MD,
								   manv=:MNV,
								   ngayxuat=:N,
								   tongtien=:T
								   where mapx =:M";
		$arr = array(":M"=>$ma,":MD"=>$madh,":MNV" => $manv,":N" => $ngay,":T" =>$tien);
		return $this->query($sql,$arr);
	}
}
?>