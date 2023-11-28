<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <style>
        
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(45deg, #f8f7e5, #f0ece2); /* Beige and light yellow gradient */
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
        </style>
<body>
 <div class="container mt-4">
        <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="{{ route('logout') }}" class="profile-form">
            <div class="row">
            <div class="col-md-4 border-right">
    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
        @php
            $defaultProfilePics = ['pic1.jpg', 'pic2.webp', 'pic3.jpg','pic4.png'];
            $randomProfilePic = $defaultProfilePics[array_rand($defaultProfilePics)];
        @endphp

        <img class="rounded-circle mt-5 profile-image" height="250" width="250" src="{{ asset('img/profilepic/' . $randomProfilePic) }}">
    </div>
</div>


                <div class="col-md-8 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">My Profile</h4>
                        </div>
                        <table class="table table-striped">
                            <tr><th colspan="2">{{ auth()->user()->username }}'s Details:</th></tr>
                            <tr><th><i class="bi bi-person-circle"></i> Username</th><td>{{ auth()->user()->username }}</td></tr>
                            <tr><th><i class="bi bi-envelope"></i> Email</th><td>{{ auth()->user()->email }}</td></tr>
                            <tr><th><i class="bi bi-person-circle"></i> First name</th><td>{{ auth()->user()->firstname }}</td></tr>
                            <tr><th><i class="bi bi-person-square"></i> Last name</th><td>{{ auth()->user()->lastname }}</td></tr>
                            
                        </table>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary profile-button" style="width: 45%;">Edit Profile</a>
                    <div style="width: 10%;"></div> <!-- Spacer -->
                    <form action="{{ route('logout')}}" method="post">
                        @csrf
                    <button type="submit" class="btn btn-danger profile-button" style="width:45%">Logout</button>
    </form>
    

                    
                </div>


                    </div>
                </div>
            </div>

    </div>
    



    <script src="{{ asset('js/profileupdate.js') }}"></script>
</body>
</html>