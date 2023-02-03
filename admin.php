<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
	<table border="1" style="width:960px;text-align:center;margin: auto;">
    	<tr>
        	<td colspan="2"><b>QUẢN LÝ SẢN PHẨM - THI CUỐI KỲ</b></td>
        </tr>
        <tr> 
        	<td colspan="2">Menu
            |<a href="index.php">Sản phẩm</a>
            </td>
        </tr>
        <tr> 
        	<td style="width:15%; vertical-align:top;" align="center">
 				<a href="admin.php?addProd">Thêm sản Phẩm</a><br />
                <a href="admin.php?showProd">Xem sản Phẩm</a><br />
                
            </td>
            <td width="85%">
            	<?php
				
					if(isset($_REQUEST["addProd"])){
						include_once("View/Them.php");
					}else if(isset($_REQUEST["showProd"])){
						include_once("View/vAllProduct.php");
					}else if(isset($_REQUEST["updateProd"])){
						include_once("View/vUpdateProduct.php");
					}
				?>
            </td>
        </tr>
        <tr> 
        	<td colspan="2"><i>71 - 19000235 - Võ Minh Thành - Thi cuối kỳ PHP</i></td>
        </tr>
    </table>
<body>
</body>
</html>