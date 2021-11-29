<div>
    <script>
        document.addEventListener('swal:success', function(e) {
            Swal.fire({
                icon: e.detail.icon,
                title: e.detail.title,
                text: e.detail.message,
                confirmButtonColor: '#b0a64b',
            });
        })
        document.addEventListener('swal:confirmation', function(e) {
            Swal.fire({
                title: e.detail.title,
                text: e.detail.message,
                icon: e.detail.icon,
                showCancelButton: true,
                confirmButtonColor: '#b0a64b',
                cancelButtonColor: '#aeaea6',
                confirmButtonText: e.detail.confirm_text
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit(e.detail.emit, e.detail.id);
                    Swal.fire(
                        'Process success',
                        e.detail.message_after,
                        'success'
                    )
                }
            })
        })
    </script>
</div>
