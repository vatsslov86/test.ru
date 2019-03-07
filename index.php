<?php
define('CONS','константа');
$a = 4;
$x = 0;
//unset($a);
//echo 'var: '.$a.'</br>';
//if(isset($a)) echo'Переменна определена<br>';
//if(empty($a)) echo'Переменна $a нет значения<br>';
//echo gettype($a);
//if(defined('CONS') == true) {echo'<br>Константа объявлена!';} else {echo'Константа не объявлена!';}
//echo'<br>Цикл while';
//while ($x++ <10) echo $x.',';
//
//echo'<br>Цикл for ';
//for ($i=1; $i<=10; $i++) {echo $i;}
//for($i=0,$j=0,$k="|"; $i<10; $j++,$i+=$j) { $k=$k."."; echo $k; }
//
echo'<br>Cycle foreach';
$arr = array('name'=>'Vasily', 'age'=>'29', 'sex'=>'man');
//var_dump($arr);
//echo $arr['name'];
foreach($arr as $item){
    echo $item.' ';
    }


echo '<br>';
$password = password_hash('vatsslov86@ma', PASSWORD_BCRYPT);
print ($password);
echo '<br>';

$input_password = password_hash('vatsslov86@mail.ru', PASSWORD_BCRYPT);
print ($input_password);
echo '<br>';
if ($input_password == $password) {
    echo "Password access!";
}
else
{echo "Password error!";}
(

//$mas = array();
//$mas['id']='SELECT * FROM Gorod';
//
//var_dump($mas);
//echo $mas['num1'];
//
//foreach($mas as $itogo){
//    echo $itogo;
//}


//echo'<br>Цикл с задержкой<br>';
//// current time
//echo date('h:i:s') . "\n";
//
//echo '<br>';
//while ($с++ <9)
//    echo $с;
//sleep(1);
echo date('h:i:s') . "\n";

//for ($i = 1; $i < 10+1; $i++)
//{
//    echo "$i <br>";
//    Sleep(1);
//}
