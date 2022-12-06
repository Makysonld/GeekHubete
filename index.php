<?php

    $paginas = ['home'=>'Bem vindo a página ','sobre'=>'Site em desenvolvimento sobre a cultura Geek.', 'contato'=>''];
    
    $paginas['contato'] = '<form> <input type="text" placeholder= "seu nome..." /> <br />
    <input type="text" placeholder= "Seu email  " />       
    
    </form>';
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GeekHubETE</title>
    <style type= "text/css">    
         *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
         }

         header{
            background-color:#069;
            padding: 8px 10px;
            text-align: center;
         }

         a{
            display: inline-block;
            margin: 0 20px;
            color: black;
            font-size: 17px ;

         }
         </style>

</head>
<body>
    <header>
        <?php   
            foreach ($paginas as $key => $value) {
               echo '<a href="?page='.$key.'">'. ucfirst($key).'</a>';
            }
        ?>

    </header>
    <section>
        <h2>
            <?php

            $pagina = (isset($_GET['page']) ? $_GET['page'] : 'home');

                if (!array_key_exists($pagina, $paginas)){
                    $pagina = 'home';
                }

                echo ucfirst($pagina);

            ?>
        </h2>
        <p><?php echo $paginas[$pagina]; ?>
        </p>
    </section>
</body>
</html>