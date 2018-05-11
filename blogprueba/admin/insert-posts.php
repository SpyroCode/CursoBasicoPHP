<?php
include_once '../config.php';
$result=false;
if (!empty($_POST)) {
    $sql="INSERT INTO blog_posts (title,content) VALUE (:title,:content)";
    $query=$pdo->prepare($sql);
    $result=$query->execute([
        'title'=>$_POST['title'],
        'content'=>$_POST['content']
    ]);
}

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
            <h2>New Post</h2>
            <p>
                <a class='btn btn-default' href="posts.php">Back</a> 
            </p>
            <?php
                    if ($result) {
                        echo '<div class="alert alert-success">Post Saved</div>';
                        
                    }
            ?>
                
            <form action="insert-posts.php" method="post">
                <div class="form-group">
                    <label for="inputTitle">Title</label>
                    <input class="form-control" type="text" name='title' id="inputTitle" /> 
                </div>
                <textarea class="form-control" name="content" id="inputContent" cols="30" rows="10"></textarea><br/>
                <input class="btn btn-primary" type="submit" value="Save">
            </form>     
            </div>
            
            <div class='col-md-4'>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate iure ipsum ut asperiores sit rerum blanditiis, ea sapiente dignissimos officia dicta voluptatum iste hic, recusandae suscipit modi aspernatur consectetur odit?

            </div>
            
        </div>
        <div class='row'>
            <div class='col-md-12'>
                <footer>
                    This the footer
                </footer>
            </div>        
        </div>
        
    </div>
</body>
</html>