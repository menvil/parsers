#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

use JonnyW\PhantomJs\Client;

use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;


$proxy = [
	'81.22.46.41:1085',
	'81.22.46.32:1085',
	'95.181.217.239:1085',
	'5.188.217.160:1085',
	'5.188.219.47:1085',
	'5.188.217.52:1085',
	'5.188.217.187:1085',
	'95.181.217.209:1085',
	'5.188.219.144:1085',
	'5.188.219.219:1085',
	'5.188.219.66:1085',
	'95.181.217.6:1085',
	'5.188.217.222:1085',
	'5.188.219.128:1085',
	'5.188.217.28:1085',
	'5.188.217.27:1085',
	'81.22.46.234:1085',
	'5.188.217.168:1085',
	'5.188.217.73:1085',
	'5.188.219.145:1085',
	'95.181.217.46:1085',
	'5.188.219.122:1085',
	'81.22.46.67:1085',
	'5.188.219.172:1085',
	'5.188.217.199:1085',
	'95.181.217.252:1085',
	'5.188.219.207:1085',
	'81.22.46.108:1085',
	'95.181.217.50:1085',
	'5.188.219.156:1085',
	'81.22.46.82:1085',
	'5.188.217.29:1085',
	'95.181.217.176:1085',
	'81.22.46.160:1085',
	'81.22.46.185:1085',
	'5.188.219.104:1085',
	'5.188.217.216:1085',
	'5.188.219.110:1085',
	'95.181.217.238:1085',
	'5.188.217.170:1085',
	'95.181.217.15:1085',
	'81.22.46.237:1085',
	'95.181.217.223:1085',
	'5.188.217.186:1085',
	'95.181.217.177:1085',
	'5.188.217.205:1085',
	'5.188.217.106:1085',
	'81.22.46.88:1085',
	'81.22.46.240:1085',
	'5.188.217.123:1085',
	'5.188.217.213:1085',
	'5.188.217.243:1085',
	'5.188.219.98:1085',
	'5.188.217.152:1085',
	'5.188.219.74:1085',
	'5.188.219.27:1085',
	'5.188.219.86:1085',
	'95.181.217.95:1085',
	'5.188.219.146:1085',
	'5.188.217.104:1085',
	'95.181.217.112:1085',
	'5.188.219.49:1085',
	'5.188.217.70:1085',
	'95.181.217.230:1085',
	'95.181.217.93:1085',
	'5.188.217.173:1085',
	'5.188.217.128:1085',
	'81.22.46.222:1085',
	'5.188.219.61:1085',
	'81.22.46.229:1085',
	'5.188.217.182:1085',
	'5.188.219.79:1085',
	'5.188.217.11:1085',
	'5.188.217.231:1085',
	'81.22.46.68:1085',
	'81.22.46.231:1085',
	'5.188.219.34:1085',
	'5.188.217.17:1085',
	'81.22.46.125:1085',
	'5.188.219.148:1085',
	'5.188.219.32:1085',
	'95.181.217.34:1085',
	'5.188.217.78:1085',
	'81.22.46.151:1085',
	'81.22.46.247:1085',
	'5.188.217.192:1085',
	'81.22.46.140:1085',
	'5.188.219.81:1085',
	'5.188.219.100:1085',
	'5.188.219.225:1085',
	'95.181.217.228:1085',
	'81.22.46.105:1085',
	'95.181.217.125:1085',
	'5.188.217.242:1085',
	'81.22.46.147:1085',
	'81.22.46.202:1085',
	'81.22.46.102:1085',
	'81.22.46.74:1085',
	'81.22.46.112:1085',
	'95.181.217.14:1085',
	'95.181.217.142:1085',
	'5.188.217.30:1085',
	'81.22.46.165:1085',
	'5.188.219.43:1085',
	'5.188.217.191:1085',
	'5.188.217.41:1085',
	'81.22.46.216:1085',
	'81.22.46.173:1085',
	'95.181.217.166:1085',
	'81.22.46.81:1085',
	'5.188.217.60:1085',
	'81.22.46.206:1085',
	'81.22.46.65:1085',
	'81.22.46.62:1085',
	'81.22.46.42:1085',
	'5.188.219.154:1085',
	'81.22.46.196:1085',
	'5.188.217.37:1085',
	'5.188.219.126:1085',
	'5.188.219.224:1085',
	'5.188.219.195:1085',
	'81.22.46.56:1085',
	'81.22.46.221:1085',
	'5.188.219.194:1085',
	'95.181.217.178:1085',
	'5.188.217.214:1085',
	'95.181.217.59:1085',
	'5.188.217.76:1085',
	'5.188.219.160:1085',
	'81.22.46.63:1085',
	'5.188.219.226:1085',
	'5.188.219.150:1085',
	'5.188.219.185:1085',
	'81.22.46.58:1085',
	'81.22.46.12:1085',
	'5.188.217.179:1085',
	'81.22.46.178:1085',
	'5.188.219.221:1085',
	'5.188.219.168:1085',
	'95.181.217.82:1085',
	'81.22.46.94:1085',
	'5.188.217.139:1085',
	'81.22.46.186:1085',
	'95.181.217.77:1085',
	'5.188.219.28:1085',
	'5.188.219.130:1085',
	'5.188.217.241:1085',
	'5.188.219.22:1085'
];


