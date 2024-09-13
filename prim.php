<?php
    $usuario = $_POST['usuario'];
    print "<p>Nome: " . $usuario . "</p>";

    if (isset($_POST['curso'])) {
        $cursos = $_POST['curso'];
        print "Cursos: <br>";
        
        foreach ($cursos as $curso) {
            print $curso . "<br>";
        }
    } else {
        print "Nenhum curso foi selecionado.";
    } 
?>
