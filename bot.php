<?php 
@system("clear");
date_default_timezone_set('Asia/Kolkata');
$b="\033[1;35m";
$red="\033[1;31m";
$green="\033[1;32m";
$puti="\033[1;37m";
echo "\n";
$m="\033[0;31m";
$m1="\033[1;31m";
$h="\033[0;32m";
$h2="\033[1;32m";
$ku="\033[0;33m";
$k="\033[1;33m";
$bi="\033[0;34m";
$b="\033[1;34m";
$un="\033[0;35m";
$u="\033[1;35m";
$hi="\033[0;36m";
$t="\033[1;36m";
$p="\033[0;37m";
$pu="\033[1;37m";
$w="\033[0;38m";
$we="\033[1;38m";
sleep(2);
//////system('clear');




echo "\033[0;36m[-] server \033[0;32monline\n";
echo "\033[0;36m[-] from discuss \033[0;32mhttps://t.me/official_hunter\n";
echo "\033[0;34m[giftloop] \033[0;36mcreator \033[0;34mofficial_hunter \033[0;37mversi \033[0;32m1.0\n";
echo "\033[0;36m[info] \033[0;32menjoy your life !\n";
echo "\033[0;37m~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
echo "\033[0;34m-supported by       \033[0;32m-> @myloveyotod\n";
echo "\033[0;34m-supported by       \033[0;32m-> Earning Premium\n";
echo "\033[0;37m~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";

//////$App_Version


if(file_exists('app-version'))
{
	$edy = file_get_contents('App_Version');
	$js = json_decode($edy, true);
	$App_Version = $js['App_Version'];
}else{
 echo "\033[1;37m(\033[1;33m•\033[1;37m) App Version \033[0;32m";
$App_Version = trim(fgets(STDIN));
if($App_Version ==""){
	echo "$blanco [$rojo ID Incorrecto$blanco ]",exit;
	}
		
}

////$App_Version_Hash
if(file_exists('app-version-hash'))
{
	$edy = file_get_contents('App-Version-Hash');
	$js = json_decode($edy, true);
	$App_Version_Hash = $js['App-Version-Hash'];

}else{
 echo "\033[1;37m(\033[1;33m•\033[1;37m) App_Version_Hash \033[0;32m";
$App_Version_Hash = trim(fgets(STDIN));
if($App_Version_Hash ==""){
	echo "$blanco [$rojo ApiKey Incorrecto$blanco ]",exit;
	}
	
} 	


//$Build-Num(2/11)

if(file_exists('Build-num'))
{
	$edy = file_get_contents('Build-Num');
	$js = json_decode($edy, true);
	$Build_Num = $js['Build-Num'];
}else{
 echo "\033[1;37m(\033[1;33m•\033[1;37m) Build-Num \033[0;32m";
$Build_Num = trim(fgets(STDIN));
if($Build_Num ==""){
	echo "$blanco [$rojo ID Incorrecto$blanco ]",exit;
	}
		
}


//$Country(3/11)

if(file_exists('country'))
{
	$edy = file_get_contents('Country');
	$js = json_decode($edy, true);
	$Country = $js['Country'];
}else{
 echo "\033[1;37m(\033[1;33m•\033[1;37m) Country \033[0;32m";
$Country = trim(fgets(STDIN));
if($Country ==""){
	echo "$blanco [$rojo ID Incorrecto$blanco ]",exit;
	}
		
}

//$Connection-Type(4/11)

if(file_exists('connection-type'))
{
	$edy = file_get_contents('Connection-Type');
	$js = json_decode($edy, true);
	$Connection_Type = $js['Connection-Type'];
}else{
 echo "\033[1;37m(\033[1;33m•\033[1;37m) Connection-Type \033[0;32m";
$Connection_Type = trim(fgets(STDIN));
if($Connection_Type ==""){
	echo "$blanco [$rojo ID Incorrecto$blanco ]",exit;
	}
		
}


//$Carrier(5/11)

if(file_exists('carrier'))
{
	$edy = file_get_contents('Carrier');
	$js = json_decode($edy, true);
	$Carrier = $js['Carrier'];
}else{
 echo "\033[1;37m(\033[1;33m•\033[1;37m) Carrier \033[0;32m";
$Carrier = trim(fgets(STDIN));
if($Carrier ==""){
	echo "$blanco [$rojo ID Incorrecto$blanco ]",exit;
	}
		
}

