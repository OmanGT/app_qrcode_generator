<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QR Code Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card shadow text-center mt-5 p-3">
                    <div class="card-header">
                        <h3>QR Code Generator</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Masukkan Kode QR Code :</h5>
                        <form method="POST" class="form-group">
                            <input type="text" class="form-control" name="text-code" required>
                            <button class="btn btn-primary mt-3" name="generate">Generate</button>
                        </form>
                    </div>
                    <div class="card-footer bg-secondary">

                        <?php
                        if (isset($_POST['generate'])) {
                            $code = $_POST['text_code'];
                            echo "<center><img alt='testing' src='https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=$code&choe=UTF-8'/></center>";
                        }
                        ?>
                    </div>
                    <p class="mt-3">Desig By <a href="https://github.com/OmanGT">OmanGT</a> 2024</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>