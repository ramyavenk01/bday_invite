<?php
$filename = 'responses.txt';
$directory = __DIR__; // Gets the current directory

// Ensure the file exists before changing permissions
if (file_exists($filename)) {
    chmod($filename, 0644); // Change file permissions
    echo "Permissions for $filename have been changed to 0644.";
} else {
    echo "File $filename does not exist.";
}

// Change directory permissions
chmod($directory, 0755); // Change directory permissions
echo "Permissions for directory have been changed to 0755.";
?>