<h2>IF - ELSE Condition</h2>

<p>- if is used to run code when a condition is TRUE</p>
<p>- else runs when the condition is FALSE</p>

<pre>
&lt;html&gt; &lt;body&gt;

&lt;?php

$d = date("D");

if($d == "Fri"){
    echo "Have a nice weekend!";
} else {
    echo "Have a nice day!";
}

?&gt;

&lt;/body&gt; &lt;/html&gt;
</pre>

<?php
echo "<br><br><b>Result:</b><br>";
$d = date("D");
if($d == "Fri"){
    echo "Have a nice weekend!";
} else {
    echo "Have a nice day!";
}
?>
