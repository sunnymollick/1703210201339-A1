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
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Serial</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Status</th>

                              </tr>
                            </thead>
                            <tbody>
                                @php($i=0)
                                @foreach($employees as $employee)
                                <tr>
                                    <th>{{ $i++ }}</th>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->date_of_birth }}</td>
                                    <td>{{ $employee->salary }}</td>
                                    <td>{{ $employee->gender }}</td>
                                    <td>{{ $employee->status }}</td>
                                 </tr>
                                @endforeach

                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
