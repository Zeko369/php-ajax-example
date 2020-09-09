<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    .card {
      border: 1px solid black;
      border-radius: 8px;

      margin: 10px;
      padding: 10px;
    }
  </style>
</head>

<body>
  <main>
    <h1>Title</h1>
    <template id="product">
      <div class="card">
        <h4 class="title"></h4>
      </div>
    </template>
    <div id="items"></div>
  </main>

  <script src="./script.js"></script>
</body>

</html>
