<footer>
    <p>&copy; 2025 Your Website. All rights reserved.</p>

    <?php
        $filename = basename($_SERVER['PHP_SELF']);
        $lastModified = filemtime($filename);
        echo "<p>Last modified: " . date("d.m.Y H:i:s", $lastModified) . "</p>";
    ?>
</footer>

