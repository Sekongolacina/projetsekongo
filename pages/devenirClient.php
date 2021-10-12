<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Inscription</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/jquery.steps.css">
        <script src="../lib/modernizr-2.6.2.min.js"></script>
        <script src="../lib/jquery-1.9.1.min.js"></script>
        <script src="../lib/jquery.cookie-1.3.1.js"></script>
        <script src="../build/jquery.steps.js"></script>

        <link rel="stylesheet" href="../styles.css"/>
        <link href="../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="../bootstrap.css"/>
       
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <header>

        <?php include("../includes/menuacc.php"); ?>
        <!-- Masthead-->
        <?php include("../includes/header.php"); ?>

        </header>

        <div class="content">
            <h1>Inscrivez-vous!</h1>

            <script>
                $(function ()
                {
                    $("#wizard").steps({
                        headerTag: "h2",
                        bodyTag: "section",
                        transitionEffect: "slideLeft",
                        stepsOrientation: "vertical"
                    });
                });
            </script>

            <div id="wizard">

                <h2>Première Etape</h2>
                <section>
                    <p>
                        <h2>AVERTISSEMENT !!!</h2><br><br><br>
                        Pour ouvrir votre compte, vous devez fournir les informations suivantes: <br><br>
                        1-Une pièce d'identité en cours de validité (CNI, passeport ou attestion d'identité)<br><br>
                        2-Addresse physique <br><br>
                        3-Addresse électronique <br><br>
                        4-Une photo d'identité Numerique <br><br>
                        5-Signature numérique <br><br>
                    </p>  

                </section>

                <h2>Deuxième Etape  </h2>

                <section>
                    <label for="nom">Pseudo (*)</label>
                    <input type="text" name="nom" required="required" pattern="\d" placeholder="Entrez votre pseudo" class="form-control">
                    <form method="post" enctype="multipart/form-data" action=""><br>
                         
                    <label for="nom">Mot de passe (*)</label>
                    <input type="password" name="nom" required="required" pattern="\d" placeholder="Tappez votre mot de passe" class="form-control">
                    <form method="post" enctype="multipart/form-data" action=""><br>
                    <input type="password" name="nom" required="required" pattern="\d" placeholder="confirmez le mot de passe" class="form-control">
                    <form method="post" enctype="multipart/form-data" action=""><br>                                                                               
                </section>

                <h2>Troisième Etape </h2>

                <section>
                    <label for="nom">Nature de la pièce (*)</label><br>
                    <select  name="piece"  id="piece">
                       <option value="Cni">Carte d'identité</option>
                       <option value="attestationp">Attestation d'identité</option>
                       <option value="passport">Passport</option>
                       <option value="Autre">Autre</option>
                    </select><br><br>

                    <label for="nom">N° de la pièce (*)</label>
                    <input type="text" name="nom" required="required" pattern="\d" placeholder="Entrez le numero de votre pièce" class="form-control">
                    <form method="post" enctype="multipart/form-data" action=""><br>

                    <label for="nom">Etablie le (*)</label>
                    <input type="Date" name="nom" required="required" pattern="\d" placeholder=" " class="form-control">
                    <form method="post" enctype="multipart/form-data" action=""><br>

                    <label for="nom">Valide jusqu'au (*)</label>
                    <input type="Date" name="nom" required="required" pattern="\d" placeholder=" " class="form-control">
                    <form method="post" enctype="multipart/form-data" action=""><br>

                    <label for="nom">Lieu d'établissement</label>
                    <input type="text" name="nom" required="required" pattern="\d" placeholder="Etablie à" class="form-control">
                    <form method="post" enctype="multipart/form-data" action=""><br>

                </section>

                <h2>Quatrième Etape</h2>
                <section>
                    <label for="nom">Nom (*)</label>
                    <input type="nom" name="mdp" required="required" pattern="\d" placeholder="entrez votre nom" class="form-control"><br>
                    

                    <label for="prenom">Prenom(s) (*)</label>
                    <input type="text" name="mdp" required="required" pattern="\d" placeholder="entrez votre prenom" class="form-control"><br>

                    <label for="dateNaissance">Date de Nissance (*)</label>
                    <input type="date" name="mdp" required="required" pattern="\d" placeholder="Né(e) le" class="form-control"><br>

                    <label for="lieuNaiss">Lieu de Naissance (*)</label>
                    <input type="mdp" name="mdp" required="required" pattern="\d" placeholder="à" class="form-control"><br>

                    <label for="contact">Contact(s) (*)</label>
                    <input type="integer" name="mdp" required="required" pattern="\d" placeholder="Telephone" class="form-control"><br>
                     <input type="mail" name="mdp" required="required" pattern="\d" placeholder="Entrez votre adresse mail" class="form-control"><br>    
  
                    <label for="taille">Taille</label>
                    <input type="text" name="mdp" required="required" pattern="\d" placeholder="votre taille" class="form-control"><br>

                    <label for="sexe">Sexe (*)</label><br>
                    <select name="sexee">
                    <option value=" ">Choisir</option>
                    <option value="H">Masculin</option>
                    <option value="F">Féminin</option>
                    </select><br><br>     

                </section>

                <h2>Cinquième Etape</h2>
                <section>
                    <label for="nom">Adresse (*)</label>
                    <input type="text" name="nom" required="required" pattern="\d" placeholder="votre adresse" class="form-control">
                    <form method="post" enctype="multipart/form-data" action=""><br>

                    <label for="nom">Profession</label>
                    <input type="text" name="nom" required="required" pattern="\d" placeholder="entrez votre profession" class="form-control">
                    <form method="post" enctype="multipart/form-data" action=""><br>     
                        
                    <label for="photo">Signature (*)</label><br>
                    <input type="file" id="photo" name="photo"><br><br>   

                </section>

                <h2>Septième Etape</h2>
                <section>
                    <p>
                        Félicitations, vous venez d'ouvrir votre compte, vous passerrez dans l'agence afin de finaliser l'ouverture de votre compte muni des pièces suivantes:<br><br>
                        1-Votre pièce d'identité utilisée pour l'ouverture <br>
                        2-Attestation de lieu de residence <br>
                        3-Votre bulletin de salaire <br>
                        4-02 photos d'identité de meme tirage <br>
                    </p>  

                </section>

            </div>
        </div>
    </body>

    <!-- footer-->
    <?php include("../includes/footer.php");?>
    
</html>