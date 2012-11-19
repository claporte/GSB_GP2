function affiche_div(valDiv){
	document.getElementById(valDiv).style.display = "block";
}

function enlever_div(valDiv){
	var valDiv;
	document.getElementById(valDiv).style.display = "none";
}

function affiche_div2(valDiv){
	var valDiv;
	document.getElementById(valDiv).style.display = "block";
}

function enlever_div2(valDiv){
	var valDiv;
	document.getElementById(valDiv).style.display = "none";
}

function swap_m(img_name,to_what,nochange,ext) {
	if (nochange=='') {
		var swap, towhat, ext;
		swap	= eval('document.images.'+img_name);
		towhat='_img/'+to_what+'.'+ext;
		swap.src	= towhat;
	}
}

function swap_n(img_name,to_what,nochange,ext) {
	if (nochange=='') {
		var swap, towhat, ext;
		swap	= eval('document.images.'+img_name);
		towhat='/uk/_img/'+to_what+'.'+ext;
		swap.src	= towhat;
	}
}

function writeInline(s) {
	document.write(s);
}

function popup(l,h,w) {
	var top=(screen.availHeight-h)/2;
	var gch=(screen.availWidth-w)/2;
    window.open(l.href,l.target,'toolbar=no, location=no, directories=no, status=no, scrollbars=no, resizable=no, menubar=no,width='+w+', height='+h+', top='+top+', left='+gch+'');
}

function preloadImages() {
	var d=document; if(d.images){ if(!d.p) d.p=new Array();
	var i,j=d.p.length,a=preloadImages.arguments; for(i=0; i<a.length; i++)
	if (a[i].indexOf("#")!=0){ d.p[j]=new Image; d.p[j++].src=a[i];}}
}

function getMaxChildHeight(o) {
	var h = o.offsetHeight;
	if( 1==arguments.length && o.childNodes && 0<o.childNodes.length ) {
		for(var i=0; i<o.childNodes.length; i++) {
			if( '#text'==o.childNodes[i].nodeName ) continue;
			h = Math.max(h,getMaxChildHeight(o.childNodes[i],false));
		}
	}
	return h;
	
}

var initContenuHeight = -1;
var initDivmenuHeight = -1;
var myDrawers = {};
function ShowOrHide(d1, d2) {
  if (d1 != '') DoDiv(d1);
  if (d2 != '') DoDiv(d2);
  
}
function DoDiv(id) {
  var item = null;
  if (document.getElementById) {
	item = document.getElementById(id);
  } else if (document.all){
	item = document.all[id];
  } else if (document.layers){
	item = document.layers[id];
  }
  if (item) {
	  if (item.style) {
		if(-1==initContenuHeight && null!=document.getElementById("contenu") ) initContenuHeight = document.getElementById("contenu").offsetHeight;
		if(-1==initDivmenuHeight && null!=document.getElementById("divmenu") ) initDivmenuHeight = document.getElementById("divmenu").offsetHeight;
		
		if (item.style.display == "none"){ 
			item.style.visibility = "visible";
			item.style.display = (-1=="|table|thead|tbody|tfoot|tr|th|td|".indexOf("|"+item.tagName.toLowerCase()+"|")?'block':''); 
			//if(!myDrawers[id] || 0==myDrawers[id] ) {
				//var nadvar = getComputedStyle(item, null).getPropertyValue("height");
				//var offnad = document.getElementById("positionBas").offsetTop;
				//myDrawers[id] = Math.ceil(nadvar);
				/*myDrawers[id] = Math.ceil(document.getElementById(id).firstChild.offsetHeight);
				if( document.getElementById(id).firstChild && document.getElementById(id).firstChild.nextSibling && 'download'==document.getElementById(id).firstChild.nextSibling.className ) {
					myDrawers[id] = Math.ceil(document.getElementById(id).firstChild.nextSibling.offsetHeight+10);
				}*/
			//}
			/*var cumul = 0;
			for(drawer in myDrawers) {
				cumul += myDrawers[drawer];
			}*/
			//document.getElementById("contenu").style.height = initContenuHeight+Math.ceil(document.getElementById(id).offsetHeight)+"px";
			//document.getElementById("contenu").style.height = (initContenuHeight+cumul)+"px";
			//document.getElementById("divmenu").style.height = (document.getElementById("contenu").offsetHeight - document.getElementById("divcontact").offsetHeight)+"px";
			//alert(document.getElementById("contenu").style.height);
			
			myDrawers[id] = getMaxChildHeight(document.getElementById(id));
				
			var cumulTotal = (/msie 7/i.test(navigator.userAgent)?myDrawers[id]:0);
			
			var offnad = document.getElementById("positionBas").offsetTop + cumulTotal;
			//alert(offnad);
		
			document.getElementById("contenu").style.height = (offnad - 245 )+ 'px';
			document.getElementById("divmenu").style.height = (offnad - 245 - document.getElementById("divcontact").offsetHeight)+'px';
			
			if(-1<item.className.indexOf('openInfos')) item.className += ' opened';
		}else {
				
			item.style.visibility = "hidden";
			item.style.display = "none";
			
			var offnad = document.getElementById("positionBas").offsetTop - myDrawers[id];
			//alert(offnad);
			document.getElementById("contenu").style.height = (offnad - 245 )+ 'px';
			document.getElementById("divmenu").style.height = (offnad - 245 - document.getElementById("divcontact").offsetHeight)+'px';
			
			/*document.getElementById("contenu").style.height = (initContenuHeight+cumul)+"px";
			document.getElementById("divmenu").style.height = (initDivmenuHeight+cumul)+"px";			
			item.style.visibility = "hidden";
			item.style.display = "none";*/
		}
	  } else {
		  item.visibility = "show"; 
	  }
  }
}

function attachDetachClassName(o,sClassName) {
	var reClassName = new RegExp("\s*"+sClassName+"\s*",'gi');
	if(reClassName.test(o.className)) o.className  = o.className.replace(sClassName,'');
	else                              o.className += " opened";
	o.className = o.className.replace(/\s+$/,'').replace(/^\s+/,'');
}
