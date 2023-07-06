<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--bootstrap-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="./style/style.css">
        <title>Password generator</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 off-set-md-3">
                    <form action="index.php" method="GET">
                        <div class="row">
                            <div class="col-12 col-md-6">
                            <label for="length" class="control-label">Lunghezza</label>
                            <input type="number" id="length" name="length" placeholder="lunghezza" class="form-control">
                            </div>
                            <div class="clo-12 col-md-6">
                                <button type="submit" class="btn btn-succes float-end mt-4">Invia</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>