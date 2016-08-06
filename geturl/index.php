<body bgcolor='#fcc'>
<center>
<h1>获取腾讯视频地址</h1>
<form method = 'post'>
<p>源地址：<input name='url' size=70/></p>		
<p>
	<input type='submit' value='获取视频地址' />
	<input type='reset' value='重置' />
</p>
</form>
</body>
<?php
	if($_POST['url']){
 		$url = $_POST['url'];
	}
	$curlobj = curl_init($url);
	curl_setopt($curlobj,CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curlobj,CURLOPT_SSL_VERIFYPEER, 0);
	$output=curl_exec($curlobj);
	$p = '/(http\:\/\/v|https\:\/\/v).*&/U';
	preg_match_all($p,$output,$res);
	$arr = $res[0];
	foreach($arr as $k=>$v){
 		$inp = 'inp'.$k;
		echo "<p>视频在址{$k}：<input id='{$inp}' value='{$v}' size=60 />　<button onclick=fz('{$inp}') >复制</button></p>";
	}
?>
</center>
<script>
function fz(inp){
	var inpobj = document.getElementById(inp);
	inpobj.select();
	document.execCommand('Copy');
	alert('以复制');
}
</script>
	
