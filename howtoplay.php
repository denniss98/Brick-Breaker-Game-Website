<?php
  // Imports the navigation bar and sets the page name
  include('common.php');
  outputHeader("How to Play");
  outputNav();
?>

<!-- Outputs the images and text for instructions of the game -->
<div class="container-fluid">
  <div class="col-md-12 howtoscreen">
    <div class="row">
      <div class="col-md-4 col-xs-6 howtoalignment">
        <img class="imager" src="../images/sample.png" alt="gamescreenshot"/>
      </div>
      <div class="col-md-8 col-xs-6 howtoalignment" id="howtotext">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-md-8 col-xs-6 howtoalignment" id="howtotext">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-md-4 col-xs-6 howtoalignment" id="howtopic">
        <img class="imager"src="../images/sample.png" alt="gamescreenshot"/>
      </div>
    </div>
      
    <div class="row align-items-center">
      <div class="col-md-4 col-xs-6 howtoalignment" id="howtopic">
        <img class="imager" src="../images/sample.png" alt="gamescreenshot"/>
      </div>
      <div class="col-md-8 col-xs-6 howtoalignment" id="howtotext">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>  
</div> 

<?php
	//Outputs the footer and closing tags
  outputFooter();
  outputClosing();
?>