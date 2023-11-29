<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title>Bem-vindo(a)</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo BASEURL; ?>lf_icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }

        .btn-light {
            color: #FFFFFF;
            background-color: #999999;
            border-color: #999999;
        }

        .btn-light:hover {
            color: #FFFFFF;
            background-color: #666666;
            border-color: #666666;
        }

        header, #actions {
            margin-top: 10px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/awesome/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-xxl navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo BASEURL; ?>"><i class="fa-solid fa-house-chimney"></i> HOME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-users"></i> Clientes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers/add.php"><i class="fa-solid fa-user-plus"></i> Adicionar</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers/"><i class="fa-solid fa-users"></i> Gerenciar Clientes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-seedling"></i> Plantas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo BASEURL; ?>plantas/add.php"><i class="fa-solid fa-plus"></i>Adicionar Plantas</a></li>
                            <li><a class = "dropdown-item" href="<?php echo BASEURL; ?>plantas/"><i class="fa-solid fa-rotate"></i> Gerenciar Plantas</a></li>
                        </ul>
                    </li>

                    <?php if (isset($_SESSION['user'])): //Verifica se está logado ?>
                        <?php if ($_SESSION['user'] == "admin"): //Verifica se está logado como admin ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user-lock"></i> Usuários
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="<?php echo BASEURL; ?>usuarios/add.php"><i class="fa-solid fa-user-tie"></i> Adicionar</a></li>
                                    <li><a class="dropdown-item" href="<?php echo BASEURL; ?>usuarios/"><i class="fa-solid fa-user-lock"></i> Gerenciar Usuários</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                    <li class="nav-item" id="nav-right">
                        <?php if (isset($_SESSION['user'])): ?>
                            <a class="nav-link" href="<?php echo BASEURL; ?>inc/logout.php">
                                Bem-vindo <?php echo $_SESSION['user'] ?> 
                                <i class="fa-solid fa-right-from-bracket"></i>
                                
                                Sair
                            </a>
                        <?php else: ?>
                            <a class="nav-link" href="<?php echo BASEURL; ?>inc/login.php">
                            <i class="fa-solid fa-right-to-bracket"></i> Login
                            </a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">

