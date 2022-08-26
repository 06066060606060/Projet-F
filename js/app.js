const slider = document.getElementById('slider')
slider.defaultValue = 0
const react1 = document.querySelector('#react1')
const react2 = document.querySelector('#react2')
const react3 = document.querySelector('#react3')
const exp = document.querySelector('#exp')
function changeHandler (e) {
    switch(parseInt(e.value)) {
        case 0:
        react1.style.display = 'block'
        react2.style.display = 'none'
        react3.style.display = 'none'
        slider.classList.add('accent-red-500')   
        slider.classList.remove('accent-blue-500')    
        slider.classList.remove('accent-green-500')
        exp.innerText = 'Bad'
        break;
        case 1: 
        react2.style.display = 'block'
        react1.style.display = 'none'
        react3.style.display = 'none'
        slider.classList.remove('accent-red-500')
        slider.classList.add('accent-blue-500')    
        slider.classList.remove('accent-green-500')
        exp.innerText = 'Good'
        break;  
        case 2: 
        react3.style.display = 'block'
        react1.style.display = 'none'
        react2.style.display = 'none'
        slider.classList.remove('accent-blue-500')
        slider.classList.add('accent-green-500')  
        exp.innerText = 'Excellent'
        break;
        default: 
        react1.style.display = 'block'
        react3.style.display = 'none'
        react2.style.display = 'none'
        
     
        break;
    
    }
}