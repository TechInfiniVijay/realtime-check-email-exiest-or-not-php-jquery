<!doctype html>
<html lang="en">

<head>
    <title>Check Email Exiest OR Not Exiest.</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container w-25 mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center text-primary">Check Realtime User Exiest Or Not</h4>
            </div>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for=""></label>
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="Enter Your Email Address">
                        <div id="msg"></div>
                    </div>
                    <div class="form-group">
                        <button type="button" id="submit" class="btn btn-success">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#email').on('keyup', function() {
            var email = $(this).val();
            if (email !== '') {
                $.ajax({
                    type: "post",
                    url: "main.php",
                    data: {
                        email: email
                    },
                    success: function(result) {
                        // console.log(result)
                        if (result != 0) {
                            $('#msg').html(
                                `<span class="text-danger">Email already exiest. Not available to register.</span>`
                            );
                            $('#submit').attr("disabled", true)
                        } else {
                            $('#msg').html(
                                `<span class="text-success">Email available to register.</span>`
                            );
                            $('#submit').attr("disabled", false)
                        }
                    }
                });
            } else {
                $('#msg').html('');
                $('#submit').attr("disabled", true)
            }
        });
    });
    </script>
</body>

</html>