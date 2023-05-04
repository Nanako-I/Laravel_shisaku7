 <!--<div class="h-50 flex items-center border p-4 rounded-lg bg-my-yellow hover:bg-my-deepyellow">-->

 <!--                    @if ($person->filename)-->
 <!--                             <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="{{ asset('storage/sample/' . $person->filename) }}">-->
 <!--                           @else-->
 <!--                             <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">-->
 <!--                           @endif-->
                            
 <!--                               <style>-->
                                  /* フォントを指定 */
 <!--                                 .h2 {-->
                                    font-family: Arial, sans-serif; /* フォントをArialに設定 */
 <!--                                 }-->
 <!--                                </style>-->
 <!--                                       <div class="flex-grow">-->
 <!--                                         <h2 class="h2 text-gray-900 title-font font-bold text-2.5xl" _msttexthash="277030">{{$person->person_name}}</h2>-->
                                          <!--<p class="text-gray-900 font-bold text-xl" _msttexthash="150072">{{$person->date_of_birth}}生まれ</p>-->
 <!--                                       </div>-->

                      
                   <!-- Font Awesomeを使う部分↓ -->
 <!--                                   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />-->
 <!--                                       <script src="https://kit.fontawesome.com/de653d534a.js" crossorigin="anonymous"></script>-->
 <!--                                       <a href="{{ url('food/'.$person->id.'/edit') }}" class="relative">-->
 <!--                                         <i class="fa-solid fa-bowl-rice text-blue-500 hover:text-blue-500" style="font-size: 2em; padding: 0 5px; transition: transform 0.2s;"></i>-->
 <!--                                            <span class="absolute bottom-full left-1/2 transform -translate-x-1/2 bg-white text-gray-900 px-6 py-2 rounded-lg text-lg font-bold opacity-0 transition-opacity duration-300 border-4 border-lime-600" style="writing-mode: horizontal-tb; width: 200px;">食事量を入力する</span>-->

 <!--                                       </a>-->
 <!--                                       <style>-->
 <!--                                         a:hover > i {-->
 <!--                                           transform: scale(1.5);-->
 <!--                                         }-->
 <!--                                         a:hover > span {-->
 <!--                                           opacity: 1;-->
                                            bottom: calc(100% + 10px); /* アイコン真上に表示 */
 <!--                                         }-->
 <!--                                       </style>-->



                                            
 <!--                                       <a href="{{ url('temperature/'.$person->id.'/edit') }}">-->
 <!--                                       <i class="fa-solid fa-thermometer text-pink-400 hover:text-pink-400" style="font-size: 2em; padding: 0 5px;"></i>-->
 <!--                                         <span class="absolute bottom-full left-1/2 transform -translate-x-1/2 bg-white text-gray-900 px-6 py-2 rounded-lg text-lg font-bold opacity-0 transition-opacity duration-300 border-4 border-lime-600" style="writing-mode: horizontal-tb; width: 200px;">体温を記入する</span>-->
                                        
 <!--                                        <style>-->
 <!--                                         a:hover > i {-->
 <!--                                           transform: scale(1.5);-->
 <!--                                         }-->
 <!--                                         .parent-element {-->
                                              position: relative; /* 親要素に相対的な位置を設定 */
 <!--                                           }-->
                                            
 <!--                                           a:hover > span {-->
                                              position: absolute; /* 絶対的な位置を設定 */
                                              bottom: calc(100% + 10px); /* アイコン真上に表示 */
                                              left: 50%; /* アイコンの中心に配置 */
                                              transform: translateX(-50%); /* アイコンの中心に配置 */
 <!--                                           }-->
 <!--                                       　</style>-->
 <!--                                       <a href="{{ url('toilet/'.$person->id.'/edit') }}">-->
 <!--                                       <i class="fa-solid fa-toilet-paper text-blue-500 hover:text-blue-500" style="font-size: 2em; padding: 0 5px;"></i>-->
                                        
                                        
                                        
 <!--                                       <a href="{{ url('speech/'.$person->id.'/edit') }}">-->
 <!--                                       <i class="fa-solid fa-volume-high text-orange-400" style="font-size: 2em; padding: 0 5px;"></i>-->
                                        
 <!--                                       <a href="{{ url('record/'.$person->id.'/edit') }}">-->
 <!--                                       <i class="fa-regular fa-clipboard text-green-500" style="font-size: 2em; padding: 0 5px;"></i>-->
<!-- Display an icon -->