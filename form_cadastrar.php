<html>

<head>
    <title>Cadastro de materiais</title>
</head>

<body>
    <pre>
        Cadastro de Materiais
        <form action="inserir.php" method="POST">
            <div class="form-adiciona">
                Digite a quantidade <input type="number" name="quantidade" />
                Digite o comprimento (x) <input type="number" name="comprimento" />
                Digite a altura (y) <input type="number" name="altura" />
                Digite a chapa <input type="text" name="chapa" />   
               
                <input type="button" class="clonaLinha" value="Adicionar linha" />
                <input type="button" class="removerLinha" value="Remover linha" disabled/>
            </div>
                <input type="submit" class="enviaDados" value="Enviar" />
        </form>
    </pre>

    <script>
        var clonarTabela = document.querySelector(".form-adiciona");

        clonarTabela.addEventListener("click", function(event) {
            event.target.parentNode.classList.add();
            console.log(clonarTabela);
        });
    </script>
    <script>
        var removeTabela = document.querySelector(".removerLinha");

        removeTabela.addEventListener("click", function(event) {
            event.target.parentNode.classList.add("fadeOut");

            setTimeout(function() {
                event.target.parentNode.remove();
            }, 500);

        });
    </script>

</body>

</html>