@if (session('alert-error'))
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="errorToast" class="toast custom-toast toast-danger" role="alert" aria-live="assertive" aria-atomic="true">

            <div class="toast-content">

                <div class="toast-icon">
                    <i class="bi bi-exclamation-lg"></i>
                </div>

                <div class="toast-text">
                    <strong>Error</strong>
                    <span>{{ session('alert-error') }}</span>
                </div>

                <button type="button" class="toast-close" data-bs-dismiss="toast" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>

            </div>

            <div class="toast-progress"></div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const element = document.getElementById('errorToast');

            if (element) {
                bootstrap.Toast.getOrCreateInstance(element, {
                    autohide: true,
                    delay: 4000
                }).show();
            }
        });
    </script>
@endif
