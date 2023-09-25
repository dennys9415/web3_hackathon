document.addEventListener("DOMContentLoaded", function () {
    // Fetch data from the server (or read from embedded data)
    fetch('data.json') // Replace with the actual path to your JSON data
        .then(response => response.json())
        .then(data => {
            // Populate placeholders with data
            document.getElementById("name-placeholder").textContent = data.name;
            document.getElementById("description-placeholder").textContent = data.description;
            document.getElementById("owner-placeholder").textContent = data.contract_owner;
        })
        .catch(error => {
            console.error("Error:", error);
        });
});
