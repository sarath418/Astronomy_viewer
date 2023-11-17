<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <!-- Add your existing styles or link to a CSS file here -->
</head>
<body>
    <header>
        <!-- Include your navigation menu here if needed -->
    </header>

    <div class="content">
        <?php
        $query = isset($_GET['query']) ? strtolower($_GET['query']) : '';
        
        if (!empty($query)) {
            foreach ($articles as $article) {
                // Check if the query is present in the article title or content
                if (stripos(strtolower($article['title']), $query) !== false || stripos(strtolower($article['content']), $query) !== false) {
                    echo "<article>";
                    echo "<h2>{$article['title']}</h2>";
                    echo "<p>{$article['content']}</p>";
                    echo "</article>";
                }
            }
        } else {
            echo "<p>No search results. Please enter a search query.</p>";
        }
        ?>
    </div>
</body>
</html>
