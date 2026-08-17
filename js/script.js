document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll(".search-tab");
    const panels = document.querySelectorAll(".search-panel");

    tabs.forEach(tab => {
        tab.addEventListener("click", () => {
            tabs.forEach(item => item.classList.remove("active"));
            panels.forEach(panel => panel.classList.add("hidden"));

            tab.classList.add("active");
            document.getElementById(tab.dataset.panel).classList.remove("hidden");
        });
    });

    const swap = document.getElementById("swapStations");
    const from = document.getElementById("from");
    const to = document.getElementById("to");

    if (swap && from && to) {
        swap.addEventListener("click", () => {
            const temp = from.value;
            from.value = to.value;
            to.value = temp;
        });
    }

    const dateInput = document.getElementById("date");
    if (dateInput) {
        const today = new Date();
        const localDate = new Date(today.getTime() - today.getTimezoneOffset() * 60000)
            .toISOString().split("T")[0];

        dateInput.min = localDate;

        if (!dateInput.value) {
            dateInput.value = localDate;
        }
    }

    const menuToggle = document.getElementById("menuToggle");
    const mainNav = document.getElementById("mainNav");

    if (menuToggle && mainNav) {
        menuToggle.addEventListener("click", () => {
            mainNav.classList.toggle("open");
        });
    }
});
