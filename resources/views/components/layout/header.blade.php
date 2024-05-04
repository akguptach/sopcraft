<?php
$services = \App\Models\Service::where('website_type', 'SOP')->get();
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="canonical" href="https://essayhelp.com/">
    <link rel="icon" href="{{ asset('images/sop-craft-icon.png') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Slick Slider style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap Datepicker CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css" integrity="sha512-34s5cpvaNG3BknEWSuOncX28vz97bRI59UnVtEEpFX536A7BtZSJHsDyFoCl8S7Dt2TPzcrCEoHBGeM4SUBDBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Polyfill.io will load polyfills your browser needs -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <!-- Slick Slider JS --><!-- Popper JS for Bootstrap tooltip -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <title>
        @if(isset($title))
        {{$title}}
        @else
        Welcome to Essay Help
        @endif
    </title>
    <style>
        body {
            font-family: "Inter", sans-serif;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }



        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 999;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .blink {
            animation: blink 1s infinite;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <header class="main-header">
        <!-- Fixed navbar fixed-top class bg-light-->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mx-auto mx-md-start" href="{{ route('home') }}">
                    <picture>
                        <svg width="131" height="23" viewBox="0 0 131 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 7.98276L13.5569 15.8623L16.1376 14.3139L5.26449 7.91394L13.5569 3.19999L21.815 8.01717L19.0967 9.59996L13.6602 6.43438L11.0795 8.01717L19.0623 12.6623L27.1139 7.94835L13.4193 0L0 7.98276Z" fill="#6857D0" />
                            <path d="M6.57207 13.1785L3.95703 11.6301V16.8946L13.557 22.5032L23.1569 16.8602L23.1914 11.5957L20.5763 13.0753V15.3118L13.557 19.3376L6.57207 15.2774V13.1785Z" fill="#1F4EBA" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.95477 8.77431H1.65103V8.77442H1.41008L1.37659 13.4964C1.01677 13.6123 0.756428 13.9498 0.756428 14.3481C0.756428 14.6886 0.94656 14.9846 1.22642 15.1358L0.6875 18.1335C0.802195 18.0418 1.06599 17.872 1.20363 17.9271C1.27075 17.9539 1.31692 17.9965 1.36462 18.0404C1.43391 18.1043 1.50641 18.1712 1.65103 18.1971V18.2022L1.66863 18.2L1.68534 18.2023V18.1976C1.84728 18.172 1.92791 18.1047 2.00493 18.0403C2.05756 17.9964 2.10851 17.9538 2.18258 17.927C2.33445 17.8719 2.62554 18.0416 2.7521 18.1334L2.1487 15.0917C2.3881 14.9311 2.54567 14.658 2.54567 14.3481C2.54567 13.9748 2.31692 13.6548 1.99191 13.5208L1.95477 8.77431Z" fill="#6857D0" />
                            <path d="M41.3323 8.54459C41.2744 7.96035 41.0257 7.50649 40.5863 7.18299C40.147 6.85949 39.5506 6.69774 38.7974 6.69774C38.2856 6.69774 37.8535 6.77016 37.501 6.91501C37.1485 7.05504 36.8782 7.25059 36.6898 7.50166C36.5064 7.75274 36.4146 8.03761 36.4146 8.35628C36.405 8.62184 36.4605 8.8536 36.5812 9.05156C36.7067 9.24953 36.8782 9.42093 37.0954 9.56578C37.3127 9.70581 37.5638 9.82893 37.8487 9.93515C38.1335 10.0365 38.4377 10.1235 38.7612 10.1959L40.0938 10.5146C40.7408 10.6594 41.3347 10.8525 41.8755 11.094C42.4163 11.3354 42.8846 11.6323 43.2806 11.9848C43.6765 12.3373 43.9831 12.7525 44.2004 13.2305C44.4225 13.7085 44.5359 14.2565 44.5408 14.8746C44.5359 15.7823 44.3042 16.5693 43.8455 17.2356C43.3916 17.8971 42.735 18.4113 41.8755 18.7783C41.0209 19.1404 39.99 19.3215 38.7829 19.3215C37.5855 19.3215 36.5426 19.138 35.6542 18.7711C34.7706 18.4041 34.0801 17.8609 33.5828 17.1415C33.0903 16.4172 32.832 15.5216 32.8078 14.4545H35.8425C35.8763 14.9518 36.0187 15.3671 36.2698 15.7002C36.5257 16.0285 36.8661 16.2772 37.291 16.4462C37.7207 16.6104 38.206 16.6924 38.7467 16.6924C39.2778 16.6924 39.739 16.6152 40.1301 16.4607C40.526 16.3062 40.8326 16.0913 41.0499 15.8161C41.2671 15.5409 41.3758 15.2246 41.3758 14.8673C41.3758 14.5342 41.2768 14.2541 41.0788 14.0272C40.8857 13.8003 40.6008 13.6071 40.2242 13.4478C39.8524 13.2884 39.3961 13.1436 38.8554 13.0132L37.2403 12.6077C35.9897 12.3035 35.0023 11.8279 34.2781 11.1809C33.5538 10.5339 33.1941 9.66235 33.1989 8.56631C33.1941 7.66824 33.4331 6.88363 33.916 6.21249C34.4036 5.54135 35.0723 5.01747 35.9221 4.64086C36.7719 4.26425 37.7376 4.07594 38.8192 4.07594C39.92 4.07594 40.8809 4.26425 41.7017 4.64086C42.5273 5.01747 43.1695 5.54135 43.6282 6.21249C44.0869 6.88363 44.3235 7.661 44.338 8.54459H41.3323ZM60.2806 11.6951C60.2806 13.3126 59.974 14.6887 59.3608 15.8233C58.7524 16.958 57.922 17.8247 56.8694 18.4234C55.8216 19.0173 54.6435 19.3142 53.335 19.3142C52.0169 19.3142 50.8339 19.0149 49.7862 18.4162C48.7384 17.8174 47.9103 16.9508 47.302 15.8161C46.6936 14.6814 46.3894 13.3078 46.3894 11.6951C46.3894 10.0776 46.6936 8.70151 47.302 7.56684C47.9103 6.43218 48.7384 5.5679 49.7862 4.97401C50.8339 4.3753 52.0169 4.07594 53.335 4.07594C54.6435 4.07594 55.8216 4.3753 56.8694 4.97401C57.922 5.5679 58.7524 6.43218 59.3608 7.56684C59.974 8.70151 60.2806 10.0776 60.2806 11.6951ZM57.1011 11.6951C57.1011 10.6473 56.9442 9.76375 56.6304 9.04432C56.3214 8.3249 55.8844 7.77929 55.3195 7.40751C54.7545 7.03572 54.0931 6.84983 53.335 6.84983C52.577 6.84983 51.9155 7.03572 51.3506 7.40751C50.7856 7.77929 50.3463 8.3249 50.0324 9.04432C49.7234 9.76375 49.5689 10.6473 49.5689 11.6951C49.5689 12.7428 49.7234 13.6264 50.0324 14.3459C50.3463 15.0653 50.7856 15.6109 51.3506 15.9827C51.9155 16.3545 52.577 16.5403 53.335 16.5403C54.0931 16.5403 54.7545 16.3545 55.3195 15.9827C55.8844 15.6109 56.3214 15.0653 56.6304 14.3459C56.9442 13.6264 57.1011 12.7428 57.1011 11.6951ZM62.6036 19.1115V4.27873H68.4556C69.5806 4.27873 70.5391 4.49359 71.3309 4.92332C72.1228 5.34821 72.7263 5.93969 73.1415 6.69774C73.5616 7.45096 73.7716 8.32007 73.7716 9.30505C73.7716 10.29 73.5592 11.1591 73.1343 11.9124C72.7094 12.6656 72.0938 13.2522 71.2875 13.6723C70.4859 14.0924 69.5154 14.3024 68.376 14.3024H64.646V11.7892H67.869C68.4725 11.7892 68.9698 11.6854 69.3609 11.4778C69.7569 11.2654 70.0514 10.9733 70.2445 10.6015C70.4425 10.2249 70.5415 9.79272 70.5415 9.30505C70.5415 8.81256 70.4425 8.38284 70.2445 8.01588C70.0514 7.6441 69.7569 7.35681 69.3609 7.15402C68.965 6.9464 68.4629 6.84259 67.8545 6.84259H65.7397V19.1115H62.6036Z" fill="#0E0F0C" />
                            <path d="M93.9548 9.47163H90.7826C90.7246 9.06122 90.6063 8.69668 90.4277 8.37801C90.249 8.05451 90.0197 7.77929 89.7396 7.55236C89.4596 7.32542 89.1361 7.1516 88.7691 7.0309C88.407 6.91019 88.0135 6.84983 87.5886 6.84983C86.8209 6.84983 86.1522 7.04055 85.5824 7.42199C85.0127 7.7986 84.5709 8.34904 84.257 9.07329C83.9432 9.79272 83.7863 10.6666 83.7863 11.6951C83.7863 12.7525 83.9432 13.6409 84.257 14.3603C84.5757 15.0798 85.0199 15.623 85.5897 15.9899C86.1594 16.3569 86.8185 16.5403 87.5669 16.5403C87.9869 16.5403 88.3756 16.4848 88.7329 16.3738C89.095 16.2627 89.4161 16.101 89.6962 15.8885C89.9762 15.6712 90.208 15.4081 90.3915 15.0991C90.5798 14.7901 90.7101 14.4376 90.7826 14.0417L93.9548 14.0562C93.8727 14.737 93.6675 15.3936 93.3392 16.0261C93.0157 16.6538 92.5787 17.2163 92.0283 17.7136C91.4827 18.2061 90.8308 18.5972 90.0728 18.8869C89.3196 19.1718 88.4674 19.3142 87.5162 19.3142C86.1932 19.3142 85.0103 19.0149 83.9673 18.4162C82.9292 17.8174 82.1084 16.9508 81.5049 15.8161C80.9061 14.6814 80.6068 13.3078 80.6068 11.6951C80.6068 10.0776 80.911 8.70151 81.5194 7.56684C82.1277 6.43218 82.9534 5.5679 83.9963 4.97401C85.0392 4.3753 86.2125 4.07594 87.5162 4.07594C88.3756 4.07594 89.1723 4.19665 89.9062 4.43807C90.6449 4.67948 91.2992 5.03195 91.8689 5.49548C92.4387 5.95417 92.9022 6.51667 93.2595 7.18299C93.6216 7.8493 93.8534 8.61218 93.9548 9.47163ZM96.1457 19.1115V7.98691H99.1368V9.92791H99.2527C99.4555 9.23746 99.7959 8.71599 100.274 8.36352C100.752 8.00622 101.302 7.82757 101.925 7.82757C102.08 7.82757 102.246 7.83723 102.425 7.85654C102.604 7.87586 102.761 7.90241 102.896 7.93621V10.6739C102.751 10.6304 102.55 10.5918 102.295 10.558C102.039 10.5242 101.804 10.5073 101.592 10.5073C101.138 10.5073 100.733 10.6063 100.375 10.8043C100.023 10.9974 99.7428 11.2678 99.5352 11.6154C99.3324 11.9631 99.231 12.3638 99.231 12.8177V19.1115H96.1457ZM107.344 19.3215C106.635 19.3215 106.002 19.1984 105.447 18.9521C104.892 18.701 104.452 18.3317 104.129 17.844C103.81 17.3515 103.651 16.7383 103.651 16.0044C103.651 15.3864 103.764 14.8673 103.991 14.4473C104.218 14.0272 104.527 13.6892 104.918 13.4333C105.309 13.1774 105.753 12.9843 106.251 12.8539C106.753 12.7235 107.279 12.6318 107.83 12.5787C108.477 12.5111 108.998 12.4483 109.394 12.3904C109.79 12.3276 110.077 12.2359 110.256 12.1152C110.435 11.9944 110.524 11.8158 110.524 11.5792V11.5358C110.524 11.0771 110.379 10.7222 110.089 10.4711C109.804 10.22 109.399 10.0945 108.873 10.0945C108.317 10.0945 107.876 10.2176 107.547 10.4639C107.219 10.7053 107.002 11.0095 106.895 11.3764L104.042 11.1447C104.187 10.4687 104.472 9.88446 104.896 9.39196C105.321 8.89464 105.869 8.5132 106.541 8.24764C107.216 7.97725 107.999 7.84206 108.887 7.84206C109.505 7.84206 110.097 7.91449 110.662 8.05934C111.231 8.20419 111.736 8.42871 112.175 8.73289C112.619 9.03708 112.969 9.42818 113.225 9.90618C113.481 10.3794 113.609 10.9467 113.609 11.6082V19.1115H110.683V17.5688H110.596C110.418 17.9164 110.179 18.223 109.879 18.4886C109.58 18.7493 109.22 18.9545 108.8 19.1042C108.38 19.2491 107.895 19.3215 107.344 19.3215ZM108.228 17.1922C108.682 17.1922 109.083 17.1029 109.43 16.9242C109.778 16.7407 110.051 16.4945 110.249 16.1855C110.447 15.8764 110.546 15.5264 110.546 15.1353V13.9548C110.449 14.0175 110.316 14.0755 110.147 14.1286C109.983 14.1769 109.797 14.2227 109.59 14.2662C109.382 14.3048 109.174 14.341 108.967 14.3748C108.759 14.4038 108.571 14.4304 108.402 14.4545C108.04 14.5076 107.723 14.5921 107.453 14.708C107.183 14.8239 106.973 14.9808 106.823 15.1788C106.673 15.3719 106.598 15.6133 106.598 15.903C106.598 16.3231 106.751 16.6442 107.055 16.8663C107.364 17.0835 107.755 17.1922 108.228 17.1922ZM121.985 7.98691V10.3045H115.119V7.98691H121.985ZM116.691 19.1115V7.18299C116.691 6.37665 116.848 5.70792 117.162 5.1768C117.48 4.64569 117.915 4.24735 118.465 3.98179C119.016 3.71623 119.641 3.58345 120.341 3.58345C120.814 3.58345 121.246 3.61966 121.638 3.69209C122.034 3.76451 122.328 3.82969 122.521 3.88763L121.971 6.20525C121.85 6.16662 121.7 6.13041 121.522 6.09661C121.348 6.06281 121.169 6.04591 120.986 6.04591C120.532 6.04591 120.216 6.15213 120.037 6.36458C119.858 6.5722 119.769 6.86432 119.769 7.24093V19.1115H116.691ZM129.787 7.98691V10.3045H123.088V7.98691H129.787ZM124.609 5.32166H127.694V15.693C127.694 15.9778 127.738 16.1999 127.825 16.3593C127.911 16.5138 128.032 16.6224 128.187 16.6852C128.346 16.748 128.529 16.7794 128.737 16.7794C128.882 16.7794 129.027 16.7673 129.172 16.7431C129.316 16.7142 129.428 16.6924 129.505 16.678L129.99 18.9738C129.836 19.0221 129.618 19.0777 129.338 19.1404C129.058 19.208 128.718 19.2491 128.317 19.2635C127.573 19.2925 126.922 19.1935 126.362 18.9666C125.806 18.7397 125.374 18.3872 125.065 17.9092C124.756 17.4312 124.604 16.8276 124.609 16.0986V5.32166Z" fill="#6857D0" />
                        </svg>


                        <!--<source media="(min-width:465px)" srcset="{{ asset('images/sop-craft-logo.webp') }}" type="image/webp">
 <img src="{{ asset('images/sop-craft-logo.svg') }}" alt="Essay Help" title="Essay Help">-->
                    </picture>
                </a>

                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        @guest
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('why_us') ? 'active' : '' }}" aria-current="page" href="{{ route('why_us') }}">Why us?</a>
                        </li>
                        <!--<li class="nav-item">
          <a class="nav-link {{ request()->is('refer_friend') ? 'active' : '' }}" href="{{ route('refer_friend') }}">Refer a friend</a>
         </li>-->
                        <li class="nav-item">
                            <div class="dropdown">
                                <span class="fa fa-caret-down nav-link">Our Services</span>

                                <div class="dropdown-content">

                                    @foreach($services as $service)
                                    @if($service->seo && $service->seo->seo_url_slug)
                                    <a class="dropdown-item {{ (request()->is('Services') ) ? 'active' : '' }}" href="{{ route('Services.Index',['slug'=>@$service->seo->seo_url_slug]) }}">{{$service->service_name}}</a>
                                    @endif
                                    @endforeach

                                    <!--<a class="dropdown-item {{ request()->is('Services') ? 'active' : '' }}" href="{{ route('Services') }}">SOP Writing</a>
                                    <a class="dropdown-item {{ request()->is('Dissertation_service') ? 'active' : '' }}" href="{{ route('Dissertation_service') }}">Admission Essay</a>
                                    <a class="dropdown-item {{ request()->is('Research_writing_service') ? 'active' : '' }}" href="{{ route('Research_writing_service') }}">CV or Resume writing</a>
                                    <a class="dropdown-item {{ request()->is('Term_writing_service') ? 'active' : '' }}" href="{{ route('Term_writing_service') }}">Letter of recommendation</a>
                                    <a class="dropdown-item {{ request()->is('Admission_writing_service') ? 'active' : '' }}" href="{{ route('Admission_writing_service') }}">Personal Statement</a>
                                    <a class="dropdown-item {{ request()->is('Admission_writing_service') ? 'active' : '' }}" href="{{ route('Admission_writing_service') }}">Scholarship Essay Writing</a>-->

                                </div>
                            </div>
                        </li>
                        <!--<li class="nav-item">
          <a class="nav-link  {{ request()->is('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blogs</a>
         </li>-->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}" href="{{ route('contact-us') }}">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('faq') ? 'active' : '' }}" href="{{ route('faq') }}">FAQ</a>
                        </li>
                        <li class="nav-item" id="is_login">
                            <a class="nav-link" data-bs-toggle="modal" href="#loginModal">Log in / Sign up</a>
                        </li>
                        @endguest
                        @auth
                        <x-menu />
                        <x-login_logout_menu />
                        @endauth
                    </ul>
                    <x-order_now />
                </div>
            </div>
        </nav>
    </header>