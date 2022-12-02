<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    <!-- CSS files -->
    <link href="{{asset('public/dist/css/tabler.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/dist/css/tabler-flags.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/dist/css/tabler-payments.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/dist/css/tabler-vendors.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('public/dist/css/demo.min.css')}}" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
    </style>
  </head>
  <body >
    <div class="page">
      <!-- Navbar -->
      <header class="navbar navbar-expand-md navbar-light d-print-none">
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
              <!-- <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
              Image ToolKit
            </a>
          </h1>
          <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item d-none d-md-flex me-3">
              <div class="btn-list">
                <a href="{{ route('home') }}" class="btn">
                  Image Compressor
                </a>
                <a href="{{ route('resizer') }}" class="btn" rel="noreferrer">
                  Image Resizer
                </a>
              </div>
            </div>
            <div class="d-none d-md-flex">
             
            </div>
          
          </div>
        </div>
      </header>
      
      <div class="page-wrapper">
        <!-- Page header -->
       
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-deck row-cards">
              <div class="col-12">
                @yield('content')
              </div>
            </div>
          </div>
        </div>
        <footer class="footer footer-transparent d-print-none">
          <div class="container-xl">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ms-lg-auto">
                <!-- <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item"><a href="./docs/" class="link-secondary">Documentation</a></li>
                  <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                  <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a></li>
                  <li class="list-inline-item">
                    <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                      Sponsor
                    </a>
                  </li>
                </ul> -->
              </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright &copy; {{ date('Y') }}
                    <a href="https://how2web.net" class="link-secondary">https://how2web.net</a>.
                    All rights reserved.
                  </li>
                 
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
   
    <!-- Libs JS -->
    <script src="{{asset('public/dist/libs/apexcharts/dist/apexcharts.min.js')}}" defer></script>
    <script src="{{asset('public/dist/libs/jsvectormap/dist/js/jsvectormap.min.js')}}" defer></script>
    <script src="{{asset('public/dist/libs/jsvectormap/dist/maps/world.js')}}" defer></script>
    <script src="{{asset('public/dist/libs/jsvectormap/dist/maps/world-merc.js')}}" defer></script>
    <!-- Tabler Core -->
    <script src="{{asset('public/dist/js/tabler.min.js')}}" defer></script>
    <script src="{{asset('public/dist/js/demo.min.js')}}" defer></script>
    <style>
        html * {
            box-sizing: border-box;
        }

        p {
        margin: 0;
        }

            .upload__box {
                padding: 40px;
            }
            .upload__inputfile {
                width: .1px;
                height: .1px;
                opacity: 0;
                overflow: hidden;
                position: absolute;
                z-index: -1;
            }
        .upload__btn-box{
          display: flex;
          justify-content: center;
          
        }

        .compress{
          display: flex;
          justify-content: center;
        }
        
        .upload__btn {
            width:400px;
            height:150px;
            display: inline-block;
            font-weight: 600;
            color: #C8CBCE;
            text-align: center;
            min-width: 116px;
            padding: 5px;
            transition: all .3s ease;
            cursor: pointer;
            border: 2px dashed #C8CBCE;
            box-sizing: border-box;
            /* background-color: #4045ba; */
            /* border-color: #4045ba; */
            border-radius: 10px;
            line-height: 26px;
            font-size: 14px;
            
            .upload:hover {
            background-color: unset;
            color: #4045ba;
            transition: all .3s ease;
            }
            
            .upload-box {
            margin-bottom: 10px;
            }
        }
        
        .upload__img {
            .upload-wrap {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
            }
            
            .upload-box {
            width: 200px;
            padding: 0 10px;
            margin-bottom: 12px;
            }
            
            .upload-close {
                width: 24px;
                height: 24px;
                border-radius: 50%;
                background-color: rgba(0, 0, 0, 0.5);
                position: absolute;
                top: 10px;
                right: 10px;
                text-align: center;
                line-height: 24px;
                z-index: 1;
                cursor: pointer;

                .upload:after {
                content: '\2716';
                font-size: 14px;
                color: white;
                }
            }
        }
        

        .img-bg {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            padding-bottom: 100%;
        }


    </style>

<script>
        localStorage.setItem("user", Math.floor(Math.random() * 10000000) );
        var user = localStorage.getItem("user");
        $('.user').val(user);
        jQuery(document).ready(function () {
            ImgUpload();
        });

        function ImgUpload() {
          var imgWrap = "";
          var imgArray = [];

          $('.upload__inputfile').each(function () {
            $(this).on('change', function (e) {
              $('.compress').show();
              imgWrap = $('.upload__img-wrap');
              console.log(imgWrap);
              var maxLength = $(this).attr('data-max_length');

              var files = e.target.files;
              var filesArr = Array.prototype.slice.call(files);
              var iterator = 0;
              filesArr.forEach(function (f, index) {

                if (!f.type.match('image.*')) {
                  return;
                }

                if (imgArray.length > maxLength) {
                  return false
                } else {
                  var len = 0;
                  for (var i = 0; i < imgArray.length; i++) {
                    if (imgArray[i] !== undefined) {
                      len++;
                    }
                  }
                  if (len > maxLength) {
                    return false;
                  } else {
                    imgArray.push(f);
                    console.log(f);
                    var reader = new FileReader();
                    reader.onload = function (e) {
                      var html = "<div class='upload__img-box col-md-3'>  <div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                      imgWrap.append(html);
                      iterator++;
                    }
                    reader.readAsDataURL(f);
                  }
                }
              });
            });
          });

          $('body').on('click', ".upload__img-close", function (e) {
            var file = $(this).parent().data("file");
            for (var i = 0; i < imgArray.length; i++) {
              if (imgArray[i].name === file) {
                imgArray.splice(i, 1);
                break;
              }
            }
            $(this).parent().parent().remove();
          });
        }  
    </script>
    
  </body>
</html>