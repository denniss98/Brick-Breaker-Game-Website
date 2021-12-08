<?php
  // Imports the navigation bar and sets the page name
  include('common.php');
  outputHeader("Highscores");
  outputNav();
?>

<!-- Import javascript for highscores-->
<script src="js/highscores.js"></script>

<!-- Outputs the High scores table -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div id="high-scores">
				<table class="table table-hover">
					<tr>
						<th scope="position">#</th>
						<th scope="username">Username</th>
						<th scope="score">Score</th>
					</tr>
					<tr>
						<th>1</th>
						<td>Username</td>
						<td>Score</td>
					</tr>
					<tr>
						<th>2</th>
						<td>Username</td>
						<td>Score</td>
					</tr>
					<tr>
						<th>3</th>
						<td>Username</td>
						<td>Score</td>
					</tr>
					<tr>
						<th>4</th>
						<td>Username</td>
						<td>Score</td>
					</tr>
					<tr>
						<th>5</th>
						<td>Username</td>
						<td>Score</td>
					</tr>
					<tr>
						<th>6</th>
						<td>Username</td>
						<td>Score</td>
					</tr>
					<tr>
						<th>7</th>
						<td>Username</td>
						<td>Score</td>
					</tr>
					<tr>
						<th>8</th>
						<td>Username</td>
						<td>Score</td>
					</tr>
					<tr>
						<th>9</th>
						<td>Username</td>
						<td>Score</td>
					</tr>
					<tr>
						<th>10</th>
						<td>Username</td>
						<td>Score</td>
					</tr>
					<tr>
						<th>11</th>
						<td>Username</td>
						<td>Score</td>
					</tr>
					<tr>
						<th>12</th>
						<td>Username</td>
						<td>Score</td>
					</tr>
					<tr>
						<th>13</th>
						<td>Username</td>
						<td>Score</td>
					</tr>
					<tr>
						<th>14</th>
						<td>Username</td>
						<td>Score</td>
					</tr>
					<tr>
						<th>15</th>
						<td>Username</td>
						<td>Score</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<?php
	//Outputs the footer and closing tags
	outputFooter();
	outputClosing();
?>