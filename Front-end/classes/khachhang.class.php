<?php
class khachhang extends Db
{
	function getAll()
	{
		return $this->query("select * from khachhang");
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from khachhang where makh = ? ";
		return $this->query($sql, $arr);	
	}
	function getbyOne($tendn,$mk)
	{
		$arr = array($tendn,$mk);
		$sql ="select * from khachhang where tendangnhap = ? and matkhau=? ";
		return $this->query($sql, $arr);	
	}
	function search($ten)
	{
		$arr = array("%$ten%");
		$sql ="select * from khachhang where hotenkh like ? ";
		return $this->query($sql, $arr);	
	}
	function insert($ma, $ten,$gt,$ns,$dc,$dt,$e,$tendn,$mk)
	{
		$sql="insert into khachhang(makh,hotenkh,gioitinh,ngaysinh,diachikh,dienthoaikh,email,tendangnhap,matkhau)";
		$sql .="values (?,?,?,?,?,?,?,?,?)";
		$arr = array($ma, $ten,$gt,$ns,$dc,$dt,$e,$tendn,$mk);
		return $this->query($sql,$arr);
	}
	function delete($ma)
	{
		$sql="delete from khachhang where makh= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}
	function update($ma, $ten,$gt,$ns,$dc,$dt,$e,$tendn,$mk)
	{
		$sql="update khachhang set hotenkh = :H,
								   gioitinh = :G,
								   ngaysinh = :N,
								   diachikh = :D,
								   dienthoaikh =:DT,
								   email = :E,
								   tendangnhap = :T,
								   matkhau = :MK
								   where makh =:M";
		$arr = array(":M"=>$ma,":H" => $ten,":G" =>$gt,":N"=>$ns,":D"=>$dc,":DT"=>$dt,":E"=>$e,":T"=>$tendn,":MK"=>$mk);
		return $this->query($sql,$arr);
	}
	function getbyOnePH($ma)
	{
		$arr=array("$ma");
		$sql="select * from phanhoi where makh=?";
		return $this->query($sql,$arr);
	}
	function getbyOneBLSP($ma)
	{
		$arr=array("$ma");
		$sql="select * from binhluansp where makh=?";
		return $this->query($sql,$arr);
	}
}
?>