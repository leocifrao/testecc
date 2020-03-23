<html>

<head>
    <title>Cadastro de materiais</title>
</head>

<body>

    <h1>Cadastro de Materiais</h1>
    <hr>
    <form action="inserir.php" method="POST">
        <div class="form-adiciona" id="tabela-padrao">
            <input type="number" placeholder="Digite a quantidade" name="quantidade" />
            <input type="number" placeholder="Digite o comprimento (x)" name="comprimento" />
            <input type="number" placeholder="Digite a altura (y)" name="altura" />
            <input type="text" placeholder="Digite a chapa" name="chapa" />
        
            <input type="button" class="clona-linha" style="border-color: blue" value="Adicionar linha" />
            <input type="button" class="remove-linha" style="border-color: red" value="Remover linha" />
            <input type="submit" class="envia-dados" style="border-color: green" value="Enviar" />
            <hr>
        </div>
    </form>


    <script>
        //clonar linha
        var clonaTabela = document.querySelector(".clona-linha");

        clonaTabela.addEventListener("click", function() {
            var seuNode = document.getElementById('tabela-padrao');
            var clone = seuNode.cloneNode(true);
            document.body.appendChild(clone);
        });
    </script>
    <script>
        //remover linha
        var removeTabela = document.querySelector(".remove-linha");

        removeTabela.addEventListener("click", function(event) {
            event.target.parentNode.remove();
        });
    </script>

</body>

</html>