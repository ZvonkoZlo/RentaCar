<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Image Upload in laravel 9</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

</head>

<body>



    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name">
        </div>
        <div class="form-group">
            <label for="description">Product Description</label>
            <textarea class="form-control" id="description" name="description" placeholder="Enter product description"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Product Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter product price">
        </div>
        <div class="form-group">
            <label for="photo">Product Photo</label>
            <input type="file" class="form-control-file" id="photo" name="photo">
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
   
    
    



















  <!--   <div class="container">

        <div class="row pt-5">

            <div class="col-md-12">

                <h1 class="text-ino mb-3 text-center">How to upload image in laravel 9</h1>

              <div class="card">

                <div class="card-header">Upload Images List</div>

                <div class="card-body">

            
                    <form method="post" action="{{ route('saveImage') }}" accept-charset="UTF-8">
                        @csrf

                      <div class="form-group mb-3">

                        <input type="file" name="image" id="" class="form-control">

                      </div>

                      <div class="form-group">

                        <input type="submit" value="Upload Image" class="form-control btn btn-info">

                      </div>
                    </form>
                    <div>
                        <img src="{{ $photo->image_path }}" alt="Any alt text"/>
                    </div>

              

                </div>

              </div>

            </div>

        </div>

     </div>-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>