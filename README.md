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
            width:600px;
            height:300px;
            border:lightskyblue 2px solid;
            box-shadow:gray 5px 5px 10px;
            border-radius: 10px;
            margin-left:20px;
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
    </body>
</html>
