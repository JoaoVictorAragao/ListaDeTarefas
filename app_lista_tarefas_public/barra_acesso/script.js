//Fonte
/**
*	jBility
*	jBility is a free set of accessibility functions that uses JQuery.
*	By: Uriel CairÃƒÂª Balan Calvi 
*	Available on: https://github.com/urielcaire/jBility
*/
jQuery(document).ready(function( $ ){
	/*===================================================================
	*	jBility uses JsCookie to manager cookies.
	*	JsCookie is available on: https://github.com/urielcaire/jscookie
	*====================================================================*/
	function createCookie(name, value, days){
		var expires = "";
		if(days){
			var time = new Date();
			time.setTime(time.getTime()+(days*24*60*60*1000));
		}
		document.cookie = name+"="+value+expires+"; path=/";
	}

	function getCookie(name){
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
		}
		return "";
	}

	function deleteCookie(name) {
		createCookie(name,"",-1);
	}

	function checkCookie(name){
		var check = getCookie(name);
		if(check != "")
			return true;
		return false;
	}

	/*======================================
	*		jBility functions
	*======================================*/
	function addConstrast(){
        console.log('addConstrast');
        $('*').addClass('pagina-acessivel');
        $('.acess-container').addClass('f-transparent');
        $('#botao').addClass('f-transparent');
        $('#acess-icons').addClass('f-transparent');
        $('.acess-icon').addClass('f-transparent');
        $('img').addClass('f-transparent');
        $('#jbbutton').addClass('f-transparent');
    }

    function removeConstrast(){
        console.log('removeConstrast');
        $('*').removeClass('pagina-acessivel');
        $('.acess-container').removeClass('f-transparent');
        $('#botao').removeClass('f-transparent');
        $('#acess-icons').removeClass('f-transparent');
        $('.acess-icon').removeClass('f-transparent');
        $('img').removeClass('f-transparent');
        $('#jbbutton').removeClass('f-transparent');
    }

   	if(checkCookie('ccontrast')){
    	addConstrast();
   	}

   	$('#contrast').click(function(){
    	var ck = checkCookie('ccontrast');
        if(ck){
        	deleteCookie('ccontrast');
            removeConstrast();
        }else{
            createCookie('ccontrast', 'cookieContrast');
            addConstrast();
        }
   	});

	var $cElements = $("body").find("*");
	var fonts = [];

	function getFontSize() {
		for (var i = 0; i < $cElements.length; i++) {
	    	fonts.push(parseFloat($cElements.eq(i).css('font-size')));
	  	}
	}
	getFontSize();
	$("#increaseFont").on('click', function() {
		for (var i = 0; i < $cElements.length; i++) {
	    	++fonts[i];
	    	$cElements.eq(i).css('font-size', fonts[i]);
	  	}
	});

	$("#decreaseFont").on('click', function() {
		for (var i = 0; i < $cElements.length; i++) {
			--fonts[i];
			$cElements.eq(i).css('font-size', fonts[i]);
		}
	});

	$('#jbbutton').click(function(){
        $('#acess-icons').toggle(150);
    });

});

/*======================================
*  Script para pegar o domínio do site
*======================================*/
function getBaseUrl(){var hostName=location.hostname;if(hostName==="localhost"){pathname=window.location.pathname;splitPath=pathname.split('/');path=splitPath[1];baseUrl="http://"+hostName+"/"+path}else{baseUrl="http://"+hostName+"/mapa.php"}
return baseUrl}

/*======================================
*  Script para alterar fundo dos botôes
*======================================*/
window.onload = function() {
	document.getElementById("contrast").onmouseover = function()
	{
		this.style.backgroundColor = "#003e5d";
	}
	document.getElementById("contrast").onmouseout = function()
          {
              this.style.backgroundColor = "#0b5a99";
          }
	
	document.getElementById("increaseFont").onmouseover = function()
	{
		this.style.backgroundColor = "#003e5d";
	}
	document.getElementById("increaseFont").onmouseout = function()
          {
              this.style.backgroundColor = "#0b5a99";
          }

	document.getElementById("decreaseFont").onmouseover = function()
	{
		this.style.backgroundColor = "#003e5d";
	}
	document.getElementById("decreaseFont").onmouseout = function()
          {
              this.style.backgroundColor = "#0b5a99";
          }
	
	document.getElementById("teclado").onmouseover = function()
	{
		this.style.backgroundColor = "#003e5d";
	}
	document.getElementById("teclado").onmouseout = function()
          {
              this.style.backgroundColor = "#0b5a99";
          }

	document.getElementById("sitemap").onmouseover = function()
	{
		this.style.backgroundColor = "#003e5d";
	}
	document.getElementById("sitemap").onmouseout = function()
          {
              this.style.backgroundColor = "#0b5a99";
          }
};
