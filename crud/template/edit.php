<?php
    require_once('../config.php');

    $id = $_GET['id'];

    $query = "SELECT * FROM User WHERE id = $id";

    $result = mysqli_query($conn, $query);

    if($result) {
        foreach($result as $row) {
            $id = $row['id'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $user_name = $row['username'];
            $level = $row['level'];
        }
    }
    
?>

<h2>User met ID:<?php echo $id ?></h2>
<form method='post' action='../controllers/edit.php'>
    <input type=hidden name='id' value='<?php echo($id) ?>'>
    <input type=text name='user[first_name]' value='<?php echo($first_name)?>'>
    <input type=text name='user[last_name]' value='<?php echo($last_name)?>'>
    <input type=text name='user[user_name]' value='<?php echo($user_name)?>'>
    Moderator: <input type=radio name='user[level]' value='moderator' <?php if($level == 'moderator') { echo 'checked'; }?>>
    User: <input type=radio name='user[level]' value='user'  <?php if($level == 'user') { echo 'checked'; }?>>
    <p>
        <input type='submit' name='send' value='Send'>
    </p>
</form>