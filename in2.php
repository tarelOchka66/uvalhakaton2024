<!DOCTYPE html>
<html lang="en">
<?php

$console = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  myFunction();
}

function myFunction() {
	
	$arr = $_COOKIE["test_var"];
	if($console == 1) echo $arr, "<br>";
	$flag = $_COOKIE["test_flag"];
	if($console == 1) echo $flag, "<br>";

	if($arr == "nodostup") {
		echo $arr;
	} else {

		$userId1 = $_COOKIE["userId1"];
		$userId8 = $_COOKIE["userId8"];
		$userId12 = $_COOKIE["userId12"];

		


		$mysql = new mysqli('localhost', 'root', '', 'CAD');


		$mysql->query("INSERT INTO `golos` (`fio`, `godRojd`, `predlog`) VALUES('$userId1', '$userId8', '$userId12')");

		$query = $mysql->query("SELECT `1.1`, `2.1`, `3.1`, `4.1`, `5.1`, `6.1`, `7.1`, `8.1`, `9.1`, `10.1`, `11.1`, `12.1`, `13.1`, `14.1`, `15.1`, `16.1`, `17.1`, `18.1`, `19.1`, `20.1`, `1.2`, `2.2`, `3.2`, `4.2`, `5.2`, `6.2`, `7.2`, `8.2`, `9.2`, `10.2`, `11.2`, `12.2`, `13.2`, `14.2`, `15.2`, `16.2`, `17.2`, `18.2`, `19.2`, `6.3`, `7.3`, `7.4`, `11.3`, `11.4`, `11.5`, `11.6`, `12.3`, `12.4`, `13.3`, `14.3`, `17.3`, `17.4`, `17.5`, `19.3`, `19.4`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20` FROM `golos` WHERE `id`=6");

			$tank = mysqli_fetch_row($query);
			$tan1_1 = $tank[0];
			$tan2_1 = $tank[1];
			$tan3_1 = $tank[2];
			$tan4_1 = $tank[3];
			$tan5_1 = $tank[4];
			$tan6_1 = $tank[5];
			$tan7_1 = $tank[6];
			$tan8_1 = $tank[7];
			$tan9_1 = $tank[8];
			$tan10_1 = $tank[9];
			$tan11_1 = $tank[10];
			$tan12_1 = $tank[11];
			$tan13_1 = $tank[12];
			$tan14_1 = $tank[13];
			$tan15_1 = $tank[14];
			$tan16_1 = $tank[15];
			$tan17_1 = $tank[16];
			$tan18_1 = $tank[17];
			$tan19_1 = $tank[18];
			$tan20_1 = $tank[19];

			$tan1_2 = $tank[20];
			$tan2_2 = $tank[21];
			$tan3_2 = $tank[22];
			$tan4_2 = $tank[23];
			$tan5_2 = $tank[24];
			$tan6_2 = $tank[25];
			$tan7_2 = $tank[26];
			$tan8_2 = $tank[27];
			$tan9_2 = $tank[28];
			$tan10_2 = $tank[29];
			$tan11_2 = $tank[30];
			$tan12_2 = $tank[31];
			$tan13_2 = $tank[32];
			$tan14_2 = $tank[33];
			$tan15_2 = $tank[34];
			$tan16_2 = $tank[35];
			$tan17_2 = $tank[36];
			$tan18_2 = $tank[37];
			$tan19_2 = $tank[38];
			$tan6_3 = $tank[39];
			$tan7_3 = $tank[40];
			$tan7_4 = $tank[41];
			$tan11_3 = $tank[42];
			$tan11_4 = $tank[43];
			$tan11_5 = $tank[44];
			$tan11_6 = $tank[45];
			$tan12_3 = $tank[46];
			$tan12_4 = $tank[47];
			$tan13_3 = $tank[48];
			$tan14_3 = $tank[49];
			$tan17_3 = $tank[50];
			$tan17_4 = $tank[51];
			$tan17_5 = $tank[52];
			$tan19_3 = $tank[53];
			$tan19_4 = $tank[54];
			$tan1 = $tank[55];
			$tan2 = $tank[56];
			$tan3 = $tank[57];
			$tan4 = $tank[58];
			$tan5 = $tank[59];
			$tan6 = $tank[60];
			$tan7 = $tank[61];
			$tan8 = $tank[62];
			$tan9 = $tank[63];
			$tan10 = $tank[64];
			$tan11 = $tank[65];
			$tan12 = $tank[66];
			$tan13 = $tank[67];
			$tan14 = $tank[68];
			$tan15 = $tank[69];
			$tan16 = $tank[70];
			$tan17 = $tank[71];
			$tan18 = $tank[72];
			$tan19 = $tank[73];
			$tan20 = $tank[74];

			$tan1_1 = $tan1_1 + $arr[0];
			$tan1_2 = $tan1_2 + $arr[2];
			$tan2_1 = $tan2_1 + $arr[4];
			$tan2_2 = $tan2_2 + $arr[6];
			$tan3_1 = $tan3_1 + $arr[8];
			$tan3_2 = $tan3_2 + $arr[10];
			$tan4_1 = $tan4_1 + $arr[12];
			$tan4_2 = $tan4_2 + $arr[14];
			$tan5_1 = $tan5_1 + $arr[16];
			$tan5_2 = $tan5_2 + $arr[18];
			$tan6_1 = $tan6_1 + $arr[20];
			$tan6_2 = $tan6_2 + $arr[22];
			$tan6_3 = $tan6_3 + $arr[24];
			$tan7_1 = $tan7_1 + $arr[26];
			$tan7_2 = $tan7_2 + $arr[28];
			$tan7_3 = $tan7_3 + $arr[30];
			$tan7_4 = $tan7_4 + $arr[32];
			$tan8_1 = $tan8_1 + $arr[34];
			$tan8_2 = $tan8_2 + $arr[36];
			$tan9_1 = $tan9_1 + $arr[38];
			$tan9_2 = $tan9_2 + $arr[40];
			$tan10_1 = $tan10_1 + $arr[42];
			$tan10_2 = $tan10_2 + $arr[44];
			$tan11_1 = $tan11_1 + $arr[46];
			$tan11_2 = $tan11_2 + $arr[48];
			$tan11_3 = $tan11_3 + $arr[50];
			$tan11_4 = $tan11_4 + $arr[52];
			$tan11_5 = $tan11_5 + $arr[54];
			$tan11_6 = $tan11_6 + $arr[56];
			$tan12_1 = $tan12_1 + $arr[58];
			$tan12_2 = $tan12_2 + $arr[60];
			$tan12_3 = $tan12_3 + $arr[62];
			$tan12_4 = $tan12_4 + $arr[64];
			$tan13_1 = $tan13_1 + $arr[66];
			$tan13_2 = $tan13_2 + $arr[68];
			$tan13_3 = $tan13_3 + $arr[70];
			$tan14_1 = $tan14_1 + $arr[72];
			$tan14_2 = $tan14_2 + $arr[74];
			$tan14_3 = $tan14_3 + $arr[76];
			$tan15_1 = $tan15_1 + $arr[78];
			$tan15_2 = $tan15_2 + $arr[80];
			$tan16_1 = $tan16_1 + $arr[82];
			$tan16_2 = $tan16_2 + $arr[84];
			$tan17_1 = $tan17_1 + $arr[86];
			$tan17_2 = $tan17_2 + $arr[88];
			$tan17_3 = $tan17_3 + $arr[90];
			$tan17_4 = $tan17_4 + $arr[92];
			$tan17_5 = $tan17_5 + $arr[94];
			$tan18_1 = $tan18_1 + $arr[96];
			$tan18_2 = $tan18_2 + $arr[98];
			$tan19_1 = $tan19_1 + $arr[100];
			$tan19_2 = $tan19_2 + $arr[102];
			$tan19_3 = $tan19_3 + $arr[104];
			$tan19_4 = $tan19_4 + $arr[106];
			$tan20_1 = $tan20_1 + $arr[108];

			$tan1 = $tan1 + $flag[0];
			$tan2 = $tan2 + $flag[2];
			$tan3 = $tan3 + $flag[4];
			$tan4 = $tan4 + $flag[6];
			$tan5 = $tan5 + $flag[8];
			$tan6 = $tan6 + $flag[10];
			$tan7 = $tan7 + $flag[12];
			$tan8 = $tan8 + $flag[14];
			$tan9 = $tan9 + $flag[16];
			$tan10 = $tan10 + $flag[18];
			$tan11 = $tan11 + $flag[20];
			$tan12 = $tan12 + $flag[22];
			$tan13 = $tan13 + $flag[24];
			$tan14 = $tan14 + $flag[26];
			$tan15 = $tan15 + $flag[28];
			$tan16 = $tan16 + $flag[30];
			$tan17 = $tan17 + $flag[32];
			$tan18 = $tan18 + $flag[34];
			$tan19 = $tan19 + $flag[36];
			$tan20 = $tan20 + $flag[38];

			$mysql->query("UPDATE `golos` SET `1.1`=$tan1_1, `2.1`=$tan2_1, `3.1`=$tan3_1, `4.1`=$tan4_1, `5.1`=$tan5_1, `6.1`=$tan6_1, `7.1`=$tan7_1, `8.1`=$tan8_1, `9.1`=$tan9_1, `10.1`=$tan10_1, `11.1`=$tan11_1, `12.1`=$tan12_1, `13.1`=$tan13_1, `14.1`=$tan14_1, `15.1`=$tan15_1, `16.1`=$tan16_1, `17.1`=$tan17_1, `18.1`=$tan18_1, `19.1`=$tan19_1, `1.2`=$tan1_2, `2.2`=$tan2_2, `3.2`=$tan3_2, `4.2`=$tan4_2, `5.2`=$tan5_2, `6.2`=$tan6_2, `7.2`=$tan7_2, `8.2`=$tan8_2, `9.2`=$tan9_2, `10.2`=$tan10_2, `11.2`=$tan11_2, `12.2`=$tan12_2, `13.2`=$tan13_2, `14.2`=$tan14_2, `15.2`=$tan15_2, `16.2`=$tan16_2, `17.2`=$tan17_2, `18.2`=$tan18_2, `19.2`=$tan19_2, `6.3`=$tan6_3, `7.3`=$tan7_3, `7.4`=$tan7_4, `11.3`=$tan11_3, `11.4`=$tan11_4, `11.5`=$tan11_5, `11.6`=$tan11_6, `12.3`=$tan12_3, `12.4`=$tan11_4, `13.3`=$tan13_3, `14.3`=$tan14_3, `17.3`=$tan17_3, `17.4`=$tan17_4, `17.5`=$tan17_5, `19.3`=$tan19_3, `19.4`=$tan19_4, `20.1`=$tan20_1, `1`=$tan1, `2`=$tan2, `3`=$tan3, `4`=$tan4, `5`=$tan5, `6`=$tan6, `7`=$tan7, `8`=$tan8, `9`=$tan9, `10`=$tan10, `11`=$tan11, `12`=$tan12, `13`=$tan13, `14`=$tan14, `15`=$tan15, `16`=$tan16, `17`=$tan17, `18`=$tan18, `19`=$tan19, `20`=$tan20 WHERE `id`=6");

		$mysql->close();

		header('Location: index.html');
	}		
}

