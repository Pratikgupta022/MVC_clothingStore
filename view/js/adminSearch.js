//Getting value from "ajax.php".
function fill(Value) {
    $('#search').val(Value);
    $('#display').hide();
}
$(document).ready(function() {
    $("#search").keyup(function() {
        var name = $('#search').val();
        var column = $('#column').val();
        if (name === "") {
            $("#display").html("");
        }
        if (column === "") {
            column='name';
        }
        else {
            $.ajax({
                type: "POST",
                url:'http://localhost/ClothingStore/index.php?action=admin&search=1',
                data: {
                    search: name,
                    column:column,
                },
                success: function(html) {
                    // console.log(html)
                    $("#display").html(html).show();
                }
            });
        }
    });
});


// $(document).ready(function (){
//     $("form").submit(function (e){
//         e.preventDefault();
//         let formData = new FormData(this);
//         console.log(formData)
//         $.ajax({
//             url:'http://localhost/ClothingStore/index.php?action=admin&search=1',
//             type:'post',
//             data:formData,
//             contentType:false,
//             processData:false,
//             success:function (res){
//                 // var formData =JSON.parse(res);
//                 console.log(res)
//             }
//         })
//     })
// })

