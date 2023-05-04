<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>KDO홈페이지</title>
	<link href="./style.css" rel='stylesheet' type='text/css'>
</head>

<body>


	<div>---데이터 생성---</div>

	<form action="./test2.php" name="test" method="post">
		<input type="hidden" name="id" value='test'>
		<div>아이디: <input type='text' name='user_id'></div>
		<div>이름: <input type='text' name='name'></div>
		<input type='submit' vlaue='전송'>
	</form>

	<div>---데이터 불러오기---</div>

	<div>
		-아이디: <?='<div>가가가가</div>'?>
	</div>


	<?php
		$connect = mysqli_connect('localhost', 'root', 'kk1234');
		mysqli_query($connect, "set names utf-8");
		mysqli_select_db($connect, 'kdo');
		if(!$connect)die('연결에 실패 하였습니다.'.mysqli_error());

		//쿼리문으로 데이터 불러오기
		$query = "select * from kdo";
		mysqli_query($connect, "set names utf-8");
		$result = mysqli_query($connect, $query);
		while($data = mysqli_fetch_array($result)) {

		?>
		
		-이름: <?=$data[name]?> &nbsp; &nbsp; 
		-아이디: <?=$data[user_id]?> &nbsp; &nbsp; 
	
	<? } ?>

    <div>
			-아이디: <?='<div>나나나나</div>'?>
		</div>
		<img src='./image/11.png'>

</body>

</html>