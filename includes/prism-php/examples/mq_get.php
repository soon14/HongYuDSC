<?php
//zend by QQ:1527200768  鸿宇科技  禁止倒卖 一经发现停止任何服务
require 'include.php';
$mq = $c->notify();

while (1) {
	$data = $mq->get();
	echo $data;
	echo "\n";
	$data->ack();
}

?>
