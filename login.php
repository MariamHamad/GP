<html>
<body>
<?php include('header.html');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthcare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)  {
  die("Connection failed: " . mysqli_connect_error());
}

Echo "<html>";

//To get encrypted password from database by same email becz email is unique so no email will be repeated
$queryH= "SELECT password FROM registration WHERE (email='".$_POST['emailLogin']."');";
$resultH=mysqli_query($conn,$queryH);
$rowH=mysqli_fetch_assoc($resultH);
$passwordTable =  $rowH['password']; // password from table with same email
	
$plaintext_password = $_POST['passwordLogin'];   //password from input
              

$query= "SELECT firstName FROM registration WHERE (email='".$_POST['emailLogin']."');";  //to welcome the name after successful login

$result= $conn->query($query);




//$numRows= mysqli_num_rows($result);

if($plaintext_password == $passwordTable)
{
	$result2=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result2);
	
	
	echo "Welcome " . $row["firstName"].". It's our pleasure to guide you!"; "<br>" ."<br>"."<br>" ."<br>"."<br>" ."<br>";

}

else
{    
echo '<script language="javascript">';
echo 'alert("NO SUCH USER! Please enter correct email or password.");';
echo 'window.location.href="index.php";';   //goes back to homepage
echo '</script>';

}

// If upload button is clicked ...
  if (isset($_POST['upload'])) {
	  echo "MARIAM";
  
  $image = $_FILES['file']['name'];
              $imgContent = addslashes(file_get_contents($image));
    
          
  
        // Get all the submitted data from the form
        $sql = "INSERT INTO photos (uploadedPhoto) WHERE (email='".$_POST['emailLogin']."') VALUES ('$imgContent')";
  
        // Execute query
        mysqli_query($db, $sql);
		
		
  }
  
  $query2= "SELECT * FROM photos";

$result2= $conn->query($query2);

  
      

$conn->close();


include('footer.html'); ?> 


<section class="upload">
        <div class="container">
            <div class="upload-container">
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file">
                    <button type="submit" name="upload">UPLOAD FILE</button>
                </form>
            </div>
        </div>
    </section>
	
</body>
 </html>
