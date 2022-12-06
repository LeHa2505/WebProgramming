<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            Enter product code (Use AB## format):
            <br>
            <input type="text" size="6" name="code"> 
            <br>
            Please enter description:
            <br>
            <input type="text" size="50" name="description">
        <button type="submit">SUBMIT</button>
        </form>
    </body>
</html>

<?php
    if (array_key_exists("code", $_POST)) {
        $products = array(
            'AB01'=>'25-Pound Sledgehammer',
            'AB02'=>'Extra Strong Nails',
            'AB03'=>'Super Adjustable Wrench',
            'AB04'=>'3-Speed Electric Screwdriver');
            $position = $_POST["description"];
            $code = $_POST["code"];
        
            if (preg_match("/boat|plane/", $position)) {
            print "Sorry, we do not sell boats or planes anymore";
            } 
            elseif(preg_match("/^AB/", $code)){
            if(isset($products[$code])){
            print "Code $code Description $products[$code]";
            }else
            print "Sorry, product code not found";
            }else
            print "Sorry, all our product codes start with AB";
    }
?>