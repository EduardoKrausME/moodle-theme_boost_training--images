<?php
/**
 * create-json.php
 * Lista todos os arquivos PNG no diretório atual e salva em um JSON.
 */

// Get all files with .png extension (case insensitive)
$files = array_merge(
    glob('*.png', GLOB_BRACE),
    glob('*/*.png', GLOB_BRACE),
    glob('*/*/*.png', GLOB_BRACE),
);

$jsonContent = json_encode($files, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

// Save to images.json file
file_put_contents('images.json', $jsonContent);

// Output for confirmation
echo count($files) . " images.\n";
