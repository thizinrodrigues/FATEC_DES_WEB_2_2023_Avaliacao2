
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro - PHP + MySQL</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Cadastro</h3>
                    <div class="box">
                        <form action="insert.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="id" type="text" class="input is-large" placeholder="id" autofocus>
                                </div>
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="nome" autofocus>
                                </div>
                                <div class="control">
                                    <input name="rg" type="text" class="input is-large" placeholder="rg" autofocus>
                                </div>
                                <div class="control">
                                    <input name="telefone" type="text" class="input is-large" placeholder="telefone" autofocus>
                                </div>
                                <div class="control">
                                    <input name="escola" type="bolean" class="input is-large" placeholder="escola" autofocus>
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>