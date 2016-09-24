<html>
    <form name="test" method="post" action="">
        <label>Enter Number </label>
        <input type="text" title="ENTER NUMBER" id="vNumber" name="vNumber" value="" class="number-given">
        <button >submit</button>
    </form>
</html>
<?php
$n = $_REQUEST['vNumber'];
$count = 0;
print_r("sample input is : ----->" . $n . "<br><br>");

while ($n > 1 ) {
    if ($n % 3 == 0) {

        $value = $n / 3;
        $count++;
        print_r("step" . $count. " : " . $n."/3  -----" . $value . "<br>");
    } else if ($n % 2 == 0) {

        $value = $n / 2;
        $count++;
        print_r("step" . $count . " : " . $n."/2  -----" . $value . "<br>");
    } else {

        $value = $n - 1;
        $count++;
        print_r("step" . $count . " : " . $n."-1  -----" . $value . "<br>");
    }
    $n = $value;

}

print_r("<br>Final Value is : ----->" . $n . "<br>");
print_r("Number of steps taken : ----->" . $count);

?>