<!-- просто форма. как загонять новость в базу надо еще разбирать -->



<form name="Добавление новости" method="post" action="">

         <p>
           Введите название <br>
            <input type="text"  style="border:1px silver solid; width:160px;" name="title" id="title">

         </p>


         <p>
           Введите автора <br>
           <input name="author" style="border:1px silver solid; width:160px; type="text" id="author" value="Admin" >

         </p>



           Введите дату добавления <br>
           <input name="date"  style="border:1px silver solid; width:160px;" type="text" id="datepicker" value="<?php $date = date("m/d/Y"); echo $date; ?>">


<br>
 <p>
           Новость<br>
           <textarea style="width:650px; height:240px;" name="description" cols="80" ></textarea>

  </p>
         

     <input type="submit" class="buttons" name="go_add"  id="submit" value="Отправить">


</form>