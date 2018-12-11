var codes = document.getElementsByTagName("code");
var text = codes[0].innerHTML;
codes[0].innerHTML = text.replace(/</g,'&lt').replace(/>/g, '&gt');