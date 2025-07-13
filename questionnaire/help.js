document.addEventListener ("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll('input[name="problems[]"]');
    checkboxes.forEach((box) => {
        box.addEventListener("change", function () {
            if (this.checked) {
                checkboxes.forEach((otherBox) => {
                    if (otherBox !== this) {
                        otherBox.checked = false;
                    }
                });
            }
        });
    });
});