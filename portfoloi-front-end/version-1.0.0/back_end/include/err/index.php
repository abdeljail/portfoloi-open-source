<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>err</title>
    <style>
        *{
            box-sizing: border-box;
            margin:0;
            padding:0;
        }
        body{
            background-color:#c19595;
        }
        .content{
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h1{
            position: relative;
        }
        h1 > div{
            position: absolute;
            font-size:12vw;
            font-family:tahoma;
            left: -20vw;
        }
        h1 > div:first-child{
            top: -25vw;
            color:#b54e4e;
        }
        h1 > div:last-child{
            text-transform:capitalize;
            color:#009688;
            top: -19vw;
        }
        img{
            width: 50vw;
            height: 50vh;
        }
        .bnt-back{
            display: flex;
            justify-content: flex-end;
        }
        a{
            display: block;
            background-color:#009688;
            color:#fff;
            text-transform:capitalize;
            padding:15px 20px;
            border-radius:4px;
            text-decoration: none;
            border: 1px solid #000000;
        }
    </style>
</head>
<body>
    <div class="err">
        <div class="container">
            <div class="content-err">
                    <div class="content">
                        <div class="h1">
                            <h1>
                                <div>404</div>
                                <div>not found</div>
                            </h1>
                        </div>
                        <div class="back">
                            <div class="img">
                                <img src="http://localhost/tododev/control/layout/image/err.png" alt="" srcset="">
                            </div>
                            <div class="bnt-back">
                                <a id="back"> back </a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
<script>
        document.body.onclick = _=>  window.history.back();
        
</script>

</html>