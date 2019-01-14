<?php
// Written by Brian Bouchard
$people = array(
    array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
    array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
    array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
    array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
    array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<head>
</head>
<body>
<?php
if(is_array($people) && count($people) > 0):
    ?>
    <table>
        <thead><th>First Name</th><th>Last Name</th><th>Email</th><th>Actions</th></thead>
        <?php
        foreach ($people as $person)
        {
            echo "<tr><td>" . $person['first_name'] . "</td><td>" . $person['last_name'] . "</td><td>" . $person['email'] . "</td>";
            $action_string = $person['first_name'] . ' ' . $person['last_name'] . ', ' . $person['email'];
            echo '<td><input type="button" onclick="alert(\'' . $action_string . '\');return false;" value="Show Details" /></td></tr>';
        }
        ?>
    </table>
<?php else: ?>
    <p>There are no people to show.</p>
<?php endif; ?>
</body>