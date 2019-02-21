<?php
    $invul;
    $input1 = $input2 = $input3 = $input4 = $input5 = $input6 = $input7 = $input8 = "";
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $input1 = test_input($_GET["input1"]);
        $input2 = test_input($_GET["input2"]);
        $input3 = test_input($_GET["input3"]);
        $input4 = test_input($_GET["input4"]);
        $input5 = test_input($_GET["input5"]);
        $input6 = test_input($_GET["input6"]);
        $input7 = test_input($_GET["input7"]);
        $input8 = test_input($_GET["input8"]);
    }
    
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    if (!isset($input1) || trim($input1) == '' && !isset($input2) || trim($input2) == '' && !isset($input3) || trim($input3) == '' && !isset($input4) || trim($input4) == '' && !isset($input5) || trim($input5) == '' && !isset($input6) || trim($input6) == '' && !isset($input7) || trim($input7) == '' && !isset($input8) || trim($input8) == '')
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
</head>
<body>  
    <?php include 'nav.php'; ?>
    <?php
    
        if($invul)
        {
    ?>
    <div id="main">
        <h2>Er heerst paniek...</h2>

        <div id="vraag">
            <span>Welk dier zou je nooit als huisdier willen hebben?</span>
            <span>Wie us de belangrijkste persoon in je leven?</span>
            <span>In welk land zou je graag willen wonen?</span>
            <span>Wat doe je als je je verveelt?</span>
            <span>Met welk speel goed speelde je als kind het meest?</span>
            <span>Bij welke doecent spijbel je het liefst?</span>
            <span>Als je $100.000,- had, wat zou je kopen?</span>
            <span>Wat is je favoriete bezigheid?</span>
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
                <input type="text" name="input8">
                <input id="button" type="submit">
            </form>
        </div>
    </div>
    <footer><span>Gemaakt door Wouter v d Waal 2019</span></footer>
        <?php } 
        else{ ?>

        
            <div id="main">
                <h2>Er heerst paniek...</h2>
                <p>Er heerst paniek in het koningrijk <?php echo($input3) ?>, Koning <?php echo($input6) ?>
                is ten einde raad en als koning <?php echo($input6) ?> ten einde raad is, dan roept hij zen ten-enide raadsheer <?php echo($input2) ?>
                <br>
                <br>
                "<?php echo($input2) ?>! Het is een ramp! Het is een schande!"
                <br>
                <br>
                "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"
                <br>
                <br>
                "Mijn <?php echo($input1) ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo($input5) ?> voor hem gekocht!"
                <br>
                <br>
                "Majesteit, uw <?php echo($input1) ?> komt vast vanzelf weer terug?"
                <br>
                <br>
                "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo($input8) ?> leren?"
                <br>
                <br>
                "Maar Sire, daar kunt u toch uw <?php echo($input7) ?> voor gebruiken."
                <br>
                <br>
                "<?php echo($input2) ?>, Je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."
                <br>
                <br>
                "<?php echo($input4) ?>, Sire."
                
                
                </p>
                


                
            
            </div>
            <footer><span>Gemaakt door Wouter v d Waal 2019</span></footer>
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
        margin-top: 8px;
    }

    #vraag
    {
        float: left;
    }

    #vraag span
    {
        display: block;
        width: 300px;
        margin-bottom: 19px;
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
</style>
</html>