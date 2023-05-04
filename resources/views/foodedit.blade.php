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
              
            }
          </style>
        <h2>{{$person->person_name}}さんの食事登録</h2>
        </form>
    
          <button type="button" button id="modal-button" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">食事量をとうろくする</button>
      </div>
  </div>  
  <!--ヘッダー[END]-->
            
        <!-- バリデーションエラーの表示に使用-->
       <!-- resources/views/components/errors.blade.php -->
       
<form action="{{ url('food/'.$person->id.'/edit') }}" method="POST">
         
      
                        @csrf
                        
                        <!--<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1">-->
                        <!--今日のこんだて-->
                        <!--</label>-->
                        <input name="food" id="text-box" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="">
                        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
                         <script src="https://kit.fontawesome.com/de653d534a.js" crossorigin="anonymous"></script>
                            <!--モーダル表示部分↓-->
          <div id="modal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center z-10 hidden">
  <div class="flex flex-col items-center">
      <style>
        p {
          font-family: Arial, sans-serif; /* フォントをArialに設定 */
          font-size: 25px; /* フォントサイズを20ピクセルに設定 */
          font-weight: bold;
        }
      </style>

    <p>どれぐらい食べましたか？</p>
    <div class="flex items-center justify-center">
      <div class="flex flex-col items-center">
        <span class="text-gray-400 text-4xl" onclick="changeColorAndSize(this, 'rice_bowl_icon_1')">
          <i class="fa-solid fa-bowl-rice text-gray-500 hover:text-white"  id="rice_bowl_icon_1" style="font-size: 1.5em; padding: 0 5px; transition: transform 0.2s;"></i>
        </span>
              <style>
              a:hover > i, a:active > i {
                transform: scale(1.3);
              }
              </style>
      </div>
      
      <div class="flex flex-col items-center">
        <span class="text-gray-400 text-4xl" onclick="changeColorAndSize(this, 'rice_bowl_icon_2')">
          <i class="fa-solid fa-bowl-rice text-gray-500 hover:text-white"  id="rice_bowl_icon_2" style="font-size: 1.5em; padding: 0 5px; transition: transform 0.2s;"></i>
        </span>
          <style>
          a:hover > i {
            transform: scale(1.3);
          }
          </style>
      </div>
      
      <div class="flex flex-col items-center">
        <span class="text-gray-400 text-4xl" onclick="changeColorAndSize(this, 'rice_bowl_icon_3')">
          <i class="fa-solid fa-bowl-rice text-gray-500 hover:text-white"  id="rice_bowl_icon_3" style="font-size: 1.5em; padding: 0 5px; transition: transform 0.2s;"></i>
        </span>
          <style>
          a:hover > i {
            transform: scale(1.3);
          }
          </style>
      </div>
      
      <div class="flex flex-col items-center">
        <span class="text-gray-400 text-4xl" onclick="changeColorAndSize(this, 'rice_bowl_icon_4')">
          <i class="fa-solid fa-bowl-rice text-gray-500 hover:text-white"  id="rice_bowl_icon_4" style="font-size: 1.5em; padding: 0 5px; transition: transform 0.2s;"></i>
        </span>
          <style>
          a:hover > i {
            transform: scale(1.3);
          }
          </style>
      </div>
      
      <div class="flex flex-col items-center">
        <span class="text-gray-400 text-4xl" onclick="changeColorAndSize(this, 'rice_bowl_icon_5')">
          <i class="fa-solid fa-bowl-rice text-gray-500 hover:text-white"  id="rice_bowl_icon_5" style="font-size: 1.5em; padding: 0 5px; transition: transform 0.2s;"></i>
        </span>
          <style>
          a:hover > i {
            transform: scale(1.3);
          }
          </style>
      </div>
    </div>
    　<div class="flex items-center justify-center">
        <input name="staple_food" type="text" id="staple_food" class="w-300 h-10px flex-shrink-0 break-words">
      </div>
    
    <div class="flex items-center justify-center">
      <div class="flex flex-col items-center">
        <span class="text-gray-400 text-4xl" onclick="changeColorAndSize(this, 'set_meal_1')">
          <i class="material-icons md-48 text-gray-500 hover:text-black" id="set_meal_1" style="font-size: 1.5em; padding: 0 5px; transition: transform 0.2s;">set_meal</i>
        </span>
           <style>
          a:hover > i {
            transform: scale(1.3);
          }
          </style>
        
      </div>
      
       <div class="flex flex-col items-center">
        <span class="text-gray-400 text-4xl" onclick="changeColorAndSize(this, 'set_meal_2')">
          <i class="material-icons md-48 text-gray-500 hover:text-black" id="set_meal_2" style="font-size: 1.5em; padding: 0 5px; transition: transform 0.2s;">set_meal</i>
        </span> 
           <style>
          a:hover > i {
            transform: scale(1.3);
          }
          </style>
      </div>
      
       <div class="flex flex-col items-center">
        <span class="text-gray-400 text-4xl" onclick="changeColorAndSize(this, 'set_meal_3')">
          <i class="material-icons md-48 text-gray-500 hover:text-black" id="set_meal_3" style="font-size: 1.5em; padding: 0 5px; transition: transform 0.2s;">set_meal</i>
        </span>
           <style>
          a:hover > i {
            transform: scale(1.3);
          }
          </style>
      </div>
      
      <div class="flex flex-col items-center">
        <span class="text-gray-400 text-4xl" onclick="changeColorAndSize(this, 'set_meal_4')">
          <i class="material-icons md-48 text-gray-500 hover:text-black" id="set_meal_4" style="font-size: 1.5em; padding: 0 5px; transition: transform 0.2s;">set_meal</i>
        </span>
           <style>
          a:hover > i {
            transform: scale(1.3);
          }
          </style>
      </div>
       
      <div class="flex flex-col items-center">
        <span class="text-gray-400 text-4xl" onclick="changeColorAndSize(this, 'set_meal_5')">
          <i class="material-icons md-48 text-gray-500 hover:text-black" id="set_meal_5" style="font-size: 1.5em; padding: 0 5px; transition: transform 0.2s;">set_meal</i>
        </span>  
          <style>
            a:hover > i {
              transform: scale(1.3);
            }
          </style>
       </div>
    </div>  
          <div class="flex items-center justify-center">
            <input name="side_dish" type="text" id="side_dish" class="w-300 h-10px flex-shrink-0 break-words">
          </div>
   
      
    
      <div class="flex items-center justify-center  mt-4">
        <button type="button" button id="next-button" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded" style="padding: 10px;">次へ</button>
  　　</div> 
　    
          
     

