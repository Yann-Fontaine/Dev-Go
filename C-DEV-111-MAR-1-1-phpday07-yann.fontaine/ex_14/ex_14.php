<?php
try {
    call_gecko();
    call_gecko();
    call_gecko();
    call_gecko();
    call_gecko();
} catch(Exception $e) {
    echo $e->getMessage();
    echo "\n";
}
?>