 window.onload=showHint() ;
function showHint()
   {
        var xmlhttp;
       if (window.XMLHttpRequest)
            {
                 xmlhttp=new XMLHttpRequest();
            }
       else
           {
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
           }
      xmlhttp.onreadystatechange=function()
          {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                  {

                       document.getElementById("hint").setAttribute('src',xmlhttp.responseText);


                       $('[data-toggle="tooltip"]').tooltip();
                  }
           }
       xmlhttp.open("GET","code.php",true);
       xmlhttp.send();

}


