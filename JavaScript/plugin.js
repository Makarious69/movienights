$(document).ready(function()
{
    $("#my-tabs li").click(function()

    {   

        var myID=$(this).attr("id");

        $(this).removeClass("inactive").siblings().addClass("inactive");

        $(".myContainer div").hide();


        $("#"+myID+"-content").fadeIn("1000")

    });

    
});