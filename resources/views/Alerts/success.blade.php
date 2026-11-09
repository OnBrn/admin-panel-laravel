@if (session('alert-success'))
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="successToast" class="toast custom-toast" role="alert" aria-live="polite" aria-atomic="true">

            <div class="toast-content">
                <div class="toast-icon">
                    <i class="bi bi-check-lg"></i>
                </div>

                <div class="toast-text">
                    <strong>Success</strong>
                    <span>{{ session('alert-success') }}</span>
                </div>

                <button type="button" class="toast-close" data-bs-dismiss="toast" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <div class="toast-progress"></div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const element = document.getElementById('successToast');

            if (element && !element.classList.contains('show')) {
                bootstrap.Toast.getOrCreateInstance(element, {
                    autohide: true,
                    delay: 4000
                }).show();
            }
        });
    </script>
@endif
