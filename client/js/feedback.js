document.addEventListener("DOMContentLoaded", () => {
    const feedbackForm = document.querySelector('form[action="submitFeedback.php"]');
    
    if (feedbackForm) {
        const rows = document.querySelectorAll('div[style*="border-bottom"]');

        rows.forEach(row => {
            const radios = row.querySelectorAll('input[type="radio"]');
            
            radios.forEach(radio => {
                radio.addEventListener("change", () => {
                    // Reset background of the row
                    row.style.backgroundColor = "#e9ecef"; 
                    row.style.padding = "10px";
                    row.style.borderRadius = "5px";
                });
            });
        });

        feedbackForm.onsubmit = () => {
            return confirm("Confirm Submission: Do you want to save this feedback for WCU?");
        };
    }
});