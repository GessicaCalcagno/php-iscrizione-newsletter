<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iscrizione Newsletter</title>
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
    <h1 class="mt-4 mb-4">Iscriviti alla Newsletter</h1>

     <!-- FORM -->
     <form action="index.php" method="POST" class="mb-4">
            <div class="form-group">
                <label for="email">Indirizzo Email</label>
                <input type="email" name="email" id="email" class="form-control">

                <div class="invalid-feedback">
                    
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Iscriviti</button>
        </form>

    </div>

</body>

</html>