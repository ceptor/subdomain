/**
 * Created by box on 26-апр-15.
 */


$(document).ready(function(){
    $(".stat1").click(function(){
        $('.loginin').toggle();
    });

    /*$('.stat1').mouseover(function(){
        $('.loginin').show();
    }).mouseout(function(){
        $('.loginin').hide();
    });*/
});

$('.stat1').mouseover(function(){
    alert('mouse over');
    $('.loginin').show();
}).mouseout(function(){
    $('.loginin').hide();
});