// parse main page
// onlyUrls does not load pictures only return Urls
function parseDescription($content, $onlyUrls = false){
	$model = array();

	//preg_match_all('/по выгодной цене на Яндекс\.Маркете<\/title>.*m\.market\.yandex\.ru\/product\/([0-9]+)[\"|\?]/Uis', $content, $res);
	//preg_match_all('/Коротко о товаре.*m\.market\.yandex\.ru\/product\/([0-9]+)[\"|\?]/Uis', $content, $res);
	preg_match_all('/Коротко о товаре.*m\.market\.yandex\.ru\/product.*\/([0-9]+)[\"|\?]/Uis', $content, $res);

	if(isset($res[0][0]) && !empty($res[1][0])){
		$model['yandex_id'] = $res[1][0];
	} else {
		//another attmpt to get ID
		preg_match_all('/по выгодной цене на Яндекс\.Маркете<\/title>.*m\.market\.yandex\.ru\/product.*\/([0-9]+)[\"|\?]/Uis', $content, $res);
		if(isset($res[0][0]) && !empty($res[1][0])){
			$model['yandex_id'] = $res[1][0];
		} else {
			print_r("Error - no id"); exit;
		}
	}

	/*preg_match_all('/<meta itemprop=\"url\" content=\"https\:\/\/market\.yandex\.ru\/.*\/([0-9]+)\">/Uis', $content, $res);
	if(isset($res[0][0]) && !empty($res[1][0])){
		$model['yandex_id'] = $res[1][0];
	} else {
		print_r("Error - no id"); exit;
	}*/

	preg_match_all('/<h1 class=\"title title_size_28 title_bold_yes\">(.+)<\/h1>/Uis', $content, $output);
	if(isset($output[1][0]) && !empty($output[1][0])){
		$model['title'] = $output[1][0];
	} else {
		print_r($model['yandex_id']);
		print_r("Error - no title"); exit;
	}

	preg_match_all('/<li class=\"n-breadcrumbs__item\".*>(.+)<\/li>/Uis',$content,$output);
	if(isset($output[1][0]) && !empty($output[1][0])) {
		preg_match_all('/<a.+>(.+)<\/a>/Uis', $output[1][count($output[1]) - 1], $output);
		if (isset($output[1][0]) && !empty($output[1][0])) {
			$model['brand'] = strip_tags($output[1][0]);
		} else {
			print_r($output);
			print_r($model['yandex_id']);
			print_r("Error - no brand"); exit;
		}
	} else {
		print_r($output);
		print_r($model['yandex_id']);
		print_r("Error - no brand"); exit;
	}

	preg_match_all('/<div class=\"rating hint i-bem\".+модели(.+)из.+\}\}/Uis',$content,$output);
	if(isset($output[1][0]) && !empty($output[1][0])){
		$model['rating'] = str_replace('&nbsp;','',$output[1][0]);
	} else {
		$model['rating']='';
	}

	preg_match_all('/<li class=\"n-product-spec-list__item n-product-spec-list__item_type_friendly\">(.+)<\/li>/Uis',$content,$output);
	array_walk($output[1],function(&$item, $key){$item = str_replace('&nbsp;',' ',$item);});
	$model['summary'] = $output[1];

	preg_match_all('/<span class=\"n-reason-to-buy__best-item\">(.+)<\/span>/Uis',$content,$output);
	if(isset($output[1][0]) && !empty($output[1][0])){
		$model['benefits'] = $output[1];
	} else {
		$model['benefits']= [];
	}

	preg_match_all('/<img class=\"n-gallery__image image\" src=\"(.+)\".+>/Uis',$content,$output);
	if(isset($output[1]) && !empty($output[1])){
		array_walk($output[1],function(&$item, $key){$item = 'https:'.$item; $item = str_replace('/9hq','/orig',$item);});
		$model['images_urls'] = $output[1];
		$model['images'] = array();
		if(!$onlyUrls) {
			foreach($model['images_urls'] as $key=>$item){
				if (!$data = file_get_contents($item)){
					$error = error_get_last();
					echo "HTTP request failed. Error was: " . $error['message'];
				} else {
					$model['images'][$key] = base64_encode($data);
				}
			}
		}
	} else {
		$model['images_urls'] = [];
		$model['images'] = [];
	}

	return $model;

}

