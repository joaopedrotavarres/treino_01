<?php include '../templates/header.php'; ?>
    <div class="container text-center">
        <h1 class="mb-3">Será que meus dados vazaram?</h1>
        <p class="lead">Digite seu e-mail ou CPF para verificar se seus dados estão expostos.</p>

        <form action="consulta.php" method="POST" class="mt-4">
            <div class="mb-3">
                <input type="text" name="dado" class="form-control text-center" placeholder="Digite seu e-mail ou CPF" required>  
            </div>
            <button type="submit" class="btn btn-primary">Consultar</button>
        </form>
    </div>
<?php include '../templates/footer.php'; ?>