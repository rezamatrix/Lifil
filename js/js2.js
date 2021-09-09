window.onload =function() {showHint();}; 
function f(){
var r=document.getElementById('txtHint').getAttribute('lang');
return r;
}
function showHint(p)
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
                       document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
                       document.getElementById('txtHint').setAttribute('lang',p);
                       document.getElementById('r'+p).setAttribute('class','btn btn-info');
                       var rr=document.getElementById('r'+p).getAttribute('lang');
                        for(var i=rr;i>=0;i--){
                            if(i != p ){
                         document.getElementById('r'+i).setAttribute('class','btn white');
                           }
                        }

                       $('[data-toggle="tooltip"]').tooltip();
                  }
           }
       xmlhttp.open("GET","hint2.php?p="+p,true);
       xmlhttp.send();

}


