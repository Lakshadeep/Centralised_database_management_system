<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
for($k=0;$k <= mysql_num_rows($result);$k++)
		{
		for($i=3;$i <= mysql_num_fields($result);$i++)
		{
			if(!mysql_result($result,$k,'mysql_fetch_field($result,$i)->name'))
			{
				
							 $inotice=$_POST['inotice'];
							 
				$query1="insert into notice set 'mysql_fetch_field($result,$i)->name'='$inotice' where roll_num='$roll_no' ";
	            $result1=@mysql_query($query1);
							 
							
		    } 
		}
		}