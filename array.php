<?php include ('include/header.php');?>


<body class="w3-black">

<header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">PHP Array</span></h1>
  </header>


<!-- Grid Country -->
    <div class="w3-row-padding" style="margin:-2.5px 100px -2.5px 450px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32 w3-center">Country | Capital</li>

          
          <?php 
          
            $country = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
            "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", 
            "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
            "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", 
            "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", 
            "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", 
            "Poland"=>"Warsaw"); 

              foreach($country as $position => $value){
              echo $position . " | " . $value . "</br>" . "</br>";
            }

          ?>
            
        </ul>
      </div>
  </div>




</body>

<?php require ('include/footer.php');?>
