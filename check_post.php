<php
   $name =$_POST['username']
   $email =$_POST['email']
   $password = $_POST['password']
   $messgae = $_POST['message']

   if(trim($name) == "")
    echo "Error: no username";
   else if(strlen(trim($name)) <= 1)
    echo "Error: no length for username";
   else if(trim($email) == "" || trim($password) == "" || trim($message) == "")
    echo "Error: not all data presents";
   else {
    $_POST['password'] = md5($password);
    echo "<h1>All data</h1>";
    foreach ($_POST as $hey => $value)
        echo "<p>Key: $hey, value: $value</p>";

    header('Location: about.php');
    exit;
   }