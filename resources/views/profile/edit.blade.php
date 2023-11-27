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

<body>
    <?php
    $user_id = auth()->user()->id;
    if (!empty($user_id)) :
    ?>
        <div class="row col-lg-8 border rounded mx-auto mt-5 p-2 shadow-lg">
            <div class="col-md-4 text-center">
                <div class="image-upload-container border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <?php
                        $defaultProfilePics = ['pic1.jpg', 'pic2.webp', 'pic3.jpg', 'pic4.jpg', 'pic5.jpg'];
                        $randomProfilePic = $defaultProfilePics[array_rand($defaultProfilePics)];
                        ?>
                        <img class="rounded-circle mt-5 profile-image" height="250" width="250" src="{{ asset('img/profilepic/' . $randomProfilePic) }}">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <form method="post" enctype="multipart/form-data" id="profile_edit_frm" action="{{ route('update-profile') }}">
                    @csrf
                    @method('PUT')
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Edit Profile</h4>
                        </div>
                        <table class="table table-striped">
                            <tr>
                                <th><i class="bi bi-person-circle"></i> Username</th>
                                <td>{{ auth()->user()->username }}</td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-envelope"></i> Email</th>
                                <td>
                                    <input value="{{ auth()->user()->email }}" type="text" class="form-control" name="email" placeholder="Email">
                                    <div><small class="js-error js-error-email text-danger"></small></div>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-person-circle"></i> First name</th>
                                <td>
                                    <input value="{{ auth()->user()->firstname }}" type="text" class="form-control" name="firstname" placeholder="First name">
                                    <div><small class="js-error js-error-firstname text-danger"></small></div>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-person-square"></i> Last name</th>
                                <td>
                                    <input value="{{ auth()->user()->lastname }}" type="text" class="form-control" name="lastname" placeholder="Last name">
                                    <div><small class="js-error js-error-lastname text-danger"></small></div>
                                </td>
                            </tr>
                        </table>
                        <div class="progress my-3 d-none">
                            <div class="progress-bar" role="progressbar" style="width: 50%;">Working... 25%</div>
                        </div>
                        <div class="p-2">
                            <a href="{{ route('update-profile') }}">
                                <button class="btn btn-primary float-end">Save</button>
                            </a>
                            <a href="{{ route('profile') }}">
                                <label class="btn btn-secondary">Back</label>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <?php else : ?>
        <div class="p-2">
            <a href="{{ route('profile') }}" class="btn btn-secondary">Back to Profile</a>
            <button class="btn btn-primary float-end" onclick="myaction.collect_data(event, 'profile')">Save</button>
        </div>
    <?php endif; ?>
    <script>
        var image_added = false;

        function display_image(file) {
            var img = document.querySelector(".js-image");
            img.src = URL.createObjectURL(file);

            image_added = true;
        }

        var myaction = {
            collect_data: function(e, data_type) {
                e.preventDefault();
                e.stopPropagation();

                var inputs = document.querySelectorAll("form input, form select");
                let myform = new FormData();
                myform.append('data_type', data_type);

                for (var i = 0; i < inputs.length; i++) {
                    myform.append(inputs[i].name, inputs[i].value);
                }

                if (image_added) {
                    myform.append('image', document.querySelector('#profile_image').files[0]);
                }

                var ajax = new XMLHttpRequest();
                document.querySelector(".progress").classList.remove("d-none");

                document.querySelector(".progress-bar").style.width = "0%";
                document.querySelector(".progress-bar").innerHTML = "Working... 0%";

                ajax.addEventListener('readystatechange', function() {
                    if (ajax.readyState == 4) {
                        if (ajax.status == 200) {
                            myaction.handle_result(ajax.responseText);
                        } else {
                            console.log(ajax);
                            alert("An error occurred");
                        }
                    }
                });

                ajax.upload.addEventListener('progress', function(e) {
                    let percent = Math.round((e.loaded / e.total) * 100);
                    document.querySelector(".progress-bar").style.width = percent + "%";
                    document.querySelector(".progress-bar").innerHTML = "Working..." + percent + "%";
                });

                ajax.open('post', '{{ route('update.profile') }}', true);

                ajax.send(myform);
            },

            handle_result: function(result) {
                var obj = JSON.parse(result);
                if (obj.success) {
                    alert("Profile edited successfully");
                    window.location.reload();
                } else {
                    let error_inputs = document.querySelectorAll(".js-error");
                    for (var i = 0; i < error_inputs.length; i++) {
                        error_inputs[i].innerHTML = "";
                    }
                    for (key in obj.errors) {
                        document.querySelector(".js-error-" + key).innerHTML = obj.errors[key];
                    }
                }
            }
        };
    </script>


</html>
