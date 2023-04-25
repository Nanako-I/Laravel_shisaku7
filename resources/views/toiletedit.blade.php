<x-app-layout>

    <!--ヘッダー[START]-->
    
  <div class="flex items-center justify-center">
   <div class="flex flex-col items-center">
     <form action="{{ url('people' ) }}" method="POST" class="w-full max-w-lg">
                        @method('PATCH')
                        @csrf
                        
        <style>
        h2 {
          font-family: Arial, sans-serif; /* フォントをArialに設定 */
          font-size: 20px; /* フォントサイズを20ピクセルに設定 */
          font-weight: bold;
          text-decoration: underline;
        }
      </style>
    <h2>{{$person->person_name}}さんのトイレ記録</h2>
    </form>
   </div>
  </div>
    <!--ヘッダー[END]-->
            
        <!-- バリデーションエラーの表示に使用-->
       <!-- resources/views/components/errors.blade.php -->
       
<form action="{{ url('toilet/'.$person->id.'/edit') }}" method="POST">
         
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
                        @csrf
                        
                    
                       
<div style="display: flex; flex-direction: column;">
     <style>
     h3 {
          font-family: Arial, sans-serif; /* フォントをArialに設定 */
          font-size: 20px; /* フォントサイズを20ピクセルに設定 */
          /*font-weight: bold;*/
          text-decoration: underline;
        }
        </style>
 <div style="display: flex; align-items: center; margin-left: auto; margin-right: auto; max-width: 300px;">
  <h3>尿</h3>
 </div>
  <div style="display: flex; align-items: center; margin-left: auto; margin-right: auto; max-width: 300px;">
    <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'urine_one')">
      <i class="material-icons md-48" id="urine_one">check_box</i>
    </span>
    <input name="urine_one" type="text" id="urine_one_input" class="w-300 h-10px flex-shrink-0 break-words" placeholder="トイレ">
  </div>
  <div style="display: flex; align-items: center; margin-left: auto; margin-right: auto; max-width: 300px;">
    <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'urine_two')">
      <i class="material-icons md-48" id="urine_two">check_box</i>
    </span>
    <input name="urine_two" type="text" id="urine_two_input" class="w-300 h-10px flex-shrink-0 break-words" placeholder="おむつ">
  </div>
  <div style="display: flex; align-items: center; margin-left: auto; margin-right: auto; max-width: 300px;">
    <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'urine_three')">
      <i class="material-icons md-48" id="urine_three">check_box</i>
    </span>
    <input name="urine_three" type="text" id="urine_three_input" class="w-300 h-10px flex-shrink-0 break-words" placeholder="尿漏れ">
  </div>
</div>
<div style="display: flex; flex-direction: column;">
 
 
 <div style="display: flex; align-items: center; margin-left: auto; margin-right: auto; max-width: 300px;">
  <h3>便</h3>
 </div>
  <div style="display: flex; align-items: center; margin-left: auto; margin-right: auto; max-width: 300px;">
    <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'ben_one')">
      <i class="material-icons md-48" id="ben_one">check_box</i>
    </span>
    <input name="ben_one" type="text" id="ben_one_input" class="w-300 h-10px flex-shrink-0 break-words" placeholder="トイレ">
  </div>
  <div style="display: flex; align-items: center; margin-left: auto; margin-right: auto; max-width: 300px;">
    <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'ben_two')">
      <i class="material-icons md-48" id="ben_two">check_box</i>
    </span>
    <input name="ben_two" type="text" id="ben_two_input" class="w-300 h-10px flex-shrink-0 break-words" placeholder="おむつ">
  </div>
  <div style="display: flex; align-items: center; margin-left: auto; margin-right: auto; max-width: 300px;">
    <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'ben_three')">
      <i class="material-icons md-48" id="ben_three_input">check_box</i>
    </span>
    <input name="ben_three" type="text" id="ben_three" class="w-300 h-10px flex-shrink-0 break-words" placeholder="尿漏れ">
  </div>
    <div style="display: flex; align-items: center; margin-left: auto; margin-right: auto; max-width: 300px;">
     <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-lg text-lg mr-4">
       送信
     </button>
    </div>

  </div>
        </form>
    <!--右側エリア[START]-->
            <!--<div class="flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2">-->
         <!-- 現在の本 -->
         
    <!--右側エリア[[END]--> 
</div>
 <!--全エリア[END]-->
 <script>
 
 const urineOneIcon = document.querySelector('#urine_one');

// add a click event listener to the icon
urineOneIcon.addEventListener('click', () => {
  // update the input value
  const urineOneInput = document.querySelector('#urine_one_input');
  urineOneInput.value = 'トイレ';

  // change the icon color
  //urineOneIcon.classList.replace('text-gray-400', 'text-yellow-400');
  urineOneIcon.classList.remove('text-gray-400');
  urineOneIcon.classList.add('text-yellow-400');
});


 const benTwoIcon = document.querySelector('#ben_two');

// add a click event listener to the icon
benTwoIcon.addEventListener('click', () => {
  // update the input value
  const benTwoInput = document.querySelector('#ben_two_input');
  benTwoInput.value = 'おむつ';

  // change the icon color
  //benTwoIcon.classList.replace('text-gray-400', 'text-yellow-400');
  benTwoIcon.classList.remove('text-gray-400');
  benTwoIcon.classList.add('text-yellow-400');
});

</script>
</x-app-layout>