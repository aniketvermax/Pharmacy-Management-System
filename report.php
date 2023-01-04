<?php
$connection = mysqli_connect('localhost','root','','pharmacy1');

  $query = "SELECT * FROM information";
  $result = mysqli_query($connection,$query);
  $row=mysqli_fetch_assoc($result);
  $roww="";
  $flag=0;




if(isset($_POST['submit'])){
  $MedicineName = $_POST['MedicineName'];
  $Med = $MedicineName;
  


  $connection = mysqli_connect('localhost','root','','pharmacy1');
  if(!$connection){
  die("DB not Connected");
  }
  else{
  $queryy = "SELECT * FROM information WHERE MedicineName = '$MedicineName'";
  $resultt = mysqli_query($connection,$queryy);
  $roww=mysqli_fetch_assoc($resultt);
  $flag=1;
}
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
  <title>Report | Pharmacy</title>
  <style>
    .f1{
      display:grid;
      grid-template-columns: 0.8fr 2.5fr;

      grid-column-gap:1em;
      grid-row-gap:1em;

      opacity: 0.8;
    }

    .f1 > div{
      background:#eee;
      padding:1em;
    }
    .f1 > div:nth-child(odd){
      background:#ddd;
    }
    .footer{
      display:grid;
      grid-template-columns: 4fr 1fr;
      grid-column-gap:2em;
      grid-row-gap:2em;
      opacity: 0.8;
    }

    .footer > div{
      background:#bbb;
      padding:2em;
    }
    .footer > div:nth-child(odd){
      background:black;
    }
    body{
      background-image:url(http://www.pptbackgrounds.org/uploads/silver-light-blue-wave-abstract-backgrounds-powerpoint.jpg);
      min-height: 100%;
      background-repeat: no-repeat;
      background-attachment: fixed;
      //background-position: center;
      background-size: cover;
      background-margin-top:20em;
      //background-padding-top:20em;

    }

  </style>
</head>
<body>
  <center><h1>Pharmacy Management<center></center></h1>
  <div class="f1">
    <div>
      <font size=6>
        <br>
      <center>Report</center>
    </font>
    </div>
    <div>
      <a href="sale.php">
      <input type="image" id="image" alt="Sale"
       src="https://img.icons8.com/pastel-glyph/100/000000/sales-channels.png">
     </a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="report.php">
      <input type="image" id="image" alt="Report"
       src="https://img.icons8.com/ios/100/000000/report-card.png">
     </a>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="add.php">
      <input type="image" id="image" alt="Add Medicine"
       src="https://img.icons8.com/wired/100/000000/add-column.png">
     </a>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="remove.php">
      <input type="image" id="image" alt="Remove Medicine"
       src="https://img.icons8.com/ios/100/000000/delete-sign-filled.png">
     </a>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="modify.php">
<input type="image" id="image" alt="Modify"
       src="https://img.icons8.com/ios/100/000000/change-theme.png">
     </a>
     <br>
Sale
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
Report
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Add Medicine
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

Remove Medicine
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Modify
    </div>
    <div>
    <form action="report.php" method="post">
    <div align="left">
    

      <font size=5>Remove Medicine :</font>
      <br><br>

      <div>

        <label>Medicine Name :</label>
        <input type="text" name="MedicineName">
      </div>

      <br>
      <br>
      <br>

      <button type="button"><b>Clear</b></button>
      <button type="submit" name="submit"><b>Search</b></button>


    </div>
    </form>

    </div>
    <div>
    <br>
    <?php
    if($roww && $flag=1)
    {
    ?>  
    <div class="container">
        <div class="table-responsive" style="background-color:grey;height: 150px;">
            <table class="table">
                <thead>
                    <tr>
                        <th>Medicine Name</th>
                        <th>Medicine Type</th>
                        <th>Slelf</th>
                        <th>Shelf no</th>
                        <th>DOM</th>
                        <th>DOE</th>
                        <th>Quantity</th>
                        <th>Cost</th>
                    </tr>
                </thead>
                <tbody style="color: rgb(0,0,0);background-color: #e3cbcb;">
                    <tr>
                        <td><?php echo $roww['MedicineName'] ?></td>
                        <td><?php echo $roww['MedicineType'] ?></td>
                        <td><?php echo $roww['Shelf'] ?></td>
                        <td><?php echo $roww['ShelfNo'] ?></td>
                        <td><?php echo $roww['DOM'] ?></td>
                        <td><?php echo $roww['DOE'] ?></td>
                        <td><?php echo $roww['Quantity'] ?></td>
                        <td><?php echo $roww['Cost'] ?></td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                </tbody>
            </table>
        </div>
    </div>
    <br>

    <?php
  }
      do{
        ?>
    <div class="container">
        <div class="table-responsive" style="background-color: #7a87cc;height: 115px;">
            <table class="table">
                <thead>
                    <tr>
                        <th>Medicine Name</th>
                        <th>Medicine Type</th>
                        <th>Slelf</th>
                        <th>Shelf no</th>
                        <th>DOM</th>
                        <th>DOE</th>
                        <th>Quantity</th>
                        <th>Cost</th>
                    </tr>
                </thead>
                <tbody style="color: rgb(0,0,0);background-color: #e3cbcb;">
                    <tr>
                        <td><?php echo $row['MedicineName'] ?></td>
                        <td><?php echo $row['MedicineType'] ?></td>
                        <td><?php echo $row['Shelf'] ?></td>
                        <td><?php echo $row['ShelfNo'] ?></td>
                        <td><?php echo $row['DOM'] ?></td>
                        <td><?php echo $row['DOE'] ?></td>
                        <td><?php echo $row['Quantity'] ?></td>
                        <td><?php echo $row['Cost'] ?></td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php
  }while($row = mysqli_fetch_assoc($result));
    ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <br>
   
    </div>

  </div>
  <br>
  <div class="footer">
    <div align="left">
      <font color="white">
      For any support or assistance : e-mail : example@domain.com
    </font>
    </div>
    <div>
      <a href="welcome.php">
      <input type="image" id="image" alt="Sale" 
       src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNTAiIGhlaWdodD0iNTAiCnZpZXdCb3g9IjAgMCAxNzIgMTcyIgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0ibm9uemVybyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIHN0cm9rZS1saW5lY2FwPSJidXR0IiBzdHJva2UtbGluZWpvaW49Im1pdGVyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9IiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIGZvbnQtZmFtaWx5PSJub25lIiBmb250LXdlaWdodD0ibm9uZSIgZm9udC1zaXplPSJub25lIiB0ZXh0LWFuY2hvcj0ibm9uZSIgc3R5bGU9Im1peC1ibGVuZC1tb2RlOiBub3JtYWwiPjxwYXRoIGQ9Ik0wLDE3MnYtMTcyaDE3MnYxNzJ6IiBmaWxsPSIjMDAwMDAwIj48L3BhdGg+PGcgZmlsbD0iI2ZmZmZmZiI+PGcgaWQ9InN1cmZhY2UxIj48cGF0aCBkPSJNMy40NCwtMC4xMDc1Yy0xLjk3NTMxLDAgLTMuNTQ3NSwxLjU3MjE5IC0zLjU0NzUsMy41NDc1djE2NS4xMmMwLDEuOTc1MzEgMS41NzIxOSwzLjU0NzUgMy41NDc1LDMuNTQ3NWgxMDMuMmMxLjk3NTMxLDAgMy41NDc1LC0xLjU3MjE5IDMuNTQ3NSwtMy41NDc1di03OS4xMmgtNTUuMTQ3NWMtMS44OTQ2OSwwIC0zLjQ0LC0xLjU0NTMxIC0zLjQ0LC0zLjQ0YzAsLTEuODk0NjkgMS41NDUzMSwtMy40NCAzLjQ0LC0zLjQ0aDU1LjE0NzV2LTc5LjEyYzAsLTEuOTc1MzEgLTEuNTcyMTksLTMuNTQ3NSAtMy41NDc1LC0zLjU0NzV6TTExMC4xODc1LDgyLjU2djYuODhoNDYuNjU1bC0yNC43MjUsMjQuNzI1Yy0xLjM0Mzc1LDEuMzQzNzUgLTEuMzQzNzUsMy40OTM3NSAwLDQuODM3NWMwLjY3MTg4LDAuNjcxODggMS40NzgxMywxLjA3NSAyLjM2NSwxLjA3NWMwLjg4Njg4LDAgMS44MDA2MywtMC40MDMxMiAyLjQ3MjUsLTEuMDc1bDMzLjAwMjUsLTMzLjAwMjVsLTMzLjAwMjUsLTMzLjAwMjVjLTEuMzQzNzUsLTEuMzQzNzUgLTMuNDkzNzUsLTEuMzQzNzUgLTQuODM3NSwwYy0xLjM0Mzc1LDEuMzQzNzUgLTEuMzQzNzUsMy40OTM3NSAwLDQuODM3NWwyNC43MjUsMjQuNzI1eiI+PC9wYXRoPjwvZz48L2c+PC9nPjwvc3ZnPg==">
     </a>
     <br>
     <font color="white">
     Logout
   </font>
    </div>

  </div>
  <br>
  <br>
</body>
</html>
