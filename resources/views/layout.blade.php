<html>

<head>
    <title>
        Image viewer
    </title>
    <script src="https://kit.fontawesome.com/874f2e7339.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>

    </style>
</head>

<body>

    <section id="home" class="home-section" style="background-image: url({{asset('css/6024864.jpg')}})"
>
    <header class="nav-bar">
            <div class="heading-main">
                <a href="{{url('/')}}"><h1>Image viewer</h1></a>
            </div>

            <div class="header-links">
                <div class="links">

                    <ul>
                  <!--  @php
                    $category = App\Models\category::where('status','1')->get();
                    @endphp -->

                    <li>                <h2>Categories</h2>
</li>
                        @foreach($category as $catData)

                        <li><a href="{{url('category/'.$catData->id)}}">{{$catData->categories}}</a></li>
             
@endforeach
                    </ul>
                </div>
                <div class="hambar" id="show">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="hambar" id="hide">
                    <i class="fa-solid fa-xmark"></i>

                </div>
            </div>

        </header>

        <div class="home-center">
            <div class="heading-main-home">
                Image Viewer
            </div>
            <span class="heading__sub-main"> Here is the sub heading </span>
            <div class="add-img-btn">
                <a href="#form" class="add-btn">Add my image</a>
            </div>
        </div>
    </section>
   <div class="container">
    @yield('categories')
    @yield('index')

</div>
<section id="form">
        <div class="form-main-container">

            <div class="heading_contact">
                <h2> Add your image</h2>
            </div>
            <div class="form-container">
                <div class="form-inner">
                @if(session()->has('message'))
                                                <div class="alert" id="alerthide" style="color:green">
                                            {{ session()->get('message') }}
                                          </div>
                                        @endif
                    <form action="/add-category" method="post">
                        @csrf
                    <div class="form-input category">
                        <label for="" class="form_label">Add category</label>

                        <input type="text" name="categories" id="" class="form__field category" placeholder="Enter category name">
                        <button class="adding-category">Add</button>
                    </div>
</form>
                </div>
                <div class="form-inner">
                    <form action="/add-images" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-input">
                     @if(session()->has('status'))
                     <div class="alert" id="alerthide" style="color:green">
                                            {{ session()->get('status') }}
                                          </div>
                                        @endif
                                       
                            <label for="" class="form_label">Select categories</label>
                            <div class="form-cat-btn">
                           
                                <select name="categories_id" id="" class="form__field">
                                    <option value="">Select categories</option>
                                   
                                    
                                    @foreach($category as $catData)
                                    <option value="{{$catData->id }}">{{$catData->categories }}</option>

                                    @endforeach
                                </select>
                               
                            </div>
                        </div>


                        <div class="form-input">
                            <label for="" class="form_label category-input">Image name</label>
                            <input type="text" name="name" id="" class="form__field" placeholder="Enter Image name">
                        </div>
                        <div class="form-input">
                            <label for="" class="form_label">Image file</label>
                            <input type="file" name="image" class="form__field" id="" multiple="multiple">
                        </div>
                        <button type="submit" class="submit-btn">Submit</button>
                    </form>

                </div>
            </div>
          

        </div>
    </section>
   
    <footer class="footer-section">
        <h3>@copyright. Made By Muhammad Asad</h3>
    </footer>
</body>
<script>
    $("#show").click(function () {
        $(".links").show();
        $("#show").hide();
        $("#hide").show();

    });
    $("#hide").click(function () {
        $(".links").hide();
        $("#show").show();
        $("#hide").hide();
    });

 



</script>



</html>