// parse characteristics
function parseCharacteristics($content){

	$model = array();
	preg_match_all('/<div class=\"n-product-spec-wrap__body\">(.+)<\/dl><\/div>/Uis',$content,$output);
	$model['characteristics'] = [];
	if(isset($output[1]) && !empty($output[1])) {
		foreach ($output[1] as $key => $item) {

			preg_match_all('/<h2 class=\"title title_size_18\">(.+)<\/h2>/Uis', $item, $title);
			$model['characteristics'][$key]['title'] = (isset($title[1][0]) && !empty($title[1][0])) ? $title[1][0] : 'Неопределенные';
			preg_match_all('/<dt class=\"n-product-spec__name\"><span class=\"n-product-spec__name-inner\">(.+)[<div|<\/span><\/dt>]/Us', $item, $name);
			$model['characteristics'][$key]['name'] = $name[1];


			preg_match_all('/<dd class=\"n-product-spec__value\"><span class=\"n-product-spec__value-inner\">(.+)<\/span><\/dd>/Us', $item, $option);
			if(preg_match('/product-color-set/Uis',$option[1][0])){
				preg_match_all('/background-color:(.+)\".+title=\"(.+)\"/Uis', $option[1][0], $colors);
				$model['characteristics'][$key]['option'][0]['codes'] = $colors[1];
				$model['characteristics'][$key]['option'][0]['title'] = $colors[2];

			} else {
				$model['characteristics'][$key]['option'] = $option[1];


			}

			preg_match_all('/<dl.+>(.+)<\/dl>/Us', $output[0][$key], $sections);
			foreach($sections[1] as $k=>$s){
				preg_match_all('/<dt class=\"n-product-spec__name\"><span class=\"n-product-spec__name-inner\">(.+)[<div|<\/span><\/dt>].+<div class=\"n-hint-button__article\">(.*)</Us', $s, $article);
				if(!empty($article[2])){
					$ind = array_search($article[1][0],$model['characteristics'][$key]['name']);
					$model['characteristics'][$key]['article'][$ind] = $article[2][0];
				}
			}
		}
	}

	preg_match_all("/<a class=\"link n-link_theme_blue.*\".+href=\"(.+)\">(.+)<\/a>/Uis",$content,$o);
	$model['keywords'] = [];
	foreach($o[1] as $k=>$s){
		preg_match_all("/glfilter=(.+)[&|$]/Ui",$s,$t);
		$model['keywords'][] = array('keyword'=>$o[2][$k],'filters'=>$t[1]);

	}
	return $model;
}

