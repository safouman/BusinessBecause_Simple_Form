<!DOCTYPE html>
<html>
<head>
    <title>PHP MySQL form with validation using Bootstrap</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h3>PHP MySQL form with validation using Bootstrap</h3>
    <form action="pro.php" method="POST">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
        <div class="radio">
             <label><input type="radio" name="gender" value="Male" 1>Male</label>
        </div>
        <div class="radio">
        <label><input type="radio" name="gender" value="female">Female</label>
        </div>
        </div>
        <div class="form-group">
            <label>Comment:</label>
            <textarea class="form-control" name="comment" required></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
        
    </form>
</div>

</body>
</html>