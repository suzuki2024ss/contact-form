<!DOCTYPE html>
<html>

<head>
    <title>性別選択</title>
</head>

<body>
    <form action="{{ route('processGender') }}" method="POST">
        @csrf
        <label for="gender">性別を選択してください:</label>
        <select name="gender" id="gender">
            <option value="male">男性</option>
            <option value="female">女性</option>
            <option value="other">その他</option>
        </select>
        <button type="submit">送信</button>
    </form>
</body>

</html>