<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="echoall.php">
    <title>Document</title>
<style>
    .margin {
       margin-top: 100px;
       margin-left: 100px;
       margin-right: 100px;
       margin-bottom: 100px;
    }   
    label{
      text-decoration-color: white;
      font-weight: bold;
    }    
    form{
      display: inline-block;
    }
    .card {
      background-color: lightblue;
    }
    .form-group {
       text-decoration-color: blue;
    }

    body{
       background-image: url(""); 
       background-color: lightgreen;
    }
    h1 {
      text-align: center;
      font-family: verdana;
      text-shadow: 2px 2px black;
    }
    footer {
      margin-top: 5px;
      text-align: center;
    }
</style>
</head>
<!-- Fields:			Input type:
1. First Name			  text
2. Last Name			  text
3. Middle Name		  text
4. Address			    text
5. Date of Birth		date
6. Place of Birth		text
7. Gender			      radio
8. Guardian		    	text
9. Contact Number		text	
10. Civil Status		text
11. Year Level			select
12. Course			    select
13. School Year			text
14. Email			      email -->
<body>
<div>
<div class="container-fluid">

<div class="row">
<div class="col-md"></div>
<div class="col-md">
<div class="card">
<div class="card-header .margin .color-header">
    <div class="form-group">
    <h1>Register Form</h1>
    </div>
</div>
<form action="echoall.php" method="post">
<div class="form-group ">
  <div class="form-group col-md">
      <label for="inputEmail4">First Name:</label>
      <input type="text" class="form-control" name="firstname" placeholder="e.g Pedro" >
  </div>
  <div class="form-group col-md">
      <label for="inputPassword4">Last Name:</label>
      <input type="text" class="form-control" name="lastname" placeholder="e.g Aldeza" required>
  </div>
  
  <div class="form-group col-md">
    <label for="inputAddress">Middle Name:</label>
    <input type="text" class="form-control" name="middlename" placeholder="e.g Tunacao" required>
  </div>

  <div class="form-group col-md">
    <label for="inputAddress2">Address: </label>
    <input type="text" class="form-control" name="address" placeholder="e.g Zone 8, Barra Opol Misamis Oriental" required>
  </div>

  <div class="form-group col-md">
    <label for="inputAddress">Date of Birth:</label>
    <input type="date" class="form-control" name="birthday" placeholder="e.g Cagayan de Oro City, Philippines" required>
  </div>

  <div class="form-group col-md">
    <label for="inputAddress">Place of Birth:</label>
    <input type="text" class="form-control" name="POB" placeholder="e.g Cagayan de Oro City, Philippines" required>
  </div>

  <div class="form-group col-md">
    <label for="inputgender">Gender: </label>
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="other"> Other<br>
  </div>

  <div class="form-group col-md">
    <label for="inputAddress">Guardian: </label>
    <input type="text" class="form-control" name="guardian" placeholder="e.g Mary Aldeza" required>
  </div>

  <div class="form-group col-md">
    <label for="inputAddress">Phone Number:</label>
    <input type="text" class="form-control" name="phone_number" placeholder="e.g 09363961422" required>
  </div>

  <div class="form-group col-md">
    <label for="inputAddress">Civil Status:</label>
    <input type="text" class="form-control" name="civil_status" placeholder="e.g Single/Married/Complicated" required>
  </div>

  <div class="form-group col-md">
    <label for="inputyear">Year Level:</label>
    <select class="form-control col-md" name="year_level" id="" placeholder="Course" required>
    <option value="choose1">Choose...</option>
    <option value="1st">1st Year</option>
    <option value="2nd">2nd Year</option>
    <option value="3rd">3rd Year</option>
    <option value="4th">4th Year</option>
    <option value="5th">5th Year</option>
    </select>
  </div>

  <div class="form-group col-md">
    <label for="inputcourse">Course:</label>
    <select class="form-control col-md" name="course" id="" placeholder="Course" required>
    <option value="choose2">Choose...</option>
    <option value="1stYear">BS-IT</option>
    <option value="2ndYear">BS-CPE</option>
    <option value="3rdYear">BS-TCM</option>
    <option value="4thYear">BS-ECE</option>
    <option value="5thYear">BS-CE</option>
    </select>
  </div>
  
  <div class="form-group col-md">
      <label for="inputEmail4">School Year:</label>
      <input type="text" class="form-control" name="school_year" placeholder="e.g 2020 - 2021" required>
  </div>
  <div class="form-group col-md">
      <label for="inputEmail4">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="e.g aldeza.pedro@gmail.com" required>
  </div>
    <div class="form-group col-md">
    <a href="echoall.php"></a><button type="submit" class="btn btn-primary">Submit form</button>
    </div>
  
</form>
</div>
</div>
</div>
<div class="col-md"></div>
</div>
<footer><h4>Copyright &copy; 2020</h4></footer>
</div>
</body>

</html>
