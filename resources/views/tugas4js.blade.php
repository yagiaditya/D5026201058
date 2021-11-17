<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    var txt = "";
    txt += "Width of div: " + $("#div1").width() + "</br>";
    txt += "Height of div: " + $("#div1").height() + "</br>";
    txt += "Outer width of div (margin included): " + $("#div1").outerWidth(true) + "</br>";
    txt += "Outer height of div (margin included): " + $("#div1").outerHeight(true);
    $("#div1").html(txt);
  });
});
</script>
<style>
#div1 {
    position: absolute;
    background-color: rgba(255, 255, 255, 0.479);
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 50%;
    height: 80%;
    border-radius: 15px;
    border: 3px solid #8178783f;
}
</style>
</head>
<body>

<div id="div1"></div>
<br>

<button>Display dimensions</button>
</body>
</html>
