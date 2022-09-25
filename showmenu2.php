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
  <?php $i=1;
    $user_id = "00000000";?>
  <!-- Header -->
  <header>
    <div class="logo">
      <img src="knu.jpg" alt="로고" title="경북대 로고">
      <span class="title">학식 도시락</span>
    </div>
    <div class="icons">
      <i class="fas fa-sign-in-alt" title="로그인"></i>
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
    <form action="buymenu.php" method="get">
    <input type="hidden" name="user_id" value=<?php echo $user_id?>>
    <tbody>
      <tr>
        <td><img src="lunchbox.jpg" alt="사진 1" width="200" height="150"></td>
        <td>불고기 도시락</td>
        <td>4500</td>
        <td><input type="number" name="menu<?php echo $i; $i=$i+1;?>" min="0" max="10" step="1" value="0"></input></td>
      </tr>
      <tr>
        <td><img src="lunchbox.jpg" alt="사진 2" width="200" height="150"></td>
        <td>돈까스 도시락</td>
        <td>5000</td>
        <td><input type="number" name="menu<?php echo $i; $i=$i+1;?>" min="0" max="10" step="1" value="0"></input></td>
      </tr>
      <tr>
        <td><img src="lunchbox.jpg" alt="사진 3" width="200" height="150"></td>
        <td>치즈돈까스 도시락</td>
        <td >5500</td>
        <td><input type="number" name="menu<?php echo $i; $i=$i+1;?>" min="0" max="10" step="1" value="0"></input></td>
      </tr>
      <tr>
        <td><img src="lunchbox.jpg" alt="사진 4" width="200" height="150"></td>
        <td>옛날 도시락</td>
        <td>5000</td>
        <td><input type="number" name="menu<?php echo $i; $i=$i+1;?>" min="0" max="10" step="1" value="0"></input></td>
      </tr>
      </tbody>
    </table>

    <div>
      <input style='width:100px;height:36px;position:fixed;right:10px' type = "submit" value = "구매">
    </div>
    </form>



</body>

</html>
