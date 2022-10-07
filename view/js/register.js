
$(document).ready(function (){
    $("form").submit(function (e){
        e.preventDefault();
        let formData = new FormData(this);
        // console.log(formData)
        $.ajax({
            url:'http://localhost/ClothingStore/index.php?action=register',
            type:'post',
            data:formData,
            contentType:false,
            processData:false,
            success:function (res){
                var formData =JSON.parse(res);
                if (formData.emailExists){
                    $("#alertmsg").css("display","block")
                    $("#alertmsg").addClass("alert-danger");
                    $("#alertmsg").text("Email already exists")
                }else if (formData.mpass){
                    $("#alertmsg").css("display","block")
                    $("#alertmsg").addClass("alert-danger")
                    $("#alertmsg").text("Passwords do not match")
                }
                else if(formData.statusCode=='admin'){
                    console.log("move to admin")
                    window.location.href = "http://localhost/ClothingStore/index.php?action=admin";
                }
                else if(formData.statusCode=='user'){
                    console.log("move to user")
                    window.location.href = "http://localhost/ClothingStore/index.php?action=login";
                }
                // else if(formData.statusCode==200){
                //     $("#alertmsg").css("display","block")
                //     $("#alertmsg").removeClass("alert-danger")
                //     $("#alertmsg").addClass("alert-success")
                //     $("#alertmsg").text("Form inserted successfully!!")
                //     document.getElementById("register").reset();
                // }
                else{
                    $("#alertmsg").css("display","block")
                    $("#alertmsg").addClass("alert-danger")
                    $("#alertmsg").text("Every column is required")
                }
                // console.log(formData)
            }
        })
    })
})

