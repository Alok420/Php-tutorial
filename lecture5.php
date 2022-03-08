<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container" id="content">
        <div class="row">
            <form method="GET" action="lecture5.php">
                <input type="text" name="num">
                <button type="submit" name="sub"> Submit</button>
            </form>
        </div>
    </div>
</body>

</html>
<?php
// logical operator
if (isset($_GET["sub"])) {
    $percent = $_GET["num"];
    if ($percent >= 45 && $percent < 60) {
        echo "You have got second division";
    } else if ($percent < 45 && $percent >= 33) {
        echo "You have got third division";
    } else if ($percent >= 60 && $percent < 80) {
        echo "You have got first division";
    } else if ($percent >= 80 && $percent <= 100) {
        echo "You have got A Grade";
    } else if ($percent < 33 && $percent >= 0) {
        echo "You are fail.";
    } else {
        echo "Invalid number";
    }
?>
    <br>
    <?php
    if ($percent == 50 || $percent == 60) {
        echo "O Wow got cycle by my dad";
    } else if ($percent == 70 || $percent == 80) {
        echo "O Wow got mobile by my mom";
    }
    ?>
    <br>
<?php
    if ($percent != 0 && $percent < 33) {
        echo "O Wow got dande by my brother";
    }
}


?>