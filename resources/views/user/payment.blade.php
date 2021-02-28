<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="card" style="width: 40rem; height: 20rem">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">BKash Payment</h5>
                    <form  action="{{ route('payment.post') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="payment_number" name="payment_number"
                                >
                            <input type="text" id="hidden-name" name="demo_user_id" value="{{$data->demo_user_id}}"
                                hidden>



                        </div>


                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
