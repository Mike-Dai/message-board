<html>
    <head>
        <meta  http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <style>
        body{
            background: url(letter.png) no-repeat;
            background-size: 100%;
            font-family: "Microsoft YaHei";
            font-weight: 700;
            width:100%;
            height:100%;
            margin-left: 240px;
            margin-top:50px;
        }
        .top{
            height:17px;
            width:500px;
            color:white;
            background-color:rgb(134, 107, 82);
            text-align: center;
            padding-bottom: 13px;
            padding-top:13px;
            margin-top:178px;
            margin-left:66px;
            margin-right:300px;
            margin-bottom: 20px;
            border-style:none;
            border-radius: 10px;
           
        }
        textarea{
            width:580px;
            height:300px;
            box-shadow:gray 5px 5px 10px;
            border-radius: 10px;
            margin-top:80px;
            margin-left:20px;
        }
        input{
            margin-left:270px;
            margin-top:30px;
            color:white;
            width:80px;
            height:50px;
            background-color:rgb(134, 107, 82);
            
            border-style: none;
            
            border-radius: 10px;
            box-shadow:gray 5px 5px 10px;
            cursor:pointer;
        }
    </style>
    <body>
        <div class="top">
            留言板
        </div>
        <form action="messageboard-form.php" method="post">
                <textarea name="content"></textarea>
                <div>
                    <input type="submit" value="留言">
                </div>
        </form>
    </body>
</html>