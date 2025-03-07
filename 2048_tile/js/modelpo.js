document.addEventListener('DOMContentLoaded', function () {
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const modal = document.getElementById('modal');
    const cancelBtn = document.getElementById('cancelBtn');

    // Open modal
    openModalBtn.addEventListener('click', function () {
        modal.classList.remove('hidden');
    });

    // Close modal
    closeModalBtn.addEventListener('click', function () {
        modal.classList.add('hidden');
    });

    // Close modal on cancel button
    cancelBtn.addEventListener('click', function () {
        modal.classList.add('hidden');
    });

    // Close modal when clicking outside
    window.addEventListener('click', function (e) {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });
});