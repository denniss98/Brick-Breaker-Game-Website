<?php
  // Imports the navigation bar and sets the page name
  include('common.php');
  outputHeader("Play");
  outputNav();
?>

<!-- Import javascript for game -->
<script src="https://cdn.jsdelivr.net/npm/phaser@3.15.1/dist/phaser-arcade-physics.min.js"></script>
<script src="js/game.js"></script>

<?php
	//Outputs the footer and closing tags
	outputFooter();
	outputClosing();
?>