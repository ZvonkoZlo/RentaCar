<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>






    <title>Uredi vozilo - Car Rental Services</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="py-20 h-screen bg-gray-300 px-2">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full px-4 py-6 ">

                    <form method="POST" action="{{ route('products.update', $category->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-1">
                            <label for="name" class="text-sm"> Naziv proizvoda </label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" value="{{ $category->name }}"
                                    class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600"
                                    @error('name') border-red-400 @enderror" />
                            </div>
                            @error('name')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>




                        <div class="mb-1">
                            <span class="text-sm">Opis proizvoda</span>
                            <textarea type="text" name="description"
                                class="h-24 py-1 px-3 w-full border-2 border-blue-400 rounded focus:outline-none focus:border-blue-600 resize-none">{{ $category->description }}</textarea>
                        </div>

                        <div class="mb-1">
                            <span class="text-sm text-gray-400">Ove podatke možete urediti kasnije</span>
                        </div>


                        <div class="mb-1">
                            <span class="text-sm">Cijena</span>
                            <input type="number" value="{{ $category->price }}" name="price" min="1"
                                class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600">
                        </div>

                        <div class="mb-1">

                            <span>Slika proizvoda</span>
                            <div
                                class="relative border-dotted h-32 rounded-lg border-dashed border-2 border-blue-700 bg-gray-100 flex justify-center items-center">
                                <div class="absolute">
                                    <div class="flex flex-col items-center"> <i
                                            class="fa fa-folder-open fa-3x text-blue-700"></i> <span
                                            class="block text-gray-400 font-normal">Dodajte sliku ovdje</span> </div>
                                </div>

                                <input type="file" class="h-full w-full opacity-0" name="image">
                            </div>
                        </div>


                        <div class="mt-3 text-right">

                            <a href="{{ route('products.index') }}">Odustani</a>
                            <button type="submit"
                                class="ml-2 h-10 w-32 bg-blue-600 rounded text-white hover:bg-blue-700">Uredi
                                proizvod</button>

                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>





    <footer>
        <p class="text-center my-5">Copyright © 2022 Car Rental Service Zvonko & Veselko</p>
    </footer>

</body>

</html>
