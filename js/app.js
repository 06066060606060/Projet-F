const slider = document.getElementById('slider')
const client1 = document.getElementById('client1')
const client2 = document.getElementById('client2')
slider.defaultValue = 33
const react1 = document.querySelector('#react1')
const react2 = document.querySelector('#react2')
const react3 = document.querySelector('#react3')
const valueslider = document.getElementById('textInput')
const textInputr =  document.getElementById('textInputr')

 
function changeHandler (e) {
    console.log(valueslider.value)
    switch(true) {
        case (0 <= valueslider.value &&  valueslider.value < 33):
        react1.style.display = 'block'
        react2.style.display = 'none'
        react3.style.display = 'none'
        break;
        case (34 <= valueslider.value &&  valueslider.value < 66):
        react2.style.display = 'block'
        react1.style.display = 'none'
        react3.style.display = 'none'
        break;
        case (67 <= valueslider.value &&  valueslider.value < 100):
        react3.style.display = 'block'
        react1.style.display = 'none'
        react2.style.display = 'none'

        break;
    }
}

function updateTextInput(val) {
    const color_1 = 'linear-gradient(to right, #0D59EF 33%, #0D59EF '+ val +'%, white '+ val +'%, white 100%)'
    const color_2 = '#FFFFFF'
    var rounded = Math.ceil(val / 33)
    document.getElementById('textInputr').value=rounded;
    document.getElementById('textInput').value=val;
    textInputr.style.marginLeft = val-2 + '%';
    if (val < 1) {
        slider.style.background = color_2;
    } else {
        slider.style.background = color_1;
    }
  


 
  }