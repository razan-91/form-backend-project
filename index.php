<?php  
include './inc/db.php';
include './inc/form.php';
include './inc/db_close.php';
include './inc/select.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="text-center win">
        <img src="./images/pexels-pixabay-220453.jpg" alt="">
              <h1 class="display-4 fw-normal">WIN NOW!</h1>
              <p class="lead fw-normal">It remains to open registration</p>
              <h3><p id="demo"></p></h3>
              <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>


          <div class="container">

            <!-- <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
              </ul> 
               -->
               <div class="position-relative">
                <div class="col-md-5 p-lg-5 mx-auto my-5">
              <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <h3 class="text-left mb-3">Please enter your information</h3>

                <div class="mb-3">
                  <label for="firstName" class="form-label">First name</label>
                  <input type="text" class="form-control"name="firstName" id="firstName" value="<?php echo $firstName ?>" placeholder="First Name" >
                  <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError'] ?></div>
                </div>
                <div class="mb-3">
                  <label for="lastName" class="form-label">Last name</label>
                  <input type="text" class="form-control"name="lastName" id="lastName" value="<?php echo $lastName ?>" placeholder="Last Name" >
                  <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError'] ?></div>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="text" class="form-control" name="email" id="email" value="<?php echo $email ?> " placeholder="Your Email" >
                  <div id="emailHelp" class="form-text error"><?php echo $errors['emailError'] ?></div>
                </div>
               
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary d-grid gap-2 mx-auto my-5">Submit</button>
              </form>
            </div>
        </div>


<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary d-grid gap-2 mx-auto my-5">
    The winner in a commpetition  </button>
</div>

<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">

            <?php foreach($users as $user): ?>
          <h5 class="modal-title" id="modalLabel">The winner in a commpetition</h5>
          <?php endforeach; ?>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <?php foreach($users as $user): ?>
            <h1 class="modal-title display-3 text-center" id="modalLabel"><?php echo htmlspecialchars($user['firstName'] . ' ' .htmlspecialchars($user['lastName'] ?> </h1>
            <?php endforeach; ?>
            
      </div>
    </div>
  </div>

    <!-- <div id="cards" class="row mb-5 pb-5">    
    <div class="col-sm-6">
        <div class="card my-2 bg-light">
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($user['firstName'] . ' ' .htmlspecialchars($user['lastName'] ?></h5>
                <p class="card-text"><?php echo htmlspecialchars($user['email']) ?> </p>
    </div>
    </div>
    </div>
</div> -->
</div>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
    </div>
</body>

</html>