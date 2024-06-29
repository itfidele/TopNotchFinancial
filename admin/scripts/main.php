<?php
ob_start();
require "configs/connection.php";
require "configs/test.data.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

###############################    SIGNIN       ################################


if (isset($_POST["signin"])) {

    $id = TestData($_POST["id"]);
    $password = TestData($_POST["password"]);
    $query = mysqli_query($connection, "SELECT * FROM admins WHERE admin_phone ='$id' OR admin_email='$id' AND admin_password ='$password'  AND admin_status ='active'") or die(mysqli_error($connection));
    $count = mysqli_num_rows($query);

    if ($count == 1) {

        $data = mysqli_fetch_assoc($query);
        $alert = "success";
        $msg = "You have successfully signed in.";

        // GENERATE TOKEN

        function getRandomString($length = 500)
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $string = '';

            for ($i = 0; $i < $length; $i++) {
                $string .= $characters[mt_rand(0, strlen($characters) - 1)];
            }

            return $string;
        }

        $token = getRandomString();

        $adminId = $data["admin_id"];
        $query = mysqli_query($connection, "UPDATE admins SET admin_token ='$token' WHERE admin_id ='$adminId'") or die(mysqli_error($connection));


        setcookie("TRMTOKEN", $data["admin_token"], time() + (86400 * 30), "/");

        $home = "dashboard";


        ?>
        <script type="text/javascript">
            setTimeout(function () {
                window.location = "<?php print($home) ?>";
            }, 3000);
        </script>
        <?php
    } else {
        $alert = "danger";
        $msg = "Invalid login information, please try again.";
    }

    require "templates/alert.php";
}

// ###################################   ADD ARTICLE   ###########################//

