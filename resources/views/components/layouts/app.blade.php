<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title','Page Title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {
            background-image: url(http://www.wallpapersxl.com/wallpapers/1366x768/light-blue/254930/light-blue-landscape-opal-lake-254930.jpg);
            background-size: cover;
            background-position: 50% 0;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        .card-like {
            margin-top: 50px;
            margin-bottom: 50px;
            color: white;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 6px;
            padding: 50px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        }

        .btn-irv {
            width: 100%;
            background: #038dab;
            color: #fff !important;
            font-weight: bold;
            padding: 10px 0;
            transition: all 0.3s;

            &:hover {
                background: #02738d;
                box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            }
        }

        .btn-irv-default {
            font-weight: bold;
            background: #bbb;
            color: #fff !important;

            &:hover {
                background: #aaa;
            }
        }

        .wizard {
            overflow: hidden;

            .wizard-header {
                margin-bottom: 30px;

                h1 {
                    margin-top: 0;
                    margin-bottom: 20px;

                    small {
                        color: #bbb;
                    }
                }

                hr {
                    border-color: #038dab;
                    border-top-width: 2px;
                }

                .steps {
                    height: 15px;

                    .wizard-step {
                        background: #038dab;
                        width: 15px;
                        height: 15px;
                        display: inline-block;
                        margin: 0 10px;
                        opacity: 0.2;
                        border-radius: 50%;
                        transition: all 0.8s;

                        &.active {
                            opacity: 1;
                        }
                    }
                }
            }

            .wizard-body {
                position: relative;
                transition: all 0.3s cubic-bezier(0.68, -0.30, 0.37, 0.6);

                .step {
                    transition: all 0.3s ease-in-out;
                    position: absolute;
                    width: 100%;
                    top: 0;
                    right: -100%;
                    opacity: 0;

                    &.initial {
                        position: relative;
                    }

                    &.off {
                        opacity: 0 !important;
                        right: 100% !important;
                    }

                    &.active {
                        right: 0;
                        margin-left: 0;
                        margin-top: 0;
                        opacity: 1;
                        transition: all 0.4s linear;
                        transition-delay: 0.1s;
                    }
                }
            }

            .wizard-footer {
                margin-top: 30px;
            }
        }

        .error {
            color: red;
            margin-top: 5px;
            margin-left: 5px
        }
    </style>
</head>
<body>
{{ $slot }}
</body>
</html>
