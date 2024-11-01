fetch('https://chat-backend-server.test/', {
    method: 'GET',
    headers: {
        'X-Access-Key': 'b042e1aebc809a6212dd'
    }
})
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Error:', error));
