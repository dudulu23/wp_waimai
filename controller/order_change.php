<?php 
//用户订单页面数量改变的ajax
	session_start();
	if(isset($_POST['id'])&&isset($_POST['num'])){
		$id=$_POST['id'];
		$num=$_POST['num'];
		if(isset($_SESSION['list'][0])){
			$i=0;
			while(isset($_SESSION['list'][$i])){
				if($_SESSION['list'][$i]->goods_id==$id){
					$_SESSION['list'][$i]->goods_num=$num;
					if($_SESSION['list'][$i]->goods_num==0){
						array_splice($_SESSION['list'],$i);
					}
				}
				$i++;
			}
		}
	}
	print_r($_SESSION['list']);
?>