<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/top.css')  }}" >
</head>
<body>
<b class="title">宿泊予約サイト　テストサイト</b>
　　　<b class="subtitle">オーナー</b>
{{--↓ログイン情報をここに持ってくる--}}
<h1 class="guest_name">ログイン名様</h1>
<b class="maintitle">【Information】お知らせ</b>
<button class="Information" onclick="location.href='https://qiita.com/mzmz__02'">Information</button>
{{--情報一覧に飛ぶ--}}
{{--これで横一列でこれを5つ--}}
{{--5泊,3泊,8泊,0泊,4泊--}}
<b>FREEDAY</b>
<h3>フリーデイ</h3>
{{--この列はデータベースから5つ持ってくる--}}
{{--列--}}



<table>
{{--列--}}
    <tr>
        <th>利用可能日数(2022年6月末日まで有効)</th>
        <th><button class="t_button"onclick="location.href='https://qiita.com/mzmz__02'">5泊</button></th>
    </tr>
    <tr>
        <th>利用可能日数(2022年12月末日まで有効)</th>
        <th><button class="t_button" onclick="location.href='https://qiita.com/mzmz__02'">3泊</button></th>
    </tr>
    <tr>
        <th>利用可能日数(2023年8月末日まで有効)</th>
        <th><button class="t_button" onclick="location.href='https://qiita.com/mzmz__02'">-8泊</button></th>
    </tr>
    <tr>
        <th>利用可能日数(2024年6月末日まで有効)</th>
        <th><button class="t_button" onclick="location.href='https://qiita.com/mzmz__02'">0泊</button></th>
    </tr>
    <tr>
        <th>利用可能日数(2024年12月末日まで有効)</th>
        <th><button class="t_button" onclick="location.href='https://qiita.com/mzmz__02'">4泊</button></th>
    </tr>
</table>
<a href="https://qiita.com/mzmz__02">>>さらに見る</a>

<b>FIXDAY</b>
<p>フィックスデイ</p>
{{--上の奴と同じでデータベースから5つぐらい持ってくる--}}
{{--列--}}
<table>
  <tr>
      <th>2023年1月3日 (火)~5日 (木)</th>
      <th><button class="t_button"onclick="location.href='https://qiita.com/mzmz__02'">未確定</button></th>
  </tr>
    <tr>
        <th>2023年1月5日 (木)~7日 (土)</th>
        <th><button class="t_button"onclick="location.href='https://qiita.com/mzmz__02'">未確定</button></th>
    </tr>
    <tr>
        <th>2023年1月7日 (土)~9日 (月)</th>
        <th><button class="t_button"onclick="location.href='https://qiita.com/mzmz__02'">未確定</button></th>
    </tr>
    <tr>
        <th>2023年1月13日 (金)~15日 (日)</th>
        <th><button class="t_button"onclick="location.href='https://qiita.com/mzmz__02'">未確定</button></th>
    </tr>
    <tr>
        <th>2023年1月16日 (月)~18日 (水)</th>
        <th><button class="t_button"onclick="location.href='https://qiita.com/mzmz__02'">未確定</button></th>
    </tr>
</table>
{{--列終了--}}
<a href="https://qiita.com/mzmz__02">さらに見る</a>

<p>〒389-0100<br>
    長野県北佐久郡軽井沢町1018-30</p>

{{--これはかっこで囲む--}}
<b>Concierge DESK
    0120-026-015
    受付時間10時～18時</b>
</body>
</html>