// parse review page
function parseReview($content, $download_avatar = false){

	$doc = new \DOMDocument();
	$doc->encoding = 'UTF-8';
	$libxml_previous_state = libxml_use_internal_errors(true);
	libxml_use_internal_errors(true);
	$doc->loadHTML($content);
	libxml_clear_errors();
	libxml_use_internal_errors($libxml_previous_state);

	$xpath = new \DOMXpath($doc);
	$articles = $xpath->query("//div[contains(@class, 'n-product-review-item i-bem')]");
	$reviews = array();
	for($i=0;  $i<$articles->length; $i++){
		$res = $doc->saveHTML($articles->item($i));
		preg_match_all('/<meta itemprop=\"datePublished\" content=\"(.+)\">/Uis', $res, $date);
		preg_match_all('/<img class="n-product-review-user__avatar" src=\"(.+)\" alt=\"\">/Uis', $res, $avatar);
		preg_match_all('/\"firstName\":\"(.+)\"/Uis', $res, $firstName);
		preg_match_all('/\"lastName\":\"(.+)\"/Uis', $res, $lastName);
		if(isset($avatar[1][0])){
			$reviews[$i]['avatar_url'] = 'http:'.$avatar[1][0];
			if($download_avatar == true){
				if (!$data = file_get_contents('http:'.$avatar[1][0])){
					$error = error_get_last();
					echo "HTTP request failed. Error was: " . $error['message'];
				} else {
					$reviews[$i]['avatar_image'] = base64_encode($data);
				}
			} else {
				$reviews[$i]['avatar_image'] = '';
			}

		} else {
			$reviews[$i]['avatar_url'] = '';
			$reviews[$i]['avatar_image'] = '';
		}

		if(isset($firstName[1][0])){
			$reviews[$i]['firstName'] = utf8_decode($firstName[1][0]);
		} else {
			$reviews[$i]['firstName'] = '';
		}

		if(isset($lastName[1][0])){
			$reviews[$i]['lastName'] = utf8_decode($lastName[1][0]);
		} else {
			$reviews[$i]['lastName'] = '';
		}

		$reviews[$i]['datePublished'] = isset($date[1][0]) ? $date[1][0] : '';

		preg_match_all('/<dt class=\"n-product-review-item__title\">(.+)<\/dt>/Uis', $res, $title);
		preg_match_all('/<dd class=\"n-product-review-item__text\">(.+)<\/dd>/Uis', $res, $text);

		foreach($title[1] as $k=>$t){
			if (str_replace(': ','',utf8_decode($t)) == 'Достоинства') {
				$reviews[$i]['review']['advantage'] = utf8_decode($text[1][$k]);
			} elseif (str_replace(': ','',utf8_decode($t)) == 'Недостатки') {
				$reviews[$i]['review']['disadvantage'] = utf8_decode($text[1][$k]);
			} elseif (str_replace(': ','',utf8_decode($t)) == 'Комментарий') {
				$reviews[$i]['review']['comment'] = utf8_decode($text[1][$k]);
			} else {
				$reviews[$i]['review']['comment'] = utf8_decode($text[1][$k]);
			}
			//$reviews[$i]['reviews'][str_replace(': ','',utf8_decode($t))] = utf8_decode($text[1][$k]);
		}

		if(empty($title[1]) && isset($text[1])){
			$reviews[$i]['review']['comment'] = utf8_decode($text[1][0]);
		}

		preg_match_all('/<span class=\"n-review-voting__num\">(.+)<\/span>/Uis', $res, $vote);
		preg_match_all('/<div class=\"rating__value\">(.+)<\/div>/Uis', $res, $rating);
		$reviews[$i]['score']['positive'] = $vote[1][0];
		$reviews[$i]['score']['negative'] = $vote[1][1];
		$reviews[$i]['score']['user'] = $rating[1][0];
	}
	return $reviews;
}

