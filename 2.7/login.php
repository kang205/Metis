<html>
<head>
</head>
<body>
<?php
		if ($_POST['infosubmit'])
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$ans=chk_acc_info(username,password);//����û������롢��
			if ($ans) echo "<script>location.href='index.html';</script>" ;
			else echo "<script> alert('Username or Password is wrong!');</script>";
		}
?>
</body>
</html>