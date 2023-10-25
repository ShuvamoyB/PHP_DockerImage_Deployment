<?php
    echo "Hello, I'm Shuvamoy. <br>";
    echo "Welcome to Docker World. <br>";
    echo "<br><br>";
    echo "See the below image, Nginx vs Apache<br>";
    echo '<img src="https://www.netsolutions.com/insights/wp-content/uploads/2023/05/Containers-vs-Virtual-Machines.webp">';

// // Remote image URL
// $remoteImageUrl = 'https://www.netsolutions.com/insights/wp-content/uploads/2023/05/Containers-vs-Virtual-Machines.webp';

// // Maximum width and height
// $maxWidth = 800;
// $maxHeight = 600;

// // Fetch the image from the remote URL
// $imageContents = file_get_contents($remoteImageUrl);

// if ($imageContents !== false) {
//     // Create an image resource from the downloaded image
//     $originalImage = imagecreatefromstring($imageContents);

//     if ($originalImage !== false) {
//         // Get the dimensions of the original image
//         $width = imagesx($originalImage);
//         $height = imagesy($originalImage);

//         // Calculate new dimensions while maintaining the aspect ratio
//         $ratio = min($maxWidth / $width, $maxHeight / $height);
//         $newWidth = $width * $ratio;
//         $newHeight = $height * $ratio;

//         // Create a new image resource with the new dimensions
//         $resizedImage = imagecreatetruecolor($newWidth, $newHeight);

//         // Resize and copy the original image to the new image resource
//         imagecopyresampled($resizedImage, $originalImage, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

//         // Output or save the resized image
//         header('Content-Type: image/jpeg');
//         imagejpeg($resizedImage);
//         // You can also save the resized image to a file using imagejpeg

//         // Clean up resources
//         imagedestroy($originalImage);
//         imagedestroy($resizedImage);
//     } else {
//         echo "Failed to create an image resource from the remote image.";
//     }
// } else {
//     echo "Failed to download the remote image.";
// }

?>
