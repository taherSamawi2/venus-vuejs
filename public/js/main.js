$(function(){

    $('.hamburger').click(function () {
        $('.wrapper').toggleClass('collapse-sidebar');

    });


    var header = $('.navbar');


    $(document).on('scroll', function()
    {
        setHeader();
    });

    /*

    2. Set Header

    */

    function setHeader()
    {
        if($(window).scrollTop() > 91)
        {
            header.addClass('scrolled');
        }
        else
        {
            header.removeClass('scrolled');
        }
    }

    $(".li-settings").click(function(){
        $(".card-settings ").toggle();
    });

    $('.deleteItem').on('submit',function () {
        if(confirm('Are you sure you want to delete it?')){
            return true;
        }
        else {
            return false;
        }

    });

    $('.venus-data-table').DataTable();


    $(".btn-success").click(function(){
        var html = $(".clone").html();
        $(".increment").after(html);
    });

    $("body").on("click",".btn-remove-file",function(){
        $(this).parents(".control-group").remove();
    });



});
