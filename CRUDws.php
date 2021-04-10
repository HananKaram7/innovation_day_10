<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="./styles/bootstrap.min.css"> -->
        <!-- <link rel="stylesheet" href="./styles/all.min.css"> -->
        <link rel="stylesheet" href="./styles/headerandfooter.css">
        <link rel="stylesheet" href="scripts/aos-master/dist/aos.css">
        <link rel="stylesheet" href="styles/workshops.contact.css">
        </head>


        <body>

<?php
    include_once("conf.php");
    $sql = "SELECT * FROM workshops";
    $result = mysqli_query($mysqli, $sql) or die( mysqli_error($mysqli));
    $date = new DateTime();
    $time = $date->getTimezone();
?>



<section class="py-4">
    
<h1 class="text-danger text-center py-5">workshops</h1>
        <table class=" table  text-center">
        <thead>
        <th>id</th>
        <th>name</th> 
        <th>email</th> 
        <th>Phonenum</th>
        <th>workshop_attend</th>
        <th>Experience</th>
        <th>workshops</th>
        
        
        </thead>
        <?php
            while($user_data = mysqli_fetch_array($result)) {
                
                echo " <tbody>";
                echo "<td>".$user_data['id']."</td>";
                echo "<td>".$user_data['name']."</td>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td>".$user_data['Phonenum']."</td>";
                echo "<td>".$user_data['workshop_attend']."</td>";
                echo "<td>".$user_data['Experience']."</td>";
                echo "<td>".$user_data['workshops']."</td>";
                echo "<td><a class='btn btn-primary' href='delete.php?id=$user_data[id]'>Delete</a> </td>";
                 echo " </tbody>";
              
  }
        ?>       
    
    </table>

      
  
</section>
   
    
    



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="scripts/js/all.min.js"></script>
    <script src="scripts/aos-master/dist/aos.js"></script>
    <script src="scripts/js/main.js"></script>
</body>
</html>