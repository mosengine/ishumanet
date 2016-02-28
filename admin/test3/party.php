<?php

session_start();

include ("bd.php");

echo '<h2>Мутим мероприятие</h2>';

if (!empty($_SESSION['login']) and !empty($_SESSION['password']))
{
//если существет логин и пароль в сессиях, то проверяем их и извлекаем аватар
$login = $_SESSION['login'];
$password = $_SESSION['password'];
$result = mysql_query("SELECT id,avatar FROM users WHERE login='$login' AND password='$password'",$db); 
$myrow = mysql_fetch_array($result);
//извлекаем нужные данные о пользователе
}

if (!isset($myrow['avatar']) or $myrow['avatar']=='') {
//проверяем, не извлечены ли данные пользователя из базы. Если нет, то он не вошел, либо пароль в сессии неверный. Выводим окно для входа. Но мы не будем его выводить для вошедших, им оно уже не нужно.
print <<<HERE
НУКАКВЫШЕЛОТСЮДА!!! 
HERE;

}

else
{
//при удачном входе пользователю выдается все, что расположено ниже между звездочками.
//************************************************************************************
echo "|<a href='page.php?id=$_SESSION[id]'>Моя страница</a>|<a href='index.php'>Главная страница</a>|<a href='all_users.php'>Список пользователей</a>|<a href='exit.php'>Выход</a><br><br>";
    

    echo '<form action="party.php?action=new">Так ну вперёд...<br><br>'
    . 'Чё, может обзавём как?<br>'
    . '<input name="name" type="text"><br>'
    . 'Ну и сколько душ, там будем ждать?<br>'
    . '<input name="kolvo" type="text"><br>'
    . 'Дату мне назови!<br>'
    . '<input type="date" name="data" value="2012-06-01"
   max="2012-06-04" min="2012-05-29"><br><br>'
    . '<input name="submit" value="Погнали мутить." type="submit"><br><br>';
}



isset($_GET['submit']) && $_GET['submit']!=NULL ? $submit = $_GET['submit'] : $submit = NULL; 



if($submit != NULL )
{
    
    if (isset($_GET['kolvo'])) { $kolvo = $_GET['kolvo']; if ($kolvo == '') { unset($kolvo);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_GET['data'])) { $data=$_GET['data']; if ($data =='') { unset($data);} }
    
    if (empty($kolvo) or empty($data)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
        
    exit ("Чё может введёшь сколько душ? и дату назови мне!"); //останавливаем выполнение сценариев

    }
    
    $result = mysql_query("SELECT date FROM events WHERE date='$data'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['data'])) {

    exit ("На эту дату уже запланировано мероприятие."); 
    
    }
    // если такого нет, то сохраняем данные
    $result2 = mysql_query ("INSERT INTO events (name,kolvo,date) VALUES('123','$kolvo','$data')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }

    else {
    exit ("Ошибка! Вы не зарегистрированы."); //останавливаем выполнение сценариев

    }
    
    
    
}