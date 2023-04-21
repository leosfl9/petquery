<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/escolha.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="icon" href="img/icons/logo.png" type="Image/png">
    <title>PetQuery - Agendamento de banho & tosa</title>
</head>
<body>
        
    <!-- navbar -->

    <nav id="nav" class="navbar navbar-expand-lg sticky-top" style="background-color: #518CD7;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/icons/logo.png" style="width: 15vh; height: 15vh; margin-bottom: -25px; margin-top: -25px;" alt="logo da petquery"></a>
        </div>
    </nav>

    <!-- seleção do pet -->

    <div class="container-fluid">
        <div class="container mt-5" id="cont" style="width: 500px">
                <h6 style="font-weight: 600;" class="mb-4">Selecione o pet</h6>
                    <div class="card mb-5 mt-2" style="max-width: 440px; border-radius: 10px">
                        <div class="row g-0">
                            <div class="col-sm-3 text-center p-4">
                                <img src="img/pata.png" class="rounded-circle" alt="icone de pata">
                            </div>
                            <div class="col-sm-9 p-4">
                            <div id="card" class="card-body">
                                <h5 class="card-text" style="font-weight: 600; color: #0D51AA">Usar pet cadastrado</h3>
                            </div>
                        </div>
                    </div>
                </div>   
                
            <a href="cadastro_pet.php"><button id="novo" class="p-2" style="border: 1px solid #518CD7; background-color: #fff; border-radius: 5px; color: #0D51AA; width: 440px; font-weight: 600">Cadastrar novo pet</button></a>
    
            <!-- botões -->

        <div class="row mt-5">
            <div class="col text-end">
                <a href="" class=""><button type="button" class="p-2" style="border: 1px solid #518CD7; background-color: #fff; border-radius: 5px; color: #0D51AA; width: 100px; font-weight: 600"><img class="me-2" src="img/icons/seta-esquerda.png">Voltar</img></button></a>
            </div>
            <div class="col">
                <button type="submit" class="p-2" style="border: 1px solid #518CD7; background-color: #fff; border-radius: 5px; color: #0D51AA; width: 100px; font-weight: 600">Avançar<img class="ms-2" src="img/icons/seta-direita (2).png"></img></button>
            </div>
        </div>
    </div>


</body>
</html>    