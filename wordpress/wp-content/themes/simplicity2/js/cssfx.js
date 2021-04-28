/*!

cssFx - vendor prefix generator
Version 0.9.7+dmhno
© 2014 Ivan Malopinsky - http://imsky.co

Site:     http://imsky.github.io/cssFx
Issues:   https://github.com/imsky/cssFx/issues
License:  http://opensource.org/licenses/MIT

*/
!function e(t,r,n){function o(i,s){if(!r[i]){if(!t[i]){var l="function"==typeof require&&require;if(!s&&l)return l(i,!0);if(a)return a(i,!0);var c=new Error("Cannot find module '"+i+"'");throw c.code="MODULE_NOT_FOUND",c}var u=r[i]={exports:{}};t[i][0].call(u.exports,function(e){var r=t[i][1][e];return o(r?r:e)},u,u.exports,e,t,r,n)}return r[i].exports}for(var a="function"==typeof require&&require,i=0;i<n.length;i++)o(n[i]);return o}({1:[function(e){var t=t||{};!function(t){var r=e("./helpers"),n=r.ajax,o=r.contentLoaded,a=r.str_combo,i=r.rgb2hex,s=r.inArray,l=r.forEach,c=["-moz-","-webkit-","-o-","-ms-"],u={moz_webkit:["background-origin","background-size","border-image","border-image-outset","border-image-repeat","border-image-source","border-image-width","border-radius","box-shadow","column-count","column-gap","column-rule","column-rule-color","column-rule-style","column-rule-width","column-width"],moz_webkit_ms:["box-flex","box-orient","box-align","box-ordinal-group","box-flex-group","box-pack","box-direction","box-lines","box-sizing","animation-duration","animation-name","animation-delay","animation-direction","animation-iteration-count","animation-play-state","animation-timing-function","animation-fill-mode"],moz_webkit_ms_o:["transform","transform-origin","transition","transition-property","transition-duration","transition-timing-function","transition-delay","user-select"],misc:["background-clip","border-bottom-left-radius","border-bottom-right-radius","border-top-left-radius","border-top-right-radius"]},f=c[0],p=c[1],d=c[2],m=c[3],h=u.moz_webkit,g=u.moz_webkit_ms,b=u.moz_webkit_ms_o,v=u.misc,x=v.concat(b,h,g),y=["display","opacity","text-overflow","background-image","background"].concat(x),S="filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='{1}', endColorstr='{2}',GradientType=0)";t.processCSS=function(e,r){for(var n=[],o=/([\s\S]*?)\{([\s\S]*?)\}/gim,i=/\@import\s+(?:url\([\'\"]?(.*)[\'\"]?\))\s*\;?/gim,s=/@keyframes\s*([^\{]*)\{([^@]*)\}/g,u=0;u<e.length;u++){var f=a(e[u],1),p=[],d=i.test(f)&&f.match(i),m=s.test(f)&&f.match(s);i.lastIndex=0,s.lastIndex=0;for(var h=0;h<d.length;h++){f=f.replace(d[h],"");var g=i.exec(d[h])[1],b="/"==g[0]?g:r.replace(/[^\/]*?$/,"")+g;t.fetchCSS(b,function(e){t.insertCSS(t.processCSS([e],r))}),i.lastIndex=0}for(var h=0,v=m.length;v>h;h++){f=f.replace(m[h],"");var x=s.exec(m[h]);if(x){for(var S=x[2].match(o),k=[],w=0;w<S.length;w++){var C=o.exec(S[w]);C&&k.push(a(C[1])+"{"+t.processDec(C[2],!0)+"}"),o.lastIndex=0}l([0,1,3],function(e){p.push("@"+c[e]+"keyframes "+a(x[1])+"{"+k.join("\n")+"}")})}s.lastIndex=0}var E=o.test(f)&&f.match(o);o.lastIndex=0;for(var _=0,T=E.length;T>_;_++){var z=o.exec(E[_]);if(null!==z)for(var j=a(z[1],1),M=a(z[2],1),O=0,I=y.length;I>O;O++)if(M.indexOf(y[O])>=0){var L=t.processDec(M);L&&p.push(j+"{"+L+"}");break}o.lastIndex=0}p.length&&n.push(p.join("\n"))}return n},t.insertCSS=function(e){for(var t=0;t<e.length;t++){var r=document.createElement("style");r.setAttribute("type","text/css"),r.styleSheet?r.styleSheet.cssText=e[t]:r.textContent=e[t],document.getElementsByTagName("head")[0].appendChild(r)}},t.processDec=function(e,t){for(var r=e.split(";"),n=[],o="background",u=0;u<r.length;u++)if(!(r[u].indexOf(":")<0)){var y=r[u].split(":");if(2==y.length){var k=a(y[0]),w=a(y[1]),C=[k,w].join(":"),E=[];if(s(k,h))E.push(f+C,p+C);else if(s(k,g))E.push(f+C,p+C,"box-align"==k?m+k+":middle":m+C);else if(s(k,b))l([0,1,2,3],function(e){var t=c[e];if("transition"==k){var r=w.split(" ")[0];E.push(s(r,x)?t+C.replace(r,t+r):t+C)}else if("transition-property"==k){if(t==f){var n=w.split(","),o=[];l(n,function(e){var r=a(e);s(r,x)&&o.push(t+r)}),E.push(t+k+":"+o.join(","))}}else E.push(t+C)});else if(s(k,v))if(k==o+"-clip")"padding-box"===w&&E.push(p+C,f+k+":padding");else{var _=k.split("-");E.push(f+"border-radius-"+_[1]+_[2]+":"+w,p+C)}else switch(k){case"display":"box"==w?l([0,1,3],function(e){E.push("display:"+c[e]+w)}):"inline-block"==w&&E.push("display:"+f+"inline-stack",C,"zoom:1;*display:inline");break;case"text-overflow":"ellipsis"==w&&E.push(d+C);break;case"opacity":var T=Math.round(100*w);E.push(m+"filter:progid:DXImageTransform.Microsoft.Alpha(Opacity="+T+")","filter: alpha(opacity="+T+")",f+C,p+C);break;case o+"-image":case o+"-color":case o:var z="linear-gradient";if(w.indexOf(z)>=0){var j=new RegExp(z+"\\s?\\((.*)\\)","ig").exec(w);if(null!=j[1]){j=j[1];var M=z+"("+j+")";l([0,1,2,3],function(e){E.push(k+":"+c[e]+M)});var O=j.match(/\#([a-z0-9]{3,})/g);O&&O.length>1&&null!=O[O.length-1]&&E.push(S.replace("{1}",O[0]).replace("{2}",O[O.length-1]))}}else if(w.indexOf("rgba")>=0){var I=w.match(/rgba\((.*?)\)/)[1].split(","),L=Math.floor(255*+a(I[3])).toString(16)+i(+a(I[0]),+a(I[1]),+a(I[2]));E.push("*background:transparent;"+S.replace("{1}","#"+L).replace("{2}","#"+L)+";zoom:1")}break;default:t&&E.push(C)}E.length&&n.push(E.join(";"))}}return n.length&&n.join(";")},t.fetchCSS=function(e,r){n(e,null==r?function(r){t.insertCSS(t.processCSS([r],e))}:r)};var k=function(){var e=document.getElementsByTagName("style"),r=document.getElementsByTagName("link");for(var n in r)"object"==typeof r[n]&&"cssfx"===r[n].className&&t.fetchCSS(r[n].href);var o=[];for(var n in e)"object"==typeof e[n]&&o.push(e[n].innerHTML);o.length&&t.insertCSS(t.processCSS(o))};o(k)}(t)},{"./helpers":2}],2:[function(e,t){t.exports={rgb2hex:function(e,t,r){return((256+e<<8|t)<<8|r).toString(16).slice(1)},inArray:function(e,t){for(var r=0,n=t.length;n>r;r++)if(t[r]==e)return!0;return!1},forEach:function(e,t){for(var r=e.length,n=0;r>n;n++)t.call(this,e[n])},str_combo:function(e,t){return e.replace(null!=t?/\/\*([\s\S]*?)\*\//gim:"","").replace(/\n/gm,"").replace(/^\s*|\s*$/g,"").replace(/\s{2,}|\t/gm," ")},contentLoaded:function(e){var t=window,r="addEventListener",n="complete",o="readystatechange",a=!1,i=a,s=!0,l=t.document,c=l.documentElement,u=l[r]?r:"attachEvent",f=l[r]?"removeEventListener":"detachEvent",p=l[r]?"":"on",d=function(r){(r.type!=o||l.readyState==n)&&(("load"==r.type?t:l)[f](p+r.type,d,a),!i&&(i=!0)&&e.call(t,r.type||r))},m=function(){try{c.doScroll("left")}catch(e){return void setTimeout(m,50)}d("poll")};if(l.readyState==n)e.call(t,"lazy");else{if(l.createEventObject&&c.doScroll){try{s=!t.frameElement}catch(h){}s&&m()}l[u](p+"DOMContentLoaded",d,a),l[u](p+o,d,a),t[u](p+"load",d,a)}},ajax:function(e,t){var n=function(e){for(e=0;4>e;e++)try{return e?new ActiveXObject([,"Msxml2","Msxml3","Microsoft"][e]+".XMLHTTP"):new XMLHttpRequest}catch(t){}};(r=n())&&(r.onreadystatechange=function(){4==r.readyState&&t(r.responseText)},r.open("GET",e,!0),r.send(null))}}},{}]},{},[1]);