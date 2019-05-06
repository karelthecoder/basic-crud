<?php 
    require_once('controllers/overview.php');
    require_once('session.php');
    echo $_SESSION['level'];
?>
<?php if($_SESSION['level'] == 'moderator' || $_SESSION['level'] == 'admin') {
    echo "<a href='template/create.php'>Create user</a>";
}
?>

<a href="template/create_group.php">Create a Group</a>
<h2>Users</h2>
<table style="width:450px;">
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
<th>Group</th>
<?php if($_SESSION['level'] == 'moderator' || $_SESSION['level'] == 'admin') {
    echo '<th>Edit</th>';
}
?>
<?php if($_SESSION['level'] == 'admin') {
    echo '<th>Delete</th>';
}
?>
<?php 
    foreach($result as $row) {
        echo "<tr>";
            echo "<td><a href='template/details.php?id=".$row['id']."'>" .$row['id']. "</a></td>";
            echo "<td>" .$row['first_name']. "</td>";
            echo "<td>" .$row['last_name']. "</td>";
            echo "<td>" .$row['username']. "</td>";
            echo "<td>" .$row['group_id']. "</td>";

        if($_SESSION['level'] == 'moderator' || $_SESSION['level'] == 'admin') {
            echo "<td><a href='template/edit.php?id=".$row['id']."'>Edit</a></td>";
        }
        if($_SESSION['level'] == 'admin') {
            echo "<td><a href='template/delete.php?id=".$row['id']."'>Delete</a></td>";
        }
        echo "</tr>";
    }
?>
</table>

<h2>Groups</h2>
<table style="width:450px;">
<th>ID</th>
<th>Name</th>
<th>Enddate</th>
<th>Edit</th>

<?php if($_SESSION['level'] == 'admin') {
    echo '<th>Delete</th>';
}
?>
<?php 
    foreach($result_groups as $row) {
        echo "<tr>";
            echo "<td><a href='template/details_group.php?id=".$row['id']."'>" .$row['id']. "</a></td>";
            echo "<td>" .$row['name']. "</td>";
            echo "<td>" .$row['enddate']. "</td>";
            echo "<td><a href='template/edit.php?id=".$row['id']."'>Edit</a></td>";
        if($_SESSION['level'] == 'admin') {
            echo "<td><a href='template/delete.php?id=".$row['id']."'>Delete</a></td>";
        }
        echo "</tr>";
    }
?>
</table>

<a href="controllers/logout.php">Logout</a>