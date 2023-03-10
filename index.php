<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD Operation!</title>
  </head>
  <body>

        <!-- Main Boostrap Form Codes Files -->
<div class="container my-4 p-4 shadow">
 <h2><a style="text-decoration: none; color:green;" href="index.php">ASAD'S Student Datebase</a></h2>
      <form class="form" action="" method="post" enctype="multipart/form-data">

         <input class="form-control mb-2" type="text" name="std-name" class placeholder="Enter Your Name">
         <input class="form-control mb-2" type="number" name="std-roll" class placeholder="Enter Your Roll">
         <label class=" mb-2" for="image"> Upload Your Image </label>

         <input  class="form-control mb-2 "type="file" name="std-image">
         <input class="form-control mb-2 bg-info" type="submit" value="Add Information" name="submit" >

                  
         </form>


</div>



 <!-- Tabile Codes Files -->

<div class="container my-4 p-4 shadow">

    <table class= "table table-responsive">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Student Roll</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Asad</td>
                <td>234</td>
                <td><a class= "btn btn-success" href="#">Edit</a></td>
                <td><a class= "btn btn-warning" href="#">Delete</a></td>
            </tr>
        </tbody>

    </table>



</div>









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>