<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GereCurso</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>

    <body>
        <?php
        include_once './topo.php';
        ?>
            <div class="titulo_opcoes">
                <font color="black">Cadastra alunos
            </div>
            
                    <form action="cadastraAluno.php" method="POST">
                        
                        <table bgcolor="darksalmon" align=center border=2px height = 100 wdith= 200 cellspacing=5 cellpadding= 5>
                            
                            <tr>
                                <td>
                                    Nome: <input type="text" placeholder="Nome" name="nome_aluno">
                                </td>
                                <td>
                                    Sobrenome: <input type="text" placeholder="Sobrenome" name="sobrenome_aluno">
                                </td>
                                <td>
                                    E-mail: <input type="email" placeholder="E-mail" name="email_aluno">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    Data de nascimento: <input type="date" placeholder="Data" name="data_nasc">
                                </td>
                                <td>
                                    Rua: <input type="text" placeholder="Rua" name="rua_aluno">
                                </td>
                                <td>
                                    Número: <input type="number" placeholder="Numero" name="numero">
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    Cidade: <input type="text" placeholder="Cidade" name="cidade_aluno">
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    Estado: <select name="estado_professor" placeholder="Estado">
                                <option selected disabled="disabled">Estado</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                                </td>
                            </tr>
                            
                        </table>
                        <br>
                        <p align="center"><input type="submit" value="Registrar Aluno"></p>
                        
            <?php
            include_once './rodape.php';
            ?>
                        
    </body>
</html>