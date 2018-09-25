<?php
			session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>实验室开放时间显示 lab_open_display</title>
</head>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style type="text/css">
	
	body,td,th {
		font-size: large;
		
	}
	


.demo2-bg{
    background: url(../Artdesign/背景图片/实验室开放时间.JPG) no-repeat;
    background-size: cover;
    position: relative;
}
.demo2{
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    width: 1280px;  
    height: 1280px; 
    line-height: 50px;
    background:rgba(255,255,255,0.3);
}

</style>

</head>
<body class="demo2-bg">
	<div><?php

			//SQL();
			if(isset($_SESSION['uid']))
			{
				include_once('../PHP/navigation.php');
			}
			else
			{
				echo '<a href="LoggingIn.php"><button type="button" class="btn btn-success">登录</button></a>';
			}
		?>
		<h1 style="text-align: center">实验室开放显示(本部)</h1>
		<a href="../Home/Index.php"><button class="btn btn-danger">返回主页</button></a>
		<a href="lab_open_display_1.php">
			<button style="text-align: center" type="button" class="btn btn-default btn-lg">
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span> 查看沙河校区
			</button>
		</a>
		<div class="row">
		  <div class="col-sm-0"></div>
		  <div class="col-sm-12">
			<?php

				include "../PHP/selectOpen.php";
				$class=$table;

				$a[0]="本部";
				$a[1]="沙河";
				$a[2]="宏福";

				for($b=0;$b<1;$b++)
				{
					echo'<table class="table table-hover"; border="1">';
					for($i=0;$i<13;$i++)
					{
						echo'<tr>';
						for($j=0;$j<8;$j++)
						{
							if($i==0)
							{
								switch($j)
								{
									case 0:echo'<td>'.$a[$b].'</td>';break;
									case 1:echo'<td>星期一</td>';break;
									case 2:echo'<td>星期二</td>';break;
									case 3:echo'<td>星期三</td>';break;
									case 4:echo'<td>星期四</td>';break;
									case 5:echo'<td>星期五</td>';break;
									case 6:echo'<td>星期六</td>';break;
									case 7:echo'<td>星期日</td>';break;
								}
							}
							else if($j==0&&$i>0)
							{
								switch($i)
								{
									case 1:echo("<td>"."第".($i)."节"."&nbsp;8:00~8:50</td>");break;  
									case 2:echo("<td>"."第".($i)."节"."&nbsp;9:00~9:50</td>");break;  
									case 3:echo("<td>"."第".($i)."节"."&nbsp;10:10~11:10</td>");break;  
									case 4:echo("<td>"."第".($i)."节"."&nbsp;11:10~12:10</td>");break;  
									case 5:echo("<td>"."第".($i)."节"."&nbsp;13:30~14:20</td>");break;  
									case 6:echo("<td>"."第".($i)."节"."&nbsp;14:30~15:20</td>");break;  
									case 7:echo("<td>"."第".($i)."节"."&nbsp;15:30~16:20</td>");break;  
									case 8:echo("<td>"."第".($i)."节"."&nbsp;16:30~17:20</td>");break;  
									case 9:echo("<td>"."第".($i)."节"."&nbsp;17:30~18:20</td>");break;  
									case 10:echo("<td>"."第".($i)."节"."&nbsp;18:30~19:20</td>");break;  
									case 11:echo("<td>"."第".($i)."节"."&nbsp;19:30~20:20</td>");break;  
									case 12:echo("<td>"."第".($i)."节"."&nbsp;20:30~21:20</td>");break;
								}
							}
							else
							{
								echo'<td>'.$class[$a[$b]][$i][$j].'</td>'; 
							}
						}
						echo"</tr>";
					}
					echo"</table>";
				}
			?>   
		  </div>
		</div>
  </div>
  <?php
		include('../Home/footer.php');
	?>
</body>
</html>