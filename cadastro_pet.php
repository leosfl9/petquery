<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cadastro_pet.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <link rel="icon" href="img/icons/logo.png" type="Image/png">
    <title>PetQuery - Cadastro de pet</title>
</head>
<body>

    <!-- navbar -->

    <nav id="nav" class="navbar navbar-expand-lg sticky-top" style="background-color: #518CD7;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/icons/logo.png" style="width: 15vh; height: 15vh; margin-bottom: -25px; margin-top: -25px;" alt="logo da petquery"></a>
            <span><img src="img/cadeado.png" alt="icone de cadeado" style="width: 5vh; float: left; margin-left: -35px; margin-top: -0px"><h5 style="font-weight: 600; color: #fff; margin-top: 5px">Ambiente seguro</h5></span>
        </div>
    </nav>

    <!-- cadastro pet -->

    <div class="container-fluid mt-5">
        <div class="container" id="form_login" style="width: 50%">
            <div class="row justify-content-center">
                <img class="rounded-circle mt-5" src="img/icone-pet.jpg" alt="icone de pet" style="width: 80px;">
            </div>
            <div class="row justify-content-center text-center mt-4 mb-5">
                <h6 style="font-weight: 600">Cadastrar um pet</h6>
            </div>
            <form method="POST" action="">
                <div class="mb-4">
                    <label for="nomepet" style="font-weight: 600" class="mb-2">Nome</label>
                    <input type="text" placeholder="Nome do pet" minlength="1" maxlength="200" class="form-control" id="nomepet" style="border-color: #a9a9a9" required>
                </div>
                <div class="mb-4">
                    <div class="row">
                        <h6 style="font-weight: 600" class="mb-4">Tipo do pet</h6>
                        <div class="col-lg-2 text-center">
                            <img src="img/icon-cachorro.png" class="mb-2" alt="icone de cachorro" style="width: 100px"><br>
                            <input type="radio" id="cachorro" name="tipo" value="cachorro" onchange="yesDog()" required><br>
                            <label for="cachorro">Cachorro</label>
                        </div>
                        <div class="col-lg-2 text-center">
                            <img src="img/icon-gato.png" class="mb-2" alt="icone de gato" style="width: 100px"><br>
                            <input type="radio" id="gato" name="tipo" value="gato" onchange="yesCat()"><br>
                            <label for="gato">Gato</label>
                        </div>
                        <div class="col-lg-2 text-center">
                            <img src="img/icon-ave.png" class="mb-2" alt="icone de ave" style="width: 100px"><br>
                            <input type="radio" id="passaro" name="tipo" value="passaro" onchange="yesBird()"><br>
                            <label for="passaro">Pássaro</label>
                        </div>
                        <div class="col-lg-2 text-center">
                            <img src="img/icon-coelho.png" class="mb-2" alt="icone de coelho" style="width: 100px"><br>
                            <input type="radio" id="coelho" name="tipo" value="coelho" onchange="yesRabbit()"><br>
                            <label for="coelho">Coelho</label>
                        </div>
                        <div class="col-lg-2 text-center">
                            <img src="img/icon-peixe.png" class="mb-2" alt="icone de peixe" style="width: 100px"><br>
                            <input type="radio" id="peixe" name="tipo" value="peixe" onchange="yesFish()"><br>
                            <label for="peixe">Peixe</label>
                        </div>
                        <div class="col-lg-2 text-center">
                            <img src="img/icone-outros.jpg" class="mb-2 rounded-circle" alt="icone de outro" style="width: 100px"><br>
                            <input type="radio" id="outro" name="tipo" value="outro" onchange="yesOther(); yesOutro();"><br>
                            <label for="outro">Outro</label>
                        </div>
                    </div>
                </div>

                <!-- inputs de raça -->

                <div class="mb-4" id="ifDog" style="display: none;">
                    <label for="racapet" style="font-weight: 600" class="mb-2">Raça</label>
                    <select class="form-control" id="racapet" style="border-color: #a9a9a9" required>
                        <option value="" selected disabled>Selecione a raça do seu pet</option>
                        <option value="pug">Pug</option>
                        <option value="shih tzu">Shih Tzu</option>
                        <option value="buldogue">Buldogue</option>
                        <option value="dachshund">Dachshund</option>
                        <option value="pastor alemao">Pastor Alemão</option>
                        <option value="poodle">Poodle</option>
                        <option value="rottweiler">Rottweiler</option>    
                        <option value="labrador">Labrador</option>
                        <option value="pinscher">Pinscher</option>    
                        <option value="golden retriever">Golden Retriever</option> 
                        <option value="sem raca">Sem raça definida</option>                 
                    </select>
                </div>

                <div class="mb-4" id="ifCat" style="display: none;">
                    <label for="racapet" style="font-weight: 600" class="mb-2">Raça</label>
                    <select class="form-control" id="racapet" style="border-color: #a9a9a9" required>
                        <option value="" selected disabled>Selecione a raça do seu pet</option>
                        <option value="persa">Persa</option>
                        <option value="himalaia">Himalaia</option>
                        <option value="siames">Siamês</option>
                        <option value="maine coon">Maine Coon</option>
                        <option value="angora">Angorá</option>
                        <option value="sphynx">Sphynx</option>
                        <option value="ragdoll">Ragdoll</option>    
                        <option value="ashera">Ashera</option>
                        <option value="american shorthair">American Shorthair</option>    
                        <option value="exotico">Exótico</option> 
                        <option value="sem raca">Sem raça definida</option>                 
                    </select>
                </div>

                <div class="mb-4" id="ifBird" style="display: none;">
                    <label for="racapet" style="font-weight: 600" class="mb-2">Raça</label>
                    <select class="form-control" id="racapet" style="border-color: #a9a9a9" required>
                        <option value="" selected disabled>Selecione a raça do seu pet</option>
                        <option value="canario">Canário</option>
                        <option value="calopsita">Calopsita</option>
                        <option value="diamante de gould">Diamante de Gould</option>
                        <option value="diamante mandarim">Diamante Mandarim</option>
                        <option value="manon">Manon</option>
                        <option value="periquito">Periquito</option>               
                    </select>
                </div>

                <div class="mb-4" id="ifRabbit" style="display: none;">
                    <label for="racapet" style="font-weight: 600" class="mb-2">Raça</label>
                    <select class="form-control" id="racapet" style="border-color: #a9a9a9" required>
                        <option value="" selected disabled>Selecione a raça do seu pet</option>
                        <option value="angora">Angorá</option>
                        <option value="coelho leao">Coelho Leão</option>
                        <option value="mini lop">Mini Lop</option>
                        <option value="fuzzy lop">Fuzzy Lop</option>
                        <option value="holland lop">Holland Lop</option>
                        <option value="nova zelandia">Nova Zelândia</option>
                        <option value="teddy">Teddy</option>               
                    </select>
                </div>

                <div class="mb-4" id="ifFish" style="display: none;">
                    <label for="racapet" style="font-weight: 600" class="mb-2">Raça</label>
                    <select class="form-control" id="racapet" style="border-color: #a9a9a9" required>
                        <option value="" selected disabled>Selecione a raça do seu pet</option>
                        <option value="colisa">Colisa</option>
                        <option value="tetra neon">Tetra Neon</option>
                        <option value="coridora">Coridora</option>
                        <option value="kinguio">Kinguio</option>
                        <option value="molinesia">Molinésia</option>
                        <option value="peixe arco-iris">Peixe Arco-íris</option>
                        <option value="mato grosso">Mato Grosso</option> 
                        <option value="peixe limpa-vidro">Peixe Limpa-vidro</option>
                        <option value="tanictis">Tanictis</option>
                        <option value="acara bandeira">Acará Bandeira</option>               
                    </select>
                </div>

                <div class="mb-4" id="ifOther" style="display: none;">
                    <label for="tipopet" style="font-weight: 600" class="mb-2">Tipo do pet</label>
                    <input type="text" placeholder="Digite o tipo do seu pet" minlength="1" maxlength="50" class="form-control" id="tipopet" style="border-color: #a9a9a9" required>
                </div>
                <div class="mb-4" id="ifOutro" style="display: none;">
                    <label for="racapet" style="font-weight: 600" class="mb-2">Raça</label>
                    <input type="text" placeholder="Digite a raça do seu pet" class="form-control" minlength="1" maxlength="50" id="racapet" style="border-color: #a9a9a9" required>
                </div>

                <div class="mb-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <h6 style="font-weight: 600" class="mb-4">Sexo</h6>
                            <input type="radio" id="macho" name="radiosexo" value="M" required>
                            <label for="radiomacho">Macho</label>
                            <input type="radio" id="femea" name="radiosexo" value="F" style="margin-left: 15px">
                            <label for="radiomacho">Fêmea</label>
                        </div>
                        <div class="col-lg-6">
                            <label for="corpet" style="font-weight: 600" class="mb-2">Cor do pet</label>
                            <input type="text" placeholder="Cor do seu pet" minlength="1" maxlength="20" class="form-control" id="corpet" style="border-color: #a9a9a9" required>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="corpet" style="font-weight: 600" class="mb-2">Data de nascimento</label>
                            <input type="date" class="form-control" id="nascimentopet" style="border-color: #a9a9a9" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="corpet" style="font-weight: 600" class="mb-2">Peso (em kg)</label>
                            <input type="number" placeholder="Peso do seu pet" minlength="1" maxlength="4" class="form-control" id="pesopet" style="border-color: #a9a9a9" required>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <button type="submit" class="btn mb-3" style="background-color: #518CD7; color: #fff; font-weight: 600; width: 97%">Salvar</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>