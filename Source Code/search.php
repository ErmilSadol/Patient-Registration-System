<?php
include 'connect.php';

$searchTerm = ''; 
$patients = [];

if(isset($_POST['search'])) {
    $searchTerm = $_POST['searchTerm'];
    $sql = "SELECT * FROM `patient` WHERE name LIKE '%$searchTerm%' OR id LIKE '%$searchTerm%'";
    $result = mysqli_query($con, $sql);
    
    if($result) {
        while($row = mysqli_fetch_assoc($result)) {
            $patients[] = $row; 
        }
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Patient Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="search.css">
</head>
<body>
    <header>
        <h1>Search Patient Information</h1>
    </header>
    <div class="info">
        <button class="btn-top"><a href="display.php" class="text-light">Client</a></button>
    </div>
    <div class="container my-5">
        <form method="post" class="mb-4">
            <div class="form-group">
                <label for="searchTerm">Search by ID or Name:</label>
                <input type="text" class="form-control" name="searchTerm" id="searchTerm" value="<?php echo $searchTerm; ?>" placeholder="Enter name or ID to search" required>
            </div>
            <button type="submit" class="btn btn-primary" name="search">Search</button>
        </form>

        <?php if(!empty($patients)) { ?>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Hospital ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Remarks</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($patients as $patient) {
                    echo '<tr>
                            <th scope="row">'.$patient['id'].'</th>
                            <td>'.$patient['name'].'</td>
                            <td>'.$patient['contact'].'</td>
                            <td>'.$patient['address'].'</td>
                            <td>'.$patient['remarks'].'</td>
                        </tr>';
                }
                ?>
            </tbody>
        </table>
        <?php } else if($searchTerm) { ?>
            <p>No patients found matching "<?php echo $searchTerm; ?>"</p>
        <?php } ?>
    </div>
</body>
</html>
