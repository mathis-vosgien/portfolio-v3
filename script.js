document.addEventListener("DOMContentLoaded", () => {
    window.addEventListener("load", () => {
        const loader = document.getElementById("loader");
        if (loader) {
            loader.style.opacity = "0";
            setTimeout(() => {
                loader.style.display = "none";
            }, 1500);
        }
    });
});
