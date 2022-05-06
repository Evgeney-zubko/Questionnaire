<html>
      <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <body>
        <div class= "wrapper">    
        <div class= "container">
   
        <div id="bar">
            Добро пожаловать на тест, посвященный знанию музыки!
            <a href="alg.php">Посмотреть результаты прошедших пользователей</a>
        </div>
                
        <progress id="progres" value="0" max="9" style="width:300px;"></progress>
                  
        <form action="results.php" method="POST" name="form">
            
             <div class="question">
            Введите ваше имя:
                 <input type="text" size="30" name="id">
            </div>
            
            
              <script src="script.js"></script>
            
            <div class="question">
                <br>
                Символ какого музыкального объединения изображён на рисунке? <br> <br>
                <img class="pictures" src="css/1.png">
                <br>
                <div class="answers">
                    <div class="num_answ">
                        <input name="1" id="1_1" type="radio"> <label for="1_1">Fruit Gang</label>

                    </div>
                    <div class="num_answ">
                        <input name="a_1" id="1_2"  type="radio">
                         <label for="1_2">Melon Music</label>

                    </div>
                    <div class="num_answ">
                        <input name="1" id="1_3"  type="radio">
                         <label for="1_3"> FreshEs</label>

                    </div>
                    <div class="num_answ">
                        <input name="1" id="1_4" type="radio">
                         <label for="1_4">NotAnApple</label>

                    </div>

                </div> 
            </div>
        
            <div class="question"> <br>
                Сколько артистов входит в состав объединения Dead Dynasty?<br><br>
                <img class="pictures" src="css/2.jpg">
            <br>
                <div class="answers">
                    <div class="num_answ">
                        <input name="2" id="2_1"  type="radio">
                        <label for="2_1">7</label>

                    </div>
                    <div class="num_answ">
                        <input name="a_2" id="2_2"  type="radio">
                            <label for="2_2">5</label>
                    </div>
                    <div class="num_answ">
                        <input name="2" id="2_3" type="radio">
                            <label for="2_3">10</label>
                    </div>
                    <div class="num_answ">
                        <input name="2" id="2_4" type="radio">
                            <label for="2_4">4</label>
                    </div>
                    
                </div>
            </div>
        
             <div class="question"> <br>
                Укажите артиста и название альбома, изображенного на рисунке:
                <br> <br>
                <img class="pictures" src="css/4.jpg">
                <br>

                <div class="answers">
                    <select id="artists" name="list_1">
                      <optgroup label="Jesus">
                        <option value="1">Theatre of Life</option>
                        <option value="2">New</option>
                        <option value="3">Мгла</option>
                      </optgroup>
                      <optgroup label="Markul">
                        <option value="4">Sense of Human</option>
                        <option value="5">2021</option>
                        <option value="6">Plastic</option>
                      </optgroup>
                        <optgroup label="Scarlxrd">
                        <option value="7">chain$aw.lxadxut</option>
                        <option value="8">HHelp</option>
                        <option value="9">Man's_ERROR</option>
                      </optgroup>
                    </select>
                </div>  
            </div>    
            
            <div class="question"> <br>
                Укажите, в каком году вышел первый альбом рок-группы "Кис-Кис":
                <br> <br>
                <img class="pictures" src="css/5.png">
                <br>
                <div class="answers">
                    <select id="kis-kis" name="list_2">
                        <option value="1">2016</option>
                        <option value="2">2012</option>
                        <option value="3">2019</option>
                    </select>
                </div> 
            </div>
            
            <div class="question"> <br>
                Какие артисты изображены на этой фотографии?<br> <br>
                <img class="pictures" src="css/3.jpg">
                 <br>
    
                <div class="answers">
                    <div class="num_answ">
                        <input name="3" type="checkbox">
                            LOVV66
                    </div>
                    <div class="num_answ">
                        <input type="checkbox" id="3_1" name="a_3_1">
                            Seemee
                    </div>
                    <div class="num_answ">
                        <input type="checkbox" id="3_2" name="a_3_2">
                            Mayot
                    </div>
                    <div class="num_answ">
                        <input name="3" type="checkbox">
                            Young Trappa
                    </div>
                    <div class="num_answ">
                        <input name="3" type="checkbox">
                            PewDiePie
                    </div>
                    <div class="num_answ">
                        <input type="checkbox" id="3_3"  name="a_3_3">
                            Big Baby Tape
                    </div>
                </div> 
            </div>
            
        
          <div class="question"> <br>
                Укажите название альбома, изображенного на картинке:
                <br> <br>
                <img class="pictures" src="css/6.jpg">
                <br>
                <div class="answers">
                    <input type="text" name="a_6" id="6" size="40">
                </div> 
            </div>
            
             <div class="question"> <br>
                Какой самый популярный жанр музыки в мире?
                <br>
                <div class="answers">
                    <input type="text" name="a_7" id="7" size="40">
                </div> 
            </div>
          
            
             <div class="question"> <br>
                Укажите, в каком году вышел первый альбом группы ЛСП "One more City":
                <br> <br>
                <img class="pictures" src="css/7.png">
                <br>
                <div class="answers">
                    <select id="LSP" name="list_3">
                        <option value="1">2012</option>
                        <option value="2">2020</option>
                        <option value="3">2019</option>
                        <option value="3">2021</option>
                    </select>
                </div> 
            </div>
            
            <input type="submit" id = "result" name = "check" class="main" value="Завершить тест"  style = "display:none">
            
           
    </form>  
                        <input type="button" id = "next" class="main" value="Начать тест!" onclick="Test(1)" style = "display:block">	
                        <input type="button" id = "prev" class="main" value="Предыдущий вопрос" onclick="Test(-1)" style = "display:none">
            



        </div>
    </div>
    </body>
</html>