<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<table border='1' style="width: 100%;">
<tr>
	<th>STT</th>
    <th>Ten sp</th>
    <th>Gia</th>
    <th>Mo ta</th>
    <th>Image</th>
</tr>
<?php
	include_once("Controller/cProduct.php");
	$p = new controlProduct();
	$tblProduct = $p->GetAllProduct();
	$i =1;
	if($tblProduct){
		if(mysql_num_rows($tblProduct)){
			while($rows = mysql_fetch_assoc($tblProduct)){
				echo '<tr>';
					echo '<td>'.$i++.'</td>' ;
					echo '<td>'.$rows["tensanpham"].'</td>' ;
					echo '<td>'.$rows["gia"].'$</td>';
					echo '<td>'.$rows["mota"].'</td>';
					echo '<td>'."<img width = '100px' height='100px' src='image/".$rows["hinh"]."'/>".'</td>';
					echo '<td> 
					<a href="admin.php?deleteProd='.$rows["id_sanpham"].'">Xoa</a>
					<a href="admin.php?updateProd='.$rows["id_sanpham"].'">Sua</a>
					</td>';
				echo '</tr>';
			}	
		}
	
	}else{
		echo "error";	
	}
?>
</table>
    
</body>
</html>