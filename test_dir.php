<?php
// Caminho do diretório que você quer testar
$directory = 'core/app/sts/Models'; // Altere para o caminho que você quer testar

// Verifica se o diretório existe e se é acessível
if (is_dir($directory)) {
    echo "O diretório $directory existe e está acessível.";
} else {
    echo "O diretório $directory não foi encontrado ou não está acessível.";
}
?>