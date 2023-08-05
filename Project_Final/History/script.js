const historyForm = document.getElementById('historyForm');
const eventList = document.getElementById('eventList');

historyForm.addEventListener('submit', function(event) {
    event.preventDefault();

    
    const eventDate = document.getElementById('eventDate').value;
    const eventName = document.getElementById('eventName').value;
    const eventDescription = document.getElementById('eventDescription').value;

    if (!eventDate || !eventName || !eventDescription) {
        alert('Please fill in all fields.');
        return;
    }

    const eventItem = document.createElement('div');
    eventItem.classList.add('eventItem');
    eventItem.innerHTML = `
        <h3>${eventDate}</h3>
        <h4>${eventName}</h4>
        <p>${eventDescription}</p>
    `;

    eventList.appendChild(eventItem);

    historyForm.reset();
});