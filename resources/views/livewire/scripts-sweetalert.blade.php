<div>
    Script load success
    <script>
        document.addEventListener('swal:success', function(e) {
            Swal.fire({
                title: e.detail.title,
                text: e.detail.message,
                icon: e.detail.icon,
                confirmButtonText: 'Cool'
            });

        })
    </script>
</div>
