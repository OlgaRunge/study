<?php

$a = 5;
if ($a > 0) {
    echo 'a больше 0';
}

?>

    <br>


<?php

$a = 5;
if ($a > 0) {
    echo 'a больше 0';
} else {
    echo 'a не больше 0';
}

?>

    <br>

<?php
$a = 0;
if ($a > 0) {
    echo 'a больше 0';
} else if ($a < 0) {
    echo 'a меньше 0';
} else {


 echo 'a не больше 0';
}
?>
<br>
<br>

<?php
$a = 5;
if ($a>0) {
 echo 'a больше 0';
} else {
 if ($a < 0) {
  echo 'a не больше 0';
 } else {
  echo 'a равно 0';
 }
}
?>

<br>

<?php
$a = 5;
if ($a > 0) {
 echo 'a больше 0';
} else if ($a < 0){
  echo 'a меньше 0';
} else {
 echo 'a равно 0';
}



echo "branches";
echo "hi";

    echo 'a равно 0';

?>

    <br>

    //Объединение условий

<?php

$a = true;
$b = true;

if ($a && $b) {
    echo 'true';
}
//

$c = 4;
$d = 90;

if ($c > $d || $c > 0) {

}
?>

    <br>

<?php

//Базовые логические операторы
define('SEX_UNKNOWN', 0);
define('MIN_AGE', 18);
define('SEX_MALE', 1);
define('SEX_FEMALE', 2);

?>
    <h1>Здравствуй пользователь нашего портала</h1>

<?php
$age = 18;//эта переменная меняется пользователем
$sex = SEX_UNKNOWN;
//сравниваем
$emailIsSuccess = true; //подтвержден
$emailNotification = false; //уведомления по почте тоже хочет получать
/**
 * Настройка СМС оповещаний
 */
$phoneIsSuccess = true;
/**
 * Денежный счет пользователя
 */
$account = 0;

if ($age < MIN_AGE) {
    ?>
    <p>
        Ваш возраст <?= $age ?>, вы еще не можете посещать наш сайт
    </p>
    <?php
} //человек пройдет еще одну проверке
else if ($sex == SEX_MALE) {
    //то мы ему выдадим уведомление
    ?>
    <p>
        Ваш возраст <?= $age ?>, добро пожаловать на новости спорта
    </p>
    <?php
} else if ($sex == SEX_FEMALE) {
    //то мы ему выдадим уведомление
    ?>
    <p>
        Ваш возраст <?= $age ?>, добро пожаловать на новости моды
    </p>
    <?php
} //если пользователь не указал пол
else {
    ?>
    <p>
        Ваш возраст <?= $age ?>, добро пожаловать
    </p>
    <?php
}
//у пользователя подтвержден и имейл и он хочет получать письма

if ($emailIsSuccess && $emailNotification) {

    //если адрес подтвержден и он хочет получать рассылку
    ?>
    <p>
        Вам отправлены последние новости на почту
    </p>
    <?php
//и если он не попадает под эти параметры
}
if (!$emailIsSuccess) { //! означает отрицание
    ?>
    <p>
        Вы не подтвердили почту
    </p>
    <?php
}
if (!$emailNotification) {
    ?>
    <p>
        Вы не настроили уведомления
    </p>
    <?php
}
/*else {
 ?>
 <p>
  Вы не подтвердили или не подписаны на рассылку

 <?php
}*/
if ($emailNotification || $phoneIsSuccess) {
    ?>
    <p>
        Вы настроили опоыещение
    </p>
    <?php
} else {
    ?>
    <p>
        Вы не настроили опоыещение
    </p>
    <?php
}
/**
 * Тернарный оператор
 */

$a = 5;
$b = 6;

$a = $b > $c ? $b : $c;
echo $a;
?>

<?php
/**
 * можем оценить покупательскую способоность
 */
 //здесь мы проверяем аккаунт

 $buyerInfo = $account > 0 ?
     "Вы можете делать покупки и имеете на счету $account р."
     :
     "Вы не можете делать покупки, у вас нет денег";
//у нас идет возврат в переменную buyerInfo

