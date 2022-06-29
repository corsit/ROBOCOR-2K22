var remove=document.getElementsByClassName('remove')
console.log('remove')
for(var i=0;i<remove.length;i++){
    var button=remove[i]
    button.addEventListener('click',function(){
        console.log('clicked')
    })
    
}