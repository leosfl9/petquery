<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/confirma.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="icon" href="img/icons/logo.png" type="Image/png">
    <title>PetQuery - Agendamento de banho & tosa</title>
</head>
<body>
        
    <!-- navbar -->

    <nav id="nav" class="navbar navbar-expand-lg sticky-top p-3" style="background-color: #518CD7;">
        <div class="container-fluid">
            <h4 class="mx-auto" style="color: #fff; font-weight: 600">Confirmar agendamento</h4 >
        </div>
    </nav>
        <div class="container-fluid" style="background-color: #D4E1F2">
            <div class="row p-4">
                <div class="col-6 text-end">
                    <span><img id="agenda" src="img/icons/icons_serviçosPet/agenda.png" alt="icone de agenda" style="width: 35px; margin-right: 10px"><small id="dia" style="font-weight: 600; color: #464444; font-size: 16px; margin-right: 15px">00/00/0000</small></span>
                </div>
                <div class="col-6 text-start">
                    <span><img id="relogio" src="img/icons/icons_serviçosPet/relogio.png" alt="icone de relogio" style="width: 35px; margin-right: 10px; margin-left: 35px"><small id="hora" style="font-weight: 600; color: #464444; font-size: 16px;">00:00</small></span>
                </div>
            </div>
        </div>

    <!-- confirmação -->

    <div class="container-fluid mt-5">
        <div class="container" id="form_login" style="width: 30%">
            <form method="POST" action="">
                <div class="mb-4">
                    <input type="text" placeholder="Nome do pet" minlength="1" maxlength="200" class="form-control" id="nomepet" style="border-color: #a9a9a9" required>
                </div>
            </form>
        </div>
    </div>

</body>
</html>