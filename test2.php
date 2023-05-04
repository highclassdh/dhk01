<? header("content-type:text/html; charset=UTF-8");



  $id = $_POST['id'];
  $user_id = $_POST['user_id'];
  $name = $_POST['name'];


  $connect = mysqli_connect('localhost', 'root', 'kk1234');
  mysqli_query($connect, "set names utf-8");
  mysqli_select_db($connect, 'kdo');
  if(!$connect)die('연결에 실패 하였습니다.'.mysqli_error());


  $query = "insert into kdo(id, user_id, name)
  values('$id', '$user_id', '$name')";
  mysqli_query($connect, "set names utf-8");
  mysqli_query($connect, $query);

  mysqli_close;   //끝내기.

  
?>



<script>
  window.alert('쿼리가 정상적으로 전송 되었습니다.');
  location.href='./index.php';
</script>

