<?php
class chitietkhuyenmai extends Db
{
	function getAll()
	{
		return $this->query("select * from chitietkhuyenmai");
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from chitietkhuyenmai where makm = ? ";
		return $this->query($sql, $arr);	
	}
	function search($ten)
	{
		$arr = array("%$ten%");
		$sql ="select * from chitietkhuyenmai where noidungkm like ? ";
		return $this->query($sql, $arr);	
	}
	function insert($ma,$masp,$nd,$phantram)
	{
		$sql="insert into chitietkhuyenmai(makm,masp,noidungkm,phantramgiamgia)";
		$sql .="values (?,?,?,?)";
		$arr = array($ma,$masp,$nd,$phantram);
		return $this->query($sql,$arr);
	}
	function delete($ma)
	{
		$sql="delete from chitietkhuyenmai where makm= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}
	function update($ma,$masp,$nd,$phantram)
	{
		$sql="update chitietkhuyenmai set masp=:MSP,
										  noidungkm=:ND,
										  phantramgiamgia=:P
										  where makm=:M";
		$arr = array(":M"=>$ma,":MSP" => $masp,":ND"=>$nd,":P"=>$phantram);
		return $this->query($sql,$arr);
	}
}
?>