 <?php include("../layout/header.php"); ?>
<?php
require_once("../includes/db_connection.php");
?>
 <style media="screen">
   .modal-header {
     background-color: black;
     text-align: center;
     font-size: 30px;
     height: 150px;
   }
   #myModalTitle {
     color: white;
     font-size: 70px;
   }

   .card {
     width: 300px;
     margin: auto;
   }
 </style>
 <div class="modal" id="myModal">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         <h4 class="modal-title" id="myModalTitle">New Card</h4>
          <!--<img id="myImage" src="../images/mycard.png" style="width:80px;height:80px;margin-top:-20px" alt="" /> -->
       </div>
       <div class="modal-body">
         <form action="addcard.php" method="post">
           <div class="form-group">
             <label for="name">Name</label>
             <input class="form-control" type="text" name="name" value="">
           </div>

           <div class="form-group">
             <label for="name">Title</label>
             <input class="form-control" type="text" name="title" value="">
           </div>

           <div class="form-group">
             <label for="name">phone</label>
             <input class="form-control" type="text" name="phone_number" value="">
           </div>

           <div class="form-group">
             <label for="name">email</label>
             <input class="form-control" type="text" name="email" value="">
           </div>


           <div class="form-group">
             <label for="name">gender</label>
             <input class="form-control" type="text" name="gender" value="">
           </div>

           <button class="btn-success" type="submit" name="submit" value="submit" style="float:right;padding:20px">Create Card</button>
           <br>
           <br>
           <br>


         </form>
       </div>
       <div class="modal-footer">
         <p>Thank you for using Biz Card Maker Pro</p>
       </div>
     </div>
   </div>
 </div>

 <!-- CARDS START HERE -->
 <?php
global $connection;
$query = "SELECT * ";
$query .= "FROM cards";

$card_set = mysqli_query($connection, $query);

while ($card = mysqli_fetch_assoc($card_set)) {
  ?>
 <div class="card">
   <?php $gender_avatar = "src=\"../images/img_avatar.png\"";
   if ($card["gender"] == "f") {
     $gender_avatar = "src=\"../images/img_avatar2.png\"";
   }
   ?>
   <img <?php echo $gender_avatar ?> alt="Avatar" style="width:100%">
   <div class="container" style="width:100%">
     <h4><b><?php echo $card["name"] ?></b></h4>
     <p><?php echo $card["title"] ?></p>
     <p><?php echo $card["phone_number"] ?></p>
     <p><?php echo $card["email"] ?></p>
   </div>
 </div>
 <<?php } mysqli_free_result($card_set)  ?>
 <br>
 <br>






 <!-- CARDS END HERE -->

<a class="btn btn-default btn-lg btn-block" style="width:250px;margin:auto" id="myBtn">New Card</a>
<br>
<br>
<script type="text/javascript">
$(document).ready(function(){
  $("#myBtn").click(function(){
      $("#myModal").modal();
    });
});
</script>
  </body>
</html>
<?php  ?>
