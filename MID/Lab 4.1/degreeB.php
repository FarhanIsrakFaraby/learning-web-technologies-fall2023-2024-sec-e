<html>
<body>
    <form method="post" action="" enctype="">
        <fieldset>
            <legend>Degree</legend>
                <input type="checkbox" name="degree" value="SSC"/> SSC 
                <input type="checkbox" name="degree" value="HSC"/> HSC 
                <input type="checkbox" name="degree" value="BSc"/> BSc <br>
        <input type="submit" name="" value="Submit" />     
    </fieldset>
    </form>
</body>
</html>
<?php
        $selectedDegree = $_POST["degree"];
        echo "$selectedDegree";
?>