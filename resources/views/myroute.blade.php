<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #f5f5f5;
            color: #333;
        }

        h1 {
            margin-bottom: 20px;
            color: #008080;
        }

        form {
            margin-bottom: 20px;
        }

        input {
            padding: 8px;
            font-size: 16px;
        }

        button {
            padding: 8px 16px;
            font-size: 16px;
            background-color: #008080;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #006666;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #008080;
            color: #fff;
        }

        .scrollable-content {
            max-height: 200px;
            overflow-y: scroll;
            border: 1px solid #ddd;
            padding: 10px;
            background-color: #fff;
        }
    </style>
</head>

<body>
    <h1>สูตรคูณ</h1>

    <form method="post" action="/result">
        @csrf
        <input type="number" name="myinput" required>
        <button type="submit">Submit</button>
    </form>

    @if (session('multiply'))  
    <?php $multi_x = (int) session('multiply'); ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <div class="scrollable-content">
        <table>
            <thead>
                <tr>
                    <th>ตัวคูณ</th>
                    <th>ผลลัพธ์</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= 24; $i++) {
                    $result = $multi_x * $i;
                    echo "<tr><td>$multi_x x $i</td><td>$result</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    @endif
</body>

</html>
