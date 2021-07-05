<?php

date_default_timezone_set('Asia/Calcutta');
$date=date('Y-m-d');




if(array_key_exists('expense',$_POST) OR array_key_exists('expenditure',$_POST)){

  $link=mysqli_connect("sdb-e.hosting.stackcp.net","users_-313833c998","1Saptur2","users_-313833c998");
  if(mysqli_connect_error()){
    die("There is an error connecting to the db");
  }









  if($_POST['expense']==''){
    
    $expenseMiss="yes";
  }else if($_POST['expenditure']==''){
    
    $expenditureMiss="yes";
  }else{
    

    if(2<0){
      
    }else{


      $query="INSERT into payments(`expense`,`expenditure`,`date`) VALUES ('".mysqli_real_escape_string($link,$_POST['expense'])."','".mysqli_real_escape_string($link,$_POST['expenditure'])."','".mysqli_real_escape_string($link,$date)."')";
      if(mysqli_query($link,$query)){
        
        $expenseYes="yes";
        
        
      }else{
        echo "<p>There has been an error. Try again later</p>";
      }



    }
  }
}














?>























<html lang="en">
  <head>
    <style type="text/css">
      .header{
        width:400px !important;
        margin-top:80px !important;
      }

      body{
        background-color: green !important;
      }
      .house-number{
        margin-top: 50px !important;
        width:400px !important;
      }

      .label-house{
        font-weight:bold !important;
      }

      .amount{
        width:400px !important;
        margin-top: 16px !important;
      }

      .label-amount{
        font-weight: bold !important;
      }

      .but{
        width:400px !important;
        margin-top: 16px !important;
        margin-bottom:20px !important;
      }


    </style>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Monthly Maintenance ADMIN</title>
  </head>
  <body>
    <div class="container header">
      <h1>Expenses Entry</h1>
      
    </div>
    <form method="post">
      <div class="container house-number">
        <label for="exampleDataList" class="form-label label-house">Expense Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Eg. Security" name='expense'>
        
      </div>
      <div class="container amount">
        <label for="exampleFormControlInput1" class="form-label label-amount">Amount in INR</label>
        <input type="number" class="form-control" id="exampleFormControlInput3" placeholder="200" name='expenditure'>
      </div>
      <div class="container but">
        <button class="btn btn-primary" type="submit" onclick="location.href = 'pay.php';">Submit</button>
      </div>


      



    </form>

    <div class="container">
      <?php
      if($expenseYes){
        echo'<div class="alert alert-success" role="alert">
  The expense has been entered
</div>';
      }
      if($expenseMiss){
        echo'<div class="alert alert-danger" role="alert">
  The expense has to be mentioned
</div>';
      }
      if($expenditureMiss){
        echo'<div class="alert alert-danger" role="alert">
  The expenditure has to be entered
</div>';
      }
      ?>
    </div>

    <div class="container header">
      <h1>Payment Entry</h1>
      
    </div>
    <form method="post">
      <div class="container house-number">
        <label for="exampleDataList" class="form-label label-house">House number</label>
        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
        <datalist id="datalistOptions">
          <option value="A1">
          <option value="A2">
          <option value="A3">
          <option value="B1">
          <option value="B2">
          <option value="B3">
          <option value="C1">
          <option value="C2">
          <option value="C3">
          <option value="C">

        </datalist>
      </div>
      <div class="container house-number">
        <label for="exampleDataList" class="form-label label-house">For the Month of</label>
        <input class="form-control" list="datalistOptions2" id="exampleDataList4" placeholder="Type to search...">
        <datalist id="datalistOptions2">
          <option value="January">
          <option value="February">
          <option value="March">
          <option value="April">
          <option value="May">
          <option value="June">
          <option value="July">
          <option value="August">
          <option value="September">
          <option value="October">
          <option value="November">
          <option value="December">

        </datalist>
      </div>
      <div class="container amount">
        <label for="exampleFormControlInput1" class="form-label label-amount">Amount in INR</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="2000">
      </div>
      <div class="container but">
        <button class="btn btn-primary" type="submit">Submit</button>
      </div>


      



    </form>

    
    

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
    </script>


  </body>
</html>