<?php 
   include "functions.php";
   
   $my_obj  = new students();
 
   // for edit
    
    if (isset($_GET["id"])) 
    {
        $id = $_GET["id"];
        $for_single_records = $my_obj->showsingle($id);
    
    }
    
        // for update record

        if (isset($_POST["update"])) {
            $update_record = $my_obj->update();
        }
    
 




   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Show Records</title>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->
      <head>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
         <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
         <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
         <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
         <style>
            html *{
            -webkit-font-smoothing: antialiased;
            }
            body{
            background: #fff !important;
            }
            a {
            color: #3e3947 !important;
            text-decoration: none;
            }
            a:hover{
            color: #89229b !important;
            text-decoration: none !important;
            }
            a:focus {
            color: #89229b !important;
            text-decoration: none !important;
            }
            .container h3{
            font-size:25px ;
            margin-top: 20px ;
            margin-bottom: 10px ;
            font-weight: 300 ;
            color: #3c4858 ;
            }
            .container h4{
            font-size: 18px;
            line-height: 1.5;
            margin: 10px 0;
            font-weight: 300;
            color: #3c4858;
            }
            small{
            font-size: 75% !important;
            color: #777;
            }
            .btn-group{
            position: relative;
            margin: 10px 1px;
            display: inline-flex;
            vertical-align: middle;
            }
            .btn-group .btn{
            padding: 6.5px 20px !important;
            }
            .btn.btn-round{
            border-radius: 30px !important;
            }
            .btn-group .btn.btn-round{
            border-radius: 30px !important;
            }
            .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
            border-top-right-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
            }
            .btn-group>.btn:not(:first-child) {
            border-top-left-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
            }
            .btn{
            padding: 12px 30px !important;
            margin: 5px 1px;
            font-size: 12px !important;
            box-shadow: 0 2px 2px 0 hsla(0,0%,60%,.14), 0 3px 1px -2px hsla(0,0%,60%,.2), 0 1px 5px 0 hsla(0,0%,60%,.12);
            }
            .btn .material-icons{
            position: relative;
            display: inline-block;
            top: 0;
            margin-top: -1.2em;
            margin-bottom: -1em;
            font-size: 1.1rem;
            vertical-align: middle;
            }
            .btn.btn-sm{
            border-radius:3px !important;
            }
            .btn.btn-just-icon.btn-sm {
            height: 30px;
            min-width: 30px;
            width: 30px;
            }
            .btn.btn-just-icon {
            font-size: 24px;
            height: 41px;
            min-width: 41px;
            width: 41px;
            padding: 0 !important;
            overflow: hidden;
            position: relative;
            line-height: 41px;
            }
            .btn.btn-just-icon.btn-round {
            border-radius: 50% !important;
            }
            .btn.btn-link{
            background: transparent;
            box-shadow: none;
            color: #999;
            }
            .btn.btn-info {
            color: #fff !important;
            background-color: #00bcd4 !important;
            border-color: #00bcd4;
            box-shadow: 0 2px 2px 0 rgba(0,188,212,.14),
            0 3px 1px -2px rgba(0,188,212,.2),
            0 1px 5px 0 rgba(0,188,212,.12) !important;
            }
            .btn.btn-info:hover {
            box-shadow: 0 14px 26px -12px rgba(0,188,212,.42),
            0 4px 23px 0 rgba(0,0,0,.12),
            0 8px 10px -5px rgba(0,188,212,.2) !important;
            background: #00aec5 !important;
            }
            .btn.btn-info.btn-link{
            background-color: transparent !important;
            color: #00bcd4 !important;
            box-shadow:none !important;
            }
            .btn.btn-success {
            color: #fff !important;
            background-color: #4caf50 !important;
            border-color: #4caf50;
            box-shadow: 0 2px 2px 0 rgba(76,175,80,.14),
            0 3px 1px -2px rgba(76,175,80,.2), 
            0 1px 5px 0 rgba(76,175,80,.12) !important;
            }
            .btn.btn-success:hover {
            box-shadow: 0 14px 26px -12px rgba(76,175,80,.42), 
            0 4px 23px 0 rgba(0,0,0,.12),   
            0 8px 10px -5px rgba(76,175,80,.2) !important;
            background: #47a44b  !important;
            }
            .btn.btn-success.btn-link{
            background-color: transparent !important;
            color: #4caf50 !important;
            box-shadow: none !important;
            }
            .btn.btn-danger {
            color: #fff !important;
            background-color: #f44336 !important;
            border-color: #f44336;
            box-shadow: 0 2px 2px 0 rgba(244,67,54,.14), 
            0 3px 1px -2px rgba(244,67,54,.2), 
            0 1px 5px 0 rgba(244,67,54,.12) !important;
            }
            .btn.btn-danger:hover {
            box-shadow: 0 14px 26px -12px rgba(244,67,54,.42), 
            0 4px 23px 0 rgba(0,0,0,.12), 
            0 8px 10px -5px rgba(244,67,54,.2) !important;
            background-color: #f33527 !important;            
            }
            .btn.btn-danger.btn-link{
            background-color: transparent !important;
            color: #f44336 !important;
            box-shadow: none !important;
            }
            .btn.btn-just-icon .material-icons {
            margin-top: 0;
            position: absolute;
            width: 100%;
            transform: none;
            left: 0;
            top: 0;
            height: 100%;
            line-height: 41px;
            font-size: 20px;
            }
            .btn.btn-just-icon.btn-sm .material-icons {
            font-size: 17px; 
            line-height: 29px; 
            }
            .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 16px;
            background-color: transparent;
            }
            .table thead tr th {
            font-size: 17px ;
            font-weight: 300;
            }
            .table>thead>tr>th{
            padding: 12px 8px;
            vertical-align: middle;
            border-color: #ddd;
            font-weight: 300;
            }
            .table>tbody>tr>td{
            padding: 12px 8px;
            vertical-align: middle;
            border-color: #ddd;
            font-weight: 300;
            font-size:14px;
            color: #3c4858;
            }
         </style>
   </head>
   <body>
      <div class="container">
         <div class="row">
         <div class="col-md-3"></div>
            <div class="col-md-6">
               <div class="card" style="margin-top:30px;">
                  <div class="card-header">Add New Records</div>
                  <div class="card-body">
                     <form name="my-form" onsubmit="return validform()" method="POST">
                     <input type="hidden"  value="<?php echo $for_single_records[0]["id"];?>" name="id">
                        <div class="form-group row">
                           <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                           <div class="col-md-6">
                              <input type="text" id="full_name" class="form-control" value="<?php echo $for_single_records[0]["name"];?>" name="name">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                           <div class="col-md-6">
                              <input type="text" id="email_address" class="form-control" value="<?php echo $for_single_records[0]["email"];?>" name="email">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                           <div class="col-md-6">
                              <input type="text" id="phone_number" value="<?php echo $for_single_records[0]["mobile"];?>" name="mobile" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-6 offset-md-4">
                           <button type="submit" name="update" class="btn btn-primary">
                           Update
                           </button>
                        </div>
                  
                  </form>
               </div>
            </div>
         </div>
         <div class="col-md-3"></div>
      </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
   
   <script>
    function validform() {

        var a = document.forms["my-form"]["name"].value;
        var b = document.forms["my-form"]["email"].value;
        var c = document.forms["my-form"]["mobile"].value;


        if (a==null || a=="")
        {
            alert("Please Enter Your Full Name");
            return false;
        }else if (b==null || b=="")
        {
            alert("Please Enter Your Email Address");
            return false;
        }else if (c==null || c=="")
        {
            alert("Please Enter Your Mobile No.");
            return false;
        }

    }
   </script>
   
    </body>
</html>