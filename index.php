<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Home page</title>
    <link rel="icon" href="bmslogo.png">

    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="blog.css" rel="stylesheet" />
    <style>
.card{
        background-color:#fff;
       
      
    }
    .card-title{
        color:#4a47a3;
    }
    .card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0);
  transition: 0.7s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 7px 8px 16px 5px rgba(0,0,33,2);
}
      </style>
  </head>

  <body>
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <img src="bmslogo.png" width="60px" height="60px" alt="bmslogo">
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">eNotice</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg
                xmlns=""
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="mx-3"
              >
                <circle cx="10.5" cy="10.5" r="7.5"></circle>
                <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
              </svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="registration.php">Sign up</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="registration.php">Student Sign-up</a>
          <a class="p-2 text-muted" href="login.php">Student Sign-in</a>
          <a class="p-2 text-muted" href="admin/admin_signup.php">Admin Sign-up</a>
          <a class="p-2 text-muted" href="admin/login.php">Admin Sign-in</a>
          <a class="p-2 text-muted" href="ad_notice.php">Public_Notice</a>
          <a class="p-2 text-muted" href="#">FAQ's</a>
         
        </nav>
      </div>

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">B.M.S College Of Engineering</h1>
          <p class="lead my-3">
           Cloud based E-Notice WebApp
          </p>
          <p class="lead mb-0">
            <a href="#" class="text-white font-weight-bold">CSE DEPARTMENT</a>
          </p>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Notifications</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured notices</a>
              </h3>
              <div class="mb-1 text-muted">April 16</div>
              <p class="card-text mb-auto">
               ALL Admin public notifications will be available here!!
              </p>
              <a href="#"></a>
            </div>
            <img src="bmslogo.png" width="30px" height="30px" alt="bmslogo">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Admin</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Admin Post</a>
              </h3>
              <div class="mb-1 text-muted">april 18</div>
              <p class="card-text mb-auto">
                ALL Admin public Post's will be available here!!
              </p>
              <a href="#">Continue reading</a>
            </div>
            <img src="bmslogo.png" width="30px" height="30px" alt="bmslogo">
          </div>
        </div>
      </div>
    </div>
<!--
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Admin
          </h3>

          <div class="blog-post">
            <h2 class="blog-post-title">Sample</h2>
            <p class="blog-post-meta">
              April 15, 2020 by <a href="#">admin</a>
            </p>

            <p>
              This blog post shows a few different types of content that's
              supported and styled with Bootstrap. Basic typography, images, and
              code are all supported.
            </p>
            <hr />
            <p>
              Cum sociis natoque penatibus et magnis
              <a href="#">dis parturient montes</a>, nascetur ridiculus mus.
              Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis
              vestibulum. Sed posuere consectetur est at lobortis. Cras mattis
              consectetur purus sit amet fermentum.
            </p>
            <blockquote>
              <p>
                Curabitur blandit tempus porttitor.
                <strong>Nullam quis risus eget urna mollis</strong> ornare vel
                eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
            </blockquote>
            <p>
              Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras
              mattis consectetur purus sit amet fermentum. Aenean lacinia
              bibendum nulla sed consectetur.
            </p>
            <h2>Heading</h2>
            <p>
              Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
              auctor. Duis mollis, est non commodo luctus, nisi erat porttitor
              ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac
              consectetur ac, vestibulum at eros.
            </p>
            <h3>Sub-heading</h3>
            <p>
              Cum sociis natoque penatibus et magnis dis parturient montes,
              nascetur ridiculus mus.
            </p>
            <pre><code>Example code block</code></pre>
            <p>
              Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem
              malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus
              commodo, tortor mauris condimentum nibh, ut fermentum massa.
            </p>
            <h3>Sub-heading</h3>
            <p>
              Cum sociis natoque penatibus et magnis dis parturient montes,
              nascetur ridiculus mus. Aenean lacinia bibendum nulla sed
              consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce
              dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
              ut fermentum massa justo sit amet risus.
            </p>
            <ul>
              <li>
                Praesent commodo cursus magna, vel scelerisque nisl consectetur
                et.
              </li>
              <li>Donec id elit non mi porta gravida at eget metus.</li>
              <li>Nulla vitae elit libero, a pharetra augue.</li>
            </ul>
            <p>
              Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae
              elit libero, a pharetra augue.
            </p>
            <ol>
              <li>Vestibulum id ligula porta felis euismod semper.</li>
              <li>
                Cum sociis natoque penatibus et magnis dis parturient montes,
                nascetur ridiculus mus.
              </li>
              <li>
                Maecenas sed diam eget risus varius blandit sit amet non magna.
              </li>
            </ol>
            <p>
              Cras mattis consectetur purus sit amet fermentum. Sed posuere
              consectetur est at lobortis.
            </p>
          </div> -->
          <!-- /.blog-post

          <div class="blog-post">
            <h2 class="blog-post-title">Another blog post</h2>
            <p class="blog-post-meta">
              December 23, 2013 by <a href="#">Jacob</a>
            </p>

            <p>
              Cum sociis natoque penatibus et magnis
              <a href="#">dis parturient montes</a>, nascetur ridiculus mus.
              Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis
              vestibulum. Sed posuere consectetur est at lobortis. Cras mattis
              consectetur purus sit amet fermentum.
            </p>
            <blockquote>
              <p>
                Curabitur blandit tempus porttitor.
                <strong>Nullam quis risus eget urna mollis</strong> ornare vel
                eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </p>
            </blockquote>
            <p>
              Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras
              mattis consectetur purus sit amet fermentum. Aenean lacinia
              bibendum nulla sed consectetur.
            </p>
            <p>
              Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
              auctor. Duis mollis, est non commodo luctus, nisi erat porttitor
              ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac
              consectetur ac, vestibulum at eros.
            </p>
          </div>  -->
          <!-- /.blog-post

          <div class="blog-post">
            <h2 class="blog-post-title">New feature</h2>
            <p class="blog-post-meta">
              December 14, 2013 by <a href="#">Chris</a>
            </p>

            <p>
              Cum sociis natoque penatibus et magnis dis parturient montes,
              nascetur ridiculus mus. Aenean lacinia bibendum nulla sed
              consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce
              dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
              ut fermentum massa justo sit amet risus.
            </p>
            <ul>
              <li>
                Praesent commodo cursus magna, vel scelerisque nisl consectetur
                et.
              </li>
              <li>Donec id elit non mi porta gravida at eget metus.</li>
              <li>Nulla vitae elit libero, a pharetra augue.</li>
            </ul>
            <p>
              Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras
              mattis consectetur purus sit amet fermentum. Aenean lacinia
              bibendum nulla sed consectetur.
            </p>
            <p>
              Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae
              elit libero, a pharetra augue.
            </p>
          </div>  -->
          <!-- /.blog-post 

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>
        </div> -->
        <!-- /.blog-main 

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">
              Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras
              mattis consectetur purus sit amet fermentum. Aenean lacinia
              bibendum nulla sed consectetur.
            </p>
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
        </aside>-->
        <!-- /.blog-sidebar -->
      </div>
      <!-- /.row -->
    </main>
    <!-- /.container -->

    <footer class="blog-footer">
      <p>
       BMSCE
        <a href="#">CSE</a> 
        <a href="#"></a>
      </p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme("thumb", {
        bg: "#55595c",
        fg: "#eceeef",
        text: "Thumbnail",
      });
    </script>
  </body>
</html>
