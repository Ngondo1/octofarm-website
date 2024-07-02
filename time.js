
function displayLocalTime() {
    const now = new Date();
    const options = { 
        weekday: 'long', 
        year: 'numeric', 
        month: 'long', 
        day: 'numeric',
        hour: 'numeric', 
        minute: 'numeric',
        second: 'numeric',
        timeZoneName: 'short' // Display the time zone abbreviation
    };
    const timeString = now.toLocaleString(undefined, options); 

    const timeElement = document.getElementById("localTime");
    if (timeElement) {
        timeElement.textContent = timeString;
    }
}

// Initial display on page load
displayLocalTime();

// Update every second to keep time accurate
setInterval(displayLocalTime, 1000); 



