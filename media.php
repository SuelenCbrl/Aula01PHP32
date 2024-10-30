<?php
    $nota1 = 7.5;
    $nota2 = 5.5;
    $nota3 = 7.5;
    $nota4 = 9.5;

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    if ($media >= 7){
        echo"Media $media. Aluno Aprovado.";
    }
    else if ($media>= 4){
        echo "Media" .round($media). "Aluno de EXAME.";
    }
    else{
        echo "Media $media. Aluno REPROVADO.";
    }

?>