const slider = document.getElementById('slider')
slider.defaultValue = 33
const react1 = document.querySelector('#react1')
const react2 = document.querySelector('#react2')
const react3 = document.querySelector('#react3')
const valueslider = document.getElementById('textInput')
const textInputr = document.getElementById('textInputr')
const btn1 = document.getElementById('stats1')
const btn2 = document.getElementById('stats2')

const client1 = document.getElementById('client1')
const client2 = document.getElementById('client2')
const client3 = document.getElementById('client3')
const client4 = document.getElementById('client4')

function changeHandler(e) {
    console.log(valueslider.value)
    switch (true) {
        case (0 <= valueslider.value && valueslider.value < 33):
            react1.style.display = 'block'
            react2.style.display = 'none'
            react3.style.display = 'none'
            break;
        case (34 <= valueslider.value && valueslider.value < 66):
            react2.style.display = 'block'
            react1.style.display = 'none'
            react3.style.display = 'none'
            break;
        case (67 <= valueslider.value && valueslider.value < 100):
            react3.style.display = 'block'
            react1.style.display = 'none'
            react2.style.display = 'none'

            break;
    }
}

function updateTextInput(val) {
    const color_1 = 'linear-gradient(to right, #0D59EF 0%, #0D59EF ' + val + '%, white ' + val + '%, white 100%)'
    const color_2 = '#FFFFFF'
    var rounded = Math.ceil(val / 33)
    document.getElementById('textInputr').value = rounded;
    document.getElementById('textInput').value = val;
    textInputr.style.marginLeft = val - 2 + '%';
    slider.style.background = color_1;
}

function stats1() {
    btn1.style.display = 'block';
    btn2.style.display = 'none';
}

function stats2() {
    btn1.style.display = 'none';
    btn2.style.display = 'block';

}

function clientdown() {
    client1.style.display = 'block';
    client2.style.display = 'block';
    client3.style.display = 'none';
    client4.style.display = 'none';
}

function clientup() {
    client1.style.display = 'none';
    client2.style.display = 'none';
    client3.style.display = 'block';
    client4.style.display = 'block';

}