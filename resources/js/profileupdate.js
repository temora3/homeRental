$(document).ready(function(){
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("profile_setup_frm");
        
        form.addEventListener("submit", function (event) {
            event.preventDefault();
    
            const formData = new FormData(form);
            
            // Send the form data to the server using AJAX
            fetch(form.action, {
                method: "POST",
                body: formData,
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Handle a successful update (e.g., show a success message)
                    alert("Profile updated successfully!");
                } else {
                    // Handle errors (e.g., display error messages)
                    alert("An error occurred while updating your profile.");
                }
            })
            .catch(error => {
                console.error("Error:", error);
            });
        });
    });
    
 
    // image preview
    $("#profile_image").change(function(){
        let reader = new FileReader();
 
        reader.onload = (e) => {
            $("#image_preview_container").attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    })
 
    $("#profile_setup_frm").submit(function(e){
        e.preventDefault();
 
        var formData = new FormData(this);
 
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#btn").attr("disabled", true);
        $("#btn").html("Updating...");
        $.ajax({
            type:"POST",
            url: this.action,
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success: (response) => {
                if (response.code == 400) {
                    let error = '<span class="alert alert-danger">'+response.msg+'</span>';
                    $("#res").html(error);
                    $("#btn").attr("disabled", false);
                    $("#btn").html("Save Profile");
                }else if(response.code == 200){
                    let success = '<span class="alert alert-success">'+response.msg+'</span>';
                    $("#res").html(success);
                    $("#btn").attr("disabled", false);
                    $("#btn").html("Save Profile");
                }
            }
        })
    })
})