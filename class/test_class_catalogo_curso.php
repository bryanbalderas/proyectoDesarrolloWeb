<?php
    include('class_catalogo_curso_dal.php');

    $obj_curso=new catalogo_curso_dal;

    $resultado=$obj_curso->datos_por_id(1);

    if($resultado==null){
        echo "no existe el curso";
    }else{
        echo '<pre>';
        print_r($resultado);
        echo '</pre>';
    }

    $resultado2=$obj_curso->obtener_lista_cursos();
    if($resultado2==null){
        echo '<br/>No hay lista';
    }else{
        echo '<pre>';
        print_r($resultado2);
        echo '</pre>';
    }

    $obj_det=new catalogo_curso(1,"progra2",null);
    $flag_ins=$obj_curso->inserta_curso(($obj_det));
    if($flag_ins==1){
        echo "<br>Curso insertado correctamente";
    }else{
        echo "<br>Curso no agregado, vuelva a intentar";
    }

    $obj_det=new catalogo_curso(5,"testUpdate",null);
    $flag_up=$obj_curso->actualiza_curso(($obj_det));
    if($flag_up==1){
        echo "<br>Curso actualizado correctamente";
    }else{
        echo "<br>Curso no actualizado, vuelva a intentar";
    }
?>