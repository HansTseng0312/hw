<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>個人資料</title>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" href="img/logo.ico" type="image/x-icon"/>

    
</head>
<body>
    <div>
        <p>
            <?php include("get-index-meta-data.php"); ?>
      
            <hr />
      
            <?php include('get-cpu-load.php'); ?>
                  </p>
    </div>
    <div id="wrapper">
        <header>
            <nav>
                <ul>
                    <li><a href="#about">關於我</a></li>
                    <li><a href="#show">成果展示</a></li>
                    <li><a href="#more">聯絡資訊</a></li>
                </ul>
            </nav>
            
        </header>
        
        <div id="contect">
            <div id="contect_in">
                <h1>關於我</h1>
                    <div id="about"> 
                        <p id="mes">普通的資工人<p>
                        <img src="img/image.jpg" width="450" height="600">
                    </div>
                <h1 id="show">成果展示:多元圖像敘事期末專題</h1>
                <video controls width="640" height="360">
                    <source src="video/Comp 1.mp4" type="video/mp4" >
                </video>
				<audio controls src="audio/haru.mp3"></audio>
                <h1>聯絡資訊</h1>
                <div id="more">
                    <p>mail:hanstseng0312@gmail.com</p>
                    <p>discord:hans0312</p>
                    <p>電話:0938699163</p>
                </div>
            </div>
        </div>
        <footer>
            <p>©&nbspCopyright&nbspsince&nbsp2024&nbspby&nbsp11111123曾翊玹. All rights reserved.</p>
    </div>   

</body>
</html>