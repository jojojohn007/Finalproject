   
   document.querySelector('.value1').value
   document.querySelector('.value2').value

    const message = document.querySelector('.message')
    let msg=document.querySelector('.msg-span')
   
    console.log(msg)
    message.style.display='none'

   
let randomN1 =Math.floor(Math.random()* (999 -100 ))+100
let randomN2 =Math.floor(Math.random()* (999 -100 ))+100

document.querySelector('.value1').textContent = randomN1 
document.querySelector('.value2').textContent = randomN2

// == (randomN1+randomN2)



function continueon(){
 window.location.replace(pageurl+nextpage)
    
}

function check(){
  
    let continuebtn = document.createElement('button')
continuebtn.classList.add( 'tryagain', 'btn' , 'btn-danger')
continuebtn.setAttribute('onclick' , 'tryagain()')
 let div= document.querySelector('#input')
div.appendChild(continuebtn)
       continuebtn.textContent='Tryagain..'
    
}

function tryagain() {
    document.querySelector('.tryagain').remove()
}


document.addEventListener('keyup', (event) => {
    var name = event.key;
    var code = event.code;

    let answer=  document.getElementById('answer').value

    if(answer  == (randomN1+randomN2)){
      
     
      
        if(!(document.querySelector('.continue'))){
            message.style.display='block'
            msg.classList.add('animate')
            document.querySelector('.btn-info').remove()
let continuebtn = document.createElement('button')
continuebtn.classList.add( 'continue', 'btn' , 'btn-success')
continuebtn.setAttribute('onclick' , 'continueon()')
 let div= document.querySelector('.ct')
div.appendChild(continuebtn)
       continuebtn.textContent='Continue..'

    }

    }
    if(name=='Enter' && answer){
        console.log('jkdkd')
        window.location.replace(pageurl+nextpage)   
 }

  }, true);
