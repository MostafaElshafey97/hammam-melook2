</br></br>
@foreach(App\Models\Product::select('name','id','product_category_id','selling_price')->get() as $Product)
        <div class="ss "style=" display: none;border-radius: 10px;" id="prod{{$Product->id}}" >
        <div  class="form-inline" id="hhh"style=" border-radius: 10px;">
         
<input type="text" class="form-control"name="nameProduct[]" style="font-weight: bold;" value=" {{$Product->name}}" readonly disabled>
<input type="text" class="form-control" name="price[]" style="font-weight: bold;" value=" {{$Product->selling_price}} دولار " readonly disabled>
<input type="text" class="form-control" style="font-weight: bold;" value="  الكمية  :1 " readonly disabled>
 <br><br>
 <select class="form-control" name="kabten" aria-label="Default select example" disabled>
 <option value="" selected> اختر كابتن</option>
            @foreach(App\Models\Employee::where('job','=','كابتن')->get() as $empl)

                 <option value="{{$empl->name}}">{{$empl->name}}</option> 
              @endforeach
         </select>
         <select name="Amil" class="form-control" disabled>
           <option value="" selected> العميل </option> 
              @foreach(App\Models\Employee::where('job','=','العم')->get() as $empl)

                 <option value="{{$empl->name}}">{{$empl->name}}</option> 
              @endforeach
                   
         </select>
         
         <hr style=" border-top: 1px dashed red;"> 

         <br>  <br>   <br>        <br>  <br>   <br>      <br>
        <a href="#"  onclick="changeStyle({{$Product->id}});return false" >الغاء</a>
         <hr style=" border-top: 1px dashed red;"> 
        </div>

    </div>
    
@endforeach

<script>function handleDropDownproduct(elementId) {
    console.log(111, elementId)//1
    const element = document.getElementById(elementId);
	var tags = element.querySelectorAll("input, select, checkbox, textarea");
	
	  for (var x=0; x < tags.length; x++) {
//console.log(142,tags[x]) ;
     tags[x].removeAttribute('disabled');;
	  // console.log(152,tags[x]) ;
    }
	 const totale = document.getElementById("totale");
	 var somme =0;
	const prices = document.getElementsByName("price[]");


	  for (var x=0; x < prices.length; x++) {
		  if(prices[x].disabled == false)
		  somme +=parseInt(prices[x].value);
    // prices[x].removeAttribute('disabled');;
	  // console.log(152,prices[x]) ;
	  
    }
	totale.value=somme+" دولار";
//calclule reste paiment

    const foot = document.getElementById('foot');
  element.innerHtml="fffffffffff";
  console.log(22, element)

    element.style.display = "block";
    
  if (foot.style.display === "none") {
    foot.style.display = "block";
  }
  
}
function calculreste(){
	const paid =parseInt(document.getElementById('paid').value);
	const totale = parseInt(document.getElementById('totale').value);
	document.getElementById('remane_paiment').value =totale-paid;
}


</script> 
<script> 
    function changeStyle(id){
        var element = document.getElementById(id);
        element.style.display = "none";
    }
    </script>
