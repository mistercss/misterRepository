<!-- ������ �����. ��� �������� ������� � ���� ���� ��� ��������� -->



<form name="���������� �������" method="post" action="">

         <p>
           ������� �������� <br>
            <input type="text"  style="border:1px silver solid; width:160px;" name="title" id="title">

         </p>


         <p>
           ������� ������ <br>
           <input name="author" style="border:1px silver solid; width:160px; type="text" id="author" value="Admin" >

         </p>



           ������� ���� ���������� <br>
           <input name="date"  style="border:1px silver solid; width:160px;" type="text" id="datepicker" value="<?php $date = date("m/d/Y"); echo $date; ?>">


<br>
 <p>
           �������<br>
           <textarea style="width:650px; height:240px;" name="description" cols="80" ></textarea>

  </p>
         

     <input type="submit" class="buttons" name="go_add"  id="submit" value="���������">


</form>