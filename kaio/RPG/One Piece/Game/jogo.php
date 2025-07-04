<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo - Seleção de Personagem</title>

    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" as="style" onload="this.rel='stylesheet'">
    <link rel="icon" href="/kaio/RPG/One Piece/img/iconSite.png">

    <style>
        .card-login {
            padding: 5% 0;
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
        }

        .card-style {
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            padding: 25px;
            margin: 20px;
        }

        .flex-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #c6ddf3, #a3c9f1);
        }

        .btn {
            width: 100%;
            background-color: #f8f9fa;
            border: 2px solid beige;
            color: black;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn:hover {
            background-color: beige;
            color: #333;
        }

        .btn-submit {
            margin-top: 20px;
        }

        .card-img {
            text-align: center;
            margin-bottom: 20px;
        }

        .card-img img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark" style="background-color:darkblue;">
        <a class="navbar-brand" href="#">
            <img src="../img/logoChapeu.png" width="50px" height="50px" class="d-inline-block align-top" alt="">
            <span class="navbar-item has-text-white">One Piece RPG</span>
        </a>
    </nav>

    <div class="flex-container">

        <div class="container">
            <div class="row">

                <div class="card-login" style="margin-top: -15px">
                    <div class="card card-style">
                        <form action="personagem.php" method="post">
                            <div class="card-header" style="color: white;">
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <div class="field">
                                        <div class="card-img">
                                            <img src="../img/PrincipalLogo.png" alt="">
                                        </div>
                                        <label class="label">Nome</label>
                                        <div class="control">
                                            <div class="is-fullwidth">
                                                     
                                                <select name="nome" id="nome" required onchange="mostrarAkumaNoMi(); mostrarClassificacao(); mostrarRaca();">
                                                    <option value="" disabled selected>Selecione um personagem</option>
                                                    <option value="Monkey D.Luffy">Monkey D.Luffy</option>
                                                    <option value="Nico Robin">Nico Robin</option>
                                                    <option value="Tony Tony Chopper">Tony Tony Chopper</option>
                                                    <option value="Edward Newgate">Edward Newgate</option>
                                                    <option value="Kozuki Momonosuke">Kozuki Momonosuke</option>
                                                    <option value="Kozuki Toki">Kozuki Toki</option>
                                                    <option value="Brook">Brook</option>
                                                    <option value="Charlotte LinLin">Charlotte LinLin</option>
                                                    <option value="Jewelry Bonney">Jewelry Bonney</option>
                                                    <option value="Charlotte Katakuri">Charlotte Katakuri</option>
                                                    <option value="Donquixote Doflamingo">Donquixote Doflamingo</option>
                                                    <option value="Marshall D.Teach">Marshall D.Teach</option>
                                                    <option value="Buggy">Buggy</option>
                                                    <option value="Rob Lucci">Rob Lucci</option>
                                                    <option value="Crocodile">Crocodile</option>
                                                </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Akuma no Mi</label>
                                        <div class="control">
                                            <input type="text" id="akumaNoMi" name="akumaNoMi" readonly>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Classificação</label>
                                        <div class="control">
                                            <input type="text" id="classificacao" name="classificacao" readonly>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <label class="label">Raça</label>
                                        <div class="control">
                                            <input type="text" id="raca" name="raca" readonly>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    function mostrarAkumaNoMi() {
                                        const personagemAkumaNoMi = {
                                            "Monkey D.Luffy": "Hito Hito no mi modelo:Nika",
                                            "Nico Robin": "Hana Hana no Mi",
                                            "Tony Tony Chopper": "Hito Hito no mi modelo:Nika",
                                            "Edward Newgate": "Gura Gura no Mi",
                                            "Kozuki Momonosuke": "Zoan Artificial (Dragão) modelo: Peixe",
                                            "Kozuki Toki": "Toki Toki no Mi",
                                            "Brook": "Yomi Yomi no Mi",
                                            "Charlotte LinLin": "Soru Soru no Mi",
                                            "Jewelry Bonney": "Toki Toki no Mi",
                                            "Charlotte Katakuri": "Mochi Mochi no Mi",
                                            "Donquixote Doflamingo": "Ito Ito no Mi",
                                            "Marshall D.Teach": "Yami Yami no Mi & Gura Gura no Mi",
                                            "Buggy": "Bara Bara no Mi",
                                            "Rob Lucci": "Neko Neko no Mi, Model: Leopard",
                                            "Crocodile": "Suna Suna no Mi"
                                        };

                                        const personagem = document.getElementById("nome").value;
                                        const akumaNoMi = personagemAkumaNoMi[personagem] || "";
                                        document.getElementById("akumaNoMi").value = akumaNoMi;
                                    }

                                    function mostrarClassificacao() {
                                        const classificacaoAkumaNoMi = {
                                            "Hito Hito no mi modelo:Nika": "Zoan",
                                            "Hana Hana no Mi": "Paramecia",
                                            "Gura Gura no Mi": "Paramecia",
                                            "Zoan Artificial (Dragão) modelo: Peixe": "Zoan (artificial)",
                                            "Toki Toki no Mi": "Paramecia",
                                            "Yomi Yomi no Mi": "Paramecia",
                                            "Soru Soru no Mi": "Paramecia",
                                            "Mochi Mochi no Mi": "Paramecia",
                                            "Ito Ito no Mi": "Paramecia",
                                            "Yami Yami no Mi & Gura Gura no Mi": "Logia & Paramecia",
                                            "Bara Bara no Mi": "Paramecia",
                                            "Neko Neko no Mi, Model: Leopard": "Zoan",
                                            "Suna Suna no Mi": "Logia"
                                        };

                                        const akumaNoMi = document.getElementById("akumaNoMi").value;
                                        const classificacao = classificacaoAkumaNoMi[akumaNoMi] || "";
                                        document.getElementById("classificacao").value = classificacao;
                                    }

                                    //adiciona raça
                                    function mostrarRaca() {
                                        const personagemRaca = {
                                            "Monkey D.Luffy": "Humano",
                                            "Nico Robin": "Humana",
                                            "Tony Tony Chopper": "Híbrido (Humano e Rena)",
                                            "Edward Newgate": "Humano",
                                            "Kozuki Momonosuke": "Humano",
                                            "Kozuki Toki": "Humana",
                                            "Brook": "Esqueleto (Humano)",
                                            "Charlotte LinLin": "Gigante (Humana)",
                                            "Jewelry Bonney": "Humana",
                                            "Charlotte Katakuri": "Humano",
                                            "Donquixote Doflamingo": "Humano",
                                            "Marshall D.Teach": "Humano",
                                            "Buggy": "Humano",
                                            "Rob Lucci": "Humano",
                                            "Crocodile": "Humano"
                                        };

                                        const personagem = document.getElementById("nome").value;
                                        const raca = personagemRaca[personagem] || "";
                                        document.getElementById("raca").value = raca;
                                    }
                                </script>

                                <button class="btn btn-lg btn-info btn-block"
                                    style="background-color:rgb(23, 113, 204); width:100%; border-radius: 10px; color: white; font-weight: bold; height: 32px; margin-top: 20px;"
                                    onclick="mostrarAkumaNoMi(); mostrarClassificacao(); mostrarRaca();"
                                    type="submit">Avancar</button>
                                </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    

</body>



</html>