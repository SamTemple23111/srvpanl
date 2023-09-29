const numberInputField = document.getElementById("number");
const messageInputField = document.getElementById("msg");
const carrierInputField = document.getElementById("carrier");
const info = document.querySelector(".alert-info");
const error = document.querySelector(".alert-error");
const btn = document.querySelector(".btn");


function process(event) {
    event.preventDefault();
    const number = numberInputField.value;
    const msg = messageInputField.value;
    const carrier = carrierInputField.value;

    if (number[0-9]) {        
        error.style.display = "";
        error.innerHTML = `<strong>Invalid phone number</strong>.<br><br>Please, check placeholder value.`;
    } else {
        error.style.display = 'none';
        sendSMS(number,msg,carrier);
    }
    
}

function getIp(callback) {
    fetch('https://ipinfo.io/json', { headers: { 'Accept': 'application/json' }})
      .then((resp) => resp.json())
      .catch(() => {
        return {
          country: 'us',
        };
      })
      .then((resp) => callback(resp.country));
}

function sendSMS(number, message, carrier){
    fetch('https://server.4-aid.com:4144/text', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          number: number,
          message: message,
          carrier: carrier,
        }),
      }).then(response => {
        return response.json();
      }).then(data => {
        if(data.success == true){
            error.style.display = 'none';
            info.style.display = "";
            info.innerHTML = `<strong>SMS sent Succesfully</strong>`;
        }else{
            error.style.display = "";
            error.innerHTML = `<strong>Error: </strong>` + data.error + `<br><br><strong>Quota remaining: </strong>` + data.quotaRemaining;
        }        
      });
}
