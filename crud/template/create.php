<?php 
    require_once('../config.php');
    $query = "SELECT * FROM groups";
    $result = mysqli_query($conn, $query);
?>


<form method='post' action='../controllers/create.php'>
    <input type=text name='user[first_name]' placeholder='firstname'><br>
    <input type=text name='user[last_name]' placeholder='lastname'><br>
    <input type=text name='user[user_name]' placeholder='username'><br>
    <input type=text name='user[password]' placeholder='password'><br>
    Moderator: <input type=radio name='user[level]' value='moderator'><br>
    User: <input type=radio name='user[level]' value='user'><br>
    <select name='user[group]'>
        <? 
            foreach($result as $group) {
                echo "<option value='$group[id]'>$group[name]</option>";
            }
        ?>
    </select>
    <p>
        <input type='submit' name='send' value='Send'>
    </p>
</form>