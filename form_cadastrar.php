<html>

<head>
    <title>Cadastro de materiais</title>
</head>

<body>

    <h1>Cadastro de Materiais</h1>
    <hr>
    <form action="inserir.php" method="POST">
        <table id="tabela-padrao" class="table">
            <thead>
                <tr class="tabelaPadrao">
                    <th>Quantidade</th>
                    <th>Comprimento (x)</th>
                    <th>Largura (y)</th>
                    <th>Chapa</th>
                    <th>
                        <input type="button" class="clona-linha" style="background-color: teal; width: 25px;" title="Adicionar linha" value="+" />
                        <input type="submit" class="envia-dados" style="background-color: springgreen; width: 60px;" title="Enviar dados" value="Enviar" /></th>
                </tr>
            </thead>
            <tbody id="tbody">
                <tr>
                    <td><input type="number" placeholder="Digite a quantidade" name="quantidade" /></td>
                    <td><input type="number" placeholder="Digite o comprimento (x)" name="comprimento" /></td>
                    <td><input type="number" placeholder="Digite a altura (y)" name="altura" /></td>
                    <td><input type="text" placeholder="Digite a chapa" name="chapa" /></td>
                    <td>
                        <input type="button" class="remove-linha" style="background-color: tomato; width: 25px;" title="Remover linha" value="-" disabled />
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script>
        $(document).on("click", ".clona-linha", function() {
            var linha = $("#tbody").find("tr").eq(0).clone();
            linha.find('.remove-linha').attr('disabled', false);
            $("#tbody").append(linha);
        });
        $(document).on("click", ".remove-linha", function() {
            $(this).parent().parent().remove();
        });
        $(".remove-linha").attr("disabled", true);
    </script>

</body>

</html>