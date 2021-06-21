<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Document Submit</title>
    <style></style>
</head>
<body>
    <h3>Submitted successfully!</h3>
    <!-- Basic information container -->
    <h4>Basic Informations:</h4>
    <?php
    echo "First name: " .$_POST["Firstname"];
    echo"<br>";
    echo "Last name: ".$_POST["Lastname"];
    echo"<br>";
    if(isset($_POST['Gender'])){
        $genType= $_POST['Gender'];
        echo "Gender: ".$genType;
    }
    echo "<br>";
    echo "DOB: ".$_POST["DOB"];
    echo "<br>";
    if(isset($_POST['submit'])){
        $religionType= $_POST['Religion'];
        echo "Religion: ".$religionType;
    }
    ?>
    <!-- Contact Information container -->
    <h4>Contact Informations:</h4>
    <?php
    echo "Present Address: ".$_POST["Presentaddress"];
    echo "<br>"."Parmanent Address: ".$_POST["Permanentaddress"];
    echo "<br>"."Phone: ".$_POST["Phone"];
    echo "<br>"."Email: ".$_POST["Email"];
    echo "<br>"."Personal Website: ".$_POST["Link"];
    echo "<br>"."Username : ".$_POST["uname"];
    echo "<br>"."Password: ".$_POST["pass"];
    ?>
    <br>
    
</body>
</html>