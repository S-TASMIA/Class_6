<?php
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset ="UTF-8">
    <meta name="viewpoint" content = "width= device-width , initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="#">POST SYSTEM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Add Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">All Post</a>
            </li>
          </ul>
              <!----<li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
        </ul>---->
        <!---<form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
        </form>----->
      </div>
    </div>
  </nav>
  <div class ="card col-lg-4 mx-auto mt-5">
    <div class ="card-header">
     <center><h3>Create Post</h3></center>
    </div>
  <div class = "card-body">
    <form action= "./controller/storePost.php" method="POST">
      <input name="title"
      value= "<?= isset($_SESSION['old']['title']) ? $_SESSION ['old']['title'] : ''?>"
      class = "form-control my-3" type = "text" placeholder="Post Title">
      <?php
          if(isset($_SESSION['form_errors']['title_error'])){
      ?>
          <span class ="text-danger"> <?= $_SESSION['form_errors']['title_error'] ?></span>
      <?php     
          }  
      ?>
      <textarea name ="detail" class= "form-control my-3" placeholder="Write Something"><?= isset ($_SESSION['old']['detail']) ? $_SESSION['old']['detail'] : '' ?></textarea>
      <?php
          if(isset($_SESSION['form_errors']['detail_error'])){
      ?>
          <span class ="text-danger"> <?= $_SESSION['form_errors']['detail_error'] ?></span>
      <?php     
          }  
      ?>
      <input 
      value="<?= (isset($session['old']['author'])) ? $session['old']['author'] :''?>"
      name= "author" class= "form-control my-3" type = "text" placeholder ="Author Name">
      <button class="btn btn-success" style="font-size: 20px; font-weight:700; margin-top:20px;">Submit</button>
    </form>
  </div>
</div>
</body>
</html>

<?php
session_unset();
?>
