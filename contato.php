<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contato.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="icon" href="img/icons/logo.png" type="Image/png">
    <title>Entre em contato com a equipe PetQuery!</title>
</head>
<body style="background-color: #D4E1F2">

    <!-- navbar -->

    <nav id="nav" class="navbar navbar-expand-lg sticky-top" style="background-color: #518CD7;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="img/icons/logo.png" style="width: 15vh; height: 15vh; margin-bottom: -25px; margin-top: -25px;" alt="logo da petquery"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> 
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" id="home" aria-current="page" href="index.php" style="margin-left: 5vh; font-weight: bold; font-size: 18px">Home</a></li>
              <li class="nav-item"><a class="nav-link" id="agendamento" href="agendamento.php" style="margin-left: 5vh; font-weight: bold; font-size: 18px">Agendamento</a></li>
              <li class="nav-item"><a class="nav-link" id="produtos" href="blog.php" style="margin-left: 5vh; font-weight: bold; font-size: 18px">Blog</a></li>
              <li class="nav-item"><a class="nav-link active" id="contato" href="contato.php" style="margin-left: 5vh; font-weight: bold; font-size: 18px">Contato</a></li>
              <li class="nav-item"><a class="nav-link" id="login" href="login.php" style="border-radius: 5px; padding-left: 15px; padding-right: 15px; margin-left: 5vh; font-weight: bold; font-size: 18px">Entre ou cadastre-se</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- formulário -->

      <div class="container justify-content-center">
        <div class="row mb-5 mt-5">
            <div class="col-lg-6 mb-5">
                <div class="container" id="contcontato" style="width: 92%">
                    <div class="row">
                        <form class="formulario p-5" action="" method="POST" style="background-color: #fff; border-radius: 30px; border: 1px solid #a9a9a9;">
                            <div class="mb-3">
                                <label for="nome" class="form-label" style="font-weight: 600; font-size: 20px">Nome</label><br>
                                <input type="text" placeholder="Nome" minlength="1" maxlength="250" class="form-control" id="nome" style="border-color: #a9a9a9" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="email" class="form-label" style="font-weight: 600; font-size: 20px">E-mail</label><br>
                                <input type="email" placeholder="E-mail" minlength="1" maxlength="200" class="form-control" id="email" style="border-color: #a9a9a9" required>
                            </div>
        
                            <div class="mb-3">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2 mb-3">
                                            <label for="ddd" class="form-label" style="font-weight: 600; font-size: 20px">DDD</label><br>
                                            <select name="choice" id="choice" style="height: 38px; border-color: #a9a9a9; border-radius: 4px" required>
                                                <option hidden disabled selected>DDD</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="41">41</option>
                                                <option value="42">42</option>
                                                <option value="43">43</option>
                                                <option value="44">44</option>
                                                <option value="45">45</option>
                                                <option value="46">46</option>
                                                <option value="47">47</option>
                                                <option value="48">48</option>
                                                <option value="49">49</option>
                                                <option value="51">51</option>
                                                <option value="52">52</option>
                                                <option value="53">53</option>
                                                <option value="54">54</option>
                                                <option value="55">55</option>
                                                <option value="56">56</option>
                                                <option value="57">57</option>
                                                <option value="58">58</option>
                                                <option value="59">59</option>
                                                <option value="61">61</option>
                                                <option value="62">62</option>
                                                <option value="63">63</option>
                                                <option value="64">64</option>
                                                <option value="65">65</option>
                                                <option value="66">66</option>
                                                <option value="67">67</option>
                                                <option value="68">69</option>
                                                <option value="71">71</option>
                                                <option value="72">72</option>
                                                <option value="73">73</option>
                                                <option value="74">74</option>
                                                <option value="75">75</option>
                                                <option value="76">76</option>
                                                <option value="77">77</option>
                                                <option value="78">78</option>
                                                <option value="79">79</option>
                                                <option value="81">81</option>
                                                <option value="82">82</option>
                                                <option value="83">83</option>
                                                <option value="84">84</option>
                                                <option value="85">85</option>
                                                <option value="86">86</option>
                                                <option value="87">87</option>
                                                <option value="88">88</option>
                                                <option value="89">89</option>
                                                <option value="91">91</option>
                                                <option value="92">92</option>
                                                <option value="93">93</option>
                                                <option value="94">94</option>
                                                <option value="95">95</option>
                                                <option value="96">96</option>
                                                <option value="97">97</option>
                                                <option value="98">98</option>
                                                <option value="99">99</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-10 mb-3">
                                            <label for="telefone" class="form-label" style="font-weight: 600; font-size: 20px">Telefone</label><br>
                                            <input type="text" minlength="8" maxlength="9" placeholder="Telefone" class="form-control" id="telefone" style="border-color: #a9a9a9" required>
                                        </div>
                                    </div>
                                </div>
                                <label for="assunto" class="form-label" style="font-weight: 600; font-size: 20px">Assunto</label><br>
                                <input type="text" placeholder="Assunto" minlength="1" maxlength="150" class="form-control" id="assunto" style="border-color: #a9a9a9" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="mensagem" class="form-label" style="font-weight: 600; font-size: 20px">Mensagem</label><br>
                                <textarea class="form-control mb-4" minlength="1" maxlength="1000" placeholder="Sua mensagem..." id="mensagem" rows="5" style="border-color: #a9a9a9" required></textarea>
                            </div>
                            
                            <div class="container text-center mt-5">
                                <button type="submit" class="btn" style="background-color: #A7C8F2; border: 1px solid #3a86ff; border-radius: 20px; color: #3a86ff;font-weight: 600">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="container" id="contredes" style="width: 90%; background-color: #A7C8F2; border-radius: 30px; border: 1px solid #3a86ff;">
                    <div class="row mt-5 text-center justify-content-center">
                        <h5 style="font-weight: 600" class="mb-5 mt-5">OU NOS CONTATE ABAIXO</h5>

                        <img src="img/icon_telefone.png" alt="ícone de telefone" style="width: 55px">
                        <span class="mt-2" style="font-weight: 600">Telefone</span>
                        <span class="mt-2">(11) 91234-5678</span>
                    </div>
                    <div class="row mt-5 text-center justify-content-center">
                        <img src="img/icon_email.png" alt="ícone de email" style="width: 55px">
                        <span class="mt-2" style="font-weight: 600">E-mail</span>
                        <span class="mt-2">petquerysp@gmail.com</span>
                    </div>
                    <div class="row mt-5 mb-4 text-center justify-content-center">
                        <img src="img/icon_whatsapp.png" alt="ícone de whatsapp" style="width: 55px">
                        <span class="mt-2" style="font-weight: 600">Whatsapp</span>
                        <span class="mt-2">(11) 98765-4321</span>
                    </div>
                    <div class="row text-center justify-content-center">
                        <img src="img/icons/logo.png" id="logocontato" alt="ícone da petquery" style="width: 173px">
                    </div>
                </div>
            </div>
        </div>
      </div>

      <!-- footer -->

      <nav class="container-fluid p-5" style="background-color: #F7F7F7;">
        <div class="row">
          <div class="col-sm-3 mb-5" style="text-align: center;">
              <h5 style="font-weight: bold">Sobre nós</h5>
              <a href="sobre.php" style="text-decoration: none; color: #000"><span style="font-size: 14px">Quem somos</span></a><br>
              <a href="index.php#mapa" style="text-decoration: none; color: #000"><span style="font-size: 14px">Nossas lojas</span></a><br>
              <a href="contato.php" style="text-decoration: none; color: #000"><span style="font-size: 14px">Entre em contato</span></a><br>
          </div>
          <div class="col-sm-3 mb-5" style="text-align: center;">
            <h5 style="font-weight: bold">Serviços</h5>
            <a href="" style="text-decoration: none; color: #000"><span style="font-size: 14px">Banho e Tosa</span></a><br>
            <a href="" style="text-decoration: none; color: #000"><span style="font-size: 14px">Veterinário</span></a><br>
            <a href="" style="text-decoration: none; color: #000"><span style="font-size: 14px">Passeio Pet</span></a><br>
            <a href="" style="text-decoration: none; color: #000"><span style="font-size: 14px">Hospedagem Pet</span></a><br>
            <a href="" style="text-decoration: none; color: #000"><span style="font-size: 14px">Creche Pet</span></a><br>
            <a href="" style="text-decoration: none; color: #000"><span style="font-size: 14px">Adestramento</span></a><br>
          </div>
          <div class="col-sm-3 mb-5" style="text-align: center;">
            <h5 style="font-weight: bold">Cliente</h5>
            <a href="login.php" style="text-decoration: none; color: #000"><span style="font-size: 14px">Fazer login</span></a><br>
            <a href="" style="text-decoration: none; color: #000"><span style="font-size: 14px">Cadastrar-se</span></a><br>
            <a href="" style="text-decoration: none; color: #000"><span style="font-size: 14px">Agendamentos</span></a><br>
          </div>
          <div class="col-sm-3" style="text-align: center;">
            <h5 style="font-weight: bold">Redes sociais</h5>
            <a href=""><img class="mb-2" src="img/facebook.png" alt="" style="width: 30px; border-radius: 50%"></a><br>
            <a href=""><img class="mb-2" src="img/twitter.png" alt="" style="width: 30px; border-radius: 50%"></a><br>
            <a href=""><img class="mb-2" src="img/instagram.png" alt="" style="width: 30px; border-radius: 50%"></a><br>
            <a href=""><img class="mb-2" src="img/youtube.png" alt="" style="width: 30px; border-radius: 50%"></a><br>
          </div>
        </div>
      </nav>

      <nav class="container-fluid" style="background-color: #000;">
        <div class="row" style="text-align: center;">
          <p style="color: #fff; padding-top: 2vh; font-size: 0.875rem; font-weight: 500">© PET QUERY 2023 - Todos os direitos reservados</p>
        </div>
      </nav>
</body>
</html>