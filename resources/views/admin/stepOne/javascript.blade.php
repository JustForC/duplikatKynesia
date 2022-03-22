<script>
    // Accept Modal
    window.addEventListener('showModalAccept', event => {
        $("#acceptModal").modal('show');
    })

    window.addEventListener('closeModalAccept', event => {
        $("#acceptModal").modal('hide');
    })
    // End Accept Modal

    // Modal Reject
    window.addEventListener('showModalReject', event => {
        $("#rejectModal").modal('show');
    })

    window.addEventListener('closeModalReject', event => {
        $("#rejectModal").modal('hide');
    })
    // End Modal Reject
</script>