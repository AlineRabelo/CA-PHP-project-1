<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="include/style.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>


</head>
<body class="w3-black">
    <h1 class="w3-larger w3-content w3-center">Welcome to <?php echo $_GET["Country"] ?></h1> </br>
    
    <?php 
    
        $country = array ("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
        "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", 
        "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
        "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", 
        "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", 
        "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", 
        "Poland"=>"Warsaw");

        $foo = false;

        foreach($country as $position => $value){      

        if($_GET["Country"] == $position){
           echo "<h3 class='w3-larger w3-content w3-center'> The Capital is " .  $value . "</h3>";
           $foo = true;
        break;
           
        }

        } 
       
        if($foo == false){
            echo "<h3 class='w3-larger w3-content w3-center'> But" . "</br>" . "This country does not belong to Europe </h3>";
        }
    

    ?>

        <img src="images/logo.jpg" alt="cat" class="w3-image w3-display-bottommiddle w3-container" margin="0 auto" width="600" height="400" >

</body>
</html>