//$OS-Version(6/11)

if(file_exists('os-version'))
{
	$edy = file_get_contents('OS-Version');
	$js = json_decode($edy, true);
	$OS_Version = $js['OS-Version'];
}else{
 echo "\033[1;37m(\033[1;33m•\033[1;37m) OS-Version \033[0;32m";
$OS_Version = trim(fgets(STDIN));
if($OS_Version ==""){
	echo "$blanco [$rojo ID Incorrecto$blanco ]",exit;
	}
		
}


//$Google-Advertiser-Id(7/11)

if(file_exists('Google-Advertiser-Id'))
{
	$edy = file_get_contents('Google-Advertiser-Id');
	$js = json_decode($edy, true);
	$Google_Advertiser_Id = $js['Google-Advertiser-Id'];
}else{
 echo "\033[1;37m(\033[1;33m•\033[1;37m) Google-Advertiser-Id \033[0;32m";
$Google_Advertiser_Id = trim(fgets(STDIN));
if($Google_Advertiser_Id ==""){
	echo "$blanco [$rojo ID Incorrecto$blanco ]",exit;
	}
		
}

//$Device-Name(8/11)

if(file_exists('Device-Name'))
{
	$edy = file_get_contents('Device-Name');
	$js = json_decode($edy, true);
	$Device_Name = $js['Device-Name'];
}else{
 echo "\033[1;37m(\033[1;33m•\033[1;37m) Device-Name \033[0;32m";
$Device_Name = trim(fgets(STDIN));
if($Device_Name ==""){
	echo "$blanco [$rojo ID Incorrecto$blanco ]",exit;
	}
		
}


//$Device-Type(9/11)

if(file_exists('Device-Type'))
{
	$edy = file_get_contents('Device-Type');
	$js = json_decode($edy, true);
	$Device_Type = $js['Device-Type'];
}else{
 echo "\033[1;37m(\033[1;33m•\033[1;37m) Device_Type \033[0;32m";
$Device_Type = trim(fgets(STDIN));
if($Device_Type ==""){
	echo "$blanco [$rojo ID Incorrecto$blanco ]",exit;
	}
		
}

//$Timezone(10/11)

if(file_exists('Timezone'))
{
	$edy = file_get_contents('Timezone');
	$js = json_decode($edy, true);
	$Timezone = $js['Timezone'];
}else{
 echo "\033[1;37m(\033[1;33m•\033[1;37m) Timezone \033[0;32m";
$Timezone = trim(fgets(STDIN));
if($Timezone ==""){
	echo "$blanco [$rojo ID Incorrecto$blanco ]",exit;
	}
		
}


//$Android-Id(11/11)

if(file_exists('Android-Id'))
{
	$edy = file_get_contents('Android-Id');
	$js = json_decode($edy, true);
	$and_id = $js['Android-Id'];
}else{
 echo "\033[1;37m(\033[1;33m•\033[1;37m) Android-Id \033[0;32m";
$and_id = trim(fgets(STDIN));
if($and_id ==""){
	echo "$blanco [$rojo ID Incorrecto$blanco ]",exit;
	}
		
}


//$Authorization-Id(12/12)

if(file_exists('Authorization'))
{
	$edy = file_get_contents('Authorization');
	$js = json_decode($edy, true);
	$Authorization = $js['$Authorization'];
}else{
 echo "\033[1;37m(\033[1;33m•\033[1;37m) Authorization \033[0;32m";
$Authorization = trim(fgets(STDIN));
if($Authorization ==""){
	echo "$blanco [$rojo ID Incorrecto$blanco ]",exit;
	}
		
}



//$user_id(12/12)

if(file_exists('uuid'))
{
	$edy = file_get_contents('uuid');
	$js = json_decode($edy, true);
	$uuid = $js['uuid'];
}else{
 echo "\033[1;37m(\033[1;33m•\033[1;37m) user_id \033[0;32m";
$uuid = trim(fgets(STDIN));
if($uuid ==""){
	echo "$blanco [$rojo ID Incorrecto$blanco ]",exit;
	}
		
}



