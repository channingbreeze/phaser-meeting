var oAjax;
try {
  oAjax = new XMLHttpRequest();
} catch(e) {
  oAjax = new ActiveXObject("Microsoft.XMLHTTP");
};
oAjax.open('post', 'http://phasermeeting.webxinxin.com/php/inter/AddVisit.php?='+Math.random(), true);
oAjax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
oAjax.send();
oAjax.onreadystatechange = function() {
  if(oAjax.readyState == 4) {
    try {
      console.log(oAjax.responseText)
    } catch(e) {
    };
  };
};
