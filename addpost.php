<?php
    // Including db.php file with our DB-connection
    require('config/config.php');
    require('config/db.php');

    // First of all: we check for a submit
    if(isset($_POST['submit'])) {
        echo 'Submitted';
        // Grab data from the Form - with the security
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
    
    
        // Adding the post to Database (inserting)
        $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";

        if(mysqli_query($conn, $query)) {
            // Insertion completed
            header('Location: '.ROOT_URL);
        } else {
            // Insertion went wrong
            echo 'Error: '.mysqli_error($conn);
        }
 

    // Close Connection
    mysqli_close($conn);
    }


    // Checking if we got the result: if so, direct us to root, if not: print out error
    /*
  
    */

    

    
?>

<?php include('inc/header.php'); ?>
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
          <a class="text-muted" href="<?php echo ROOT_URL; ?>addpost.php">Add a Post</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">Large</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">HTML/CSS</a>
          <a class="p-2 text-muted" href="#">JavaScript</a>
          <a class="p-2 text-muted" href="#">PHP</a>
          <a class="p-2 text-muted" href="#">Frameworks</a>
          <a class="p-2 text-muted" href="#">Trends</a>
          <a class="p-2 text-muted" href="#">Advice</a>
        </nav>
      </div>




    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Add A Post
          </h3>

          <div class="blog-post">
          <a class="btn btn-success mb-3" href="<?php echo ROOT_URL; ?>">Back</a>
                <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label>Author:</label>
                    <input type="text" name="author" class="form-control">
                </div>
                <div class="form-group">
                    <label>Body:</label>
                    <textarea name="body" class="form-control"></textarea>
                </div>
                <input type="submit" value="Submit" name="submit" class="btn btn-outline-success">
                </form>
            <hr>
          </div><!-- /.blog-post -->

            <br>
            <br>
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>