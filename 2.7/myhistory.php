<!DOCTYPE HTML>
<html>
<head>
	<link href="bootstrap.css" rel="stylesheet">
	<title>PK history</title>
</head>
<body style="padding-top: 50px">
	<!-------------------------------------���²���Ϊͷ�������� ---------------------------------->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner" >
			<div class="container-fluid">
				<a class="brand" href="index.html">METIS</a>
				<div class="nav-collapse collapse">
					<p class="navbar-text pull-right">
						<!-- <a href="login.html" class="navbar-link">Login</a> &nbsp -->
						<a href="register.html" class="navbar-link">Register</a>
					</p>
					<p class="navbar-text pull-right" id="login"></p>
					<ul class="nav">
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="scorelist.html">Ranking</a></li>
						<li><a href="http://localhost:8080/pkhistory.php?page=1">PK history</a></li>
						<li><a href="http://localhost:8080/userhome.php">MySpace</a></li>
						<li><a href="#contact">Contact</a></li>	 
					</ul>
					
				</div>
			</div>
		</div>
    </div>
	<!----------------------------------------------------------------------------------------------->
	<div id="contents">
		<div class="container">
			<h1><center>My pk history</center></h1>
			<?php
				$perNumber=30; //ÿҳ��ʾ�ļ�¼��
				$page=@$_GET['page']; //��õ�ǰ��ҳ��ֵ

				####  $count=mysql_query("select count(*) from user"); //��ü�¼����
				$count= 300; //test
				####  $rs=mysql_fetch_array($count);  
				####  $totalNumber=$rs[0];
				$totalNumber= 100;//test
				$totalPage=ceil($totalNumber/$perNumber); //�������ҳ��
				if (!isset($page)) {
					$page=1;
				} //���û��ֵ,��ֵ1
				$startCount=($page-1)*$perNumber; //��ҳ��ʼ,���ݴ˷����������ʼ�ļ�¼
				$result=mysql_query("select * from user limit $startCount,$perNumber"); //����ǰ��ļ������ʼ�ļ�¼�ͼ�¼��

				/*
				while ($row=mysql_fetch_array($result)) {
					echo "user_id:".$row[0]."<br>";
					echo "username:".$row[1]."<br>"; //��ʾ���ݿ������
				}
				*/
				$i= 30;
				while ($i>0){
					echo "dragoncat"."<br>" ;
					$i--;
				}
			?>
			<div class="pagination">
				<ul>
					<?php
						if ($page != 1) { //ҳ��������1
							?>
							<li class="prev previous_page"><a href="myhistory.php?page=<?php echo $page - 1;?>">��һҳ</a></li> <!--��ʾ��һҳ-->
							<?php
						}
						for ($i=1;$i<=$totalPage;$i++) {  //ѭ����ʾ��ҳ��
							?>
							<li><a href="myhistory.php?page=<?php echo $i;?>"><?php echo $i ;?></a></li>
							<?php
						}
						if ($page<$totalPage) { //���pageС����ҳ��,��ʾ��һҳ����
							?>
							<li><a href="myhistory.php?page=<?php echo $page + 1;?>">��һҳ</a></li>
							<?php
						}
					?>
				</ul>
			</div>
		</div>
    </div>
</body>
	<!---------------------------�������ϽǴ�����----------------------------------------------->
	<!---------------------------����Ҫ��phpд��������-------------------------------------------->
	<script>//���Ͻǵ�½��
		//php�ӿ�
		var logined=false;
		var username="dragoncat";
		//
		function insert()
		{
			if (logined){document.getElementById("login").innerHTML ="<a href='userhome.html' class='navbar-link'>"+username+"</a> &nbsp" }
			else document.getElementById("login").innerHTML ="<a href='login.html' class='navbar-link'>Login</a> &nbsp" ;
		}
		window.onload=insert();
	</script>
	<!-------------------------------------------------------------------------------------------->
</html>
