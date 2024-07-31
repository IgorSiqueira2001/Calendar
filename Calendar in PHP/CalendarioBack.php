<?php 
    $mesdigitado = $_POST["mes"];
    $anodigitado = $_POST["ano"];

    $dia_semana = array(
            '1'=>"Domingo", '2'=>"Segunda", '3'=>"Terça", '4'=>"Quarta",
            '5'=>"Quinta", '6'=>"Sexta", '7'=>"Sabado"
    );
    
    $num_dias = array(
            '1' => 31, '2' => 28, '3' => 31, '4' => 30, '5' => 31,
            '6' => 30, '7' => 31, '8' => 31, '9' => 30, '10' => 31,
            '11' => 30, '12' => 31
    );

    $meses = array(
            '1' => "Janeiro", '2' => "Fevereiro", '3' => "Março",
            '4' => "Abril", '5' => "Maio", '6' => "Junho", '7' => "Julho",
            '8' => "Agosto", '9' => "Setembro", '10' => "Outubro",
            '11' => "Novembro", '12' => "Dezembro"
    );
        

    //Cálculo do ano Bissexto
    //if ( ($ano%4==0 && $ano%100!=0) || $ano%400 == 0)

    $data_digitado = $anodigitado."/".$mesdigitado."/01";

    $diasemana_num = date('w', strtotime($data_digitado));
    $espaco="";

    $conta_espaco=0;
    for($i=1; $i<=$diasemana_num; $i++){
        $espaco.="<td>---</td>";
        $conta_espaco+=1;
    }
    for($i=1; $i<=12; $i++){
        
        if($mesdigitado == $i){   
            echo("<html><head>");
            echo("<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>");
            echo("<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'></script>");
            echo("</head><body>");
            echo("<div class='container mt-3'>");
            echo("<table class='table table-striped'>");
            echo("<tr>");
            echo "<tr>
                <th>D</th>
                <th>S</th>
                <th>T</th>
                <th>Q</th>
                <th>Q</th>
                <th>S</th>
                <th>S</th>
            </tr>";  
            $ndias = $num_dias[$i];
            
            for($x=$conta_espaco;$x<=($ndias+$conta_espaco-1);$x++){
                
                if($x==$conta_espaco || $x%7==0){
                    echo("<tr>" . $espaco);
                    $espaco="";
                    
                } 

                if($x%7==0){
                echo("</tr>");
                }

                if($conta_espaco>0){
                    echo "<td>".($x-$conta_espaco+1)."</td>";
                }else{
                    echo "<td>".($x+1)."</td>";
                }      
            }
        }
    }
    echo("</table><br><br>");
    echo("</div>");
    echo("</body></html>");
?>