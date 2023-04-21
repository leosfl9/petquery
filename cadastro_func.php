<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cadastro_cli.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="icon" href="img/icons/logo.png" type="Image/png">
    <title>PetQuery - Cadastro de funcionário</title>
</head>
<body>

    <!-- navbar -->

    <nav id="nav" class="navbar navbar-expand-lg sticky-top" style="background-color: #518CD7;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/icons/logo.png" style="width: 15vh; height: 15vh; margin-bottom: -25px; margin-top: -25px;" alt="logo da petquery"></a>
            <span><img src="img/cadeado.png" alt="icone de cadeado" style="width: 5vh; float: left; margin-left: -35px; margin-top: -0px"><h5 style="font-weight: 600; color: #fff; margin-top: 5px">Ambiente seguro</h5></span>
        </div>
    </nav>

    <!-- cadastro -->

    <div class="container-fluid mt-5">
        <div class="container" id="form_cad" style="width: 50%">
            <div class="row justify-content-center">
                <img class="rounded-circle mt-5" src="img/icons/usuario.png" alt="icone de usuario" style="width: 80px;">
            </div>
            <div class="row justify-content-center text-center mt-4">
                <h6 style="font-weight: 600">Cadastrar funcionário</h6>
            </div>
            <div class="row justify-content-center text-center mt-2 mb-5">
                <small class="form-text">Complete os campos com as informações do funcionário</small>
            </div>
            <form method="POST" action="">

                <!-- parte de cima -->

                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="mb-4">
                            <input type="text" placeholder="Nome" minlength="1" maxlength="50" class="form-control" id="nomecadastro" style="border-color: #a9a9a9" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" placeholder="Sobrenome" minlength="1" maxlength="250" class="form-control" id="sobrenomecadastro" style="border-color: #a9a9a9" required>
                        </div>
                        <div class="mb-4">
                            <input type="text" placeholder="CPF" class="form-control" minlength="11" maxlength="11" id="cpfcadastro" style="border-color: #a9a9a9" required>
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-xxl-2 mb-4">
                                    <select name="choice" id="dddcadastro" style="height: 38px; border-color: #a9a9a9; border-radius: 4px" required>
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
                                <div class="col-xxl-10">
                                    <input type="text" placeholder="Telefone" minlength="8" maxlength="9" class="form-control" id="telefonecadastro" style="border-color: #a9a9a9" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="mb-4">
                            <input type="email" minlength="1" maxlength="200" placeholder="E-mail" class="form-control" id="emailcadastro" style="border-color: #a9a9a9" required>
                        </div>
                        <div class="mb-4">
                            <input type="password" minlength="8" maxlength="50" placeholder="Senha" class="form-control" id="senhacadastro" style="border-color: #a9a9a9" required>
                        </div>
                        <div class="mb-4">
                            <input type="password" minlength="8" maxlength="50" placeholder="Confirmar senha" class="form-control" minlength="11" maxlength="11" id="confcadastro" style="border-color: #a9a9a9" required>
                        </div>
                    </div>

                    <!-- parte de baixo -->

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-4">
                                    <input type="text" placeholder="CEP" minlength="8" maxlength="8" class="form-control" id="cepcadastro" style="border-color: #a9a9a9" required>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="mb-4">
                                    <input type="text" placeholder="Cidade" minlength="1" maxlength="150" class="form-control" id="cidadecadastro" style="border-color: #a9a9a9" required>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-4">
                                    <input type="text" placeholder="UF" class="form-control" id="ufcadastro" style="border-color: #a9a9a9" required>
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="mb-4">
                                    <input type="text" placeholder="Logradouro" minlength="1" maxlength="250" class="form-control" id="logradourocadastro" style="border-color: #a9a9a9" required>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-4">
                                    <input type="number" placeholder="Nº" minlength="1" maxlength="5" class="form-control" id="numerocadastro" style="border-color: #a9a9a9" required>
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-4">
                                    <input type="text" placeholder="Complemento*" minlength="1" maxlength="50" class="form-control" id="complementocadastro" style="border-color: #a9a9a9">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="mb-4">
                                    <input type="text" placeholder="Bairro" minlength="1" maxlength="150" class="form-control" id="bairrocadastro" style="border-color: #a9a9a9" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid mb-5">
                        <div class="row justify-content-center text-center mt-3">
                            <button type="submit" class="btn mb-3" style="background-color: #518CD7; color: #fff; font-weight: 600; width: 98%">Cadastrar</button>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>

</body>
</html>