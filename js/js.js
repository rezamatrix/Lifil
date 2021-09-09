window.setInterval('showHint(f())',1000) ;
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
                       document.getElementById('r'+p).setAttribute('class','btn btn-sm red');
                       document.getElementById('rr'+p).setAttribute('class','btn btn-sm red');
                       var rr=document.getElementById('r'+p).getAttribute('lang');
                        for(var i=rr;i>=0;i--){
                            if(i != p ){
                         document.getElementById('r'+i).setAttribute('class','btn btn-sm white');
                         document.getElementById('rr'+i).setAttribute('class','btn btn-sm white');
                           }
                        }

                       $('[data-toggle="tooltip"]').tooltip();
                  }
           }
       xmlhttp.open("GET","hint.php?p="+p,true);
       xmlhttp.send();

}

function del(str)
   {

        var xmlhttp;

        if (str.length==0)
            {
                 document.getElementById("respons").innerHTML="";
                 return;
            }
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
                       document.getElementById("respons").innerHTML=xmlhttp.responseText;
                  }
           }
       xmlhttp.open("POST","del.php",true);
       xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xmlhttp.send("sdr="+str);

       }


