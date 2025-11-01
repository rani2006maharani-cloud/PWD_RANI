$ (document).ready (function (){

    $('#btn').on ('change',function(){
        if($(this).is(':checked')){
            $('#password').attr('type','text');
        }else{
            $('#password').attr('type','password');
        }
        


    });





})