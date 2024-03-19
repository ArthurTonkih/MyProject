<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проект</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
    <!-- <link rel="import" href="memo.html"> -->


</head>
<body>

<?
$link = mysqli_connect('localhost', 'root', '', 'project');

$req = "SELECT * FROM `news`";
$result = mysqli_query($link, $req);

$news = [];
while ($row = mysqli_fetch_assoc($result))
    $news[] = $row
?>


    <!-- <script>
        var link = document.querySelector('link[rel=import]');
      var content = link.import.querySelector('#intro-dm');
      document.body.appendChild(content.cloneNode(true));
    </script> -->
    <!-- Главный экран  -->
<div class="background">
    <div class="mainscreen">

    <table>
    <tr>
    <td style="height:100vh; vertical-align:middle; width:50%; text-align:center;">
    <h1>Польза и вред видеоигр для человека</h1>
    <h2>Тут собрана вся важная информация на мою тему</h2>
    </td>
    </tr>
    </table>

    </div>
<!-- <img src="/img/background.jpg" class="background" /> -->
</div>
    

    <!-- Памятка -->
    <div class="memo">
        <h2 class="wrapText" align="center">Памятка</h2>
        <div class="memoContent">
            <div class="wrap">
                <div class="informBlock">
                    <i class="fas fa-clipboard-list"></i>
                    <h5 class="mainText">Планирование</h5>
                    <div class="underlineBlock"></div>
                    <p class="secondText">Определите, сколько времени вы хотите проводить за компьютером каждый день, и старайтесь придерживаться этого расписания</p>
                </div>

                <div class="informBlock">
                    <i class="fas fa-rocket"></i>
                    <h5 class="mainText">Свежий воздух</h5>
                    <div class="underlineBlock"></div>
                    <p class="secondText">Постарайтесь проводить больше времени на свежем воздухе, занимаясь спортом, прогулками или другими активными видами деятельности.</p>
                </div>

                <div class="informBlock">
                    <i class="fas fa-chart-pie"></i>
                    <h5 class="mainText">Другие увлечения</h5>
                    <div class="underlineBlock"></div>
                    <p class="secondText">Найдите другие увлекательные занятия, которые могут заменить время, проведенное за компьютерными играми</p>
                </div>

            </div>
        </div>
    </div>



    <!-- Карточки Статей -->
    <center><h1 class="wrapText">Статьи</h1></center>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                


            
                    <?php for ($i = 0; $i < count($news); $i++): ?>
                        <div class="product">
                        <!-- <div class="image">
                            <img src="http://placehold.it/300x400" alt="">
                        </div> -->
                            <div class="info">
                                <!-- <img src="<?=$news[$i]['img']?>"> -->
                                <h3><?=$news[$i]['title']?></h3>
                                <h5><?=$news[$i]['subtitle']?></h5>
                                <a class="fullbtn" href="fullnews.php?id=<?=$news[$i]['id']?>">Подробнее</a>
                                
                            </div>
                        </div>
                    <?php endfor; ?>
                
 
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>