
        <?php 


            $nome = $_POST['nome'];
            $ano = $_POST['ano'];

            $idade = 2022 - $ano;

            echo "<h1>Oi {$nome}, você tem {$idade} anos de idade!</h1>";

            
        ?>
