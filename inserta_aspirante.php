<?php
    $rfc=isset($_POST["f_rfc"]) ? $rfc=strtoupper($_POST["f_rfc"]) : $rfc=null;
    $nom=isset($_POST["f_nombre"]) ? $rfc=strtoupper($_POST["f_nombre"]) : $nom=null;
    $pat=isset($_POST["f_paterno"]) ? $pat=strtoupper($_POST["f_paterno"]) : $pat=null;
    $mat=isset($_POST["f_materno"]) ? $mat=strtoupper($_POST["f_materno"]) : $mat=null;
    $emp=isset($_POST["f_id_empresa"]) ? $emp=strtoupper($_POST["f_id_empresa"]) : $emp=null;
    $tel=isset($_POST["f_telefono"]) ? $tel=strtoupper($_POST["f_telefono"]) : $tel=null;
    $ema=isset($_POST["f_email"]) ? $ema=strtoupper($_POST["f_email"]) : $ema=null;
    $cur=isset($_POST["f_id_curso"]) ? $cur=strtoupper($_POST["f_id_curso"]) : $cur=null;

    print "<table>
        <thead>
            <tr>
                <th>rfc</th>
                <th>nombre</th>
                <th>paterno</th>
                <th>materno</th>
                <th>empresa</th>
                <th>telefono</th>
                <th>email</th>
                <th>curso</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>".$rfc."</td>
                <td>".$nom."</td>
                <td>".$pat."</td>
                <td>".$emp."</td>
                <td>".$tel."</td>
                <td>".$ema."</td>
                <td>".$cur."</td>
            </tr>
        </tbody>
    </table>";

?>