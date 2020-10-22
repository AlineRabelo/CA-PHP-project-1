<?php include ('include/header.php');?>

<body class="w3-black">

<header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Get in Touch</span></h1>
  </header>


<div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Dublin, IR</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +353 15 151515</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: aline@aline.com</p>
    </div><br>
    <h4>Let's get in touch. Let me know which Country you are.</h4>
    

    <form action="welcome.php" method="get" target="welcome.php">
     <!-- <p><input class="w3-input w3-padding-16" type="text" placeholder="Country" name="Country"></p> -->

      <p><select class="w3-input w3-padding-16" type="select" placeholder="Country" name="Country"></p>

                            <option value="-">-</option>
                            <optgroup label="European Countries">
                              <option value="Italy">Italy</option>
                              <option value="Luxembourg">Luxembourg</option>
                              <option value="Belgium">Belgium</option>
                              <option value="Denmark">Denmark</option>
                              <option value="Finland">Finland</option>
                              <option value="France">France</option>
                              <option value="Slovakia">Slovakia</option>
                              <option value="Slovenia">Slovenia</option>
                              <option value="Germany">Germany</option>
                              <option value="Greece">Greece</option>
                              <option value="Ireland">Ireland</option>
                              <option value="Netherlands">Netherlands</option>
                              <option value="Portugal">Portugal</option>
                              <option value="Spain">Spain</option>
                              <option value="Sweden">Sweden</option>
                              <option value="United Kingdom">United Kingdom</option>
                              <option value="Cyprus">Cyprus</option>
                              <option value="Lithuania">Lithuania</option>
                              <option value="Czech Republic">Czech Republic</option>
                              <option value="Estonia">Estonia</option>
                              <option value="Hungary">Hungary</option>
                              <option value="Latvia">Latvia</option>
                              <option value="Malta">Malta</option>
                              <option value="Austria">Austria</option>
                              <option value="Poland">Poland</option>
                            </optgroup>

                            <optgroup label="No European Countries">
                              <option value="Brazil">Brazil</option>
                              <option value="USA">USA</option>
                              <option value="Mexico">Mexico</option>
                              <option value="Argentina">Argentina</option>
                              <option value="China">China</option>
                              <option value="India">India</option>
                            </optgroup>
        </select>
      <p> 
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SELECTED
        </button>
      </p>
    </form>
  </div>

  </body>

  <?php require ('include/footer.php');?>