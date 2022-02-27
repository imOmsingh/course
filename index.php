<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "courses";


  $conn = mysqli_connect($servername, $username, $password, $database);

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CourseDekho</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CourseDekho</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="index2.html">Prices</a>
              </li>
            </ul>
            <form class="d-flex" method="post">
              <input class="form-control me-2" type="text" name='search' placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit" name="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    <div class="cont d-flex flex-column">


        <?php


          $query='SELECT * FROM `course`';
          $result=mysqli_query($conn,$query);
          while($row=mysqli_fetch_assoc($result)){
            echo '
            <div class="temp head d-flex flex-row">
              <img class="course-img" src="'.$row['img_src'].'"></img>
              <div class="course-text d-flex flex-column justify-content-evenly ">
                  <div class="head">'.$row['course_title'].'</div>
                  <div class="prt d-flex flex-row justify-content-evenly">
                      <div class="provider rounded-pill">'.$row['course_website'].'</div>
                      <div class="rating rounded-pill">'.$row['rating'].'</div>
                      <div class="type rounded-pill">'.$row['course_type'].'</div>
                  </div>    
                  <a class="course-link" href="'.$row['course_link'].'" >Link: '.$row['course_link'].'</a>
                  <div class="price-level d-flex flex-row">
                      <div class="price">Rs. '.$row['price'].'</div>
                      <div class="level">'.$row['level'].'</div>
                      <button type="button" class="btn btn-primary rounded-pill">Know More</button>
                  </div>
              </div>
            </div>';
          }
        ?>

      <div class="text">
        A prototype that shows the gist of the website how it will look and all the features of the website.

        we can choose the course as well as the sites we want to find our course on with a varied price range.
      </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>