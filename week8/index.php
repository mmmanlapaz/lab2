<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
		.profile {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        .profile img {
            max-width: 100%;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="profile">
        <?php include 'profile_data.php'; ?>
        <h1><?php echo name; ?></h1>
        <p><?php echo bio; ?></p>
        <p>Email: <?php echo email; ?></p>
        <p>Location: <?php echo location; ?></p>
        <img src="<?php echo profile_image; ?>" alt="Profile Image">
    </div>
	<script>
	<?php
	// Profile data
	$name = "Marco Antonio Manlapaz";
	$bio = "Hello guys, I'm 20 years old, and I'm a student of Asia Pacific College";
	$email = "mmmanlapaz@student.apc.edu.ph";
	$location = "Pasay City, Philippines";
	$profile_image = "E:/Users/Admin/xamp/htdocs/image.png";
	?>
	</script>
</body>
</html>