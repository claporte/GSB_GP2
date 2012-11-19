// ================================================================================
// ojo/
// ================================================================================

function addEvent( obj, type, fn ) { 
	if ( obj.attachEvent ) { 
		obj['e'+type+fn] = fn; 
		obj[type+fn] = function(){obj['e'+type+fn]( window.event );} 
		obj.attachEvent( 'on'+type, obj[type+fn] ); 
	} else {
		obj.addEventListener( type, fn, false ); 
	}
} 

function removeEvent( obj, type, fn ) { 
	if ( obj.detachEvent ) { 
		obj.detachEvent( 'on'+type, obj[type+fn] ); 
		obj[type+fn] = null; 
	} else {
		obj.removeEventListener( type, fn, false ); 
	}
} 


function HttpConnector() {
	function _getConnector() {
		var o = null;
		var success = false;
		var MSXML_XMLHTTP_PROGIDS = new Array(
			'MSXML2.XMLHTTP.5.0',
			'MSXML2.XMLHTTP.4.0',
			'MSXML2.XMLHTTP.3.0',
			'MSXML2.XMLHTTP',
			'Microsoft.XMLHTTP'
		);

		for (var i=0;i < MSXML_XMLHTTP_PROGIDS.length && !success; i++) {
			try {
				o = new ActiveXObject(MSXML_XMLHTTP_PROGIDS[i]);
				success = true;
			} catch (e) {}
		}
		if( null==o && typeof XMLHttpRequest != "undefined") o = new XMLHttpRequest();
		return o;
	} this._getConnector = _getConnector;

	function doGet(url,cbfunc) {
		this. _request("GET",url,{},cbfunc);
	} this.doGet = doGet

	function doPost(url,data,cbfunc) {
		this. _request("POST",url,data,cbfunc);
	} this.doPost = doPost

	function _request(method,url,parms,cbfunc) {
			var ret = false;
			var x = this._getConnector();
			if(null==x)  return;
			var self = this;

			var i, n;
			var post_data = null;
			method = method.toUpperCase();

			var dt = new Date();
			url += (url.indexOf("?") == -1?"?":"&");
			url += '_'+dt.getTime()+'=1';

			x.onreadystatechange = function() {
				if (x.readyState != 4) return;
				if( x.status == 200) {
					self.owner[cbfunc](x);
				} else {
					var dump = "==========[DEBUG]==========\n";
					dump += x.getAllResponseHeaders();
					dump += "===========================\n";
					var kx,vx;
					for( kx in x ) {
						vx = "";
						dump += kx;
						try {
							vx = x[kx];
						} catch (e)	{
							vx = "read failure";
						}
						dump += "="+vx+"\n";
					}
					dump += "==========[DEBUG]==========\n";
					if( self.owner.handleError) {
						self.owner.handleError(dump);
					} else {
						alert(x.status+"\n"+dump);
					}
				}
			}

			try {
				x.open(method, url, true);
				if (method == "POST") {
					post_data = "";
					for( var qparam in parms) { post_data += "&"+qparam+"="+escape(parms[qparam]); }
					if(2<post_data.length) post_data = post_data.substr(1);
					else post_data = "";
					x.setRequestHeader("Method", "POST " + url + " HTTP/1.1");
					x.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				}
				x.send(post_data);
				ret = true;
			} catch (e) {
				alert(e);
			}
			delete x;
			return ret;

	} this._request = _request;


	this.owner = arguments[0];
}

function toUpperCase127(input) { 
	var lower = "aàâäbcçdeéèêëfghiîïjklmnoôöpqrstuùûvwxyz" 
	var upper = "AAAABCCDEEEEEFGHIIIJKLMNOOOPQRSTUUUVWXYZ" 
	var output = ""; 
	var car;
	for (var i = 0 ; i < input.length ; i++) { 
	  car = input.substr(i, 1); 
	  output += (lower.indexOf(car) != -1) ? upper.substr(lower.indexOf(car), 1) : car; 
	} 
	return output; 
} 



function trim(str) {
	var mode = (2==arguments.length?arguments[1].toUpperCase():'LR');
	var trimLen = 0;
	if( mode.indexOf('L')>-1 ) {
		for(var i=0;i<str.length;i++) { 
			if( /\s/.test(str.substr(i,1)) ) trimLen++; 
			else break;
		}
		if(trimLen>0) str = str.substr(trimLen);
		trimLen = 0;
	}
	if( mode.indexOf('R')>-1 ) {
		for( i=str.length-1;i>=0;i--) { 
			if( /\s/.test(str.substr(i,1)) ) trimLen++; 
			else break;
		}
		if(trimLen>0) str = str.substr(0,str.length-trimLen);
	}
	return str;
}


