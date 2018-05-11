<?php
include_once 'config.php';
$query=$pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
$query->execute();
$blogPosts=$query->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
<head>
    <title>Blog</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class='row'>
            <div class='col-md-12'>
                <h1>Blog Title</h1>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-8'>
                <?php
                    foreach ($blogPosts as $blogPost){

                    
                    echo "<div class='blog-post'>";
                        echo "<h2>" . $blogPost['title'] . "</h2>";
                        echo "<p>Jan 1, 2020 by <a href='#'>Efren</a></p>";
                    echo "</div>";  
                    echo "<div class='blog-post-image'>";
                        echo "<img src='images/keyboard.jpg' alt=''>";
                    echo "</div>";
                    echo "<div class='blog-post-contend'>"; 
                        echo $blogPost['content']; 
                    echo "</div>";
                    }
                ?>
                  
                 
            </div>
            
            <div class='col-md-4'>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate iure ipsum ut asperiores sit rerum blanditiis, ea sapiente dignissimos officia dicta voluptatum iste hic, recusandae suscipit modi aspernatur consectetur odit?

            </div>
            
        </div>
        <div class='row'>
            <footer>This the footer</footer>        
                
        </div>
        
    </div>
</body>
</html>