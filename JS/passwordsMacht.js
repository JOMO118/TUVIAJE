
$(document).ready(function () {
    $(document).on('keyup','#confirm_new_password',function(){
        if($('#new_password').val()!=""){
            passwordMatch($(this).val())
        }
    });
});

function passwordMatch(value){
   if(value != $('#new_password').val()){
       $('#msg-password').removeClass("d-none");
   }else{
        $('#msg-password').addClass("d-none");
   }
}
