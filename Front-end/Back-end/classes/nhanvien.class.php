<?php
class nhanvien extends Db
{
	function getAll()
	{
		return $this->query("select * from nhanvien");
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from nhanvien where manv = ? ";
		return $this->query($sql, $arr);	
	}
	function search($ten)
	{
		$arr = array("%$ten%");
		$sql ="select * from nhanvien where hotennv like ? ";
		return $this->query($sql, $arr);	
	}
	function getbyOne($tendn,$mk)
	{
		$arr = array($tendn,$mk);
		$sql ="select * from nhanvien where tendangnhap = ? and matkhau=? ";
		return $this->query($sql, $arr);	
	}
	function insert($ma, $ten,$gt,$ns,$dc,$dt,$e,$cv,$luong,$tendn,$mk)
	{
		$sql="insert into nhanvien(manv,hotennv,gioitinh,ngaysinhnv,diachinv,dienthoainv,email,chucvu,luong,tendangnhap,matkhau)";
		$sql .="values (?,?,?,?,?,?,?,?,?,?,?)";
		$arr = array($ma,$ten,$gt,$ns,$dc,$dt,$e,$cv,$luong,$tendn,$mk);
		return $this->query($sql,$arr);
	}
	function delete($ma)
	{
		$sql="delete from nhanvien where manv= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}
	function update($ma,$ten,$gt,$ns,$dc,$dt,$e,$cv,$luong,$tendn,$mk)
	{
		$sql="update nhanvien set hotennv = :H,
								  gioitinh = :G,
								  ngaysinhnv = :N,
								  diachinv = :D,
								  dienthoainv = :DT,
								  email = :E,
								  chucvu = :C,
								  luong = :L,
								  tendangnhap= :T,
								  matkhau = :MK
								  where manv =:M";
		$arr = array(":M" => $ma,":H"=>$ten, ":G" => $gt, ":N" => $ns , ":D" => $dc, ":DT" => $dt, ":E" => $e, ":C" => $cv, ":L" => $luong, ":T" => $tendn, ":MK" => $mk);
		return $this->query($sql,$arr);
	}
}
?>