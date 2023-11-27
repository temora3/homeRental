<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css">
    <style>
        
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(45deg, #e3e2d1, #dcd7ca);


        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .container {
            margin-top: 4rem;
        }

        .profile-image {
            object-fit: cover;
            border: 1px solid black;
            border-radius: 50%;
            height: 100px;
            width: 100px;
        }

        .profile-form {
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
        }

        .profile-button {
            width: 100%;
        }

        .image-upload-container {
            position: relative;
            overflow: hidden;
        }

        .image-upload-container img {
            width: 100%;
            height: auto;
        }

        .image-upload-container input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
        }
    </style>
</head>