sleep(3);



system('clear');

echo "$m1       ┌────────────────────────────────────────────┐ \n";
echo "$h2       │░░░░░░░░░█▀▀░█▀▄░█▀▀░█▀█░▀█▀░█▀▀░█▀▄░░░░░░░░│ \n";
echo "$k       │░░░░░░░░░█░░░█▀▄░█▀▀░█▀█░░█░░█▀▀░█░█░░░░░░░░│ \n";
echo "$b       │░░░░░░░░░▀▀▀░▀░▀░▀▀▀░▀░▀░░▀░░▀▀▀░▀▀░░░░░░░░░│ \n";
echo "$u       │░░░░░░░░░░░░░░░░░░░█▀▄░█░█░░░░░░░░░░░░░░░░░░│ \n";
echo "$t       │░░░░░░░░░░░░░░░░░░░█▀▄░░█░░░░░░░░░░░░░░░░░░░│ \n";
echo "$m1       │░░░░░░░░░░░░░░░░░░░▀▀░░░▀░░░░░░░░░░░░░░░░░░░│ \n";
echo "$h2       │░█░█░█░█░█▀█░▀█▀░█▀▀░█▀▄░▀█░░▀█░░▄▀▄░▀▀▄░▀█░│ \n";
echo "$k       │░█▀█░█░█░█░█░░█░░█▀▀░█▀▄░░█░░░█░░▄▀▄░▄▀░░░█░│ \n";
echo "$b       │░▀░▀░▀▀▀░▀░▀░░▀░░▀▀▀░▀░▀░▀▀▀░▀▀▀░░▀░░▀▀▀░▀▀▀│ \n";
echo "$u       |░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░| \n";
echo "$t       └────────────────────────────────────────────┘ \n";
echo "\n";
sleep(2);
echo "$m1      ┌──────────────────────────────────────────────┐ \n";
echo "$h2      │                   SUBSCRIBE                  │ \n";
echo "$k      │                OFFICIAL HUNTER               │ \n";
echo "$b      └──────────────────────────────────────────────┘ \n";
echo "\n";

sleep(2);
echo "$t      ┌──────────────────────────────────────────────┐ \n";
echo "$m1      │        Creator :- @Official Hunter           │ \n";
echo "$h2      │        Published By :- @Hunter11821          │ \n";
echo "$k      │           Support :- REAL MONEY              │ \n";
echo "$b      └──────────────────────────────────────────────┘ \n";


sleep(2);
echo "\n";
echo "$m1     _____ _____ ______ _______ _      ____   ____  _____  \n";
echo "$h2    / ____|_   _|  ____|__   __| |    / __ \ / __ \|  __ \ \n";
echo "$k   | |  __  | | | |__     | |  | |   | |  | | |  | | |__) |\n";
echo "$b   | | |_ | | | |  __|    | |  | |   | |  | | |  | |  ___/ \n";
echo "$u   | |__| |_| |_| |       | |  | |___| |__| | |__| | |     \n";
echo "$t    \_____|_____|_|       |_|  |______\____/ \____/|_|     \n";


echo "\n\n";




//password
$d = date("D");

switch ($d){
case "Mon":
$npassword = "ak";
break;

case "Tue":
$npassword = "aj";
break;

case "Wed":
$npassword = "ak";
break;

case "Thu":
$npassword = "ak";
break;

case "Fri":
$npassword = "ak";
break;

case "Sat":
$npassword = "ak";
break;

case "Sun":
$npassword = "ak";
break;

default:
$npassword = "ak";
}

//link
$d = date("D");

