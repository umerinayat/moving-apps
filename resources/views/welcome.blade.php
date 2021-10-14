<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/site.webmanifest') }}">

    <meta name="description" content="Download Web Page as an Image, convert web page to full image using web page URL you can convert the content of the page into the Full Image, download it and share with other peoples. You will get the full scrolling content of the web page in the image.">
    <meta name="keywords" content="batch, web, page, download, png, jpeg, image-processing, online, webpage, pdf, url, image, convert, jpg, full, ai, machine-learning, learning, machine, moving, streams, moving-streams, movingstreams.com">

    <title>Download web page as an image | Online free web page to image download</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-56G7KJLN1D"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-56G7KJLN1D');
    </script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9538130018518319"
     crossorigin="anonymous"></script>

    <style>
        html,
        body {
            height: 100%;
            overflow-x: hidden;
        }

        body {
            /* display: flex;
            align-items: center; */
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            padding: 15px;

        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>

<body>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <form id="form" class="form-signin text-center mt-5">
                        <p class="h3 mb-3 fw-normal">Convert Web Page Content to Full Image, Enter Your Webpage URL.
                    </p>

                        <div class="form-floating">
                            <input type="text" class="form-control" id="urlInput" name="url" placeholder="example.com">
                            <label for="urlInput">Webpage URL</label>
                        </div>
                        <p id="errorText" class="mt-2 text-danger" style="display: none;"> <strong>Please Enter Valid
                                Webpage URL</strong> </p>


                        <button id="convertBtn" class="w-100 btn btn-lg btn-primary mt-3" type="submit">Convert
                            <div class="spinner-border spinner-border-sm text-light" style="display: none;" id="spinner" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>

                        <a id="downlodBtn" class="w-100 btn btn btn-primary mt-3" href="download" style="display: none;">
                            Download
                        </a>

                    </form>
                </div>
                <div class="col">
                    <img id="image" style="display: none;" src="" alt="webpage content to image, png, jpeg">
                </div>
            </div>
            <div class="row mt-4">
                <div class="row">
                    <div class="col-sm-4">
                        <p class="p-4 text-start">
                            Download Web Page as an Image, convert web page to full image using web page URL you can convert the content of the page into the Full Image, download it and share with other peoples. You will get the full scrolling content of the web page in the image.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center mt-5">
            <div class="col">
                <p class="mt-5 mb-3 text-muted">&copy; {{date('Y')}} All Rights Reserved <a href="http://movingstreams.com">movingstreams.com</a> </p>
            </div>
        </div>

    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        var form = document.getElementById('form');
        var urlInput = document.getElementById('urlInput');
        var downlodBtn = document.getElementById('downlodBtn');

        var errorText = document.getElementById('errorText');
        var spinner = document.getElementById('spinner');
        var image = document.getElementById('image');

        function handleFormSubmit(event) {

            event.preventDefault();

            errorText.style.display = 'none';
            downlodBtn.style.display = 'none';
            var url = urlInput.value;

            if (!validURL(url)) {
                errorText.style.display = 'block';
                return;
            }

            spinner.style.display = 'inline-block';
            convertBtn.setAttribute('disabled', true);
            axios.post('/webpage-to-image', {
                'url': url
            }).then(function({
                data
            }) {
                image.setAttribute('src', data.view_url);
                downlodBtn.setAttribute('href', '/download/' + data.img_name);
                spinner.style.display = 'none';
                image.style.display = 'block';
                downlodBtn.style.display = 'block';
                convertBtn.removeAttribute('disabled');

            }).catch(function(e) {
                spinner.style.display = 'none';
                convertBtn.removeAttribute('disabled');
            });


        }

        form.addEventListener('submit', handleFormSubmit);

        function validURL(str) {
            var pattern = new RegExp('^(https?:\\/\\/)?' + // protocol
                '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|' + // domain name
                '((\\d{1,3}\\.){3}\\d{1,3}))' + // OR ip (v4) address
                '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*' + // port and path
                '(\\?[;&a-z\\d%_.~+=-]*)?' + // query string
                '(\\#[-a-z\\d_]*)?$', 'i'); // fragment locator
            return !!pattern.test(str);
        }
    </script>



</body>

</html>