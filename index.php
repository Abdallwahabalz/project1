<?php

include './inc/conn.php';





$sql = 'SELECT * FROM users ';
$result = mysqli_query($conn , $sql);
$users = mysqli_fetch_all($result,MYSQLI_ASSOC);



mysqli_free_result($result);
mysqli_close($conn);




?>

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>

</head>
<body>
       <script src="./js/script.js"></script> 
    <div class="container">


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">اربح مع عبدالوهاب  </h1>
      <p class="lead fw-normal"></p>
      <p id="demo"></p>
      <a class="btn btn-outline-secondary" href="#"></a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>

  <ul class="list-group list-group-flush">
  <li class="list-group-item">سجل دخول</li>
  <li class="list-group-item">ادخل اسم المستخدم في الاسفل </li>
  <li class="list-group-item">ادخل اسم المستخدم الاخير في الاسفل</li>
  <li class="list-group-item">ضف البريد الالكتروني </li>
  
</ul>





<form class= "mt-5"  action="index.php" method="POST">
    <h3>الرجاء ادخل معلوماتك</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> الاسم الاول</label>
    <input type="text" name="firstname" class="form-control" id="exampleInputEmail1"value="<?php echo $firstName ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError']?></div>
  </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastname"  class="form-control" id="exampleInputEmail1"value="<?php echo $lastName ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError']?></div>
  </div>


    <div class="mb-3" >
    <label for="exampleInputEmail1" class="form-label">الايميل</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1"value="<?php echo $email ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError']?></div>
  </div>


  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <div class="row mb-5 ph-5" >
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" >
 <?php foreach($users as $user):?>
<div class="col-sm-6">
<div class="card-body">
   <h5 class="card-title"><?php echo htmlspecailchars($user['firsrName']).''.htmlspecailchars($user['firsrName']) ?></h5>
   <p class="card-text"><?php echo htmlspecailchars ($user['email'])?></p>
   <?php endforeach; ?>
 </div>
</form>

</div>

 
 <form action="index.php" method="POST">
<!--
 <input type="text" name="firstname" id="firstname" placeholder="Name">
 <input type="text" name="lastname" id="lastname" placeholder="last name">

 <input type="text" name="email" id="email" placeholder="email"> 
 <input type="submit" name="submit"value="send">
<button id ="winner" type="button">اختيار البرنامج </button>
<div id="cards" class= "row mb-5 pb-5"> !-->
  <div class="row mb-5 ph-5" >
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" >
 <?php foreach($users as $user):?>
<div class="col-sm-6">
<div class="card-body">
   <h5 class="card-title"><?php echo htmlspecailchars($user['firsrName']).''.htmlspecailchars($user['firsrName']) ?></h5>
   <p class="card-text"><?php echo htmlspecailchars ($user['email'])?></p>

   <?php endforeach; ?>
 </div>
 </div>

 </div>
 
 </form>


 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
</body>
</html>