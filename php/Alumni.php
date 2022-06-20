<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alumni</title>
    <link rel="stylesheet" href="../styles/Alumni.css" />
  </head>
  <body>
  <!-- Connect to the database -->
    <?php 
    include('connect.php');

    session_start();
  // require user to login if logged out
    if(!isset($_SESSION['uname'])){
        header('location:http://localhost/Web-work/login.html');
    }
    ?>
    <h1>Views Sec. School Alumni.</h1>

    <p id="p">Are you an alumni? <button type="button" id="alumniBtn">Join Here</button></p>   
    <div class="app__alumni_form" id="alumniForm">
      <form action="./Alum.php" method="post">

        
        <br><input type="text" placeholder="Alumnus name" name="alname" id="alname"/>

        <p>Year of enrollment:</p>
        <select name="enrol_year" id="enrolYear">
        </select>

        <p>Year of graduation:</p>
        <select name="grad_year" id="gradYear"></select>

        <p>Headmaster at graduation:</p>
        <select name="headmasters" id="headmasters"></select>

        <p>Famous Teacher at graduation:</p>
        <select name="teachers" id="teachers"></select>

        <p>Results:</p>
        &ensp;&ensp;&ensp;<select name="results" id="results"></select>

        <input type="text" placeholder="Occupation" name="occupation">

        <input type="email" placeholder="Email" required name="email">

        <input type="text" name="address" placeholder="Address"/><br><br>

        <input type="tel" placeholder="Mobile number" name="tel" required><br><br>

        <input type="submit" value="Join">
      </form>
    </div>
    <div class="alumni_list">
      <table border="1">
        <tr><br>
          <th>Alumnus Name</th>
          <th>Year of Enrollemnt</th>
          <th>Year of Graduation</th>
          <th>Headmaster</th>
          <th>Famous Teacher</th>
          <th>Results</th>
          <th>Occupation</th>
          <th>Address</th>
          <th>Email</th>
          <th>Mobile Number</th>
          
        </tr>
        <?php
          $query = 'SELECT * FROM alumni';
          $results = mysqli_query($connection,$query);

          if($results){ 
            while($data = mysqli_fetch_assoc($results)){
        
       
              ?>
              <tr>
                <td><?php echo $data['name'];?></td>
                <td><?php echo $data['enrol_year'];?></td>
                <td><?php echo $data['grad_year'];?></td>
                <td><?php echo $data['headmaster'];?></td>
                <td><?php echo $data['famous_teacher'];?></td>
                <td><?php echo $data['results'];?></td>
                <td><?php echo $data['occupation'];?></td>
                <td><?php echo $data['address'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['mob_number'];?></td>
              </tr>

            <?php 
          }
          }else{
            echo "No alumni";
          }
        ?>
      </table>
      <br><button class="logout"><a href="logout.php">Logout</a></button>
    </div>
    <script src="Alumni.js"></script>
  </body>
</html>
