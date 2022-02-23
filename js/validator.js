function valida_aspirante(){
    var js_rfc = document.getElementById("f_rfc").value.trim();
    var js_nom = document.getElementById("f_nombre").value.trim();
    var js_pat = document.getElementById("f_paterno").value.trim();
    var js_mat = document.getElementById("f_materno").value.trim();


    var js_emp = document.getElementById("f_id_empresa").value.trim();
    var js_tel = document.getElementById("f_telefono").value.trim();
    var js_ema = document.getElementById("f_email").value.trim();
    var js_cur = document.getElementById("f_id_curso").value.trim();

    var pattern=/^[a-zA-Z]{4}(\d{6})(([a-zA-Z0-9]){3})?$/;
    var pattern2=/^[a-zA-Z]{3,30}?$/;
    var pattern3=/^[0-9]{10}?$/;
    var emailPattern=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    var pwdPattern=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;


    if(js_rfc.length== 0){
        alert("Error: el rfc no puede ir vacio");
        
        //bootbox.alert("Error: el rfc no puede ir vacio.")
        return false;
    } else if (js_nom.length == 0){
        alert("Error: el nombre no puede ir vacio");
        return false;
    }else if (js_pat.length == 0){
        alert("Error: el apellido paterno no puede ir vacio");
        return false;
    }else if(js_emp==0){
        alert("Error: Debe seleccionar en la lista una empresa");
        return false;
    }else if(js_tel.length==0){
        alert("Error: El telefono debe ser obligatorio");
        //swal.fire({icon:'error',title:'',text='',footer=''});
        return false;
    }else if(js_ema.length==0){
        alert("Error: El correo es obligatorio");
        return false;
    }else if(js_cur==0){
        alert("Error: Debe seleccionar en la lista un curso");
        return false;
    }else if(!pattern2.test(js_nom) || !pattern2.test(js_pat)){
        alert('error: el apellido paterno,materno y nombre no pueden llevar numeros y minimo son 3 caracteres');
        return false;

    }else if(!pattern3.test(js_tel)){
        alert('error: el telefono no cumple con el formato requerido.');
        return false;

    }else if(!emailPattern.test(js_ema)){
        alert('error: el email no cumple con el formato requerido');
        return false;

    }else if(!pattern.test(js_rfc)){
        alert('error: el rfc esta mal formado, lo correcto es un patron como el siguiente:SASA980518RR2');
        return false;

    }else if (js_mat.length == 0){
        //alert("Error: el apellido materno no puede ir vacio");
        //Swal.fire('Apellido materno','verifique el apellido materno');
        Swal.fire({
            title:'El apellido materno esta vacio, deseas continuar?',
            icon:'warning',
            showCancelButton:true,
            cancelButtonText:'Cancelar',
            confirmButtonColor:'#3085d6',
            cancelButtonColor:'#d33',
            confirmButtonText:'Continuar'
        }).then((result)=>{
            if(result['value']==true){
                alert('confirmo');
                document.getElementById('forma').submit();
            }else{
                //document.getElementById('f_materno').focus();
                $('#f_materno').focus();
            }
        });
        
    }else{
        alert('confirmo');
        document.getElementById('forma').submit();
        return true;
        
    }
}

function valida_login(){
    var js_us=document.getElementById("f_user").value.trim();
    var js_pw=document.getElementById("f_pwd").value.trim();


    if(js_us.length==0 || js_pw.length==0){
        Swal.fire({
            icon:'error',
            title:'Usuario y password',
            text:'El usuario y password deben ir llenos'
        });
        return false;

    }else if(js_us.length<8 || js_pw.length<8){
        Swal.fire({
            icon:'error',
            title:'Usuario y password',
            text:'El usuario y password deben contener mas de 8 caracteres'
        });
        return false;
    }else if(!pwdPattern.test(js_pw)){
        Swal.fire({
            icon:'error',
            title:'Password',
            text:'should contain at least one digit \n should contain at least one lower case'
        });
        return false;
    }

    return false;
}