　　　　  <div id="next-modal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center z-10 hidden">
　　　　   
　　　　   <p>薬の服用</p>
            <i class="material-icons md-48">medication</i>
            <!--<form action="送信先のURL" method="POST">-->
                <select name="medicine">
                  <option value="selected">選択してください</option>
                  <option value="yes">あり</option>
                  <option value="no">なし</option>
                </select>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                送信
                </button>
           </div>
            
  </form>
    <!--右側エリア[START]-->
   
            <!--<div class="flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2">-->
         <!-- 現在の本 -->
              <!--<div>-->
              <!--  <video autoplay muted playsinline id="video"></video>-->
              <!--</div>-->
              <!--  <button type="button" button id="modal-button" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">食事量をとうろくする</button>-->
                <!--<button type="button" button id="button" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">写真を撮る</button>-->
            <!--</div>  -->
            <!--<div>-->
            <!--   <img id="image" alt="" />-->
            <!--</div>-->
            <!--カメラが映っている部分が表示されている箇所↓-->
            <!--<div class="flex">-->

              <!--福島先生コード-->
            <!--  <input type="hidden" id="base64_image" name="base64_image" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded" value="" />-->
            <!--  <div id="video-container">-->
            <!--    <video id="camera-stream" autoplay></video>-->
            <!--  </div>-->
            <!--</div>-->
            <!--<div v-show="isModeImage">-->
            <!--  <canvas ref="canvas" width="640" height="480"></canvas>-->
            <!--</div>-->
    <!--右側エリア[[END]--> 
<!--</div>-->
 <!--全エリア[END]-->
<script>
// モーダルを表示する関数
function showModal() {
  var modal = document.querySelector('#modal');
  modal.classList.remove('hidden');
}

var modalTrigger = document.querySelector('#modal-button');
modalTrigger.addEventListener('click', function() {
  showModal();
});

var nextButton = document.querySelector('#next-button');
nextButton.addEventListener('click', function() {
  // hide current modal
  var modal = document.querySelector('#modal');
  modal.classList.add('hidden');

  // show next modal
  var nextModal = document.querySelector('#next-modal');
  nextModal.classList.remove('hidden');
});


var count_side_dish = 0;

function changeColorAndSize(element, id) {
const targetIcon = document.getElementById(id);
  // if (element.classList.contains("text-gray-500")) {
  // element.classList.remove("text-gray-500");
  // element.classList.add("text-white");
  // targetIcon.classList.add("text-white");
  targetIcon.style.fontSize = "64px";
  // } else {
  // element.classList.remove("text-white");
  // element.classList.add("text-gray-500");
  // targetIcon.classList.add("text-gray-500");
  // targetIcon.style.fontSize = "48px";
// }
};

const rice_bowl_icon_1 = document.getElementById("rice_bowl_icon_1");
rice_bowl_icon_1.addEventListener("click", () => {
count++;
  rice_bowl_icon_1.classList.remove("text-gray-500");
  rice_bowl_icon_1.classList.add("text-white");
updateStaplefoodStatus();
});

const rice_bowl_icon_2 = document.getElementById("rice_bowl_icon_2");
rice_bowl_icon_2.addEventListener("click", () => {
  count++;
  rice_bowl_icon_2.classList.remove("text-gray-500");
  rice_bowl_icon_2.classList.add("text-white");
  updateStaplefoodStatus();
});

const rice_bowl_icon_3 = document.getElementById("rice_bowl_icon_3");
rice_bowl_icon_3.addEventListener("click", () => {
  count++;
  rice_bowl_icon_3.classList.remove("text-gray-500");
  rice_bowl_icon_3.classList.add("text-white");
  updateStaplefoodStatus();
});

const rice_bowl_icon_4 = document.getElementById("rice_bowl_icon_4");
rice_bowl_icon_4.addEventListener("click", () => {
  count++;
  rice_bowl_icon_4.classList.remove("text-gray-500");
  rice_bowl_icon_4.classList.add("text-white");
  updateStaplefoodStatus();
});

const rice_bowl_icon_5 = document.getElementById("rice_bowl_icon_5");
rice_bowl_icon_5.addEventListener("click", () => {
  count++;
  rice_bowl_icon_5.classList.remove("text-gray-500");
  rice_bowl_icon_5.classList.add("text-white");
  updateStaplefoodStatus();
});


function updateStaplefoodStatus() {
  const staple_food = document.getElementById("staple_food");
  switch (count) {
    case 1:
      staple_food.value = "5分の1";
      console.log("ステータス文字列： 5分の1")
      break;
    case 2:
      staple_food.value = "5分の2";
      console.log("ステータス文字列： 5分の2");
      break;
    case 3:
      staple_food.value = "半分";
      console.log("ステータス文字列： 5分の3");
      break;
    case 4:
      staple_food.value = "5分の4";
      console.log("ステータス文字列： 5分の4");
      break;
    case 5:
      staple_food.value = "完食";
      console.log("ステータス文字列： 完食");
      break;
    default:
      staple_food.value = "";
      console.log("ステータス文字列： ");
      break;
  };
};

let count = 0;
const set_meal_1 = document.getElementById("set_meal_1");
set_meal_1.addEventListener("click", () => {
  count_side_dish++;
  set_meal_1.classList.remove("text-gray-500");
  set_meal_1.classList.add("text-black");
  updateStatus();
});

const set_meal_2 = document.getElementById("set_meal_2");
set_meal_2.addEventListener("click", () => {
  count_side_dish++;
  set_meal_2.classList.remove("text-gray-500");
  set_meal_2.classList.add("text-black");
  updateStatus();
});

const set_meal_3 = document.getElementById("set_meal_3");
set_meal_3.addEventListener("click", () => {
  count_side_dish++;
  set_meal_3.classList.remove("text-gray-500");
  set_meal_3.classList.add("text-black");
  updateStatus();
});

const set_meal_4 = document.getElementById("set_meal_4");
set_meal_4.addEventListener("click", () => {
  count_side_dish++;
  set_meal_4.classList.remove("text-gray-500");
  set_meal_4.classList.add("text-black");
  updateStatus();
});

const set_meal_5 = document.getElementById("set_meal_5");
set_meal_5.addEventListener("click", () => {
  count_side_dish++;
  set_meal_5.classList.remove("text-gray-500");
  set_meal_5.classList.add("text-black");
  updateStatus();
});


function updateStatus() {
  const side_dish = document.getElementById("side_dish");
  switch (count_side_dish) {
    case 1:
      side_dish.value = "5分の1";
      console.log("ステータス文字列： 5分の1")
      break;
    case 2:
      side_dish.value = "5分の2";
      console.log("ステータス文字列： 5分の2");
      break;
    case 3:
      side_dish.value = "半分";
      console.log("ステータス文字列： 5分の3");
      break;
    case 4:
      side_dish.value = "5分の4";
      console.log("ステータス文字列： 5分の4");
      break;
    case 5:
      side_dish.value = "完食";
      console.log("ステータス文字列： 完食");
      break;
    default:
      side_dish.value = "";
      console.log("ステータス文字列： ");
      break;
  };
};
  

async function main() {
  try {
    const video = document.querySelector("#camera-stream");
    const button = document.querySelector("#button");
    const image = document.querySelector("#image");
 　  let dataUrl = "";
    const stream = await navigator.mediaDevices.getUserMedia({
      video: {
        facingMode: "user",
      },
      audio: false,
    });
    
    video.srcObject = stream;
    const [track] = stream.getVideoTracks();
    const settings = track.getSettings();
    const { width, height } = settings;
    const base64_image = document.getElementById("base64_image");
    
    button.addEventListener("click", async (event) => {
      const canvas = document.createElement("canvas");
      canvas.setAttribute("width", width);
      canvas.setAttribute("height", height);
      const context = canvas.getContext("2d");
      context.drawImage(video, 0, 0, width, height);
        
// Webカメラで撮った画像をURLに変換
      dataUrl = canvas.toDataURL("image/jpeg");
      image.src = dataUrl;
      console.log(dataUrl); // 追加
      image.onload = async () => {
        if (!dataUrl) {
          console.log("dataUrl is undefined");
          return;
        }
           // recognizeText関数が呼び出され、テキスト認識を実行
        console.log(await recognizeText(dataUrl));
      };
    });
  } catch (err) {
    console.error(err);
  }
};

// 福島先生コード↑
// HTMLのフォームでユーザーがアップロードした画像のBase64エンコードされたデータを取得
// Google Cloud Vision APIの「TEXT_DETECTION」機能を使用するためのリクエストデータを作成します。
// HTMLのフォームでユーザーがアップロードした画像のBase64エンコードされたデータを取得
// Google Cloud Vision APIの「OBJECT_LOCALIZATION」機能を使用するためのリクエストデータを作成します。

async function recognizeText(dataUrl) {
  if (!dataUrl) return; // 追加
  const base64Data = dataUrl.split(",")[1];
  const requestData = {
    requests: [
      {
        image: {
          content: base64Data,
        },
        features: [{ type: "TEXT_DETECTION" }],
      },
    ],
  };
const apiKey = "{{ config('app.api_key') }}";
const response = await fetch(
 "https://vision.googleapis.com/v1/images:annotate?key=" + apiKey,
  {
    method: "POST",
    body: JSON.stringify(requestData),
  }
);
  
//   応答データからテキストを抽出し、コンソールに出力する
 const data = await response.json();
  const text = data.responses[0].fullTextAnnotation.text;
  console.log(text);
  //   テキストボックスにコンソールに表示された文字を入れる
  // document.getElementById("text-box").value = text;
};

// 


main();
</script>
</x-app-layout>