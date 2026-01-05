<?php
if(isset($_COOKIE['username'])) {
    echo "Welcome back, " . $_COOKIE['username'];
} else {
    echo "Cookie not found.";
}