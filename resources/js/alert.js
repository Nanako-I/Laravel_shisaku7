// // トイレ誘導のアラートを表示
// <!-- jQueryの読み込み -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
function showAlert() {
//     jQuery('#myModal').modal({
//         backdrop: 'static',
//         keyboard: false
var currentTime = new Date();
  // ターゲットの時刻を設定 (11:45になるとアラートを表示する)
  var targetTime = new Date();
  targetTime.setHours(11);
  targetTime.setMinutes(30);

  // 現在の時刻がターゲットの時刻に達した場合
  if (currentTime >= targetTime) {
    // アラートを表示するHTMLを生成
    var alertHtml = '<div class="alert">トイレに行ってください</div>';
    // アラートを表示する要素にHTMLを設定
    document.getElementById('alert-container').innerHTML = alertHtml;
  }
}

</script>
