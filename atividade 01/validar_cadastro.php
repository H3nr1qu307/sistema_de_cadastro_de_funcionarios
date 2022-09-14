<?php
extract($_POST);
if(file_exists("Funcionarios/$id.txt")){
    echo "Esse ID já está sendo utilizado";
} else {
    $arquivo = fopen("Funcionarios/$id.txt", 'a+');
    fwrite($arquivo, "Id: $id\nNome: $nome\nCargo: $cargo\nSalário: R$ $salario\nDependentes: $dependentes\n");
    fclose($arquivo);
}
$read = scandir('Funcionarios');
array_shift($read);
array_shift($read);
foreach($read as $a){
    echo '<a href=informacoes_funcionarios.php?id='.$a.'>'.$a.'<br>';
}
echo "<p><a href='cadastrar_funcionarios.php'>Retornar a página anterior</a></p>";