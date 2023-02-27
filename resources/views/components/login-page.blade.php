<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MPJ || {{ $title }}</title>
    <link rel="stylesheet" href="dashboard/css/vertical-layout-light/style.css">
    <link rel="stylesheet" href="dashboard/css/button.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <x-partials.alert/>
{{ $slot }}
</body>
<script src="assets/js/jquery.min.js"></script>
<script>
    function SeeMe() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    let flag = true;
    $(document).ready(function() {
        $('.form-check-input').click(function() {
            if (flag) {
                flag = false;
                $('.hide').show();
                $('.show').hide();
            } else {
                flag = true;
                $('.show').hide();
                $('.show').show();
                $('.hide').hide();
            }
        });
    });
</script>

</html>
