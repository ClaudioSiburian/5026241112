<!DOCTYPE html>
<html>

<head>
    <title>Toast Bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container mt-5">
        <div class="toast" data-autohide="false">
            <div class="toast-header">
                <strong class="mr-auto text-primary">Panglima Ragnamok</strong>
                <small class="text-muted">3000 years ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
                Maukah anda join?
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.toast').toast('show');
        });
    </script>

</body>

</html>