function checkMailAddr(value) {
	var addr = value.split("@");
	if(addr.length==1 || addr.length>2) return false;
	var dom = addr[1].split(".");
	if(dom.length == 1) return false;
	var domLen = dom.length
	if(domLen>2 && (dom[domLen-1]).length==0) domLen--;
	if(dom[domLen-1].length<2 || dom[domLen-1].length>3) return false;
	for(var i=0;i<domLen;i++) { if(dom[i].length==0) return false; }

	var acc = addr[0].split(".");
	for(i=0;i<acc.length;i++) { if(acc[i].length==0) return false; }
	var okChars = "abcdefghijklmnopqrstuvwxyz";
	okChars += okChars.toUpperCase()+"0123456789-_";
	var testString = acc.join("")+"."+dom.join("");
	if("."==testString) return false;
	i=0;
	while( i<testString.length ) { 
		if('.'==testString.substr(i,1)) {
			okChars = okChars.substr(0,okChars.length-1);
		} else {
			if(okChars.indexOf(testString.substr(i,1))==-1 ) return false;
		}
		i++;
	}
	return true;
}

function simpleMailtoDescrambler(jsIdentif) {
	var arrLinks = document.getElementsByTagName("A");
	for(var i=0; i<arrLinks.length; i++) {
		if( "javascript:void('"+jsIdentif+"');"==arrLinks[i].href ) {
			arrLinks[i].setAttribute("href",rot13('znvygb:')+rot13(strRev(arrLinks[i].childNodes[0].nodeValue).replace(" ","@")));
			arrLinks[i].childNodes[0].nodeValue =arrLinks[i].href.substr(7);
		}
	}
}
function simpleMailtoDescrambler2(jsIdentif) {
	var arrLinks = document.getElementsByTagName("A");
	for(var i=0; i<arrLinks.length; i++) {
		if( "javascript:void('"+jsIdentif+"');"==arrLinks[i].href ) {
			arrLinks[i].setAttribute("href",rot13('znvygb:')+rot13(strRev(arrLinks[i].previousSibling.childNodes[0].nodeValue).replace(" ","@")));
		}
	}
}



function checkPhoneNumber(value) {
	return /^[\+|0-9][0-9 \.\(\)]+$/.test(value);
}

function setJsCookie(key,value,expires) {
	var gmtExpire;
	if( typeof expires == 'object') {
		gmtExpire = '; expires=' + expires.toGMTString() + ';';
	} else {
		gmtExpire = ';';
	}
	document.cookie = key + '=' + escape(value) + gmtExpire;
}

function SetCookie(cookieName,cookieValue,nDays) {
 var today = new Date();
 var expire = new Date();
 if (nDays==null || nDays==0) nDays=1;
 expire.setTime(today.getTime() + 3600000*24*nDays);
 document.cookie = cookieName+"="+escape(cookieValue)
                 + ";expires="+expire.toGMTString();
}

function SetSessCookie(cookieName,cookieValue) {
	document.cookie = cookieName+"="+escape(cookieValue);
}

function getCookie(cookieName) {
	var ret = undefined;
	cookieName += "=";
	place = document.cookie.indexOf(cookieName,0);
	if (place == -1) {
		ret = undefined;
	} else {
		end = document.cookie.indexOf(";",place)
		if (end == -1) {
			ret = unescape(document.cookie.substring(place+cookieName.length,document.cookie.length));
		} else {
			ret = unescape(document.cookie.substring(place+cookieName.length,end));
		}
	}
	return ret;
}


function rot13( pStr ) {
	function rotate( t, u, v ) {
	 return String.fromCharCode( ( ( t - u + v ) % ( v * 2 ) ) + u );
	}
	var b = [], c, i = pStr.length,
	a = 'a'.charCodeAt(), z = a + 26,
	A = 'A'.charCodeAt(), Z = A + 26;
	while(i--) {
		c = pStr.charCodeAt( i );
		if( c>=a && c<z ) { b[i] = rotate( c, a, 13 ); }
		else if( c>=A && c<Z ) { b[i] = rotate( c, A, 13 ); }
		else { b[i] = pStr.charAt( i ); }
	}
	return b.join( '' );
}

// XOR decode
function usr_str_xor(pStr,pKey) {
	var cs = pStr.length;
	var ck = pKey.length;
	var ret="";
	for(i=0;i<cs;i++) { ret += String.fromCharCode(pKey.charCodeAt(i%ck)^pStr.charCodeAt(i)); }
	return ret
}

