//on hover write and remove text of contact us icons
function writeAddress(){
document.getElementById("text_under_contact_icons").innerHTML= "Chakwal, Punjab, Pakistan";
}
function writeEmail(){
document.getElementById("text_under_contact_icons").innerHTML= "arbabhussain168@gmail.com";
}
function writePhone(){
document.getElementById("text_under_contact_icons").innerHTML= "+92 3456640398";
}
function removeText(){
document.getElementById("text_under_contact_icons").innerHTML="";
}

//jquery
$(document).ready(function(){
    
// btt button starts
   //Get the button
        // var mybutton = document.getElementById("btt");

        //  When the user scrolls down 20px from the top of the document, show the button
        // window.onscroll = function() {
        //     scrollFunction()
        // };

        // function scrollFunction() {
        //     if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        //         $('#btt').fadeIn();
        //     } else {
        //         $('#btt').fadeOut();
        //     }
        // } 

// animate on scroll initializing
    AOS.init();
    
// shadow under navbar on scroll
    $(window).scroll(function() {
            if ($(window).scrollTop() > 20 ) {
                $('#navbar').addClass('shadow_navbar');
            } else {
                $('#navbar').removeClass('shadow_navbar');
            }
        });
});

// When the user clicks on the button, scroll to the top of the document
// function topFunction() {
//     document.body.scrollTop = 0;
//     document.documentElement.scrollTop = 0;
// };


$(document).on('click', '#btn-send', function()
{
    var name = $("#txt_name").val();
    var email_whatsapp = $("#txt_email").val();
    var message = $("#txt_msg").val();
    if(name == '' || email_whatsapp == '' || message == '')
    {
       swal("Missing fields!", "Please fill all fields!", "warning");
    } 
    else
    {
        $.ajax(
            {
                url: 'backend.php',
                type:'post',
                data:{
                    from_name:name,
                    from_email:email_whatsapp,
                    from_message:message
                },
                success: function(response)
                {
                    if(response == 'sent')
                    {
                        swal("Email Sent!", "Your email has been sent!", "success");
                        $('#txt_name').val('');
                        $('#txt_email').val('');
                        $('#txt_msg').val('');
                    }
                    else
                    {
                        swal("Email Not Sent!", "Something went wrong!", "error");
                    }
                }
            })
    }
})