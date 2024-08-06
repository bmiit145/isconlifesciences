<?php
require_once('db_conn.php');

$toastMessage = "";
$toastSuccess = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category_id = $_POST['category'];
    $name = $_POST['name'];
    $short_description = $_POST['short_description'];
    $description_long = $_POST['description_long'];

    // Fetch category name from database
    $stmt = $conn->prepare("SELECT name FROM categories WHERE id = ?");
    $stmt->bind_param("i", $category_id);
    $stmt->execute();
    $stmt->bind_result($category_name);
    $stmt->fetch();
    $stmt->close();

    // Handle file uploads
    $images = [];
    if (isset($_FILES['images'])) {
        $total = count($_FILES['images']['name']);
        for ($i = 0; $i < $total; $i++) {
            $tmpFilePath = $_FILES['images']['tmp_name'][$i];
            if ($tmpFilePath != "") {
                // Create directory if it does not exist
                $category_name = str_replace('/', ' ', $category_name);
                $categoryPath = "images/" . str_replace(' ', '_', $category_name);
                if (!is_dir($categoryPath)) {
                    mkdir($categoryPath, 0777, true);
                }

                $filename = time() . "_" . $_FILES['images']['name'][$i];
                $newFilePath = $categoryPath . "/" . $filename;
                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    $images[] = $newFilePath;
                }
            }
        }
    }
    $images = implode(',', $images);

    // Prepare SQL and bind parameters
    $stmt = $conn->prepare("INSERT INTO products (category, name, short_description, images, description_long) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $category_id, $name, $short_description, $images, $description_long);

    // Execute and check if successful
    if ($stmt->execute()) {
        $toastMessage = "New product added successfully.";
        $toastSuccess = true;
    } else {
        $toastMessage = "Error: " . $stmt->error;
        $toastSuccess = false;
    }

    $stmt->close();
    // $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Trumbowyg CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.26.0/ui/trumbowyg.min.css">


    <!-- Custom styles for form -->
    <style>
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group textarea {
            resize: vertical;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="mb-4">Add Product</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="category">Select Category:</label>
            <select class="form-control" id="category" name="category">
                <?php
                // Fetch categories from database
                $sql = "SELECT id, name FROM categories";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                    }
                } else {
                    echo "<option value=''>No categories available</option>";
                }

                // Close connection
                $conn->close();
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Name of the Product:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="short_description">Short Description:</label>
            <textarea class="form-control" id="short_description" name="short_description" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="images">Upload Images:</label>
            <input type="file" class="form-control-file" id="images" name="images[]" multiple accept="image/*">
        </div>
        <div class="form-group">
            <label for="description_long">Description Long Format:</label>
            <textarea class="form-control" id="description_long" name="description_long" rows="6"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- jQuery (full version) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Trumbowyg JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.26.0/trumbowyg.min.js"></script>

<script>
    $(document).ready(function(){

        $('#description_long').trumbowyg();


        <?php if (!empty($toastMessage)) { ?>
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            <?php if ($toastSuccess) { ?>
            toastr.success("<?php echo $toastMessage; ?>");

            // time out to redirect to products page
            setTimeout(function(){
                // reload page
                window.location.href = "add-product.php";
            }, 2000);
            <?php } else { ?>
            toastr.error("<?php echo $toastMessage; ?>");
            <?php } ?>
        <?php } ?>



    });
</script>
</body>
</html>
