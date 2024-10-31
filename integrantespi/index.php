<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Integrador</title>
    <link rel="stylesheet" href="style.css">
    
    
</head>
<body>
    <h2>P.I. -> INTEGRANTES</h2>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
         
            $integrantes = [
                [
                    'nome' => 'xavier',
                    'email' => 'wellington54098716@aluno.ms.senac.br',
                    
                ],
                [
                    'nome' => 'rodrigo',
                    'email' => '@aluno.ms.senac.br',
                    
                ],
                [
                    'nome' => 'jonatan',
                    'email' => '@aluno.ms.senac.br',
                    
                ],
                [
                    'nome' => 'mateus',
                    'email' => '@aluno.ms.senac.br',
                    
                ],
                [
                    'nome' => 'joao',
                    'email' => '@aluno.ms.senac.br',
                    
                ],
                [
                    'nome' => 'carlos',
                    'email' => '@aluno.ms.senac.br',
                    
                ],
                [
                    'nome' => 'henrique',
                    'email' => '@aluno.ms.senac.br',
                    
                ],
                [
                    'nome' => 'otavio',
                    'email' => '@aluno.ms.senac.br',
                    
                ],
                [
                    'nome' => 'jessica',
                    'email' => '@aluno.ms.senac.br',
                    
                ],
                [
                    'nome' => 'erika',
                    'email' => '@aluno.ms.senac.br',
                    
                ],
                [
                    'nome' => 'frederico',
                    'email' => '@aluno.ms.senac.br',
                    
                ],
                [
                    'nome' => 'anuar',
                    'email' => '@aluno.ms.senac.br',
                    
                ],
                [
                    'nome' => 'sam',
                    'email' => '@aluno.ms.senac.br',
                    
                ],
                [
                    'nome' => 'lucas',
                    'email' => '@aluno.ms.senac.br',
                    
                ],
              
            ];

            
            foreach ($integrantes as $integrante) {
            echo "<tr>
                        <td>{$integrante['nome']}</td>
                        <td>{$integrante['email']}</td>
                        
                      </tr>";
            }

            
            ?>
        </tbody>
    </table>
</body>
</html>
