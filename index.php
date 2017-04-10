<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

	<title>Untitled 1</title>
</head>
<style type="text/css">
body {
    background-color: #FFF8DC; width: 100%; height: 100%; margin: 0px; padding: 0px;
}
.center {
    text-align: center;
    border: 3px solid green;
    margin: 3px;
    height: 100px;
}
#box1 {
    position: absolute;
    text-align: center;
    height: 125px;
    width: 420px;
    margin: -100px 0 0 -200px;
    
    top: 220px;left: 50%;
    
    border: 2px solid green;padding: 6px;
}

#box2{
    position: absolute;
    text-align: center;
    margin: 3px;
    height: 125px;
    width: 420px;
    margin: -100px 0 0 -200px;
    top: 370px;
    left: 50%;
    border: 2px solid green;padding: 6px;
    overflow-y: scroll;
    padding: 6px;
}
#box3{
    position: absolute;
    text-align: center;
    margin: 3px;
    height: 120px;
    width: 420px;
    margin: -100px 0 0 -200px;
    top: 520px;
    left: 50%;
    border: 2px solid green;padding: 6px;
    padding: 6px;
}


</style>

<body>

<div class="center">
  <p><h1>Signal Processing</h1></p>
  <p><small>By Ahmed J. Aljaaf</small></p>
</div>

<div id="box1"><?php include ('upload_csv.php');?></div>

<div id="box2"><?php include ('process_signal.php');?></div>
<div id="box3"><a target = '_blank' href=download_csv.php><h4>Download processed file</h4></a></div>


</body>
</html>