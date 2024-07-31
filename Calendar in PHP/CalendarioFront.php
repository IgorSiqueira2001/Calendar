<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calendario em PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <form action="CalendarioBack.php" method="POST">
            <div class="container-fluid p-5 bg-primary text-white text-center">
                <h2>Calendário em PHP</h2><br>
                <label>Informe o mês desejado:</label>
                <input type="number" name="mes" value=""><br>
                <label>Informe o ano desejado:</label>
                <input type="number" name="ano" value="">
                <input type="submit" value="Mostrar">
            </div>
        </form>
    </body>
</html>