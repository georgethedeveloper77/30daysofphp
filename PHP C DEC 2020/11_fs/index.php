<?php
// Magic constants
echo __DIR__ . '<br>';
echo __FILE__ . '<br>';

echo __LINE__ . '<br>';
// Create directory
mkdir('test');
// Rename directory
rename('test', 'test2');

// Delete directory
rmdir('test2');
// Read files and folders inside directory
$files = scandir('./');
echo '<pre>';
var_dump($files);
echo '</pre>';
// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');
file_put_contents('sample.txt', 'some content');
// file_get_contents from URL
$jsonContent = file_get_contents('https://jsonplaceholder.typicode.com/users');
$users = json_decode($jsonContent);
var_dump($users);

// https://www.php.net/manual/en/book.filesystem.php
// Check if file exists or not
file_exists('lorem.txt'); // true

// Get file size
filesize('lorem.txt');

// Delete file
unlink('lorem.txt');

// https://www.php.net/manual/en/book.filesystem.php
