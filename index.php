<?php

if (isset($_POST['convert'])) {
    $code = $_POST['code'];

    $convertedCode = htmlentities($code);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>HTML Minifier</title>
</head>
<body>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6 bg-white border shadow p-5 rounded mx-auto">
                <h1 class="fw-bold text-center mb-4">HTML Minifier</h1>

                <form method="POST">
                    <div class="mb-3">
                        <label for="code" class="form-label">Your Code</label>
                        <textarea name="code" id="code" rows="10" class="form-control" placeholder="Paste your html code here..." required></textarea>
                    </div>

                    <button class="btn btn-primary" type="submit" name="convert">Convert</button>
                </form>

                <?php if (isset($_POST['convert'])) : ?>

                    <div class="mt-5">
                        <label class="form-label">Converted Code</label>
                        <div class="alert alert-secondary" style="word-wrap: break-word;">
                            <?= $convertedCode; ?>
                        </div>
                    </div>

                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>