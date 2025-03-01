(async function() {
    try {
        const response = await fetch('./api/route/session_isset.php');
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        const data = await response.json();
        if (data.status == false) {
            Swal.fire({
                title: "Error",
                text: data.message,
                icon: "error"
            });
            window.location.href = data.url;
        }
    } catch (error) {
        console.error(error);
    }
})();