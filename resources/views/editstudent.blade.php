<!doctype html>
<html lang="en">

<head>
    <title>Bootstrap Datepicker With Inputbox</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(function() {
            $('.datepicker').datepicker({
                format: 'mm-dd-yyyy'
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <form class="row g-3">
            {{ csrf_field() }}

            <div class="col-md-6">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" name="firstname" value="{{ old('lastname') ?? $student['lastname'] }}"
                    class="form-control">
            </div>
            <div class="col-md-6">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" name="firstname" value="{{ old('firstname') ?? $student['firstname'] }}"
                    class="form-control">
            </div>
            <div class="col-mt-4 col-md-6 ">
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthday" value="{{ old('birthday') ?? $student['birthday'] }}">
            </div>
            <label for="status">Is new</label>
            <input type="radio" id="Yes" name="no" value="{{ old('status') ?? $student['isnewstudent']}}">
            <label for="yes">Yes</label><br>
            <input type="radio" id="No" name="no" value="{{ old('status') ?? $student['isnewstudent'] }}">
            <label for="yes">No</label><br>
</body>

</html>
