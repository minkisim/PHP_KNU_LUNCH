<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>도시락 메뉴 조회</title>
</head>

<body>
  <?php $i=1;?>
  <!-- Header -->
  <header>
    <div class="logo">
      <img src="knu.jpg" alt="로고" title="경북대 로고">
      <span class="title">도시락 신청 내역 확인</span>
    </div>
    <div class="icons">
      <i class="fas fa-sign-out-alt" title="로그아웃"></i>
      <i class="fas fa-ellipsis-v" title="더보기"></i>
    </div>
  </header>
  <!-- Table -->
  <table class="type">
    <thead>
      <th>이미지</th>
      <th>이름</th>
      <th>가격</th>
      <th>신청 개수</th>
    </thead>

    <input type="hidden" name="user_id" value=<?php echo $_GET['user_id']?>>
    <tbody>
      <tr>
        <td><img src="lunchbox.jpg" alt="사진 1" width="200" height="150"></td>
        <td>불고기 도시락</td>
        <td>4500</td>
        <td><?php echo $_GET['menu1']; $i=$i+1;?></td>
      </tr>
      <tr>
        <td><img src="lunchbox.jpg" alt="사진 2" width="200" height="150"></td>
        <td>돈까스 도시락</td>
        <td>5000</td>
        <td><?php echo $_GET['menu2'];$i=$i+1;?></td>
      </tr>
      <tr>
        <td><img src="lunchbox.jpg" alt="사진 3" width="200" height="150"></td>
        <td>치즈돈까스 도시락</td>
        <td>5500</td>
        <td><?php echo $_GET['menu3'];$i=$i+1;?></td>
      </tr>
      <tr>
        <td><img src="lunchbox.jpg" alt="사진 4" width="200" height="150"></td>
        <td>옛날 도시락</td>
        <td>5000</td>
        <td><?php echo $_GET['menu4'];$i=$i+1;?></td>
      </tr>
      </tbody>
    </table>
    <form action="billing.php" method="get">
    <div class="total">
      총액 : <?php echo $_GET['menu1']*4500+$_GET['menu2']*5000+$_GET['menu3']*5500+$_GET['menu4']*5000;?> 원
    </div>
    <div class="submitbutten">
      <?php $i=1;?>
      <input type="hidden" name="user_id" value=<?php echo $_GET['user_id'];?>>
      <input type="hidden" name=<?php echo 'menu'.$i;$i=$i+1;?> value=<?php echo $_GET['menu1'];?>>
      <input type="hidden" name=<?php echo 'menu'.$i;$i=$i+1;?> value=<?php echo $_GET['menu2'];?>>
      <input type="hidden" name=<?php echo 'menu'.$i;$i=$i+1;?> value=<?php echo $_GET['menu3'];?>>
      <input type="hidden" name=<?php echo 'menu'.$i;$i=$i+1;?> value=<?php echo $_GET['menu4'];?>>
      <input type="hidden" name="billing" value=<?php echo $_GET['menu1']*4500+$_GET['menu2']*5000+$_GET['menu3']*5500+$_GET['menu4']*5000;?>>
      <input style='width:100px;height:36px;float:right;' type = "submit" value = "결제">
    </div>
    </form>



</body>

</html>
