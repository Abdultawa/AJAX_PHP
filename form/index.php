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
 <link rel="stylesheet" href="style.css">

    <script>
        $(document).ready(function(){
            $("form").submit(function(event){
                event.preventDefault();
                var name = $("#mail-name").val();
                var email = $("#mail-email").val();
                var gender = $("#mail-gender").val();
                var message = $("#mail-message").val();
                var submit = $("#mail-submit").val();
                $(".form-message").load("mail.php", {
                    name: name,
                    email: email,
                    gender: gender,
                    message: message,
                    submit: submit
                })
            });
        })
    </script>
</head>
<body>
    <form action="mail.php" method="post">
        <input id="mail-name" type="text" name="name" placeholder="Name"><br>
        <input id="mail-email" type="text" name="email" placeholder="Email"><br>
        <select name="gender" id="mail-gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br>
    <textarea name="message" id="mail-message" cols="20" rows="10" placeholder="message"></textarea><br>
    <button type="submit" name="submit" id="mail-submit">Send e-mail</button>
    <p class="form-message"></p>
    </form>
</body>
</html>