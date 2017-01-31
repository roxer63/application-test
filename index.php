<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>PHP test</title>
	<style>
        table, th, td {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            padding: 4px;
            width: auto;
            border-collapse: collapse;
            border-spacing: 0;
            border: solid 1px black;
        }

        button {
            width: 150px;
        }
    </style>
	<?php

	$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
	$pmax=count($people);

    ?>

</head>
<body>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<?php

		for ($x = 0; $x <$pmax; $x++) {
			$msg=$people[$x]['first_name'] ." ".$people[$x]['last_name'].": ".$people[$x]['email'];

        ?>
		<tr>
			<td>
				<?php echo $people[$x]['id'];?>
			</td>
			<td>
				<?php echo $people[$x]['first_name'];?>
			</td>
			<td>
				<?php echo $people[$x]['last_name'];?>
			</td>
			<td>
				<?php echo $people[$x]['email'];?>
			</td>
			<td width="50">
				<input type="button" value="Select" onclick="javascript:alert('<?php echo $msg;?>')" />

			</td>
		</tr>
		<?php
		}
        ?>
	</table>
</body>
</html>

