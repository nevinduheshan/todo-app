
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>Blog Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        {{-- <link href="../css/blog.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    </head>

    <body>

        <div class="container">
            <header class="py-3 blog-header">
                <div class=" row flex-nowrap justify-content-between align-items-center">
                    <div class="pt-1 col-4">
                        <a class="text-muted" href="#">Subscribe</a>
                    </div>
                    <div class="text-center col-4">
                        <a class="blog-header-logo text-dark" href="#">Large</a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <a class="text-muted" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="mx-3">
                                <circle cx="10.5" cy="10.5" r="7.5"></circle>
                                <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
                            </svg>
                        </a>
                        <a class="mx-4 btn btn-sm btn-outline-secondary" href="{{ route('login') }}">Login</a>
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('register') }}">Register</a>
                    </div>
                </div>
            </header>

            <div class="p-3 text-white rounded jumbotron p-md-5 bg-dark">
                <div class="px-0 col-md-6">
                    <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
                    <p class="my-3 lead">Multiple lines of text that form the lede, informing new readers quickly and
                        efficiently about what's most interesting in this post's contents.</p>
                    <p class="mb-0 lead"><a href="#" class="text-white font-weight-bold">Continue reading...</a>
                    </p>
                </div>
            </div>

            {{-- change the contect  --}}
            <div>
                @yield('content')
            </div>
        </div>

        <footer class="justify-center">
            <p class="text-white ">Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a
                    href="https://twitter.com/mdo">@mdo</a>.</p>
        </footer>

        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script>
            window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')
        </script>
        <script src="../../../../assets/js/vendor/popper.min.js"></script>
        <script src="../../../../dist/js/bootstrap.min.js"></script>
        <script src="../../../../assets/js/vendor/holder.min.js"></script>
        <script>
            Holder.addTheme('thumb', {
                bg: '#55595c',
                fg: '#eceeef',
                text: 'Thumbnail'
            });
        </script>
    </body>

    </html>
