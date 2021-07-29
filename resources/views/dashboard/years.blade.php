    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <script src="https://cdn.bootcss.com/webfont/1.6.16/webfontloader.js"></script>
        {{-- <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
        </script> --}}
        <!--end::Web font -->
        <!--begin::Base Styles -->
        <link href="{{asset('back/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('back/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <title>Document</title>
        <style>
            form{
                margin: auto;
                width: 600px;
                height: 800px
            }
            body{
                background-color: blanchedalmond
            }
            .btn{
                padding: 20px 20px;
                border-radius: 5%;
                background-color: blue;
                color: white;
                margin-top: 20px;
            }

        </style>
    </head>
    <body>
            <!--begin::Form-->
            @include('sweetalert::alert')
            @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


            <form class="m-form m-form--fit m-form--label-align-right"  action="{{url('PostInsertName')}}" method="POST">
                @csrf
                <div class="m-portlet__body">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">
                        Year Name
                        </label>
                        <input type="text" name="name" class="form-control m-input m-input--square"  placeholder="Enter Year Name">
                        <input type="submit" class="btn">
                    </div>

                </div>
            </form>
            <!--end::Form-->


            <script src="{{asset('back/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('back/assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>

    </body>
    </html>
