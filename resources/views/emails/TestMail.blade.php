<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vip pro mail</title>

    <style>
        .header{
            width: 600px; 
            height: 600px; 
            background-color:aliceblue;
            margin-left: 500px;
        }
        .logo{
            width: 100px;
            height: 100px;
        }
        h3{
            color: #777777;
        }
        h1{
            font-size: 40px;
            font-family: serif;
        }
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #customers tr:nth-child(even){
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
}
    </style>
</head>
<body>
    <div class="header">
    <img class="logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAE9klEQVRIS42VW2yURRTH//PtfnvfbXe3hWovi5qYCjFKkLYgYNVAjCQoWgkGqImXVLwkqOVBhDeRF9EHJD4ISlojEcUg+ELEhxJLuNRyC7SBwF7ardvb3vfb3e82Zqa4y3ZLy0mT7sycmd93zvzPGRIJD1IASCYSIITA6XKx4YymqhrC4X/h89UV1u3O+TCKFmQzE1CVPKx2Lx+rShY5KQZNU0CGgwPUaCR8Uzwag8lsgs1uL4Ocv3AR615+nc/X1dWi79xf/LcgGGB31YAQA/9IZjkpjnwuUTiDBP0D1CAADKSpKgc5XC6YLeYSkO/hJ5DP5wtzgdtXYTGLIETgXy+abKBUh5Qeh6rkSvaSocAg1SmF0QAYDASyLCMZj6PS7YZRFAvOzcvXIBgMFcaR8CBMZjssVjeIYICcTyMrRQHKs18OYTMMJBpZ+AQ5SYIkSXB7vYUU6LqO1udfwo0bN3Hoh2+xfv2rMJmd0HUN2cwkv4N7GY+kuEghilN5TadS0FQNFe7KwvJnu3bj4PfdyKSTEAwiFDmDbCbK0zSblUAoKNifyTQFSibi/GIdTicfP7d6Pa5fH+BR5qQoT9H92LRIplJKyFREVKeIx2KwOVzwVNXCVeEBpRRXr5xFtbcY4VygMgjbwECCAVwMRDAjlczAW10Dt6eKn3f01248vWzpXGcXJVx6J3fdDgUcrgpYbZWQ0gmMDN/G44uXc4eWliYcO9p1/5DoZIRmUvFSyRECh8sLs8UORWaVO4m/e8/ilbYtBb+g/yrMpqLEZ714SimdGBtGLpvhfkajCY4KL/+flVJIJSdhEgm+2X8Au/d8ySXd2PgkwuFbuDFw/r6iIQzCtD4WCcFgMMLh9IIIAtKpKHJSiokNTGtvd3yAkydP8UPraocQHmnAcPAaDKxdzGFEkfPUKJqgqgpYA9Q1lX+9IhdbA1OUqqlo27AF/f2X8GxrByYmvsIfx4dhNpdX+HQmGR0J0HkP+Pi8qigYiwR5FU83Blr81Ao0NNTj4sVLePON2xgd9+Dgd5G5AgFJJePUbLFBvNOnUskoErHxGTfWL2jE5f4z6HhvGy5fvoJlLcN4rJFi187JWUEkm83SdDLKIRXuau4ci45iuuLYPIOE/IMgREP9gkXY+u5W/HlqLzreSWLL5lKF3k0lkZEA/T//lZ75cDinKvluxbFxz+lebG5/C0OBQfgDIaxqXYOffjwAh7UZGzYtRNehMFatlGaMqKziq+bVwWK183thilMVmW9c0rQK9fW1OHb0MNauew1+fwA3By/wtSNHCD7/4iGc+H0IPp9SBiqDsIY4r6YBTHGynMN4JMT71YJHFmHHp9ux9sUX0LK8FZf6zsBb5eY9Ttd07P3aip7T1VxxZeqaqa2YTBZU1zTwwmMF+U/fOax8ZjX6L/RiSdMKNDctxS8/d/EaEgjlr6qsyOjs9ELTbdi/b7SEM2ODZB5WmxPe6ge58549u7Fjx06E/AM8IgYP3LrG1zhIYC8rQS6Xw6bNPrQsU7H9k6Li7glhBzhdHq649vZ2dHd346NtH+Ljbe9DUVSI7Bm9Y7pOYRQJWPGHAnm0bXwUnZ0xbGhLco9ZIczB7ZkPu7MSiqIgERst9LjpeZ96vgkEAejp0bBx00Ic+y2E5qbs3BB2WEFxmoax0aLipoM0SnkzFQjQ1SVg334fThwfwn9CQ00RDmT15QAAAABJRU5ErkJggg==" alt="">
    <h1><b><center>{{ $details['title'] }}</center></b></h1>
    <p>Quý khách đã đặt hàng thành công sản phẩm:</p>
    <table id="customers">
        <tr>
          <th>Company</th>
          <th>Contact</th>
          <th>Country</th>
        </tr>
        <tr>
          <td>Alfreds Futterkiste</td>
          <td>Maria Anders</td>
          <td>Germany</td>
        </tr>
      </table><br>
      <p>Để kiểm tra lịch sử đặt hàng, quý khách có thể click vào nút dưới đây để chuyển sang lịch sử đặt hàng của quý khách:</p><br>
      <a href="http://localhost:8000/index" target="_blank" class="button">Link</a>

    </div>
      
    
</body>
</html>