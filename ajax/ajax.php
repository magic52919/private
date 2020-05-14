<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>

function loadXMLDoc()
{
  var xmlhttp;
  var txt,x,i;
  if (window.XMLHttpRequest)
  {
    // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
    xmlhttp=new XMLHttpRequest();
  }
  else
  {
    // IE6, IE5 浏览器执行代码
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      xmlDoc=xmlhttp.response;
      txt="";
      console.log(xmlDoc[0].name);
      for (i=0;i<xmlDoc.length;i++)
      {
        txt=txt + xmlDoc[i].name+ "<br>";
      }
      document.getElementById("myDiv").innerHTML=txt;
    }
  }
  xmlhttp.open("GET","json.txt",true);
  xmlhttp.responseType = 'json';
  xmlhttp.send();
  console.log(xmlhttp);
}
</script>
</head>

<body>

<h2>我收藏的 CD :</h2>
<div id="myDiv"></div>
<button type="button" onclick="loadXMLDoc()">获取我的 CD</button>
 
</body>
</html>