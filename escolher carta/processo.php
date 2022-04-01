
        <?php 
            $numero = $_POST['numero'];

            if ($numero == 1){
                echo "<h1>essa é a carta do rei</h1>";
            } 
            
            elseif ($numero == 2) {
                echo "<h1>essa carta é uma dama</h1>";
            } 
            
            elseif ($numero == 3) {
                echo "<h1>essa carta é um valete</h1>";
            } 
            
            elseif ($numero == 4) {
                echo "<h1>essa é uma carta coringa</h1>";
            } 

            elseif ($numero == 5) {
                echo "<h1>isso é uma carta de uno, como você achou isso?</h1>";
            } 
            
            elseif ($numero <> 1 || 2 || 3 || 4 || 5) {
                echo "<h1>eu disse um número de 1 a 5...</h1>";
            }
        ?>