if (isset($_POST["addArticle"])) {

    $title = TestData($_POST["title"]);
    $description = TestData($_POST["description"]);
    $time = TestData($_POST["time"]);



    function generateSlug($string)
    {
        $slug = strtolower($string);

        $slug = preg_replace('/[^a-z0-9-]+/', '-', $slug);

        $slug = preg_replace('/-+/', '-', $slug);

        $slug = trim($slug, '-');

        return $slug;
    }

    $slug = generateSlug($title);

    $query = mysqli_query($connection, "SELECT * FROM blog WHERE slug ='$slug'") or die(mysqli_error($connection));
    $count = mysqli_num_rows($query);
    if ($count > 0) {
        $slug = $slug . "-" . $count;
    }


    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"] / 1024;
    $fileType = $_FILES["image"]["type"];
    $fileTmpName = $_FILES["image"]["tmp_name"];

    if (
        $fileType == "image/png"
        || $fileType == "image/PNG"
        || $fileType == "image/JPG"
        || $fileType == "image/jpg"
        || $fileType == "image/jpeg"
        || $fileType == "image/JPEG"
        || $fileType == "image/gif"

    ) {

        //New file name
        $random = sha1(rand());
        $newFileName = $random . $fileName;

        //File upload path

        $uploadPath = "../catalog/blog/" . $newFileName;

        $newFileName = "catalog/blog/" . $newFileName;

        //function for upload file
        if (move_uploaded_file($fileTmpName, $uploadPath)) {

            $query = mysqli_query($connection, "INSERT INTO `blog` (`id`, `title`, `description`,`slug`, `thumb_url`, `published_on`, `updated_on`, `status`) 
VALUES (NULL, '$title', '$description', '$slug','$newFileName', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '')") or die(mysqli_error($connection));

            if ($query) {

                // >>>>>>>>>>>>>>>>>>>>>>>>>      prevent form resubmit on refresh   <<<<<<<<<<<<<<<<<<<<<<<<<//
                require("configs/deny.resubmit.php");
                // >>>>>>>>>>>>>>>>>>>>>>>>>   end prevent form resubmit on refresh   <<<<<<<<<<<<<<<<<<<<<<<<<//

                $alert = "success";
                $msg = "You have successfully posted new article!";
                require("templates/alert.php");
            }
        } else {
            $alert = "danger";
            $msg = "Something wrong happened";
            require("templates/alert.php");
        }
    } else {

        $alert = "danger";
        $msg = "Invalid image type!" . $fileType;
        require("templates/alert.php");
    }
}




if (isset($_POST["publishProperty"])) {

    $title = TestData($_POST["title"]);
    $description = TestData($_POST["description"]);
    $locationId = TestData($_POST["location"]);
    $bathrooms = TestData($_POST["bathrooms"]);
    $parking = TestData($_POST["parking"]);
    $bedrooms = TestData($_POST["bedrooms"]);
    $type = TestData($_POST["type"]);
    $category = TestData($_POST["category"]);
    $status = TestData($_POST["status"]);
    $price = TestData($_POST["price"]);
    $featured = TestData($_POST["featured"]);
    $year = TestData($_POST["year"]);
    $today = date("Y-m-d");
    $size = TestData($_POST["size"]);

    $uid = rand(00000,99999);

    function generateSlug($string)
    {
        $slug = strtolower($string);

        $slug = preg_replace('/[^a-z0-9-]+/', '-', $slug);

        $slug = preg_replace('/-+/', '-', $slug);

        $slug = trim($slug, '-');

        return $slug;
    }

    $slug = generateSlug($title);

    $query = mysqli_query($connection, "SELECT * FROM properties WHERE slug ='$slug'") or die(mysqli_error($connection));
    $count = mysqli_num_rows($query);
    if ($count > 0) {
        $slug = $slug . "-" . $count;
    }

    mysqli_query($connection, "INSERT INTO `properties` (`property_id`, `address`, `agent_id`,`uid`,`slug`, `category`, `bedrooms`, `bathrooms`, `parking_spaces`, `year_built`, `listing_date`, `status`, `title`, `description`, `property_type`, `price`, `created_at`, `updated_at`) 
VALUES (NULL, '$locationId',NULL,'$uid','$slug', '$category', '$bedrooms', '$bathrooms', '$parking', '$year', '$today', 'available', '$title', '$description', '$type', '$price', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)") or die(mysqli_error($connection));

    $propertyId = mysqli_insert_id($connection);

    $photos = array();
    if (isset($_FILES['photos'])) {

        function reArrayFiles($file_post)
        {
            $file_ary = array();
            $file_count = count($file_post['name']);
            $file_keys = array_keys($file_post);
            for ($i = 0; $i < $file_count; $i++) {
                foreach ($file_keys as $key) {
                    $file_ary[$i][$key] = $file_post[$key][$i];
                }
            }
            return $file_ary;
        }

        $file_array = reArrayFiles($_FILES['photos']);
        foreach ($file_array as $file) {
            // Generate a random name for each file
            $file_name = uniqid() . '_' . basename($file['name']); // Using basename() for security
            $file_tmp = $file['tmp_name'];

            // Move the uploaded file to the desired location with the random name
            $upload_directory = '../catalog/'; // Specify your upload directory
            $target_path = $upload_directory . $file_name;

            $fileAddress = "catalog/" . $file_name;

            if (move_uploaded_file($file_tmp, $target_path)) {
                // Store the random name in the array
                $photos[] = $fileAddress; // Store the file address instead of name
            } else {
                die("Failed to move uploaded file.");
            }
        }

        foreach ($photos as $photo) {
            $query = "INSERT INTO `property_photos` (`photo_id`, `property_id`, `photo_url`) 
                      VALUES (NULL, '$propertyId', '$photo')";

            if (!mysqli_query($connection, $query)) {
                die("Error: " . mysqli_error($connection));
            }
        }

        mysqli_query($connection, "UPDATE properties SET photo_url='$photo' WHERE property_id ='$propertyId'") or die($connection);

        $alert = "success";
        $msg = "You have successfully uploaded property info";
        require("templates/alert.php");
    }
}


ob_end_flush();
?>