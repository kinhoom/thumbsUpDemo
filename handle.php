<?php
$flag=$_POST[flag];
if($flag==2){
	mysql_connect('localhost','root','kinhoom123');
	mysql_select_db('testinnodb');
	mysql_query('set names utf8');
	$ret=mysql_query('select zan from a');
	if($ret){
		$res=mysql_fetch_assoc($ret);
		$zan=(int)$res[zan];
		if($zan==0){
			echo 0;
			exit;
		}
		$now=$zan-1;
		if(mysql_query("update a set zan={$now} where id=1")){
			echo $now;
		}
	}else{
		echo '没有数据！';
	}
}else if($flag==1){
	mysql_connect('localhost','root','kinhoom123');
	mysql_select_db('testinnodb');
	mysql_query('set names utf8');
	$ret=mysql_query('select zan from a');
	if($ret){
		$res=mysql_fetch_assoc($ret);
		$zan=(int)$res[zan];
		$now=$zan+1;
		if(mysql_query("update a set zan={$now} where id=1")){
			echo $now;
		}
	}
}