<?php
print"<table class='bordered' border=0>";
echo "<tr><th>Key</th><th>Value</th></tr>";
foreach ($_SERVER as $key=>$val )
{
    echo "<tr><td>".$key."</td><td class='wrp'>" .$val."</tr>";
}
print"</table>";
?>
