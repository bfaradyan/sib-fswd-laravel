<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 22</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">User Data</h1>
        <figure>
		    <blockquote class="blockquote">
				<p>Contains data that has been stored in the database.</p>
			</blockquote>
			<figcaption class="blockquote-footer">
				CRUD <cite title="Source Title">Create Read Update Delete</cite>
			</figcaption>
		</figure>
        <a href="#" type="button" class="btn btn-primary mb-3">Add Data</a>
    </div>

    <div class="container table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>bfaradyan@gmail.com</td>
                    <td>Bismaka Faradyan</td>
                    <td>User</td>
                    <td><img src="" alt="Profile picture"></td>
                    <td>East Java, Situbondo, St. Mawar</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>nicholaus_b@gmail.com</td>
                    <td>Nicholaus Boubarkii</td>
                    <td>Admin</td>
                    <td><img src="" alt="Profile picture"></td>
                    <td>East Java, Jember, St. Mastrip</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>farhaan1999@gmail.com</td>
                    <td>Farhaan Rafiif</td>
                    <td>Admin</td>
                    <td><img src="" alt="Profile picture"></td>
                    <td>East Java, Surabaya, St. Keputih</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>