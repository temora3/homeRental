@if (session()->has('success'))
<div id="successAlert" class="alert alert-success" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" onclick="dismissSuccessAlert()" aria-label="Close"></button>
</div>

<script>
    setTimeout(function () {
            dismissSuccessAlert();
        }, 5000);

        function dismissSuccessAlert() {
            var successAlert = document.getElementById('successAlert');
            successAlert.style.opacity = '0';
            setTimeout(function () {
                successAlert.style.display = 'none';
            }, 1000);
        }
</script>

<style>
    #successAlert {
        transition: opacity 1s ease-in-out;
    }
</style>
@endif
