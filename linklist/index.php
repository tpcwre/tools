<?php

	session_start();
	$arr = array(
		'http://mp.weixin.qq.com/s?__biz=MzI0NTIxMzUxNQ==&mid=2650538979&idx=5&sn=0b7b6630da6ceb577c1694f0aa0bf426#rd',
		'http://mp.weixin.qq.com/s?__biz=MzI0NTIxMzUxNQ==&mid=2650539026&idx=8&sn=f8816f83a4b593543eee096e8d30069e#rd',
		'http://mp.weixin.qq.com/s?__biz=MzI0NTIxMzUxNQ==&mid=2650539026&idx=3&sn=646b2f383619a57af36be01004661dbe#rd',
		'http://mp.weixin.qq.com/s?__biz=MzI0NTIxMzUxNQ==&mid=2650539036&idx=7&sn=33467f018fd2bd9a2e3585a294d39c8a#rd',
		'http://mp.weixin.qq.com/s?__biz=MzI0NTIxMzUxNQ==&mid=2650539043&idx=1&sn=b639327654fc70521655c1d3e210d492#rd',
		'http://mp.weixin.qq.com/s?__biz=MzI0NTIxMzUxNQ==&mid=2650539053&idx=2&sn=c6a6abd388c87c6ad0b8e99fae048662#rd',
		'http://mp.weixin.qq.com/s?__biz=MzI0NTIxMzUxNQ==&mid=2650539053&idx=6&sn=1778ab944143158f852f8b80ce8fa22e#rd',
		'http://mp.weixin.qq.com/s?__biz=MzI0NTIxMzUxNQ==&mid=2650539053&idx=1&sn=28757c95d72038417051a8bc05673b84#rd'	
	);



	if(!$_SESSION['a']){
		$_SESSION['a']=$arr;
	}

 	$rand = array_rand($_SESSION['a']);
	$url = $_SESSION['a'][$rand];
	unset($_SESSION['a'][$rand]);

	header('location:'.$url);

