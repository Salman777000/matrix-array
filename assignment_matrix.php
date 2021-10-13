<!Doctype html>
<head>
    <title> Matrix Calculator 
    </title>
</head>
<?php
    $result="" ;
    if(isset($_POST["operator"])){
        $first =$_POST["first_num"];
        $second=$_POST["second_num"];
        $third =$_POST['third_num'];
        $fourth =$_POST["fourth_num"];
        $fifth =$_POST["fifth_num"];
        $sixth =$_POST["six_num"];
        $seventh =$_POST["seven_num"];
        $eight =$_POST["eight_num"];
        $operator =$_POST["operator"];
        $matrix_1 = array(
                    array ($first,$second),
                    array($third,$fourth)
        );
        $matrix_2 = array(
                    array($fifth,$sixth),
                    array($seventh,$eight)

        );
    if(is_numeric($matrix_1)&& is_numeric($matrix_2)){

        if($operator=="Add"){
            $result = $matrix_1 + $matrix_2;

        }
      }
    }
?>
<body>
    <h2> Calculator </h2>

    <form method = "POST">
    <label>
      <p></p> 1st number 
</label>    
    <input type ="number"name="first_num">
    <label>
       <p></p> 2nd number 
</label>
        <input type ="number"name="second_num">
        <label>
            <p></p> 3rd number
</label>
        <input type ="number"name="third_num">
        <label>
            <p></p>4th number
</label>
        <input type ="number"name="fourth_num">
        <label>
            <p></p>5th number
</label>
        <input type ="number"name="fifth_num">
        <label>
            <p></p> 6th number
</label>
        <input type ="number"name="six_num">
        <label>
            <p></p> 7th number
</label>
        <input type ="number"name="seven_num">
        <label>
            <p></p> 8th number
</label>
        <input type ="number"name="eight_num">
        <label>
            <p></p> result
</label>
        <input name="result" value="<?php echo $result;?>">
        <input type ="submit" value="Add"name ="operator">
</form>
</body>