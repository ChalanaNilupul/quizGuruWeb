function menu(){

    var menu = document.getElementById('mobNav');

    menu.classList.toggle('active')

   

    if($('#mobNav').css('left') === '0px'){
        $('.bar2').css('width','30px');
        $('.bar2').css('transform','rotate(0deg)');
        $('.bar1').css('transform','rotate(0deg)');
        $('#mobLinks').css('display','none')
    }
    else{
        $('.bar2').css('width','40px');
        $('.bar2').css('transform','rotate(-45deg)');
        $('.bar1').css('transform','rotate(45deg)');
        setTimeout(() => {
            $('#mobLinks').css('display','flex')
        }, 300);
    }
 }
