<!DOCTYPE html>
<html lang="en">
<head>
<title> <?php echo $_POST['name'] ?> </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body>
  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide"> THIS IS <?php echo $_POST['name'] ?> INFO </h2>

    <p class="sub-had"> I collect this info from <?php echo $_POST['name'] ?>  </p>

    <img class='ppic'src="https://mhasanm828.github.io/p.web/images/01723477809.1.png" alt="">
    <br>
    <br><br>
    
    <img class='psign'src="https://mhasanm828.github.io/p.web/images/01723477809.1.png" alt="">

    <br>


<section class=" w3-container basicinfo">
    <i>Parsonal Info </i>
    <h1>Name : <?php echo $_POST['name'] ?> </h1>
    <H2>Father Name: <?php echo $_POST['fname'] ?></H2>    
    <H2>Mother Name: <?php echo $_POST['mname'] ?></H2>   
    <H2>DOB :  <?php echo $_POST['dob'] ?> <SPAN> / ID  : <?php echo $_POST['id'] ?></SPAN></H2>
    <H2>Phone: <?php echo $_POST['phone'] ?></H2>
    <H2>Email: <?php echo $_POST['email'] ?> </H2>
</section>

<section class=" w3-container eduinfo">
    <i>Educational Info </i>
    <h1>SSC INFO </h1>
    <h3>Result: GPA <?php echo $_POST['result'] ?> </h3>
    <H2> Roll- Reg : <?php echo $_POST['roll'] ?> -- <?php echo $_POST['reg'] ?> </H2>  
    <H2>Board - Year : <?php echo $_POST['board'] ?> -- <?php echo $_POST['year'] ?> </H2>   
    -----------------------------
    <h1>HSC INFO </h1>
    <h3>Result: GPA <?php echo $_POST['hresult'] ?></h3>
    <H2> Roll- Reg : <?php echo $_POST['hroll'] ?> -- <?php echo $_POST['hreg'] ?> </H2>  
    <H2>Board - Year : <?php echo $_POST['hboard'] ?> - <?php echo $_POST['hyear'] ?> </H2>   
    
</section>


</body>
</html>
