<?php
    $invul;
    $input1 = $input2 = $input3 = $input4 = $input5 = $input6 = $input7 = "";
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $input1 = test_input($_GET["input1"]);
        $input2 = test_input($_GET["input2"]);
        $input3 = test_input($_GET["input3"]);
        $input4 = test_input($_GET["input4"]);
        $input5 = test_input($_GET["input5"]);
        $input6 = test_input($_GET["input6"]);
        $input7 = test_input($_GET["input7"]);
    }
    
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    if (!isset($input1) || trim($input1) == '' && !isset($input2) || trim($input2) == '' && !isset($input3) || trim($input3) == '' && !isset($input4) || trim($input4) == '' && !isset($input5) || trim($input5) == '' && !isset($input6) || trim($input6) == '' && !isset($input7) || trim($input7) == '')
    {
        $invul = true;
    }

    else
    {
        $invul = false;
    }
    

?>

<!DOCTYPE HTML>  
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>  
    <?php include 'nav.php'; ?>
    <?php
    
        if($invul)
        {
    ?>
    <div id="main">
        <h2>Onkunde</h2>

        <div id="vraag">
            <span>Wat zou jij graag willen kunnen?</span>
            <span>Met welke persoon kun je goed opschieten?</span>
            <span>Wat is je favoriete getal</span>
            <span>Wat heb je altijd bij je als je op vakantie gaat?</span>
            <span>Wat is je beste persoonlijke eigenschap?</span>
            <span>Wat is je slechtste persoonlijke eigenschap?</span>
            <span>Wat is het ergste dat je kan overkomen?</span>
        </div>

        <div id="antwood">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" methode="get">
                <input type="text" name="input1">
                <input type="text" name="input2">
                <input type="text" name="input3">
                <input type="text" name="input4">
                <input type="text" name="input5">
                <input type="text" name="input6">
                <input type="text" name="input7">
                <input id="button" type="submit">
            </form>
        </div>
    </div>
    <footer><span>Gemaakt door Wouter v d Waal 2019</span></footer>
        <?php } 
        else{ ?>
            <div id="main">
                <h2>Onkunde</h2>
                <p>
                Er zijn niet veel mensen die niet kunnen <?php echo($input1) ?>. Neem nou <?php echo($input2) ?>.
                Zelfs met de hulp van een <?php echo($input4) ?> of zelf <?php echo($input3) ?> kan <?php echo($input2) ?>
                niet <?php echo($input1) ?>. Dat heeft niet te maken met een gebrek aan <?php echo($input5) ?>,
                maar met een te veel aan <?php echo($input6) ?>. Te veel <?php echo($input6) ?> leidt tot <?php echo($input7) ?> 
                en dat is niet goed als je wilt <?php echo($input1) ?>. Helaas voor <?php echo($input2) ?>
                </p>
            </div>
            <footer><span>Gemaakt door Wouter v d Waal 2019</span></footer>
            <style>
            
                #main
                {
                    height: 200px !important;
                }
            </style>
        <?php } ?>
    
</body>
<style>
    #main
    {
        width: 800px;
        margin:0 auto;
        display: table;
        background-color: white;
        height: 500px;
    }

    h2
    {
        position: absolute;
        margin-top: 10px;
        margin-left: 20px;

    }

    #main div
    {
        position: relative;
        width: 400px;
        height: 450px;
        top: 50px;
    }

    #antwood
    {
        float: right;
    }

    #antwood input
    {
        display: block;
        width: 300px;
        margin-bottom: 20px;
        margin-top: 4px;
    }

    #vraag
    {
        float: left;
    }

    #vraag span
    {
        display: block;
        width: 300px;
        margin-bottom: 15px;
        font-size: 16px;
        margin-left: 20px;
    }

    #button
    {
        width: 100px !important;
    }

    #main p
    {
        margin-left: 20px;
        margin-top: 50px;
    }

    footer
    {
        width: 800px;
        margin: 0 auto;
        display: table;
        height: 50px;
        background-color: lightgray;
        text-align: center;
    }

    footer span
    {
        position: relative;
        top: 13px;
        color: white;
    }

    #box
    {
        height: 176px;
    }
    ul li
    {
        color: black;
    }
</style>
</html>