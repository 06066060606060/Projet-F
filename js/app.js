const slider = document.getElementById('slider')
slider.defaultValue = 0
const react1 = document.querySelector('#react1')
const react2 = document.querySelector('#react2')
const react3 = document.querySelector('#react3')
 
function changeHandler (e) {
    
    switch(parseInt(e.value)) {
        case 0:
        react1.style.display = 'block'
        react2.style.display = 'none'
        react3.style.display = 'none'
        slider.style.background = ''
        break;
        case 1: 
        react2.style.display = 'block'
        react1.style.display = 'none'
        react3.style.display = 'none'
        slider.style.background = 'linear-gradient(to right, #0D59EF 0%, #0D59EF 50%, white 50%, white 100%)'
        break;
        case 2: 
        react3.style.display = 'block'
        react1.style.display = 'none'
        react2.style.display = 'none'
        slider.style.background = 'linear-gradient(to right, #0D59EF 0%, #0D59EF, #0D59EF 100%)'
        break;
        default: 
        react1.style.display = 'block'
        react3.style.display = 'none'
        react2.style.display = 'none'
        
     
        break;
    
    }
}