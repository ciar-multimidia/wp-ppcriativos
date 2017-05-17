﻿/* http://keith-wood.name/svg.html
   jQuery DOM compatibility for jQuery SVG v1.5.0.
   Written by Keith Wood (kbwood{at}iinet.com.au) April 2009.
   Available under the MIT (http://keith-wood.name/licence.html) license. 
   Please attribute the author if you use it. */
(function($){var j=/[\t\r\n]/g,rspace=/\s+/,rwhitespace="[\\x20\\t\\r\\n\\f]";function getClassNames(a){return(!$.svg.isSVGElem(a)?a.className:(a.className?a.className.baseVal:a.getAttribute('class')))||''}function setClassNames(a,b){(a.className?a.className.baseVal=b:a.setAttribute('class',b))}$.fn.addClass=function(f){return function(d){if($.isFunction(d)){return this.each(function(i){$(this).addClass(d.call(this,i,getClassNames(this)))})}var e=arguments;d=d||'';return this.each(function(){if($.svg.isSVGElem(this)){var c=this;$.each(d.split(/\s+/),function(i,a){var b=getClassNames(c);if($.inArray(a,b.split(/\s+/))===-1){setClassNames(c,b+=(b?' ':'')+a)}})}else{f.apply($(this),e)}})}}($.fn.addClass);$.fn.removeClass=function(f){return function(d){if($.isFunction(d)){return this.each(function(i){$(this).removeClass(d.call(this,i,getClassNames(this)))})}var e=arguments;d=d||'';return this.each(function(){if($.svg.isSVGElem(this)){var c=this;$.each(d.split(/\s+/),function(i,a){var b=getClassNames(c);b=$.grep(b.split(/\s+/),function(n,i){return n!==a}).join(' ');setClassNames(c,b)})}else{f.apply($(this),e)}})}}($.fn.removeClass);$.fn.toggleClass=function(h){return function(d,e){if($.isFunction(d)){return this.each(function(i){$(this).toggleClass(d.call(this,i,getClassNames(this),e),e)})}var f=arguments;var g=(typeof e==='boolean');return this.each(function(){if($.svg.isSVGElem(this)){if(typeof d==='string'){var b=$(this);$.each(d.split(/\s+/),function(i,a){if(!g){e=!b.hasClass(a)}b[(e?'add':'remove')+'Class'](a)})}else{var c=getClassNames(this);if(c){$._data(this,'__className__',c)}setClassNames(this,c||d===false?'':$._data(this,'__className__')||'')}}else{h.apply($(this),f)}})}}($.fn.toggleClass);$.fn.hasClass=function(c){return function(a){a=a||'';var b=false;this.each(function(){if($.svg.isSVGElem(this)){b=($.inArray(a,getClassNames(this).split(/\s+/))>-1)}else{b=(c.apply($(this),[a]))}return!b});return b}}($.fn.hasClass);$.fn.attr=function(h){return function(a,b,c){if(typeof a==='string'&&b===undefined){var d=h.apply(this,arguments);if(d&&d.baseVal&&d.baseVal.numberOfItems!=null){b='';d=d.baseVal;if(a==='transform'){for(var i=0;i<d.numberOfItems;i++){var e=d.getItem(i);switch(e.type){case 1:b+=' matrix('+e.matrix.a+','+e.matrix.b+','+e.matrix.c+','+e.matrix.d+','+e.matrix.e+','+e.matrix.f+')';break;case 2:b+=' translate('+e.matrix.e+','+e.matrix.f+')';break;case 3:b+=' scale('+e.matrix.a+','+e.matrix.d+')';break;case 4:b+=' rotate('+e.angle+')';break;case 5:b+=' skewX('+e.angle+')';break;case 6:b+=' skewY('+e.angle+')';break}}d=b.substring(1)}else{d=d.getItem(0).valueAsString}}return(d&&d.baseVal?d.baseVal.valueAsString:d)}var f=a;if(typeof a==='string'){f={};f[a]=b}if($.isFunction(b)){return $(this).each(function(i){$(this).attr(a,b.call(this,i,$(this).attr(a)))})}var g=arguments;return $(this).each(function(){if($.svg.isSVGElem(this)){for(var n in f){(c?this.style[n]=f[n]:this.setAttribute(n,f[n]))}}else{h.apply($(this),g)}})}}($.fn.attr);$.fn.removeAttr=function(e){return function(c){var d=arguments;return this.each(function(){if($.svg.isSVGElem(this)){var b=this;$.each(c.split(/\s+/),function(i,a){(b[a]&&b[a].baseVal?b[a].baseVal.value=null:b.removeAttribute(a))})}else{e.apply($(this),d)}})}}($.fn.removeAttr);$.extend($.cssNumber,{'stopOpacity':true,'strokeMitrelimit':true,'strokeOpacity':true});if($.cssProps){$.css=function(f){return function(a,b,c,d){var e=(b.match(/^svg.*/)?$(a).attr($.cssProps[b]||b):'');return e||f(a,b,c,d)}}($.css)}})(jQuery);