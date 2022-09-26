   
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">
  </head>
<body>
    <!-- -----------------Footer Section Start----------------------------------->
     <footer class="container d-flex flex-wrap justify-content-end align-items-center py-3 my-4 border-top">
    <div class="col-md-2 justify-content-end d-flex align-items-center">
      <span class="mb-3 mb-md-0  fw-bold font btns" id="timer"></span>
    </div

    <ul class="nav col-md-6 justify-content-between d-flex">
    <button type="button" class="btn btn-light font btns border menu" id="menu" onclick="toggleSidePanel()">List</button>
    <button type="button" class="btn btn-light font btns  border" onclick="Prev()">Previous</button>
    <div class="fw-bold font btns"><span id="next" >1</span> of 10</div>
    <button type="button" class="btn btn-light font btns border" onclick="Next()">Next</button>
    <button type="button" class="btn btn-light font btns border">End Test</button>
    </ul>
  </footer>

  <!-------------------Footer Section Start--------------------------------- -->
  <script type="text/javascript" src='assets/js/index.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>