// Base64 encoding
var base64EncodeChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789%2b/index.html";
var base64DecodeChars = new Array(
    -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
    -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
    -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, 63,
    52, 53, 54, 55, 56, 57, 58, 59, 60, 61, -1, -1, -1, -1, -1, -1,
    -1,  0,  1,  2,  3,  4,  5,  6,  7,  8,  9, 10, 11, 12, 13, 14,
    15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, -1, -1, -1, -1, -1,
    -1, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40,
    41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, -1, -1, -1, -1, -1);

function base64encode(str) {
    var out, i, len;
    var c1, c2, c3;

    len = str.length;
    i = 0;
    out = "";
    while(i < len) {
	c1 = str.charCodeAt(i++) & 0xff;
	if(i == len)
	{
	    out += base64EncodeChars.charAt(c1 >> 2);
	    out += base64EncodeChars.charAt((c1 & 0x3) << 4);
	    out += "==";
	    break;
	}
	c2 = str.charCodeAt(i++);
	if(i == len)
	{
	    out += base64EncodeChars.charAt(c1 >> 2);
	    out += base64EncodeChars.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4));
	    out += base64EncodeChars.charAt((c2 & 0xF) << 2);
	    out += "=";
	    break;
	}
	c3 = str.charCodeAt(i++);
	out += base64EncodeChars.charAt(c1 >> 2);
	out += base64EncodeChars.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4));
	out += base64EncodeChars.charAt(((c2 & 0xF) << 2) | ((c3 & 0xC0) >>6));
	out += base64EncodeChars.charAt(c3 & 0x3F);
    }
    return out;
}

function base64decode(str) {
    var c1, c2, c3, c4;
    var i, len, out;

    len = str.length;
    i = 0;
    out = "";
    while(i < len) {
	/* c1 */
	do {
	    c1 = base64DecodeChars[str.charCodeAt(i++) & 0xff];
	} while(i < len && c1 == -1);
	if(c1 == -1)
	    break;

	/* c2 */
	do {
	    c2 = base64DecodeChars[str.charCodeAt(i++) & 0xff];
	} while(i < len && c2 == -1);
	if(c2 == -1)
	    break;

	out += String.fromCharCode((c1 << 2) | ((c2 & 0x30) >> 4));

	/* c3 */
	do {
	    c3 = str.charCodeAt(i++) & 0xff;
	    if(c3 == 61)
		return out;
	    c3 = base64DecodeChars[c3];
	} while(i < len && c3 == -1);
	if(c3 == -1)
	    break;

	out += String.fromCharCode(((c2 & 0XF) << 4) | ((c3 & 0x3C) >> 2));

	/* c4 */
	do {
	    c4 = str.charCodeAt(i++) & 0xff;
	    if(c4 == 61)
		return out;
	    c4 = base64DecodeChars[c4];
	} while(i < len && c4 == -1);
	if(c4 == -1)
	    break;
	out += String.fromCharCode(((c3 & 0x03) << 6) | c4);
    }
    return out;
}
// Base64 encoding ==


function strRev(pStr) {
    var s = "";
    var i = pStr.length;
    while (i>0) {
        s += pStr.substring(i-1,i);
        i--;
    }
    return s;
}




// UI ================================================

function getEventAbsPos(evt) {
	var p = new Object();
	p.x = evt.pageX?evt.pageX:evt.x+document.body.scrollLeft;
	p.y = evt.pageY?evt.pageY:evt.y+document.body.scrollTop;
	return p;
}

function handleFrDateInputting(evt,el) {
	var bounds;
	if( evt.shiftKey )  bounds = new Array(48,57,191);
	else   bounds = new Array(96,105,111);
	var directions = new Array(35,40);

	if( bounds[2]!=evt.keyCode ) {
		if(evt.keyCode<bounds[0] || evt.keyCode>bounds[1] ) {
			if( 8==evt.keyCode || (evt.keyCode>=directions[0] || evt.keyCode<=directions[1]) ) return;
			el.value = el.value.substr(0,el.value.length-1);
			return;
		}
	}
	if( 2==el.value.length || 5==el.value.length ) el.value += "index.html";
	el.value = el.value.replace("//","index.html");
}

// UI ==




//
// Globals ========================================================================
//

var ImgExts = new String("|gif|jpg|jpe|jpeg|png|bmp|wbmp|tif|tiff|pcx|psd|emf|raw|tga|");


//
// ================================================================================
