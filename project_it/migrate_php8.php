<?php
$dir = new RecursiveDirectoryIterator(__DIR__);
$iterator = new RecursiveIteratorIterator($dir);

$count = 0;

foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $filename = $file->getFilename();
        if ($filename === 'connect.php' || $filename === 'migrate_php8.php') {
            continue; // Skip the connection logic and the migration script itself
        }

        $path = $file->getPathname();
        $content = file_get_contents($path);
        $original = $content;

        // Perform the replacements
        // 1. mysql_query(XXX) -> mysqli_query($conn, XXX)
        // using preg_replace to handle possible spaces before opening paren
        $content = preg_replace('/mysql_query\s*\(/i', 'mysqli_query($conn, ', $content);

        // 2. mysql_fetch_array -> mysqli_fetch_array
        $content = preg_replace('/mysql_fetch_array\s*\(/i', 'mysqli_fetch_array(', $content);

        // 3. mysql_fetch_assoc -> mysqli_fetch_assoc
        $content = preg_replace('/mysql_fetch_assoc\s*\(/i', 'mysqli_fetch_assoc(', $content);

        // 4. mysql_num_rows -> mysqli_num_rows
        $content = preg_replace('/mysql_num_rows\s*\(/i', 'mysqli_num_rows(', $content);

        // 5. mysql_error() -> mysqli_error($conn)
        $content = preg_replace('/mysql_error\s*\(\s*\)/i', 'mysqli_error($conn)', $content);
        // Note: some legacy might have had mysql_error() with no args but we catch both empty parens

        // 6. mysql_insert_id() -> mysqli_insert_id($conn)
        $content = preg_replace('/mysql_insert_id\s*\(\s*\)/i', 'mysqli_insert_id($conn)', $content);

        // 7. mysql_close() -> mysqli_close($conn)
        $content = preg_replace('/mysql_close\s*\([^\)]*\)/i', 'mysqli_close($conn)', $content);

        if ($content !== $original) {
            file_put_contents($path, $content);
            echo "Updated: " . $path . "\n";
            $count++;
        }
    }
}

echo "Total files updated: $count\n";
?>
