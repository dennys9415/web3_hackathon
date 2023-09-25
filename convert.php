<!-- <?php
if(isset($_POST['download'])){
    // URL of the image to download
    $image_url = 'https://noun-api.com/beta/pfp'; // Replace with the actual image URL
    
    // Get the image file content
    $image_content = file_get_contents($image_url);
    
    if ($image_content) {
        // Generate a unique filename for the PHP file (pfp)
        $pfp_filename = 'image_' . uniqid() . '.php';
        
        // Create the PHP file and write the image content to it
        file_put_contents($pfp_filename, "<?php header('Content-Type: image/jpeg'); echo base64_decode('" . base64_encode($image_content) . "'); ?>");
        
        echo 'Image downloaded and converted to ' . $pfp_filename;
    } else {
        echo 'Failed to download the image.';
    }
}
?> -->
<!-- ----------------------------- -->
<!-- <?php
if(isset($_POST['download'])){
    // URL of the image to download
    $image_url = 'https://noun-api.com/beta/pfp';
    
    // Get the image file content
    $image_content = file_get_contents($image_url);
    
    if ($image_content) {
        // Define the temporary directory
        $tmp_dir = 'tmp/';
        
        // Create the directory if it doesn't exist
        if (!file_exists($tmp_dir)) {
            mkdir($tmp_dir, 0755, true);
        }
        
        // Generate a unique filename for the downloaded image
        $image_filename = $tmp_dir . 'image_' . uniqid() . '.jpg'; // Assuming it's a JPEG image
        
        // Save the image to the temporary directory
        file_put_contents($image_filename, $image_content);
        
        echo 'Image downloaded and saved in ' . $image_filename;
    } else {
        echo 'Failed to download the image.';
    }
}
?> -->

<?php
// URL of the image to download
$imageUrl = 'https://noun-api.com/beta/pfp';

// Destination path where you want to save the image
$destinationPath = '/tmp/downloaded_image.jpg';

// Use file_get_contents to download the image
$imageData = file_get_contents($imageUrl);

if ($imageData === false) {
    echo "Failed to download the image.";
} else {
    // Save the downloaded image to the destination path
    if (file_put_contents($destinationPath, $imageData) !== false) {
        echo "Image downloaded and saved to $destinationPath.";
    } else {
        echo "Failed to save the image to $destinationPath.";
    }
}
?>
