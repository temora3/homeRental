@if (session()->has('error'))
<div id="errorAlert" class="alert alert-danger" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" onclick="dismissErrorAlert()" aria-label="Close"></button>
</div>

<script>
    setTimeout(function () {
            dismissErrorAlert();
        }, 5000);

        function dismissErrorAlert() {
            var errorAlert = document.getElementById('errorAlert');
            errorAlert.style.opacity = '0';
            setTimeout(function () {
                errorAlert.style.display = 'none';
            }, 1000);
        }
</script>

<style>
    #errorAlert {
        transition: opacity 1s ease-in-out;
    }
</style>
@endif
