<div>
    <script>
        document.addEventListener('swal:success', function(e) {
            Swal.fire({
                title: e.detail.title,
                text: e.detail.message,
                icon: e.detail.icon,
                confirmButtonText: 'Cool'
            });
        })
        document.addEventListener('swal:confirmation', function(e) {
            Swal.fire({
                title: e.detail.title,
                text: e.detail.message,
                icon: e.detail.icon,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: e.detail.confirm_text
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit(e.detail.emit, e.detail.id);
                    Swal.fire(
                        'Deleted!',
                        e.detail.message_after,
                        'success'
                    )
                }
            })
        })
    </script>
</div>
