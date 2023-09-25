document.addEventListener("DOMContentLoaded", function () {
    const nftForm = document.getElementById("nft-form");

    nftForm.addEventListener("submit", function (e) {
        e.preventDefault(); // Prevent the default form submission

        // Get the value of the input field
        const nftId = document.getElementById("id-num").value;

        // Create a JSON object with the data
        const data = {
            nftId: nftId,
        };

        // Convert the JSON object to a JSON string
        const jsonData = JSON.stringify(data);

        // Create a new XMLHttpRequest object
        const xhr = new XMLHttpRequest();

        // Configure the POST request
        xhr.open("POST", "trigger.php", true);
        xhr.setRequestHeader("Content-Type", "application/json");

        // Define a callback function to handle the response
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    // Handle the response from the PHP file here
                    const response = JSON.parse(xhr.responseText);

                    if (response.result !== null) {
                        // Redirect to a new HTML page
                        window.location.href = "metadata.html";
                    } else {
                        document.getElementById("result").innerText = "NFT not found.";
                    }
                } else {
                    console.error("Error:", xhr.status);
                }
            }
        };

        // Send the POST request with the JSON data
        xhr.send(jsonData);
    });
});
    