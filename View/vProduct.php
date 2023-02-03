<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		include("Controller/cProduct.php");
		$p = new controlProduct();
		if(isset($_REQUEST["Comp"])){
			$cty =$_REQUEST["Comp"];
			$tblProduct = $p->GetAllProductByCompany($cty);
		}
		if($tblProduct){
			if(mysql_num_rows($tblProduct)>0){
				$dem = 0;
				echo "<table>";
				while($row= mysql_fetch_assoc($tblProduct)){
					if($dem == 0){ 
						echo "<tr>";
					}
					echo "<td style='width: 25%;'>";
					echo "<img width = '100px' height='100px' src='image/".$row['hinh']."'/>";
					echo "<br><b>".$row['tensanpham']."</b><br>Giá : ".$row['gia']." USD<br>".$row['mota'];
					echo "</td>";
					$dem++;
					if($dem % 2 == 0){ 
						echo "</tr>";
						$dem == 0;
					}
				}
				echo "</table>";
			}else{
				echo "0 result";
			}
		}else{
			echo "Không có dữ liệu";
		}
	?>
</body>
</html>
