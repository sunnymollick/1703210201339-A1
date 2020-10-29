<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Add Employee</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="{{ route('add-employee') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="date" name="date_of_birth" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Salary</label>
                                <input type="number" name="salary" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Select Gender</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" checked id="exampleRadios2" value="male">
                                    <label class="form-check-label" for="exampleRadios2">
                                      Male
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
                                    <label class="form-check-label" for="exampleRadios2">
                                      Female
                                    </label>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="">Status</label>
                                <div class="form-check">
                                    <input class="form-check-input" name="status" class="form-control" type="checkbox" value="1" id="defaultCheck1" checked>
                                    <label class="form-check-label" for="defaultCheck1">
                                       On Duty
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" name="status" class="form-control" type="checkbox" value="0" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                       Off Duty
                                    </label>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <input type="submit" class="btn btn-block btn-primary" value="Add Employee">
                              </div>




                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
