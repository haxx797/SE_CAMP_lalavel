<!doctype html>
<html>

<head>
    <title>Multiplication Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        input[type="text"],
        button {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
            border: 1px solid #ccc;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Multiplication Table</h1>
        <input type="text" id="my_number" placeholder="Enter a number">
        <button onclick="myFunction()">Generate Table</button>
        <table>
            <thead>
                <tr>
                    <th>Multiplier</th>
                    <th>x</th>
                    <th>Multiplier</th>
                    <th>=</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody id="my_tbody">

            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function myFunction() {
            let my_number = parseInt($('#my_number').val())
            let multiplication_table = '';
            for (let i = 1; i <= 12; i++) {
                multiplication_table += `<tr><td>${my_number}</td><td>x</td><td>${i}</td><td>=</td><td>${my_number * i}</td></tr>`;
            }
            $('#my_tbody').html(multiplication_table);
        }
    </script>
</body>

</html>