//parse content
function parseContent($content){

	$res = [];
	$res['content']['videos'] = [];
	$res['content']['articles'] = [];
	preg_match_all('/<div id=\"video-reviews\".+data-bem=\"(.+)\".+>/Uis', $content, $urls);
	if(isset($urls[1][0])){
		preg_match_all('/\"url\"\:\"(.+)\"/Uis', htmlspecialchars_decode($urls[1][0]), $links);
		preg_match_all('/\"relevance\"\:(.+),/Uis', htmlspecialchars_decode($urls[1][0]), $relevance);
		preg_match_all('/<h3 class=\"n-product-video__item-header\".+>(.+)<\/h3>/Uis', $content, $titles);
		if(!isset($titles[1][0])){
			preg_match_all('/<h3 class=\"n-product-video__main-header\">(.+)<\/h3>/Uis', $content, $titles);
		}
		preg_match_all('/<div class=\"n-product-video__item-text\">.+<div class=\"n-product-video__item-info\">(.+)<\/div>/Uis', $content, $views);
		if(!isset($views[1][0])){
			preg_match_all('/<div class=\"n-product-video__main-text\">.+<div>(.+)<\/div>/Uis', $content, $views);
		}

		preg_match_all('/<div class=\"n-product-video__item-text\"><div class=\"n-product-video__item-info\">(.+)<\/div>/Uis', $content, $dates);
		if(!isset($dates[1][0])) {
			preg_match_all('/<div class=\"n-product-video__main-text\"><div>(.+)<\/div>/Uis', $content, $dates);
		}

		foreach($links[1] as $key=>$link){
			$res['content']['videos'][] = array('url'=>$links[1][$key], 'relevance'=>$relevance[1][$key], 'title'=>$titles[1][$key], 'views'=>$views[1][$key], 'date'=>$dates[1][$key]);
		}
	}

	preg_match_all('/<a class=\"product-articles__item-title.+link\".+href=\"(.+)\">(.+)<\/a>/Uis', $content, $articles);
	foreach($articles[1] as $key=>$art){
		$res['content']['articles'][]=array('title'=>$articles[2][$key], 'url'=>$articles[1][$key]);
	}

	return $res;
}

//prepare files before parsing
function prepareFiles($dir){

	if (!is_dir($dir)){
		print_r($dir." is not directory");
		return false;
	}

	$list = [];

	if ($handle = opendir($dir)) {
		while (false !== ($entry = readdir($handle))) {
			if ($entry != "." && $entry != "..") {
				rename($dir . $entry, $dir . substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(20/strlen($x)) )),1,20) . ".html");
			}
		}
	}
	closedir($handle);

	$files = array_diff(scandir($dir), array('.', '..'));

	foreach($files as $key=>$entry){

		$content = file_get_contents($dir.$entry);
		//content
		//preg_match_all('/<meta itemprop=\"url\" content=\"https\:\/\/market\.yandex\.ru\/.*\/([0-9]+)\/articles\">/Uis', $content, $res);
		//preg_match_all('/<title>Обзоры модели.*на Яндекс\.Маркете<\/title>.*m\.market\.yandex\.ru\/product\/([0-9]+)[\"|\?|\/]/Uis', $content, $res);
		preg_match_all('/m\.market\.yandex\.ru\/product.*\/([0-9]+)\/videos[\"|\?]/Ui', $content, $res);
		if(isset($res[0][0]) && !empty($res[1][0])){
			if(!isset($list[$res[1][0]]) || !isset($list[$res[1][0]]['content'])){
				$num = rand(0,100000000);
				$list[$res[1][0]]['content'] = $res[1][0]."-content-".$num.".html";
				rename($dir.$entry, $dir.$res[1][0]."-content-".$num.".html");
				//$filename = $dir.$res[1][0]."-content-".$num.".html";
			}
		}

		//spec
		//preg_match_all('/<meta itemprop=\"url\" content=\"https\:\/\/market\.yandex\.ru\/.*\/([0-9]+)\/spec\">/Uis', $content, $res);
		//preg_match_all('/<title>Характеристики модели.*на Яндекс\.Маркете<\/title>.*m\.market\.yandex\.ru\/product\/([0-9]+)\/spec[\"|\?]/Uis', $content, $res);
		preg_match_all('/m\.market\.yandex\.ru\/product.*\/([0-9]+)\/spec[\"|\?]/Ui', $content, $res);
		if(isset($res[0][0]) && !empty($res[1][0])){
			if(!isset($list[$res[1][0]]) || !isset($list[$res[1][0]]['spec'])){
				$num = rand(0,100000000);
				$list[$res[1][0]]['spec'] = $res[1][0]."-spec-".$num.".html";
				rename($dir.$entry, $dir.$res[1][0]."-spec-".$num.".html");
				//$filename = $dir.$res[1][0]."-spec-".$num.".html";
			}
		}


		//reviews
		//preg_match_all('/<meta itemprop=\"url\" content=\"https\:\/\/market\.yandex\.ru\/.*\/([0-9]+)\/reviews\"></Uis', $content, $res);
		//preg_match_all('/о товаре на Яндекс\.Маркете<\/title>.*m\.market\.yandex\.ru\/product\/([0-9]+)\/reviews[\"|\?]/Uis', $content, $res);
		preg_match_all('/m\.market\.yandex\.ru\/product.*\/([0-9]+)\/reviews[\"|\?]/Ui', $content, $res);
		if(isset($res[0][0]) && !empty($res[1][0])){
			if(!isset($list[$res[1][0]])){
				$num = rand(0,100000000);
				$list[$res[1][0]]['reviews'][] = $res[1][0]."-reviews-".$num.".html";
				rename($dir . $entry, $dir . $res[1][0] . "-reviews-" . $num . ".html");
			} else {
				//print_r("Reviews section - ".$filename."\r\n");
				$num = rand(0,100000000);
				$list[$res[1][0]]['reviews'][] = $res[1][0]."-reviews-".$num.".html";
				rename($dir . $entry, $dir . $res[1][0] . "-reviews-" . $num . ".html");

			}
		}


		//main
		//preg_match_all('/<meta itemprop=\"url\" content=\"https\:\/\/market\.yandex\.ru\/.*\/([0-9]+)\">/Uis', $content, $res);
		//preg_match_all('/по выгодной цене на Яндекс\.Маркете<\/title>.*m\.market\.yandex\.ru\/product\/([0-9]+)[\"|\?]/Uis', $content, $res);
		preg_match_all('/Коротко о товаре.*m\.market\.yandex\.ru\/product.*\/([0-9]+)[\"|\?]/Uis', $content, $res);
		if(isset($res[0][0]) && !empty($res[1][0])){
			if(!isset($list[$res[1][0]]) || !isset($list[$res[1][0]]['description'])){
				$num = rand(0,100000000);
				$list[$res[1][0]]['description'] = $res[1][0]."-description-".$num.".html";
				rename($dir.$entry, $dir.$res[1][0]."-description-".$num.".html");
			}
		}

		preg_match_all('/по выгодной цене на Яндекс\.Маркете<\/title>.*m\.market\.yandex\.ru\/product.*\/([0-9]+)[\"|\?]/Uis', $content, $res);
		if(isset($res[0][0]) && !empty($res[1][0])){
			if(!isset($list[$res[1][0]]) || !isset($list[$res[1][0]]['description'])){
				$num = rand(0,100000000);
				$list[$res[1][0]]['description'] = $res[1][0]."-description-".$num.".html";
				rename($dir.$entry, $dir.$res[1][0]."-description-".$num.".html");
			}
		}

	}
	return $list;
}

