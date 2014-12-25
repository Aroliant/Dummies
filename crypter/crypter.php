<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['data'])&&isset($_POST['algo']))
	{
		$data=$_POST['data'];
		$algo=$_POST['algo'];
		if($algo=='md2')
			echo hash('md2',$data);
		elseif($algo=='md4')
			echo hash('md4',$data);
		elseif($algo=='md5')
			echo hash('md5',$data);
		elseif($algo=='crc32')
			echo hash('crc32',$data);
		elseif($algo=='sha1')
			echo hash('sha1',$data);
		elseif($algo=='sha256')
			echo hash('sha256',$data);
		elseif($algo=='sha512')
			echo hash('sha512',$data);
	}else
	echo 'e';
}
else{
	echo 'e';
}
?>