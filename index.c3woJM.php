<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>hello</title>
</script>


    <!-- Load c3.css -->
    <link href="c3-master/c3.css" rel="stylesheet" type="text/css">
   <!-- Load d3.js and c3.js -->
    <script src="c3-master/d3.v3.min.js" charset="utf-8"></script>
    <script src="c3-master/c3.min.js"></script>

</head>
<body>
      <div id="chart"></div>
      hello
</div>
  <script>
        var chart = c3.generate({
          bindto: '#chart',
          data: {
            columns: [
              ['data1', 30, 200, 100, 400, 150, 250],
              ['data2', 50, 20, 10, 40, 15, 25]
            ]
          },
        });
  </script>
  </body>
</html>