<!-- таблица в mysql создана. Надо еще сделать проверку на подключение к таблице. -->



<?php



$result00 = mysql_query("SELECT COUNT(*) FROM data WHERE secret=0");
$temp = mysql_fetch_array($result00);
$posts = $temp[0];

$result = mysql_query("SELECT * FROM `data` WHERE `secret`=0  ORDER BY `id`");


if (mysql_num_rows($result) > 0)

{
$myrow = mysql_fetch_array($result);

do
{



echo ="
         <tr>
         <td ><strong class='titl'><a class='News' href='fullstory?id=".$myrow["id"]."'>".$myrow["title"]."</a> / ".$myrow["date"]."</strong></td>
         </tr>

         <tr>
         <td>".$myrow["description"]."</td>
       


             <br>";



}
while ($myrow = mysql_fetch_array($result));





?>