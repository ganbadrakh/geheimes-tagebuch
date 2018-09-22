<?php

session_start();

$diaryContent = "";

if(array_key_exists("id",$_COOKIE) && $_COOKIE['id']) {

    $_SESSION['id'] = $_COOKIE['id'];
}

if(array_key_exists("id", $_SESSION) && $_SESSION['id']) {

    include("connection.php");

    $query = "SELECT diary FROM users WHERE id=".mysqli_real_escape_string($link,$_SESSION['id'])." LIMIT 1";

    $row = mysqli_fetch_array(mysqli_query($link, $query));

    $diaryContent = $row['diary'];

} else {
    
    header("Location: index.php");
}
    include("header.php");
?>

<nav>
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Geheimes Tagebuch</a>
            <a href='index.php?logout=1'><button class="btn btn-success" type="submit">Ausloggen</button></a>
        </div>
    
    </div><!-- /.container-fluid -->

</nav>

<div class="container-fluid">

<textarea id="diary" class="form-control" row="10">
    <?php echo $diaryContent; ?>
</textarea>

</div>

<?php
    include("footer.php");
?>