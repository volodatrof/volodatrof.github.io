<!DOCTYPE html>
<htm>
<head>
    <meta charset="uft-8">
        <title>сайт web-студії "Web-DECO"</title>
        <!--=============== JAVASCRIPT ====================-->
        <script src="js/clock1.js"></script>
        <script type="text/javascript">
            function send()
            {
                var valid = true;
                var elems = document.forms[0].elements;
                for(var i=0; i<document.forms[0].length;i++)
                {
                    if(elems[i].getAtribute('type')=='text' ||
                    elems[i].getAtribute('type')=='password' ||
                    elems[i].getAtribute('type')=='email' )
                    {
                        if(elems[i].value == '')
                        {
                            elems[i].style.border = '2px solid red';
                            valid=false;
                        }

                    }
                }
                if(!valid)
                {
                    alert('Заповніть всі поля !!!');
                    return false;
                }
            }
        </script>
        <!--=============================================-->

        <style>
            .shadowtext
            {
                text-shadow: 1px 3px 2px white, 0 0 lem red;
                color: #210042;
                font-size: 2em;
            }
        </style>
<script>
    window.onload = function()
    {
        setInterval(clockPainting, 1000);
    }
</script>
<style>
    .big{ transform: scale(2);}
</style>

</head>
<body background="images/bg.jpg">
  <table border="1" align="center" cellpadding="10">
    <tr>
        <td background="images/bg-3.jpg" colspan="2" height="150" align="right" hspace="5"> 
          <font size="5" color="Maroon"><h1 class="shadowtext">сайт web-студії "Web-DECO"</h1></font>
        </td>
    </tr>
    <tr>
        <td colspan="2">
          <font size="4"><b>
            <a href="#">Головна</a>&nbsp;&nbsp;
            <a href="#">Фотогалерея</a>&nbsp;&nbsp;
            <a href="#">Телефони</a>&nbsp;&nbsp;
            <a href="#">Статистика</a>&nbsp;&nbsp;
            <a href="#">Зареєстровані</a>&nbsp;&nbsp;
            </b></font>
        </td>
    </tr>
    <tr>
        <td width="30%" valign="top">
<center><canvas id="canvas" height="120" width="120"></canvas></center>
<hr>  
            <font size="5" color="navy"><h2>Новини</h2></font>
            <font size="5">
                <ul>
                    <li><a href="#">Сайт будівельної компанії</a></li>
                    <li><a href="#">Сайт ТМ "Новашкола"</a></li>
                    <li><a href="#">Редизайн сайту classno.com.ua</a></li>
                    <li><a href="#">Розробка CMG для Metro Cash&Carry</a></li>
                    <li><a href="#">Сайт-візитка дизайнера інтерфейсів</a></li><br>
                    <p aling="right"><a href="#">інші...</a></p>
                </ul>
            </font>
            <hr>
            <h1 align="center"><font color="green">Реєстрація</font></h1>
            <form action="forma.php" method="post" onsubmit="return send();">
            <table align="center" bgcolor="#ccc">
            <tr>
                 <td><font color="green">Прізвище</font>: </td>
                 <td><input type="text" size="10" maxlength="20" name="name2"> </td>
            </tr>
            <tr>
                <td><font color="green">ім'я</font>: </td>
                <td><input type="text" size="10" maxlength="20" name="name1"> </td>
            </tr>
            <tr>
                <td><font color="green">E-Mail</font>: </td>
                <td><input type="email" size="10" maxlength="20" name="email"> </td>
            </tr>
            <tr>
                <td><font color="green">Пароль</font>: </td>
                <td><input type="password" size="10" maxlength="20" name="password"> </td>
            </tr>
            </table>
            <p align="center">
                <input type="submit" value="Зареєструватись">
                <input type="reset" value="Очистити">
            </p>
            </form>
            <hr>    
        </td>
    <td width="70%">

    <H1 align="center">Фотогалерея</H1>
<?php
  /* Функция для удаления лишних файлов: сюда, помимо удаления текущей и родительской директории, 
  так же можно добавить файлы, не являющиеся картинкой (проверяя расширение) */
  function excess($files) {
    $result = array();
    for ($i = 0; $i < count($files); $i++) {
      if ($files[$i] != "." && $files[$i] != "..") $result[] = $files[$i];
    }
    return $result;
  }
  $dir = "pic"; // Путь к директории, в которой лежат изображения
  $files = scandir($dir); // Получаем список файлов из этой директории
  $files = excess($files); // Удаляем лишние файлы
  /* Дальше происходит вывод изображений на страницу сайта (по 4 штуки на одну строку) */
?>
<?php for ($i = 0; $i < count($files); $i++) { ?>
  <img src="<?=$dir."/".$files[$i]?>" alt="" width="350"
   height="250" hspace="5" vspace="7" border="5" onclick="this.classList.toggle('big')" />
  <?php if (($i + 1) % 4 == 0) { ?><br /><?php } ?>
<?php } ?>

 </td>
    </tr>
    <tr>
        <td background="images/bg-3.jpg" colspan="2" valign="middle" height="90">
            <font size="4">Сайт розробив "Трофімчук Володимир"</font>
        </td>
    </tr>
</table>
</body>
</html>
