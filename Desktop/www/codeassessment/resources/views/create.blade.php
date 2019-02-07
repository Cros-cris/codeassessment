<html>

</html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">


    <!-- Bootstrap core CSS -->
<link href="/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <style>

body {

background-image: url(https://www.pixelstalk.net/wp-content/uploads/2016/07/Running-Backgrounds-HD.jpg);
background-size: cover;
}




  .form-signin {
    width: 100%;
    max-width: 420px;
    padding: 15px;
    margin: auto;
    margin-top:200px;
  }











    </style>


  </head>
  <body>

      <form class="form-signin text-center" method="post" action="/code/">
          {{ csrf_field() }}
          <div>
            <h1>inschrijven</h1>
            <input class="form-control" type = "text" name = "naam" placeholder="naam">
          </div>
          <div>
            <input class="form-control"  name = "email" placeholder="email">
          </div>
          <div>
          <select class="form-control" name="afstand">
            <option value="5">5 km</option>
            <option value="10">10 km</option>
            <option value="15">15 km</option>
          </select>
        </div>
        <div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">create</button>
      </div>
    </form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
