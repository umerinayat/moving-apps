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

    <meta name="description" content="Easily resize and scale the image by maintaining the image aspect ratio">
    <meta name="keywords" content="resize, scale, image, png, jpeg, online, image-processing, convert-files, water-mark, overlay, processing, ai, machine-learning, learning, batch, moving, streams, moving-streams, movingstreams.com">

    <title>Resize and scale the image by maintaining the image aspect ratio | Online Free Image Resize Tool</title>

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


    <style>
        main {
            display: flex;
            flex-wrap: nowrap;
        }

        .b-example-divider {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .bi {
            vertical-align: -.125em;
            pointer-events: none;
            fill: currentColor;
        }

        .dropdown-toggle {
            outline: 0;
        }

        .nav-flush .nav-link {
            border-radius: 0;
        }

        .btn-toggle {
            display: inline-flex;
            align-items: center;
            padding: .25rem .5rem;
            font-weight: 600;
            color: rgba(0, 0, 0, .65);
            background-color: transparent;
            border: 0;
        }

        .btn-toggle:hover,
        .btn-toggle:focus {
            color: rgba(0, 0, 0, .85);
            background-color: #d2f4ea;
        }

        .btn-toggle::before {
            width: 1.25em;
            line-height: 0;
            content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
            transition: transform .35s ease;
            transform-origin: .5em 50%;
        }

        .btn-toggle[aria-expanded="true"] {
            color: rgba(0, 0, 0, .85);
        }

        .btn-toggle[aria-expanded="true"]::before {
            transform: rotate(90deg);
        }

        .btn-toggle-nav a {
            display: inline-flex;
            padding: .1875rem .5rem;
            margin-top: .125rem;
            margin-left: 1.25rem;
            text-decoration: none;
        }

        .btn-toggle-nav a:hover,
        .btn-toggle-nav a:focus {
            background-color: #d2f4ea;
        }

        .scrollarea {
            overflow-y: auto;
        }

        .fw-semibold {
            font-weight: 600;
        }

        .lh-tight {
            line-height: 1.25;
        }
    </style>

</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" style="width: 280px;">
                        <a href="/" class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
                            <svg class="bi me-2" width="30" height="24">
                                <use xlink:href="#bootstrap" />
                            </svg>
                            <span class="fs-5 fw-semibold">Choose Images Sizes</span>
                        </a>
                        <div class="list-group list-group-flush border-bottom scrollarea">
                            <a href="#" data-id="100" class="list-group-item list-group-item-action  py-3 lh-tight image-size" aria-current="true">
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <strong class="mb-1">Size 1</strong>
                                    <small>100px</small>
                                </div>
                            </a>
                            <a href="#" data-id="200" class="list-group-item list-group-item-action  py-3 lh-tight image-size" aria-current="true">
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <strong class="mb-1">Size 2</strong>
                                    <small>200px</small>
                                </div>
                            </a>
                            <a href="#" data-id="300" class="list-group-item list-group-item-action  py-3 lh-tight image-size" aria-current="true">
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <strong class="mb-1">Size 3</strong>
                                    <small>300px</small>
                                </div>
                            </a>
                            <a href="#" data-id="600" class="list-group-item list-group-item-action  py-3 lh-tight image-size" aria-current="true">
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <strong class="mb-1">Size 4</strong>
                                    <small>600px</small>
                                </div>
                            </a>
                            <a href="#" data-id="900" class="list-group-item list-group-item-action  py-3 lh-tight image-size" aria-current="true">
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <strong class="mb-1">Size 5</strong>
                                    <small>900px</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>

                        <a id="downlodBtn" class="btn w-50 btn btn-primary mt-3" href="download" style="display: none;">
                            Download Resized Image
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="row p-3 mt-5">
                        <div class="col">
                           
                            <div class="row">
                                <div class="col">
                                    <h5>Upload Image</h5>
                                    <form>
                                        <input type="file" id="uploadImage">
                                    </form>
                                    <button id="resizeBtn" disabled class="btn btn-primary mt-4"> Resize Image </button>

                                    <div class="text-center pt-4">
                                        <img id="imagePreview" style="display: none; max-width: 20%" src="" alt="Image Preview">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="text-center pt-4">
                                        <img id="sImagePreview" style="display: none;" src="" alt="Scaled Image Preview">
                                    </div>
                                    <p id="error" style="color: red; font-weight: bold;"></p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        var imagesSizes = document.getElementsByClassName('image-size');
        var imageFile = document.getElementById('uploadImage');
        var imagePreview = document.getElementById('imagePreview');
        var resizeBtn = document.getElementById('resizeBtn');
        var sImagePreview = document.getElementById('sImagePreview');
        var downloadBtn = document.getElementById('downloadBtn');
        var error = document.getElementById('error');

        var bsEl = null;

        var size = 300;
        var imageBase64 = null;

        for (i = 0; i < imagesSizes.length; i++) {
            var sizeEl = imagesSizes[i];
            sizeEl.addEventListener('click', function(event) {
                var sValue = parseInt(this.getAttribute('data-id'));
                size = sValue;
                if (bsEl != null) bsEl.classList.remove('active')
                this.classList.add('active');
                bsEl = this;
            });
        }

        imageFile.addEventListener('change', function(event) {
            var file = this.files[0];
            getBase64(file).then(function(data) {
                imagePreview.setAttribute('src', data);
                error.style.display = 'none';
                imagePreview.style.display = "block";
                imageBase64 = data;
                resizeBtn.removeAttribute('disabled');
                downlodBtn.style.display = 'none';
            });
        });

        function getBase64(file) {
            return new Promise((resolve, reject) => {
                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = () => resolve(reader.result);
                reader.onerror = error => reject(error);
            });
        }

        resizeBtn.addEventListener('click', function(event) {
            axios.post('/image/resize', {
                'image': imageBase64,
                'size': size
            }).then(function({
                data
            }) {
                sImagePreview.setAttribute('src', data.image_url);
                downlodBtn.setAttribute('href', '/download/' + data.image_name);
                sImagePreview.style.maxWidth = size + 'px';
                sImagePreview.style.display = 'block';
                downlodBtn.style.display = 'block';
            }).catch(function(e) {
                error.innerHTML = e.response.data.message;
                error.style.display = 'block';
            });
        });
    </script>

</body>

</html>