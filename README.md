#2018.11.2:开始制作留言板，写了HTML的部分
<html>
    <head>
        <meta  http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <style>
        body{
            font-family: "Microsoft YaHei";
            font-weight: 700;
            width:600px;
        }
        .top{
            background-color: lightskyblue;
            text-align: center;
            padding-bottom: 13px;
            padding-top:13px;
            margin-top:20px;
            margin-left:20px;
            margin-bottom: 20px;
            border-width: 2px;
            border-style: solid;
            border-color:mediumturquoise;
            border-radius: 10px;
            box-shadow:gray 5px 5px 10px;
        }
        textarea{
            width:580px;
            height:300px;
            border:lightskyblue 2px solid;
            box-shadow:gray 5px 5px 10px;
            border-radius: 10px;
            margin-left:20px;
        }
        input{
            margin-left:270px;
            margin-top:20px;
            width:80px;
            height:50px;
            background-color: lightskyblue;
            border-width: 2px;
            border-style: solid;
            border-color:mediumturquoise;
            border-radius: 10px;
            box-shadow:gray 5px 5px 10px;
        }
    </style>
    <body>
        <div class="top">
            留言板
        </div>
        <div>
            <textarea>

            </textarea>
        </div>
        <div>
            <input type="submit" value="留言">
        </div>
        <div id="show">
            <?php
                $cc=mysqli_connect("localhost","root","");
                $db=mysqli_select_db($cc,"test");
                $sql="select*from liuyan";
                $re=mysqli_query($cc,$sql);
                echo "<table border='1'>";
                echo "<tr><th>留言内容</th><th>留言时间</th></tr>";
                while($r=mysqli_fetch_array($re,MYSQLI_BOTH)){
                    echo "<tr><td>".$r['content']."</td><td>".$r['time']."</td></tr>";
                    echo "</table>";    
                }
            ?>
        </div>
    </body>
</html>