//parse one product
function downloadProduct($url, $proxy=array()){
	//print_r($url); exit;
	//$delay = 5;
	$content = [];
	/*$client->getEngine()->addOption('--ignore-ssl-errors=true');
	$client->getEngine()->addOption("--proxy-type=socks5");
	//$request  = $client->getMessageFactory()->createCaptureRequest();
	$request  = $client->getMessageFactory()->createRequest();
	$response = $client->getMessageFactory()->createResponse();
	$request->setMethod('GET');
	$request->setUrl($url);*/

	$load = true;
	do {
		shuffle($proxy);
		$client = Client::getInstance();
		if(!empty($proxy)){
			$client->getEngine()->setOptions(['--ignore-ssl-errors=true', '--proxy-type=socks5', "--proxy=".$proxy[0]]);
		} else {
			$client->getEngine()->setOptions(['--ignore-ssl-errors=true']);
		}
		$request  = $client->getMessageFactory()->createRequest();
		$response = $client->getMessageFactory()->createResponse();
		$request->setMethod('GET');
		//$request->setDelay($delay);
		$request->setUrl($url);

		$client->send($request, $response);

		if($response->getStatus() === 200) {
			preg_match_all('/<meta itemprop=\"url\"/Uis', $response->getContent(), $r);
			if(!isset($r[0][0]) || empty($r[0][0])){
				print_r("Something went wrong but status 200");
				continue;
			}
			$content[] = $response->getContent();
			$load = false;
		} else if($response->getStatus() === 404){
			// probably wrong product
			print_r($url);
			return false;
		}
	} while($load === true);


	$load = true;
	do {
		shuffle($proxy);
		$client = Client::getInstance();
		if(!empty($proxy)){
			$client->getEngine()->setOptions(['--ignore-ssl-errors=true', '--proxy-type=socks5', "--proxy=".$proxy[0]]);
		} else {
			$client->getEngine()->setOptions(['--ignore-ssl-errors=true']);
		}
		$request  = $client->getMessageFactory()->createRequest();
		$response = $client->getMessageFactory()->createResponse();
		$request->setMethod('GET');
		//$request->setDelay($delay);
		$request->setUrl($url."/spec?track=tabs");
		$client->send($request, $response);

		if($response->getStatus() === 200) {
			preg_match_all('/<meta itemprop=\"url\"/Uis', $response->getContent(), $r);
			if(!isset($r[0][0]) || empty($r[0][0])){
				print_r("Something went wrong but status 200");
				continue;
			}
			$content[] = $response->getContent();
			$load = false;
		}
	} while($load === true);


	$load = true;
	do {
		shuffle($proxy);
		$client = Client::getInstance();
		if(!empty($proxy)){
			$client->getEngine()->setOptions(['--ignore-ssl-errors=true', '--proxy-type=socks5', "--proxy=".$proxy[0]]);
		} else {
			$client->getEngine()->setOptions(['--ignore-ssl-errors=true']);
		}
		$request  = $client->getMessageFactory()->createRequest();
		$response = $client->getMessageFactory()->createResponse();
		$request->setMethod('GET');
		//$request->setDelay($delay);
		$request->setUrl($url."/articles?track=tabs");
		$client->send($request, $response);
		if($response->getStatus() === 200) {
			preg_match_all('/<meta itemprop=\"url\"/Uis', $response->getContent(), $r);
			if(!isset($r[0][0]) || empty($r[0][0])){
				print_r("Something went wrong but status 200");
				continue;
			}
			$content[] = $response->getContent();
			$load = false;
		}
	} while($load === true);

	$load = true;
	do {
		shuffle($proxy);
		$client = Client::getInstance();
		if(!empty($proxy)){
			$client->getEngine()->setOptions(['--ignore-ssl-errors=true', '--proxy-type=socks5', "--proxy=".$proxy[0]]);
		} else {
			$client->getEngine()->setOptions(['--ignore-ssl-errors=true']);
		}
		$request  = $client->getMessageFactory()->createRequest();
		$response = $client->getMessageFactory()->createResponse();
		$request->setMethod('GET');
		//$request->setDelay($delay);
		$request->setUrl($url."/reviews?track=tabs");
		$client->send($request, $response);
		if($response->getStatus() === 200) {
			preg_match_all('/<meta itemprop=\"url\"/Uis', $response->getContent(), $r);
			if(!isset($r[0][0]) || empty($r[0][0])){
				print_r("Something went wrong but status 200");
				continue;
			}
			$content[] = $response->getContent();
			$load = false;

		}
	} while($load === true);

	$cnt = 0;
	while(true){

		preg_match_all('/<\/a><a href=\"(.+)\".+class=\"button__text\".+<\/span><\/a>/Uis', $response->getContent(), $output_array_next);
		$next = '';
		if(!empty($output_array_next[1])){
			foreach($output_array_next[1] as $n){
				if(strpos($n, '&amp;page=') !== false){
					$next = str_replace('&amp;','&',$n);
					preg_match("/([0-9]+)$/Uis",$next,$current_page);
				}
			}
		}

		if(empty($next) || $cnt > 10) {
			return $content;
		}

		if(isset($current_page[0]) && (int)$current_page[0]>$cnt){
			$cnt = $current_page[0];
		}elseif(isset($current_page[0]) && (int)$current_page[0]<$cnt){
			return $content;
		}

		$load = true;
		do {
			shuffle($proxy);
			$client = Client::getInstance();
			if(!empty($proxy)){
				$client->getEngine()->setOptions(['--ignore-ssl-errors=true', '--proxy-type=socks5', "--proxy=".$proxy[0]]);
			} else {
				$client->getEngine()->setOptions(['--ignore-ssl-errors=true']);
			}
			$request  = $client->getMessageFactory()->createRequest();
			$response = $client->getMessageFactory()->createResponse();
			$request->setMethod('GET');
			//$request->setDelay($delay);
			$request->setUrl("https://market.yandex.ru".$next);
			$client->send($request, $response);
			if($response->getStatus() === 200) {
				preg_match_all('/<meta itemprop=\"url\"/Uis', $response->getContent(), $r);
				if(!isset($r[0][0]) || empty($r[0][0])){
					print_r("Something went wrong but status 200");
					continue;
				}
				$content[] = $response->getContent();
				$load = false;
			}
		} while($load === true);
	}
}


