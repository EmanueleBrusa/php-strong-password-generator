<?php
    include __DIR__.'/functions.php';
    /*function randomNumber($min, $max){
        return rand($min, $max);
    }

    function generatePassword($length){
        $result = '';
        $password = '';
        $numbers = '0123456789';
        $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $symbols = '!@#$%^&*()';

        $baseString = $letters.$numbers.$symbols;

        if(empty($length)){
            $result = 'Nessun parametro valido inserito';
        }
        else if($length < 8 || $length > 32){
            $result = 'Attenzione, la lunghezza della password deve essere compresa tra 8 e 32 caratteri';
        }
        else{
            while(strlen($password) < $length){
                $index = randomNumber(0, strlen($baseString) - 1);
                $char = $baseString[$index];
                $password.=$char;
            }
            return $password;
        }
        return $result;
    }*/

    if(isset($_GET['length'])){
        $response = generatePassword($_GET['length']);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--bootstrap--> <!--controllare link non funzionante-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="./style/style.css">
        <title>Password generator</title>
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="text-center">Strong Password Generator</h1>
            <h2 class="text-center">Genera una password sicura</h2>
            <?php if(isset($response)){ ?>
                <div class="alert alert-info">
                    <?php echo $response; ?> 
                </div>
            <?php } ?>
            <div class="row">
                <div class="col-12">
                    <form action="index.php" method="GET">
                        <div class="row">
                            <div class="col-12">
                            <label for="length" class="control-label">Lunghezza</label>
                            <input type="number" id="length" name="length" placeholder="lunghezza" class="form-control">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success float-end mt-4">Invia</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>