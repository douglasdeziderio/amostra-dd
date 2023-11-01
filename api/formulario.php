<?phP
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];
        $estado = $_POST['estado'];
        $produto = $_POST['produto'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,sobrenome,email,sexo,estado,produto) VALUES ('$nome','$sobrenome','$email','$sexo','$estado','$produto')");
        
    }

?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DDev</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link rel="shortcut icon" href="/assets/icone.icon.png" type="image/x-icon">
</head>
<body>
    <header>
        <a href="/index.html">
            <img src="/assets/logo.png" alt="logo" width="50px">
        </a>

        <nav class="menu">
            <ul class="menu_barra">
                <li class="menu_botao">
                    <a class="menu_letra" href="/index.html">Inicio</a>
                </li>

                <li class="menu_botao">
                    <a class="menu_letra" href="/portifolio.html">Portifólio</a>
                </li>

                <li class="menu_botao">
                    <a class="menu_letra" href="/quemsou.html">Quem sou</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="form">
            <form action="/api/formulario.php" method="POST" autocomplete="on">
                <fieldset class="form_form">
                    <label class="form_nome" for="nome">Nome: </label>
                    <input class="form_nome" type="text" name="nome" id="idnome" required autocomplete="name">       
                    <br>
                    <br>
                    <label class="form_nome" for="sobrenome">Sobrenome: </label>
                    <input class="form_nome" type="text" name="sobrenome" id="idsobrenome" required autocomplete="sobrename">       
                    <br>
                    <br>
                    <label class="form_nome" for="email">Email: </label>
                    <input class="form_nome" type="email" name="email" id="email" required autocomplete="email">
                    <br>
                    <br>
                    <label class="form_nome" for="sexo">Sexo: </label><br>
                    <label class="form_nome"><input type="radio" name="sexo" value="mas" id="sexo" required>Masculino</label><br>
                    <label class="form_nome"><input type="radio" name="sexo" value="fem" id="sexo" required>Feminino</label><br>
                    <label class="form_nome"><input type="radio" name="sexo" value="não" id="sexo" required>Prefiro não dizer</label>
                    <br>
                    <br>
                    <label class="form_nome" for="estado"> Estado: </label>
                    <select class="form_campo" id="estado" name="estado" required>
                        <option class="form_nome" selected disabled value=""></option>
                        <option class="form_nome" value="AC">Acre</option>
                        <option class="form_nome" value="AL">Alagoas</option>
                        <option class="form_nome" value="AP">Amapá</option>
                        <option class="form_nome" value="AM">Amazonas</option>
                        <option class="form_nome" value="BA">Bahia</option>
                        <option class="form_nome" value="CE">Ceará</option>
                        <option class="form_nome" value="DF">Distrito Federal</option>
                        <option class="form_nome" value="ES">Espírito Santo</option>
                        <option class="form_nome" value="GO">Goiás</option>
                        <option class="form_nome" value="MA">Maranhão</option>
                        <option class="form_nome" value="MT">Mato Grosso</option>
                        <option class="form_nome" value="MS">Mato Grosso do Sul</option>
                        <option class="form_nome" value="MG">Minas Gerais</option>
                        <option class="form_nome" value="PA">Pará</option>
                        <option class="form_nome" value="PB">Paraíba</option>
                        <option class="form_nome" value="PR">Paraná</option>
                        <option class="form_nome" value="PE">Pernambuco</option>
                        <option class="form_nome" value="PI">Piauí</option>
                        <option class="form_nome" value="RJ">Rio de Janeiro</option>
                        <option class="form_nome" value="RN">Rio Grande do Norte</option>
                        <option class="form_nome" value="RS">Rio Grande do Sul</option>
                        <option class="form_nome" value="RO">Rondônia</option>
                        <option class="form_nome" value="RR">Roraima</option>
                        <option class="form_nome" value="SC">Santa Catarina</option>
                        <option class="form_nome" value="SP">São Paulo</option>
                        <option class="form_nome" value="SE">Sergipe</option>
                        <option class="form_nome" value="TO">Tocantins</option>
                        <option class="form_nome" value="EX">Estrangeiro</option>
                    </select>
                    <br>
                    <br>
                    <label class="form_nome" for="produto">Para o que você quer o site? </label><br>
                    <label class="form_nome"><input type="radio" name="produto" value="mim" id="produto" required> Para mim</label><br>
                    <label class="form_nome"><input type="radio" name="produto" value="negocio" id="produto" required> Para o meu negócio</label><br>               
                    <label class="form_nome"><input type="radio" name="produto" value="empresa" id="produto" required> Para a empresa que eu trabalho</label><br>
                    <br>
                    <br>
                    <section class="form_botao">
                        <input  class="form_botao_gre" type="submit" name="submit" value="Enviar">
                        <input  class="form_botao_red" type="reset" name="reset" value="Limpar">
                    </section>
                </fieldset>
            </form>
        </section>
    </main>

    <footer>
        <section>
            <div class="rodape">
                <div class="rodape_div">
                    <h4 class="rodape_rodape">Contato</h4>
                    <h5 class="rodape_rodape">Endereço: Travessa Professora Elza Bittencourt, 61 - Niterói - RJ</h5>
                    <h5 class="rodape_rodape">Telefone para contato: (21) 98009-1573</h5>
                </div>
    
                <div class="rodape_rede">
                    <a href="https://wa.me/5521980091573"><img src="/assets/whats.png" width="30px"></a>
                    <a href="https://www.instagram.com/douglas.deziderio/"><img src="/assets/insta.png" width="30px"></a>
                    <a href="https://www.linkedin.com/in/douglas-dezidério-534a8922b/"><img src="/assets/link.png" width="30px"></a>
                </div>
            </div>
        </section>
        
        <section>
            <p class="copy">© 2022 por Douglas Deziderio - DEV.</p>
        </section>
    </footer>
    <script src="/main.js"></script>
</body>
</html>