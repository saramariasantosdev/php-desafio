<?php

$file = fopen("dados-user.csv", "r");
$header = fgetcsv($file,0,',','"','\\');
$newData[] = $header;

while(($line = fgetcsv($file,0,',','"','\\')) != false){

    if(!empty($line[3])){
        echo "Pessoa já verificada: {$line[0]}\n";
    }elseif((int) $line[1] >= 18){
        $line[3] = "Liberado";
    }else{
        $line[3] = "Não liberado";
    }

    $newData[] = $line;
}

fclose($file);

$newFile = fopen("dados-user-atualizados.csv", "w");

foreach($newData as $line){
    fputcsv($newFile, $line, ',', '"', '\\');
}

fclose($newFile);

echo "Arquivo atualizado com sucesso";