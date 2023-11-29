<?php
include("../config.php");

try {
    session_start(); // Inicia a sessão ou acessa a sessão existente

    // Limpa todas as variáveis de sessão
    $_SESSION = array();

    // Destroi a sessão atual
    session_destroy();

    // Expira o cookie de sessão
    setcookie(session_name(), "", time() - 3600, "/");

    // Adiciona cabeçalhos para evitar problemas de cache
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Data no passado

    // Direciona para o index do site
    header("Location: " . BASEURL . "index.php");
} catch (Exception $e) {
    $_SESSION['message'] = "Ocorreu um erro: " . $e->getMessage();
    $_SESSION['type'] = "danger";

    // Em caso de erro, você pode querer redirecionar para uma página de erro ou exibir uma mensagem adequada
    header("Location: " . BASEURL . "error.php");
}
?>
