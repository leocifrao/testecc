<html>

<head>
    <title>Cadastro de materiais</title>
</head>

<body>
    <pre>
        Cadastro de Materiais
        <form id="form-adiciona" action="inserir.php" method="POST">
        Digite a quantidade <input type="number" name="quantidade" />
        Digite o comprimento (x) <input type="number" name="comprimento" />
        Digite a altura (y) <input type="number" name="altura" />
        Digite a chapa <input type="text" name="chapa" />
        <input type="button" id="clonaLinha" value="Adicionar linha" />
        <input type="button" id="removerLinha" value="Remover linha" />
        <input type="submit" id="enviaDados" value="Enviar" />
        </form>
    </pre>

    <script>
        var clonarTabela = document.querySelector("#clonaLinha");

        clonarTabela.addEventListener("click", function(event) {
            event.target.parentNode.classList.add("#form-adiciona");

        });
    </script>
    <script>
        var removeTabela = document.querySelector("#removerLinha");

        removeTabela.addEventListener("click", function(event) {
            event.target.parentNode.classList.add("fadeOut");

            setTimeout(function() {
                event.target.parentNode.remove();
            }, 500);

        });
    </script>

</body>

</html>