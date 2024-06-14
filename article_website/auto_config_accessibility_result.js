// Function to change the background color
function changeBackgroundColor(color) {
    document.body.style.backgroundColor = color;
}
$.ajax({
  type: 'GET',
  url: 'detect-color-blindness.php',
  data: {
    response: $('#response').val(), // Send the selected response value
    submit1: $('#button1').val(), // Send the "Nothing" button value
    submit2: $('#button2').val() // Send the "Not Sure" button value
    //isProtanopia: true // Replace with the actual result from the color blindness detection library
  },
  success: function(response) {
    // Handle the response from the server
    // Assuming response is JSON with a 'backgroundColor' field
        var result = JSON.parse(response);
        if (result.backgroundColor){
            changeBackgroundColor(result.backgroundColor);
        }
  }
});