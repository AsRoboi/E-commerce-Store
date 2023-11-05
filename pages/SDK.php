<main class="container">
  <div class="p-4 p-md-5 mb-4 text-dark rounded bg-white">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst">SDK DOCUMENTATION</h1>
      <h3 class="display-8 fst">Computer Accessories  API</h3>
   <!--    <p >Computer Accessories  API</p> 
      <p >Phone Accessories  API </p>
      <p >Mobile Phone API </p> -->
      
      
     
    </div>
  </div>


<!--   <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst border-bottom">
        From the Firehose
      </h3>
 -->
     <article class="blog-post">
       <center> <h2 class="blog-post-title">Introduction</h2></center>
        <p class="blog-post-meta">Theses APIs can be used by developers to get the product details from E-Market Website and use for their wish.  </p>
        <center><h2 class="blog-post-title">Key Generation</h2>
        <?php
 if (isset($_SESSION['uid'])) {
?>
  <form class="row g-5" action="engine/createapi.php" method="POST">
  <div class="col-md-6">
   <label for="inputEmail4" class="form-label">Username</label>
    <input type="name" class="form-control" id="inputEmail4" name="username">
  </div>
  <div class="col-md-6">
    <label for="inputPassword" class="form-label">Password</label>
    <input type="password1" class="form-control" id="inputPassword" name="password1">
  </div>
  <div class="col-12">
    <button type="submit" post="" class="btn btn-primary">Create Hash</button>
  </div>


 <?php
 }else{
    echo "<h4>Login to create API</h4>";
 }

 ?></center>
         <center> <h2 class="blog-post-title">API Key List</h2>
               <label>Key : eda56b717efb6ebe6841c557b89f7eb6<p></p></label>
          <h2 class="blog-post-title">Endpoints</h2>
         <p>Endpoint : http://localhost/engine/Com_api.php?k</p>         
         <h2 class="blog-post-title">Sample Results</h2></center>
         <img src="/resources/images/Screenshot 2022-01-21 013012.png "width = 1280px>

         

        