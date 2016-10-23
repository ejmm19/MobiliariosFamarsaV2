
$(document).ready(function() {  

 
    //select all the a tag with name equal to modal  
    $('a[class=modal]').click(function(e) {  
        //Cancel the link behavior  
        e.preventDefault();  
        //Get the A tag  
        var id = $(this).attr('href');  
     
        //Get the screen height and width  
        var maskHeight = '100%';  
        var maskWidth = '80%';  
        var top = '0%';
     
        //Set height and width to mask to fill up the whole screen  
        $('#mask').css({'width':maskWidth,'height':maskHeight,'margin-top':top});  
         
        //transition effect      
        $('#mask').fadeIn(1000);      
        $('#mask').fadeTo("slow",0.8);    
     
        //Get the window height and width  
         
     
        //transition effect  
        $(id).fadeIn(2000);  
     
    });  
     
    //if close button is clicked  
    $('.window .close').click(function (e) {  
        //Cancel the link behavior  
        e.preventDefault();  
        $('#mask, .window').hide();  
    });      
     
    //if mask is clicked  
    $('#mask').click(function () {  
        $(this).hide();  
        $('.window').hide();  
    });
    $('a[class=close]').click(function(e){
        var clear = 'none';
        $('#est,#sill').css({'display':clear});
    });
    $('a[id=mostrar]').click(function(e){
        var block = 'block';
        var width = '140%';
        var top = '5%';
        $('#sli').css({'display':block,'width':width,'margin-top':top});
    });
    $('a[id=sillas]').click(function(e){
        var block = 'block';
        var width = '140%';
        var top = '5%';
        $('#sill').css({'display':block,'width':width,'margin-top':top});
    });
    //----------------------------------------------
    $('h5[id=cerrar]').click(function(e) {   
        var top = 'none';
             
        //Set height and width to mask to fill up the whole screen  
        $('.modl').css({'display':top});  
         
        //transition effect      
    });  
    $('a[id=sigue]').click(function(e) {   
        var top = 'block';
             
        //Set height and width to mask to fill up the whole screen  
        $('.modl').css({'display':top});  
         
        //transition effect      
    });  

    //-----------------------------------------------

    //2   

     
});  