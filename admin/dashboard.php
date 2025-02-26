<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>

<body>

   <?php include 'header.php'; ?>
   <!-- dashboard section starts  -->

   <div id="swap_dashboard" style="display: block;">
      <section class="dashboard">

         <h1 class="heading">dashboard</h1>

         <div class="box-container">



            <div class="box">
               <h3></h3>
               <p>total student</p>
               <a href="students.php" class="btn">add new student</a>
            </div>



            <div class="box">
               <h3></h3>
               <p>assigned courses</p>
               <a href="courses.php" class="btn">Assign</a>
            </div>

            <div class="box">
               <h3></h3>
               <p>total notifications</p>
               <a href="notification.php" class="btn">Add notifications</a>
            </div>

            <div class="box">
               <h3></h3>
               <p>Report</p>
               <a href="report.php" class="btn">view report</a>
            </div>


         </div>

      </section>

   </div>
   <script src="js/admin_script.js"></script>

   <?php include 'sidebar.php'; ?>
</body>

</html>