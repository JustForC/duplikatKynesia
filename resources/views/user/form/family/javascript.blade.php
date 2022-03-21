<script>
    window.addEventListener('showAlert', event => {
        document.getElementById("alertSuccess").classList.remove('hidden');              
        document.getElementById("alertSuccess").classList.add('show');
    })

    window.addEventListener('showDelete', event => {
        $("#delete").modal('show');
    })

    window.addEventListener('closeDelete', event => {
        $("#delete").modal('hide');
    })
</script>