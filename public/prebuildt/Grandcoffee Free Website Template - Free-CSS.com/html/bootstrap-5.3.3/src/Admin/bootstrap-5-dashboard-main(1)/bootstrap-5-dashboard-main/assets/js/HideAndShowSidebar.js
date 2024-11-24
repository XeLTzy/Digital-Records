document.addEventListener("DOMContentLoaded", function() {
    const sections = {
        dashboard: document.getElementById("dashboardSection"),
        patient: document.getElementById("patientSection"),
        services: document.getElementById("servicesSection"),
        invoices: document.getElementById("invoicesSection"),
        schedule: document.getElementById("scheduleSection"),
        report: document.getElementById("reportSection")
    };

    document.querySelectorAll(".sidebar-link").forEach(function(link) {
        link.addEventListener("click", function() {
            const target = this.querySelector("span").innerText.toLowerCase();
            
            // Hide all sections
            for (let section in sections) {
                sections[section].style.display = "none";
            }
            
            // Show the selected section
            sections[target].style.display = "block";
        });
    });
});