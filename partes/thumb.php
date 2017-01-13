<?php
$preco = $values[$w][0]['preco'];
for($x = 1; $x < count($values[$w]); $x++){

    if ($values[$w][$x]['hidden'] == ''){
        echo '
        <div class="'. $config .' ">
          <div class="thumbnail">
                <img src="plantas/'. $w .'/'. $values[$w][$x]['imagem'] .'" alt="'. $values[$w][$x]['alt'] .'">
             <h2 class="text-center">'. $values[$w][$x]['nome'] .'</h2>';

        if ($preco == 1) {
            echo'
             <p class="text-center preco2">R$: '. $values[$w][$x]['preco'] .'</p>';
        } else if($preco == 2) {
            echo'
            <table class="table table-striped text-center" >
                 <tr>
                    <td>Size</td>
                    <td>Price (R$)</td>
                </tr>
                <tr>
                    <td>P</td>
                    <td>'. $values[$w][$x]['p1'] .'</td>
                </tr>
                <tr>
                    <td>M</td>
                    <td>'. $values[$w][$x]['p2'] .'</td>
                </tr>
            </table>';
        } else {
             echo'
            <table class="table table-striped text-center" >
                 <tr>
                    <td>Size</td>
                    <td>Price (R$)</td>
                </tr>
                <tr>
                    <td>P</td>
                    <td>'. $values[$w][$x]['p1'] .'</td>
                </tr>
                <tr>
                    <td>M</td>
                    <td>'. $values[$w][$x]['p2'] .'</td>
                </tr>
                <tr>
                    <td>G</td>
                    <td>'. $values[$w][$x]['p3'] .'</td>
                </tr>
            </table>';
        }
        
        echo'
    
           <div class="caption">
</div>
          </div>
        </div>';
    }
}

