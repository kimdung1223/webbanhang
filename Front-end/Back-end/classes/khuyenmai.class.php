<?php
class khuyenmai extends Db
{
	function getAll()
	{
		return $this->query("select * from khuyenmai");
	}
	function getOne($ma)
	{
		$arr = array("$ma");
		$sql ="select * from khuyenmai where makm= ? ";
		return $this->query($sql, $arr);	
	}
	function insert($ma, $ten,$ngaybd,$ngaykt)
	{
		$sql="insert into khuyenmai(makm,tenkm,ngaybd,ngaykt)";
		$sql .="values (?,?,?,?)";
		$arr = array($ma, $ten,$ngaybd,$ngaykt);
		return $this->query($sql,$arr);
	}
	function delete($ma)
	{
		$sql="delete from khuyenmai where makm= ? ";
		$arr = array($ma);
		return $this->query($sql, $arr);
	}
	function update($ma, $ten,$ngaybd,$ngaykt)
	{
		$sql="update khuyenmai set tenkm =:T,
								  ngaybd=:NBD,
								  ngaykt=:NKT
						     where makm=:M";
		$arr = array(":M" => $ma,":T"=>$ten,":NBD"=>$ngaybd,":NKT"=>$ngaykt );
		return $this->query($sql,$arr);
	}
}
?>