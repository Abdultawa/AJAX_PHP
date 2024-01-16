<?php
//for the post method 
$existingNames = ['musa', 'Isa', 'mike', 'jane'];

if(isset($_POST['suggestion'])) {
    $name = $_POST['suggestion'];
    if(!empty($name)){
        echo"<b>Suggestions: </b>";
        foreach($existingNames as $existingName) {
            if(strpos($existingName, $name) !== false) {
                echo $existingName.', ';
    
            }
        }
    }
    

}