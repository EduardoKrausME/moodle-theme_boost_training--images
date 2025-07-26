<?php
/**
 * create-json.php
 * Lista todos os arquivos PNG no diretório atual e salva em um JSON.
 */

// Pega todos os arquivos com extensão .png (case insensitive)
$files = array_merge(
    glob( '*.png', GLOB_BRACE),
    glob( '*/*.png', GLOB_BRACE),
    glob( '*/*/*.png', GLOB_BRACE),
);

$jsonContent = json_encode($files, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

// Salva no arquivo images.json
file_put_contents('images.json', $jsonContent);

// Saída para confirmação
echo "Arquivo images.json criado com sucesso com " . count($files) . " imagens PNG.\n";
