COURSE INDEX

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<style>
header {
  background-color: #DDA0DD;
  padding: 20px;
  text-align: center;
  font-size: 35px;
  color: white;
}

table, th, td {
  border: 2px solid black; /*line box */
  border-collapse: collapse;
}
th, td {
  padding: 35px;
}
th {
  text-align: center;
}





</style>
<title>Course Index</title>
</head>



<body>
<br><br>
<div class ="container"  style="text-align: center;">
    <div class="group p-6">
    <header><h1>Course</h1></header>
    <table class="table table-striped text-center"  >

           <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th style>Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>01</td>
                    <td>CYBER LAW</td>
                    <td>SKJ4193</td>
                    <td>
                        <button class="btn btn-dark">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>

                <tr>
                    <td>02</td>
                    <td>COMPUTER FORENSIC</td>
                    <td>SKJ4323</td>
                    <td>
                        <button class="btn btn-dark">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>

                <tr>
                    <td>03</td>
                    <td>AUDIT</td>
                    <td>SKJ3133</td>
                    <td>
                        <button class="btn btn-dark">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>


    <button class="btn btn-success" type="submit">Add Course</button>

</div>





</body>
</html>
