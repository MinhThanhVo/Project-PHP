<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<table border="1" style="width:960px;text-align:center;margin: auto;">
    	<tr>
        	<td colspan="2"></b>QUẢN LÝ SẢN PHẨM - THI CUỐI KỲ</b></td>
        </tr>
        <tr> 
        	<td colspan="2">Menu
            |<a href="admin.php">Quản lý sản phẩm</a>|
            <form><input type="text" name="search" value="<?php echo $ten; ?>" />
                <input type="submit" name="submit" value="Tìm kiếm"/></form>
            </td>
        </tr>
        <tr> 
        	<td style="width:15%; vertical-align:top;" align="center">
            	<?php
					include_once("View/vCompany.php");
				?>
                
                
            </td>
            <td width="85%">
            	<?php
					if(isset($_REQUEST["Prod"])){
						include_once("View/TimKiem.php");
					}else{
						include_once("View/vProduct.php");
					}
					
				?>
            </td>
        </tr>
        <tr> 
        	<td colspan="2">71 - 19000235 - Võ Minh Thành - Thi cuối kỳ PHP</td>
        </tr>
    </table>

</body>
</html>
<?php
	if(isset($_REQUEST["submit"])){
		if($_REQUEST["search"] != ""){
			$si = $_SESSION['searchs']; 
			$s = $_REQUEST["search"];
			echo header("refresh:0;url='index.php?Prod=".$s."'");
		}else{
			echo header("location: index.php");
		}
	}
?>