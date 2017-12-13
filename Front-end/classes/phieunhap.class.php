<?php
class phieunhap extends Db
{
	function getAll()
	{
		return $this->query("select * from phieunhap");
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from phieunhap where mapn = ? ";
		return $this->query($sql, $arr);	
	}
	function search($ma)
	{
		$arr = array("%$ma%");
		$sql ="select * from phieunhap where manv like ? ";
		return $this->query($sql, $arr);	
	}
	function insert($ma,$manv,$ngay,$tien)
	{
		$sql="insert into phieunhap(mapn,manv,ngaynhap,tongtien)";
		$sql .="values (?,?,?,?)";
		$arr = array($ma,$manv,$ngay,$tien);
		return $this->query($sql,$arr);
	}
	function delete($ma)
	{
		$sql="delete from phieunhap where mapn= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}
	function update($ma,$manv,$ngay,$tien)
	{
		$sql="update phieunhap set manv = :MNV,
								 ngaynhap=:N,
								 tongtien=:T
								 where mapx =:M";
		$arr = array(":M"=>$ma,":MNV" => $manv,":N" => $ngay,":T" =>$tien);
		return $this->query($sql,$arr);
	}
}
?>