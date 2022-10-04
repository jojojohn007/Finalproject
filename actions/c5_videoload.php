

<h1>Adding three digit numbers </h1>

<video id='currentvid' onload='myvid(this)' controls >
<source type='video/mp4' src='class5-items/class5-v1-Adding three digit numbers with regrouping _ Addition and subtraction _ Arithmetic.mp4'>
</video>

<script>
   
    function myvid(e) {
let vid = document.querySelector('#currentvid')
let currenttime = vid.currentTime
let endtime=vid.duration
if(currenttime>=endtime){
     loadnextcontent(vid)
}

    }
 let check =   setInterval(() => {
       myvid()
    }, 
    10);

    function loadnextcontent(vid){

         $(document).ready(function(){
            $('.videoload').load('class5-items/questions/question1.php')
         }) 
         vid.remove()
console.log('hii')
clearInterval(check)
    }

</script>
