<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>KATEGORI</title>
  </head>
  <body>
    <h1 class="text-center mb-4">TAMBAH KATEGORI</h1>
        <div class="container">

            <div class="row justify-content-center">
               <div class="col-8">
               <div class="card">
                      <div class="card-body">
                       <form action="/insertdata" method="POST" enctype="multipart/form-data">
                        @csrf
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
                                <select class="form-select" name="" aria-label=" Default select example">
                                  <option selected>Pilih Kategori</option>
                                  <option value="1">Profesional</option>
                                  <option value="2">Exclusive</option>
                                  <option value="3">Custom</option>
                                  <option value="4">yayasan</option>
                                  
                                </select>
                             </div>
                              
                            
                              <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                </div>
          </div>
        </div> 
       </div>

     </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

