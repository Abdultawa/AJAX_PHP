<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#btn").click(function () {
            $("#text").load("data.php", function(){
                alert("Hello")
            });  
         });
    });
    </script>
</head>
<body>
    <div id="text">
        <p>My first text</p>
    </div>
    <button id="btn">Click Ajax</button>
</body>
</html>