const form = document.getElementById("userForm");
const message = document.getElementById("message");

form.addEventListener("submit", function (event) {
    event.preventDefault();

    const formData = new FormData(form);

    fetch("add_user.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {

        if (data.trim() === "success") {
            message.textContent = "User added successfully!";
            form.reset();

            setTimeout(() => {
                location.reload();
            }, 500);

        } else {
            message.textContent = "Please enter valid data.";
        }

    })
    .catch(error => {
        message.textContent = "An error occurred.";
        console.error(error);
    });
});


function toggleStatus(id, button) {

    const formData = new FormData();

    formData.append("id", id);

    fetch("toggle.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(status => {

        const row = document.getElementById("row-" + id);
        const statusCell = row.querySelector(".status");

        statusCell.textContent = status.trim();

    })
    .catch(error => {
        console.error(error);
    });
}
