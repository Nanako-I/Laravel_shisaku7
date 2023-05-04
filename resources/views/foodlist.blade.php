@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>

    <!--ヘッダー[START]-->
   
    <!--ヘッダー[END]-->
            
        <!-- バリデーションエラーの表示に使用-->
       <!-- resources/views/components/errors.blade.php -->
        @if (count($errors) > 0)
            <!-- Form Error List -->
            <div class="flex justify-between p-4 items-center bg-red-500 text-white rounded-lg border-2 border-white">
                <div><strong>入力した文字を修正してください。</strong></div> 
                <div>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        @endif

       
<style>
  /* フォントを指定 */
  body {
    font-family: Arial, sans-serif; /* フォントをArialに設定 */
  }
  </style>
        <!--// 処理-->
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        
           <!--<section class="text-gray-600 body-font" _msthidden="29">-->
  <!--<div class="container px-5 py-24 mx-auto" _msthidden="29">-->
    <div class="flex flex-col text-center w-full mb-20" _msthidden="2">
        <style>
         @import url('https://fonts.googleapis.com/css2?family=Arial&display=swap');
            h1 {
            font-family: Arial, sans-serif; /* フォントをArialに設定 */
          }
        </style>
      <h1 class="sm:text-2xl text-4xl font-bold title-font mb-4 text-gray-900" _msttexthash="91611" _msthidden="1" _msthash="63">利用者一覧</h1>
    </div>
    
    <!-- 現在の本 -->
    @csrf
                @if (!is_null($people) && count($people) > 0)
             <div class="flex flex-wrap justify-center -m-2" style="flex-wrap:wrap">
                @foreach ($people as $person)
                <!--$person->load('temperatures');-->
                  <div class="p-2 lg:w-1/5 md:w-1/2 w-full">
                      <!--<style>-->
                      <!--    .h-50:hover {-->
                      <!--      transform: scale(1.1);-->
                      <!--    }-->
                      <!--  </style>-->

                   <div class="h-50 flex items-center border p-4 rounded-lg bg-my-yellow hover:bg-my-deepyellow">

                     @if ($person->filename)
                              <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="{{ asset('storage/sample/' . $person->filename) }}">
                            @else
                              <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
                            @endif



                                <style>
                                  /* フォントを指定 */
                                  .h2 {
                                    font-family: Arial, sans-serif; /* フォントをArialに設定 */
                                  }
                                 </style>
                                        <div class="flex-grow">
                                          <h2 class="h2 text-gray-900 title-font font-bold text-2.5xl" _msttexthash="277030">{{$person->person_name}}</h2>
                                          <!--<p class="text-gray-900 font-bold text-xl" _msttexthash="150072">{{$person->date_of_birth}}生まれ</p>-->
                                        </div>

                      
                   <!-- Load Font Awesome -->
                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
                                        <script src="https://kit.fontawesome.com/de653d534a.js" crossorigin="anonymous"></script>
                                        <div class="parent-element relative"> <!-- 親要素に相対的な位置を設定 -->
                                            <a href="{{ url('food/'.$person->id.'/edit') }}">
                                             <i class="fa-solid fa-bowl-rice text-blue-500 hover:text-blue-500" style="font-size: 2em; padding: 0 5px; transition: transform 0.2s;"></i>
                                                <span class="absolute bottom-full left-1/2 transform -translate-x-1/2 bg-white text-gray-900 px-6 py-2 rounded-lg text-lg font-bold opacity-0 transition-opacity duration-300 border-4 border-lime-600" style="writing-mode: horizontal-tb; width: 200px;">体温を記入する</span>
                                        </div>
                                         <style>
                                          a:hover > i {
                                            transform: scale(1.5);
                                          }
                                          .parent-element {
                                              position: relative; /* 親要素に相対的な位置を設定 */
                                            }
                                            
                                            /*.parent-element:hover > span {*/
                                                opacity: 1; /* ホバー時にテキストを表示 */
                                            /*}*/
                                            a:hover > span {
                                              position: absolute; /* 絶対的な位置を設定 */
                                              bottom: calc(100% + 10px); /* アイコン真上に表示 */
                                              left: 50%; /* アイコンの中心に配置 */
                                              transform: translateX(-50%); /* アイコンの中心に配置 */
                                            }
                                        　</style>
<!-- Display an icon -->

                       <!-- 食事データを取得して表示 -->
                       
                         <!-- $staple_foodと$side_dishを$foodから取得する -->
          @if (!empty($person) && is_countable($person->foods) && count($person->foods) > 0)
    @php
        $staple_food = null;
    @endphp
    @foreach ($person->foods as $food)
        @if ($food->staple_food)
            @php
                $staple_food = $food->staple_food;
            @endphp
            @if ($staple_food->created() >= 6)
                <p class="text-red-500 font-bold text-xl">食事を登録してください</p>
            @else
                <a href="{{ route('foods.show', $food->id) }}" class="font-bold text-xl">
                    @if (!empty($staple_food))
                        主食: {{ $staple_food->staple_food }}
                    @endif
                </a>
            @endif
            @break
        @endif
    @endforeach
@endif







                       
                      <a href="{{ route('people.edit', ['id' => $person->id]) }}">
                        @csrf
                        <i class="material-icons md-90 ml-auto">add</i>
                      </a>
                    </div>
                  </div>
                @endforeach
              </div>
              @if (count($people) % 2 == 0)
                <div class="flex justify-center">
                  <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-50 flex items-center border-gray-200 border p-4 rounded-lg"></div>
                  </div>
                </div>
              @endif
            @endif

   
  <!--</div>-->
<!--</section>-->


   

            　　
   　　　　　　　　　　　　　
    <!--右側エリア[END]--> 

</div>
 <!--全エリア[END]-->

</body>
</html>
</x-app-layout>