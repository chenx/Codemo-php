<html>
<head>
</head>

<h1>Show Image</h1>

<body>


<form action="showimg.php" method="POST">

Enter Image URL: <input type="text" name="url" id="url" style="width:500px;" value="<?php print $_REQUEST['url']; ?>"/>
<input type="submit" name="btnSubmit" value="submit"/>

&nbsp;&nbsp;<span id="msg" name="msg"></span>

</form>

<?php

showImg();


function showImg() {
    showMsg("<blink>Wait to load image ...</blink>");

    $url = "image.jpeg"; // default local image.
    $size = 700;

    if ( isset($_REQUEST['url']) && $_REQUEST['url'] != "" ) {
        $url = $_REQUEST['url'];
    }

    $img = "<a href='#' onclick='javascript: var w=window.open(\"img.php?url=$url\", \"_img\", \"height=800,width=900,left=100,top=100,location=0,toolbar=0,menubar=0,status=0,scrollbars=1,resizable=1,titlebar=0\"); w.focus();'><img src='img.php?url=$url' width='$size' title='Click to display in new browser'/></a>";

    echo $img;

    print "<br/><a href='img.php?url=$url' target='_img'>Open in new page</a>";

    showMsg("");
}


function showMsg($msg) {
    print "<script type='text/javascript'>document.getElementById('msg').innerHTML = \"$msg\";</script>";
}

?>

</body>
</html>