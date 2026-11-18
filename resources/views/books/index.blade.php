
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book List</title>

    <style>
        body {
            font-family: sans-serif;
            background-color: #3b6c7c;
            padding: 30px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        h2 {
            color: #ffffff;
        }

        .card {
            background-color: #71b1bc;
            padding: 25px;
            margin-top: 20px;
            border-radius: 12px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr) auto; //4 inputs ug 1 buttons
            gap: 10px;
            align-items: end;
        }


        label {
            display: block;
            margin-bottom: 6px;
            color: #000000;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #750e0e;
            border-radius: 6px;

        }

        input:focus {
            border-color: #200348;
        }

        .btn {
            background-color: #200348;
            color: white;
            padding: 11px 18px;
            border-radius: 6px;
            font-size: 14px;
        }
        

        .logout-btn {
            background-color: #ae0e08;
        }


        table {
            width: 100%;
            margin-top: 20px;
            background-color: #ffffff;
            border-radius: 20px;
            overflow: hidden;
        }

        thead {
            background-color: #200348;
            color: white;
        }

        th, td {
            padding: 13px;
            text-align: left;
        }

        tbody tr {
            border-bottom: 1px solid #eee;
        }


        .alert {
            padding: 12px;
            margin-top: 15px;
            border-radius: 6px;
            background-color: #e8f8ee;
            color: #218838;
        }

        @media (max-width: 750px) {
            .form-grid {
                grid-template-columns: 1fr 1fr;
            }

            .header {
                gap: 10px;
            }

            .card {
                overflow-x: auto;
            }

            table {
                min-width: 600px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <h2>LISTAHAN LIBRO</h2>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn logout-btn">
                Logout
            </button>
        </form>
    </div>

    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">

        <h3 style="color: #200348;">Add to bookshelf</h3>

        <form action="{{ route('books.store') }}" method="POST" id="bookForm">
            @csrf

            <div class="form-grid">

                <div class="form-group">
                    <label style="center">ID</label>
                </div>

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" required>
                </div>

                <div class="form-group">
                    <label>Author</label>
                    <input type="text" name="author" required>
                </div>

                <div class="form-group">
                    <label>ISBN</label>
                    <input type="text" name="isbn" required>
                </div>

                <div class="form-group">
                    <label>Qty</label>
                    <input type="number" name="quantity" value="1" min="1" required>
                </div>

                <button type="submit" class="btn" id="submitBtn">
                    add to shelf
                </button>

            </div>
        </form>

    </div>

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Quantity</th>
            </tr>
        </thead>

        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->quantity }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>

<script>
    // Prevent double clicking when adding a book
    document.getElementById('bookForm').addEventListener('submit', function() {
        const btn = document.getElementById('submitBtn');
        btn.disabled = true;
        btn.innerText = 'Saving...';
    });
</script>

</body>
</html>