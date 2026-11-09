const toastElement = document.getElementById('successToast');

const toast = new bootstrap.Toast(toastElement, {
    delay: 3000,
    autohide: true
});

toast.show();