?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/cod2.css">
	<link rel="stylesheet" href="css/fakeLoader.min.css">
	<noscript>ERROR js  !ВКЛЮЧИТЕ JavaSkript!  ERROR js</noscript>
	<script src="js/j2.js"></script>
</head>
<body>
	<header id="header" class="header">
		<div class="container">
			<div class="menu">
			</div>
		</div>
	</header>
	<section id="section" class="section">
		<div class="container">
			<div id="display_do">
				<hr class="hhh">
				<form method="post">
					<div class="fio_in">
								<label for="fio" title="Элементы отмеченные * являются обязательными, и это один из них">ФИО <b>*</b></label><br>
    						<input id="fio" type="text" placeholder="Введите ваше ФИО. (Можно написать «Не указано»)" name="fio" required>
    					</div>
					<div class="user">
    					<div class="coment_in">
    						<label for="coment" title="Это необязательный элемент">Не нравятся предложенные варианты? Предложите свой!</label><br>
    						<input id="coment" type="text" placeholder="Предложите свой вариант. (Макс. 200 символов)" name="coment" required>
    					</div>
    					<div class="flex00">
    						<div class="">
    						<div class="f00">
    						<div class="sp_999b">
  								<button class="sp_but999" title="Элементы отмеченные * являются обязательными, и это один из них">Cфера деятельности <b>*</b></button>
  								<div class="spisoc999">
  								<div class="nav">
  								 	<input class="" type="radio" id="in_sf_rd1" name="999">
  								 	<label for="in_sf_rd1">Не указоно</label></div>
									<div class="nav">
  								 	<input class="" type="radio" id="in_sf_rd2" name="999">
  								 	<label for="in_sf_rd2"></label></div>
									<div class="nav">
  								 	<input class="" type="radio" id="in_sf_rd3" name="999">
  								 	<label for="in_sf_rd3"></label></div>
									<div class="nav">
  								 	<input class="" type="radio" id="in_sf_rd4" name="999">
  								 	<label for="in_sf_rd4"></label></div>
  								<div class="nav">
  								 	<input class="" type="radio" id="in_sf_rd5" name="999">
  								 	<label for="in_sf_rd5"></label></div>
  								<div class="nav">
  								 	<input class="" type="radio" id="in_sf_rd6" name="999">
  								 	<label for="in_sf_rd6"></label></div>
  								</div>
  							</div>
  							</div>
  							</div>
  							<div class="f001">
  								<div class="godRojd_in">
    								<label for="godRojd" title="Элементы отмеченные * являются обязательными, и это один из них">Год рождения <b>*</b></label><br>
    								<input id="godRojd" type="text" placeholder="(Можно написать «Не указано»)" name="godRojd" required>
    							</div>
  							</div>
  							<div class="f01">
  							<div class="sp_888b">
  								<button class="sp_but888" title="Элементы отмеченные * являются обязательными, и это один из них">Пол <b>*</b></button>
  								<div class="spisoc888">
  								<div class="nav">
  								 	<input type="radio" id="in_gd_rd1" name="888">
  								 	<label for="in_gd_rd1">Не указано</label></div>
									<div class="nav">
  								 	<input type="radio" id="in_gd_rd2" name="888">
  								 	<label for="in_gd_rd2">Муж</label></div>
									<div class="nav">
  								 	<input type="radio" id="in_gd_rd3" name="888">
  								 	<label for="in_gd_rd3">Жен</label></div>
  								</div>
  							</div></div>
    					</div>
					</div>
				</form>
				<hr>
				<form name="myForm"><div class="flex">
						<div class="flexi">
							<input class="in__chec1" type="checkbox" name="0" id="flag1"><label for="flag1"></label><br>
							<input class="in__chec1" type="checkbox" name="0" id="flag2"><label for="flag2"></label><br>
							<input class="in__chec1" type="checkbox" name="0" id="flag3"><label for="flag3"></label><br>
							<input class="in__chec1" type="checkbox" name="0" id="flag4"><label for="flag4"></label><br>
							<input class="in__chec1" type="checkbox" name="0" id="flag5"><label for="flag5"></label>
						</div>
						<div class="right_gol1">
							<div class="sp_20b">
  							<button class="sp_but20">Лыжная база</button>
  							<div class="spisoc20">
  									<p>Администрация, инфо-точка,<br> пункт проката, тренерские,<br> помещения для спортсменов,<br> гардеробно-душевой блок,<br> зал для посетителей,<br> кафе, инженерный блок</p>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-46" name="18">
  								  		<label for="color-46">25 млн. рублей</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-47" name="18">
  								  		<label for="color-47">25 млн. рублей</label></div>
  							</div>
  						</div>
							<div class="sp_1b">
								<button class="sp_but1">Благоустройство родника</button>
								<div class="spisoc1">
									<p>Выберите стиль:</p><br>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="checkbox_spage" name="1">
  								  		<label for="checkbox_spage">4 млн. рублей</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-2" name="1">
  								  		<label for="color-2">4 млн. рублей</label></div>
  							</div>
  						</div>
  						<div class="sp_2b">
  							<button class="sp_but2">Благоустройство пруда</button>
  							<div class="spisoc2">
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-3" name="2">
  								  		<label for="color-3">12,5 млн. рублей</label></div>
  									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-4" name="2">
  								  		<label for="color-4">12,5 млн. рублей</label></div>
  							</div>
  						</div>
  						<div class="sp_3b">
  							<button class="sp_but3">Биатлонный стадион</button>
  							<div class="spisoc3">
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-5" name="3">
  								  		<label for="color-5">25 млн. рублей</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-6" name="3">
  								  		<label for="color-6">25 млн. рублей</label></div>
  							</div>
  						</div>
  						<div class="sp_4b">
  							<button class="sp_but4">Трасса даунхилла</button>
  							<div class="spisoc4">
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-7" name="4">
  								  		<label for="color-7">2,5 млн. рублей</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-8" name="4">
  								  		<label for="color-8">менее 1 млн. рублей</label></div>
  							</div>
  						</div>
  					</div>
  					<div class="flexi1">
								<input class="in__chec1" type="checkbox" name="0" id="flag6"><label for="flag6"></label><br>
								<input class="in__chec1" type="checkbox" name="0" id="flag7"><label for="flag7"></label><br>
								<input class="in__chec1" type="checkbox" name="0" id="flag8"><label for="flag8"></label><br>
								<input class="in__chec1" type="checkbox" name="0" id="flag9"><label for="flag9"></label><br>
								<input class="in__chec1" type="checkbox" name="0" id="flag10"><label for="flag10"></label>
							</div>
  					<div class="right_gol">
  						<div class="sp_5b">
  							<button class="sp_but5">Трасса для тюбингов</button>
  							<div class="spisoc5">
  									<div class="nav">
  								  		<input class="in_9x" type="radio" id="color-9" name="5">
  								  		<label for="color-9">10 млн. рублей<br>Подъемник  8 млн. рублей</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-10" name="5">
  								  		<label for="color-10">Подъемник 8 млн. рублей</label></div>
  								  	<div class="nav">
  								  		<input class="in_9" type="radio" id="color-11" name="5">
  								  		<label for="color-11">Расходы по подготовке<br> трассы в зимний период.<br> Без подъемника</label></div>
  							</div>
  						</div>
  						<div class="sp_6b">
  							<button class="sp_but6">Детская площадка</button>
  							<div class="spisoc6"> 
											<div class="nav">
  								  		<input class="in_9" type="radio" id="color-12" name="6">
  								  		<label for="color-12">20 млн. рублей</label></div>
  								  	<div class="nav">
  								  		<input class="in_9" type="radio" id="color-43" name="6">
  								  		<label for="color-43">«Космос»<br> 30 млн. рублей</label></div>
											<div class="nav">
  								  		<input class="in_9" type="radio" id="color-44" name="6">
  								  		<label for="color-44">5 млн. рублей</label></div>
  								  	<div class="nav">
  								  		<input class="in_9" type="radio" id="color-42" name="6">
  								  		<label for="color-42">4 млн. рублей</label></div>
  							</div>
  						</div>
  						<div class="sp_7b">
  							<button class="sp_but7">Оранжерея</button>
  							<div class="spisoc7">
  									<p>(ботанический сад)</p>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-13" name="7">
  								  		<label for="color-13">300 тыс.рублей</label></div>
  									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-14" name="7">
  								  		<label for="color-14">300 тыс.рублей</label></div>
  							</div>
  						</div>
  						<div class="sp_8b">
  							<button class="sp_but8">Экошкола</button>
  							<div class="spisoc8">
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-15" name="8">
  								  		<label for="color-15">10 млн. рублей</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-16" name="8">
  								  		<label for="color-16">10 млн. рублей</label></div>
  							</div>
  						</div>
  						<div class="sp_21b">
  							<button class="sp_but21">Смотровая площадка</button>
  							<div class="spisoc21">
  									<p>Открывается вид<br> на город</p>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-48" name="19">
  								  		<label for="color-48">20 млн. рублей</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-49" name="19">
  								  		<label for="color-49">20 млн. рублей</label></div>
  							</div>
  						</div>
  					</div>
  					<div class="flexi1">
								<input class="in__chec1" type="checkbox" name="0" id="flag11"><label for="flag11"></label><br>
								<input class="in__chec1" type="checkbox" name="0" id="flag12"><label for="flag12"></label><br>
								<input class="in__chec1" type="checkbox" name="0" id="flag13"><label for="flag13"></label><br>
								<input class="in__chec1" type="checkbox" name="0" id="flag14"><label for="flag14"></label><br>
								<input class="in__chec1" type="checkbox" name="0" id="flag15"><label for="flag15"></label>
							</div>
  					<div class="right_gol">
  						<div class="sp_11b">
  							<button class="sp_but11">Беседки</button>
  							<div class="spisoc11">
  									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-24" name="12">
  								  		<label for="color-24">300 тыс. рублей</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-25" name="12">
  								  		<label for="color-25">300 тыс. рублей</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-26" name="12">
  								  		<label for="color-26">Беседки, навесы<br> 450 тыс. рублей</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-27" name="12">
  								  		<label for="color-27">Беседки, навесы<br> 650 тыс. рублей</label></div>
  								  	<div class="nav">
  								  		<input class="in_9" type="radio" id="color-28" name="12">
  								  		<label for="color-28">350 тыс. рублей</label></div>
  								  	<div class="nav">
  								  		<input class="in_9" type="radio" id="color-29" name="12">
  								  		<label for="color-29">Беседки, навесы<br> 450 тыс. рублей</label></div>
  							</div>
  						</div>
  						<div class="sp_9b">
  							<button class="sp_but9">Зоны отдыха</button>
  							<div class="spisoc9">
  									<p>Вдоль тропинок, тротуаров</p>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-17" name="9">
  								  		<label for="color-17">65 тыс. рублей</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-18" name="9">
  								  		<label for="color-18">65 тыс. рублей</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-19" name="9">
  								  		<label for="color-19">65 тыс. рублей</label></div>
  								  	<div class="nav">
  								  		<input class="in_9" type="radio" id="color-20" name="9">
  								  		<label for="color-20">65 тыс. рублей</label></div>
  							</div>
  						</div>
  						<div class="sp_10b">
  							<button class="sp_but10">Место для пикника</button>
  							<div class="spisoc10">
  									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-21" name="11">
  								  		<label for="color-21">150 тыс. рублей</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-22" name="11">
  								  		<label for="color-22">150 тыс. рублей</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-23" name="11">
  								  		<label for="color-23">150 тыс. рублей</label></div>
  							</div>
  						</div>
  						<div class="sp_12b">
  							<button class="sp_but12">Мини зоопарк</button>
  							<div class="spisoc12">
  									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-30" name="13">
  								  		<label for="color-30">Реализуется за счет<br> средств инвестора</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-31" name="13">
  								  		<label for="color-31">Реализуется за счет<br> средств инвестора</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-32" name="13">
  								  		<label for="color-32">Реализуется за счет<br> средств инвестора</label></div>
  							</div>
  						</div>
  						<div class="sp_22b">
  							<button class="sp_but22">Туалет</button>
  							<div class="spisoc22">
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-50" name="20">
  								  		<label for="color-50">350 тыс. рублей</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-51" name="20">
  								  		<label for="color-51">350 тыс. рублей</label></div>
  							</div>
  						</div>
  					</div>
  					<div class="flexi1">
								<input class="in__chec1" type="checkbox" name="0" id="flag16"><label for="flag16"></label><br>
								<input class="in__chec1" type="checkbox" name="0" id="flag17"><label for="flag17"></label><br>
								<input class="in__chec1" type="checkbox" name="0" id="flag18"><label for="flag18"></label><br>
								<input class="in__chec1" type="checkbox" name="0" id="flag19"><label for="flag19"></label><br>
								<input class="in__chec1" type="checkbox" name="0" id="flag20"><label for="flag20"></label>
							</div>
  					<div class="right_gol">
  						<div class="sp_13b">
  							<button class="sp_but13">Площадка для воркаута</button>
  							<div class="spisoc13">
  									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-33" name="14">
  								  		<label for="color-33">(покрытие песок) <br> 500 тыс. рублей</label></div>
  								  	<div class="nav">
  								  		<input class="in_9" type="radio" id="color-34" name="14">
  								  		<label for="color-34">(резиновое покрытие)<br> 4 млн. рублей</label></div>
  							</div>
  						</div>
  						<div class="sp_14b">
  							<button class="sp_but14">Глемпинг и Кэмпинг</button>
  							<div class="spisoc14">
  									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-35" name="15">
  								  		<label for="color-35">Глемпинг<br> Реализуется за счет<br> средств инвестора</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-36" name="15">
  								  		<label for="color-36">Глемпинг<br> Реализуется за счет<br> средств инвестора</label></div>
  								  	<div class="nav">
  								  		<input class="in_9" type="radio" id="color-37" name="15">
  								  		<label for="color-37">Глемпинг<br> Реализуется за счет<br> средств инвестора</label></div>
  								  	<div class="nav">
  								  		<input class="in_9" type="radio" id="color-38" name="15">
  								  		<label for="color-38">Кэмпинг<br> Реализуется за счет<br> средств инвестора</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-39" name="15">
  								  		<label for="color-39">Кэмпинг<br> Реализуется за счет<br> средств инвестора</label></div>
  							</div>
  						</div>
  						<div class="sp_15b">
  							<button class="sp_but15">Амфитеатр</button>
  							<div class="spisoc15">
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-40" name="16">
  								  		<label for="color-40">1 млн. рублей</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-41" name="16">
  								  		<label for="color-41">1 млн. рублей</label></div>
  							</div>
  						</div>
  						<div class="sp_16b">
  							<button class="sp_but16">Арт объекты</button>
  							<div class="spisoc16">
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-45" name="17">
  								  		<label for="color-45">3 млн. рублей</label></div>
  									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-46" name="17">
  								  		<label for="color-46">3 млн. рублей</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-47" name="17">
  								  		<label for="color-47">3 млн. рублей</label></div>
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-48" name="17">
  								  		<label for="color-48">3 млн. рублей</label></div>
  							</div>
  						</div>
  						<div class="sp_23b">
  							<button class="sp_but23">Горнолыжный спуск</button>
  							<div class="spisoc23">
									<div class="nav">
  								  		<input class="in_9" type="radio" id="color-52" name="21">
  								  		<label for="color-52">Подъемник<br> 11 млн. рублей</label></div>
  							</div>
  						</div>
  					</div>
  				</div></form>
  				<form method="post">
					<button class="butt" id="butt" type="submit">Отправить голос</button>
				</form>
			</div>
		</div>
	</section>
	<footer id="footer" class="footer">
		<div class="container">
			<div id="okno">
				<div class="okno_vnehka">
					<p>Мы используем cookies для быстрой и удобной работы сайта</p>	
					<button id="butt_okno" class="butt_okno">ок</button>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/fakeLoader.min.js"></script>
        <div class="fakeLoader"></div>
        <script>
            $(document).ready(function () {
                $.fakeLoader({
                    bgColor: '#1E56A0',
                    spinner: 'spinner2'
                });
            });
        </script>
</body>
</html>