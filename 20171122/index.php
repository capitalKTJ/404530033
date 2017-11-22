<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        height:<input type="text" name="height">m<br>
        weight:<input type="text" name="weight">kg<br>
        <input type="file" name="file" id="file" /><br>
        <input type="submit" name="submit" value="提交" />
    </form>
</body>
</html>
<?php
    echo "height=".$_POST["height"]."<br>";
    echo "weight=".$_POST["weight"]."<br>";
    function BMI(){
        $BMI=$_POST["weight"]/($_POST["height"]*$_POST["height"]);
        return $BMI;
    }
    echo "BMI:".BMI()."<br>";
    $filename=$_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$filename);
    echo'<img src="upload/'.$filename.'">';
?>