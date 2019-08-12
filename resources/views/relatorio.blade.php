<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="my-5 text-center">Relatório de Alunos</h3>
        <table class="table text-center">
                <thead>
                  <tr>
                    <th>Nome do Aluno</th>
                    <th>Curso</th>
                    <th>Professor</th>
                  </tr>
                </thead>
                <tbody >
                    @foreach ($alunos as $aluno)
                    <tr>
                        <td>{{$aluno->nome}}</td>
                        <td>{{$aluno->nome_curso}}</td>
                        <td>{{$aluno->nome_professor}}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
    </div>
</body>
</html>
