<!DOCTYPE html>
<html>
<head>
  <title>Modify | Pharmacy</title>
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
      <center>Modify</center>
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
      intended

    </div>
    
    
    <form action="modify2.php" method="post">
    <div align="left">
    

      <font size=5>Modify Medicine :</font>
<br><br>
<div>

  <label>Medicine Name(as given earlier) :</label>
  <input type="Medicine" name="Medicine">
</div>
<br>

<button type="button"><b>Clear</b></button>
<button type="find" name="find"><b>Find</b></button>


    </div>
  </form>
  </div>
  <br>
  <div class="footer">
    <div align="left">
      <font color="white">
      For any support or assistance : e-mail : example@domain.com
    </font>
    </div>
    <div>
      <a href="home.php">
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