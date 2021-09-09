

this.screenshotPreview=function(){function a(a){if(a<370){xOffset=-30}else{xOffset=358}}
xOffset=370;yOffset=-300;s_width=487;s_min=300;jQuery("a.screenshot-preview").hover(function(b){this.t=this.title;this.title="";var c=this.t!==""?"<br />"+this.t:"";var titr="";if(jQuery(this).attr("data-titr")==undefined){titr=''}else{titr=jQuery(this).attr("data-titr")}
var titrsmall="";if(jQuery(this).attr("data-titrsmall")==undefined){titrsmall=''}else{titrsmall=jQuery(this).attr("data-titrsmall")}
var price="";if(jQuery(this).attr("data-price")==undefined){price=''}
else if($(this).attr("data-price")=='free'){price='<span class="num" style="font-size:18px;color:#51ac79;font-weight:bold;">رایگان</span>'}
else if($(this).attr("data-price")=='0'){price='<span class="num" style="font-size:18px;color:#51ac79;font-weight:bold;">رایگان</span>'}
else{price='<span class="num">'+jQuery(this).attr("data-price")+'</span> تومان'}
jQuery("body").append('<p id="screenshot"><img src="'+$(this).attr("data-preview")+'" width="452" height="230" /><span class="titr">'+titr+'</span><span class="price">'+price+'</span><span class="titrsmall">'+titrsmall+'</span></p>');var d=$(document).width(),e=d-(b.pageX+yOffset+s_width);if(b.pageX<=s_min){jQuery("#screenshot").css("left","0px")}else{if(e<=-1){jQuery("#screenshot").css("left",d-s_width+"px")}else{jQuery("#screenshot").css("left",b.pageX+yOffset+"px")}}
a(b.clientY);if(b.clientY<=xOffset){jQuery("#screenshot").css("top",b.pageY+xOffset+"px")}else{jQuery("#screenshot").css("top",b.pageY-xOffset+"px")}
jQuery("#screenshot").fadeIn("fast")},function(){this.title=this.t;jQuery("#screenshot").remove()});jQuery("a.screenshot-preview").mousemove(function(b){var c=$(document).width(),d=c-(b.pageX+yOffset+s_width);if(d>=1&&b.pageX>s_min){jQuery("#screenshot").css("left",b.pageX+yOffset+"px")}
a(b.clientY);jQuery("#screenshot").css("top",b.pageY-xOffset+"px")})}
screenshotPreview()
;!function(a,b){"use strict";function c(){if(!e){e=!0;var a,c,d,f,g=-1!==navigator.appVersion.indexOf("MSIE 10"),h=!!navigator.userAgent.match(/Trident.*rv:11\./),i=b.querySelectorAll("iframe.wp-embedded-content");for(c=0;c<i.length;c++){if(d=i[c],!d.getAttribute("data-secret"))f=Math.random().toString(36).substr(2,10),d.src+="#?secret="+f,d.setAttribute("data-secret",f);if(g||h)a=d.cloneNode(!0),a.removeAttribute("security"),d.parentNode.replaceChild(a,d)}}}var d=!1,e=!1;if(b.querySelector)if(a.addEventListener)d=!0;if(a.wp=a.wp||{},!a.wp.receiveEmbedMessage)if(a.wp.receiveEmbedMessage=function(c){var d=c.data;if(d.secret||d.message||d.value)if(!/[^a-zA-Z0-9]/.test(d.secret)){var e,f,g,h,i,j=b.querySelectorAll('iframe[data-secret="'+d.secret+'"]'),k=b.querySelectorAll('blockquote[data-secret="'+d.secret+'"]');for(e=0;e<k.length;e++)k[e].style.display="none";for(e=0;e<j.length;e++)if(f=j[e],c.source===f.contentWindow){if(f.removeAttribute("style"),"height"===d.message){if(g=parseInt(d.value,10),g>1e3)g=1e3;else if(~~g<200)g=200;f.height=g}if("link"===d.message)if(h=b.createElement("a"),i=b.createElement("a"),h.href=f.getAttribute("src"),i.href=d.value,i.host===h.host)if(b.activeElement===f)a.top.location.href=d.value}else;}},d)a.addEventListener("message",a.wp.receiveEmbedMessage,!1),b.addEventListener("DOMContentLoaded",c,!1),a.addEventListener("load",c,!1)}(window,document);
;



var owl = $('.alone-slider');owl.owlCarousel({
	autoplay:true,
	autoplayTimeout:4000,
	lazyLoad:true,
	loop:true,
	merge:true,
	rtl:true,
	items:1,
	nav:true,
	margin:0,
	navText:["<i class='fa fa-angle-right'></i>","<i class='fa fa-angle-left'></i>"]
})


var owl = $('.vips');owl.owlCarousel({
	autoplay:true,
	autoplayTimeout:2500,
	lazyLoad:true,
	merge:true,
	rtl:true,
	loop:true,
	nav:true,
	margin:0,
	navText:["<i class='fa fa-angle-right'></i>","<i class='fa fa-angle-left'></i>"],
    responsive:{
        10000:{
            items:10
        },
        1000:{
            items:9
        },
        960:{
            items:8
        },
        900:{
            items:7
        },
        860:{
            items:6
        },
        780:{
            items:5
        }
    }
})

