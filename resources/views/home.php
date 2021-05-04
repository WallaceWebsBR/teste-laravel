<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Consulta de Processos</title>
        <link href="res/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <h1>Consulta usuario: Fulano</h1><br>
            <table class="table table-hover">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Setor</th>
                    <th>Contatos</th>
                </thead>
                <tbody>
                <tr>
                    <td>${tp.id}</td> 
                    <td>${tp.nome}</td>
                    <td>${tp.cpf}</td>
                    <td>${tp.department}</td>
                    <td>${tp.tel}</td>
                    <td><button class="btn btn-primary" onClick="btnEdit(x)">Editar</button>
                    <button class="btn btn-danger" onClick="btnDel(x)">Excluir</button></td>
                </tr>
                </tbody>
            </table>
            <h1>Buscar Usuário:</h1>
            <div class="col-md-6">
            <div class="row">
                    <div class="col-sm">
                        <form method="get" action="/">
                            <label for="name">Digite o nome:</label>
                            <input class="form-control" type="text" id="name" name="name" required>
                            <br>
                            <button type="submit" class="btn btn-primary">Buscar usuário</button>    
                        </form>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>