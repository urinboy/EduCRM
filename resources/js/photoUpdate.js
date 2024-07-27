document.getElementById('photoInput').addEventListener('change', function(event) {
    const [file] = event.target.files;
    if (file) {
        const current = document.getElementById('current-photo');
        const preview = document.getElementById('photo-preview');
        preview.src = URL.createObjectURL(file);
        current.classList.add('d-none');
        preview.classList.remove('d-none');
        preview.onload = () => {
            URL.revokeObjectURL(preview.src);
        }
    }
});

document.querySelector('form[action="{{ route("account.uploadPhoto") }}"]').addEventListener('submit', function(e) {
    const progressBar = document.getElementById('progressBar');
    const form = this;
    const formData = new FormData(form);

    e.preventDefault();

    fetch(form.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
        }
    }).then(response => response.json())
    .then(data => {
        if (data.success) {
            location.reload();
        }
    }).catch(error => console.error('Error:', error));
});