switch ($d){
case "Mon":
$nlink = array("https://Account-Bin.000webhostapp.com/Password/Giftloop/pass-6473.php");
break;

case "Tue":
$nlink = array("https://Account-Bin.000webhostapp.com/Password/Giftloop/Good-boy.php");
break;

case "Wed":
$nlink = array("https://Account-Bin.000webhostapp.com/Password/Giftloop/Vampire.php");
break;

case "Thu":
$nlink = array("https://Account-Bin.000webhostapp.com/Password/Giftloop/Hythjj2788411.php");
break;

case "Fri":
$nlink = array("https://Account-Bin.000webhostapp.com/Password/Giftloop/468oonvswehki.php");
break;

case "Sat":
$nlink = array("https://Account-Bin.000webhostapp.com/Password/Giftloop/Nhh5533fyj.php");
break;

case "Sun":
$nlink = array("https://Account-Bin.000webhostapp.com/Password/Giftloop/Yrdgh35763.php");
break;

default:
$nlink = array("https://Account-Bin.000webhostapp.com/Password/Giftloop/Whbdxgt46.php");
}

$time=date('h:i:s a'); //h=hour , i=min, s=sec, a=AM / PM
$date=date("m/d/Y");
$p="\033[1;35m";
$hide="\033[1;43m";
$y="\033[1;33m";
$i="\033[1;36m";
$bl="\033[1;30m";
$password = "$npassword";
$link = $nlink[0];
$link2 = $nlink[1];

echo $b."copy & paste link in browser to get the password"."\n";
echo $b."Link:$g $link"."\n";
echo $g."Enter Password: $bl";
$a = trim(fgets(STDIN));
	
	if ($a == "$password")
			echo $g."password correct!!!"."\n";
			
	else
          echo $r."password incorrect!!!"."\n",exit;



system ("clear");

echo "$m1       ┌────────────────────────────────────────────┐ \n";
echo "$h2       │░░░░░░░░░█▀▀░█▀▄░█▀▀░█▀█░▀█▀░█▀▀░█▀▄░░░░░░░░│ \n";
echo "$k       │░░░░░░░░░█░░░█▀▄░█▀▀░█▀█░░█░░█▀▀░█░█░░░░░░░░│ \n";
echo "$b       │░░░░░░░░░▀▀▀░▀░▀░▀▀▀░▀░▀░░▀░░▀▀▀░▀▀░░░░░░░░░│ \n";
echo "$u       │░░░░░░░░░░░░░░░░░░░█▀▄░█░█░░░░░░░░░░░░░░░░░░│ \n";
echo "$t       │░░░░░░░░░░░░░░░░░░░█▀▄░░█░░░░░░░░░░░░░░░░░░░│ \n";
echo "$m1       │░░░░░░░░░░░░░░░░░░░▀▀░░░▀░░░░░░░░░░░░░░░░░░░│ \n";
echo "$h2       │░█░█░█░█░█▀█░▀█▀░█▀▀░█▀▄░▀█░░▀█░░▄▀▄░▀▀▄░▀█░│ \n";
echo "$k       │░█▀█░█░█░█░█░░█░░█▀▀░█▀▄░░█░░░█░░▄▀▄░▄▀░░░█░│ \n";
echo "$b       │░▀░▀░▀▀▀░▀░▀░░▀░░▀▀▀░▀░▀░▀▀▀░▀▀▀░░▀░░▀▀▀░▀▀▀│ \n";
echo "$u       |░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░| \n";
echo "$t       └────────────────────────────────────────────┘ \n";
echo "\n";
sleep(2);
echo "$m1      ┌──────────────────────────────────────────────┐ \n";
echo "$h2      │                   SUBSCRIBE                  │ \n";
echo "$k      │                OFFICIAL HUNTER               │ \n";
echo "$b      └──────────────────────────────────────────────┘ \n";
echo "\n";
sleep(2);
echo "$u      ┌──────────────────────────────────────────────┐ \n";
echo "$t      │              Ｍｕｓｔ  Ｊｏｉｎ              │ \n";
echo "$m1      │        Ｔｅｌｅｇｒａｍ  Ｃｈａｎｎｅｌ      │ \n";
echo "$h2      │        Ｆｏｒ  Ｌａｔｅｓｔ  Updates         │ \n";
echo "$k      │                                              │ \n";
echo "$b      │        ｔ．ｍｅ／ｈｕｎｔｅｒ１１８２１      │ \n";
echo "$u      └──────────────────────────────────────────────┘ \n";
echo "\n";
sleep(2);
echo "$t      ┌──────────────────────────────────────────────┐ \n";
echo "$m1      │        Creator :- @Official Hunter           │ \n";
echo "$h2      │        Published By :- @Hunter11821          │ \n";
echo "$k      │           Support :- REAL MONEY              │ \n";
echo "$b      └──────────────────────────────────────────────┘ \n";
echo "\n";
echo "[+] \033[1;31m APP NAME \033[1;38m[ GIFTLOOP ]";
sleep(1);
echo "\n";
echo "[+] \033[1;31m SCRIPT BENEFIT \033[1;38m[ 5+5+5 COIN ADDER ]";
sleep(1);
echo "\n";
echo "[+] \033[1;31m SCRIPT LIMITE IS \033[1;38m[ 2010 COINS ]";

