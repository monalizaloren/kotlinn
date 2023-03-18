<?php 

$contador = 0;

$palavras = array("areio", "risao", "clube"); 
$palavraSorteada = $palavras[array_rand($palavras, 1)];
$listaNova = str_split($palavraSorteada, 1);

echo "$palavraSorteada\n";


// looping: 5 tentativas
while($contador < 5){

    // usuário informa a plavra
    $palavraInformada = readline("");
    $listaPalavra = str_split($palavraInformada, 1);

    if(!in_array($palavraInformada, $palavras)){
        echo"palavra inexistente. tente novamente! \n";
        continue;
    } else{
        if($palavraInformada == $palavraSorteada){
            echo"acertou!! palavra: $palavraSorteada" ;
            break;
        } else{
            $condicao;
            foreach($listaNova as $letras){
                foreach($listaPalavra as $letraInfo){
                    if($letras == $letraInfo){
                        if(array_search($letras, $listaNova) == array_search($letraInfo, $listaPalavra)){
                            $condicao = 0;
                            echo $condicao;
                            break;
                        } else{ 
                            $condicao = 1;
                            echo $condicao;
                            break;
                        }
                    } 
                };
            
            }
        }
    }

    
    $contador++;
}


