<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/site.webmanifest') }}">

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <title> Admin | Moving Streams </title>

</head>

<body>

    <div id="app">
        @include('admin.layouts.partials.sidebar')

        <div id="main">
            @include('admin.layouts.partials.topbar')
        </div>
    </div>


    <script>
        var toggleSidebar = document.getElementById('toggle-sidebar');
        var sidebar = document.getElementById('aside');

        var mIcons = document.querySelectorAll('.m-icon');
        var mTexts = document.querySelectorAll('.m-text');




        toggleSidebar.addEventListener('click', function(event) {

            if (sidebar.classList.contains('open-sidebar')) {
                sidebar.classList.remove('open-sidebar');
                sidebar.classList.add('close-sidebar');
                toggleSidebar.innerHTML = 'Open';



                for (t = 0; t < mTexts.length; t++) {
                    mTexts[t].style.display = 'none';
                }

                for (i = 0; i < mIcons.length; i++) {
                    mIcons[i].style.display = 'block';
                }


            } else if (sidebar.classList.contains('close-sidebar')) {
                sidebar.classList.remove('close-sidebar');
                sidebar.classList.add('open-sidebar');
                toggleSidebar.innerHTML = 'Close';
              var handle =  setInterval(() => {
                  console.log(window.getComputedStyle(sidebar).width)
                    if (parseInt(window.getComputedStyle(sidebar).width.replace('px', '')) > 200) {
                    for (i = 0; i < mIcons.length; i++) {
                        mIcons[i].style.display = 'none';
                    }

                    for (t = 0; t < mTexts.length; t++) {
                        mTexts[t].style.display = 'block';
                    }

                    debugger

                    clearInterval(handle);
                }
                console.log('handler');
               }, 100);



            }

        });
    </script>

</body>

</html>