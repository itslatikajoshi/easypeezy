<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel CRUD Example app</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Laravel CRUD app by Latika Joshi</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('companies.create') }}"> Create Company</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Company Name</th>
                    <th>Company Email</th>
                    <th>Company Address</th>
                    <th>Company Mobile</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
             
                @foreach ($companies as $key => $company)
                    <tr>
                        <td>{{ $key+1  }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->address }}</td>
                        <td>{{ $company->mobile }}</td>
                        <td>
                            <form action="{{ route('companies.destroy',$company->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <?php
        $names= array('Latika','Gaurav','Sushma','Nandi');?>
        <ol>
            <?php
            
            foreach($names as $key)
            {
               echo "<li>". $key."</li>" ;

            }?>
            
           
        </ol>
      <?php  $names1= array('Latika','Gaurav','Sushma','Nandi')?>
        <ol>
            @foreach($names1 as $key)
            <li>{{$key}}</li>
            @endforeach
        </ol>

    </div>
</body>
</html>