function processProducts($folder, $proxy = array()){

	$output = new ConsoleOutput();
	$output->writeln('<info>Processing products for the folder '.$folder.'</info>');

	//check is file with links exist ?
	if(!is_file($folder."products.txt")){
		print_r("No file with products: products.txt");
		return;
	}

	//check is dump directory writeable?
	if(!is_file($folder."processed.txt")){
		$handle = fopen($folder."processed.txt","w+");
	} else {
		$handle = fopen($folder."processed.txt","a");
	}

	$products = array_map('trim', explode("\r\n",file_get_contents($folder."products.txt")));
	$processed = array_map('trim', explode("\r\n",file_get_contents($folder."processed.txt")));

	$progressBar = new ProgressBar($output, count($products));
	$progressBar->setFormatDefinition('custom', ' %current%/%max% %bar% %percent%% Last product parsed %message%');
	$progressBar->setFormat('custom');

	$progressBar->start();
	$progressBar->advance(count($processed));

	foreach($products as $product){
		if(in_array($product, $processed)){
			continue;
		}

		$content = downloadProduct('https://market.yandex.ru'.$product, $proxy);
		if($content !== false) {
			foreach ($content as $c) {
				$fp = fopen($folder . 'dump/' . substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(20 / strlen($x)))), 1, 20) . '.html', 'w+');
				fwrite($fp, $c);
				fclose($fp);
			}
			fwrite($handle, $product . "\r\n");
		} else {
			$output->writeln('<info> Skipped and need to check '.$product.'</info>');
		}
		unset($content);
		$progressBar->advance();
		$progressBar->setMessage('<info>'.$product.' at '.date('Y-m-d H:i:s').'</info>');
		//print_r($product."\r\n");
	}
	fclose($handle);
	$progressBar->finish();
	$output->writeln('<info>Done</info>');
}

