<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="FoodMenuStyle.css">

</head>

<body>
    <table id="sampleTbl">
        <tr>
            <td class="item-name">Idli <br><img src="Images/Idli.jpg" alt="Idli"></td>
            <td>25</td>
            <td>
                <button onclick="decrement('idli-qty')">-</button>
                <span id="idli-qty">0</span>
                <button onclick="increment('idli-qty')">+</button>
            </td>
        </tr>
        <tr>
            <td class="item-name">Wada <br><img src="Images/Wada.jpg" alt="Wada"></td>
            <td>25</td>
            <td>
                <button onclick="decrement('wada-qty')">-</button>
                <span id="wada-qty">0</span>
                <button onclick="increment('wada-qty')">+</button>
            </td>
        </tr>

        <tr>
            <td class="item-name">Puri <br><img src="Images/Puri.jpg" alt="Puri"></td>
            <td>25</td>
            <td>
                <button onclick="decrement('puri-qty')">-</button>
                <span id="puri-qty">0</span>
                <button onclick="increment('puri-qty')">+</button>
            </td>
        </tr>
        <tr>
            <td class="item-name">Dosa <br><img src="Images/Dosa.jpg" alt="Dosa"></td>
            <td>25</td>
            <td>
                <button onclick="decrement('dosa-qty')">-</button>
                <span id="dosa-qty">0</span>
                <button onclick="increment('dosa-qty')">+</button>
            </td>
        </tr>
        <tr>
            <td class="item-name">Bonda <br><img src="Images/Bonda.jpg" alt="Bonda"></td>
            <td>25</td>
            <td>
                <button onclick="decrement('bonda-qty')">-</button>
                <span id="bonda-qty">0</span>
                <button onclick="increment('bonda-qty')">+</button>
            </td>
        </tr>
    </table>
    <form action="send.php" method="POST">
        <input type="text" id="1" style="visibility: hidden;" name="cost"> 
        <input type="text" id="2" name="quantity">
        <input type="submit">
    </form>
    <button>Set text content for all p elements</button>

    <script>
        var TableData = "";
        $(document).ready(function () {
            $("button").click(function () {
                $("form #1").val(TableData);
            });
            $('#sampleTbl tr').each(function (row, tr) {
                TableData = TableData

                    + $(tr).find('td:eq(1)').text() + ' '  // cost
                    + $(tr).find('td:eq(2) span').text() + ' '  // qunatity
                    + '\n';
            });
        });
    </script>

</html>