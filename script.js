var count = 0;
var result = 0;

function Test(x) 
{    

      if(count==0) 
      {
         document.getElementById('bar').style.display = "none";
          document.getElementById('next').value='Следующий вопрос';
         document.getElementById('prev').style.display = "block";

          
      }
    
    if (count==8)
        {
            document.getElementById('bar').style.display = "none";
            document.getElementById('next').style.display = "none";
         document.getElementById('prev').style.display = "none"; 
            document.getElementById('result').style.display = "block"; 
            
            
            const demoClasses = document.querySelectorAll('div.question');
    
            demoClasses.forEach(element => {
            element.style.display = "none";});
            
        }
     
        if((count==1)&&(x==-1))
        {
            document.getElementById('next').value='Начать тест!';
            document.getElementById('prev').style.display = "none";
           
            
        }

    document.getElementById('progres').value+=x;
    
    count+=x; 
    

    
     document.getElementById('bar').innerHTML= "Вопрос " + count;
    
    const demoClasses = document.querySelectorAll('div.question');
    
    demoClasses.forEach(element => {
    element.style.display = "none";});
    
    if (x>0)
    demoClasses[count-x].style.display = "block";
        else
    demoClasses[count+x].style.display = "block";
       
}

function answers()
{

    document.getElementById('answer').style.display = "block"; 
    document.getElementById('result').style.display = "none"; 
}


