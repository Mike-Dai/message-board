<meta charset=UTF-8>
<?php
    $cc=mysqli_connect("localhost","root","root");
    $db=mysqli_select_db($cc,"test");
    $sql="select*from liuyan";
    $re=mysqli_query($cc,$sql);
    echo "<table border='1'>";
    echo "<tr><th>留言内容</th><th>留言时间</th></tr>";
    while($r=mysqli_fetch_array($re,MYSQLI_BOTH)){
        echo "<tr><td>".$r['content']."</td><td>".$r['time']."</td></tr>";
        echo "</table>";    
    }
    date_default_timezone_set("Asia/Shanghai");
    $c=$_POST["content"];
    if (empty($c)) {
        echo "<script type='text/javascript'>alert;history.back();</script>";
    }else {
        $t=date("Y-m-d,H:m:s");
        $c=trim($c);
        $c=htmlspecialchars($c);
        $c=addslashes($c);
        $cc=mysqli_connect("localhost","root","root");
        $db=mysqli_select_db($cc,"test");
        $sql="insert into liuyan(content,time)values('$c','$t')";
        $r=mysqli_query($cc,$sql);
        mysqli_close($cc);
    }
?>