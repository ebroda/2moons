var DOM_GET_ELEMENT_BY_ID_CACHE=new Array();function getElementByIdWithCache(a){if(!DOM_GET_ELEMENT_BY_ID_CACHE[a]){DOM_GET_ELEMENT_BY_ID_CACHE[a]=document.getElementById(a)}return DOM_GET_ELEMENT_BY_ID_CACHE[a]}function addListener(c,b,a){if(c.addEventListener){if(b=="mousewheel"){b="DOMMouseScroll"}c.addEventListener(b,a,false)}else{if(c.attachEvent){c["e"+b+a]=a;c[b+a]=function(){c["e"+b+a](window.event)};c.attachEvent("on"+b,c[b+a])}}}function removeListener(c,b,a){if(c.removeEventListener){c.removeEventListener(b,a,false)}else{if(c.detachEvent){c.detachEvent("on"+b,c[b+a]);c[b+a]=null;c["e"+b+a]=null}}}function addClass(b,a){if(b&&a&&a!="undefined"){removeClass(b,a);b.className+=" "+a}}function removeClass(b,a){if(b&&b.className){b.className=b.className.replace(a,"")}}function getAllChildNodesWithClassName(b,c){if(!c){var c=new Array()}var a=0;if(b.childNodes){for(a in b.childNodes){if(b.childNodes[a].className){c.push(b.childNodes[a])}if(b.childNodes[a].firstChild){c.concat(getAllChildNodesWithClassName(b.childNodes[a],c))}}}return c}function hasClassName(c,b){if(c.className&&b){var a=c.className;return(a==b||a.indexOf(" "+b+" ")>=0||a.indexOf(b+" ")==0||(a.indexOf(" "+b)>0&&a.indexOf(" "+b)==a.length-((" "+b).length)))}else{return false}}function getChildNodesWithClassName(c,b,d){if(!d){var d=new Array()}var a=0;if(c.childNodes){for(a in c.childNodes){if(c.childNodes[a]&&c.childNodes[a].className&&hasClassName(c.childNodes[a],b)){d.push(c.childNodes[a])}if(c.childNodes[a]&&c.childNodes[a].firstChild){d.concat(getChildNodesWithClassName(c.childNodes[a],b,d))}}}return d}function getChildNodeWithClassName(c,a){if(c.childNodes){for(i in c.childNodes){if(hasClassName(c.childNodes[i],a)){return c.childNodes[i]}else{if(c.childNodes[i].firstChild){var b=getChildNodeWithClassName(c.childNodes[i],a);if(b){return b}}}}}return false}function getChildNodesWithTagName(d,c,a){if(!a){var a=new Array()}var b=0;if(d.childNodes){for(b in d.childNodes){if(d.childNodes[b].tagName&&d.childNodes[b].tagName==c.toUpperCase()){a.push(d.childNodes[b])}if(d.childNodes[b].firstChild){a.concat(getChildNodesWithTagName(d.childNodes[b],c,a))}}}return a}function splitParameterStringToArray(e){var a=new Object();var c=e.split(" ");for(var b in c){var d=c[b].split("=");if(d[0]){a[d[0]]=d[1]}}return a}function number_format(d,b,k,c){k=LocalizationStrings.decimalPoint;c=LocalizationStrings.thousandSeperator;var h="";var j=d.toString();var g=j.indexOf("e");if(g>-1){h=j.substring(g);d=parseFloat(j.substring(0,g))}if(b!=null){var l=Math.pow(10,b);d=Math.round(d*l)/l}var a=d<0?"-":"";var f=(d>0?Math.floor(d):Math.abs(Math.ceil(d))).toString();var e=d.toString().substring(f.length+a.length);k=k!=null?k:".";e=b!=null&&b>0||e.length>1?(k+e.substring(1)):"";if(b!=null&&b>0){for(i=e.length-1,z=b;i<z;++i){e+="0"}}c=(c!=k||e.length==0)?c:null;if(c!=null&&c!=""){for(i=f.length-3;i>0;i-=3){f=f.substring(0,i)+c+f.substring(i)}}return a+f+e+h}function gfNumberGetHumanReadable(c){c=Math.floor(c);var b="";var a=3;floorWithPrecision=function(e,d){return Math.floor(e*Math.pow(10,d))/Math.pow(10,d)};c=floorWithPrecision(c,a);while(a>=0){if(floorWithPrecision(c,a-1)!=c){break}a=a-1}return number_format(c,a,LocalizationStrings.decimalPoint,LocalizationStrings.thousandSeperator)+b}function dezInt(b,d,f){f=(f)?f:"0";var e=(b<0)?"-":"",a=(f=="0")?e:"";b=Math.abs(parseInt(b,10));d-=(""+b).length;for(var c=1;c<=d;c++){a+=""+f}a+=((f!="0")?e:"")+b;return a}function ajaxSendUrl(b){var a=null;if(typeof XMLHttpRequest!="undefined"){a=new XMLHttpRequest()}if(!a){try{a=new ActiveXObject("Msxml2.XMLHTTP")}catch(c){try{a=new ActiveXObject("Microsoft.XMLHTTP")}catch(c){a=null}}}if(a){a.open("POST",b,true);a.onreadystatechange=function(){if(a.readyState==4){}};a.send(null)}}function ajaxRequest(c,b){var a=null;if(typeof XMLHttpRequest!="undefined"){a=new XMLHttpRequest()}if(!a){try{a=new ActiveXObject("Msxml2.XMLHTTP")}catch(d){try{a=new ActiveXObject("Microsoft.XMLHTTP")}catch(d){a=null}}}if(a){a.open("POST",c,true);a.onreadystatechange=function(){if(a.readyState==4){var e=new b(a.responseText)}};a.send(null)}};