echo "\n\n\n";

$ar=0;$is=5;while($ar<$is){
sleep(2);
$ar++;
}

echo $green."Login";
$ar=0;$is=5;while($ar<$is){
sleep(1);
$ar++;
echo ".";
}
sleep(1);
echo $green."Done"."\n\n";


while (true){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://api.giftloop.co/giphy/collect");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS,"$uuid");
  curl_setopt($ch, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
  curl_setopt($ch, CURLOPT_PORT,"443");
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt ($ch, CURLOPT_COOKIEJAR, "cookie.txt");
 curl_setopt ($ch, CURLOPT_COOKIEFILE, "cookie.txt");
  $headers = array();
  
 
$headers[] = 'App-Version:'.$App_Version.'';
$headers[] = 'App-Version-Hash:'.$App_Version_Hash.'';
$headers[] = 'Build-Num:'.$Build_Num.'';
$headers[] = 'Country:'.$Country.'';
$headers[] = 'Connection-Type:'.$Connection_Type.'';
$headers[] = 'Carrier:'.$Carrier.'';
$headers[] = 'OS-Version:'.$OS_Version.'';
$headers[] = 'Google-Advertiser-Id:'.$Google_Advertiser_Id.'';
$headers[] = 'Device-Name:'.$Device_Name.'';
$headers[] = 'Device-Type:'.$Device_Type.'';
$headers[] = 'Timezone:'.$Timezone.'';
$headers[] = 'Android-Id:'.$and_id.'';
$headers[] = 'Authorization:'.$Authorization.'';
$headers[] = 'Content-Type:application/json; charset=UTF-8';
$headers[] = 'Content-Length:47';
$headers[] = 'Host:api.giftloop.co';
$headers[] = 'Connection:Keep-Alive';
$headers[] = 'Accept-Encoding:gzip';
$headers[] = 'User-Agent:okhttp/3.12.6';
  
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  
$result = curl_exec($ch);





$coin = json_decode($result,true)['coinsEarnedToday'];
  $message = json_decode($result,true)['message'];
  $status = json_decode($result,true)['status'];
  
  
  
  
  
  echo"$b==\033[1;33m=====YOUR=====STATUS=====\033[1;34m[$green".$status."\033[1;34m]===\n";
  echo"$b==\033[1;33m==TODAY=EARNED=COINS==\033[1;34m[$green".$coin."\033[1;34m]===\n";
  echo"$b==\033[1;33m==MESSAGE=BY=APP===\033[1;34m[$green".$message."\033[1;34m]===\n\n";

for ($time=5;$time>-1;$time--)

{

   

	 echo "\r                                         \r";

     echo "\r\033[1;32m Your Next Reward in [".$time." Sec\033[0;37m]  \r";

 

  if ($time == 34 or $time == 29 or $time == 24 or $time == 19 or $time == 14 or $time == 9 or $time == 4){echo ".";}

  if ($time == 33 or $time == 28 or $time == 23 or $time == 18 or $time == 13 or $time == 8 or $time == 3){echo "..";}

  if ($time == 32 or $time == 27 or $time == 22 or $time == 17 or $time == 12 or $time == 7 or $time == 2){echo "...";}

  if ($time == 31 or $time == 26 or $time == 21 or $time == 16 or $time == 11 or $time == 6 or $time == 1){echo "....";}

  if ($time == 30 or $time == 25 or $time == 20 or $time == 15 or $time == 10 or $time == 5){echo ".....";}

  if ($time == 0){echo "Done \r";
  }

  sleep(1);

  flush();
  
}
}
?>