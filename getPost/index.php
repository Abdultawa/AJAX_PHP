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
            $(document).ready(function(){
                //get method
                // $("button").click(function(){
                //     $.get("text.php", function(data, status){
                //         $("#text").html(data);
                //         alert(status);
                //     })
                // });
                    //post method
                    $("input").keyup(function(){
                        var name = $("input").val();
                        $.post("suggestions.php", {
                            suggestion: name
                        }, function(data, status){
                            $("#text").html(data);
                        });
                    })
            })
        </script>
</head>
<body>
    <input type="text" name="name">
    
    <!-- <button>click to get data</button> -->
    <p id="text"></p>
</body>
</html>