echo $buyerInfo;
?>

<br>
<br>
<?php

/**
 * Оператор switch
 */

define('SAY_HELLO', 1);
define('SAY_GOODBYE', 2);
define('SAY_WHATSUP', 3);

$name = 'Alex';
$action = 1;

switch($action){
   case SAY_HELLO:
     echo 'Hello,' . $name;
     break;
   case SAY_GOODBYE;
   echo 'Bye,' . $name;
   break;
  case SAY_WHATSUP;
  echo 'How are u,' . $name;
 break;
 default:
   echo 'What?';
   break;
}
?>

<br>
<br>

<?php
/**
 * ФУНКЦИИ
 */

$a = 'test';
var_dump($a);
?>

<br>
<?php
$name = 'Alex';
$string = 'Helo,' . $name;
$otherString = str_replace('Helo', 'Goodbye', $string);
echo $otherString;
?>
<br>
<?php

    $str = 'Test';
    $b = print_r($str, true);
?>
    <br>
    <?=$b?>;
<br>
<?php
/**
 * Пользовательские функции
 */

 function sayHello($name, $stdout = true)
 {
     $string = 'hello,' . $name;
     if($stdout) {
         echo $string;
     } else {
         return $string;
     }
 }
$name2 = 'Maxim';
sayHello('Alex');
sayHello($name2, false);
?>
<br>
<br>


<br>
<?php
$name = 'Olga';
function sayHello2()
{
    global $name;
    echo $name;
}
sayHello2();
?>

<br>
<?php

function addOne(&$a, &$b, &$c)
{
    $a++;
    $b++;
    $c++;
}

$num1 = 1;
$num2 = 2;
$num3 = 3;
addOne($num1, $num2, $num3);
var_dump($num1, $num2, $num3);
?>


<br>
<br>

<?php

define('GOOD_MORNING', 1);
define('GOOD_AFTERNOON', 2);
define('GOOD_EVENING', 3);
define('GOOD_NIGNT', 4);

$time = 18;
function checkTime($time){
    switch($time){
        case ($time >= 12) && ($time == 24):
    return 'GOOD_MORNING';
?>
<br>
<br>
<?php

define('ACCESS_DENIED', 0);
define('ACCESS_GUEST', 1);
define('ACCESS_OWNER', 2);
/**
 * Функция проверяет доступ для пользователя
 * @param $username
 * @return int
 */
function checkUserAccess ($username) {
    switch($username) {
        case "Вася":
            return ACCESS_GUEST;
            break;
        case "Петя":
            return ACCESS_OWNER;
            break;
        default:
            return ACCESS_DENIED;
            break;
    }
};
/**
 * Обрабатывает код ошибки и возвращает сообщение
 * @param $code
 * @return string
 */
function accessHandler ($code) {
    switch($code) {
        case ACCESS_GUEST:
            return "Пользователь гость";
            break;
        case ACCESS_OWNER:
            return "Пользователь владелец записи";
            break;
        default:
            return "Доступ запрещен!";
            break;
    }
};
$username = "Никита";
?>

<?=accessHandler(checkUserAccess($username))?>

<?php

/** с языками */


define(SPANISH, 1);
define(ENGLISH, 2);
define(GERMAN, 3);

            /**функция проверяет какой язые изучает пользователь
             * @param $lang
             * @return string
             */
 function getLanguage($lang)
 {
     global $lang;
     switch ($lang) {
         case "английский":
             return ENGLISH;
             break;
         case "испанский":
             return SAPNISH;
             break;
         case "немецкий":
             return GERMAN;
             break;
     }
 };



define('GOOD', 1);
define('NORMAL', 2);
define('BAD', 3);
$name = "PHP course";
$rating = GOOD;
function ratingMessage($rating) {
    global $name;
    switch ($rating) {
        case GOOD:
            return $name . ' is good! =)';
            break;
        case NORMAL:
            return $name . ' is normal!';
            break;
        case BAD:
            return $name . ' is bad! =(';
            break;
        default:
            return 'Difficult to answer';
            break;
    }
}
?>

<?=ratingMessage($rating)?>
