<html>
<head>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<meta chartset="utf-8">
<title></title>
<style>
.Imagencabeza{
    float:right;
    padding-right:10px;
    width:180px;
}
.cabeza{
    text-align:center;
    font-size:x-large;
    font-family:Tahoma;
    margin-bottom:35px;
    color:#393D38;
}
.cuerpo form,table{
    width:700px;
    margin:0 auto;
}
.cuerpo button{
    text-align:center;
    width:200px;

    
}
</style>
</head>
<body>
<div class="cabeza">
    @yield("cabeza")
    <img src="/images/logo.png" class="Imagencabeza">
</div>
<div class="cuerpo">
    @yield("cuerpo")
    
</div>
<div class="pie">
    @yield("pie")
</div>
</body>
</html>