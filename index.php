<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID NUMBER SYSTEM</title>
    <link rel="stylesheet" href="soft-design-system-pro.min3f71.css">
</head>

<body class="bg-warning-soft">
    <main>
        <div class="container py-7">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-gradient text-dark text-uppercase">student id system</h6>
                                <hr class="horizontal dark">
                        </div>
                        <div class="card-body">
                            <form action="process.php" method="post">
                                <div class="form-group mb-3">
                                    <label for="">Student Name</label>
                                    <input type="text" name="name" placeholder="Student Name" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Student Class</label>
                                    <select name="class_id" class="form-control">
                                        <?php
                                        $classes = mysqli_query($conn, "SELECT * FROM classes");
                                        while ($class = mysqli_fetch_assoc($classes)) {
                                        ?>
                                            <option value="<?php echo $class['id'] ?>"><?php echo $class['class_name']; ?></option>
                                        <?php 
                                        }
                                        $conn->close();
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group text-end">
                                    <input type="submit" class="bg-gradient-warning btn" name="submit">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
