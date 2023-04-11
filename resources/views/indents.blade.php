<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="source" style="display: flex; align-items: center; flex-direction: column">
    <h3 class="source__header">insert your code here</h3>
    <form id="source__form">
        <textarea id="source" name="code" cols="50" rows="10"></textarea>
        <button style="width: 100px; display: block; margin: 15px auto;" class="source__confirm">confirm</button>
    </form>
</div>

<div class="result" style="display: flex; align-items: center; flex-direction: column">
    <h3 class="source__header">result</h3>
    <textarea name="result__input" id="result__input" cols="50" rows="10"></textarea>
</div>
<script>
    function formatCode(text) {
        let formattedText = '';
        let tabCount = 0;

        for (let i = 0; i < text.length; i++) {
            const char = text.charAt(i);

            if (char === '{') {
                formattedText += ' { \n';
                tabCount++;
                formattedText += '\t'.repeat(tabCount);
            } else if (char === '}') {
                tabCount--;
                formattedText += '\n' + '\t'.repeat(tabCount) + '} ' + '\n'; // добавляем перенос строки после }
            } else if (char === ';' || char === '{' || char === '}') {
                formattedText += char + ' ' + '\n' + '\t'.repeat(tabCount);
            } else {
                formattedText += char;
            }
        }

        return formattedText;
    }
    document.querySelector('#source__form').addEventListener('submit', (ev) => {
        ev.preventDefault();
        const text = document.querySelector('#source').value;
        document.querySelector('#result__input').value = formatCode(text);
    });
</script>
</body>
</html>