//processProducts('/Users/menvil/Projects/yandexmarket/products/Аксессуары_для_пылесосов/', $proxy);
//exit;

$dir = "/Users/menvil/Projects/yandexmarket/products/Пылесосы/";
$list = prepareFiles($dir.'dump/');

//checks
foreach ($list as $key=>$l){

	if(!isset($l['description'])){
		//print_r("No description");
		print_r("http://market.yandex.ru/product/".$key."\r\n");
	}

	if(!isset($l['spec'])){
		print_r("No spec ".$key);
		print_r($l);
	}

	if(!isset($l['content'])){
		print_r("No content ".$key);
		print_r($l);
	}

	if(!isset($l['reviews'])){
		print_r("No reviews ".$key);
		print_r($l);
	}
}

//real parsing
foreach ($list as $key=>$l){
	if(!isset($list[$key]['description'])){
		continue;
	}

	$res = [];

	$content = file_get_contents($dir.'dump/'.$l['description']);
	$res = array_merge($res,parseDescription($content, false));
	$content = file_get_contents($dir.'dump/'.$l['spec']);
	$res = array_merge($res,parseCharacteristics($content));
	$content = file_get_contents($dir.'dump/'.$l['content']);
	$res = array_merge($res,parseContent($content));
	$res['reviews'] = [];
	if(isset($l['reviews'])){
		foreach($l['reviews'] as $r){
			$content = file_get_contents($dir.'dump/'.$r);
			$res['reviews'] = array_merge($res['reviews'],parseReview($content, true));
		}
	}
	$fp = fopen($dir.'txt/'.$res['yandex_id'].'.txt', 'w+');
	fwrite($fp, serialize($res));
	fclose($fp);
	print_r($res['yandex_id']."\r\n");
}

print_r("done");
