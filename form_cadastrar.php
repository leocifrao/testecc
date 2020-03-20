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
            </div>
                <input type="button" class="clona-linha" value="Adicionar linha" />
                <input type="button" class="remove-linha" value="Remover linha" />    
                <input type="submit" class="envia-dados" value="Enviar" />
        </form>
    </pre>

    <script>
        var clonarTabela = document.querySelector(".form-adiciona");

        clonarTabela.addEventListener("click", function(event) {
            event.target.classList.add(".form-adiciona");
            console.log(clonarTabela)
        });
    </script>
    <script>
        var removeTabela = document.querySelector(".remove-linha");

        removeTabela.addEventListener("click", function(event) {
            event.target.parentNode.remove();
        });
    </script>

</body>

</html>