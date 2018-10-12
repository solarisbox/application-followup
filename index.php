<?php

class Interview
{
	// 1. added static keyword
	public static $title = 'Interview test';
}

$lipsum = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus incidunt, quasi aliquid, quod officia commodi magni eum? Provident, sed necessitatibus perferendis nisi illum quos, incidunt sit tempora quasi, pariatur natus.';

$people = array(
	array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
	array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
	array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
	array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
	array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

// 2. removed index 'person', post will contain the person array data
$person = $_POST;


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Interview test</title>
	<style>
		/*Added comma*/
		body {font: normal 14px/1.5, sans-serif;}
	</style>
</head>
<body>

	<h1><?=Interview::$title;?></h1>

	<?php
	// Print 10 times
	// Changed i = 0 and i < 10
	for ($i=0; $i<10; $i++) {
		// changed + sign to . for php
		echo '<p>'.$lipsum.'</p>';
	}
	?>


	<hr>

	<!-- Changed method to POST -->
	<form method="post" action="<?=$_SERVER['REQUEST_URI'];?>">
		<p><label for="firstName">First name</label> <input type="text" name="person[first_name]" id="firstName"></p>
		<p><label for="lastName">Last name</label> <input type="text" name="person[last_name]" id="lastName"></p>
		<p><label for="email">Email</label> <input type="text" name="person[email]" id="email"></p>
		<p><input type="submit" value="Submit" /></p>
	</form>

	<!-- Added 'person' index to $person array -->
	<?php if ($person): ?>
		<p><strong>Person</strong> <?=$person['person']['first_name'];?>, <?=$person['person']['last_name'];?>, <?=$person['person']['email'];?></p>
	<?php endif; ?>


	<hr>


	<table>
		<thead>
			<tr>
				<th>First name</th>
				<th>Last name</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<?php  
				//Changed object notation to array notation
				foreach ($people as $person): ?>
				<tr>
					<td><?=$person['first_name'];?></td>
					<td><?=$person['last_name'];?></td>
					<td><?=$person['email'];?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>
</html>